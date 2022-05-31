<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("por favor debes iniciar sesion");
                window.location = "../login.php";
            </script>
        ';
        header("location: ./index.php");
        session_destroy();
        die();
        
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Paradise - Parque Alto de los Idolos</title>
        <link rel="icon" type="image/x-icon" href="../assets/estatua.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">ARCHAEOLOGICAL PARKS </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Places</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="./cerrar_sesion.php">cerrar sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">PARQUES ARQUEOLOGICOS DE ISNOS</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Recorre nuestros maravillosos parques y vive una maravillosa esperiencia </h2>
                        <a class="btn btn-primary" href="#about">Conocenos</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Ubicados en el Municipio de Isnos - Huila</h2>
                        <p class="text-white-50">
                            una empresa dedicada al sector turistico ubicado en el municipio de Isnos - Huila, tenemos en deber de invitarte a ti para que vengas y conocas de nuestro maravillosos parques arqueologicos en ... direccion ....
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="../assets/img/photo.png" alt="..." />

            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="../assets/img/isnos2.JPG" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Ubicados en el Municipio de Isnos - Huila</h4>
                            <p class="text-black-50 mb-0"> El municipio de Isnos, es una región que posee tres clases de climas, que van desde el caliente, que se ubica en las estribaciones de las vegas de los ríos que lo delimitan, como los son el rio magdalena, por una parte, el
                                rio Mazamorras por otra y el rio Bordones. En estas tierras ricas para la agricultura se produce café, yuca, plátano, entre otros productos menores y se practica la ganadería. Sobre la parte intermedia, después de superar
                                las vegas y los cañones de nuestra riqueza hídrica que circunda el Municipio, es unas tierras aptas para el cultivo de la caña panelera, convirtiendo esta actividad humana, el reconocimiento del municipio como capital panelera
                                del el Huila y uno de los municipio a nivel nacional reconocido por la calidad del producto panelero, siendo este el renglón básico de la economía del municipio, pero que además, sus suelos ricos proporcionan para el sostenimiento
                                alimenticio a la población, de variedad de producto dentro de la explotación agrícola, en donde se produce de todo. Sobre la parte alta de la cabecera municipal, su clima es frio y la producción lechera, tiene en este lugar
                                su desarrollo prospero de muchas familias que, asociado a los cultivos menores de frutales, es en esta región, la base del sostenimiento del grupo social que habita en estos lugares. Además, es la parte más rica en producción
                                acuífera, por encontrase sobre las estribaciones de la reserva forestal del Puracé, lo que garantiza la sostenibilidad de reserva forestal, que proporciona diversidad de flora y fauna, humedales, quebradas y ríos que descienden
                                de lo alto, proporcionan agua que trasmite vida a lo largo y ancho del territorio, provee de líquido preciado para diversos acueductos que beneficia a la mayor población tanto del casco urbano como rural.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="../assets/img/alto_idolos.jpeg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">PARQUE ARQUEOLÓGICO ALTO DE LOS ÍDOLOS</h4>
                                    <p class="mb-0 text-white-50">El Alto de los Ídolos es, después de Mesitas, el sitio con mayor densidad de tumbas, montículos y estatuas de la cultura arqueológica de San Agustín. Fue reportado por primera vez por Konrad Th. Preuss (Preuss, 1931),
                                        está localizado en el municipio de Isnos, cinco kilómetros al noreste de la cabecera municipal de San Agustín (quince kilómetros por carretera) y cuatro al suroeste de la cabecera municipal de Isnos.
                                    </p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="../assets/img/parque_piedras.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">PARQUE ARQUEOLÓGICO ALTO DE LAS PIEDRAS</h4>
                                    <p class="mb-0 text-white-50">El Alto de las Piedras, ubicado en la vereda las Delicias, unos diez kilómetros al norte del Alto de los Ídolos, es un centro ceremonial adecuado sobre una pequeña colina por medio de aterrazamientos y rellenos artificiales
                                        distribuidos en forma de medialuna. Se le conoció originalmente como Gallineros, por el nombre de la quebrada aledaña.</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Te gustaria mas informacion!</h2>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Pon tu email aqui para mas informacion..." aria-label="Pon tu email aqui para mas informacion..." data-sb-validations="required,email" /></div>
                                <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Enviar!</button></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Pronto te llegara mas informacion!</div>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3 mt-2">Error sending message!</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Ubicacion</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Colombia, Isnos - Huila </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">paradiseData@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+57 (315) 241 7445</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="https://github.com/pablo19-alexander" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; paradiseData
            <script>
                document.write(new Date().getFullYear())
            </script>
        </div>        </footer>
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