<?php
require_once('lib/nusoap.php');

	function hello($username, $sobrenome) {
		return 'Bom dia, '.$username.' '.$sobrenome. '!';
	}

	//MODELO COM CONEXÃO COM O BANCO
	function getUsuarios(){
		$cliente = new nusoap_client('https://localhost/Estudo/webservice/servidor.php?wsdl','wsdl');

		$conn = mysql_connect("localhost","root","123456"); // editar host, usuario, senha - Conecta
		mysql_select_db("teste",$conn); 					// editar para o seu banco de dados       -
		$sql = "SELECT * FROM teste";																					// - Faz o Select
		$query = mysql_query($sql, $conn);																				// - recebe o select
		
		$res = mysql_fetch_array($query);

		return ($res);
	}


	function enviaDados($reginJucesc, $cpfCnpj, $nomeFantasiaEmpresa, $fone, $razaoSocial, $nomeContato, $eMail, $nome,
											$foneProprietario, $cnpjCpf, $eMailProprietario, $nomeEdificacao, $nomeFantasiaEdificacao, $numeroRE,
											$logradouro, $numero, $cidade, $nomeEndereco, $bairro, $cep, $ocupacao, $situacao, $pavimentos, $tipoEscada,
											$numeroPessoas, $tipoContrucao, $numeroBlocos, $gas, $gasQuantidade, $liquidoInflamavel, $quantidadeLiquido,
											$explosivos, $microEmpreendedor, $quantidadeFuncionarios, $outroPredio, $areaPredio, $areaEdificacao){

		$cliente = new nusoap_client('https://localhost/Estudo/webservice/servidor.php?wsdl','wsdl');

		$parametros = array('Vistoria'=>
			'<solicitacao>
			  <regin>
			    <pergunta>Existe protoco de consulta de viabilidade expedido pelo REGIN/JUCESC</pergunta>
			    <tipo>checkbox</tipo>
			    <perguntaComplementar>Informar REGIN/JUCESC</perguntaComplementar>
			    <tipo>text</tipo>
					<resposta>'.$reginJucesc.'</resposta>
			  </regin>

			  <empresa>
			    <cpfcnpj>
			      <pergunta>CPF/CNPJ</pergunta>
			      <tipo>text</tipo>
						<resposta>'.$cpfCnpj.'</resposta>
			    </cpfcnpj>

			    <nomeFantasia>
			      <pergunta>Nome Fantasia Empresa</pergunta>
			      <tipo>text</tipo>
						<resposta>'.$nomeFantasiaEmpresa.'</resposta>
			    </nomeFantasia>

			    <fone>
			      <pergunta>Fone</pergunta>
			      <tipo>number</tipo>
						<resposta>'.$fone.'</resposta>
			    </fone>

			    <razaosocial>
			      <pergunta>Razão Social</pergunta>
			      <tipo>text</tipo>
						<resposta>'.$razaoSocial.'</resposta>
			    </razaosocial>

			    <nomecontato>
			      <pergunta>Nome Contato</pergunta>
			      <tipo>text</tipo>
						<resposta>'.$nomeContato.'</resposta>
			    </nomecontato>

			    <email>
			      <pergunta>E-mail</pergunta>
			      <tipo>text</tipo>
						<resposta>'.$eMail.'</resposta>
			    </email>
			  </empresa>
			  <proprietarioEdificacao>
			    <nome>
			      <pergunta>Nome</pergunta>
			      <tipo>text</tipo>
						<resposta>'.$nome.'</resposta>
			    </nome>

			    <foneproprietario>
			      <pergunta>Fone</pergunta>
			      <tipo>text</tipo>
						<resposta>'.$foneProprietario.'</resposta>
			    </foneproprietario>

			    <cnpjcpf>
			      <pergunta>CNPJ/CPF</pergunta>
			      <tipo>text</tipo>
						<resposta>'.$cnpjCpf.'</resposta>
			    </cnpjcpf>

			    <emailProprietario>
			      <pergunta>E-mail</pergunta>
			      <tipo>text</tipo>
						<resposta>'.$eMailProprietario.'</resposta>
			    </emailProprietario>
			  </proprietarioEdificacao>

			  <edificacao>
			    <nomeEdificacao>
			      <pergunta>Nome</pergunta>
			      <tipo>text</tipo>
						<resposta>'.$nomeEdificacao.'</resposta>
			    </nomeEdificacao>

			    <nomeFantasiaEdificacao>
			      <pergunta>Nome Fantasia</pergunta>
			      <tipo>text</tipo>
						<resposta>'.$nomeFantasiaEdificacao.'</resposta>
			    </nomeFantasiaEdificacao>

			    <numeroRE>
			      <pergunta>Número RE</pergunta>
			      <tipo>number</tipo>
						<resposta>'.$numeroRE.'</resposta>
			    </numeroRE>

			    <endereco>
			      <logradouro>
			        <pergunta>Logradouro</pergunta>
			        <tipo>combobox</tipo>
							<opcoes>
				        <opcao value="68">ACERTAR</opcao>
				        <opcao value="66">ACESSO</opcao>
				        <opcao value="245">ACESSO NORTE</opcao>
				        <opcao value="70">AEROPORTO</opcao>
				        <opcao value="71">ALAMEDA</opcao>
				        <opcao value="65">AREA</opcao>
				        <opcao value="75">ASSENTAMENTO</opcao>
				        <opcao value="79">AVENIDA</opcao>
				        <opcao value="83">BAIRRO</opcao>
				        <opcao value="84">BALNEARIO</opcao>
				        <opcao value="85">BARRA</opcao>
				        <opcao value="86">BECO</opcao>
				        <opcao value="92">BOSQUE</opcao>
				        <opcao value="98">CAMINHO</opcao>
				        <opcao value="100">CENTRO</opcao>
				        <opcao value="101">CHACARA</opcao>
				        <opcao value="104">CIDADE</opcao>
				        <opcao value="109">CLINICA</opcao>
				        <opcao value="112">CONDOMINIO</opcao>
				        <opcao value="106">CONJUNTO</opcao>
				        <opcao value="107">CONJUNTO HABITACIONAL</opcao>
				        <opcao value="108">CONJUNTO RESIDENCIAL</opcao>
				        <opcao value="118">CONTORNO VIARIO</opcao>
				        <opcao value="121">DISTRITO</opcao>
				        <opcao value="127">ESTACIONAMENTO</opcao>
				        <opcao value="126">ESTRADA</opcao>
				        <opcao value="130">ESTRADA ESTADUAL</opcao>
				        <opcao value="128">ESTRADA GERAL</opcao>
				        <opcao value="139">FAZENDA</opcao>
				        <opcao value="143">FORTE</opcao>
				        <opcao value="147">ILHA</opcao>
				        <opcao value="148">INTERIOR</opcao>
				        <opcao value="149">JARDIM</opcao>
				        <opcao value="153">LADEIRA</opcao>
				        <opcao value="151">LAGEADO</opcao>
				        <opcao value="155">LAGOA</opcao>
				        <opcao value="159">LARGO</opcao>
				        <opcao value="152">LATERAL</opcao>
				        <opcao value="156">LINHA</opcao>
				        <opcao value="157">LOCALIDADE</opcao>
				        <opcao value="158">LOTEAMENTO</opcao>
				        <opcao value="160">MARGEM</opcao>
				        <opcao value="161">MARGEM DIREITA</opcao>
				        <opcao value="163">MARGINAL</opcao>
				        <opcao value="166">MORRO</opcao>
				        <opcao value="168">MUNICIPIO</opcao>
				        <opcao value="169">NUCLEO</opcao>
				        <opcao value="184">PARQUE</opcao>
				        <opcao value="173">PARTICULAR</opcao>
				        <opcao value="186">PASSAGEM</opcao>
				        <opcao value="185">PASSARELA</opcao>
				        <opcao value="174">PASSEIO</opcao>
				        <opcao value="177">PRACA</opcao>
				        <opcao value="182">PRAIA</opcao>
				        <opcao value="191">QUADRA</opcao>
				        <opcao value="196">RAMAL</opcao>
				        <opcao value="197">RDR</opcao>
				        <opcao value="198">RECANTO</opcao>
				        <opcao value="203">RODOVIA</opcao>
				        <opcao value="244">RODOVIA ESTADUAL</opcao>
				        <opcao value="91">RODOVIA FEDERAL</opcao>
				        <opcao value="205">ROTULA</opcao>
				        <opcao value="208">RUA</opcao>
				        <opcao value="215">SERTAO</opcao>
				        <opcao value="213">SERVIDAO</opcao>
				        <opcao value="212">SITIO</opcao>
				        <opcao value="218">TERMINAL</opcao>
				        <opcao value="219">TIFA</opcao>
				        <opcao value="221">TRANSVERSAL</opcao>
				        <opcao value="225">TRAVESSA</opcao>
				        <opcao value="223">TREVO</opcao>
				        <opcao value="228">VIA</opcao>
				        <opcao value="231">VIA EXPRESSA</opcao>
				        <opcao value="239">VILA</opcao>
							</opcoes>
							<resposta>'.$logradouro.'</resposta>
			      </logradouro>

			      <numero>
			        <pergunta>Nº</pergunta>
			        <tipo>number</tipo>
							<resposta>'.$numero.'</resposta>
			      </numero>

			      <cidade>
			        <pergunta>Cidade</pergunta>
			        <tipo>combobox</tipo>
							<opcoes>
				        <opcao value="9939">ABDON BATISTA</opcao>
				        <opcao value="8001">ABELARDO LUZ</opcao>
				        <opcao value="8003">AGROLANDIA</opcao>
				        <opcao value="8807">AGUA DOCE</opcao>
				        <opcao value="8009">AGUAS DE CHAPECO</opcao>
				        <opcao value="5577">AGUAS FRIAS</opcao>
				        <opcao value="8011">AGUAS MORNAS</opcao>
				        <opcao value="8013">ALFREDO WAGNER</opcao>
				        <opcao value="8869">ALTO BELA VISTA</opcao>
				        <opcao value="8015">ANCHIETA</opcao>
				        <opcao value="8017">ANGELINA</opcao>
				        <opcao value="8021">ANITAPOLIS</opcao>
				        <opcao value="9941">APIUNA</opcao>
				        <opcao value="5597">ARABUTA</opcao>
				        <opcao value="8027">ARARANGUA</opcao>
				        <opcao value="8029">ARMAZEM</opcao>
				        <opcao value="8031">ARROIO TRINTA</opcao>
				        <opcao value="8033">ASCURRA</opcao>
				        <opcao value="8035">ATALANTA</opcao>
				        <opcao value="8037">AURORA</opcao>
				        <opcao value="8885">BALNEARIO ARROIO DO SILVA</opcao>
				        <opcao value="8039">BALNEARIO CAMBORIU</opcao>
				        <opcao value="8138">BALNEARIO RINCAO</opcao>
				        <opcao value="8923">BANDEIRANTE</opcao>
				        <opcao value="8940">BARRA BONITA</opcao>
				        <opcao value="8041">BARRA VELHA</opcao>
				        <opcao value="8966">BELA VISTA DO TOLDO</opcao>
				        <opcao value="8043">BENEDITO NOVO</opcao>
				        <opcao value="8045">BIGUAÇÚ</opcao>
				        <opcao value="8047">BLUMENAU</opcao>
				        <opcao value="8982">BOCAINA DO SUL</opcao>
				        <opcao value="8389">BOM JARDIM DA SERRA</opcao>
				        <opcao value="9024">BOM JESUS DO OESTE</opcao>
				        <opcao value="8049">BOM RETIRO</opcao>
				        <opcao value="5537">BOMBINHAS</opcao>
				        <opcao value="8051">BOTUVERA</opcao>
				        <opcao value="8053">BRACO DO NORTE</opcao>
				        <opcao value="5557">BRACO DO TROMBUDO</opcao>
				        <opcao value="9040">BRUNOPOLIS</opcao>
				        <opcao value="8057">CACADOR</opcao>
				        <opcao value="8059">CAIBI</opcao>
				        <opcao value="5553">CALMON</opcao>
				        <opcao value="8061">CAMBORIU</opcao>
				        <opcao value="8067">CAMPO ERE</opcao>
				        <opcao value="8069">CAMPOS NOVOS</opcao>
				        <opcao value="8071">CANELINHA</opcao>
				        <opcao value="9067">CAPAO ALTO</opcao>
				        <opcao value="8075">CAPINZAL</opcao>
				        <opcao value="5545">CAPIVARI DE BAIXO</opcao>
				        <opcao value="8077">CATANDUVAS</opcao>
				        <opcao value="9943">CELSO RAMOS</opcao>
				        <opcao value="9083">CHAPADAO DO LAGEADO</opcao>
				        <opcao value="8081">CHAPECO</opcao>
				        <opcao value="8083">CONCORDIA</opcao>
				        <opcao value="5579">CORDILHEIRA ALTA</opcao>
				        <opcao value="5735">CORONEL MARTINS</opcao>
				        <opcao value="8395">CORREIA PINTO</opcao>
				        <opcao value="8089">CRICIUMA</opcao>
				        <opcao value="8091">CUNHA PORA</opcao>
				        <opcao value="9105">CUNHATAI</opcao>
				        <opcao value="8093">CURITIBANOS</opcao>
				        <opcao value="8099">DONA EMMA</opcao>
				        <opcao value="9945">DOUTOR PEDRINHO</opcao>
				        <opcao value="9121">ENTRE RIOS</opcao>
				        <opcao value="9148">ERMO</opcao>
				        <opcao value="8101">ERVAL VELHO</opcao>
				        <opcao value="8103">FAXINAL DOS GUEDES</opcao>
				        <opcao value="9164">FLOR DO SERTAO</opcao>
				        <opcao value="8105">FLORIANOPOLIS</opcao>
				        <opcao value="5581">FORMOSA DO SUL</opcao>
				        <opcao value="9733">FORQUILHINHA</opcao>
				        <opcao value="8107">FRAIBURGO</opcao>
				        <opcao value="9180">FREI ROGERIO</opcao>
				        <opcao value="8109">GALVAO</opcao>
				        <opcao value="8113">GAROPABA</opcao>
				        <opcao value="8117">GASPAR</opcao>
				        <opcao value="8111">GOVERNADOR CELSO RAMOS</opcao>
				        <opcao value="8119">GRAO PARA</opcao>
				        <opcao value="8121">GRAVATAL</opcao>
				        <opcao value="8123">GUABIRUBA</opcao>
				        <opcao value="8125">GUARACIABA</opcao>
				        <opcao value="8127">GUARAMIRIM</opcao>
				        <opcao value="8129">GUARUJA DO SUL</opcao>
				        <opcao value="5583">GUATAMBU</opcao>
				        <opcao value="8131">HERVAL D´OESTE</opcao>
				        <opcao value="9202">IBIAM</opcao>
				        <opcao value="8133">IBICARE</opcao>
				        <opcao value="8135">IBIRAMA</opcao>
				        <opcao value="8137">ICARA</opcao>
				        <opcao value="8141">IMARUI</opcao>
				        <opcao value="8143">IMBITUBA</opcao>
				        <opcao value="8145">IMBUIA</opcao>
				        <opcao value="8147">INDAIAL</opcao>
				        <opcao value="9229">IOMERE</opcao>
				        <opcao value="8149">IPIRA</opcao>
				        <opcao value="9951">IPORA DO OESTE</opcao>
				        <opcao value="5737">IPUACU</opcao>
				        <opcao value="8151">IPUMIRIM</opcao>
				        <opcao value="9953">IRACEMINHA</opcao>
				        <opcao value="8153">IRANI</opcao>
				        <opcao value="5585">IRATI</opcao>
				        <opcao value="8155">IRINEOPOLIS</opcao>
				        <opcao value="8157">ITA</opcao>
				        <opcao value="8159">ITAIOPOLIS</opcao>
				        <opcao value="8161">ITAJAI</opcao>
				        <opcao value="8163">ITAPEMA</opcao>
				        <opcao value="8165">ITAPIRANGA</opcao>
				        <opcao value="9985">ITAPOA</opcao>
				        <opcao value="8167">ITUPORANGA</opcao>
				        <opcao value="8169">JABORA</opcao>
				        <opcao value="8175">JARAGUA DO SUL</opcao>
				        <opcao value="5587">JARDINOPOLIS</opcao>
				        <opcao value="8177">JOACABA</opcao>
				        <opcao value="9957">JOSE BOITEUX</opcao>
				        <opcao value="9245">JUPIA</opcao>
				        <opcao value="8181">LACERDOPOLIS</opcao>
				        <opcao value="5739">LAGEADO GRANDE</opcao>
				        <opcao value="8183">LAGES</opcao>
				        <opcao value="8185">LAGUNA</opcao>
				        <opcao value="8187">LAURENTINO</opcao>
				        <opcao value="8191">LEBON REGIS</opcao>
				        <opcao value="8193">LEOBERTO LEAL</opcao>
				        <opcao value="9961">LINDOIA DO SUL</opcao>
				        <opcao value="8195">LONTRAS</opcao>
				        <opcao value="8197">LUIZ ALVES</opcao>
				        <opcao value="9261">LUZERNA</opcao>
				        <opcao value="5575">MACIEIRA</opcao>
				        <opcao value="8201">MAJOR GERCINO</opcao>
				        <opcao value="8391">MARACAJA</opcao>
				        <opcao value="8205">MARAVILHA</opcao>
				        <opcao value="9963">MAREMA</opcao>
				        <opcao value="8209">MATOS COSTA</opcao>
				        <opcao value="8211">MELEIRO</opcao>
				        <opcao value="5559">MIRIM DOCE</opcao>
				        <opcao value="8213">MODELO</opcao>
				        <opcao value="8215">MONDAI</opcao>
				        <opcao value="5561">MONTECARLO</opcao>
				        <opcao value="8219">MORRO DA FUMACA</opcao>
				        <opcao value="5539">MORRO GRANDE</opcao>
				        <opcao value="8221">NAVEGANTES</opcao>
				        <opcao value="8223">NOVA ERECHIM</opcao>
				        <opcao value="5589">NOVA ITABERABA</opcao>
				        <opcao value="8225">NOVA TRENTO</opcao>
				        <opcao value="8227">NOVA VENEZA</opcao>
				        <opcao value="5591">NOVO HORIZONTE</opcao>
				        <opcao value="8231">OURO</opcao>
				        <opcao value="5741">OURO VERDE</opcao>
				        <opcao value="9288">PAIAL</opcao>
				        <opcao value="9300">PAINEL</opcao>
				        <opcao value="8233">PALHOCA</opcao>
				        <opcao value="8235">PALMA SOLA</opcao>
				        <opcao value="8237">PALMITOS</opcao>
				        <opcao value="5747">PARAISO</opcao>
				        <opcao value="5541">PASSO DE TORRES</opcao>
				        <opcao value="5743">PASSOS MAIA</opcao>
				        <opcao value="8241">PAULO LOPES</opcao>
				        <opcao value="8243">PEDRAS GRANDES</opcao>
				        <opcao value="8245">PENHA</opcao>
				        <opcao value="8247">PERITIBA</opcao>
				        <opcao value="8186">PESCARIA BRAVA</opcao>
				        <opcao value="8249">PETROLANDIA</opcao>
				        <opcao value="8251">PICARRAS</opcao>
				        <opcao value="8255">PINHEIRO PRETO</opcao>
				        <opcao value="8257">PIRATUBA</opcao>
				        <opcao value="5593">PLANALTO ALEGRE</opcao>
				        <opcao value="8259">POMERODE</opcao>
				        <opcao value="8261">PONTE ALTA</opcao>
				        <opcao value="5569">PONTE ALTA DO NORTE</opcao>
				        <opcao value="8263">PONTE SERRADA</opcao>
				        <opcao value="8265">PORTO BELO</opcao>
				        <opcao value="8267">PORTO UNIAO</opcao>
				        <opcao value="8269">POUSO REDONDO</opcao>
				        <opcao value="8271">PRAIA GRANDE</opcao>
				        <opcao value="8273">PRESIDENTE CASTELO BRANCO</opcao>
				        <opcao value="8275">PRESIDENTE GETULIO</opcao>
				        <opcao value="8277">PRESIDENTE NEREU</opcao>
				        <opcao value="9342">PRINCESA</opcao>
				        <opcao value="8279">QUILOMBO</opcao>
				        <opcao value="8281">RANCHO QUEIMADO</opcao>
				        <opcao value="8283">RIO DAS ANTAS</opcao>
				        <opcao value="8285">RIO DO CAMPO</opcao>
				        <opcao value="8287">RIO DO OESTE</opcao>
				        <opcao value="8291">RIO DO SUL</opcao>
				        <opcao value="8293">RIO FORTUNA</opcao>
				        <opcao value="5749">RIQUEZA</opcao>
				        <opcao value="8297">RODEIO</opcao>
				        <opcao value="8299">ROMELANDIA</opcao>
				        <opcao value="8301">SALETE</opcao>
				        <opcao value="9369">SALTINHO</opcao>
				        <opcao value="8303">SALTO VELOSO</opcao>
				        <opcao value="8305">SANTA CECILIA</opcao>
				        <opcao value="5751">SANTA HELENA</opcao>
				        <opcao value="8307">SANTA ROSA DE LIMA</opcao>
				        <opcao value="5555">SANTA TEREZINHA</opcao>
				        <opcao value="9385">SANTA TEREZINHA DO PROGRESSO</opcao>
				        <opcao value="9407">SANTIAGO DO SUL</opcao>
				        <opcao value="8309">SANTO AMARO DA IMPERATRIZ</opcao>
				        <opcao value="8311">SAO BENTO DO SUL</opcao>
				        <opcao value="9423">SAO BERNARDINO</opcao>
				        <opcao value="8313">SAO BONIFACIO</opcao>
				        <opcao value="8315">SAO CARLOS</opcao>
				        <opcao value="5573">SAO CRISTOVAO DO SUL</opcao>
				        <opcao value="8317">SAO DOMINGOS</opcao>
				        <opcao value="8319">SAO FRANCISCO DO SUL</opcao>
				        <opcao value="5551">SAO JOAO DO ITAPERIU</opcao>
				        <opcao value="5753">SAO JOAO DO OESTE</opcao>
				        <opcao value="8323">SAO JOAO DO SUL</opcao>
				        <opcao value="8325">SAO JOAQUIM</opcao>
				        <opcao value="8327">SAO JOSE</opcao>
				        <opcao value="8329">SAO JOSE DO CEDRO</opcao>
				        <opcao value="8331">SAO JOSE DO CERRITO</opcao>
				        <opcao value="8333">SAO LOURENCO D´OESTE</opcao>
				        <opcao value="8335">SAO LUDGERO</opcao>
				        <opcao value="8337">SAO MARTINHO</opcao>
				        <opcao value="5755">SAO MIGUEL DA BOA VISTA</opcao>
				        <opcao value="8339">SAO MIGUEL DOESTE</opcao>
				        <opcao value="9440">SAO PEDRO DE ALCANTARA</opcao>
				        <opcao value="8345">SEARA</opcao>
				        <opcao value="8347">SIDEROPOLIS</opcao>
				        <opcao value="5595">SUL BRASIL</opcao>
				        <opcao value="8351">TAIO</opcao>
				        <opcao value="8353">TANGARA</opcao>
				        <opcao value="9466">TIGRINHOS</opcao>
				        <opcao value="8393">TIMBE DO SUL</opcao>
				        <opcao value="8357">TIMBO</opcao>
				        <opcao value="9971">TIMBO GRANDE</opcao>
				        <opcao value="8359">TRES BARRAS</opcao>
				        <opcao value="9482">TREVISO</opcao>
				        <opcao value="8363">TREZE TILIAS</opcao>
				        <opcao value="8365">TROMBUDO CENTRAL</opcao>
				        <opcao value="8367">TUBARAO</opcao>
				        <opcao value="8369">TURVO</opcao>
				        <opcao value="9973">UNIAO DO OESTE</opcao>
				        <opcao value="9975">URUPEMA</opcao>
				        <opcao value="8375">VARGEAO</opcao>
				        <opcao value="5563">VARGEM</opcao>
				        <opcao value="5565">VARGEM BONITA</opcao>
				        <opcao value="8377">VIDAL RAMOS</opcao>
				        <opcao value="8379">VIDEIRA</opcao>
				        <opcao value="9977">VITOR MEIRELES</opcao>
				        <opcao value="8381">WITMARSUM</opcao>
				        <opcao value="8383">XANXERE</opcao>
				        <opcao value="8385">XAVANTINA</opcao>
				        <opcao value="8387">XAXIM</opcao>
				        <opcao value="9504">ZORTEA</opcao>
							</opcoes>
							<resposta>'.$cidade.'</resposta>
			      </cidade>

			      <nomeEndereco>
			        <pergunta>Nome</pergunta>
			        <tipo>text</tipo>
							<resposta>'.$nomeEndereco.'</resposta>
			      </nomeEndereco>

			      <bairro>
			        <pergunta>Bairro</pergunta>
			        <tipo>text</tipo>
							<resposta>'.$bairro.'</resposta>
			      </bairro>

			      <cep>
			        <pergunta>CEP</pergunta>
			        <tipo>text</tipo>
							<resposta>'.$cep.'</resposta>
			      </cep>
			    </endereco>

			    <caracteristicaEdificacao>
			      <ocupacao>
			        <pergunta>Ocupação</pergunta>
			        <tipo>combobox</tipo>
							<opcoes>
				        <opcao value="25">ATIVIDADES AGROPASTORIS E SILOS</opcao>
				        <opcao value="8">COMERCIAL</opcao>
				        <opcao value="21">DEPÓSITOS</opcao>
				        <opcao value="16">EDIFICAÇÖES ESPECIAIS</opcao>
				        <opcao value="35">EDIFICAÇÖES ESPECIAIS - CALDEIRAS E VASOS DE PRESSÃO</opcao>
				        <opcao value="17">EDIFICAÇÖES ESPECIAIS - DEPÓSITO DE COMBUSTIVEIS E/OU INFLAMÁVEIS</opcao>
				        <opcao value="18">EDIFICAÇÖES ESPECIAIS - DEPÓSITO DE EXPLOSIVOS E MUNIÇÕES</opcao>
				        <opcao value="34">EDIFICAÇÖES ESPECIAIS - OFICINAS DE CONSERTOS DE VEICULOS AUTOMOTORES</opcao>
				        <opcao value="37">ESCOLAR DIFERENCIADA</opcao>
				        <opcao value="12">ESCOLAR GERAL</opcao>
				        <opcao value="14">GARAGENS</opcao>
				        <opcao value="13">HOSPITALAR COM INTERNAÇÃO OU RESTRIÇÃO DE MOBILIDADE</opcao>
				        <opcao value="38">HOSPITALAR SEM INTERNAÇÃO OU RESTRIÇÃO DE MOBILIDADE</opcao>
				        <opcao value="9">INDUSTRIAL</opcao>
				        <opcao value="22">LOCAIS COM RESTRIÇÃO DE LIBERDADE</opcao>
				        <opcao value="23">MATAS NATIVAS E REFLORESTAMENTOS</opcao>
				        <opcao value="10">MISTA</opcao>
				        <opcao value="24">PARQUES AQUÁTICOS</opcao>
				        <opcao value="20">POSTOS DE REVENDA DE GLP</opcao>
				        <opcao value="19">POSTOS PARA REABASTECIMENTOS DE COMBUSTÍVEIS</opcao>
				        <opcao value="11">PÚBLICA</opcao>
				        <opcao value="6">RESIDENCIAL COLETIVA</opcao>
				        <opcao value="1">RESIDENCIAL PRIVATIVA MULTIFAMILIAR</opcao>
				        <opcao value="2">RESIDENCIAL PRIVATIVA UNIFAMILIAR</opcao>
				        <opcao value="7">RESIDENCIAL TRANSITÓRIA</opcao>
				        <opcao value="15">REUNIÄO DE PÚBLICO</opcao>
				        <opcao value="31">RISCOS DIFERENCIADOS - CENTRAIS TELEFÔNICAS OU DE TELECOMUNICAÇÕES</opcao>
				        <opcao value="28">RISCOS DIFERENCIADOS - CENTRO DE COMPUTAÇÃO</opcao>
				        <opcao value="27">RISCOS DIFERENCIADOS - ESTAÇÃO DE RÁDIO E TV</opcao>
				        <opcao value="30">RISCOS DIFERENCIADOS - HIDROELÉTRICA, TERMOELÉTRICA OU USINA EÓLICA</opcao>
				        <opcao value="33">RISCOS DIFERENCIADOS - PORTOS</opcao>
				        <opcao value="29">RISCOS DIFERENCIADOS - SUBESTAÇÃO ELÉTRICA</opcao>
				        <opcao value="32">RISCOS DIFERENCIADOS - TORRE DE TRANSMISSÃO DE RÁDIO, TV OU TELEFONIA</opcao>
				        <opcao value="36">SHOPPING CENTER</opcao>
				        <opcao value="26">TÚNEIS, GALERIAS E MINAS</opcao>
							</opcoes>
							<resposta>'.$ocupacao.'</resposta>
			      </ocupacao>

			      <situacao>
			        <pergunta>Situação</pergunta>
			        <tipo>combobox</tipo>
								<opcoes>
				          <opcao value="1">Existente</opcao>
				          <opcao value="2">Nova</opcao>
				          <opcao value="3">Recente</opcao>
								</opcoes>
								<resposta>'.$situacao.'</resposta>
			      </situacao>

			      <pavimentos>
			        <pergunta>Pavimentos</pergunta>
							<opcoes>
				        <opcao value="1">1</opcao>
				        <opcao value="2">2</opcao>
				        <opcao value="3">3</opcao>
				        <opcao value="4">4</opcao>
				        <opcao value="5">5</opcao>
				        <opcao value="6">6</opcao>
				        <opcao value="7">7</opcao>
				        <opcao value="8">8</opcao>
				        <opcao value="9">9</opcao>
				        <opcao value="10">10</opcao>
				        <opcao value="11">11</opcao>
				        <opcao value="12">12</opcao>
				        <opcao value="13">13</opcao>
				        <opcao value="14">14</opcao>
				        <opcao value="15">15</opcao>
				        <opcao value="16">16</opcao>
				        <opcao value="17">17</opcao>
				        <opcao value="18">18</opcao>
				        <opcao value="19">19</opcao>
				        <opcao value="20">20</opcao>
				        <opcao value="21">21</opcao>
				        <opcao value="22">22</opcao>
				        <opcao value="23">23</opcao>
				        <opcao value="24">24</opcao>
				        <opcao value="25">25</opcao>
				        <opcao value="26">26</opcao>
				        <opcao value="27">27</opcao>
				        <opcao value="28">28</opcao>
				        <opcao value="29">29</opcao>
				        <opcao value="30">30</opcao>
				        <opcao value="31">31</opcao>
				        <opcao value="32">32</opcao>
				        <opcao value="33">33</opcao>
				        <opcao value="34">34</opcao>
				        <opcao value="35">35</opcao>
				        <opcao value="36">36</opcao>
				        <opcao value="37">37</opcao>
				        <opcao value="38">38</opcao>
				        <opcao value="39">39</opcao>
				        <opcao value="40">40</opcao>
				        <opcao value="41">41</opcao>
				        <opcao value="42">42</opcao>
				        <opcao value="43">43</opcao>
				        <opcao value="44">44</opcao>
				        <opcao value="45">45</opcao>
				        <opcao value="46">46</opcao>
				        <opcao value="47">47</opcao>
				        <opcao value="48">48</opcao>
				        <opcao value="49">49</opcao>
				        <opcao value="50">50</opcao>
				        <opcao value="51">51</opcao>
				        <opcao value="52">52</opcao>
				        <opcao value="53">53</opcao>
				        <opcao value="54">54</opcao>
				        <opcao value="55">55</opcao>
				        <opcao value="56">56</opcao>
				        <opcao value="57">57</opcao>
				        <opcao value="58">58</opcao>
				        <opcao value="59">59</opcao>
				        <opcao value="60">60</opcao>
				        <opcao value="61">61</opcao>
				        <opcao value="62">62</opcao>
				        <opcao value="63">63</opcao>
				        <opcao value="64">64</opcao>
				        <opcao value="65">65</opcao>
				        <opcao value="66">66</opcao>
				        <opcao value="67">67</opcao>
				        <opcao value="68">68</opcao>
				        <opcao value="69">69</opcao>
				        <opcao value="70">70</opcao>
				        <opcao value="71">71</opcao>
				        <opcao value="72">72</opcao>
				        <opcao value="73">73</opcao>
				        <opcao value="74">74</opcao>
				        <opcao value="75">75</opcao>
				        <opcao value="76">76</opcao>
				        <opcao value="77">77</opcao>
				        <opcao value="78">78</opcao>
				        <opcao value="79">79</opcao>
				        <opcao value="80">80</opcao>
				        <opcao value="81">81</opcao>
				        <opcao value="82">82</opcao>
				        <opcao value="83">83</opcao>
				        <opcao value="84">84</opcao>
				        <opcao value="85">85</opcao>
				        <opcao value="86">86</opcao>
				        <opcao value="87">87</opcao>
				        <opcao value="88">88</opcao>
				        <opcao value="89">89</opcao>
				        <opcao value="90">90</opcao>
				        <opcao value="91">91</opcao>
				        <opcao value="92">92</opcao>
				        <opcao value="93">93</opcao>
				        <opcao value="94">94</opcao>
				        <opcao value="95">95</opcao>
				        <opcao value="96">96</opcao>
				        <opcao value="97">97</opcao>
				        <opcao value="98">98</opcao>
				        <opcao value="99">99</opcao>
							</opcoes>
							<resposta>'.$pavimentos.'</resposta>
			      </pavimentos>

			      <tipoEscada>
			        <pergunta>Tipos de Escada</pergunta>
			        <tipo>combobox</tipo>
							<opcoes>
				        <opcao value="1">SEM ESCADA</opcao>
				        <opcao value="2">COMUM</opcao>
				        <opcao value="3">PROTEGIDA</opcao>
				        <opcao value="4">ENCLAUSURADA</opcao>
				        <opcao value="5">ENCLAUSURADA A PROVA DE FUMAÇA</opcao>
				        <opcao value="6">PRESSURIZADA</opcao>
				        <opcao value="7">ACESSO RESTRITO</opcao>
							</opcoes>
							<resposta>'.$tipoEscada.'</resposta>
			      </tipoEscada>

			      <numeroPessoas>
			        <pergunta>Numero de Pessoas</pergunta>
			        <tipo>number</tipo>
							<resposta>'.$numeroPessoas.'</resposta>
			      </numeroPessoas>

			      <tipoConstrucao>
			        <pergunta>Tipo</pergunta>
			        <tipo>combobox</tipo>
							<opcoes>
				        <opcao value="1">ALVENARIA</opcao>
				        <opcao value="2">MADEIRA</opcao>
				        <opcao value="3">MISTA</opcao>
				        <opcao value="4">METALICA</opcao>
							</opcoes>
							<resposta>'.$tipoContrucao.'</resposta>
			      </tipoConstrucao>

			      <numeroBlocos>
			        <pergunta>Nº de Blocos</pergunta>
			        <tipo>combobox</tipo>
							<opcoes>
				        <opcao value="1">1</opcao>
				        <opcao value="2">2</opcao>
				        <opcao value="3">3</opcao>
				        <opcao value="4">4</opcao>
				        <opcao value="5">5</opcao>
				        <opcao value="6">6</opcao>
				        <opcao value="7">7</opcao>
				        <opcao value="8">8</opcao>
				        <opcao value="9">9</opcao>
				        <opcao value="10">10</opcao>
				        <opcao value="11">11</opcao>
				        <opcao value="12">12</opcao>
				        <opcao value="13">13</opcao>
				        <opcao value="14">14</opcao>
				        <opcao value="15">15</opcao>
				        <opcao value="16">16</opcao>
				        <opcao value="17">17</opcao>
				        <opcao value="18">18</opcao>
				        <opcao value="19">19</opcao>
				        <opcao value="20">20</opcao>
							</opcoes>
							<resposta>'.$numeroBlocos.'</resposta>
			      </numeroBlocos>

			      <gas>
			        <pergunta>A edificação fará uso de gás liquefeito petróleo (GLP) ou gás natural (GN)?</pergunta>
			        <tipo>radio</tipo>
			        <opcoes>
			          <opcao>Sim</opcao>
			          <opcao>Não</opcao>
			        </opcoes>
							<resposta>'.$gas.'</resposta>
			        <perguntaComplementar>Qual quantidade?</perguntaComplementar>
			        <tipo>number</tipo>
							<resposta>'.$gasQuantidade.'</resposta>
			      </gas>

			      <liquidoInflamavel>
			        <pergunta>A edificação terá comércio ou depósito de líquido inflamável/combustível? </pergunta>
			        <tipo>radio</tipo>
			        <opcoes>
			          <opcao>Sim</opcao>
			          <opcao>Não</opcao>
								<resposta>'.$liquidoInflamavel.'</resposta>
			        </opcoes>
			        <perguntaComplementar>Qual quantidade?</perguntaComplementar>
			        <tipo>number</tipo>
							<resposta>'.$quantidadeLiquido.'</resposta>
			      </liquidoInflamavel>

			      <explosivos>
			        <pergunta>Na edificação haverá a fabricação, o comércio ou depósito de: explosivos, fogos de artifício, artigos pirotécnicos, munições, detonantes ou materiais radioativos?</pergunta>
			        <tipo>radio</tipo>
			        <opcoes>
			          <opcao>Sim</opcao>
			          <opcao>Não</opcao>
			        </opcoes>
							<resposta>'.$explosivos.'</resposta>
			      </explosivos>

			      <microEmpreendedor>
			        <pergunta>Você é um Micro Empreendedor Individual (MEI)? </pergunta>
			        <tipo>radio</tipo>
			        <opcoes>
			          <opcao>Sim</opcao>
			          <opcao>Não</opcao>
			        </opcoes>
							<resposta>' .$microEmpreendedor. '</resposta>
			        <perguntaComplementar>Quantos funcionários há na empresa incluindo o proprietário?</perguntaComplementar>
			        <tipo>number</tipo>
							<resposta>'.$quantidadeFuncionarios.'</resposta>
			      </microEmpreendedor>

			      <outroPredio>
			        <pergunta>Seu Estabelecimento fica dentro de outro prédio? Exemplo: Dentro de Shopping, Centros Comerciais, Galerias ou dentro de um Apartamento / Hotel.</pergunta>
			        <tipo>radio</tipo>
			        <opcoes>
			          <opcao>Sim</opcao>
			          <opcao>Não</opcao>
			        </opcoes>
							<resposta>'.$outroPredio.'</resposta>
			        <perguntaComplementar>Qual a Área do seu estabelecimento dentro da Edificação?</perguntaComplementar>
			        <tipo>number</tipo>
							<resposta>'.$areaPredio.'</resposta>
			      </outroPredio>

			      <areaEdificacao>
			        <pergunta>Qual a Área Total da Edificação?</pergunta>
			        <tipo>number</tipo>
							<resposta>'.$areaEdificacao.'</resposta>
			      </areaEdificacao>
			    </caracteristicaEdificacao>
			  </edificacao>
			</solicitacao>'
		);

		//////////////////////////////////////////VERSÃO2//////////////////////////////////////////////////////
		$parametros = array('Vistoria'=>
			'	<regin>'.$reginJucesc.'</regin>

				<empresa>
					<cpfcnpj>'.$cpfCnpj.'</cpfcnpj>
				  <nomeFantasia>'.$nomeFantasiaEmpresa.'</nomeFantasia>
					<fone>'.$fone.'</fone>
					<razaosocial>'.$razaoSocial.'</razaosocial>
					<nomecontato>'.$nomeContato.'</nomecontato>
					<email>'.$eMail.'</email>
			  </empresa>

			  <proprietarioEdificacao>
			  	<nome>'.$nome.'</nome>
					<foneproprietario>'.$foneProprietario.'</foneproprietario>
					<cnpjcpf>'.$cnpjCpf.'</cnpjcpf>
			    <emailProprietario>'.$eMailProprietario.'</emailProprietario>
			  </proprietarioEdificacao>

			  <edificacao>
			    <nomeEdificacao>'.$nomeEdificacao.'</nomeEdificacao>
			    <nomeFantasiaEdificacao>'.$nomeFantasiaEdificacao.'</nomeFantasiaEdificacao>
			    <numeroRE>'.$numeroRE.'</numeroRE>

			    <endereco>
						<logradouro>'.$logradouro.'</logradouro>
			      <numero>'.$numero.'</numero>
						<cidade>'.$cidade.'</cidade>
						<nomeEndereco>'.$nomeEndereco.'</nomeEndereco>
						<bairro>'.$bairro.'</bairro>
						<cep>'.$cep.'</cep>
			    </endereco>

			    <caracteristicaEdificacao>
						<ocupacao>'.$ocupacao.'</ocupacao>
						<situacao>'.$situacao.'</situacao>
						<pavimentos>'.$pavimentos.'</pavimentos>
						<tipoEscada>'.$tipoEscada.'</tipoEscada>
						<numeroPessoas>'.$numeroPessoas.'</numeroPessoas>
						<tipoContrucao>'.$tipoContrucao.'</tipoContrucao>
						<numeroBlocos>'.$numeroBlocos.'</numeroBlocos>
						<gas>'.$gas.'</gas>
			      <gasQuantidade>'.$gasQuantidade.'</gasQuantidade>
						<liquidoInflamavel>'.$liquidoInflamavel.'</liquidoInflamavel>
			      <quantidadeLiquido>'.$quantidadeLiquido.'</quantidadeLiquido>
			      <explosivos>'.$explosivos.'</explosivos>
						<microEmpreendedor>' .$microEmpreendedor. '</microEmpreendedor>
			      <quantidadeFuncionarios>'.$quantidadeFuncionarios.'</quantidadeFuncionarios>
			      <outroPredio>'.$outroPredio.'</outroPredio>
			    	<areaPredio>'.$areaPredio.'</areaPredio>
						<areaEdificacao>'.$areaEdificacao.'</areaEdificacao>
			    </caracteristicaEdificacao>
			  </edificacao>
			</solicitacao>'
		);

		return $parametros;
	}

	//ADAPTAR ESSA FUNÇÃO PARA ENVIAR OS DADOS DO FORMULÁRIO
  /*
	function enviaDados($pProtocolo, $deferimento, $statusProcesso, $pServico, $mensagem){

		$cliente = new nusoap_client('http://10.92.254.102/WSservicontrol/WSservicontrol.asmx?wsdl','wsdl');
		$parametros = array('pArquivo'=>'<Ruc>
				<Rowset>
				<Protocolo>'.$pProtocolo.'</Protocolo>
				<StatusArqXml>1</StatusArqXml>
				<TipoRequerimento>1</TipoRequerimento>
				<DeferimentoProcesso>'.$deferimento.'</DeferimentoProcesso>
				<StatusProcesso>'.$statusProcesso.'</StatusProcesso>
				<Mensagem><![CDATA['.$mensagem.']]></Mensagem>
				<RespostaViabilidade>
					<IndInteresseSefaz>1</IndInteresseSefaz>
				</RespostaViabilidade>
				<RespostaLegalizacao>
				<InscricaoEstadual/>
				<SituacaoIE/>
				</RespostaLegalizacao>
				</Rowset>
				</Ruc>',
				'pServicio'=> $pServico,
				'pFuncion'=>40,
				'pProtocolo'=>$pProtocolo,
				'pCNPJ'=>'06096391000176');

		$resultado = $cliente->call('InsertArquivoControlRecepcion', $parametros);

		return $resultado;
	}
	/*
?>
