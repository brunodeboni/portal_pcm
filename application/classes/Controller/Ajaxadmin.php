<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajaxadmin extends Controller_Base
{
	private function onlyAdmins()
	{
		return;
		// Usuário não está logado
		if(!Auth::instance()->logged_in()){
			HTTP::redirect('auth/login?'.$this->nexturl);
			exit;
		}
		
		// Usuário não tem permissão
		if(!Auth::instance()->logged_in('admin')){
			HTTP::redirect('/');  // está redirecionando para "/", mas deve ir pra uma página 403
			exit;
		}
	}
	
	public function before()
	{
		parent::before();
		$this->onlyAdmins();
	}
	
	public function action_salvardiariodeclasse()
	{
		$id_recurso   = (int) $this->request->post('idr');
		$horas        = (float) $this->request->post('horas');
		
		if($this->request->post('ida')!='novo'){
			$id_atividade = (int) $this->request->post('ida');
			$sql1 = 'update cw_cursos_recursos_insc set horas = :horas where id = :id_atividade and id_recurso = :id_recurso';
			DB::query(Database::UPDATE,$sql1)->parameters(array(':horas'=>$horas, ':id_atividade'=>$id_atividade, ':id_recurso'=>$id_recurso))->execute();
			die();
		}else{
			$id_inscrito = (int) $this->request->post('idi');
			$sql2 = 'insert into cw_cursos_recursos_insc (id_inscrito,id_recurso,dh_acesso,horas) values (:idi, :idr, NOW(), :horas)';
			DB::query(Database::INSERT,$sql2)->parameters(array(':idi'=>$id_inscrito, ':idr'=>$id_recurso, ':horas'=>$horas))->execute();
			die();
		}
	}
	
	public function action_salvaratividadesalunos()
	{
		$id_recurso   = (int) $this->request->post('idr');
		if ($this->request->post('horas') == '')
			$horas = null;
		else 
			$horas = floatval($this->request->post('horas'));
		
		if ($this->request->post('nota') == '') 
			$nota = null;
		else 
			$nota = floatval($this->request->post('nota'));
	
		if($this->request->post('ida')!='novo'){
			$id_atividade = (int) $this->request->post('ida');
			$sql1 = 'update cw_cursos_recursos_insc set horas = :horas, nota = :nota where id = :id_atividade and id_recurso = :id_recurso';
			DB::query(Database::UPDATE,$sql1)->parameters(array(':horas'=>$horas, ':nota'=>$nota, ':id_atividade'=>$id_atividade, ':id_recurso'=>$id_recurso))->execute();
			die();
		}else{
			$id_inscrito = (int) $this->request->post('idi');
			$sql2 = 'insert into cw_cursos_recursos_insc (id_inscrito,id_recurso,dh_acesso,horas,nota) values (:idi, :idr, NOW(), :horas, :nota)';
			DB::query(Database::INSERT,$sql2)->parameters(array(':idi'=>$id_inscrito, ':idr'=>$id_recurso, ':horas'=>$horas, ':nota'=>$nota,))->execute();
			die();
		}
	}
	
	public function action_salvarnota()
	{
		$id_recurso   = (int) $this->request->post('idr');
		$nota         = (float) $this->request->post('nota');
			
		if($this->request->post('ida')!='novo'){
			$id_atividade = (int) $this->request->post('ida');
			$sql1 = 'update cw_cursos_recursos_insc set nota = :nota where id = :id_atividade and id_recurso = :id_recurso';
			DB::query(Database::UPDATE,$sql1)->parameters(array(':nota'=>$nota, ':id_atividade'=>$id_atividade, ':id_recurso'=>$id_recurso))->execute();
			die();
		}else{
			$id_inscrito = (int) $this->request->post('idi');
			$sql2 = 'insert into cw_cursos_recursos_insc (id_inscrito,id_recurso,dh_acesso,nota) values (:idi, :idr, NOW(), :nota)';
			DB::query(Database::INSERT,$sql2)->parameters(array(':idi'=>$id_inscrito, ':idr'=>$id_recurso, ':nota'=>$nota))->execute();
			die();
		}
	}
	
	public function action_salvaraprovado()
	{
		$id_user     = (int) $this->request->post('idu');
		$id_turma    = (int) $this->request->post('idt');
		$id_inscrito = (int) $this->request->post('idi');
		$status      = (int) $this->request->post('status');
		
		$sql1 = 'update cw_cursos_inscritos set status = :status where id_user = :idu and id_turma = :idt and id = :idi';
		DB::query(Database::UPDATE,$sql1)->parameters(array(':status'=>$status, ':idu'=>$id_user, ':idt'=>$id_turma, ':idi'=>$id_inscrito))->execute();
		die();
	}
	
	public function action_ban_alunos()
	{
		$turma     = $this->request->post('id_turma');
		$stralunos = $this->request->post('lista_alunos');
		$alunos    = explode(',',$stralunos);
		if(!($turma && $stralunos && count($alunos))) die("error, missing args");
		
		
		foreach($alunos as $aluno){
			$aluno = explode('_',$aluno);
			/**
			* $aluno[0] = «ID_USER»
			* $aluno[1] = «ID_INSCRITO»
			*/
			
			$params = array(
				':id_inscrito' => $aluno[1],
				':id_user'     => $aluno[0],
				':id_turma'    => $turma,
			);
			
			/*
			echo "<pre>";
			print_r($params);
			die("\r\n \r\n \r\n".$sql1);
			*/
			$sql1 = "delete from cw_cursos_inscritos where id = :id_inscrito and id_user = :id_user and id_turma = :id_turma";
			echo "\ndeletando > ".$aluno[0];
			DB::query(Database::DELETE,$sql1)->parameters($params)->execute();
		}
	}
	
	public function action_terminar_aula_agora()
	{
		$rec_id = $this->request->post('rec');
		$sql1 = 'update cw_cursos_recursos set turma_acontecendo_agora = NULL where id = :idrec';
		DB::query(Database::UPDATE,$sql1)->parameters(array(':idrec'=>$rec_id))->execute();
	}
	
	public function action_iniciar_aula_agora()
	{
		$rec_id = $this->request->post('rec');
		$turma_id = $this->request->post('turma');
		
		$sql1 = 'update cw_cursos_recursos set turma_acontecendo_agora = :idtur where id = :idrec';
		DB::query(Database::UPDATE,$sql1)->parameters(array(':idrec'=>$rec_id,':idtur'=>$turma_id))->execute();
	}
	
	/**
	 * Pega todos os alunos de um curso, verifica se o aluno tem
	 * as presenças e notas necessárias pra ser aprovado.
	 * Se tiver, aprova o aluno, caso contrário, reprova.
	 */
	public function action_avaliarturma()
	{
		// Configurações da função
		// % de nota e horas necessária para passar
		// (Obs.: somente número de 0 a 100 sem '%')
		$APROVACAO_NOTA  = 70;
		$APROVACAO_HORAS = 75;
		
		// Pega alunos da turma
		$id_turma = $this->request->post('turma');
		$alunos   = Model_Admincurso::instance()->pegarAlunosTurmaInfo($id_turma);
		
		// Pegar recursos da turma
		$sql_r = 'select * from cw_cursos_recursos where id_curso = :id_curso and (peso_nota > 0 or horas > 0)';
		$qry_r = DB::query(Database::SELECT,$sql_r)->parameters(array(':id_curso' => $alunos[0]['id_curso']))->execute();
		$recursos = $qry_r->as_array();
		
		// Separar recursos de NOTA e HORAS
		$recursos_horas = array();
		$recursos_notas = array();
		// Total de NOTA e HORAS
		$nota_total  = 0.0;
		$horas_total = 0.0;
		// Código para as duas operações acima
		foreach($recursos as $recurso){
			if((float)$recurso['horas']>0.00) {
				$recursos_horas[] = $recurso;
				$horas_total += (float)$recurso['horas'];
			}
			if((float)$recurso['peso_nota']>0.00) {
				$recursos_notas[] = $recurso;
				$nota_total += (float)$recurso['peso_nota'];
			}
		}
		
		
		// Valida presenças e notas desses alunos
		// e atualiza o status deles
		$sqlk = 'select * from cw_cursos_recursos_insc where id_inscrito = :idi';
		foreach($alunos as &$aluno){
			// Pega todas as notas/horas do aluno
			$qryk = DB::query(Database::SELECT,$sqlk)->parameters(array(':idi'=>$aluno['id_inscrito']))->execute();
			$resk = $qryk->as_array();
			
			// Colocar nota e horas no array de aluno
			if(!isset($aluno['nota'])){
				$aluno['nota']  = 0.0;
				$aluno['horas'] = 0.0;
			}
			
			// Adiciona nota e horas ao aluno
			foreach($resk as $reskk){
				// Nota do aluno ( peso_nota * %(nota) )
				if((float)$reskk['nota']>0.0){
					foreach($recursos_notas as $recn){
						if($recn['id'] == $reskk['id_recurso']){
							$aluno['nota'] += $recn['peso_nota'] * ((float)$reskk['nota']/10);
						}
					}
					
				}
				// Horas do aluno
				if((float)$reskk['horas']>0.0){
					$aluno['horas'] += (float)$reskk['horas'];
				}
			}
			
			// Calcula a porcentagem de notas e horas de cada aluno
			$aluno['_total_nota']        = $nota_total;
			$aluno['_total_horas']       = $horas_total;
			$aluno['porcentagem_nota']   = round( (($aluno['nota']*100) / $nota_total),   2);
			$aluno['porcentagem_horas']  = round( (($aluno['horas']*100) / $horas_total), 2);
			
			// Verifica se o aluno está aprovado ou reprovado
			$aluno['APROVADO'] = ($aluno['porcentagem_nota'] >= $APROVACAO_NOTA) && ($aluno['porcentagem_horas'] >= $APROVACAO_HORAS);
			
			// Grava os dados desse aluno no banco de dados
			$status = ($aluno['APROVADO'])?3:4;
			$sql_as = 'update cw_cursos_inscritos as i
						set
							i.status      = :st,
							i.nota_final  = :nota,
							i.horas_final = :horas
						where
							i.id       = :id_inscrito
						and i.id_user  = :id_user
						and i.id_turma = :id_turma
						';
			$qry_as = DB::query(Database::UPDATE, $sql_as)->parameters(array(
							':st'    => $status,
							':nota'  => $aluno['porcentagem_nota'],
							':horas' => $aluno['porcentagem_horas'],
							':id_inscrito' => $aluno['id_inscrito'],
							':id_user'     => $aluno['id_user'],
							':id_turma'    => $aluno['id_turma'],
						))->execute();
		}
		
		//var_dump($alunos);
		die('true');
	}
	
	public function action_salvarEmpresas()
	{
		die('ok');
	}
}