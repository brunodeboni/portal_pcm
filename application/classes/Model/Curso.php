<?php defined('SYSPATH') or die('No direct script access.');
Session::instance();

class Model_Curso extends Model_Database
{
	private $db;
	
	const INSCREVER_DIAS_ANTES_DO_CURSO = 1;
	
	static private $_instance;
	
	static function instance(){
		if(!self::$_instance) self::$_instance = new Model_Curso();
		return self::$_instance;
	}
	
	
	function lista_cursos($somente_ativos=true,$idcurso=0,$checar_inscrito=false,$pegar_turmas=true){
		$retorno = array();
		$count = 0;
		$idcurso = (int) $idcurso;
		$sql1 = "select id, nome, objetivo, pre_requisitos, carga_horaria, preco from cw_cursos where ativo = 1";
		if($idcurso>0) $sql1 .= " and id = $idcurso and ativo = 1 limit 1";
		$qry1 = DB::query(Database::SELECT,$sql1)->execute($this->db);
		
		if($qry1->count()<=0) return array();
		
		$whereturma = "";
		if($somente_ativos){
			$whereturma = " and data_inicio >= curdate()+interval ".self::INSCREVER_DIAS_ANTES_DO_CURSO." day";
		}
		
		$current_user_id = Auth::instance()->logged_in()?Auth::instance()->get_user()->id:false;
		
		foreach($qry1->as_array() as $res1){
			$retorno[$count] = $res1;
			
			if($pegar_turmas){
				$sql2 = "select * from cw_cursos_turmas where id_curso = '$res1[id]' $whereturma order by data_inicio";
				$qry2 = DB::query(Database::SELECT,$sql2)->execute($this->db);
				$res2 = $qry2->as_array();
				
				if($checar_inscrito){
					foreach($res2 as &$res2s){
						if($current_user_id){
							$sql3 = "select status from cw_cursos_inscritos where id_user = :id_user and id_turma = :id_turma";
							$qry3 = DB::query(Database::SELECT,$sql3)->parameters(array(':id_user'=>$current_user_id,':id_turma'=>$res2s['id']))->execute($this->db)->as_array();
							if(count($qry3)<1) $res2s['status_inscrito'] = 0;
							else $res2s['status_inscrito'] = (int) $qry3[0]['status'];
						}else{
							$res2s['status_inscrito'] = 0;
						}
					}
				}
				
				$retorno[$count]["turmas"] = $res2;
			}
			
			$count++;
		}
		
		if($somente_ativos){
			// retorna só os cursos que possuem pelomenos uma turma
			// se pegar turmas estiver desabilitado vai retornar todas
			$nova_array = array();
			foreach($retorno as $ret){
				if(!isset($ret["turmas"]) || count($ret["turmas"])>0) $nova_array[] = $ret;
			}
			return $nova_array;
		}
		
		return $retorno;
	}
	
	function atualizarAutomaticamenteStatusTurma($id_turma){
		/*$id_turma = (int) $id_turma;
		// Quantidade de inscritos
		$sql1 = "select count(*) as cont from cw_cursos_inscritos where id_turma = $id_turma";
		$qry1 = DB::query(Database::SELECT,$sql1)->execute($this->db);
		$res1 = $qry1->as_array();
		if(!count($res1)) return false;
		$count_inscritos = (int) $res1[0]["cont"];
		// Quantidade máxima que pode ter
		$sql2 = "select max_inscritos, id from cw_cursos where id = (select id_curso from cw_cursos_turmas where id=$id_turma and status=0)";
		$qry2 = DB::query(Database::SELECT,$sql2)->execute($this->db);
		$res2 = $qry2->as_array();
		if(!count($res2)) return false;
		$count_max = (int) $res2[0]["max_inscritos"];
		$id_curso = $res2[0]["id"];
		// Atualiza se necessário
		if($count_inscritos < $count_max) return false;*/
		if(!$this->checarVagas($id_turma)){
			DB::query(Database::UPDATE,"update cw_cursos_turmas set status = 1 where id = $id_turma")->execute($this->db);
			return true;
		}else{
			return false;
		}
	}

	function info_curso($idcurso,$pegar_status_inscrito=false,$somente_ativos=true){
		$curso = $this->lista_cursos($somente_ativos,$idcurso,$pegar_status_inscrito);
		if(count($curso)>0) return $curso[0];
		return false;
	}
	
	function info_turma($idturma){
		$sql1 = "select * from cw_cursos_turmas where id = :idturma limit 1";
		$qry1 = DB::query(Database::SELECT,$sql1)->param(':idturma',$idturma)->execute();
		$res1 = $qry1->as_array();
		if(count($res1)>0) return $res1[0];
		return false;
	}
	
	function info_recurso($id_recurso){
		$sql1 = "select * from cw_cursos_recursos where id = :id_recurso limit 1";
		$qry1 = DB::query(Database::SELECT, $sql1)->param(':id_recurso',$id_recurso)->execute();
		$res1 = $qry1->as_array();
		if(count($res1)>0) return $res1[0];
		return false;
	}
	
	function pegarAlunosTurma($id_turma, $id_recurso=false){
		/*
		$rinsc = ($id_recurso)?'and rin.id_recurso = :id_recurso':'';
		
		$sql1 = "
				select
					ins.id as id_inscrito,
					us.id as id_user,
					us.empresa,
					us.nome,
					us.telefone,
					us.email,
					us.celular,
					rin.id as cw_cursos_recursos_insc,
					rin.id_recurso,
					rin.dh_acesso,
					rin.nota,
					rin.horas
				from cw_cursos_inscritos as ins
				join cwk_users as us on ins.id_user = us.id
				left join cw_cursos_recursos_insc as rin on rin.id_inscrito = ins.id $rinsc
				where ins.id_turma = :id_turma
				";
		*/
		if($id_recurso){
			$sql1 = "select
					ins.id as id_inscrito,
					us.id as id_user,
					us.empresa,
					us.nome,
					us.telefone,
					us.email,
					us.celular,
					rin.id as cw_cursos_recursos_insc,
					rin.id_recurso,
					rin.dh_acesso,
					rin.nota,
					rin.horas
				from cw_cursos_inscritos as ins
				join cwk_users as us on ins.id_user = us.id
				left join cw_cursos_recursos_insc as rin on rin.id_inscrito = ins.id and rin.id_recurso = :id_recurso
				where ins.id_turma = :id_turma";
		}else{
			$sql1 = "select
					ins.id as id_inscrito,
					us.id as id_user,
					us.empresa,
					us.nome,
					us.telefone,
					us.email,
					us.celular
				from cw_cursos_inscritos as ins
				join cwk_users as us on ins.id_user = us.id
				where ins.id_turma = :id_turma";
		}
		
		$qry1 = DB::query(Database::SELECT, $sql1)->parameters(array(
			':id_turma'   => $id_turma,
			':id_recurso' => $id_recurso,
		))->execute();
		$res1 = $qry1->as_array();
		return $res1;
	}
	
	function pegarNomeCurso($id_curso){
		$sql1 = "select nome from cw_cursos where id = :id_curso";
		$qry1 = DB::query(Database::SELECT,$sql1)->param(":id_curso",$id_curso)->execute();
		$res1 = $qry1->as_array();
		if(count($res1)) return $res1[0]["nome"];
		return false;
	}
	
	function checarVagas($idturma){
		$idturma = (int) $idturma;
		$sql1 = "select count(*) as cont from cw_cursos_inscritos where id_turma = $idturma";
		$qry1 = DB::query(Database::SELECT,$sql1)->execute($this->db);
		$res1 = $qry1->as_array();
		$TOTAL_DE_INSCRITOS = (int) $res1[0]["cont"];
		//if((int) $res1[0]["cont"]<40) return true;
		
		$sql2 = "select max_inscritos, id from cw_cursos where id = (select id_curso from cw_cursos_turmas where id=$idturma and status=0)";
		$qry2 = DB::query(Database::SELECT,$sql2)->execute($this->db);
		$res2 = $qry2->as_array();
		if(!count($res2)) return false;
		$TOTAL_DE_VAGAS = (int) $res2[0]['max_inscritos'];
		
		if($TOTAL_DE_INSCRITOS < $TOTAL_DE_VAGAS){
			return true;
		}
		
		return false;
	}
	
	function checarInscritoCurso($idcurso,$user=false){
		$idcurso = (int) $idcurso;
		if(!$user) $user = Auth::instance()->get_user();
		if(!$user) return false;
		
		// Turmas do curso
		$sql1 = "select * from cw_cursos_turmas where id_curso = $idcurso";
		$qry1 = DB::query(Database::SELECT,$sql1)->execute($this->db);
		if(!$qry1->count()) return false;
		$res1 = $qry1->as_array();
		
		$inscrito = false;
		foreach($res1 as $row){
			if($this->checarInscrito($row['id'])){
				$inscrito = $row;
				break;
			}
		}
		return $inscrito;
	}
	
	function checarInscrito($idturma,$fetch_all=false,$user=false){
		$idturma = (int) $idturma;
		if(!$user) $user = Auth::instance()->get_user();
		if(!$user) return false;
		
		$campos = array("id");
		if($fetch_all){
			$campos = array("id","id_user","id_turma","dh_inscrito","status");
		}
		
		$sql1 = "select ".implode(",",$campos)." from cw_cursos_inscritos where id_turma = $idturma and id_user = ".$user->id;
		$qry1 = DB::query(Database::SELECT,$sql1)->execute($this->db);
		$res1 = $qry1->as_array();
		if(count($res1)) if(!$fetch_all) return $res1[0]["id"]; else return $res1[0];
		return false;
	}
	
	function pegarInfoInscrito($id_inscrito){
		$sql1 = "select id as id_inscrito, id_user, id_turma from cw_cursos_inscritos where id = :id_inscrito order by id desc limit 1";
		$qry1 = DB::query(Database::SELECT,$sql1)->parameters(array(":id_inscrito"=>$id_inscrito))->execute();
		$res1 = $qry1->as_array();
		if(!count($res1)) return false;
		return $res1[0];
	}
	
	function inscreverCurso($idturma,$user=false){
		if(!$user) $user = Auth::instance()->get_user();
		if(!$user) return false;
		
		/*
		$required_fields = array("id_turma","nome","empresa","cargo","telefone","celular","email","como_conheceu");
		$required_values = array();
		foreach($required_fields as $req){
			if(!isset($user->$req)) return false;
			$required_values[] = "'".mysql_real_escape_string($user->$req)."'";
		}
		
		$sql1 = "insert into cw_cursos_inscritos (".implode(",",$required_fields).") values (".implode(",",$required_values).")";
		*/
		$sql1 = "insert into cw_cursos_inscritos (id_user, id_turma) values (".$user->id.",$idturma)";
		$qry1 = DB::query(Database::INSERT,$sql1)->execute($this->db);
		$this->atualizarAutomaticamenteStatusTurma($idturma);
		$this->cria_turma($idturma);
		if($qry1) return true;
		else return false;
	}
	
	function cria_turma($id_turma) {
		//Seleciona total de inscritos na turma e o máximo de inscritos permitidos -2
		$sql = "select count(i.id) as total, c.max_inscritos-2 as q
				from cw_cursos_inscritos as i
	
				left join cw_cursos_turmas as t
				on t.id=i.id_turma
	
				left join cw_cursos as c
				on c.id=t.id_curso
	
				where i.id_turma = :id_turma";
		$query = DB::query(Database::SELECT,$sql)->parameters(array(":id_turma"=>$id_turma))->execute();
		$res = $query->as_array();
	
		//Se a turma já alcançou o máximo de inscritos-2
		if($res[0]['total'] == $res[0]['q']){
			//Dados para a criação da nova turma
			$s = "select t.id_curso, t.turno, t.horarios, c.carga_horaria 
				from cw_cursos_turmas as t
				join cw_cursos as c on t.id_curso = c.id
				where t.id = :id_turma";
			$q = DB::query(Database::SELECT, $s)->param(':id_turma', $id_turma)->execute();
			$r = $q->as_array();
			$id_curso = $r['id_curso'];
			$turno = $r['turno'];
			$horarios = $r['horarios'];
			$carga_horaria = $r['carga_horaria'];
			
			$sql2 = "select t.data_inicio, current_date as hoje,
			date_add(t.data_inicio, interval 7 day) as nova_data_inicio,
						
			day(date_add(t.data_inicio, interval 7 day)) as novo_dia,
			month(date_add(t.data_inicio, interval 7 day)) as novo_mes,
											
			day(date_add(t.data_inicio, interval 8 day)) as novo_dia1,
			month(date_add(t.data_inicio, interval 8 day)) as novo_mes1,
											
			day(date_add(t.data_inicio, interval 9 day)) as novo_dia2,
			month(date_add(t.data_inicio, interval 9 day)) as novo_mes2
										
			from cw_cursos_turmas as t
			join cw_cursos as c on t.id_curso = c.id
			
			order by t.data_inicio desc
			limit 1";
			$query2 = DB::query(Database::SELECT,$sql2)->execute();
			$res2 = $query2->as_array();

			//Cria período da nova turma
			$novo_dia = $res2[0]['novo_dia'];
			$novo_dia1 = $res2[0]['novo_dia1'];
			$novo_dia2 = $res2[0]['novo_dia2'];
			$novo_mes = $res2[0]['novo_mes'];
			$novo_mes1 = $res2[0]['novo_mes1'];
			$novo_mes2 = $res2[0]['novo_mes2'];
				
			switch ($novo_mes) {
				case "1": $novo_mes = "janeiro"; break;
				case "2": $novo_mes = "fevereiro"; break;
				case "3": $novo_mes = "março"; break;
				case "4": $novo_mes = "abril"; break;
				case "5": $novo_mes = "maio"; break;
				case "6": $novo_mes = "junho"; break;
				case "7": $novo_mes = "julho"; break;
				case "8": $novo_mes = "agosto"; break;
				case "9": $novo_mes = "setembro"; break;
				case "10": $novo_mes = "outubro"; break;
				case "11": $novo_mes = "novembro"; break;
				case "12": $novo_mes = "dezembro"; break;
			}
				
			switch ($novo_mes1) {
				case "1": $novo_mes1 = "janeiro"; break;
				case "2": $novo_mes1 = "fevereiro"; break;
				case "3": $novo_mes1 = "março"; break;
				case "4": $novo_mes1 = "abril"; break;
				case "5": $novo_mes1 = "maio"; break;
				case "6": $novo_mes1 = "junho"; break;
				case "7": $novo_mes1 = "julho"; break;
				case "8": $novo_mes1 = "agosto"; break;
				case "9": $novo_mes1 = "setembro"; break;
				case "10": $novo_mes1 = "outubro"; break;
				case "11": $novo_mes1 = "novembro"; break;
				case "12": $novo_mes1 = "dezembro"; break;
			}
				
			switch ($novo_mes2) {
				case "1": $novo_mes2 = "janeiro"; break;
				case "2": $novo_mes2 = "fevereiro"; break;
				case "3": $novo_mes2 = "março"; break;
				case "4": $novo_mes2 = "abril"; break;
				case "5": $novo_mes2 = "maio"; break;
				case "6": $novo_mes2 = "junho"; break;
				case "7": $novo_mes2 = "julho"; break;
				case "8": $novo_mes2 = "agosto"; break;
				case "9": $novo_mes2 = "setembro"; break;
				case "10": $novo_mes2 = "outubro"; break;
				case "11": $novo_mes2 = "novembro"; break;
				case "12": $novo_mes2 = "dezembro"; break;
			}
				
			//Se são 2 dias de aula
			if ($carga_horaria < 9) {
				//se o primeiro e segundo dias forem no mesmo mês
				if ($novo_mes == $novo_mes1) {
					$periodo = 'Dias '.$novo_dia.' e '.$novo_dia1.' de '.$novo_mes.'';
				}else {
					$periodo = 'Dias '.$novo_dia.' de '.$novo_mes.' e '.$novo_dia1.' de '.$novo_mes1.'';
				}
			}else { //ou 3 dias de aula
				//se os 3 dias forem no mesmo mês
				if( ($novo_mes == $novo_mes1) && ($novo_mes == $novo_mes2) ) {
					$periodo = 'Dias '.$novo_dia.', '.$novo_dia1.' e '.$novo_dia2.' de '.$novo_mes.'';
				}else if ( ($novo_mes == $novo_mes1) && ($novo_mes != $novo_mes2) ) {
					$periodo = 'Dias '.$novo_dia.' e '.$novo_dia1.' de '.$novo_mes.' e '.$novo_dia2.' de '.$novo_mes2.'';
				}else if ($novo_mes != $novo_mes1) {
					$periodo = 'Dias '.$novo_dia.' de '.$novo_mes.', '.$novo_dia1.' e '.$novo_dia2.' de '.$novo_mes2.'';
				}
			}
				
			//Cria outra turma
			$sql3 = "insert into cw_cursos_turmas
			(id_curso, data_publicacao, data_inicio, periodo, status, vezes_postergado, turno, horarios)
			values (:id_curso, :hoje, :nova_data_inicio, :periodo, '0', '0', :turno, :horarios)";
			$query3 = DB::query(Database::INSERT,$sql3)->parameters(array(
					":id_curso" => $id_curso,
					":hoje" => $res2[0]['hoje'],
					":nova_data_inicio" => $res2[0]['nova_data_inicio'],
					":periodo" => $periodo,
					":turno" => $turno,
					":horarios" => $horarios
			))->execute();
			
		}
	}
	
	function pegarTodosRecursos($idcurso,$apenas_publicados=true){
		$publicados_where = '';
		if($apenas_publicados){
			$publicados_where = 'and recursos.publicado = 1';
		}
		$sql1 = "select
						recursos.id as id_recurso,
						tipos.id as id_tipo,
						recursos.dias_liberacao, /*Usar */
						recursos.titulo,
						recursos.texto_descricao,
						recursos.link,
						recursos.publicado,
						recursos.horas,
						recursos.peso_nota,
						recursos.turma_acontecendo_agora,
						tipos.descricao

					from
						cw_cursos_recursos as recursos
					left join
						cw_cursos as cursos
						on recursos.id_curso = cursos.id
					left join
						cw_tipos_recursos as tipos
						on recursos.id_tipo = tipos.id
					where
						cursos.id = :id_curso
						$publicados_where
					order by recursos.dias_liberacao, recursos.ordem";
		$qry1 = DB::query(Database::SELECT, $sql1)
				->parameters(array(':id_curso'=>$idcurso))
				->execute($this->db);
		$recursos = $qry1->as_array();
		
		return $recursos;
	}
	
	function pegarRecursos($idcurso,$idturma=null,$admin=false){
		if($admin){
			$sql1 = "select id, titulo, dias_liberacao, turma_acontecendo_agora from cw_cursos_recursos where id_curso = :id_curso and horas>0 order by dias_liberacao, ordem";
			$params = array(':id_curso'=>$idcurso);
			
		}else{
			$sql1 = "select
						recursos.id as id_recurso,
						inscritos.id as id_inscrito,
						turmas.id as id_turma,
						turmas.data_inicio,
						tipos.id as id_tipo,
						recursos.dias_liberacao, /*Usar */
						recursos.titulo,
						recursos.texto_descricao,
						recursos.link,
						recursos.turma_acontecendo_agora,
						tipos.descricao,
						recursos.acesso_apos_curso

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
						on atividades.id_recurso = recursos.id and atividades.id_inscrito = inscritos.id

					left join
						cwk_users as usuarios
						on inscritos.id_user = usuarios.id

					left join
						cw_tipos_recursos as tipos
						on recursos.id_tipo = tipos.id

					where
						cursos.id = :id_curso
					and
						turmas.id = :id_turma
					and
						usuarios.id = :id_user
					and
						recursos.dias_liberacao <= datediff(current_date, turmas.data_inicio) /* Verifica se o recurso está liberado em relação ao início do curso*/

					order by recursos.dias_liberacao, recursos.ordem";
			
			$params = array(":id_user"=>Auth::instance()->get_user()->id,":id_curso"=>$idcurso,":id_turma"=>$idturma);
		}
		
		
		$qry1 = DB::query(Database::SELECT, $sql1)
				->parameters($params)
				->execute($this->db);
		$recursos = $qry1->as_array();
		
		
		// Adicionar as datas de liberação junto ao dia da semana de cada curso
		if(!$admin)
		foreach($recursos as &$recurso){
			$dias = $recurso["dias_liberacao"];
			$data_inicio = $recurso["data_inicio"];
			
			$sql2 = "select
					date_format(adddate('$data_inicio',$dias),'%d/%m/%Y') as data_liberacao,
					weekday(adddate('$data_inicio',$dias)) as dia_semana";
			$qry2 = DB::query(Database::SELECT, $sql2)->execute();
			$res2 = $qry2->as_array();
			
			$recurso["data_liberacao"] = $res2[0]["data_liberacao"];
			$recurso["dia_semana"] = $res2[0]["dia_semana"];
			switch($recurso["dia_semana"]){
				case 0: $recurso["dia_semana"] = "Segunda-feira"; break;
				case 1: $recurso["dia_semana"] = "Terça-feira"; break;
				case 2: $recurso["dia_semana"] = "Quarta-feira"; break;
				case 3: $recurso["dia_semana"] = "Quinta-feira"; break;
				case 4: $recurso["dia_semana"] = "Sexta-feira"; break;
				case 5: $recurso["dia_semana"] = "Sábado"; break;
				case 6: $recurso["dia_semana"] = "Domingo"; break;
			}
		}
		
		return $recursos;
	}
	
	
	
	function pegarCursosInscrito($user = false){
		if(!$user) $user = Auth::instance()->get_user();
		$sql1 = "select
					inscritos.id as inscrito,
					cursos.id as id_curso,
					cursos.nome,
					turmas.data_inicio,
					turmas.id as id_turma,
					turmas.periodo,
					turmas.horarios,
					inscritos.id as num_inscricao,
						case inscritos.status 
						when 1 then 'Inscrito'
						when 2 then 'Inscrição Cancelada'
						when 3 then 'Aprovado'
						when 4 then 'Reprovado'
						else 'Status não reconhecido'
						end
					as status_matricula,
					inscritos.status

				from
					cwk_users as usuarios 
				
				left join
					cw_cursos_inscritos as inscritos
					on inscritos.id_user = usuarios.id
				left join
					cw_cursos_turmas as turmas
					on inscritos.id_turma = turmas.id
				left join
					cw_cursos as cursos
					on cursos.id = turmas.id_curso
				
				where
					usuarios.id = :id_user /*Colocar aqui o id do usuário que acessou o Sistema*/";
		
		$qry1 = DB::query(Database::SELECT, $sql1)->param(":id_user",$user->id)->execute();
		return $qry1->as_array();
	}
	
	
	public function pegarDiario($idturma,$idrecurso){
		$sql1 =
		'
			select
				usuarios.id as id_user,
				atividades.id as id_atividade,
				recursos.id as id_recurso,
				turmas.id as id_turma,
				usuarios.nome,
				atividades.dh_acesso,
				recursos.horas as horas_teorico,
				atividades.horas as horas_real
				
			from
				cw_cursos_turmas as turmas
			left join
				cw_cursos as cursos
				on turmas.id_curso = cursos.id
			left join
				cw_cursos_recursos as recursos
				on recursos.id_curso = cursos.id
			left join
				cw_cursos_inscritos as inscritos
				on inscritos.id_turma = turmas.id
			left join
				cwk_users as usuarios
				on inscritos.id_user = usuarios.id
			right join
				cw_cursos_recursos_insc as atividades
				on atividades.id_inscrito = inscritos.id and atividades.id_recurso = recursos.id
				
			where
				turmas.id = :id_turma /*Colocar aqui o id da turmaque se está pesquisando*/
				and
					recursos.id = :id_recurso /*Colocar aqui o ID da aula que se está pesquisando
			/*and
				recursos.horas > 0 /*Para verificar somente atividades que contam como horas*/
		';
		
		$qry1 = DB::query(Database::SELECT,$sql1)->parameters(array(':id_turma'=>$idturma,':id_recurso'=>$idrecurso))->execute();
		$res1 = $qry1->as_array();
		return count($res1)?$res1:array();
	}
	
	public function recursos_agora(){
		$sql1 = 'select
					rec.id as id_recurso,
					rec.id_curso,
					rec.id_tipo,
					rec.turma_acontecendo_agora,
					insc.id as id_inscrito,
					rec.titulo,
					rec.texto_descricao,
					rec.link,
					cur.nome,
					tur.horarios
				from cw_cursos_recursos as rec
				join cw_cursos as cur on rec.id_curso = cur.id
				join cw_cursos_turmas as tur on tur.id = rec.turma_acontecendo_agora
				left join cw_cursos_inscritos as insc on insc.id_user = :id_user
					and insc.id_turma = rec.turma_acontecendo_agora
				where rec.turma_acontecendo_agora is not null';
		
		$id_user = -1;
		if(Auth::instance()->logged_in()) $id_user = Auth::instance()->get_user()->id;
		
		$qry1 = DB::query(Database::SELECT, $sql1)->param(':id_user',$id_user)->execute();
		$res1 = $qry1->as_array();
		return $res1;
	}
	
	public function pegar_anexos_lista($recursos){
		$sql1 = "select * from cw_cursos_recursos_uploads where id_inscrito = :iid and id_recurso = :rid";
		
		foreach($recursos as &$recurso){
			if($recurso['id_tipo'] == 9){
				$qry1 = DB::query(Database::SELECT,$sql1)->parameters(array(':iid'=>$recurso['id_inscrito'],':rid'=>$recurso['id_recurso']))->execute();
				$recurso['anexos'] = $qry1->as_array();
			}
		}
		
		return $recursos;
	}
	
}