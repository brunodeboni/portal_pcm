<div class="pagina_titulo">Respostas: Queremos lhe conhecer</div>

<?php if (!count($query)) {
		echo 'Aluno não preencheu o formulário.';
	}

foreach ($query as $res) { 
	
	?>
	
	<div class="texto">
		<span><b>Nome:</b> <?php echo $res['nome']; ?></span>
		<br>
		<span><b>Cargo:</b> <?php echo $res['cargo']; ?></span>
		<br>
		<span><b>Empresa:</b> <?php echo $res['empresa']; ?></span>
		<br>			
	</div>
	
<?php 
	//Se não utilizou software PCM
	if (isset($res['como_controle_manutencao'])) {
		//Se tem experiência com PCM
		if (isset($res['experiencia'])) { ?>
			<div class="campo_pergunta">
				<span>Você tem experiencia com o PCM - Planejamento e Controle de Manutenção?</span>
				<div class="resposta">
					<span><?php echo $res['exp_pcm']; ?></span>
				</div>
			</div>
			
			<div class="campo_pergunta">
				<span>Descreva abaixo, resumidamente, a sua experiência.</span>
				<div class="resposta">
					<span><?php echo $res['experiencia']; ?></span>
				</div>
			</div>
			
			<div class="campo_pergunta">
				<span>Você já utilizou ou utiliza algum software para gestão da manutenção?</span>
				<div class="resposta">
					<span><?php echo $res['utilizou_software_pcm']; ?></span>
				</div>
			</div>
			
			<div class="campo_pergunta">
				<span>Como você fez ou faz o controle da manutenção?</span>
				<div class="resposta">
					<span><?php echo $res['como_controle_manutencao']; ?></span>
				</div>
			</div>
			
<?php	}else { //Se não tem experiência com PCM ?>
			<div class="campo_pergunta">
				<span>Você tem experiencia com o PCM - Planejamento e Controle de Manutenção?</span>
				<div class="resposta">
					<span><?php echo $res['exp_pcm']; ?></span>
				</div>
			</div>
			
			<div class="campo_pergunta">
				<span>Como você fez ou faz o controle da manutenção?</span>
					<div class="resposta">
						<span><?php echo $res['como_controle_manutencao']; ?></span>
					</div>
			</div>
			
<?php	}
		
	}else { // Já usou software PCM ?>
		
		<div class="campo_pergunta">
			<span>Você tem experiencia com o PCM - Planejamento e Controle de Manutenção?</span>
			<div class="resposta">
				<span><?php echo $res['exp_pcm']; ?></span>
			</div>
		</div>
		
		<div class="campo_pergunta">
			<span>Descreva abaixo, resumidamente, a sua experiência.</span>
			<div class="resposta">
				<span><?php echo $res['experiencia']; ?></span>
			</div>
		</div>
		
		<div class="campo_pergunta">
			<span>Você já utilizou ou utiliza algum software para gestão da manutenção?</span>
			<div class="resposta">
				<span><?php echo $res['utilizou_software_pcm']; ?></span>
			</div>
		</div>
		
		<div class="campo_pergunta">
			<span>Informe qual o software e o site da empresa fornecedora</span>
			<div class="resposta">
				<span><?php echo $res['software_nome']; ?></span>
			</div>
		</div>
		
		<div class="campo_pergunta">
			<span>Qual a Nota que você daria para o software de manutenção que já utilizou?</span>
			<div class="resposta">
				<span><?php echo $res['software_nota']; ?></span>
			</div>
		</div>
		
		<div class="campo_pergunta">
			<span>Quais os principais recursos que você utiliza no software que já utilizou (ou ainda utiliza)?</span>
			<div class="resposta">
				<span><?php echo $res['software_recursos_utilizados']; ?></span>
			</div>
		</div>
		
		<div class="campo_pergunta">
			<span>Quais as maiores dificuldades que você tem/teve com este software?</span>
			<div class="resposta">
				<span><?php echo $res['software_dificuldades']; ?></span>
			</div>
		</div>
		
		<div class="campo_pergunta">
			<span>Marque quais são os Indicadores e relatórios de manutenção que você utiliza diariamente.</span>
			<div class="resposta">
				<span><?php echo $res['relatorios_diarios']; ?></span>
			</div>
		</div>
		
		<div class="campo_pergunta">
			<span>Quais são os Indicadores e relatórios de manutenção que, ao seu ver, são os mais relevantes para a gerência?</span>
			<div class="resposta">
				<span><?php echo $res['relatorios_gerencia']; ?></span>
			</div>
		</div>
		
		<div class="campo_pergunta">
			<span>Quais são os relatórios e gráficos que você emite para sua equipe de manutenção?</span>
			<div class="resposta">
				<span><?php echo $res['relatorios_graficos']; ?></span>
			</div>
		</div>
		
		<div class="campo_pergunta">
			<span>Trabalhando na gestão da manutenção, marque os seus maiores desafios:</span>
			<div class="resposta">
				<span><?php echo $res['maiores_desafios']; ?></span>
			</div>
		</div>
		
		<div class="campo_pergunta">
			<span>O controle da manutenção em sua empresa é feito de que forma?</span>
			<div class="resposta">
				<span><?php echo $res['controle_manutencao']; ?></span>
			</div>
		</div>
		
		<div class="campo_pergunta">
			<span>Descreva em 5 linhas sua formação.</span>
			<div class="resposta">
				<span><?php echo $res['descrever_formacao']; ?></span>
			</div>
		</div>
		
		<div class="campo_pergunta">
			<span>Descreva em 5 linhas sua experiência profissional.</span>
			<div class="resposta">
				<span><?php echo $res['descrever_experiencia']; ?></span>
			</div>
		</div>
		
<?php }
}?>
