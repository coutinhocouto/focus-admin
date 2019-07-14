<?php $id =  $_GET["pid"]; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>

<div class="row">
	<div class="col-md-12">
		
		<a href="http://focusadministradora.com/rentals/wp-content/themes/focus-admin/contrato/gerar-contrato.php" target="_blank" class="button-large btn btn-primary" style="margin-bottom: 20px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> GERAR CONTRATO</a>
	</div>
</div>

<div class="row">
	<div class="col-md-12" id="contrato" style="font-family: Garamond; font-size: 25px; line-height: 1.3; text-align: justify;">
		
		<h2 style="text-align: center; font-size: 28px; text-decoration: underline; font-weight: 700;">CONTRATO DE LOCAÇÃO COMERCIAL
		IDENTIFICAÇÃO DAS PARTES CONTRATANTES</h2><br><br>
		
		<?php 
		
			setlocale(LC_MONETARY, 'pt_BR');
		
			$garanita = get_field('garantia', $id);
			$data_de_inicio = get_field('data_de_inicio', $id); 
			$data_final = get_field('data_final', $id);
			$prazo_de_vigencia = get_field('prazo_de_vigencia', $id);
			$dia_do_vencimento = get_field('dia_do_vencimento', $id);
			$end_onus = get_field('end_onus', $id);
		
			$fiador_id = get_field('fiador', $id);
			$imovel_id = get_field('imovel', $id);
		
			$fiador_nome = get_the_title($fiador_id);
			$fiador_cpf = get_field('cpf', $fiador_id);
			$fiador_nacionalidade = get_field('nacionalidade', $fiador_id);
			$fiador_estado_civil = get_field('estado_civil', $fiador_id);
			$fiador_rg = get_field('rg', $fiador_id);
			$fiador_orgao_expedidor = get_field('orgao_expedidor', $fiador_id);
			$fiador_bairro = get_field('bairro', $fiador_id);
			$fiador_cidade = get_field('cidade', $fiador_id);
			$fiador_estado = get_field('estado', $fiador_id);
			$fiador_endereco = get_field('endereco', $fiador_id);
			$fiador_numero = get_field('numero', $fiador_id);
			$fiador_complemento = get_field('complemento', $fiador_id);
			$fiador_nome_conjuge = get_field('nome_conjuge', $fiador_id);
			$fiador_cpf_conjuge = get_field('cpf_conjuge', $fiador_id);
		
			$imovel_cep = get_field('cep', $imovel_id);
			$imovel_bairro = get_field('bairro', $imovel_id);
			$imovel_cidade = get_field('cidade', $imovel_id);
			$imovel_estado = get_field('estado', $imovel_id);
			$imovel_endereco = get_field('endereco', $imovel_id);
			$imovel_numero = get_field('numero', $imovel_id);
			$imovel_complemento = get_field('complemento', $imovel_id);
			$imovel_valor_da_locacao = get_field('valor_da_locacao', $imovel_id);
		
			$locadores = array();
			if(get_field('locadores', $id)):
				while(has_sub_field('locadores', $id)): 

					array_push($locadores, get_sub_field('locador'));

				endwhile; 
			endif; 
		
			$locatarios = array();
			if(get_field('locatarios', $id)):
				while(has_sub_field('locatarios', $id)): 

					array_push($locatarios, get_sub_field('locatario'));

				endwhile; 
			endif;
		
		?>

		<div style="display: block; float: left; padding: 10px; border: 1px solid; padding: 30px; margin-bottom: 20px;">

          	
			<?php foreach ($locadores as $locador) {
		
				if(get_field('estado_civil', $locador) == 'Casado(a)') {
					$ld = 'Casado(a) com <span style="text-transform: uppercase">' . get_field('nome_conjuge', $locador) . '</span>, portador(a) da carteira de identidade nº' . get_field('rg_conjuge', $locador) . ' expedida pelo' . get_field('orgao_expedidor', $locador) . ' e inscrito(a) no CPF/MF sob o nº ' . get_field('cpf_conjuge', $locador) . '<br><br>';
				} else { $ld = '<br><br>'; };
		
				$locadoresfor.= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<strong>LOCADOR(A):</strong> <strong style="text-transform: uppercase">' . get_the_title($locador) . '</strong>, ' . get_field('nacionalidade', $locador) . ', ' . get_field('estado_civil', $locador) . ', portador(a) da carteira de identidade nº ' . get_field('rg', $locador) . ', expedida pelo ' . get_field('orgao_expedidor', $locador) . ', inscrito(a) no CPF/MF sob o nº ' . get_field('cpf', $locador) . ', com endereço à ' . get_field('endereco', $locador) . ', ' . get_field('numero', $locador) . ' - ' . get_field('bairro', $locador) . ', ' . get_field('cidade', $locador) . '/' . get_field('estado', $locador) . '. ' . $ld;
				
				echo $locadoresfor;
			} ?>
			
			<?php foreach ($locatarios as $locatario) {
	
				if(get_field('estado_civil', $locatario) == 'Casado(a)') {
					$lt = 'Casado(a) com <span style="text-transform: uppercase">' . get_field('nome_conjuge', $locador) . '</span>, portador(a) da carteira de identidade nº ' . get_field('rg_conjuge', $locatario) . ' expedida pelo ' .  get_field('orgao_expedidor', $locatario) . ' e inscrito(a) no CPF/MF sob o nº ' .  get_field('cpf_conjuge', $locatario) . '.<br><br>';
				} else { $lt = '<br><br>'; };
	
				$locatariosfor.= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<strong>LOCATÁRIO(A):</strong> <strong style="text-transform: uppercase">' . get_the_title($locatario) . '</strong>, ' . get_field('nacionalidade', $locatario) . ', ' . get_field('estado_civil', $locatario) . ', portador(a) da carteira de identidade nº ' . get_field('rg', $locatario) . ', expedida pelo ' . get_field('orgao', $locatario) . ', inscrito(a) no CPF/MF sob o nº ' . get_field('cpf', $locatario) . ', com endereço à ' .  get_field('endereco', $locatario) . ', ' . get_field('numero', $locatario) . ' - ' . get_field('bairro', $locatario) . ', ' . get_field('cidade', $locatario) . '/' . get_field('estado', $locatario) . '.' . $lt;
				
				echo $locatariosfor;
			
			} ?>
			
			
			<?php if($garanita == 'Fiador') {
	
				if(get_field('estado_civil', $fiador_id) == 'Casado(a)') {
					$fiadorcivil = 'Casado(a) com <span style="text-transform: uppercase">' . get_field('nome_conjuge', $fiador_id) . '</span>, portador(a) da carteira de identidade nº ' . get_field('rg_conjuge', $fiador_id) . ' expedida pelo ' . get_field('orgao_expedidor', $fiador_id) . ' e inscrito(a) no CPF/MF sob o nº ' . get_field('cpf_conjuge', $fiador_id) . ', proprietário(a) ';
				} else { $fiadorcivil = ' Proprietário(a) '; } 
					
	
				$fiadorfor = '
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<strong>GARANTIA:</strong> <strong>Apresenta-se como FIADOR(A) o(a) Sr(a). </strong><strong style="text-transform: uppercase">' .  $fiador_nome . '</strong>, ' . $fiador_nacionalidade . ', ' .  $fiador_estado_civil . ', portador(a) da carteira de identidade nº ' .  $fiador_rg . ', expedida pelo ' .  $fiador_orgao_expedidor . ', inscrito(a) no CPF/MF sob o nº ' .  $fiador_cpf . ', com endereço à ' .  $fiador_endereco . ', ' .  $fiador_numero . ' - ' .  $fiador_bairro . ', ' . $fiador_cidade . '/' .  $fiador_estado . '.' . $fiadorcivil . 'do imóvel sito à ' .  get_field('endereco_onus', $fiador_id) . ', ' . get_field('numero_onus', $fiador_id). ' - ' .  get_field('bairro_onus', $fiador_id) . ', ' .  get_field('cidade_onus', $fiador_id) . '/' .  get_field('estado_onus', $fiador_id) . ', conforme certidão de ônus reais apresentada, ora dado em garantia ao presente instrumento.</strong><br><br>';
		
			} else {
				$fiadorfor = ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<strong>GARANTIA</strong>: <strong>Os LOCATÁRIOS</strong>, deverão efetuar, como FIANÇA, um depósito no valor de ' . money_format('%(#10n', $imovel_valor_da_locacao * 3) . ', correspondentes a 03 (três) meses de aluguel, na conta a ser indicada pelo(a) LOCADOR(A), condicionada a este a entrega das chaves do objeto deste instrumento.<br><br>';
			} 
		
			echo $fiadorfor;
		
		?>
		</div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Parágrafo primeiro. No caso da presente garantia se tornar insuficiente para cobrir débitos deixados pelos locatários e não quitando o mesmo no ato da entrega das chaves, o valor devido será cobrado por ação própria, inclusive acrescida de perda de aluguéis pelo prazo em que o imóvel ficar desocupado, dependendo de obras ou providências que sejam de responsabilidade do locatário.<br><br>

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Parágrafo segundo. Caso o locatário venha a requerer a substituição da garantia por outra que venha a ser aceita pela locadora, após cumprida todas as formalidades, inclusive com a assinatura do necessário termo Aditivo, desde que não existam débitos pendentes de qualquer natureza.

		<!--</div>-->
	
		<br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>As partes acima identificadas têm, entre si, justos e acertados o presente Contrato de Locação Comercial, que se regerá pelas cláusulas seguintes e pelas condições descritas no presente.</strong><br><br>
	
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Parágrafo Único:</strong> Caso o LOCATÁRIO(A) venha a requerer a substituição da garantia por outra que venha a ser aceita pelo(a) LOCADOR(A), esta só será aperfeiçoada após cumprida todas as formalidades, inclusive com a assinatura do necessário termo Aditivo, e desde que não existam débitos pendentes de qualquer natureza.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DAS GARANTIAS</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php if($garanita == 'Fiador') { ?>
			<strong>Cláusula 1ª: </strong>Apresenta-se como FIADOR(A) o(a) Sr(a). <strong style="text-transform: uppercase"><?php echo $fiador_nome; ?></strong>, <?php echo $fiador_nacionalidade; ?>, <?php echo $fiador_estado_civil; ?>, portador(a) da carteira de identidade nº <?php echo $fiador_rg; ?>, expedida pelo <?php echo $fiador_orgao_expedidor; ?>, inscrito(a) no CPF/MF sob o nº <?php echo $fiador_cpf; ?>, com endereço à <?php echo $fiador_endereco; ?>, <?php echo $fiador_numero; ?> - <?php echo $fiador_bairro; ?>, <?php echo $fiador_cidade; ?>/<?php echo $fiador_estado; ?>,<strong> proprietário(a) do imóvel sito à <?php echo $end_onus;?>, conforme certidão de ônus reais apresentada, ora dado em garantia ao presente instrumento.</strong><br><br>
		<?php } else { ?>
			<strong>Cláusula 1ª: </strong>O LOCATÁRIO, deverá efetuar, como FIANÇA, um depósito no valor de <?php echo money_format('%(#10n', $imovel_valor_da_locacao * 3);?>, condicionando a entrega das chaves do imóvel, correspondentes a 03 (três) meses de aluguel, na conta a ser indicada pelo(a) LOCADOR(A), condicionada a este a entrega das chaves do objeto deste instrumento.<br><br>
		<?php } ?>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Parágrafo primeiro: </strong>A presente garantia somente será finda aos FIADORES quando da efetiva entrega do imóvel e após a devida vistoria e, ainda, responderá, também, por quaisquer débitos que à época existirem decorrentes da locação, inclusive obras de recuperação do imóvel em decorrência do mau uso ou restituição ao estado entregue.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Parágrafo segundo: </strong>No caso da presente garantia se tornar insuficiente para cobrir débitos deixados pelo(a) LOCATÁRIO(A), e não sendo estes quitados no ato da entrega das chaves, o valor devido será cobrado por ação própria, acrescida de perda de aluguéis pelo prazo em que o imóvel ficar desocupado, dependendo de obras ou providências que sejam de responsabilidade do LOCATÁRIO(A).<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Parágrafo terceiro: </strong>Caso o LOCATÁRIO(A) venha a requerer a substituição da garantia pactuada por outra que venha a ser aceita pelo LOCADOR(A), a substituição da garantia somente produzirá efeitos após cumpridas todas as formalidades, inclusive com a assinatura do necessário termo Aditivo por todas as partes, e desde que não existam débitos pendentes de qualquer natureza, respondendo a garantia previa e expressamente pactuada em relação a todos os termos deste contrato, para todos os fins, enquanto não validamente substituída.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DO OBJETO DO CONTRATO</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 2ª.</strong> O presente contrato tem como OBJETO imóvel de propriedade do LOCADOR(A), sito à <strong><?php echo $imovel_endereco; ?>, <?php echo $imovel_numero; ?> - <?php echo $imovel_bairro; ?>, <?php echo $imovel_cidade; ?>/<?php echo $imovel_estado; ?>, CEP: <?php echo $imovel_cep; ?></strong>, livre de ônus ou quaisquer dívidas.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 3ª.</strong> O imóvel ora é entregue pelo LOCADOR(A) ao LOCATÁRIO(A)<strong> conforme termo de entrega de chaves em anexo</strong>, bem como relatório de vistoria a ser emitido por empresa especializada.<br><br>

		<strong class="big-contrato">Parágrafo Único: </strong>O LOCATÁRIO(A) declara ter recebido, neste ato, o termo de vistoria do imóvel com todo o descritivo, que após 15 (quinze) dias, não havendo qualquer objeção de sua parte, será considerado aceito na íntegra em caráter irretratável e irrevogável.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DA UTILIZAÇÃO DO IMÓVEL</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 4ª.</strong> A presente Locação destina-se única e restritivamente ao uso do imóvel para fins COMERCIAIS, de acordo com este instrumento e Convenção e Estatutos do Condomínio, sem prejuízo das demais leis vigentes, sendo vedado ao LOCATÁRIO(A), ainda, sublocá-lo ou usá-lo de forma adversa do previsto, sob pena de rescisão contratual, mais perdas e danos.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DAS CONDIÇÕES DO IMÓVEL</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 5ª.</strong> O imóvel objeto deste contrato será entregue conforme relatório de vistoria, a ser elaborado por empresa especializada, e deve ser mantido, em perfeitas condições de uso e destinação até a data da sua devolução.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 6ª.</strong> Fica também acordado que o imóvel locado será devolvido pelo LOCATÁRIO(A) em perfeitas condições de uso, estando condicionado à entrega das chaves o pagamento pontual ou reembolso ao LOCADOR(A), no caso em que este venha a fazê-lo, de todos os tributos, taxas, impostos e despesas relativos ao imóvel, tais como: Imposto Predial Territorial Urbano (IPTU), taxa de serviços públicos, taxas municipais, estaduais e federais, água e esgoto, luz e força, gás, telefone, taxa de incêndio, condomínio e cotas, e outras que recaiam sobre o imóvel ora locado, <strong>bem como os comprovantes de encerramento das contas junto às concessionárias (luz, gás e água), com a devida quitação,</strong> ficando certo que, no caso de descumprimento dessas e outras obrigações, será facultado ao LOCADOR(A) recusarem-se a receber as chaves, caso em que o LOCATÁRIO(A) será compelido a pagar, no prazo derradeiro de 24h (vinte e quatro) horas, independentemente de notificação verbal ou escrita, judicial ou extrajudicial, todos os débitos existentes, sem prejuízo dos aluguéis que forem vencendo até a entrega desembaraçada das chaves.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>BENFEITORIAS, OBRAS E CONSTRUÇÕES</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 7ª.</strong> Quaisquer benfeitorias ou obras no imóvel objeto deste deverão ser submetidas à prévia e expressa autorização do LOCADOR(A), que poderão não concordar.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 8ª.</strong> Vindo a serem feitas benfeitorias ou obras pelo LOCATÁRIO(A) sem a concordância do LOCADOR(A), será facultado ao LOCADOR(A) exigir ou não a modificação do imóvel ao seu estado original, sendo que, em caso de exigência, todos os ônus necessários à modificação serão arcados pelo LOCATÁRIO(A).<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 9ª.</strong> As benfeitorias, obras, consertos ou reparos farão parte integrante do imóvel, não assistindo ao LOCATÁRIO(A) o direito de retenção ou indenização sobre os mesmos.<br><br>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DO DIREITO DE PREFERÊNCIA E DAS VISTORIAS ESPORÁDICAS</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 10ª.</strong> O LOCATÁRIO(A) permitirá ao LOCADOR(A), ou pessoa por eles indicada, realizar vistorias no imóvel em dia e hora a serem combinados entre as partes, a fim de averiguar o funcionamento de todas as instalações, dos acessórios e dos equipamentos de segurança. Constatado algum vício que possa afetar a estrutura física do imóvel ficará o LOCATÁRIO(A) obrigado a realizar o conserto, no prazo máximo de 20 (vinte) dias, salvo se a urgência exigir prazo menor. Não sendo adotadas as providências cabíveis por parte do LOCATÁRIO(A), aos LOCADOR(A) será facultado o direito de rescindir o presente contrato, sem prejuízo do recebimento dos numerários neste previstos, inclusive multa compensatória.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 11ª.</strong> O LOCADOR(A), em qualquer tempo, poderão alienar o imóvel, mesmo durante a vigência do contrato de locação e, por via de consequência transferir ao novo adquirente da unidade imobiliária os direitos contidos neste contrato.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 12ª.</strong> O LOCADOR(A) deverá notificar o LOCATÁRIO(A) sobre a intenção de venda do imóvel, para que este possa exercer seu direito de preferência na aquisição do mesmo, nas mesmas condições oferecidas a terceiros. Para efetivação da preferência deverá o LOCATÁRIO(A) responder a notificação, de maneira inequívoca, no prazo de 30 dias contados do seu recebimento, sendo que esta resposta, para ser considerada válida, deverá ocorrer através de Cartório de Títulos e Documentos.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 13ª.</strong> Não havendo manifestação de interesse do LOCATÁRIO(A) na aquisição do imóvel, este deverá permitir que os interessados na sua compra façam visitas em dias e horários a serem combinados entre as partes envolvidas.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DOS ATOS DE INFORMAÇÃO ENTRE OS CONTRATANTES</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 14ª.</strong> As partes integrantes deste contrato ficam desde já acordadas a se comunicarem somente por escrito, através de qualquer meio admitido no Direito. Na ausência ou impedimento do LOCATÁRIO(A), o mesmo obrigar-se-á a expressamente nomear, para sua representação, representante ou bastante procurador.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DO SEGURO CONTRA INCÊNDIO E OUTRAS PROVIDÊNCIAS</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 15ª.</strong> Comprometer-se-á o LOCATÁRIO(A) ao pagamento das despesas com o prêmio de seguro anual contra incêndio e outros danos ao imóvel, que será contratado exclusivamente pelo procurador do LOCADOR(A), com base no valor de reconstrução do bem.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 16ª.</strong> O contrato de seguro terá vigência enquanto perdurar a Locação, incluindo-se a renovação, possuindo como beneficiário o LOCADOR(A), no que concerne ao imóvel e seus acessórios, e o próprio LOCATÁRIO(A) quanto aos bens de sua propriedade.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 17ª.</strong> Fica o LOCATÁRIO(A) obrigado a arcar com as despesas com a contratação do seguro descrito na cláusula 15ª, a partir do ato da entrega das chaves do imóvel objeto do contrato.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 18ª.</strong> Em caso de qualquer acidente que porventura venha a ocorrer no imóvel por culpa ou dolo do LOCATÁRIO(A), este obrigar-se-á ao pagamento de todas as despesas por danos causados ao imóvel e/ou a terceiros decorrentes do evento, devendo, ainda, caso assim deseje o LOCADOR(A), restituí-lo ao estado original em que locado, de acordo com o termo de vistoria, mais a multa prevista na cláusula 27ª.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DAS DESPESAS PARA O INÍCIO, USO E FRUIÇÃO</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 19ª.</strong> Ficará a cargo do LOCATÁRIO(A) a obtenção de todos os pré-requisitos para a efetivação da locação e necessários ao uso e fruição do imóvel, como alvarás, licença de funcionamento, etc., devendo, ainda, requerer junto as concessionárias públicas a ligação dos serviços em seu nome, concorrendo com todas as despesas pertinentes, além de comunicar à administração do condomínio a locação nova, exibindo-lhes os documentos comprobatórios necessários, sob pena de arcar com os prejuízos causados em decorrência da sua omissão.<br><br>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>VALOR DO ALUGUEL, DESPESAS E TRIBUTOS</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 20ª.</strong> Como aluguel mensal, o LOCATÁRIO(A) se obriga a pagar o valor de <strong>R$ <?php echo $imovel_valor_da_locacao; ?></strong>, devendo fazê-lo até o dia <strong><?php echo $dia_do_vencimento; ?></strong> de cada mês, sendo certo que restou ajustada uma carência de 8 meses exclusivamente em relação a este, sem prejuízo das demais taxas e encargos locatícios a partir da assinatura do presente instrumento, sob pena de responder por multa, juros, correção monetária e despesas previstas nas Cláusulas 24ª e 25ª a seguir em caso de não pagamento em dia das obrigações ora contratadas.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 21ª.</strong> Convencionam as partes que o aluguel será cobrado pelo procurador do LOCADOR(A) ao LOCATÁRIO(A), através de recibos mensais, emitidos através de ficha de compensação bancária e que serão remetidos para o endereço do imóvel locado. Nos recibos, além do valor do aluguel, estarão contidos todos os valores discriminados referentes às despesas mensais do imóvel previstas neste contrato, de obrigação do LOCATÁRIO(A), independentemente de suas datas próprias de vencimento. Caso o LOCATÁRIO(A) venha a efetuar o pagamento do aluguel através de cheque, a quitação somente será considerada após a compensação do mesmo.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 22ª.</strong> O valor do aluguel será reajustado anualmente, tendo-se como base os índices previstos e acumulados no período anual do <strong>IGP-M/FGV</strong>, em caso de falta deste índice, o reajustamento do aluguel terá por base a média da variação dos índices inflacionários do ano corrente ao da execução do aluguel, até o primeiro dia anterior ao pagamento de todos os valores devidos. Ocorrendo alguma mudança no âmbito governamental, todos os valores agregados ao aluguel, bem como o próprio aluguel, serão revistos pelas partes. Tal reajuste ocorrerá independentemente de aviso ou interpelação judicial prévia, e vigorará entre as partes, no primeiro dia útil subsequente a ocorrência do mesmo.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 23ª.</strong> Será cobrado do LOCATÁRIO(A), pelo LOCADOR(A), o(s) aluguel(éis), tributo(s) e despesa(s) vencido(s), oriundo(s) deste contrato, utilizando-se para isso, de todos os meios legais admitidos, inclusive Judicialmente. O(s) cheque(s) utilizado(s) em pagamento, se não compensado(s) até o quinto dia de cada mês, constituirá em mora o LOCATÁRIO(A), facultando ao LOCADOR(A) a aplicação do disposto na Cláusula 25ª.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 24ª.</strong> Todas as despesas diretamente ligadas à conservação e utilização do imóvel, tais como, água, luz, gás, telefone, condomínio, todas as multas pecuniárias decorrentes do não pagamento ou atraso das quantias mencionadas no presente instrumento, bem como os tributos e despesas feitos em órgãos públicos, serão de inteira responsabilidade do LOCATÁRIO(A), que deverá promover os seus respectivos pagamentos.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Parágrafo único.</strong> A inadimplência do LOCATÁRIO(A) acarretará a faculdade do LOCADOR(A) em rescindir de pleno direito o presente instrumento.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 25ª.</strong> O LOCATÁRIO(A), não vindo a efetuar o pagamento do aluguel até a data estipulada na Cláusula 20ª, fica obrigado a pagar multa de <strong>10% (dez por cento)</strong> sobre o valor do aluguel estipulado neste contrato, bem como juros de mora de <strong>1% (um por cento)</strong> ao mês, mais correção monetária (UFIR-RJ). Havendo demanda judicial, além dos encargos previstos, ao débito serão acrescidos honorários dos advogados do procurador do LOCADOR(A), à base de <strong>20% (vinte por cento)</strong>, mais custas.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 26ª.</strong> Em caso de atraso no pagamento dos aluguéis e encargos da locação ou não compensando o cheque destinado para tal fim, constituir-se-á em mora o LOCATÁRI(A), ficando este responsável por todos os pagamentos previstos decorrentes do atraso, sem prejuízo da incidência de multa, juros de mora e correção monetária sobre o valor devido.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Parágrafo único.</strong> Não configurarão novação ou adição às cláusulas contidas no presente instrumento os atos de mera tolerância referentes ao atraso no pagamento do aluguel ou quaisquer outros tributos e despesas.<br><br>

		<strong class="big-contrato">DA MULTA POR INFRAÇÃO</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 27ª.</strong> As partes estipulam o pagamento da multa no valor de <strong>03 (três) aluguéis</strong> vigentes à época da ocorrência do fato na forma do Art. 4º da Lei nº 8.245/91 a ser aplicada àquele que infringir quaisquer das cláusulas contidas neste contrato, exceto quando da ocorrência das hipóteses previstas na Cláusula 30ª a) e b)<strong>.</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 28ª.</strong> Caso venha o LOCATÁRIO(A) a devolver o imóvel antes de decorridos os <strong><?php echo $prazo_de_vigencia; ?> mêses</strong> de vigência do contrato, o mesmo pagará, a título de multa contratual, o valor equivalente a 03 (três) vezes o valor do aluguel, vigentes a data do evento, sem prejuízo do disposto nas Cláusulas 24ª e 25ª, <strong>na forma do Art. 4º da Lei 8.245/91.</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DA DEVOLUÇÃO DO IMÓVEL FINDO O PRAZO DA LOCAÇÃO</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 29ª.</strong> O LOCATÁRIO(A) restituirá o imóvel locado nas mesmas condições em que o recebeu, conforme termo de vistoria firmado entre as partes contratantes e em perfeitas condições de uso.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DA RESCISÃO</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 30ª.</strong> Ocorrerá a rescisão do presente contrato, independentemente de qualquer comunicação prévia ou indenização por parte do LOCATÁRIO(A), quando: a) Ocorrendo qualquer sinistro, incêndio ou algo que venha a impossibilitar a posse e uso do imóvel ao fim que se destina, independentemente de dolo ou culpa do LOCATÁRIO(A); b) Em hipótese de desapropriação do imóvel alugado; c) Nas situações elencadas no presente instrumento.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 31ª.</strong> Caso o imóvel seja utilizado pelo LOCATÁRIO(A) de forma diversa daquela pactuada na presente locação, será facultado ao LOCADOR(A) rescindir o presente contrato de pleno, sem gerar direito à indenização ao LOCATÁRIO(A) ou quaisquer ônus a estes últimos e sem prejuízo, ainda, da obrigação do LOCATÁRIO(A) de efetuar o pagamento das multas e despesas previstas nas Cláusula 25ª e 27ª deste instrumento.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DO PRAZO DE LOCAÇÃO</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 32ª.</strong> A presente locação terá o prazo de duração será de <strong><?php echo $prazo_de_vigencia; ?> mêses</strong>, exclusivamente para fins comerciais, a iniciar-se-á no dia <strong><?php echo $data_de_inicio; ?></strong>,<strong> tendo como término o dia <?php echo $data_final; ?>.</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 33ª.</strong> Findo o prazo estipulado neste contrato e não havendo Ação Renovatória, o mesmo cessará de pleno direito, independente de qualquer notificação ou interpelação.<br><br>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DA PRORROGAÇÃO DO CONTRATO</strong><br><br>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 34ª.</strong> O presente instrumento poderá ser renovado quando não ocorrerem as exceções contidas no artigo nº 52 da Lei 8.245/91 (Lei do Inquilinato).<br><br>
	
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 35ª.</strong> Caso o LOCATÁRIO(A) permaneça no imóvel locado, por mais de trinta dias, após o decurso do prazo da locação previsto na Cláusula 32ª e sem oposição do LOCADOR(A), restará presumida a <strong>renovação automática</strong> deste instrumento, inclusive e principalmente no que tange às garantias oferecidas, com o que anui LOCATÁRIO(A) e FIADOR(A), desde que não existam débitos pendentes de qualquer natureza e/ou descumprimento de qualquer das obrigações do LOCATÁRIO(A) previstas neste contrato, ressalvado, ainda, o previsto na Cláusula 5ª.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DA OUTORGA DE PROCURAÇÕES SOLIDÁRIAS</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 36ª. </strong>Outorgam-se LOCATÁRIO(A) e FIADOR(A) procurações recíprocas entre si para receber solidariamente notificações, citações, intimações, negociar, acordar, dar e receber e assinar entre outros tantos poderes.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>CONDIÇÕES GERAIS</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 37ª.</strong> Este contrato passa a vigorar entre as partes conforme o termo inicial exposto na Clausula 32ª ou, caso não seja possível a entrega das chaves, a partir da assinatura do mesmo, sem que seja imputado qualquer ônus ao LOCADOR(A).<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 38ª.</strong> Os herdeiros, sucessores ou cessionários das partes contratantes se obrigam desde já ao inteiro teor deste contrato.<br><br>

		Por estarem assim justos e contratados, firmam o presente instrumento, em 3 (três) vias de igual teor, juntamente com 2 (duas) testemunhas.<br><br>

		&nbsp;

		Rio de Janeiro, ____ de ______________ de ________.<br><br><br><br>
		
	
		<table style="width: 100%;text-align: center;">
			<tr>
				<td style=" vertical-align: top; ">
					<?php 
						foreach ($locadores as $locador) { 
							$assinald = '<strong style="text-transform: uppercase">' . get_the_title($locador) . '</strong><br>
							CPF nº ' . get_field('cpf', $locador) . '<br>
							LOCADOR(A)
							<br><br>
							_________________________________<br><br>';
						} 
					?>
				</td>
				<td style=" vertical-align: top; ">
					<?php 
						foreach ($locatarios as $locatario) { 
							$assinalt = '<strong style="text-transform: uppercase">' . get_the_title($locatario) . '</strong><br>
							CPF nº ' . get_field('cpf', $locatario) . '<br>
							LOCATÁRIO(A)
							<br><br>
							________________________________<br><br>';

						} 
					?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<?php 
						if($garanita == 'Fiador') {
							$assinafiador = '<strong style="text-transform: uppercase">' . $fiador_nome . '</strong><br>'
							. $fiador_cpf . '<br>
							FIADOR(A)
							<br><br>
							________________________________<br><br>';
						} 
					?>
				</td>
			</tr>
		</table>
		<br><br>
		Testemunhas:
		<table style="width: 100%;">
			<tr>
				<td style=" vertical-align: top; ">
					1 - Nome:<br>
					CPF:_______________-_____
				</td>
				<td style=" vertical-align: top; ">
					2 - Nome:<br>
					CPF:_______________-_____
				</td>
			</tr>
		</table>
	</div>
</div>
</div>


<?php 

$contrato_todo = '
<div style="font-family: Garamond; font-size: 15px; line-height: 1.3; text-align: justify;">
<h2 style="text-align: center; font-size: 22px; text-decoration: underline; font-weight: 700; margin-bottom: 0;">CONTRATO DE LOCAÇÃO COMERCIAL
		IDENTIFICAÇÃO DAS PARTES CONTRATANTES</h2><br><br>
		<div style="display: block; float: left; border: 1px solid; padding: 20px 20px 0; margin-bottom: 20px;">
		
		' . $locadoresfor . $locatariosfor . $fiadorfor . '</div>
		
		 		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Parágrafo primeiro: </strong>A presente garantia somente será finda aos FIADORES quando da efetiva entrega do imóvel e após a devida vistoria e, ainda, responderá, também, por quaisquer débitos que à época existirem decorrentes da locação, inclusive obras de recuperação do imóvel em decorrência do mau uso ou restituição ao estado entregue.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Parágrafo segundo: </strong>No caso da presente garantia se tornar insuficiente para cobrir débitos deixados pelo(a) LOCATÁRIO(A), e não sendo estes quitados no ato da entrega das chaves, o valor devido será cobrado por ação própria, acrescida de perda de aluguéis pelo prazo em que o imóvel ficar desocupado, dependendo de obras ou providências que sejam de responsabilidade do LOCATÁRIO(A).<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Parágrafo terceiro: </strong>Caso o LOCATÁRIO(A) venha a requerer a substituição da garantia pactuada por outra que venha a ser aceita pelo LOCADOR(A), a substituição da garantia somente produzirá efeitos após cumpridas todas as formalidades, inclusive com a assinatura do necessário termo Aditivo por todas as partes, e desde que não existam débitos pendentes de qualquer natureza, respondendo a garantia previa e expressamente pactuada em relação a todos os termos deste contrato, para todos os fins, enquanto não validamente substituída.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DO OBJETO DO CONTRATO</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 2ª.</strong> O presente contrato tem como OBJETO imóvel de propriedade do LOCADOR(A), sito à <strong>' . $imovel_endereco . ', ' . $imovel_numero . ' - ' . $imovel_bairro . ', ' . $imovel_cidade . '/' . $imovel_estado . ', CEP: ' . $imovel_cep . '</strong>, livre de ônus ou quaisquer dívidas.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 3ª.</strong> O imóvel ora é entregue pelo LOCADOR(A) ao LOCATÁRIO(A)<strong> conforme termo de entrega de chaves em anexo</strong>, bem como relatório de vistoria a ser emitido por empresa especializada.<br><br>

		<strong class="big-contrato">Parágrafo Único: </strong>O LOCATÁRIO(A) declara ter recebido, neste ato, o termo de vistoria do imóvel com todo o descritivo, que após 15 (quinze) dias, não havendo qualquer objeção de sua parte, será considerado aceito na íntegra em caráter irretratável e irrevogável.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DA UTILIZAÇÃO DO IMÓVEL</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 4ª.</strong> A presente Locação destina-se única e restritivamente ao uso do imóvel para fins COMERCIAIS, de acordo com este instrumento e Convenção e Estatutos do Condomínio, sem prejuízo das demais leis vigentes, sendo vedado ao LOCATÁRIO(A), ainda, sublocá-lo ou usá-lo de forma adversa do previsto, sob pena de rescisão contratual, mais perdas e danos.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DAS CONDIÇÕES DO IMÓVEL</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 5ª.</strong> O imóvel objeto deste contrato será entregue conforme relatório de vistoria, a ser elaborado por empresa especializada, e deve ser mantido, em perfeitas condições de uso e destinação até a data da sua devolução.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 6ª.</strong> Fica também acordado que o imóvel locado será devolvido pelo LOCATÁRIO(A) em perfeitas condições de uso, estando condicionado à entrega das chaves o pagamento pontual ou reembolso ao LOCADOR(A), no caso em que este venha a fazê-lo, de todos os tributos, taxas, impostos e despesas relativos ao imóvel, tais como: Imposto Predial Territorial Urbano (IPTU), taxa de serviços públicos, taxas municipais, estaduais e federais, água e esgoto, luz e força, gás, telefone, taxa de incêndio, condomínio e cotas, e outras que recaiam sobre o imóvel ora locado, <strong>bem como os comprovantes de encerramento das contas junto às concessionárias (luz, gás e água), com a devida quitação,</strong> ficando certo que, no caso de descumprimento dessas e outras obrigações, será facultado ao LOCADOR(A) recusarem-se a receber as chaves, caso em que o LOCATÁRIO(A) será compelido a pagar, no prazo derradeiro de 24h (vinte e quatro) horas, independentemente de notificação verbal ou escrita, judicial ou extrajudicial, todos os débitos existentes, sem prejuízo dos aluguéis que forem vencendo até a entrega desembaraçada das chaves.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>BENFEITORIAS, OBRAS E CONSTRUÇÕES</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 7ª.</strong> Quaisquer benfeitorias ou obras no imóvel objeto deste deverão ser submetidas à prévia e expressa autorização do LOCADOR(A), que poderão não concordar.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 8ª.</strong> Vindo a serem feitas benfeitorias ou obras pelo LOCATÁRIO(A) sem a concordância do LOCADOR(A), será facultado ao LOCADOR(A) exigir ou não a modificação do imóvel ao seu estado original, sendo que, em caso de exigência, todos os ônus necessários à modificação serão arcados pelo LOCATÁRIO(A).<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 9ª.</strong> As benfeitorias, obras, consertos ou reparos farão parte integrante do imóvel, não assistindo ao LOCATÁRIO(A) o direito de retenção ou indenização sobre os mesmos.<br><br>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DO DIREITO DE PREFERÊNCIA E DAS VISTORIAS ESPORÁDICAS</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 10ª.</strong> O LOCATÁRIO(A) permitirá ao LOCADOR(A), ou pessoa por eles indicada, realizar vistorias no imóvel em dia e hora a serem combinados entre as partes, a fim de averiguar o funcionamento de todas as instalações, dos acessórios e dos equipamentos de segurança. Constatado algum vício que possa afetar a estrutura física do imóvel ficará o LOCATÁRIO(A) obrigado a realizar o conserto, no prazo máximo de 20 (vinte) dias, salvo se a urgência exigir prazo menor. Não sendo adotadas as providências cabíveis por parte do LOCATÁRIO(A), aos LOCADOR(A) será facultado o direito de rescindir o presente contrato, sem prejuízo do recebimento dos numerários neste previstos, inclusive multa compensatória.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 11ª.</strong> O LOCADOR(A), em qualquer tempo, poderão alienar o imóvel, mesmo durante a vigência do contrato de locação e, por via de consequência transferir ao novo adquirente da unidade imobiliária os direitos contidos neste contrato.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 12ª.</strong> O LOCADOR(A) deverá notificar o LOCATÁRIO(A) sobre a intenção de venda do imóvel, para que este possa exercer seu direito de preferência na aquisição do mesmo, nas mesmas condições oferecidas a terceiros. Para efetivação da preferência deverá o LOCATÁRIO(A) responder a notificação, de maneira inequívoca, no prazo de 30 dias contados do seu recebimento, sendo que esta resposta, para ser considerada válida, deverá ocorrer através de Cartório de Títulos e Documentos.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 13ª.</strong> Não havendo manifestação de interesse do LOCATÁRIO(A) na aquisição do imóvel, este deverá permitir que os interessados na sua compra façam visitas em dias e horários a serem combinados entre as partes envolvidas.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DOS ATOS DE INFORMAÇÃO ENTRE OS CONTRATANTES</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 14ª.</strong> As partes integrantes deste contrato ficam desde já acordadas a se comunicarem somente por escrito, através de qualquer meio admitido no Direito. Na ausência ou impedimento do LOCATÁRIO(A), o mesmo obrigar-se-á a expressamente nomear, para sua representação, representante ou bastante procurador.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DO SEGURO CONTRA INCÊNDIO E OUTRAS PROVIDÊNCIAS</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 15ª.</strong> Comprometer-se-á o LOCATÁRIO(A) ao pagamento das despesas com o prêmio de seguro anual contra incêndio e outros danos ao imóvel, que será contratado exclusivamente pelo procurador do LOCADOR(A), com base no valor de reconstrução do bem.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 16ª.</strong> O contrato de seguro terá vigência enquanto perdurar a Locação, incluindo-se a renovação, possuindo como beneficiário o LOCADOR(A), no que concerne ao imóvel e seus acessórios, e o próprio LOCATÁRIO(A) quanto aos bens de sua propriedade.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 17ª.</strong> Fica o LOCATÁRIO(A) obrigado a arcar com as despesas com a contratação do seguro descrito na cláusula 15ª, a partir do ato da entrega das chaves do imóvel objeto do contrato.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 18ª.</strong> Em caso de qualquer acidente que porventura venha a ocorrer no imóvel por culpa ou dolo do LOCATÁRIO(A), este obrigar-se-á ao pagamento de todas as despesas por danos causados ao imóvel e/ou a terceiros decorrentes do evento, devendo, ainda, caso assim deseje o LOCADOR(A), restituí-lo ao estado original em que locado, de acordo com o termo de vistoria, mais a multa prevista na cláusula 27ª.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DAS DESPESAS PARA O INÍCIO, USO E FRUIÇÃO</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 19ª.</strong> Ficará a cargo do LOCATÁRIO(A) a obtenção de todos os pré-requisitos para a efetivação da locação e necessários ao uso e fruição do imóvel, como alvarás, licença de funcionamento, etc., devendo, ainda, requerer junto as concessionárias públicas a ligação dos serviços em seu nome, concorrendo com todas as despesas pertinentes, além de comunicar à administração do condomínio a locação nova, exibindo-lhes os documentos comprobatórios necessários, sob pena de arcar com os prejuízos causados em decorrência da sua omissão.<br><br>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>VALOR DO ALUGUEL, DESPESAS E TRIBUTOS</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 20ª.</strong> Como aluguel mensal, o LOCATÁRIO(A) se obriga a pagar o valor de <strong>R$ ' . $imovel_valor_da_locacao . '</strong>, devendo fazê-lo até o dia <strong>' . $dia_do_vencimento . '</strong> de cada mês, sendo certo que restou ajustada uma carência de 8 meses exclusivamente em relação a este, sem prejuízo das demais taxas e encargos locatícios a partir da assinatura do presente instrumento, sob pena de responder por multa, juros, correção monetária e despesas previstas nas Cláusulas 24ª e 25ª a seguir em caso de não pagamento em dia das obrigações ora contratadas.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 21ª.</strong> Convencionam as partes que o aluguel será cobrado pelo procurador do LOCADOR(A) ao LOCATÁRIO(A), através de recibos mensais, emitidos através de ficha de compensação bancária e que serão remetidos para o endereço do imóvel locado. Nos recibos, além do valor do aluguel, estarão contidos todos os valores discriminados referentes às despesas mensais do imóvel previstas neste contrato, de obrigação do LOCATÁRIO(A), independentemente de suas datas próprias de vencimento. Caso o LOCATÁRIO(A) venha a efetuar o pagamento do aluguel através de cheque, a quitação somente será considerada após a compensação do mesmo.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 22ª.</strong> O valor do aluguel será reajustado anualmente, tendo-se como base os índices previstos e acumulados no período anual do <strong>IGP-M/FGV</strong>, em caso de falta deste índice, o reajustamento do aluguel terá por base a média da variação dos índices inflacionários do ano corrente ao da execução do aluguel, até o primeiro dia anterior ao pagamento de todos os valores devidos. Ocorrendo alguma mudança no âmbito governamental, todos os valores agregados ao aluguel, bem como o próprio aluguel, serão revistos pelas partes. Tal reajuste ocorrerá independentemente de aviso ou interpelação judicial prévia, e vigorará entre as partes, no primeiro dia útil subsequente a ocorrência do mesmo.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 23ª.</strong> Será cobrado do LOCATÁRIO(A), pelo LOCADOR(A), o(s) aluguel(éis), tributo(s) e despesa(s) vencido(s), oriundo(s) deste contrato, utilizando-se para isso, de todos os meios legais admitidos, inclusive Judicialmente. O(s) cheque(s) utilizado(s) em pagamento, se não compensado(s) até o quinto dia de cada mês, constituirá em mora o LOCATÁRIO(A), facultando ao LOCADOR(A) a aplicação do disposto na Cláusula 25ª.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 24ª.</strong> Todas as despesas diretamente ligadas à conservação e utilização do imóvel, tais como, água, luz, gás, telefone, condomínio, todas as multas pecuniárias decorrentes do não pagamento ou atraso das quantias mencionadas no presente instrumento, bem como os tributos e despesas feitos em órgãos públicos, serão de inteira responsabilidade do LOCATÁRIO(A), que deverá promover os seus respectivos pagamentos.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Parágrafo único.</strong> A inadimplência do LOCATÁRIO(A) acarretará a faculdade do LOCADOR(A) em rescindir de pleno direito o presente instrumento.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 25ª.</strong> O LOCATÁRIO(A), não vindo a efetuar o pagamento do aluguel até a data estipulada na Cláusula 20ª, fica obrigado a pagar multa de <strong>10% (dez por cento)</strong> sobre o valor do aluguel estipulado neste contrato, bem como juros de mora de <strong>1% (um por cento)</strong> ao mês, mais correção monetária (UFIR-RJ). Havendo demanda judicial, além dos encargos previstos, ao débito serão acrescidos honorários dos advogados do procurador do LOCADOR(A), à base de <strong>20% (vinte por cento)</strong>, mais custas.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 26ª.</strong> Em caso de atraso no pagamento dos aluguéis e encargos da locação ou não compensando o cheque destinado para tal fim, constituir-se-á em mora o LOCATÁRI(A), ficando este responsável por todos os pagamentos previstos decorrentes do atraso, sem prejuízo da incidência de multa, juros de mora e correção monetária sobre o valor devido.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Parágrafo único.</strong> Não configurarão novação ou adição às cláusulas contidas no presente instrumento os atos de mera tolerância referentes ao atraso no pagamento do aluguel ou quaisquer outros tributos e despesas.<br><br>

		<strong class="big-contrato">DA MULTA POR INFRAÇÃO</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 27ª.</strong> As partes estipulam o pagamento da multa no valor de <strong>03 (três) aluguéis</strong> vigentes à época da ocorrência do fato na forma do Art. 4º da Lei nº 8.245/91 a ser aplicada àquele que infringir quaisquer das cláusulas contidas neste contrato, exceto quando da ocorrência das hipóteses previstas na Cláusula 30ª a) e b)<strong>.</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 28ª.</strong> Caso venha o LOCATÁRIO(A) a devolver o imóvel antes de decorridos os <strong>' . $prazo_de_vigencia . ' mêses</strong> de vigência do contrato, o mesmo pagará, a título de multa contratual, o valor equivalente a 03 (três) vezes o valor do aluguel, vigentes a data do evento, sem prejuízo do disposto nas Cláusulas 24ª e 25ª, <strong>na forma do Art. 4º da Lei 8.245/91.</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DA DEVOLUÇÃO DO IMÓVEL FINDO O PRAZO DA LOCAÇÃO</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 29ª.</strong> O LOCATÁRIO(A) restituirá o imóvel locado nas mesmas condições em que o recebeu, conforme termo de vistoria firmado entre as partes contratantes e em perfeitas condições de uso.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DA RESCISÃO</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 30ª.</strong> Ocorrerá a rescisão do presente contrato, independentemente de qualquer comunicação prévia ou indenização por parte do LOCATÁRIO(A), quando: a) Ocorrendo qualquer sinistro, incêndio ou algo que venha a impossibilitar a posse e uso do imóvel ao fim que se destina, independentemente de dolo ou culpa do LOCATÁRIO(A); b) Em hipótese de desapropriação do imóvel alugado; c) Nas situações elencadas no presente instrumento.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 31ª.</strong> Caso o imóvel seja utilizado pelo LOCATÁRIO(A) de forma diversa daquela pactuada na presente locação, será facultado ao LOCADOR(A) rescindir o presente contrato de pleno, sem gerar direito à indenização ao LOCATÁRIO(A) ou quaisquer ônus a estes últimos e sem prejuízo, ainda, da obrigação do LOCATÁRIO(A) de efetuar o pagamento das multas e despesas previstas nas Cláusula 25ª e 27ª deste instrumento.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DO PRAZO DE LOCAÇÃO</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 32ª.</strong> A presente locação terá o prazo de duração será de <strong>' . $prazo_de_vigencia . ' mêses</strong>, exclusivamente para fins comerciais, a iniciar-se-á no dia <strong>' . $data_de_inicio . '</strong>,<strong> tendo como término o dia ' . $data_final . '.</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 33ª.</strong> Findo o prazo estipulado neste contrato e não havendo Ação Renovatória, o mesmo cessará de pleno direito, independente de qualquer notificação ou interpelação.<br><br>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DA PRORROGAÇÃO DO CONTRATO</strong><br><br>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 34ª.</strong> O presente instrumento poderá ser renovado quando não ocorrerem as exceções contidas no artigo nº 52 da Lei 8.245/91 (Lei do Inquilinato).<br><br>
	
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 35ª.</strong> Caso o LOCATÁRIO(A) permaneça no imóvel locado, por mais de trinta dias, após o decurso do prazo da locação previsto na Cláusula 32ª e sem oposição do LOCADOR(A), restará presumida a <strong>renovação automática</strong> deste instrumento, inclusive e principalmente no que tange às garantias oferecidas, com o que anui LOCATÁRIO(A) e FIADOR(A), desde que não existam débitos pendentes de qualquer natureza e/ou descumprimento de qualquer das obrigações do LOCATÁRIO(A) previstas neste contrato, ressalvado, ainda, o previsto na Cláusula 5ª.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DA OUTORGA DE PROCURAÇÕES SOLIDÁRIAS</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 36ª. </strong>Outorgam-se LOCATÁRIO(A) e FIADOR(A) procurações recíprocas entre si para receber solidariamente notificações, citações, intimações, negociar, acordar, dar e receber e assinar entre outros tantos poderes.<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>CONDIÇÕES GERAIS</strong><br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 37ª.</strong> Este contrato passa a vigorar entre as partes conforme o termo inicial exposto na Clausula 32ª ou, caso não seja possível a entrega das chaves, a partir da assinatura do mesmo, sem que seja imputado qualquer ônus ao LOCADOR(A).<br><br>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Cláusula 38ª.</strong> Os herdeiros, sucessores ou cessionários das partes contratantes se obrigam desde já ao inteiro teor deste contrato.<br><br>

		Por estarem assim justos e contratados, firmam o presente instrumento, em 3 (três) vias de igual teor, juntamente com 2 (duas) testemunhas.<br><br>

		&nbsp;
		
		Rio de Janeiro, ____ de ______________ de ________.<br><br><br><br>

		<table style="width: 100%;text-align: center;">
			<tr>
				<td style=" vertical-align: top; ">
					' . $assinald . '
				</td>
				<td style=" vertical-align: top; ">
					' . $assinalt . '
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					' . $assinafiador . '
				</td>
			</tr>
		</table>
		<br><br>
		Testemunhas:
		<table style="width: 100%;">
			<tr>
				<td style=" vertical-align: top; ">
					1 - Nome:<br>
					CPF:_______________-_____
				</td>
				<td style=" vertical-align: top; ">
					2 - Nome:<br>
					CPF:_______________-_____
				</td>
			</tr>
		</table>


</div>
'; ?>

<?php  
	
	$_SESSION['foo'] = $contrato_todo; 
	$_SESSION['nome-arquivo'] = get_the_title($id); 
	
?>

</div>