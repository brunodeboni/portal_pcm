<div class="pagina_titulo">Pesquisa CPCM - Centro de Formação para Planejamento e Controle de Manutenção</div>

<?php if(isset($txterro)) {
			echo '<div class="erro">'.$txterro.'</div>';
	}
	
	?>

<div id="form_start">
	<div class="texto">
		<p>Caro Aluno,</p>
		<br>
		<p>Criamos esta pesquisa para que possamos conhecer melhor o seu histórico profissional. Estas informações são importantes para que possamos determinar quais os melhores treinamentos e informações que podemos lhe fornecer.</p>
		<br>
		<p>Por isto, pedimos a sua colaboração em responder, rapidamente, este pequeno formulário!</p>
		<br>
		<p>Atenciosamente,<br>
		Equipe CPCM</p>
	</div>
	<br>
	
	<button onclick="form_goto(false,1)">Começar a responder</button>
</div>

<form action="" method="post">
	<div id="form_page_1" class="form_page" data-state="1">
		<div class="campo_pergunta">
			<span>Você tem experiencia com o PCM - Planejamento e Controle de Manutenção?</span>
			<div class="resposta">
				<label><input type="radio" name="exp_pcm" value="1" id="exp_pcm_1"> Sim</label>
				<label><input type="radio" name="exp_pcm" value="0" id="exp_pcm_0"> Não</label>
			</div>
		</div>
		<div class="form_button"></div>
	</div>
	
	<div id="form_page_2" class="form_page" data-state="2">
		<div class="campo_pergunta">
			<span>Descreva abaixo, resumidamente, a sua experiência.</span>
			<div class="resposta">
				<textarea id="experiencia" name="experiencia"></textarea>
			</div>
		</div>
	
		<div class="campo_pergunta">
			<span>Você já utilizou ou utiliza algum software para gestão da manutenção?</span>
			<div class="resposta">
				<label><input type="radio" name="utilizou_software_pcm" value="1"> Sim</label>
				<label><input type="radio" name="utilizou_software_pcm" value="0"> Não</label>
			</div>
		</div>
		
		<div class="form_button"></div>
	</div>
	
	<div id="form_page_3" class="form_page" data-state="3">
		<div class="campo_pergunta">
			<span>Informe qual o software e o site da empresa fornecedora</span>
			<div class="resposta">
				<textarea id="software_nome" name="software_nome"></textarea>
			</div>
		</div>
	
		<div class="campo_pergunta">
			<span>Qual a Nota que você daria para o software de manutenção que já utilizou?</span>
			<div class="resposta2 rangeradio">
				<label><span>1</span><input type="radio" name="software_nota" value="1"></label>
				<label><span>2</span><input type="radio" name="software_nota" value="2"></label>
				<label><span>3</span><input type="radio" name="software_nota" value="3"></label>
				<label><span>4</span><input type="radio" name="software_nota" value="4"></label>
				<label><span>5</span><input type="radio" name="software_nota" value="5"></label>
				<label><span>6</span><input type="radio" name="software_nota" value="6"></label>
				<label><span>7</span><input type="radio" name="software_nota" value="7"></label>
				<label><span>8</span><input type="radio" name="software_nota" value="8"></label>
				<label><span>9</span><input type="radio" name="software_nota" value="9"></label>
				<label><span>10</span><input type="radio" name="software_nota" value="10"></label>
			</div>
		</div>
	
		<div class="campo_pergunta">
			<span>Quais os principais recursos que você utiliza no software que já utilizou (ou ainda utiliza)?</span>
			<div class="resposta">
				<label><input type="checkbox" name="software_recursos_utilizados[]" class="software_recursos_utilizados" value="Controle de Manutenções Preventivas"> Controle de Manutenções Preventivas</label>
				<label><input type="checkbox" name="software_recursos_utilizados[]" class="software_recursos_utilizados" value="Controle de Manutenções Corretivas"> Controle de Manutenções Corretivas</label>
				<label><input type="checkbox" name="software_recursos_utilizados[]" class="software_recursos_utilizados" value="Controle de Lubrificação"> Controle de Lubrificação</label>
				<label><input type="checkbox" name="software_recursos_utilizados[]" class="software_recursos_utilizados" value="Controle de Manutenções Preditivas"> Controle de Manutenções Preditivas</label>
				<label><input type="checkbox" name="software_recursos_utilizados[]" class="software_recursos_utilizados" value="Check-list"> Check-list</label>
				<label><input type="checkbox" name="software_recursos_utilizados[]" class="software_recursos_utilizados" value="Controle de Calibração"> Controle de Calibração</label>
				<label><input type="checkbox" name="software_recursos_utilizados[]" class="software_recursos_utilizados" value="Abertura de SS/OS"> Abertura de SS/OS</label>
				<label><input type="checkbox" name="software_recursos_utilizados[]" class="software_recursos_utilizados" value="Gráficos & Relatórios"> Gráficos & Relatórios</label>
				<label><input type="checkbox" name="software_recursos_utilizados[]" class="software_recursos_utilizados" value="Outro"> Outro <input type="text" name="software_recursos_utilizados[]"></label>
			</div>
		</div>
	
		<div class="campo_pergunta">
			<span>Quais as maiores dificuldades que você tem/teve com este software?</span>
			<div class="resposta">
				<label><input type="checkbox" name="software_dificuldades[]" class="software_dificuldades" value="Falta de treinamento"> Falta de treinamento</label>
				<label><input type="checkbox" name="software_dificuldades[]" class="software_dificuldades" value="Falta de recursos internos no software"> Falta de recursos internos no software</label>
				<label><input type="checkbox" name="software_dificuldades[]" class="software_dificuldades" value="Lentidão"> Lentidão</label>
				<label><input type="checkbox" name="software_dificuldades[]" class="software_dificuldades" value="Falta de suporte técnico"> Falta de suporte técnico</label>
				<label><input type="checkbox" name="software_dificuldades[]" class="software_dificuldades" value="Alto número de BUGs / Erros"> Alto número de BUGs / Erros</label>
				<label><input type="checkbox" name="software_dificuldades[]" class="software_dificuldades" value="Suporte técnico caro e dificultoso"> Suporte técnico caro e dificultoso</label>
				<label><input type="checkbox" name="software_dificuldades[]" class="software_dificuldades" value="Falta de integração com o ERP e outros softwares"> Falta de integração com o ERP e outros softwares</label>
				<label><input type="checkbox" name="software_dificuldades[]" class="software_dificuldades" value="O Software Não evoluiu"> O Software Não evoluiu</label>
				<label><input type="checkbox" name="software_dificuldades[]" class="software_dificuldades" value="Não houve problemas"> Não houve problemas</label>
				<label><input type="checkbox" name="software_dificuldades[]" class="software_dificuldades" value="Outro"> Outro <input type="text" name="software_dificuldades[]"></label>
			</div>
		</div>
		
		<div class="form_button"></div>
	</div>
	
	<div id="form_page_4" class="form_page" data-state="4">
		<div class="campo_pergunta">
			<span>Marque quais são os Indicadores e relatórios de manutenção que você utiliza diariamente.</span>
			<div class="resposta">
				<label><input type="checkbox" name="relatorios_diarios[]" class="relatorios_diarios" value="Backlog"> Backlog</label>
				<label><input type="checkbox" name="relatorios_diarios[]" class="relatorios_diarios" value="MTTR / MTBF"> MTTR / MTBF</label>
				<label><input type="checkbox" name="relatorios_diarios[]" class="relatorios_diarios" value="Máquina parada"> Máquina parada</label>
				<label><input type="checkbox" name="relatorios_diarios[]" class="relatorios_diarios" value="OEE/EGE - Eficiência de máquina"> OEE/EGE - Eficiência de máquina</label>
				<label><input type="checkbox" name="relatorios_diarios[]" class="relatorios_diarios" value="Disponibilidade"> Disponibilidade</label>
				<label><input type="checkbox" name="relatorios_diarios[]" class="relatorios_diarios" value="Eficiência de funcionários"> Eficiência de funcionários</label>
				<label><input type="checkbox" name="relatorios_diarios[]" class="relatorios_diarios" value="Outro"> Outro <input type="text" name="relatorios_diarios[]"></label>
			</div>
		</div>
	
		<div class="campo_pergunta">
			<span>Quais são os Indicadores e relatórios de manutenção que, ao seu ver, são os mais relevantes para a gerência?</span>
			<div class="resposta">
				<label><input type="checkbox" name="relatorios_gerencia[]" class="relatorios_gerencia" value="Backlog"> Backlog</label>
				<label><input type="checkbox" name="relatorios_gerencia[]" class="relatorios_gerencia" value="MTTR / MTBF"> MTTR / MTBF</label>
				<label><input type="checkbox" name="relatorios_gerencia[]" class="relatorios_gerencia" value="Máquina parada"> Máquina parada</label>
				<label><input type="checkbox" name="relatorios_gerencia[]" class="relatorios_gerencia" value="OEE/EGE - Eficiência de máquina"> OEE/EGE - Eficiência de máquina</label>
				<label><input type="checkbox" name="relatorios_gerencia[]" class="relatorios_gerencia" value="Disponibilidade"> Disponibilidade</label>
				<label><input type="checkbox" name="relatorios_gerencia[]" class="relatorios_gerencia" value="Eficiência de funcionários"> Eficiência de funcionários</label>
				<label><input type="checkbox" name="relatorios_gerencia[]" class="relatorios_gerencia" value="Outro"> Outro <input type="text" name="relatorios_gerencia[]"></label>
			</div>
		</div>
	
		<div class="campo_pergunta">
			<span>Quais são os relatórios e gráficos que você emite para sua equipe de manutenção?</span>
			<div class="resposta">
				<label><input type="checkbox" name="relatorios_graficos[]" class="relatorios_graficos" value="Ordem de Serviço"> Ordem de Serviço</label>
				<label><input type="checkbox" name="relatorios_graficos[]" class="relatorios_graficos" value="Serviços Pendentes"> Serviços Pendentes</label>
				<label><input type="checkbox" name="relatorios_graficos[]" class="relatorios_graficos" value="Histórico de OS/SS por máquina"> Histórico de OS/SS por máquina</label>
				<label><input type="checkbox" name="relatorios_graficos[]" class="relatorios_graficos" value="Históricos de OS por funcionário/Equipe"> Históricos de OS por funcionário/Equipe</label>
				<label><input type="checkbox" name="relatorios_graficos[]" class="relatorios_graficos" value="Mapa da manutenção preventiva ou preditiva ou lubrificação"> Mapa da manutenção preventiva ou preditiva ou lubrificação</label>
				<label><input type="checkbox" name="relatorios_graficos[]" class="relatorios_graficos" value="Outro"> Outro <input type="text" name="relatorios_graficos[]"></label>
			</div>
		</div>
		
		<div class="form_button"></div>
	</div>
	
	<div id="form_page_5" class="form_page" data-state="5">
		<div class="campo_pergunta">
			<span>Trabalhando na gestão da manutenção, marque os seus maiores desafios:</span>
			<div class="resposta">
				<label><input type="checkbox" name="maiores_desafios[]" class="maiores_desafios" value="Gestão de pessoas do setor da manutenção"> Gestão de pessoas do setor da manutenção</label>
				<label><input type="checkbox" name="maiores_desafios[]" class="maiores_desafios" value="Gestão da atuação junto à outros setores da empresa"> Gestão da atuação junto à outros setores da empresa</label>
				<label><input type="checkbox" name="maiores_desafios[]" class="maiores_desafios" value="Falta de pessoal qualificado"> Falta de pessoal qualificado</label>
				<label><input type="checkbox" name="maiores_desafios[]" class="maiores_desafios" value="Falta de equipamentos adequado"> Falta de equipamentos adequado</label>
				<label><input type="checkbox" name="maiores_desafios[]" class="maiores_desafios" value="Falta de apoio da Gerencia/diretoria"> Falta de apoio da Gerencia/diretoria</label>
				<label><input type="checkbox" name="maiores_desafios[]" class="maiores_desafios" value="Equipamentos antigos e problemáticos"> Equipamentos antigos e problemáticos</label>
				<label><input type="checkbox" name="maiores_desafios[]" class="maiores_desafios" value="Falta de conhecimento sobre PCM"> Falta de conhecimento sobre PCM</label>
				<label><input type="checkbox" name="maiores_desafios[]" class="maiores_desafios" value="Falta de investimento"> Falta de investimento</label>
				<label><input type="checkbox" name="maiores_desafios[]" class="maiores_desafios" value="Falta de treinamento"> Falta de treinamento</label>
				<label><input type="checkbox" name="maiores_desafios[]" class="maiores_desafios" value="Produção sempre em alta, não há tempo para realizar a manutenção"> Produção sempre em alta, não há tempo para realizar a manutenção</label>
				<label><input type="checkbox" name="maiores_desafios[]" class="maiores_desafios" value="Não identifico dificuldades"> Não identifico dificuldades</label>
			</div>
		</div>
		
		<div class="form_button"></div>
	</div>
	
	<div id="form_page_6" class="form_page" data-state="6">
		<div class="campo_pergunta">
			<span>O controle da manutenção em sua empresa é feito de que forma?</span>
			<div class="resposta">
				<label><input type="checkbox" name="controle_manutencao[]" class="controle_manutencao" value="Com digitadores das OS/SS. Os manutentores não usam micro/terminais para inserir dados"> Com digitadores das OS/SS. Os manutentores não usam micro/terminais para inserir dados</label>
				<label><input type="checkbox" name="controle_manutencao[]" class="controle_manutencao" value="Sem digitadores das OS/SS. Os manutentores usam micro/terminais para inserir dados"> Sem digitadores das OS/SS. Os manutentores usam micro/terminais para inserir dados</label>
				<label><input type="checkbox" name="controle_manutencao[]" class="controle_manutencao" value="Temos leitores, coletores e um bom aparato tecnológico"> Temos leitores, coletores e um bom aparato tecnológico</label>
				<label><input type="checkbox" name="controle_manutencao[]" class="controle_manutencao" value="Não temos leitores, coletores e nenhum aparato tecnológico"> Não temos leitores, coletores e nenhum aparato tecnológico</label>
				<label><input type="checkbox" name="controle_manutencao[]" class="controle_manutencao" value="Existe o setor de PCM estruturado, que geram indicadores, análises e relatórios gerenciais"> Existe o setor de PCM estruturado, que geram indicadores, análises e relatórios gerenciais</label>
				<label><input type="checkbox" name="controle_manutencao[]" class="controle_manutencao" value="Não existe Setor de PCM estruturado"> Não existe Setor de PCM estruturado</label>
			</div>
		</div>
	
		<div class="campo_pergunta">
			<span>Descreva em 5 linhas sua formação.</span>
			<div class="resposta">
				<textarea name="descrever_formacao" id="descrever_formacao"></textarea>
			</div>
		</div>
	
		<div class="campo_pergunta">
			<span>Descreva em 5 linhas sua experiência profissional.</span>
			<div class="resposta">
				<textarea name="descrever_experiencia" id="descrever_experiencia"></textarea>
			</div>
		</div>
		
		<button type="submit">Enviar</button>

		<!-- enviar formulário -->
	</div>
	
	<div id="form_page_7" class="form_page" data-state="7">
		<div class="campo_pergunta">
			<span>Como você fez ou faz o controle da manutenção?</span>
			<div class="resposta">
				<label><input type="radio" name="como_controle_manutencao" value="Usando planilhas e documentos"> Usando planilhas e documentos</label>
				<label><input type="radio" name="como_controle_manutencao" value="Usando o conhecimento de terceiros"> Usando o conhecimento de terceiros</label>
				<label><input type="radio" name="como_controle_manutencao" value="Sem nenhum controle"> Sem nenhum controle</label>
			</div>
		</div>
		
		<button type="submit">Enviar</button>
	</div>
	
	
</form>
