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
							<a href="pgInicial.php" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Bem Vindo!! </a>
						</li>
						<li class="text-center text-white">
							<a href="sair.php" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i> Sair </a>
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
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="pgInicial.php" class="font-weight-bold font-italic">
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
							<a class="nav-link" href="pgInicial.php">Ínicio
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
													<a href="product1.php">Todos os Celulares</a>
												</li>
												<li>
													<a href="product1.php">Todos os acessórios para Celulares</a>
												</li>
												<li>
													<a href="product1.php">Capinhas</a>
												</li>
												<li>
													<a href="product1.php">Protetores de tela</a>
												</li>
												<li>
													<a href="product1.php">Power Banks</a>
												</li>
												<li>
													<a href="product1.php">Tablets</a>
												</li>
												<li>
													<a href="product1.php">Dispositivos vestíveis</a>
												</li>
												<li>
													<a href="product1.php">Smart Home</a>
												</li>
											</ul>
										</div>
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="product1.php">Laptops</a>
												</li>
												<li>
													<a href="product1.php">Drives & Armazenamento</a>
												</li>
												<li>
													<a href="product1.php">Impresoras & Tinta</a>
												</li>
												<li>
													<a href="product1.php">Devices de Internet</a>
												</li>
												<li>
													<a href="product1.php">Acessórios para Computadores</a>
												</li>
												<li>
													<a href="product1.php">Zona Gamer</a>
												</li>
												<li>
													<a href="product1.php">Software</a>
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
													<a href="product21.php">Televisões</a>
												</li>
												<li>
													<a href="product21.php">Sistemas de entretenimento doméstico</a>
												</li>
												<li>
													<a href="product21.php">Headphones</a>
												</li>
												<li>
													<a href="product21.php">Caixas de Som</a>
												</li>
												<li>
													<a href="product21.php">MP3, Players de áudio & Acessórios</a>
												</li>
												<li>
													<a href="product21.php">Acessórios para Audio & Video</a>
												</li>
												<li>
													<a href="product21.php">Cameras</a>
												</li>
												<li>
													<a href="product21.php">DSLR Cameras</a>
												</li>
												<li>
													<a href="product21.php">Acessórios para Camera</a>
												</li>
											</ul>
										</div>
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="product21.php">Consoles</a>
												</li>
												<li>
													<a href="product21.php">Todos os Eletrónicos</a>
												</li>
												<li>
													<a href="product21.php">Ar Concionados</a>
												</li>
												<li>
													<a href="product21.php">Refrigeradores</a>
												</li>
												<li>
													<a href="product21.php">Máquinas de Lavar</a>
												</li>
												<li>
													<a href="product21.php">Eletrodomésticos para Cozinha e Casa</a>
												</li>
												<li>
													<a href="product21.php">Eletrodomésticos para Aquecimento e Refrigeração</a>
												</li>
												<li>
													<a href="product21.php">Todos os Eletrodomésticos</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
								<a class="nav-link" href="about1.php">Sobre Nós</a>
							</li>
							<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
								<a class="nav-link" href="product1.php">Novidades</a>
							</li>
							<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Ofertas
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="product1.php">Eletrónicos</a>
									<a class="dropdown-item" href="product21.php">Eletrodomésticos</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="single1.php">Samsung Galaxy J7 Prime</a>
									<a class="dropdown-item" href="single21.php">Refrigerador LG 260 L 3 Star Frost-Free Duas Portas</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="checkout1.php">Página de Checkout</a>
									<a class="dropdown-item" href="payment1.php">Página de pagamento</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact1.php">Entre em contato</a>
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
					<li>Refrigerador LG 260 L 3 Star Frost-Free Duas Portas</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>R</span>efrigerador LG 260 L 3
				<span>S</span>tar Frost-Free Duas Portas</h3>
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/sii1.jpg">
									<div class="thumb-image">
										<img src="images/sii1.jpg" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
								<li data-thumb="images/sii2.jpg">
									<div class="thumb-image">
										<img src="images/sii2.jpg" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
								<li data-thumb="images/sii3.jpg">
									<div class="thumb-image">
										<img src="images/sii3.jpg" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
						<h3 class="mb-3">Refrigerador LG 260 L 3 Star Frost-Free Duas Portas</h3>
						<p class="mb-3">
						<span class="item_price">R$1600.00</span>
						<del class="mx-2 font-weight-light">R$2.000.00</del>
						<label>Frete Grátis</label>
					</p>
					<div class="single-infoagile">
						<ul>
							<li class="mb-3">
								Elegível para pagamento na entrega.
							</li>
							<li class="mb-3">
								Velocidade de envio para entrega.
							</li>
							<li class="mb-3">
								EMIs a partir de R$ 958/mês.
							</li>
							<li class="mb-3">
								Oferta de compra em Banco
								<span class="item_price">15% de Desconto Extra.</span>
							</li>
						</ul>
					</div>
					<div class="product-single-w3l">
							<p class="my-3">
									<i class="far fa-hand-point-right mr-2"></i>
						Instalação padrão gratuita nas Primeiras
							<label>48 horas</label> de Entrega</p>
						<ul>
								<li class="mb-1">
								Frost Free Double Door: Descongelamento automático para impedir o acúmulo de gelo
							</li>
							<li class="mb-1">
								Capacidade 260 L: Adequado para famílias com 2 a 3 membros
							</li>
							<li class="mb-1">
								Classificação energética: 3 estrelas
							</li>
							<li class="mb-1">
								Garantia: garantia de 1 ano no produto e garantia de 10 anos no compressor
							</li>
							<li class="mb-1">
								Tipo de prateleira: vidro temperado para suportar o peso dos recipientes mais pesados
							</li>
							<li class="mb-1">
								Compressor inversor: eficiente em termos de energia, menos ruído e mais durável
							</li>
							<li class="mb-1">
								Também incluído na caixa: manual do usuário, cartão de garantia
							</li>
						</ul>
						<p class="my-sm-4 my-3">
								<i class="fas fa-retweet mr-3"></i>Net Banking e Cartão de Crédito/Débito/Caixa Eletrônico
						</p>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="Refrigerador LG 260 L 3 Star Frost-Free Duas Portas" />
									<input type="hidden" name="amount" value="1600.00" />
									<input type="hidden" name="discount_amount" value="100.00" />
									<input type="hidden" name="currency_code" value="BRL" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Adicione ao Carrinho" class="button btn" />
								</fieldset>
							</form>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- //Single Page -->

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
								<a href="product1.php">Celulares </a>
							</li>
							<li class="mb-3">
								<a href="product1.php">Computadores</a>
							</li>
							<li class="mb-3">
								<a href="product1.php">TV, Audio</a>
							</li>
							<li class="mb-3">
								<a href="product21.php">Smartphones</a>
							</li>
							<li class="mb-3">
								<a href="product1.php">Máquinas de Lavar</a>
							</li>
							<li>
								<a href="product21.php">Refrigeradores</a>
							</li>
						</ul>
					</div>
					<!-- //footer categories -->
					<!-- quick links -->
					<div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Links Rápidos</h3>
						<ul>
							<li class="mb-3">
								<a href="about1.php">Sobre nós</a>
							</li>
							<li class="mb-3">
								<a href="contact1.php">Contato</a>
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
		<!-- //footer third section -->

		<!-- footer fourth section -->
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
	<script src="js/minicart1.js"></script>
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

	<!-- imagezoom -->
	<script src="js/imagezoom.js"></script>
	<!-- //imagezoom -->

	<!-- flexslider -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<script src="js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->

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
