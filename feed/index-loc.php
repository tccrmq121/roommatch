<?php

include('../php/protect2.php');

//Seleção do nome para a barra superior
require('../php/conexao.php');

$query = 'SELECT nome_completo FROM locadores WHERE id_locador = '.$_SESSION['id_locador']; 
$result = mysqli_query($mysqli, $query);

$row = mysqli_fetch_row($result);


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>RoomMatch</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/log.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link"><?php echo $row[0]; ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="../php/update_locador/update_locador.php">Atualizar Perfil</a></li>
                        <li class="nav-item"><a class="nav-link" href="../php/update_locador/update_imovel.php">Atualizar Imóvel</a></li>
                        <li class="nav-item"><a class="nav-link" href="../php/update_locador/update_quarto.php">Atualizar Quarto</a></li>
                        <li class="nav-item"><a class="nav-link" href="../index.php">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="../php/logout.php">Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Feed</h2>
                    <h3 class="section-subheading text-muted">Encontre o quarto ideal para você!</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/111.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                
                                <div class="portfolio-caption-heading">Parque Universitário</div>
                                <div class="portfolio-caption-subheading text-muted">Casa</div>
                                <div class="portfolio-caption-subheading">1 Quarto 3m x 3m</div>
                                <div class="portfolio-caption-subheading">Quantidade de quartos</div>
                               
                                <div class="portfolio-caption-subheading">Aceita Pets</div>
                                <div class="portfolio-caption-subheading">Vaga para carro</div>
                                <hr>
                                <div class="portfolio-caption-heading">Dados Do Locador</div>
                                <div class="portfolio-caption-subheading "><strong>Nome Completo:</strong> Lucas Finoti Rodrigues</div>
                                
                                
                                <div class="portfolio-caption-subheading"><strong>Data De Nascimento:</strong> 26/06/2001</div>
                               
                                <div class="portfolio-caption-subheading"><strong>Sexo:</strong> Indefinifo</div>
                                <div class="portfolio-caption-subheading"><strong>Fumante:</strong> Não</div>
                                
                                <div class="portfolio-caption-subheading"> <strong>Tem Pet?</strong> Sim</div>
                                <div class="portfolio-caption-subheading"><strong>Vegano: </strong> Sim</div>
                                <div class="portfolio-caption-subheading"><strong>Vegetariano:</strong> Sim</div>
                                <div class="portfolio-caption-subheading "><strong>Faculdade:</strong> Sim</div>
                                <div class="portfolio-caption-subheading"><strong>Trabalho:</strong>Reitor na UNESP</div>
                                <div class="portfolio-caption-subheading"><strong>Cozinha:</strong> Sim</div>
                               
                                <div class="portfolio-caption-subheading"><strong>Possui Carro:</strong> Sim </div>
                                <div class="portfolio-caption-subheading"><strong>Possui Veiculo:</strong> Sim</div>
                                 <a href="https://api.whatsapp.com/send/?phone=5514998100124&text&app_absent=0" class="btn btn-primary btn-xl text-uppercase"    id="bb"   type="button">
                                  
                                    Entre Em Contato!                                </a>
                                   
						
							
							
                                <hr>
                                <div class="portfolio-caption-subheading text-muted" id="tete">Valor do aluguel</div>
                                <div class="portfolio-caption-heading">R$750,00</div>
                             
                               
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                
                                <div class="portfolio-caption-heading">Vila Inglesa</div>
                                <div class="portfolio-caption-subheading text-muted">Casa</div>
                                <div class="portfolio-caption-subheading">1 Quarto 3m x 3m</div>
                                <div class="portfolio-caption-subheading">Quantidade de quartos</div>
                               
                                <div class="portfolio-caption-subheading">Aceita Pets</div>
                                <div class="portfolio-caption-subheading">Vaga para carro</div>
                                <hr>
                                <div class="portfolio-caption-subheading text-muted">Valor do aluguel</div>
                                <div class="portfolio-caption-heading">R$750,00</div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/11.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                
                                <div class="portfolio-caption-heading">Centro</div>
                                <div class="portfolio-caption-subheading text-muted">Apartamento</div>
                                <div class="portfolio-caption-subheading"><strong> Quantidade de quartos</strong> 2</div>
                                <div class="portfolio-caption-subheading">Quarto 38m<sup>2</sup></div>                             
                                <div class="portfolio-caption-subheading">Aceita Pets</div>
                                <div class="portfolio-caption-subheading">Vaga para carro</div>
                                <hr>
                                <div class="portfolio-caption-subheading text-muted">Valor do aluguel</div>
                                <div class="portfolio-caption-heading">R$450,00</div>
                                
                            </div>
                           
                        </div>
                    </div>
                   
        </section>
    
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Parque Universitário</h2>
                                    <p class="item-intro ">Tupã-SP</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                    <p>Descrição DescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDes<br>
                                        criçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriç<br>
                                        ãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescrição</p>
                                        <!-- <p><strong>Quantidade de quartos   </strong>121 |<strong>   Tamanho da casa</strong>
                                            64m^2</p> -->
                                            <div class="text-uppercase"> <strong>Caracteristicas Da Casa</strong></div>
                                            <br>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Quantidade de quartos</strong>
                                            xx
                                        </li>
                                        <li>
                                            <strong>Tamanho da casa</strong>
                                            64m^2
                                        </li>
                                        <li>
                                            <strong>Quantidade De Cômodos</strong>
                                            xx
                                        </li>
                                        <li>
                                            <strong>Quantidade De Banheiros</strong>
                                            xx
                                        </li>
                                        <li>
                                            <strong>Lavanderia</strong>
                                            Sim ou Não
                                        </li>
                                        <li>
                                            <strong>Internet</strong>
                                            Sim ou Não
                                        </li>
                                    </ul>
                                    <hr>
                                    </div>
                                    <div class="text-uppercase"><strong>Caracteristicas Do Quarto</strong></div>
                                    <br>
                                    <ul class="list-inline">
                                        <p>Descrição DescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDes<br>
                                            criçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriç<br>
                                            ãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescrição</p>
                                       
                                        <li>
                                            <strong>Tamanho do quarto</strong>
                                            64m^2
                                        </li>
                                        <li>
                                            <strong>Valor do aluguel</strong>
                                            xx
                                        </li>
                                      
                                        <li>
                                            <strong>Mobiliado</strong>
                                            Sim ou Não
                                        </li>
                                        <li>
                                            <strong>Internet</strong>
                                            Sim ou Não
                                        </li>
                                        <li>
                                            <strong>Quantidade de tomadas</strong>
                                            64m^2
                                        </li>
                                        <li>
                                            <strong>Ar Condicionado</strong>
                                            Sim ou Não
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar Anuncio
                                    </button>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                    <p>Descrição DescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDes<br>
                                        criçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriç<br>
                                        ãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescrição</p>
                                        <!-- <p><strong>Quantidade de quartos   </strong>121 |<strong>   Tamanho da casa</strong>
                                            64m^2</p> -->
                                            <div class="text-uppercase"> <strong>Caracteristicas Da Casa</strong></div>
                                            <br>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Quantidade de quartos</strong>
                                            xx
                                        </li>
                                        <li>
                                            <strong>Tamanho da casa</strong>
                                            64m^2
                                        </li>
                                        <li>
                                            <strong>Quantidade De Cômodos</strong>
                                            xx
                                        </li>
                                        <li>
                                            <strong>Quantidade De Banheiros</strong>
                                            xx
                                        </li>
                                        <li>
                                            <strong>Lavanderia</strong>
                                            Sim ou Não
                                        </li>
                                        <li>
                                            <strong>Internet</strong>
                                            Sim ou Não
                                        </li>
                                    </ul>
                                    <hr>
                                    </div>
                                    <div class="text-uppercase"><strong>Caracteristicas Do Quarto</strong></div>
                                    <br>
                                    <ul class="list-inline">
                                        <p>Descrição DescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDes<br>
                                            criçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriç<br>
                                            ãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescrição</p>
                                       
                                        <li>
                                            <strong>Tamanho do quarto</strong>
                                            64m^2
                                        </li>
                                        <li>
                                            <strong>Valor do aluguel</strong>
                                            xx
                                        </li>
                                      
                                        <li>
                                            <strong>Mobiliado</strong>
                                            Sim ou Não
                                        </li>
                                        <li>
                                            <strong>Internet</strong>
                                            Sim ou Não
                                        </li>
                                        <li>
                                            <strong>Quantidade de tomadas</strong>
                                            64m^2
                                        </li>
                                        <li>
                                            <strong>Ar Condicionado</strong>
                                            Sim ou Não
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar Anuncio
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                                    <p>Descrição DescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDes<br>
                                        criçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriç<br>
                                        ãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescrição</p>
                                        <!-- <p><strong>Quantidade de quartos   </strong>121 |<strong>   Tamanho da casa</strong>
                                            64m^2</p> -->
                                            <div class="text-uppercase"> <strong>Caracteristicas Da Casa</strong></div>
                                            <br>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Quantidade de quartos</strong>
                                            xx
                                        </li>
                                        <li>
                                            <strong>Tamanho da casa</strong>
                                            64m^2
                                        </li>
                                        <li>
                                            <strong>Quantidade De Cômodos</strong>
                                            xx
                                        </li>
                                        <li>
                                            <strong>Quantidade De Banheiros</strong>
                                            xx
                                        </li>
                                        <li>
                                            <strong>Lavanderia</strong>
                                            Sim ou Não
                                        </li>
                                        <li>
                                            <strong>Internet</strong>
                                            Sim ou Não
                                        </li>
                                    </ul>
                                    <hr>
                                    </div>
                                    <div class="text-uppercase"><strong>Caracteristicas Do Quarto</strong></div>
                                    <br>
                                    <ul class="list-inline">
                                        <p>Descrição DescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDes<br>
                                            criçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriç<br>
                                            ãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescrição</p>
                                       
                                        <li>
                                            <strong>Tamanho do quarto</strong>
                                            64m^2
                                        </li>
                                        <li>
                                            <strong>Valor do aluguel</strong>
                                            xx
                                        </li>
                                      
                                        <li>
                                            <strong>Mobiliado</strong>
                                            Sim ou Não
                                        </li>
                                        <li>
                                            <strong>Internet</strong>
                                            Sim ou Não
                                        </li>
                                        <li>
                                            <strong>Quantidade de tomadas</strong>
                                            64m^2
                                        </li>
                                        <li>
                                            <strong>Ar Condicionado</strong>
                                            Sim ou Não
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar Anuncio
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

