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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">



    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

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
											<li class="has-children"><a ><span class="bg-primary text-white py-3 px-4 rounded">Categorias</span></a>

												<ul class="dropdown arrow-top">
													<?php
													$categoria = new categoria;
						              $categorias = $categoria->findAll();
						             foreach($categorias as $categoria){
						 			?>
						 			<label >

											<ul>
											<li><span class="bg-primary text-white py-3 px-4"><?php echo $categoria->nomeCategoria ?><br></span></li>

											</ul>
											</label>
										<?php } ?>
												</ul>
										</li>
                        <li class="has-children"><a ><span class="bg-primary text-white py-3 px-4 rounded">Cadastrar-se</span></a>

                        <ul class="dropdown arrow-top">
                          <li><a href="CandidatoCadastro.html">Candidatos</a></li>
                          <li><a href="EmpregadorCadastro.html">Empregador</a></li>



                        </ul>
                      </li>
					   <li><a href="login.php"><span class="bg-primary text-white py-3 px-4 rounded">Entrar</span></a></li>
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
            <h2 class="mb-5">Vagas Disponiveis</h2>
          </div>
        </div>
			  <?php
	          $vaga = new vaga;
             $vaga = $vaga->findAll();
            foreach($vaga as $vaga){
		?>
		<label >
		<ul>
		<li>Função:<br><?php echo $vaga->funcao ?></li>
		<li>Remuneração:<br><?php echo $vaga->remuneracao ?></li>
		<li> <a href="exibeVaga.php?id=<?php echo $vaga->idVaga ?>">Ver Mais detalhes.</a></li>
		</ul>
		</label>
		<?php } ?>

    <footer class="site-footer">
      <div class="container">


        <div class="row">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4 text-white">Sobre</h3>
            <p>Texto com informações FAE.</p>

          </div>

          <div class="col-md-2">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Redes Sociais</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="p-2"><span class="icon-instagram"></span></a>


                </p>
              </div>
          </div>
        </div>

    </footer>
  </div>


  </body>
</html>
