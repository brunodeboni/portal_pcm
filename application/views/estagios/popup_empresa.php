<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<style>
		.pretty_table{
			margin:20px auto;
			width:95%;
			border:2px solid #EEF;
			border-collapse:collapse;
			background:#FFF;
			font-size:14px;
			font-family:Arial, Tahoma, sans-serif;
			line-height:18px;
		}
		.pretty_table td{
			vertical-align:top;
			padding:10px;
		}
		.pretty_table tr:nth-child(2n+1){
			background:#EEF;
		}
		.pretty_table.inverse tr:nth-child(2n){
			background:#EEF;
		}
		.pretty_table.inverse tr:nth-child(2n+1){
			background:#FFF;
		}
			.pretty_table .pt_title{
				width:30%;
				font-weight:bold;
			}
			.pretty_table_title > td{
				background:#8AC;
				color:#FFF;
				font-weight:bold;
			}
			
			.pretty_table_hover:hover > td{
				background: #9BD;
			}
	</style>
</head>
<body>
<table class="pretty_table">
	<tr>
		<td><b>Empresa</b>
		<td><b>Cidade</b>
		<td><b>UF</b>
		<td><b>E-mail</b>
		<td><b>Telefone</b>
		<td>
	<?php foreach ($query as $r) {
		echo"
			<tr>
				<td>".$r['empresa']."
				<td>".$r['cidade']."
				<td>".$r['uf']."
				<td>".$r['email']."
				<td>".$r['telefone']."
		";
	 } ?>
</table>
</body>
</html>