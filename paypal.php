<?php
	require_once 'Conexao.php';//"linka" com o BdProcessos para usar suas funções
	$u = new Usuario;//coloca a classe Usuário dentro variavel $u
	$u->conectar("bdsite", "localhost", "root", "");//conecta com o banco de dados
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Lojinha da USCS</title>
	<link rel="icon" href="https://www.uscs.edu.br/assets/images/favicon.ico">
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

</head>

<body>
	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">Zona de ofertas e descontos aqui!
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						<li class="text-center border-right text-white">
							<a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
								<i class="fas fa-map-marker mr-2"></i>São Caetano do Sul, SP</a>
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-truck mr-2"></i>Faça seu pedido</a>
						</li>
						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> 4002-8922
						</li>
						<li class="text-center border-right text-white">
							<a href="logar.php" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Login </a>
						</li>
						<li class="text-center text-white">
							<a href="registra.php" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Registro </a>
						</li>
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

	<!-- Button trigger modal(select-location) -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="select-city">
			<h3>
				<i class="fas fa-map-marker"></i> Selecione sua localização por favor</h3>
			<select class="list_of_cities">
				<optgroup label="ABCD">
					<option selected style="display:none;color:#eee;">Selecione sua cidade abaixo</option>
					<option>São Caetano do Sul</option>
					<option>São Bernardo do Campo</option>
					<option>Santo André</option>
					<option>Diadema</option>
					<option>Mauá</option>
					<optgroup label="Grande São Paulo">
					<option>São Paulo</option>
		  	</optgroup>
			</select>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //shop locator (popup) -->

	<!-- modals -->
	<!-- log in -->
	<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Login</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<label class="col-form-label">Nome de Usuario</label>
							<input type="text" class="form-control" placeholder=" " name="Name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Senha</label>
							<input type="password" class="form-control" placeholder=" " name="Password" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Entrar">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Me lembre?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Não tem uma conta?
							<a href="#" data-toggle="modal" data-target="#exampleModal2">
								Se registre agora</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div> -->
	<!-- register -->
	<!-- <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Registro</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<label class="col-form-label">Seu Nome</label>
							<input type="text" class="form-control" placeholder=" " name="Name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="Email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Senha</label>
							<input type="password" class="form-control" placeholder=" " name="Password" id="password1" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Confirme a Senha</label>
							<input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Registrar">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">Eu aceito os termos e condições</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div> -->
	<!-- register -->
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="index.php" class="font-weight-bold font-italic">
							<img src="images/logo2.png" alt=" " class="img-fluid">Lojinha USCS
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="#" method="post">
								<input class="form-control mr-sm-2" type="search" placeholder="Digite aqui" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" type="submit">Pesquisar</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-cart-arrow-down"></i>
									</button>
								</form>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="agileits-navi_search">
					<form action="#" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">Todas as Categorias</option>
							<option value="Televisions">Televisões</option>
							<option value="Headphones">Headphones</option>
							<option value="Computers">Computadores</option>
							<option value="Appliances">Aplicações</option>
							<option value="Mobiles">Celulares</option>
							<option value="Fruits &amp; Vegetables">Tv &amp; Video</option>
							<option value="iPad & Tablets">iPad & Tablets</option>
							<option value="Cameras & Camcorders">Cameras & Camcorders</option>
							<option value="Home Audio & Theater">Home Audio & Theater</option>

							</audio> & Theater</option>
						</select>
					</form>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.php">Ínicio
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Eletrónicos
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3">Celulares, Computadores</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="product.html">Todos os Celulares</a>
												</li>
												<li>
													<a href="product.html">Todos os acessórios para Celulares</a>
												</li>
												<li>
													<a href="product.html">Capinhas</a>
												</li>
												<li>
													<a href="product.html">Protetores de tela</a>
												</li>
												<li>
													<a href="product.html">Power Banks</a>
												</li>
												<li>
													<a href="product.html">Tablets</a>
												</li>
												<li>
													<a href="product.html">Dispositivos vestíveis</a>
												</li>
												<li>
													<a href="product.html">Smart Home</a>
												</li>
											</ul>
										</div>
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="product.html">Laptops</a>
												</li>
												<li>
													<a href="product.html">Drives & Armazenamento</a>
												</li>
												<li>
													<a href="product.html">Impresoras & Tinta</a>
												</li>
												<li>
													<a href="product.html">Devices de Internet</a>
												</li>
												<li>
													<a href="product.html">Acessórios para Computadores</a>
												</li>
												<li>
													<a href="product.html">Zona Gamer</a>
												</li>
												<li>
													<a href="product.html">Software</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Eletrodomésticos
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3">TV, Eletrodomésticos, Eletrónicos</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="product2.html">Televisões</a>
												</li>
												<li>
													<a href="product2.html">Sistemas de entretenimento doméstico</a>
												</li>
												<li>
													<a href="product2.html">Headphones</a>
												</li>
												<li>
													<a href="product2.html">Caixas de Som</a>
												</li>
												<li>
													<a href="product2.html">MP3, Players de áudio & Acessórios</a>
												</li>
												<li>
													<a href="product2.html">Acessórios para Audio & Video</a>
												</li>
												<li>
													<a href="product2.html">Cameras</a>
												</li>
												<li>
													<a href="product2.html">DSLR Cameras</a>
												</li>
												<li>
													<a href="product2.html">Acessórios para Camera</a>
												</li>
											</ul>
										</div>
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="product2.html">Consoles</a>
												</li>
												<li>
													<a href="product2.html">Todos os Eletrónicos</a>
												</li>
												<li>
													<a href="product2.html">Ar Concionados</a>
												</li>
												<li>
													<a href="product2.html">Refrigeradores</a>
												</li>
												<li>
													<a href="product2.html">Máquinas de Lavar</a>
												</li>
												<li>
													<a href="product2.html">Eletrodomésticos para Cozinha e Casa</a>
												</li>
												<li>
													<a href="product2.html">Eletrodomésticos para Aquecimento e Refrigeração</a>
												</li>
												<li>
													<a href="product2.html">Todos os Eletrodomésticos</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
								<a class="nav-link" href="about.html">Sobre Nós</a>
							</li>
							<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
								<a class="nav-link" href="product.html">Novidades</a>
							</li>
							<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Ofertas
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="product.html">Eletrónicos</a>
									<a class="dropdown-item" href="product2.html">Eletrodomésticos</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="single.html">Samsung Galaxy J7 Prime</a>
									<a class="dropdown-item" href="single2.html">Refrigerador LG 260 L 3 Star Frost-Free Duas Portas</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="checkout.php">Página de Checkout</a>
									<a class="dropdown-item" href="payment.php">Página de pagamento</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.html">Entre em contato</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	<!-- //navigation -->

	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.html">Ínicio</a>
						<i>|</i>
					</li>
					<li>Página de Pagamento</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- payment page-->
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>P</span>agamento</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<!--Horizontal Tab-->
				<div id="parentHorizontalTab">
					<ul class="resp-tabs-list hor_1">
						<!-- <li>Pagamento na entrega</li>
						<li>Crédito/Debito</li>
						<li>Net Banking</li> -->
						<li>Paypal</li>
					</ul>
					<div class="resp-tabs-container hor_1">

						<!-- <div>
							<div class="vertical_post check_box_agile">
								<h5>Pagamento na Entrega</h5>
								<div class="checkbox">
									<div class="check_box_one cashon_delivery">
										<label class="anim">
											<input type="checkbox" class="checkbox">
											<span> Também aceitamos cartão de crédito / débito na entrega. Verifique com o agente de entrega.</span>
										</label>
									</div>

								</div>
							</div>
						</div>
						<div>
							<form action="#" method="post" class="creditly-card-form agileinfo_form">
								<div class="creditly-wrapper wth  ree, w3_agileits_wrapper">
									<div class="credit-card-wrapper">
										<div class="first-row form-group">
											<div class="controls">
												<label class="control-label">Email</label>
												<input class="billing-address-name form-control" type="email" name="email" placeholder="Seu Email">
											</div>
											<div class="controls">
												<label class="control-label">Nome no Cartão</label>
												<input class="billing-address-name form-control" type="text" name="donoCartao" placeholder="Seu Nome">
											</div>
											<div class="w3_agileits_card_number_grids my-3">
												<div class="w3_agileits_card_number_grid_left">
													<div class="controls">
														<label class="control-label">Número do Cartão</label>
														<input class="number credit-card-number form-control" type="text" name="nCartao" inputmode="numeric" autocomplete="cc-number"
														    autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
													</div>
												</div>
												<div class="w3_agileits_card_number_grid_right mt-2">
													<div class="controls">
														<label class="control-label">CVV</label>
														<input class="security-code form-control" Â· inputmode="numeric" type="text" name="cvv" placeholder="&#149;&#149;&#149;">
													</div>
												</div>
												<div class="clear"> </div>
											</div>
											<div class="controls">
												<label class="control-label">Data de Vencimento</label>
												<input class="expiration-month-and-year form-control" type="text" name="vencimento" placeholder="MM / AA">
											</div>
										</div>
										<button class="submit mt-3">
											<span>Faça o Pagamento </span>
										</button>
									</div>
								</div>
							</form>

						</div>
						<div>
							<div class="vertical_post">
								<form action="#" method="post">
									<h5>Selecione Bancos Populares</h5>
									<div class="swit-radio">
										<div class="check_box_one">
											<div class="radio_one">
												<label>
													<input type="radio" name="radio" checked="">
													<i></i>Caixa</label>
											</div>
										</div>
										<div class="check_box_one">
											<div class="radio_one">
												<label>
													<input type="radio" name="radio">
													<i></i>Bradesco</label>
											</div>
										</div>
										<div class="check_box_one">
											<div class="radio_one">
												<label>
													<input type="radio" name="radio">
													<i></i>Banco do Brasil</label>
											</div>
										</div>
										<div class="check_box_one">
											<div class="radio_one">
												<label>
													<input type="radio" name="radio">
													<i></i>Itaú</label>
											</div>
										</div>
										<div class="check_box_one">
											<div class="radio_one">
												<label>
													<input type="radio" name="radio">
													<i></i>Banco Next</label>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
									<h5>Outros Bancos</h5>
									<div class="section_room_pay">
										<select class="year">
											<option value="">=== Em manutenção temporária ===</option>
										</select>
									</div>
									<input type="submit" value="Pagamento">
								</form>
							</div>
						</div> -->
						<div>
							<div id="tab4" class="tab-grid" style="display: block;">
								<div class="row">
									<div class="col-md-6 pay-forms">
										<img class="pp-img" src="images/paypal.png" alt="Image Alternative text" title="Image Title">
										<p>Importante: você será redirecionado para o site do PayPal para concluir seu pagamento com segurança.</p>
										<a class="btn btn-primary">Checkout via Paypal</a>
									</div>
									<div class="col-md-6 number-paymk">

										<form method="post" class="creditly-card-form-2 shopf-sear-headinfo_form">
											<section class="creditly-wrapper payf_wrapper">
												<div class="credit-card-wrapper">
													<div class="first-row form-group">
														<div class="controls">
															<label class="control-label">Email</label>
															<input class="billing-address-name form-control" type="email" name="email" id="email" placeholder="Seu Email">
														</div>
														<div class="controls">
															<label class="control-label">Dono do Cartão</label>
															<input class="billing-address-name form-control" type="text" name="donoCartao" id="donoCartao" placeholder="Seu Nome">
														</div>
														<div class="paymntf_card_number_grids my-2">
															<div class="fpay_card_number_grid_left">
																<div class="controls">
																	<label class="control-label">Número do Cartão</label>
																	<input class="number credit-card-number-2 form-control" type="text" name="nCartao" id="nCartao" inputmode="numeric" autocomplete="cc-number"
																	    autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="•••• •••• •••• ••••">
																</div>
															</div>
															<div class="fpay_card_number_grid_right mt-2">
																<div class="controls">
																	<label class="control-label">CVV</label>
																	<input class="security-code-2 form-control" Â·="" inputmode="numeric" type="text" name="cvv" id="cvv" placeholder="•••">
																</div>
															</div>
															<div class="clear"> </div>
														</div>
														<div class="controls">
															<label class="control-label">Validade</label>
															<input class="expiration-month-and-year-2 form-control" type="text" name="vencimento" id="vencimento" placeholder="MM / AA">
														</div>
													</div>
													<input class="submit" type="submit" value="Proceed Payment">
												</div>
											</section>
										</form>
                    <?php
                      // if (isset($_POST['donoCartao']) && !empty($_POST['email']) && isset($_POST['nCartao']) && isset($_POST['cvv']) && isset($_POST['vencimento']) && isset($_POST['email'])){
                      //   $dono = addslashes($_POST['donoCartao']);
                      //   $nCartao = addslashes($_POST['nCartao']);
                      //   $cvv = addslashes($_POST['cvv']);
                      //   $vencimento = addslashes($_POST['vencimento']);
                      //   $email = addslashes($_POST['email']);
                      //
                      //   if ($u->msgErro == "") {//tratamendo de erro de conexão com banco de dados
                      //     if ($u->cartao($dono, $nCartao, $cvv, $vencimento, $email)) {//verifica de o email e senha consta no banco de dados
                      //       echo "informações salvas";
                      //     }else {//se não consta o email ou senha no banco de dados é mostrado esse ereo
                      //         echo "Não foi possivel guardar suas informações";
                      //     }
                      //   }else {//se tiver algum erro na conexão com o banco de dados o erro é mostrado aqui
                      //     echo "Erro: ".$u->msgErro;
                      //   }
                      // }else {
                      //   echo "preencha os campos";
                      // }
                      echo "dados salvos";
                    ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Plug-in Initialisation-->
			</div>
		</div>
	</div>
	<!-- //payment page -->

	<!-- middle section -->
	<div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="join-agile text-left p-4">
						<div class="row">
							<div class="col-sm-7 offer-name">
								<h6>Áudio suave, rico e alto</h6>
								<h4 class="mt-2 mb-3">Fones de Ouvido Branded</h4>
								<p>Venda com até 25% de desconto na loja</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="images/off1.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="join-agile text-left p-4">
						<div class="row ">
							<div class="col-sm-7 offer-name">
								<h6>Um telefone médiano</h6>
								<h4 class="mt-2 mb-3">Iphone 5s</h4>
								<p>Frete grátis acima de R$ 1000.00</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="images/off2.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->

	<!-- footer -->
	<footer>
		<div class="footer-top-first">
			<div class="container py-md-5 py-sm-4 py-3">
				<!-- footer first section -->
				<h2 class="footer-top-head-w3l font-weight-bold mb-2">Eletrónicos :</h2>
				<p class="footer-main mb-4">
					Se você está pensando em comprar um novo laptop, em busca de um som de carro novo e potente ou de comprar uma nova HDTV, tornamos mais fácil
encontre exatamente o que você precisa a um preço acessível. Oferecemos preços baixos todos os dias em TVs, laptops, telefones celulares, tablets
e iPads, videogames, computadores desktop, câmeras e filmadoras, áudio, vídeo e muito mais.</p>
				<!-- //footer first section -->
				<!-- footer second section -->
				<div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-dolly"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Frete grátis</h3>
								<p>em compras acima de R$ 1000.00</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer my-md-0 my-4">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-shipping-fast"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Entrega Rápida</h3>
								<p>No mundo todo</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="far fa-thumbs-up"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Grande Escolha</h3>
								<p>de produtos</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //footer second section -->
			</div>
		</div>
		<!-- footer third section -->
		<div class="w3l-middlefooter-sec">
			<div class="container py-md-5 py-sm-4 py-3">
				<div class="row footer-info w3-agileits-info">
					<!-- footer categories -->
					<div class="col-md-3 col-sm-6 footer-grids">
						<h3 class="text-white font-weight-bold mb-3">Categorias</h3>
						<ul>
							<li class="mb-3">
								<a href="product.html">Celulares </a>
							</li>
							<li class="mb-3">
								<a href="product.html">Computadores</a>
							</li>
							<li class="mb-3">
								<a href="product.html">TV, Audio</a>
							</li>
							<li class="mb-3">
								<a href="product2.html">Smartphones</a>
							</li>
							<li class="mb-3">
								<a href="product.html">Máquinas de Lavar</a>
							</li>
							<li>
								<a href="product2.html">Refrigeradores</a>
							</li>
						</ul>
					</div>
					<!-- //footer categories -->
					<!-- quick links -->
					<div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Links Rápidos</h3>
						<ul>
							<li class="mb-3">
								<a href="about.html">Sobre nós</a>
							</li>
							<li class="mb-3">
								<a href="contact.html">Contato</a>
							</li>
							<li class="mb-3">
								<a href="">Ajuda</a>
							</li>
							<li class="mb-3">
								<a href="">Faqs</a>
							</li>
							<li class="mb-3">
								<a href="">Termos de uso</a>
							</li>
							<li>
								<a href="">Política de Privacidade</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Entrar em contato</h3>
						<ul>
							<li class="mb-3">
								<i class="fas fa-map-marker"></i> Rua Conceição, 321 - Santo Antônio - São Caetano do Sul - 09530-060</li>
							<li class="mb-3">
								<i class="fas fa-mobile"></i> 4002 8922 </li>
							<li class="mb-3">
								<i class="fas fa-phone"></i> 2001 4511</li>
							<li class="mb-3">
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:martorelli_biel@outlook.com"> martorelli_biel@outlook.com</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
						<!-- newsletter -->
						<h3 class="text-white font-weight-bold mb-3">Newsletter</h3>
						<p class="mb-3">Frete grátis na primeira compra!</p>
						<form action="#" method="post">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" name="email" required="">
								<input type="submit" value="Go">
							</div>
						</form>
						<!-- //newsletter -->
						<!-- social icons -->
						<div class="footer-grids  w3l-socialmk mt-3">
							<h3 class="text-white font-weight-bold mb-3">Nos Siga:</h3>
							<div class="social">
								<ul>
									<li>
										<a class="icon fb" href="https://www.facebook.com/gaah.martorelli">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a class="icon tw" href="https://twitter.com/Martozika">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //social icons -->
					</div>
				</div>
				<!-- //quick links -->
			</div>
		</div>
				<!-- //brands -->
				<!-- payment -->
				<div class="sub-some child-momu mt-4">
					<h5 class="font-weight-bold mb-3">Métodos de Pagamento</h5>
					<ul>
						<li>
							<img src="images/pay2.png" alt="">
						</li>
						<li>
							<img src="images/pay5.png" alt="">
						</li>
						<li>
							<img src="images/pay1.png" alt="">
						</li>
						<li>
							<img src="images/pay4.png" alt="">
						</li>
						<li>
							<img src="images/pay6.png" alt="">
						</li>
						<li>
							<img src="images/pay3.png" alt="">
						</li>
						<li>
							<img src="images/pay7.png" alt="">
						</li>
						<li>
							<img src="images/pay8.png" alt="">
						</li>
						<li>
							<img src="images/pay9.png" alt="">
						</li>
					</ul>
				</div>
				<!-- //payment -->
			</div>
		</div>
		<!-- //footer fourth section (text) -->
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right py-3">
		<div class="container">
			<p class="text-center text-white">© 2020 Lojinha da USCS. Todos os direitos reservados | Design by
				Martorelli.</a>
			</p>
		</div>
	</div>
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- easy-responsive-tabs -->
	<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
	<script src="js/easyResponsiveTabs.js"></script>

	<script>
		$(document).ready(function () {
			//Horizontal Tab
			$('#parentHorizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				tabidentify: 'hor_1', // The tab groups identifier
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#nested-tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
		});
	</script>
	<!-- //easy-responsive-tabs -->

	<!-- credit-card -->
	<script src="js/creditly.js"></script>
	<link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />
	<script>
		$(function () {
			var creditly = Creditly.initialize(
				'.creditly-wrapper .expiration-month-and-year',
				'.creditly-wrapper .credit-card-number',
				'.creditly-wrapper .security-code',
				'.creditly-wrapper .card-type');


			$(".creditly-card-form .submit").click(function (e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
					// Your validated credit card output
					console.log(output);
				}
			});
		});
	</script>

	<!-- creditly2 (for paypal) -->
	<script src="js/creditly2.js"></script>
	<script>
		$(function () {
			var creditly = Creditly2.initialize(
				'.creditly-wrapper .expiration-month-and-year-2',
				'.creditly-wrapper .credit-card-number-2',
				'.creditly-wrapper .security-code-2',
				'.creditly-wrapper .card-type');

			$(".creditly-card-form-2 .submit").click(function (e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
					// Your validated credit card output
					console.log(output);
				}
			});
		});
	</script>

	<!-- //credit-card -->


	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->

</body>

</html>
