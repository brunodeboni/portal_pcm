<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Iframes extends Controller_Base
{
	
	public function action_contador() {
		//Total de inscritos
		$sql = "SELECT count(*) as inscritos FROM cw_cursos_inscritos";
		$query = DB::query(Database::SELECT, $sql)->execute();
		$result = $query->as_array();
		
		//Total de turmas
		$sql2 = "SELECT count(*) as turmas FROM cw_cursos_turmas";
		$query2 = DB::query(Database::SELECT, $sql2)->execute();
		$res = $query2->as_array();
		
		$total_inscritos = $result[0]['inscritos'];
		$total_turmas = $res[0]['turmas'];
		
		
		$context = array(   // Variáveis que vão para a view
			// nome        valor                como acessar
			'inscritos' => $total_inscritos, // na view: $inscritos
			'turmas'    => $total_turmas,    // na view: $turmas
		);
		
		$html = View::factory('sobre/contador',$context);
		
		$this->response->body($html);
	}
	
	public function action_onlineagora() {
		$sql1 = "select
				(select count(*) from cw_users_online where dh > date_sub(now(),interval 2 minute) and id_user is null)
					as visitantes,
				(select count(*) from cw_users_online where dh > date_sub(now(),interval 2 minute) and id_user is not null)
					as usuarios;";
		/*
			select * from cw_users_online where dh > date_sub(now(),interval 3 minute) and id_user is null;
			select * from cw_users_online where dh > date_sub(now(),interval 3 minute) and id_user is not null;
		*/
		
		$qry1 = DB::query(Database::SELECT, $sql1)->execute();
		$res1 = $qry1->as_array();
		$res1 = $res1[0];
		
		?>
			<!doctype html>
			<html>
				<head>
					<meta charset="utf-8">
					<title>Online no CPCM</title>
					<style>
						*{margin:0;padding:0;}
						body{font-family:Arial,Tahoma,Geneva,sans-serif;font-size:14px;font-weight:bold;color:#669;}
						td{padding:5px;}
					</style>
					<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
					<script type="text/javascript">
						$(document).ready(function(){
							setTimeout('location.reload()',60000);
						});
					</script>
				</head>
				<body>
					
					<table style="width:100%;">
						<tr>
							<td> Alunos
							<td> <a href="<?php echo URL::site('perfil/online'); ?>" target="_parent"> <?php echo $res1['usuarios']; ?> </a>
						<tr>
							<td> Visitantes
							<td> <?php echo $res1['visitantes']; ?>
					</table>
					
				</body>
			</html>
		<?php
	}
	
	public function action_destaque() {
		$sql="select paragrafo1, paragrafo2, paragrafo3, paragrafo4, paragrafo5
		from cw_destaque";
		$query = DB::query(Database::SELECT, $sql)->execute();
		$result = $query->as_array();
		
		foreach ($result as $res) {
			if ($res['paragrafo1']) $paragrafo1 = $res['paragrafo1'];
			else $paragrafo1="";
			if ($res['paragrafo2']) $paragrafo2 = $res['paragrafo2'];
			else $paragrafo2="";
			if ($res['paragrafo3']) $paragrafo3 = $res['paragrafo3'];
			else $paragrafo3="";
			if ($res['paragrafo4']) $paragrafo4 = $res['paragrafo4'];
			else $paragrafo4="";
			if ($res['paragrafo5']) $paragrafo5 = $res['paragrafo5'];
			else $paragrafo5="";
		}
		
		$context = array(
			'paragrafo1' => $paragrafo1,
			'paragrafo2' => $paragrafo2,
			'paragrafo3' => $paragrafo3,
			'paragrafo4' => $paragrafo4,
			'paragrafo5' => $paragrafo5, 
		);
		
		$html = View::factory('sobre/destaque', $context);
		$this->response->body($html);
	}
	
	public function action_destaque2() {
		$sql="select paragrafo1, paragrafo2, paragrafo3, paragrafo4, paragrafo5
		from cw_destaque";
		$query = DB::query(Database::SELECT, $sql)->execute();
		$result = $query->as_array();
	
		foreach ($result as $res) {
			if ($res['paragrafo1']) $paragrafo1 = $res['paragrafo1'];
			else $paragrafo1="";
			if ($res['paragrafo2']) $paragrafo2 = $res['paragrafo2'];
			else $paragrafo2="";
			if ($res['paragrafo3']) $paragrafo3 = $res['paragrafo3'];
			else $paragrafo3="";
			if ($res['paragrafo4']) $paragrafo4 = $res['paragrafo4'];
			else $paragrafo4="";
			if ($res['paragrafo5']) $paragrafo5 = $res['paragrafo5'];
			else $paragrafo5="";
		}
	
		$context = array(
				'paragrafo1' => $paragrafo1,
				'paragrafo2' => $paragrafo2,
				'paragrafo3' => $paragrafo3,
				'paragrafo4' => $paragrafo4,
				'paragrafo5' => $paragrafo5,
		);
	
		$html = View::factory('sobre/destaque2', $context);
		$this->response->body($html);
	}
	
	public function action_destaque3() {
		$sql="select paragrafo1, paragrafo2, paragrafo3, paragrafo4, paragrafo5
		from cw_destaque";
		$query = DB::query(Database::SELECT, $sql)->execute();
		$result = $query->as_array();
	
		foreach ($result as $res) {
			if ($res['paragrafo1']) $paragrafo1 = $res['paragrafo1'];
			else $paragrafo1="";
			if ($res['paragrafo2']) $paragrafo2 = $res['paragrafo2'];
			else $paragrafo2="";
			if ($res['paragrafo3']) $paragrafo3 = $res['paragrafo3'];
			else $paragrafo3="";
			if ($res['paragrafo4']) $paragrafo4 = $res['paragrafo4'];
			else $paragrafo4="";
			if ($res['paragrafo5']) $paragrafo5 = $res['paragrafo5'];
			else $paragrafo5="";
		}
	
		$context = array(
				'paragrafo1' => $paragrafo1,
				'paragrafo2' => $paragrafo2,
				'paragrafo3' => $paragrafo3,
				'paragrafo4' => $paragrafo4,
				'paragrafo5' => $paragrafo5,
		);
	
		$html = View::factory('sobre/destaque3', $context);
		$this->response->body($html);
	}
	
	public function action_destaque4() {
		$sql="select paragrafo1, paragrafo2, paragrafo3, paragrafo4, paragrafo5
		from cw_destaque";
		$query = DB::query(Database::SELECT, $sql)->execute();
		$result = $query->as_array();
	
		foreach ($result as $res) {
			if ($res['paragrafo1']) $paragrafo1 = $res['paragrafo1'];
			else $paragrafo1="";
			if ($res['paragrafo2']) $paragrafo2 = $res['paragrafo2'];
			else $paragrafo2="";
			if ($res['paragrafo3']) $paragrafo3 = $res['paragrafo3'];
			else $paragrafo3="";
			if ($res['paragrafo4']) $paragrafo4 = $res['paragrafo4'];
			else $paragrafo4="";
			if ($res['paragrafo5']) $paragrafo5 = $res['paragrafo5'];
			else $paragrafo5="";
		}
	
		$context = array(
				'paragrafo1' => $paragrafo1,
				'paragrafo2' => $paragrafo2,
				'paragrafo3' => $paragrafo3,
				'paragrafo4' => $paragrafo4,
				'paragrafo5' => $paragrafo5,
		);
	
		$html = View::factory('sobre/destaque4', $context);
		$this->response->body($html);
	}
	
	public function action_destaque5() {
		$sql="select paragrafo1, paragrafo2, paragrafo3, paragrafo4, paragrafo5
		from cw_destaque";
		$query = DB::query(Database::SELECT, $sql)->execute();
		$result = $query->as_array();
	
		foreach ($result as $res) {
			if ($res['paragrafo1']) $paragrafo1 = $res['paragrafo1'];
			else $paragrafo1="";
			if ($res['paragrafo2']) $paragrafo2 = $res['paragrafo2'];
			else $paragrafo2="";
			if ($res['paragrafo3']) $paragrafo3 = $res['paragrafo3'];
			else $paragrafo3="";
			if ($res['paragrafo4']) $paragrafo4 = $res['paragrafo4'];
			else $paragrafo4="";
			if ($res['paragrafo5']) $paragrafo5 = $res['paragrafo5'];
			else $paragrafo5="";
		}
	
		$context = array(
				'paragrafo1' => $paragrafo1,
				'paragrafo2' => $paragrafo2,
				'paragrafo3' => $paragrafo3,
				'paragrafo4' => $paragrafo4,
				'paragrafo5' => $paragrafo5,
		);
	
		$html = View::factory('sobre/destaque5', $context);
		$this->response->body($html);
	}
	
}
