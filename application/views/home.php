<?php 
	header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Home</title>
		<meta name="description" content="">
		<meta name="author" content="lucasantunes">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="icon.png">
		<link rel="apple-touch-icon" href="icon.png">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="<?php echo base_url('includes/bootstrap/css/bootstrap.css'); ?>">
		<!-- Smart Menu -->
		<link href="<?php echo base_url('includes/bootstrap/smartmenu/jquery.smartmenus.bootstrap.css'); ?>" rel="stylesheet">
		<!-- Estilos -->
		<link rel="stylesheet" href="<?php echo base_url('includes/css/estilos.css'); ?>">
		<!-- Font -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('includes/webfontkit/stylesheet.css'); ?>">
	</head>
	<body onscroll="functionMenu()">
		<div class="slider">
			<button id="btnDescer"class="btn"><span class="glyphicon glyphicon-chevron-down" style="margin-top:7px;"></button>
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
					  <img src="<?php echo base_url('includes/imgs/slider/banner1.jpg'); ?>" alt="...">
					  <div class="carousel-caption">
					    <h3></h3>
					    <p></p>
					  </div>
					</div>
					<div class="item">
					  <img src="<?php echo base_url('includes/imgs/slider/banner2.jpg'); ?>" alt="...">
					  <div class="carousel-caption">
					    <h3></h3>
					    <p></p>
					  </div>
					</div>
					<div class="item">
					  <img src="<?php echo base_url('includes/imgs/slider/banner3.jpg'); ?>" alt="...">
					  <div class="carousel-caption">
					    <h3></h3>
					    <p></p>
					  </div>
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="topBar">
			<ul>
				<li><a><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  contato@timob.com.br</a></li>
				<li><a href="">FAQ</a></li>
				<li><a href=""><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Área Restrita</a></li>
			</ul>
		</div>
		<div class="menuBar">
			<div class="row">
			  <div class="col-md-12">
			  	<a href="<?php echo base_url(); ?>"><img id="imgLogoFull" src="<?php echo base_url('includes/imgs/app/logo.jpg'); ?>" alt="logo"></a>
			  	<!-- Static navbar -->
			  	<div id="conteudoMenu" class="navbar navbar-default" role="navigation">
			  		<div class="navbar-header">
			  			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			  				<span class="sr-only">Toggle navigation</span>
			  				<span class="icon-bar"></span>
			  				<span class="icon-bar"></span>
			  				<span class="icon-bar"></span>
			  			</button>
			  			<a id="menuLogo" class="navbar-brand" href="<?php echo base_url(); ?>"><span id="bold"><span style="color: #afb517">ti.</span><span style="color: #263683">mob</span> <span style="color: black;">- Tecnologia e Mobilidade</span></span> </a>
			  		</div>
			  		<div class="navbar-collapse collapse">
			  			<!-- Left nav -->
			  			<ul class="nav navbar-nav">
			  				<li><a id="textoLink1" onclick="scrollToDiv()"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span><span id="bold"> ROTATIVO DIGITAL</span></a>
			  					<ul class="dropdown-menu">		
			  						<li><a class="rotativodigi"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Sobre o produto</a></li>
			  						<li><a class="funciona"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Como Funciona</a></li>
			  			</span>			<li><a class="usuario"><span class="glyphicon glyphicon-check" aria-hidden="true"></span> Vantagens</a></li>
			  					</ul>
			  				</li>
			  				<li><a style="display: none;" id="textoLink" href="#">ERRO!</a></li>
			  				<li><a id="textoLink" class="produtos"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span><span id="bold"> PRODUTOS</span></a></li>
			  				<li><a id="textoLink" class="timob"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><span id="bold"> TI.MOB</span></a></li>
			  				<li><a id="textoLink" class="clientes"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span id="bold"> CLIENTES</span></a></li>
			  				<li><a id="textoLink" class="noticias"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span><span id="bold"> NOTÍCIAS</span></a></li>
			  				<li><a id="textoLink" class="contato"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span><span id="bold"> FALE CONOSCO</span></a></li>
			  			</ul>
			  		</div><!--/.nav-collapse -->
			  	</div>
			  </div>
			</div>
		</div>
		<div class="preItem">
			<div>
				<div class="row">
					<div class="col-md-4">
						<img id="cidadeInteligente" src="<?php echo base_url('includes/imgs/app/cidadeinteligente.png'); ?>" alt="inteligente">
					</div>
					<div class="col-md-8">
						<center><h1><span id="bold">TECNOLOGIA E MOBILIDADE<br> A SERVIÇO DO CIDADAO!</span></h1></center>
						<h3 style="margin-top:50px;"><span id="bold">#POR UM MUNDO EM <span style="color:#afb157;">MOVIMENTO</span></span></h3>
						<h4 style="margin-top:30px;">As soluções mais modernas para estacionamento público ou privado você encontra aqui.</h4>
						<h4 style="margin-top:30px;">São produtos e serviços desenvolvidos com alta tecnologia, sem perder o foco na simplicidade e usabilidade.</h4>
						<h4 style="margin-top:30px;">Junte-se a nós na criação de um mundo muito mais móvel!</h4>
						<center><div style="padding-left:20%;padding-right:20%;"><h4 id="conheca" style="margin-top:60px;"><span id="bold">CONHEÇA NOSSOS PRODUTOS E SERVIÇOS</span></h4></div></center>
						<center><span id="btnProximo" class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></center>
					</div>
				</div>
			</div>
		</div>
		<div id="rotativo" class="item1">
			<div class="row">
			  <img id="imgRot" src="<?php echo base_url('includes/imgs/slider/banner4.jpg'); ?>" alt="..." class="img-responsive">
			  	<h4>
			  		O <span id="bold">Estacionamento Rotativo</span> aumenta a oferta de vagas nas regiões de grande concentração de comércio, serviços e lazer, oferecendo aos motoristas mais oportunidades de estacionamento, contribuindo assim para melhorar a qualidade de vida, através do aumento da fluidez do trânsito. Trata-se de um instrumento de política urbana adequado à melhoria da circulação na via e à democratização do uso de espaços públicos. 
			  	</h4>
			  	<h4>
			  		A partir de ABRIL de 2015, municípios acima de <span id="bold">20 MIL Habitantes</span> deverão se adequar ao <span id="bold">Plano Nacional de Mobilidade Urbana</span>. A operação e gestão de estacionamento público é uma das obrigações. 
			  	</h4>
			  	<h4>
			  		A <span id="bold">TI.MOB</span> possui o sistema mais moderno do Brasil para gestão e controle de Estacionamento Rotativo. 
			  	</h4>
			  	<h4>
			  		<span id="bold">Veja como funciona:</span>
			  	</h4>
			</div>			
		</div>
		<div id="funciona" class="item2">
			<div class="row">
			  <div class="col-md-6">
			  	<img id="quest" src="<?php echo base_url('includes/imgs/app/quest.png'); ?>" alt="quest">
			  	<h2>
			 		<span id="bold">COMO FUNCIONA:</span>
				</h2>
				<video controls>
				  <source src="<?php echo base_url('includes/video/rotativo_digital.webm'); ?>" type="video/webm">
				Your browser does not support the video tag.
				</video>
			  </div>
			  <div class="col-md-6" style="padding-top: 75px;">
			  	<center><h3>Conheça a solução inteligente de Rotativo Digital que a Ti.mob desenvolveu.</h3>
				</center>
				<center><img id="logoRotativo" src="<?php echo base_url('includes/imgs/app/logorotativo.png'); ?>"></center>
			  	
			  </div>
			</div>
		</div>
		<div id="vantagensusu" class="item3">
			<h2>
				<span id="bold">VANTAGENS PARA O USUÁRIO: </span>
			</h2>
			<div class="row">
			  <div class="col-md-4" style="margin-top: 30px;">
			  	<h5><span id="bold">PONTOS DE VENDA PRÉ-HABILITADOS</span></h5>
				<center><div class="imgContainer"><img src="<?php echo base_url('includes/imgs/app/pdv.png'); ?>" alt="..."></div></center>
				<h5>A TI.MOB possui mais de 500 mil pontos de venda pré-habilitados em todo Brasil, para vender créditos do rotativo.
				</h5>			
			  </div>
			  <div class="col-md-4" style="margin-top: 30px;">
			  	<h5><span id="bold">APLICATIVO SMARTPHONE</span></h5>
				<center><div class="imgContainer"><img src="<?php echo base_url('includes/imgs/app/app.png'); ?>" alt="..." ></div></center>
				<h5>Atraves do app localize vagas disponiveis, pontos de vendas mais proximos. Voce ainda pode comprar creditos e gerenciar saldos.
				</h5>
			  </div>
			  <div class="col-md-4" style="margin-top: 30px;">
			  	<h5><span id="bold">COMODIDADE E FACILIDADE</span></h5>
			  	<center><div class="imgContainer"><img src="<?php echo base_url('includes/imgs/app/pos.png'); ?>" alt="..."></div></center>
				<h5>Compre créditos pagando em dinheiro nas máquinas P.O.S instaladas nos PDV's.
				</h5>
			  </div>
			</div>
		</div>
		<div id="vantagensmuni" class="item4">
			<h2>
				<span id="bold">VANTAGENS PARA O MUNICÍPIO: </span>
			</h2>
			<div class="row">
			  <div class="col-md-4" style="margin-top: 30px;">
			  	<h5><span id="bold">INFORMAÇÕES EM TEMPO REAL</span></h5>
				<center><div class="imgContainer"><img src="<?php echo base_url('includes/imgs/app/info.png'); ?>" alt="..."></div></center>
				<h5>Informações otimizadas e em tempo real <br>  de toda operação.
				</h5>			
			  </div>
			  <div class="col-md-4" style="margin-top: 30px;">
			  	<h5><span id="bold">FISCALIZAÇÃO INFORMATIZADA</span></h5>
				<center><div class="imgContainer"><img src="<?php echo base_url('includes/imgs/app/guarda.png'); ?>" alt="..." ></div></center>
				<h5>Através do aplicativo TI.MOB instalado no smartphone, o fiscal controla os veículos estacionados, autuando automaticamente aqueles que estiverem irregular.
				</h5>
			  </div>
			  <div class="col-md-4" style="margin-top: 30px;">
			  	<h5><span id="bold">GESTÃO E CONTROLE DE EQUIPE</span></h5>
			  	<center><div class="imgContainer"><img src="<?php echo base_url('includes/imgs/app/equipe3.png'); ?>" alt="..."></div></center>
				<h5>Acompanhe em tempo real a produtividade da sua equipe: quantidade de veículos fiscalizados, rota percorrida, localização geográfica entre outras informações.
				</h5>
			  </div>
			</div>
		</div>
		<div id="produtos" class="item5">
			<center><h1><span id="bold">OUTROS PRODUTOS E SERVIÇOS</span></h1></center>
		
			<center><h4><span id="bold">CONHEÇA NOSSAS SOLUÇÕES INTELIGENTES QUE IRÃO TRANSFORMAR SUA VIDA!</span></h4></center>
			<div class="row">
			  <div class="col-md-4" style="margin-top: 5px;">
			  	<center>
			  		<a><h4><span id="bold">SOLUÇÕES PARA<br>ESTACIONAMENTO PRIVADO</span></h4>
			  		<img src="<?php echo base_url('includes/imgs/app/produto5.png'); ?>" alt="..."></a>
			  	</center>
			  </div>
			  <div class="col-md-4" style="margin-top: 5px;">
			  	<center>
			  		<a><h4><span id="bold">APP PARA PAGAMENTO DE ESTACIONAMENTOS</span></h4>
			  		<img src="<?php echo base_url('includes/imgs/app/produto4.png'); ?>" alt="..."></a>
			  	</center>
			  </div>
			  <div class="col-md-4" style="margin-top: 5px;">
			  	<center>
			  		<a><h4><span id="bold">CONTROLE DE CAÇAMBAS <br> EM VIAS PÚBLICAS</span></h4>
			  		<img src="<?php echo base_url('includes/imgs/app/produto3.png'); ?>" alt="..."></a>
			  	</center>
			  </div>
			  <div class="col-md-4" style="margin-top:35px;">
			  	<center>
			  		<a><h4><span id="bold">CONSULTORIA EM<BR> MOBILIDADE URBANA</span></h4>
			  		<img src="<?php echo base_url('includes/imgs/app/produto2.png'); ?>" alt="..."></a>
			  	</center>
			  </div>
			  <div class="col-md-4" style="margin-top: 35px;">
			  	<center>
			  		<a><h4><span id="bold">CONSULTORIA EM<BR> TRÂNSITO E TRÁFEGO</span></h4>
			  		<img src="<?php echo base_url('includes/imgs/app/produto1.png'); ?>" alt="..."></a>
			  	</center>
			  </div>
			  <div class="col-md-4" style="margin-top: 35px;">
			  	<center>
			  		<a><h4><span id="bold">GESTÃO E CONTROLE DE<br> PLACAS DE TRÂNSITO</span></h4>
			  		<img src="<?php echo base_url('includes/imgs/app/produto.png'); ?>" alt="..."></a>
			  	</center>
			  </div>
			</div>
		</div>
		<div id="barra" class="itemBarra">
			<h3>Gostou de nossas soluções? Entre em contato e agende uma visita! </h3>
			<button id="btnAgendar" class="btn btn-primary btn-default btn-lg">Clique Aqui!</button>
		</div>
		<div id="timob" class="item6">
			<img src="<?php echo base_url('includes/imgs/app/fundocara.png'); ?>" alt="...">
			<div id="conteudoTexto">
				<h3><span id="bold">TI.MOB TECNOLOGIA <br>E SOLUÇÕES EM MOBILIDADE </span></h3>
				<h4>A <span id="bold">TI.MOB</span> busca através de seus profissionais qualificados e projetos inovadores, transformar a vida do cidadão, levando tecnologia e modernidade ao seu dia-a-dia sem perder a simplicidade e facilidade. </h4>
				<h4>A empresa fundada em 2011 é referência nacional em tecnologia, sempre em sintonia com as tendências e evoluções do mundo moderno.</h4>
				<h4>Mesmo sendo uma empresa jovem, seus sócios diretores possuem mais de 15 anos de experiência na gestão de projetos, processos, tecnologia, canais de venda e distribuição atuando em multinacionais nos setores de telecomunicações, tecnologia e saúde.</h4>
				<h4>Pensou em tecnologia, pensou <span id="bold">TI.MOB!</span></h4>
				<h4><span id="bold">TI.MOB Tecnologia e Mobilidade a serviço do cidadão.</span></h4>
			</div>
		</div>
		<div id="clientes" class="item8">
			<center><h2>CIDADES INTELIGENTES QUE CONTAM COM SOLUÇÕES DA TI.MOB</h2></center>
			<div class="row">
			  <h4>Minas Gerais:</h4>	
			  <div class="col-md-3">
			  	<center>
				  	<a target="_blank" href="http://www.rotativovrb.com.br/"><div class="titutloCliente"><h3>Visconde do Rio Branco</h3></div>
				  		<div class="imgClientes">
				  		<img src="<?php echo base_url('includes/imgs/app/vrb.png'); ?>" alt="...">
				  		</div>
				  	</a>
			  	</center>
			  </div>
			  <div class="col-md-3">
			  	<center>
				  	<a><div class="titutloCliente"><h3>Itabira</h3></div>
				  		<div class="imgClientes">
				  		<img src="<?php echo base_url('includes/imgs/app/itabira.gif'); ?>" alt="...">
				  		</div>
				  	</a>
			  	</center>
			  </div>
			  <div class="col-md-3">
			  	<center>
				  	<a><div class="titutloCliente"><h3>Rio Pomba</h3></div>
				  		<div class="imgClientes">
				  		<img src="<?php echo base_url('includes/imgs/app/riopomba.png'); ?>" alt="...">
				  		</div>
				  	</a>
			  	</center>
			  </div>
			  <div class="col-md-3">
			  	<center>
				  	<a><div class="titutloCliente"><h3>Ouro Preto</h3></div>
				  		<div class="imgClientes">
				  		<img src="<?php echo base_url('includes/imgs/app/op.png'); ?>" alt="...">
				  		</div>
				  	</a>
			  	</center>
			  </div>
			</div>
			<div class="row">
			  <h4>São Paulo:</h4>		
			   <div class="col-md-3">
			  	<center>
				  	<a><div class="titutloCliente"><h3>Capão Bonito</h3></div>
				  		<div class="imgClientes">
				  		<img src="<?php echo base_url('includes/imgs/app/capao.png'); ?>" alt="...">
				  		</div>
				  	</a>
			  	</center>
			  </div>
			</div>
		</div>
		<div id="noticias" class="item7">
			<h2><span id="bold">TI.MOB EM DESTAQUE NA MÍDIA</span></h2>
			<div class="row">
			  <div class="col-md-3">
			  	<div class="content">
			  		<a>
				  		<center>
				  			<img src="<?php echo base_url('includes/imgs/app/em.jpg'); ?>" alt="">
				  			<h4><span id="bold">ESTADO DE MINAS</span></h4>
				  			<h6>20/11/2014</h6>
				  		</center>
				  		<h6>Jornal Estado de Minas publica notícia sobre o rotativo digital e tem como referência Ti.Mob.</h6>
				  		<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModalNoticia4">Saiba +</button>
			  		</a>
			  	</div>
			  </div>
			  <div class="col-md-3">
			  	<div class="content">
			  		<a>
				  		<center>
				  			<img src="<?php echo base_url('includes/imgs/app/hoje.jpg'); ?>" alt="">
				  			<h4><span id="bold">HOJE EM DIA</span></h4>
				  			<h6>25/11/2014</h6>
				  		</center>
				  		<h6>Jornal Hoje em Dia publica notícia sobre o rotativo digital e tem como referência Ti.Mob.</h6>
				  		<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModalNoticia1">Saiba +</button>
			  		</a>
			  	</div>
			  </div>
			  <div class="col-md-3">
			  	<div class="content">
			  		<a>
				  		<center>
				  			<img src="<?php echo base_url('includes/imgs/app/sebrae.jpg'); ?>" alt="">
				  			<h4><span id="bold">SEBRAE-MG</span></h4>
				  			<h6>20/11/2014</h6>
				  		</center>
				  		<h6>Jornal Sebrae-MG publica notícia sobre o rotativo digital e tem como referência Ti.Mob.</h6>
				  		<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModalNoticia2">Saiba +</button>
			  		</a>
			  	</div>
			  </div>
			  <div class="col-md-3">
			  	<div class="content">
			  		<a>
				  		<center>
				  			<img src="<?php echo base_url('includes/imgs/app/diario.jpg'); ?>" alt="">
				  			<h4><span id="bold">DIÁRIO DO COMÉRCIO</span></h4>
				  			<h6>28/11/2014</h6>
				  		</center>
				  		<h6>Jornal Diario do Comercio publica notícia sobre o rotativo digital e tem como referência Ti.Mob.</h6>
				  		<button id="btnVerNoticia" type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModalNoticia3">Saiba +</button>
			  		</a>
			  	</div>
			  </div>
			</div>
		</div>
		<hr>
		<div id="mensagem" class="itemMensagem">
			<h2><span id="bold">ENTÃO, VAMOS TOMAR UM CAFÉ!?</span></h2>
					<h4>Gostou de nossa solução? Tem alguma dúvida ou necessita de um projeto sob medida? Entre em contato e lhe retornaremos para esclarecer dúvidas ou agendar uma visita.</h4>

					<div class="row">
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-12"><h3><span id="bold"><small>FALE</small> <p>CONOSCO</p></span></h3></div>
							</div>

							<form id="formMensagem">
								<div class="form-group">
									<input type="text" class="form-control" id="txtNome" placeholder="Nome...">
								</div>
								<div class="form-group"> 
									<input type="email" class="form-control" id="txtEmail" placeholder="Email...">
								</div>
								<div class="form-group"> 
									<input type="text" class="form-control" id="txtAssunto" placeholder="Assunto...">
								</div>
								<div class="form-group">
									<div id="txtMensagemDiv">
										<textarea type="text" class="form-control" id="txtMensagem" placeholder="Digite sua mensagem..."></textarea>
									</div>
									<textarea type="text" class="form-control" id="txtMensagemCell" placeholder="Digite sua mensagem..."></textarea>
								</div>
								<button id="btnEnviarMensagem" type="button" class="btn btn-default btn-primary btn-block">Enviar</button>
							</form>
						</div>
						<div class="col-md-4">
							<img src="<?php echo base_url('includes/imgs/app/cafe.png'); ?>">
						</div>
					</div>
		</div>
		<div id="contato" class="item9">
			<div class="row">
			  <div class="col-md-4">
			  	<img src="<?php echo base_url('includes/imgs/app/logorodape.png'); ?>" alt="">
			  </div>
			  <div class="col-md-4">
			  	<h4 style="margin-top: 40px;">Endereço:</h4>
			  	<h5><span class=" glyphicon glyphicon-map-marker" aria-hidden="true"></span> Rua Padre Marinho, 455, Santa Efigênia, Belo Horizonte, MG - 11º Andar</h5>
			  	<h5><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +55 (31)3140-0033</h5>
			  </div>
			  <div class="col-md-4">
			  	<a target="_blank" href="https://www.google.com.br/maps/place/R.+Padre+Marinho,+455+-+Santa+Efigenia,+Belo+Horizonte+-+MG,+30140-040/@-19.9252789,-43.924344,17z/data=!3m1!4b1!4m2!3m1!1s0xa69992b3658649:0x7efecb3bf5633234?hl=pt-BR"><img src="<?php echo base_url('includes/imgs/app/localizacao.png'); ?>" id="imgLocalizacao"></a>
			  </div>
			</div>
		</div>
		<div class="item10">
			<div class="row">
				<div class="col-md-6"><h5>Copyright © 2015 ti.mob. Todos Direitos Reservados</h5></div>
				<div class="col-md-6">
					<a onclick="scrollWin()" style="cursor: pointer;"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span> Topo</a>
				</div>
			</div>					
		</div>
	</body>
</html>
<!-- Javascripts -->
	<!-- jQuery -->
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php echo base_url('includes/js/responsive.js'); ?>"></script>
	<script src="<?php echo base_url('includes/js/ajax_post.js'); ?>"></script>
	<script src="http://areaaperta.com/nicescroll/js/jquery.nicescroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('includes/bootstrap/js/bootstrap.js'); ?>"></script>
	<!-- Startmenu -->
	<script type="text/javascript" src="<?php echo base_url('includes/bootstrap/smartmenu/jquery.smartmenus.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('includes/bootstrap/smartmenu/jquery.smartmenus.bootstrap.js'); ?>"></script>
	<!-- tinyMCE Editor -->
	<script type="text/javascript" src="<?php echo base_url('includes/editor/tinymce.min.js'); ?>"></script>
	<!-- Cufon -->
	<script type="text/javascript" src="<?php echo base_url('includes/js/cufon-yui.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('includes/js/play.js'); ?>"></script>
	<!-- Inicialização do tinyEditor -->
	<script type="text/javascript">
			$(function () {
	            tinymce.init({
	            selector: "textarea#txtMensagem",
	            language : 'pt_BR',
	            width: 715,
	            height: 100,
	            plugins: [
	             "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
	             "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
	             "save table contextmenu directionality emoticons template paste textcolor"
	                ]
	             });
	        });
	</script>
<?php require_once("includes/modal/modal.php"); ?>
