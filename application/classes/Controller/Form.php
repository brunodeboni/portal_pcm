<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Form extends Controller_Basetemplate
{
	public function action_queremos_lhe_conhecer()
	{
		if (!$this->request->post()) {
			$id_user = Auth::instance()->get_user()->id;
			if (!$this->verificaPreencheu($id_user)) {
				$this->template->content = "Você já preencheu este questionário.";
			}else {
				$this->template->pageJs  = array('forms');
				$this->template->pageCss = array('forms');
				$this->template->content = View::factory('form/queremos_lhe_conhecer');
			}	
		}else {
			$id_user = Auth::instance()->get_user()->id;
			
			//Se não usou software PCM
			if ($this->request->post('como_controle_manutencao')) {
				
				if ($this->request->post('experiencia')) {
					$exp_pcm = $this->request->post('exp_pcm');
					$experiencia = $this->request->post('experiencia');
					$utilizou_software_pcm = $this->request->post('utilizou_software_pcm');
					$como_controle_manutencao = $this->request->post('como_controle_manutencao');
						
					$sql = "insert into cw_queremos_lhe_conhecer
					(id_user, exp_pcm, experiencia, utilizou_software_pcm, como_controle_manutencao)
					values (:id_user, :exp_pcm, :experiencia, :utilizou_software_pcm, :como_controle_manutencao)";
					$query = DB::query(Database::INSERT, $sql)->parameters(array(
							':id_user' => $id_user,
							':exp_pcm' => $exp_pcm,
							':experiencia' => $experiencia,
							':utilizou_software_pcm' => $utilizou_software_pcm,
							':como_controle_manutencao' => $como_controle_manutencao
					))->execute();
					
					$sql1 = "update cwk_users set conhecer = 1 where id = :id_user";
					$q1 = DB::query(Database::UPDATE, $sql1)->param(':id_user', $id_user)->execute();
					
					if ($query) {
						//$this->template->pageCss = array('forms');
						$this->template->content = View::factory('form/enviado');
							
					}else {
						$txterro = "Não foi possível registrar suas respostas. Por favor, tente novamente.";
							
						$this->template->pageJs  = array('forms');
						$this->template->pageCss = array('forms');
						$this->template->content = View::factory('form/queremos_lhe_conhecer', $txterro);
					}
				}else { //nunca usou PCM
				
					$exp_pcm = $this->request->post('exp_pcm');
					$como_controle_manutencao = $this->request->post('como_controle_manutencao');
					
					$sql = "insert into cw_queremos_lhe_conhecer
					(id_user, exp_pcm, como_controle_manutencao)
					values (:id_user, :exp_pcm, :como_controle_manutencao)";
					$query = DB::query(Database::INSERT, $sql)->parameters(array(
							':id_user' => $id_user,
							':exp_pcm' => $exp_pcm,
							':como_controle_manutencao' => $como_controle_manutencao
					))->execute();

					$sql1 = "update cwk_users set conhecer = 1 where id = :id_user";
					$q1 = DB::query(Database::UPDATE, $sql1)->param(':id_user', $id_user)->execute();
					
					if ($query) {
						//$this->template->pageCss = array('forms');
						$this->template->content = View::factory('form/enviado');
					
					}else {
						$txterro = "Não foi possível registrar suas respostas. Por favor, tente novamente.";
					
						$this->template->pageJs  = array('forms');
						$this->template->pageCss = array('forms');
						$this->template->content = View::factory('form/queremos_lhe_conhecer', $txterro);
					}
				}
			}else { //Usou PCM
				//Pega os dados
				$exp_pcm = $this->request->post('exp_pcm');
					
				$experiencia = $this->request->post('experiencia');
					
				$utilizou_software_pcm = $this->request->post('utilizou_software_pcm');
					
				$software_nome = $this->request->post('software_nome');
					
				$software_nota = $this->request->post('software_nota');
					
				$software_recursos_utilizados = $this->request->post('software_recursos_utilizados');
				$sru = $this->transformaString($software_recursos_utilizados);
					
				$software_dificuldades = $this->request->post('software_dificuldades');
				$sd = $this->transformaString($software_dificuldades);
					
				$relatorios_diarios = $this->request->post('relatorios_diarios');
				$rd = $this->transformaString($relatorios_diarios);
					
				$relatorios_gerencia = $this->request->post('relatorios_gerencia');
				$rg = $this->transformaString($relatorios_gerencia);
					
				$relatorios_graficos = $this->request->post('relatorios_graficos');
				$rgr = $this->transformaString($relatorios_graficos);
					
				$maiores_desafios = $this->request->post('maiores_desafios');
				$md = $this->transformaString($maiores_desafios);
					
				$controle_manutencao = $this->request->post('controle_manutencao');
				$cm = $this->transformaString($controle_manutencao);
					
				$descrever_formacao = $this->request->post('descrever_formacao');
					
				$descrever_experiencia = $this->request->post('descrever_experiencia');
					
				$sql = "insert into cw_queremos_lhe_conhecer
				(id_user, exp_pcm, experiencia, utilizou_software_pcm, software_nome, software_nota, software_recursos_utilizados, software_dificuldades, relatorios_diarios, relatorios_gerencia, relatorios_graficos, maiores_desafios, controle_manutencao, descrever_formacao, descrever_experiencia)
				values (:id_user, :exp_pcm, :experiencia, :utilizou_software_pcm, :software_nome, :software_nota, :software_recursos_utilizados, :software_dificuldades, :relatorios_diarios, :relatorios_gerencia, :relatorios_graficos, :maiores_desafios, :controle_manutencao, :descrever_formacao, :descrever_experiencia)";
				$query = DB::query(Database::INSERT, $sql)->parameters(array(
						':id_user' => $id_user,
						':exp_pcm' => $exp_pcm,
						':experiencia' => $experiencia,
						':utilizou_software_pcm' => $utilizou_software_pcm,
						':software_nome' => $software_nome,
						':software_nota' => $software_nota,
						':software_recursos_utilizados' => $sru,
						':software_dificuldades' => $sd,
						':relatorios_diarios' => $rd,
						':relatorios_gerencia' => $rg,
						':relatorios_graficos' => $rgr,
						':maiores_desafios' => $md,
						':controle_manutencao' => $cm,
						':descrever_formacao' => $descrever_formacao,
						':descrever_experiencia' => $descrever_experiencia,
				))->execute();
				
				$sql1 = "update cwk_users set conhecer = 1 where id = :id_user";
				$q1 = DB::query(Database::UPDATE, $sql1)->param(':id_user', $id_user)->execute();
				
				
				if ($query) {
					
					//$this->template->pageCss = array('forms');
					$this->template->content = View::factory('form/enviado');
				
				}else {
					$txterro = "Não foi possível registrar suas respostas. Por favor, tente novamente.";
				
					$this->template->pageJs  = array('forms');
					$this->template->pageCss = array('forms');
					$this->template->content = View::factory('form/queremos_lhe_conhecer', $txterro);
				}
			}	
			
		}
		
	}
	
	public function action_respostas_conhecer() {
		$id_user = $this->request->param('id');
		
		$sql = "select 
				case q.exp_pcm
					when 0 then 'Não'
					when 1 then 'Sim'
					end
				as exp_pcm,
				q.experiencia,
				case q.utilizou_software_pcm
					when 0 then 'Não'
					when 1 then 'Sim'
					end
				as utilizou_software_pcm,
				q.software_nome, q.software_nota, 
				q.software_recursos_utilizados,
				q.software_dificuldades,
				q.relatorios_diarios,
				q.relatorios_gerencia,
				q.relatorios_graficos,
				q.maiores_desafios,
				q.controle_manutencao,
				q.descrever_formacao,
				q.descrever_experiencia,
				q.como_controle_manutencao,
				u.nome, u.empresa, u.cargo 
				from cw_queremos_lhe_conhecer as q
				join cwk_users as u on u.id = q.id_user
				where q.id_user = :id_user";
		$query = DB::query(Database::SELECT, $sql)->param(':id_user', $id_user)->execute();
		$context = array ('query' => $query);
		
		$this->template->pageCss = array('forms');
		$this->template->content = View::factory('form/respostas_conhecer', $context);
		
	}
	
	function transformaString($array) {
		$r = array();
		foreach ($array as $a) {
			$r[] = $a.' || ';
		}
		$r = join("", $r);
		$r = rtrim($r,' || ');
		return $r;
	}
	
	function verificaPreencheu($user) {
		$sql = "select id from cw_queremos_lhe_conhecer where id_user = :user";
		$query = DB::query(Database::SELECT, $sql)->param(':user', $user)->execute();
		
		if (!count($query)) {
			return true;
		}else {
			return false;
		}
	}
	
}
