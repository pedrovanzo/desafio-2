@extends('layouts.main')

@section('content')

<header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="display: none;">
            <a class="navbar-brand" href="#">
                <img src="https://tegrus.com.br/assets/mail/tegrus-white.png" height="30"
                    class="d-inline-block align-top mr-2" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-2">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Serviços</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            usuario@email.com
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://www.gmail.com/" target="_blank">Acreditar</a>
                            <a class="dropdown-item" href="#">Idioma</a>
                            <a class="dropdown-item" href="#">Configurações de conta</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Sair</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Desabilitado</a>
                    </li>
                </ul>
                <button class="btn btn-outline-success" type="button">Tegrus</button>
            </div>
        </nav>

    </header>

    <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.pexels.com/photos/998641/pexels-photo-998641.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                        class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                    <div class="container">
                        <div class="carousel-caption text-center">
                            <h1 class="p-3 mb-3 rounded">Title for landings.</h1>
                            <p class="p-3 rounded">Cras justo odio, dapibus ac facilisis in. Lorem ipsum dolor sit amet.
                            </p>
                            <p>
                                <button type="button"
                                    class="btn btn-lg btn-outline-light mx-2 my-2">Entrar</button>
                                <button type="button" class="btn btn-lg btnCustom mx-2 my-2">Descobrir</button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/270348/pexels-photo-270348.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                        class="bd-placeholder-img" width="100%" height="50%" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                    <div class="container">
                        <div class="carousel-caption cShadow px-2">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btnCustom" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/211122/pexels-photo-211122.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                    <div class="container">
                        <div class="carousel-caption text-right cShadow px-2">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btnCustom" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <!-- Marketing messaging and featurettes
            ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img src="https://cdn1.iconfinder.com/data/icons/modern-future-technology/128/game-controller-x-512.png"
                        class="bd-placeholder-img rounded-circle mb-4" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: 140x140">
                    <title>Placeholder</title>
                    <h2>GameJam</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh
                        ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="https://www.faesa.br/wp-content/uploads/2019/03/Imagem_DESTACADA_HACK.jpg"
                        class="bd-placeholder-img rounded-circle mb-4" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: 140x140">
                    <title>Placeholder</title>
                    <h2>HackFaesa 2019.2</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                        Cras mattis consectetur purus.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="https://techpoint.africa/wp-content/uploads/2015/04/spaceAppsLogo.png"
                        class="bd-placeholder-img rounded-circle mb-4" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: 140x140">
                    <title>Placeholder</title>
                    <h2>Nasa International Space Apps Challenge</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id
                        ligula porta felis euismod semper.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your
                            mind.</span></h2>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                        euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                        tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img src="https://raw.githubusercontent.com/pedrovanzo/front-landing/master/img/onemanband.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                        focusable="false" role="img" aria-label="Placeholder: 500x500">
                        <title>Placeholder</title>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for
                            yourself.</span></h2>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                        euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                        tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="https://raw.githubusercontent.com/pedrovanzo/front-landing/master/img/onemanband.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                        focusable="false" role="img" aria-label="Placeholder: 500x500">
                        <title>Placeholder</title>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                        euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                        tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img src="https://raw.githubusercontent.com/pedrovanzo/front-landing/master/img/onemanband.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                        focusable="false" role="img" aria-label="Placeholder: 500x500">
                        <title>Placeholder</title>
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->
    </main>

    <!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark bgFooterCustom text-light pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mr-auto">

                    <!-- Content -->
                    <img src="https://raw.githubusercontent.com/pedrovanzo/front-landing/master/img/tegrus-branco.png" height="30" class="d-inline-block align-top mr-2 mb-4" alt="">
                    <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                        consectetur
                        adipisicing elit.</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-1 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-1 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                        <li>
                            <a href="#!">Link 5</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-1 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 6</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <ul class="list-unstyled mt-1">
                        <li>
                            <a href="#" class="text-decoration-none">
                                <img src="https://raw.githubusercontent.com/pedrovanzo/front-landing/master/img/fb-icon.png" width="25" class="d-inline-block align-top mx-1 my-4" alt="">
                            </a>
                            <a href="#" class="text-decoration-none">
                                <img src="https://raw.githubusercontent.com/pedrovanzo/front-landing/master/img/insta-icon.png" width="25" class="d-inline-block align-top mx-1 my-4"
                                    alt="">
                            </a>
                            <a href="#" class="text-decoration-none">
                                <img src="https://raw.githubusercontent.com/pedrovanzo/front-landing/master/img/twitter-icon.png" width="25" class="d-inline-block align-top mx-1 my-4"
                                    alt="">
                            </a>
                            <a href="#" class="text-decoration-none">
                                <img src="https://raw.githubusercontent.com/pedrovanzo/front-landing/master/img/pin-icon.png" width="25" class="d-inline-block align-top mx-1 my-4"
                                    alt="">
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

    </footer>
    <!-- Footer -->

@endsection
