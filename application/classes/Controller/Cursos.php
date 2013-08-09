<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cursos extends Controller_Basetemplate
{
	//public $template = "base";
	private $modelCurso;
	
	public function action_index(){
		$this->action_listar();
	}
	
	
	public function before(){
		parent::before();
		if(!$this->modelCurso) $this->modelCurso = Model_Curso::instance();
	}
	
	protected function utf8_bind($paraBlindar,$reverse=false)
	{
		$ParaSubstituir = array("á","é","í","ó","ú",
									"Á","É","Í","Ó","Ú",
									"â","ê","î","ô","û",
									"Â","Ê","Î","Ô","Û",
									"ã","õ","Ã","Õ",
									"ç","Ç","à","À"
								);
		$SubstituirPor  = array("&aacute;","&eacute;","&iacute;","&oacute;","&uacute;",
									"&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;",
									"&acirc;","&ecirc;","&icirc;","&ocirc;","&ucirc;",
									"&Acirc;","&Ecirc;","&Icirc;","&Ocirc;","&Ucirc;",
									"&atilde;","&otilde;","&Atilde;","&Otilde;",
									"&ccedil;","&Ccedil;","&agrave;","&Agrave;");
		
		if(!$reverse)
			$retorno = str_replace($ParaSubstituir,$SubstituirPor,$paraBlindar);
		else
			$retorno = str_replace($SubstituirPor,$ParaSubstituir,$paraBlindar);
		return $retorno;
	}
	
	protected function utf8_fix($paraBlindar)
	{
		$paraBlindar = $this->utf8_bind($paraBlindar);
		return $this->utf8_bind($paraBlindar,true);
	}
	
	
	private function user_required(){
		if(!Auth::instance()->logged_in()){
			$this->auto_render = false;
			HTTP::redirect("/auth/login?".$this->nexturl);
			exit;
		}
	}
	
	
	public function action_lista(){
		
		$context = array(
			"lista_cursos"   => $this->modelCurso->lista_cursos(),
			"recursos_agora" => $this->modelCurso->recursos_agora(),
			"link"           => URL::site("cursos/inscricao/<id>"),
			"exc"            => $this->request->query("exc"),
			"linktarget"     => $this->request->query("exc")?"_parent":"_self",
			"is_ie"          => Request::user_agent('browser')=="Internet Explorer",
		);
		
		$this->template->pageCss = array("lista");
		$this->template->content = View::factory("cursos/lista",$context);
	}
	
	public function action_inscricao_old(){
		$idcurso = $this->request->param("id");
		if(!$idcurso) HTTP::redirect("/");
		$estainscrito = $this->modelCurso->checarInscritoCurso($idcurso);
		
			function get_context_inscrito($turma){
				$context = array();
				$context["inscrito"] = true;
				$context["turma"] = $turma;
				return $context;
			}
			
			function get_context_naoinscrito($next = ""){
				$context = array();
				$context["inscrito"] = false;
					$inscrevertxt = '';
					if(!Auth::instance()->logged_in()){
						$inscrevertxt .= '<div style="width:300px;background:#F7F7FF;float:left;padding:10px;border:1px solid #AAA;">';
						$inscrevertxt .= 'Você precisa <a href="'.URL::site('auth/login').'?'.$next.'">entrar na sua conta</a> para se inscrever neste curso!<br><br>';
						$inscrevertxt .= 'Não tem uma conta? <a href="'.URL::site('auth/cadastro').'">Cadastre-se</a>';
						$inscrevertxt .= '</div>';
					}else{
						$inscrevertxt .= '<button type="submit" id="bt_inscrever" class="btn-blue">Realizar Inscrição</button>';
					}
				$context["inscrever_txt"] = $inscrevertxt;
				return $context;
			}
		
		if($estainscrito){
			$context = get_context_inscrito($estainscrito);
			$context["turma"]["recursos"] = $this->modelCurso->pegarRecursos($idcurso,$context["turma"]["id"]);
			//echo "<pre>".Auth::instance()->get_user()->id."\n";print_r($context["turma"]);die();
		}else{
			$context = get_context_naoinscrito($this->nexturl);
		}
		
		$context["curso"] = $this->modelCurso->info_curso($idcurso);
		
		$this->template->pageCss = array("inscricao");
		$this->template->pageJs  = array("inscricao");
		$this->template->content = View::factory("cursos/inscricao",$context);
	}
	
	public function action_inscricao(){
		$idcurso = $this->request->param("id");
		if(!$idcurso){
			$this->template->content("Você deve especificar um ID para o curso");
			return;
		}
			
		function get_context_naoinscrito($next = ""){
			$context = array();
			$context["inscrito"] = false;
				$inscrevertxt = '';
				if(!Auth::instance()->logged_in()){
					$inscrevertxt .= '<div style="width:300px;background:#F7F7FF;float:left;padding:10px;border:1px solid #AAA;">';
					$inscrevertxt .= 'Você precisa <a href="'.URL::site('auth/login').'?'.$next.'">entrar na sua conta</a> para se inscrever neste curso!<br><br>';
					$inscrevertxt .= 'Não tem uma conta? <a href="'.URL::site('auth/cadastro').'?'.$next.'">Cadastre-se</a>';
					$inscrevertxt .= '</div>';
				}else{
					$inscrevertxt .= '<button type="submit" id="bt_inscrever" class="btn-blue">Realizar Inscrição</button>';
				}
			$context["inscrever_txt"] = $inscrevertxt;
			return $context;
		}
		
		$context = get_context_naoinscrito($this->nexturl);
		
		$context["curso"] = $this->modelCurso->info_curso($idcurso,true);
		
		$inscrevertxt = &$context["inscrever_txt"];
		foreach($context["curso"]["turmas"] as &$turma){
			if($turma["status_inscrito"]==1){
				$inscrevertxt  = '<div style="width:300px;background:#F7F7FF;float:left;padding:10px;border:1px solid #AAA;">';
				$inscrevertxt .= 'Você já está inscrito em uma turma deste curso!<br><br>';
				$inscrevertxt .= '<a href="'.URL::site('cursos/saladeaula/'.$turma['id']).'">Clique aqui</a> para acessar a página da turma.';
				$inscrevertxt .= '</div>';
				break;
			}
		}
		
		//Lista de imagens para cada página de inscrição
		$context["img"][6] = "workshop_online.jpg";
		
		
		$this->template->pageCss = array("inscricao");
		$this->template->pageJs  = array("inscricao");
		$this->template->content = View::factory("cursos/inscricao",$context);
	}
	
	public function action_processainscricao(){
		if($this->modelCurso->checarVagas($this->request->post("id_turma"))){
			$ja_existe = $this->modelCurso->checarInscrito($this->request->post("id_turma"));
			$sucesso = false;
			if(!$ja_existe) $sucesso = $this->modelCurso->inscreverCurso($this->request->post("id_turma"));
			
			$context = array(
				"vagas"     => true,
				"ja_existe" => $ja_existe,
				"sucesso"   => $sucesso,
			);
		}else{
			$context = array(
				"vagas" => false
			);
		}
		
		$this->template->content = View::factory("cursos/cadastrado",$context);
	}
	
	public function action_meuscursos(){
		$this->user_required();
		
		$cursos = $this->modelCurso->pegarCursosInscrito();
		$context = array("lista_cursos"=>$cursos);
		$this->template->pageCss = array("meuscursos");
		$this->template->content = View::factory('cursos/meuscursos',$context);
	}
	
	
	private function criarPaginaCurso($view_name, $current_menu='', $pegarRecursos=false, $extraContext = array()){
		$this->user_required();
		
		$idturma = $this->request->param("id");
		if(!$idturma){
			$this->template->content = "Você deve especificar um ID";
			return;
		}
		
		$inscrito_info = $this->modelCurso->checarInscrito($idturma,true);
		if(!$inscrito_info){
			$this->template->content = "Você não está matriculado nesta turma";
			return;
		}
		
		$idinscrito = $inscrito_info["id"];
		$idstatus = $inscrito_info["status"];
		
		
		$turma = $this->modelCurso->info_turma($idturma);
		if($pegarRecursos){
			$turma["recursos"] = $this->modelCurso->pegarRecursos($turma["id_curso"],$idturma);
			$turma["recursos"] = $this->modelCurso->pegar_anexos_lista($turma["recursos"]);
		}
		$turma["id_inscrito"] = $idinscrito;
		
		
		$context_curso = array(
			"id"=>$turma["id_curso"],
			"nome"=>$this->modelCurso->pegarNomeCurso($turma["id_curso"]),
		);
		
		$context_page = array_merge($extraContext,array(
			"curso"=>$context_curso,
			"turma"=>$turma,
			"certificado"=> ($idstatus==3),
		));
		
		$context = array(
			"curso"=>$context_curso,
			"turma"=>$turma,
			"current"=>$current_menu,
			"curso_content"=>View::factory($view_name,$context_page),
		);
		
		$this->template->show_sidebar = false;
		$this->template->pageCss = isset($this->template->pageCss)?array_merge($this->template->pageCss,array("curso")):array("curso");
		$this->template->content = View::factory('cursos/curso',$context);
	}
	
	public function action_saladeaula(){
		if(substr($this->request->param('id2'),0,6)!='upload'){
					function parseLinks($link,$turma,$recurso){  // Esta função foi criada para mostrar mais de um link dependendo do banco de dados
							if(!function_exists('getLink')){
							function getLink($link,$idx,$turma,$recurso){
								$ll = explode(': ',$link,2);
								$label = 'Acessar Conteúdo';
								$url   = $link;
								if(count($ll)>1){
									$label = $ll[0];
									$url   = $ll[1];
								}
								
								$onclick = "onclick=\"return recurso_acesso($recurso[acesso_apos_curso]);\"";
								
								return
									'<br>
									<a href="'
									.URL::site("cursos/redirectrecurso/$turma[id_inscrito]-$turma[id_curso]-$recurso[id_tipo]-$recurso[id_recurso]-$idx")
									.'" target="_blank" class="btn-blue" '.$onclick.'>'.$label.'</a>';
							}}
							
							$lista = explode("\n", $link);
							foreach($lista as $lk => &$ll){
								$ll = getLink($ll,$lk,$turma,$recurso);
							}
							if(count($lista)<2) return getLink($link,0,$turma,$recurso);
							return implode('<br>',$lista);
					}
			
			$view = 'cursos/curso_saladeaula';
			$this->template->pageJs = array('saladeaula');
			$context = array(
				'recur' => $this->request->query('recur'),
			);
			return $this->criarPaginaCurso($view,'saladeaula',true,$context);
		}else{
			set_time_limit(0);
			$arrayfiles = Validation::factory($_FILES);
			$arrayfiles_expected = array('file1','file2','file3','file4','file5');
			
			$pode_continuar = false;
			$arrayfiles_url = array();
			if($this->request->query('sup')!='' && $this->request->query('sup')!=null){
				$upload_path = 'uploads/curriculos_representantes/';
			}else{
				$upload_path = 'uploads/recursos/';
			}
			
			foreach($arrayfiles_expected as $fkey){
				if(!isset($arrayfiles[$fkey])) continue;
				if(Upload::not_empty($arrayfiles[$fkey])){
					$pode_continuar = true;
					$newfilename = preg_replace('/\s+/u', '_', uniqid().$arrayfiles[$fkey]['name'] );
					
					$uploaded = Upload::save($arrayfiles[$fkey],$newfilename,$upload_path);
					if($uploaded){
						//die($upload_path.$newfilename);
						$arrayfiles_url[] = array($upload_path.$newfilename, $arrayfiles[$fkey]['name']);
					}
				}else{
					unset($file);
				}
			}
			
			
			//echo "<br><br><br><br>";print_r($array);die("</pre>");
			if($pode_continuar && count($arrayfiles_url)<1){
				$this->template->content = 'Erro indefinido ao tentar fazer upload dos arquivos';
				return;
			}
			
			if(!$pode_continuar){
				$this->template->content = 'Você deve fazer upload de, pelo menos, um arquivo. <a href="javascript:history.back();">Voltar</a>';
				return;
			}
			
			
			
			$this->auto_render = false;
			$this->user_required();
			
			$idturma = $this->request->param("id");
			if(!$idturma){
				$this->template->content = "Você deve especificar um ID";
				return;
			}
			
			$inscrito_info = $this->modelCurso->checarInscrito($idturma,true);
			if(!$inscrito_info){
				$this->template->content = "Você não está matriculado nesta turma";
				return;
			}
			
			$idinscrito = $inscrito_info["id"];
			$idstatus = $inscrito_info["status"];
			$idrecurso = substr($this->request->param('id2'),7);
			
			
			
			
			
			$sql1 = "insert into cw_cursos_recursos_uploads (id_inscrito, id_recurso, url, nome_arquivo) values (:id_inscrito,:id_recurso,:url,:anome)";
			foreach($arrayfiles_url as $urll){
				DB::query(Database::INSERT,$sql1)->parameters(array(
					':id_inscrito' => $idinscrito,
					':id_recurso'  => $idrecurso,
					':url'         => $urll[0],
					':anome'       => $urll[1],
				))->execute();
			}
			
			
			$arrnext = explode('#',$this->request->query('next'),2);
			$nexturl = $arrnext[0]."?recur={$idrecurso}";
			if(isset($arrnext[1])) $nexturl .= '#'.$arrnext[1];
			$redirurl = 'http://'.$_SERVER['SERVER_NAME'].$nexturl;
			HTTP::redirect($redirurl);
		}
	}
	
	public function action_saladeaula_visitante(){
					function parseLinks($link){  // Esta função foi criada para mostrar mais de um link dependendo do banco de dados
							if(!function_exists('getLink')){
							function getLink($link){
								$ll = explode(': ',$link,2);
								$label = 'Acessar Conteúdo';
								$url   = $link;
								if(count($ll)>1){
									$label = $ll[0];
									$url   = $ll[1];
								}
								return
									'<br>
									<a href="'
									.$url
									.'" target="_blank" class="btn-blue">'.$label.'</a>';
							}}
							
							$lista = explode("\n", $link);
							foreach($lista as $lk => &$ll){
								$ll = getLink($ll);
							}
							if(count($lista)<2) return getLink($link);
							return implode('<br>',$lista);
					}
		
		$context = array(
			'recur' => $this->request->query('recur'),
		);
		
		$idcurso = $this->request->param("id");
		
		$recursos = $this->modelCurso->pegarTodosRecursos($idcurso);
		
		$context_curso = array(
			"id"=>$idcurso,
			"nome"=>$this->modelCurso->pegarNomeCurso($idcurso),
		);
		
		$context = array(
			"curso"=>$context_curso,
			"recursos"=>$recursos,
		);
		
		$this->template->show_sidebar = false;
		$this->template->pageJs = array('saladeaula');
		$this->template->pageCss = array('curso');
		$this->template->content = View::factory('cursos/curso_saladeaula_visitante',$context);
	}
	
	public function action_redirectrecurso(){
		$this->auto_render = false;
		
		function redirect_fail(){
			//Request::current()->redirect("/");
			HTTP::redirect("/");
			exit;
		}
		
		// Pega variáveis necessárias
		$arr = explode("-",$this->request->param("id"));
		if(count($arr)!=5) redirect_fail();
		$idinscrito = (int) $arr[0];
		$idcurso    = (int) $arr[1];
		$idtipo     = (int) $arr[2];
		$idrecurso  = (int) $arr[3];
		$indexlink  = (int) $arr[4];
		
		// Verifica se o código de inscrito pertence ao usuário atual
		$inscInfo = $this->modelCurso->pegarInfoInscrito($idinscrito);
		if(!$inscInfo || $inscInfo["id_user"]!=Auth::instance()->get_user()->id) redirect_fail();
		
		// Verifica se já existe um registro do usuário para este recurso
		$sql1 = "select count(*) as cont from cw_cursos_recursos_insc where id_inscrito = :id_inscrito and id_recurso = :id_recurso";
		$qry1 = DB::query(Database::SELECT,$sql1)->parameters(array(":id_inscrito"=>$idinscrito,":id_recurso"=>$idrecurso))->execute();
		$res1 = $qry1->as_array();
		if(!$res1[0]['cont']){
			// Insere o registro do usuário para este recurso
			$sql_i = "insert into cw_cursos_recursos_insc (id_inscrito, id_recurso, dh_acesso) values (:id_inscrito, :id_recurso, NOW())";
			$qry_i = DB::query(Database::INSERT,$sql_i)->parameters(array(":id_inscrito"=>$idinscrito,":id_recurso"=>$idrecurso))->execute();
		}
		
		// Pega o link do recurso
		$sql2 = "select link from cw_cursos_recursos where id = :id_recurso and id_curso = :id_curso and id_tipo = :id_tipo limit 1";
		$qry2 = DB::query(Database::SELECT,$sql2)->parameters(array(":id_recurso"=>$idrecurso, ":id_curso"=>$idcurso, ":id_tipo"=>$idtipo))->execute();
		$res2 = $qry2->as_array();
		if(!count($res2)) redirect_fail();
		$link = $res2[0]['link'];
		
		// Escolhe o link de acordo com o index
		$lista_l = explode("\n",$link);
		$verdadeiro_link = $link;
		
		foreach($lista_l as &$lista){
			$ll = explode(': ',$lista,2);
			if(count($ll)>1){
				$lista = $ll[1];
			}
		}
		
		if(isset($lista_l[$indexlink])){
			$verdadeiro_link = $lista_l[$indexlink];
		}else{
			$verdadeiro_link = '/';
		}
		
		// Redireciona
		HTTP::redirect($verdadeiro_link);
		exit;
	}
	
	public function action_certificado() {
		require Kohana::find_file('classes', 'library/fpdf/fpdf');
		
		
		function redirect_fail(&$content){
			$content = "Erro! Não existe um certificado com esta identificação.";
			return;
		}
		
		$user = Auth::instance()->get_user();
		
		// Pega variáveis necessárias
		$arr = explode("-",$this->request->param("id"));
		if(count($arr)!=2) redirect_fail($this->template->content);
		$idinscrito = (int) $arr[0];
		$idcurso    = (int) $arr[1];
		$iduser     = (int) $user->id;
		
		// Verifica se o código de inscrito pertence ao usuário atual
		$inscInfo = $this->modelCurso->pegarInfoInscrito($idinscrito);
		if(!$inscInfo || $inscInfo["id_user"]!=$iduser) redirect_fail($this->template->content);
		
		$sql = "select inscritos.status, turmas.periodo, cursos.nome as curso, cursos.carga_horaria
				from cw_cursos_inscritos as inscritos
				
				left join cw_cursos_turmas as turmas
				on inscritos.id_turma=turmas.id
				
				left join cw_cursos as cursos
				on turmas.id_curso=cursos.id
				
				where inscritos.id = :id_inscrito
				and cursos.id = :id_curso
				and inscritos.id_user = :id_user
				
				limit 1";
		$query = DB::query(Database::SELECT, $sql)->parameters(array(":id_inscrito"=>$idinscrito,":id_curso"=>$idcurso,":id_user"=>$iduser))->execute();
		$resultado = $query->as_array();
		//echo"<pre>";print_r($resultado);die();
		
		$res = $resultado[0];
		
		$nome = $user->nome;
		$nome = $nome;
		//Verifica se já há a palavra "Curso" no nome do curso
		$c = $res['curso'];
		if (preg_match("/Curso/", $c)) {
			$curso = $c;
		}else {
			$curso = 'Curso de '.$c;
		}
		$curso = $curso;
		$periodo = $res['periodo'];
		$periodo = $periodo;
		$horas = $res['carga_horaria'];
	
		$mes = date('m');
		switch ($mes) {
			case 01: $mes = 'Janeiro'; break;
			case 02: $mes = 'Fevereiro'; break;
			case 03: $mes = 'Março'; break;
			case 04: $mes = 'Abril'; break;
			case 05: $mes = 'Maio'; break;
			case 06: $mes = 'Junho'; break;
			case 07: $mes = 'Julho'; break;
			case 08: $mes = 'Agosto'; break;
			case 09: $mes = 'Setembro'; break;
			case 10: $mes = 'Outubro'; break;
			case 11: $mes = 'Novembro'; break;
			case 12: $mes = 'Dezembro'; break;
		}
	
		$data = $mes." de ".date('Y');
		
		
		//Abre o PDF
		$pdf = new FPDF('L', 'mm', 'A4'); //formato paisagem, medida mm, tamanho A4
		$pdf->Open();
		$pdf->AddPage();
		$img = DOCROOT.'resources/img/modelo.jpg';
		$pdf->Image($img, '', '', '297', '210'); //largura, altura
		
		//Texto
		$pdf->SetFont('Arial','',18);
		$pdf->SetY('60'); //localização no eixo Y
		$pdf->Cell(0, 5 ,"Certificamos que", 0, 1,'C'); //largura, altura, texto, sem borda, próximo texto abaixo, centralizado
	
		$pdf->SetFont('Arial','B',36); //fonte, negrito, tamanho
		$pdf->SetTextColor('66', '146', '157');
		$pdf->SetY('75');
		$pdf->Cell(0,5 ,utf8_decode($this->utf8_fix("$nome")),0,1,'C');	
	
		$pdf->SetFont('Arial','',18);
		$pdf->SetTextColor(0,0,0);
		$pdf->SetY('90');
		$pdf->Cell(0,5 ,utf8_decode($this->utf8_fix("foi aprovado em todos os requisitos e avaliações aplicadas no")),0,1,'C');
	
		$pdf->SetY('100');
		$pdf->Cell(0,5 ,utf8_decode($this->utf8_fix("$curso, realizado nos")),0,1,'C');
		
		
		$pdf->SetY('110');
		$pdf->Cell(0,5 ,utf8_decode($this->utf8_fix("$periodo, com carga horária total de $horas.")),0,1,'C');
	
		$pdf->SetY('130');
		$pdf->Cell(0,5 ,utf8_decode($this->utf8_fix("$data")),0,1,'C');
	
		$pdf->Output('certificado.pdf', 'D'); //sugerido nome do arquivo, envia para o browser e dá opção de salvar
		
		$this->template->content = "";
	}
	
	public function action_minhafrequencia() {
			
		$user = Auth::instance()->get_user()->id;

		/*
	
		Select usada para mostrar ao suas presenças dentro de um curso.
		Parâmetro: Número da Inscrição.
		Retorno: Nome das aulas, horas teóricas, horas reais e hora de acesso.
	
		*/
	
		$sql = "
		select
				recursos.id as
			id_recurso,
			recursos.titulo,
				recursos.horas as
			horas_teorico,
				IF (atividades.horas IS NULL, 'Falta', atividades.horas) as
			horas_real,
				IF (atividades.dh_acesso IS NULL, 'N&atilde;o acessado', DATE_FORMAT(atividades.dh_acesso, '%d/%m/%y %H:%i')) as
			hora_acesso
		
		from
			cw_cursos_recursos as recursos
		left join
			cw_cursos as cursos
			on recursos.id_curso = cursos.id
		left join
			cw_cursos_turmas as turmas
			on cursos.id = turmas.id_curso
		left join
			cw_cursos_inscritos as inscritos
			on turmas.id = inscritos.id_turma
		left join
			cw_cursos_recursos_insc as atividades
			on atividades.id_recurso = recursos.id 
			and atividades.id_inscrito = inscritos.id
		left join
			cw_usuarios as usuarios
			on inscritos.id_user = usuarios.id
		
		where
			inscritos.id_user = :id_user
			and inscritos.id_turma = :id_turma
			and recursos.id_tipo = 1
			and recursos.horas > 0
		
		order by recursos.dias_liberacao, recursos.ordem";
	
		$query = DB::query(Database::SELECT, $sql)->parameters( array(":id_user"=>$user,':id_turma'=>$this->request->param('id')) )->execute();
	
		$resultado = $query->as_array();
		
		//$this->template->content = View::factory('cursos/minhafrequencia', array("resultado"=>$resultado));
		$this->criarPaginaCurso('cursos/curso_minhafrequencia','minhafrequencia',false,array("resultado"=>$resultado));
	}
	
	public function action_minhasnotas() {
		
		$user = Auth::instance()->get_user()->id;
		
		/*
	
		Select usada para mostrar ao usuário as suas notas em um determinado curso.
		Parâmetro: Número da Inscrição
		Retorno: Recursos que tem nota, a nota dada e o peso da nota sobre o total.
	
		*/
	
		$sql = "
		select
			recursos.id as id_recurso,
			recursos.titulo,
				IF(atividades.dh_acesso IS NULL, 'N&atilde;o acessado', date_format(atividades.dh_acesso, '%d/%m/%Y %H:%i'))
			as hora_acesso,
				recursos.peso_nota
			as peso,
				IF(atividades.nota IS NULL, 'Aguarde Avaliação', atividades.nota)
			as nota,
				IF(atividades.nota IS NULL, 'Aguarde Avaliação', round((recursos.peso_nota * atividades.nota)/10, 2))
			as nota_avaliacao
	
		from
			cw_cursos_recursos as recursos
		left join
			cw_cursos as cursos
			on recursos.id_curso = cursos.id
	
		left join
			cw_cursos_turmas as turmas
			on cursos.id = turmas.id_curso
	
		left join
			cw_cursos_inscritos as inscritos
			on turmas.id = inscritos.id_turma
	
		left join
			cw_cursos_recursos_insc as atividades
			on atividades.id_recurso = recursos.id 
			and atividades.id_inscrito = inscritos.id
	
		left join
			cwk_users as usuarios
			on inscritos.id_user = usuarios.id
	
		where
			inscritos.id_user = :id_user
			and turmas.id = :id_turma
			and peso_nota > 0
	
		order by recursos.dias_liberacao, recursos.ordem";
	
		$query = DB::query(Database::SELECT, $sql)->parameters( array(':id_user'=>$user, ':id_turma'=>$this->request->param('id')) )->execute();
	
		$resultado = $query->as_array();
		
		/*
		$this->template->pageCss = array("minhasnotas");
		$this->template->content = View::factory('cursos/minhasnotas', array("resultado"=>$resultado));
		*/
		//$this->template->pageCss = array("minhasnotas");
		$this->criarPaginaCurso('cursos/curso_minhasnotas','minhasnotas',false,array('resultado'=>$resultado));
	}
	
	public function action_listar() {
				
			function recursos_agora(){
				$sql1 = 'select
					rec.id as id_recurso,
					rec.id_curso,
					rec.id_tipo,
					rec.turma_acontecendo_agora,
					rec.titulo,
					rec.texto_descricao,
					rec.link,
					cur.nome,
					cur.carga_horaria,
					tur.horarios
				from cw_cursos_recursos as rec
				join cw_cursos as cur on rec.id_curso = cur.id
				join cw_cursos_turmas as tur on tur.id = rec.turma_acontecendo_agora
				where rec.turma_acontecendo_agora is not null';
				
				$qry1 = DB::query(Database::SELECT, $sql1)->execute();
				$retorno = $qry1->as_array();
		
				return $retorno;
			}
		
			function recursos() {
		
				$sql2 = "select
			rec.id as id_recurso,
			rec.id_curso,
			rec.id_tipo,
			rec.titulo,
			rec.texto_descricao,
			rec.link,
			cur.nome,
			cur.carga_horaria,
			tur.periodo,
			tur.horarios
		from cw_cursos_recursos as rec
		join cw_cursos as cur on rec.id_curso = cur.id
		join cw_cursos_turmas as tur on tur.id_curso = cur.id
			where rec.id_tipo=1
			and tur.data_inicio >= current_date
			and tur.status = 0
			group by rec.id_curso";
				
				$qry2 = DB::query(Database::SELECT, $sql2)->execute();
				$retorno2 = $qry2->as_array();
		
				return $retorno2;
			}
		
		
		function mesclarCursos(array $cursos_atuais, array $cursos_futuros){
			function mesclar_esse_curso($procurar_nessa_array, $esse_curso){
				$found = false;
				foreach($procurar_nessa_array as &$pr){
					if($pr['id_curso'] == $esse_curso['id_curso']){
						$pr = $esse_curso;
						$found = true;
						break;
					}
				}
				if(!$found){
					$procurar_nessa_array[] = $esse_curso;
				}
		
				return $procurar_nessa_array;
			}
		
		
			foreach($cursos_atuais as $curso){
				$cursos_futuros = mesclar_esse_curso($cursos_futuros,$curso);
			}
		
			foreach($cursos_futuros as &$curso){
				if(!isset($curso['turma_acontecendo_agora'])) $curso['turma_acontecendo_agora'] = false;
			}
		
			return $cursos_futuros;
		}
		
		
		
		$this->template->pageCss = array("listar");
		$this->template->content = View::factory('cursos/listar');
	}
	
	public function action_cancelar() {
		$inscrito = $this->request->param('id');
		
		if (!$this->request->post('sim')) {
			$this->template->content = View::factory('cursos/cancelar');
		}else {
			$sql = "delete from cw_cursos_inscritos where id = :inscrito";
			$query = DB::query(Database::DELETE, $sql)->param(':inscrito', $inscrito)->execute();
			
			if (!$query) {
				$txterro = 'Não foi possível remover sua inscrição. Por favor, tente novamente.';
				$context = array('txterro' => $txterro);
				$this->template->content = View::factory('cursos/cancelar/'.$inscrito, $context);
			} else {
				$this->template->content = View::factory('cursos/removido');
			}
		}
	}
	
	public function action_inscritos() {
		$turma = $this->request->param('id');
		
		$sql = "select i.id, u.id as id_user, u.nome, u.cargo, u.empresa, p.foto
			from cw_cursos_inscritos as i
			left join cw_cursos_turmas as t on i.id_turma = t.id 
			left join cwk_users as u on u.id = i.id_user
			left join cw_perfil as p on p.id_user = u.id
			where t.id = :turma";
		
		$query = DB::query(Database::SELECT, $sql)->param(':turma', $turma)->execute();
		$context = array('query' => $query);
		
		$this->template->pageCss = array("curso_inscritos");
		$this->criarPaginaCurso('cursos/curso_inscritos','inscritos',false,$context);
	}
	
}
