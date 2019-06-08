<?php
	function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
	}

?>
<!DOCTYPE html>
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
              <?php

          		$usuario = new Usuarios();

          		if(isset($_POST['cadastrar'])):

                $nome = $_POST["nome"];
                $documento = $_POST["documento"];
                $email = $_POST["email"];
                $telefone = $_POST["telefone"];
                $telefoneOp = $_POST["telefoneOp"];
                $senha = $_POST["senha"];
                $sexo = $_POST["sexo"];
							
                $descricao = $_POST["descricao"];
                $arquivo = $_FILES["arquivo"]["name"];


          			$usuario->setNome($nome);
                $usuario->setDocumento($documento);
                $usuario->setEmail($email);
                $usuario->setSenha($senha);
              	$usuario->setTelefone($telefone);
              	$usuario->setTelefoneOp($telefoneOp);
                $usuario->setSexo($sexo);
								$usuario->setTipoConta("C");
            	  $usuario->setDescricao($descricao);
              	$usuario->setArquivo($arquivo);

          			# Insert
          			if($usuario->insert()){
          				echo "Inserido com sucesso!";
          			}

          		endif;

          		?>
                <div class="site-navbar bg-light">
                    <div class="py-1">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <h2 class="mb-0 site-logo"><a href="index.html">Vagas<strong class="font-weight-bold">Emprego</strong> </a></h2>
                            </div>
                            <div class="col-10">
                                <nav class="site-navigation text-right" role="navigation">
                                    <div class="container">
                                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                                        <ul class="site-menu js-clone-nav d-none d-lg-block">

                                            <li class="has-children">
                                                <a href="new-post.html"><span class="bg-primary text-white py-3 px-4 rounded">Cadastrar-se</span></a>
                                                <ul class="dropdown arrow-top">
                                                    <li><a href="CandidatoCadastro.html">Candidatos</a></li>
                                                    <li><a href="EmpregadorCadastro.html">Empregador</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="login.html"><span class="bg-primary text-white py-3 px-4 rounded">Entrar</span></a></li>
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
        <div class="validacao">
<?php
include "ValidacaoDocumento.php";

$nome = $_POST["nome"];
$documento = $_POST["documento"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$telefoneOp = $_POST["telefoneOp"];
$senha = $_POST["senha"];
$sexo = $_POST["sexo"];
$descricao = $_POST["descricao"];
$arquivo = $_FILES["arquivo"]["name"];
$erro = 0;

//Verifica se o campo nome não está em branco.
if(empty($nome))
{
    echo "Favor digitar seu nome";
	$erro =1;
}

//verifica se o campo telefone não está em branco.
if (preg_match('/^[0-9]{11}$/', $telefone)):
else:
    echo ' <br> Telefone inválido';
    $erro =1;
endif;

//verifica se o campo telefone opcional foi digitado corretamente
if (!empty($telefoneOp) or preg_match('/^[0-9]{11}$/', $telefoneOp)):
    echo ' <br> Telefone 2 inválido';
    $erro =1;

endif;
//Verifica se o e-mail é valido.

if(filter_var($email, FILTER_VALIDATE_EMAIL)):
else:
    echo '<br> E-mail inválido.';
    $erro =1;
endif;

$descricao = strip_tags($descricao);
if(CPFValido($documento)):
else:
    echo '<br>CPF inválido.';
    $erro =1;
endif;

if ( strlen( $senha ) < 8 ) {
echo '<br> Mínimo de 8 digitos.';
$erro =1;
}

$extencao = substr($arquivo,-3 );
if($extencao == 'pdf'):
    move_uploaded_file($_FILES["arquivo"]["tmp_name"],"uploads/".$arquivo);
else:
    echo '<br> Arquivo Invalido.';
    $erro =1;
endif;
if ($erro == 0){
    echo 'Cadastro Criando com sucesso';
}
else{}
?>
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

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                    for (var i = 0; i < total; i++) {
                        new MediaElementPlayer(mediaElements[i], {
                            pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                            shimScriptAccess: 'always',
                            success: function () {
                                var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                                for (var j = 0; j < targetTotal; j++) {
                                    target[j].style.visibility = 'visible';
                                }
                            }
                        });
                    }
                });
            </script>

</body>
</html>
