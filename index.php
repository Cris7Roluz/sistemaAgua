<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        <title>La Rinconada</title>
        <link rel="icon" href="img/agua.ico" type="image/x-icon">

        <style>
            .hero {
                background: url('img/bn3.jpg') no-repeat center center;
                background-size: cover;
                height: 100vh;
                color: white;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            }
            
            .features-icon {
                font-size: 3rem;
                color: #407a51;
            }
            footer {
                background: #333333;
                color: white;
            }
            footer a {
                color: #a0c4a7;
                text-decoration: none;
            }
            footer a:hover {
                text-decoration: underline;
            }
            #home-tab2:hover, 
            #profile-tab2:hover, 
            #gallery-tab2:hover, 
            #contact-tab3:hover {
                color: black; /* Cambia el texto a negro al pasar el mouse */
            }
            .carousel-item {
                transition: transform 0.6s ease-in-out;
            }

            .carousel-caption {
                background: rgba(0, 0, 0, 0.6);
                padding: 1rem;
                border-radius: 5px;
                bottom: 20px;
            }

            .carousel-control-prev,
            .carousel-control-next {
                width: 5%;
                opacity: 0.7;
                transition: opacity 0.3s ease;
            }

            .carousel-control-prev:hover,
            .carousel-control-next:hover {
                opacity: 1;
            }

            .carousel-indicators button {
                width: 10px;
                height: 10px;
                border-radius: 50%;
                margin: 0 5px;
            }
            .carousel-inner img {
                max-height: 600px; /* Set your desired maximum height */
                width: auto; /* Maintains aspect ratio */
                margin: 0 auto; /* Centers the image */
                object-fit: cover; /* Ensures image fills the space while maintaining aspect ratio */
            }

            /* Optional: Add media queries for responsive sizing */
            @media (max-width: 768px) {
                .carousel-inner img {
                    max-height: 400px;
                }
            }

            @media (max-width: 576px) {
                .carousel-inner img {
                    max-height: 300px;
                }
            }
        </style>
    </head>
    <body>
        <!-- HERO BANNER -->
        <header class="hero text-center">
            <div class="container">
                <h1 class="display-3 fw-bold">Bienvenidos a La Rinconada</h1>
                <p class="lead">El Valle de los Arcoiris</p>
                <a href="#descubre" class="btn btn-lg  btn-success ">Descubre más</a>
            </div>
        </header>

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
            <div class="container-fluid"> <!-- Cambiado a container-fluid -->
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-success rounded-5 shadow-sm w-100" id="navbarNav" role="tablist" 
                        style="--bs-nav-link-color: var(--bs-white); 
                            --bs-nav-pills-link-active-color: var(--bs-success); 
                            --bs-nav-pills-link-active-bg: var(--bs-white);">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active rounded-5" id="home-tab2" data-bs-toggle="tab" type="button" onclick="window.location.href='#descubre'" role="tab" aria-selected="true">Inicio</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" onclick="window.location.href='#descubre'" role="tab" aria-selected="false">Servicios</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-5" id="gallery-tab2" data-bs-toggle="tab" type="button" onclick="window.location.href='#galeria'" role="tab" aria-selected="false">Galeria</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-5" id="contact-tab3" data-bs-toggle="tab" type="button" onclick="window.location.href='#contacto'" role="tab" aria-selected="false">Contactos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-5" id="contact-tab3" data-bs-toggle="tab" type="button" onclick="window.location.href='system/logear.php'" role="tab" aria-selected="false">Sistema</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        





        <!-- SECCIÓN DESCUBRE -->
        <section id="descubre" class="container py-5">
            <div class="text-center mb-4">
                <h2 class="fw-bold">Descubre La Rinconada</h2>
                <p class="text-muted">Naturaleza, aventura y tradición en un solo lugar.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4 text-center">
                    <i class="fas fa-mountain features-icon"></i>
                    <h4 class="mt-3">Aventura</h4>
                    <p>Experimenta la adrenalina en actividades como escalada, senderismo y exploración de páramos.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-seedling features-icon"></i>
                    <h4 class="mt-3">Naturaleza</h4>
                    <p>Disfruta de una biodiversidad única con fauna y flora autóctonas en su estado más puro.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-water features-icon"></i>
                    <h4 class="mt-3">Relajación</h4>
                    <p>Conecta con la tranquilidad de nuestras cascadas, riachuelos y fuentes de agua.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fa-solid fa-house features-icon"></i>
                    <h4 class="mt-3">Hospedaje</h4>
                    <p>Conecta con la tranquilidad de nuestras cascadas, riachuelos y fuentes de agua.</p>
                </div>
                <div class="col-md-4 text-center">
                <i class="fa-duotone fa-solid fa-utensils features-icon"></i>
                    <h4 class="mt-3">Comidas Tipícas</h4>
                    <p>Conecta con la tranquilidad de nuestras cascadas, riachuelos y fuentes de agua.</p>
                </div>
                <div class="col-md-4 text-center">
                <i class="fa-solid fa-mug-hot features-icon"></i>
                    <h4 class="mt-3">Alfareria</h4>
                    <p>Conecta con la tranquilidad de nuestras cascadas, riachuelos y fuentes de agua.</p>
                </div>
                
            </div>
        </section>

        <!-- GALERÍA -->
        <section id="galeria" class="bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Galería</h2>
            <p class="text-muted">Explora la belleza de nuestra comunidad a través de imágenes.</p>
        </div>
        
        <!-- Carousel -->
        <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="8" aria-label="Slide 9"></button>
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="9" aria-label="Slide 10"></button>
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="10" aria-label="Slide 11"></button>
            </div>

            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/galeria/1.jpg" class="d-block w-100 rounded shadow" alt="Paisaje 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Vista Panorámica</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/galeria/2.jpg" class="d-block w-100 rounded shadow" alt="Paisaje 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Naturaleza Viva</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/galeria/3.jpg" class="d-block w-100 rounded shadow" alt="Paisaje 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Colores del Valle</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/galeria/4.jpg" class="d-block w-100 rounded shadow" alt="Paisaje 4">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Rincones Naturales</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/galeria/5.jpg" class="d-block w-100 rounded shadow" alt="Paisaje 5">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Flora Local</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/galeria/6.jpg" class="d-block w-100 rounded shadow" alt="Paisaje 6">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Paisaje Montañoso</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/galeria/7.jpg" class="d-block w-100 rounded shadow" alt="Paisaje 7">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Cascadas</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/galeria/8.jpg" class="d-block w-100 rounded shadow" alt="Paisaje 8">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Atardecer</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/galeria/9.jpg" class="d-block w-100 rounded shadow" alt="Paisaje 9">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Cultura Local</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/galeria/10.jpg" class="d-block w-100 rounded shadow" alt="Paisaje 10">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Fauna</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/galeria/11.jpg" class="d-block w-100 rounded shadow" alt="Paisaje 11">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Vistas Únicas</h5>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
</section>

        <!-- CONTACTO -->
        <section id="contacto" class="py-5">
            <div class="container">
                <div class="text-center mb-4">
                    <h2 class="fw-bold">Contáctanos</h2>
                    <p class="text-muted">Estamos aquí para ayudarte y resolver tus dudas.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="name" placeholder="Tu nombre">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" placeholder="Tu correo electrónico">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Escribe tu mensaje aquí"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="py-4 text-center">
            <p>&copy; 2023 Comunidad La Rinconada. Todos los derechos reservados.</p>
            <p>
                <a href="#">Política de Privacidad</a> | 
                <a href="#">Términos y Condiciones</a>
            </p>
        </footer>

        <!-- Bootstrap JS -->
        <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>
