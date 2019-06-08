<?php
	function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
	}
?>

<html lang="pt-br">
<head>
    <title>Portal de Vagas &mdash; </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="site-wrap">
        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->

        <div class="site-navbar-wrap js-site-navbar bg-white">
            <div class="container">
                <div class="site-navbar bg-light">
                    <div class="py-1">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <h2 class="mb-0 site-logo"><a href="index.php">Vagas<strong class="font-weight-bold">Emprego</strong> </a></h2>
                            </div>
                            <div class="col-10">
                                <nav class="site-navigation text-right" role="navigation">
                                    <div class="container">
                                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                                        <ul class="site-menu js-clone-nav d-none d-lg-block">
																					<li><a href=""><span class="bg-primary text-white py-3 px-4 rounded">
																						<?php

																						session_start();

																						/**/
																						require_once "classes/DB.php";
																						require_once "classes/login.php";


																						if(isset($_GET['logout'])):

																										if($_GET['logout']== 'ok'):
																											 Login::deslogar();

																								endif;

																						endif;

																						if(isset($_SESSION['logado'])):
																								?>

																								<!--informo o campo que utilizarei para mostra quem se encontra logado-->
																								 <?php echo $_SESSION['usuario'];?>

																								<br />

																						<?php

																								else:
																										echo "Você não esta logado ou Não tem acesso tente novamente";?>

																										<a href="login.php">Inicio</a>
																										<?php


																						endif;
																						?>
																					</span></a></li>
																			</li>
																			<li><a href="logado.php?logout=ok"><span class="bg-primary text-white py-3 px-4 rounded">Sair</span></a></li>
																			</ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 113px;"></div>
        <div class="site-blocks-cover overlay" style="background-image: url('images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="site-section">
                        <div class="container">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-10 mx-auto text-center mb-5 section-heading">
                <h2>Cadastro Vaga</h2>
                <br>
                <br>
                <form action="validacaoVaga.php" method="POST">
                    <label for="vaga">Função: </br></label>

                    <input type="text" name="funcao" id="funcao" required="">
                    <br />
                    <label for="remuneracao">Salário: </br></label>
                    <input type="text" name="remuneracao" id="remuneracao" required="">
                    <br />
                 <?php
             $categoria = new categoria;
             $categorias = $categoria->findAll();
            foreach($categorias as $categoria){
			?>
			<label >
			<input type="checkbox"  name="categorias[]" value="<?php echo $categoria->idCategoria  ?>" >
			<?php echo $categoria->nomeCategoria ?>
			</label>
			<?php } ?>
                    <div><label for="descricaoVaga">Atribuições Desejáveis: </label></div>
                    <div>
                        <textarea rows="5" cols="30" name="descricaoVaga" id="descricaoVaga">



               </textarea>
			   <br />
               <label for="contatoEmail">Digite um email para Contato: </label></br>
			   <input type="text" name="contatoEmail" id="contatoEmail" required="">
			    <br />
			   <label for="contatoTelefone">Digite um telefone para Contato: </label></br>
			   <input type="text" name="contatoTelefone" id="contatoTelefone" required="">
			    <br />

                                <input type="submit" name="cadastrar" value="cadastrar">
																 <input type="reset" name="reset" value="Limpar">
                </form>
            </div>
        </div>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/aos.js"></script>

        <script src="js/mediaelement-and-player.min.js"></script>
        <script src="js/main.js"></script>
</body>
</html>
