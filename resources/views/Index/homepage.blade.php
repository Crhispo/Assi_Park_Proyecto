<!DOCTYPE html>
<html>

<head>
    <title>Homepage</title>
  
    <link rel="stylesheet" href="{{ asset('css/Styles_index.css') }}" defer">
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header class="hero">
        <nav class="nav__hero">
            <div class="container nav__container">
                <div class="logo">
                   
                    <img src="{{ asset('Img/LOGO_FINAL_ASSIPARK.png') }}" class="Image-logo">
                </div>
                <div class="links">
                    <a href="#" class="link">Inicio</a>
                    <a href="#" class="link">Servicios</a>
                    <a href="#" class="link">Nosotros</a>
                    <a href="{{ route('login')}}" class="link  ingreso link--active" id="ingreso">Ingreso</a>
                    
                </div>

            </div>


        </nav>
        <div> <br> <br> <br></div>
        <section class="container hero__main">
            <div class="hero__textos">
                <h1 class="title--active">Parqueaderos <br> de Suba</h1>
                <p class="copy"><span class="copy__active">El mejor </span>sistema de informacion para <br>la administración
                    y control de <br>Parqueaderos de los conjuntos residenciales en Suba.</p>
                <br>
                <!-- <a href="# " class="cta">Ver mas</a> -->
            </div>
            <img src="{{ asset('Img/PicsArt_07-19-08.08.09.png') }}" class="mockup animation_mockup ">


        </section>
    </header>
    <main>
        <section class="services">
            <div class="container">
                <h2 class="subtitle">Nuestros Servicios</h2>
                <p class="copy__section">
                    Las mejores funciones para el manejo de los parqueaderos
                </p>

                <article class="container-cards">
                    <div class="card">
                        <img src="{{ asset('Img/nomas-de-parqueaderos-de-visitantes.jpg') }}" class="card__img">
                        <div class="cards__text">
                            <p class="card__list"> Lorem ipsum dolor </p>
                            <h3 class="card__title">sit amet consectetur  </h3>
                            <p class="cars__copy "> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum
                                eligendi enim excepturi, optio sint a quia ipsa adipisci sed fugiat molestiae odio
                                architecto voluptatibus voluptates consequatur quaerat qui iste autem.</p>
                            <a href="#" class="card__button">adipisicing elit. </a>
                        </div>
                        

                    </div>

                    <div class="card">
                        <img src="{{ asset('Img/nomas-de-parqueaderos-de-visitantes.jpg') }}" class="card__img">
                        <div class="cards__text">
                            <p class="card__list"> Lorem ipsum dolor </p>
                            <h3 class="card__title">sit amet consectetur  </h3>
                            <p class="cars__copy "> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum
                                eligendi enim excepturi, optio sint a quia ipsa adipisci sed fugiat molestiae odio
                                architecto voluptatibus voluptates consequatur quaerat qui iste autem.</p>
                            <a href="#" class="card__button">adipisicing elit. </a>
                        </div>

                    </div>

                    <div class="card">
                        <img src="{{ asset('Img/nomas-de-parqueaderos-de-visitantes.jpg') }}" class="card__img">
                        <div class="cards__text">
                            <p class="card__list"> Lorem ipsum dolor </p>
                            <h3 class="card__title">sit amet consectetur  </h3>
                            <p class="cars__copy "> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum
                                eligendi enim excepturi, optio sint a quia ipsa adipisci sed fugiat molestiae odio
                                architecto voluptatibus voluptates consequatur quaerat qui iste autem.</p>
                            <a href="#" class="card__button">adipisicing elit. </a>

                    </div>

                </article>

            </div>

        </section>

        <section class="projects container ">
            <h2 class="subtitle">Lorem ipsum dolor</h2>
            <p class="copy__section">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            </p>

            <article class="container-bg">
                <div class="card">

                    <div class="cards__text">
                        <p class="card__date"> 28 julio 2021</p>
                        <h3 class="card__title"> sit amet consectetur </h3>
                        <p class="cars__copy "> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum
                            eligendi enim excepturi.</p>
                            <br>
                        <a href="#" class="card__button">adipisicing elit.</a>
                    </div>
                </div>
                <div class="background">
                    <img src="{{ asset('Img/parking_IMG01.jpg') }}"  class="background__img">
                    

                    <div class="background__text">
                        <h3 class="background__title">sit amet consectetur</h3>
                        <p class="background__copy">optio sint a quia ipsa adipisci sed fugiat molestiae odio</p>

                    </div>


                </div>

                <div class="card">

                    <div class="cards__text">
                        <p class="card__date"> 21 julio 2021</p>
                        <h3 class="card__title"> sit amet consectetur </h3>
                        <p class="cars__copy ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum
                            eligendi enim excepturi.</p>
                            <br>
                        <a href="#" class="card__button">sit amet consectetur</a>
                    </div>
                </div>
                <div class="background">
                    <img src="{{ asset('Img/parking_IMG01.jpg') }}"  class="background__img">

                    <div class="background__text">
                        <h3 class="background__title">sit amet consectetur</h3>
                        <p class="background__copy">optio sint a quia ipsa adipisci sed fugiat molestiae odio</p>

                    </div>


                </div>
            </article>



        </section>

        <section class="testimony">
            <div class="container">
                <h2 class="subtitle">sit amet consectetur</h2>
                <p class="copy__section">optio sint a quia ipsa adipisci sed</p>
                <div class="testimony-container">
                    <div class="testimony__card">
                        <img src= "{{ asset('Img/Uso-de-parqueaderos-de-visitantes-en-propiedad-horizontal.jpg') }}" class="testimony__img">
                        
                        <div class="testimony__copy">
                            <i class='bx bxl-google testimony__logo'></i>
                            <div class="testimony__info">
                                <h3 class="testimony__name">sint a quia ipsa</h3>
                                <p class="testimony__position">sint a quia ipsa adipisci sed fugiat molestiae</p>
                            </div>

                        </div>

                    </div>
                    <div class="testimony__card">

                        <img src="{{ asset('Img/Uso-de-parqueaderos-de-visitantes-en-propiedad-horizontal.jpg') }}"  class="testimony__img">
                        <div class="testimony__copy">
                            <i class='bx bxl-google testimony__logo'></i>
                            <div class="testimony__info">
                                <h3 class="testimony__name">sint a quia ipsa</h3>
                                <p class="testimony__position">sint a quia ipsa adipisci sed fugiat molestiae</p>
                            </div>

                        </div>

                    </div>

                    <div class="testimony__card">
                        <img src="{{ asset('Img/Uso-de-parqueaderos-de-visitantes-en-propiedad-horizontal.jpg') }}"  class="testimony__img">
                        <div class="testimony__copy">
                            <i class='bx bxl-google testimony__logo'></i>
                            <div class="testimony__info">
                                <h3 class="testimony__name">sint a quia ipsa</h3>
                                <p class="testimony__position">sint a quia ipsa adipisci sed fugiat molestiae</p>
                            </div>

                        </div>

                    </div>



                </div>

            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container footer__caption">
            <section class="dowload">
                <h3 class="title__footer">Descarga Nuestra App</h3>
                <div class="download__app">
                    <div class="download__item">
                        <i class='bx bxl-play-store'></i>
                        <h4 class="download__title">Play Store</h4>
                    </div>
                </div>
                <div class="footer__copy">
                    <p class="copyright">PARKING MANAGEMENT &copy;2021 
                        <BR>
                        Todos los derechos reservados</p>
                    <a href="#" class="politica__privacidad politica__privacidad--margin">Politica de Privacidad</a>
                    <a href="#" class="politica__privacidad">Terminos y condiciones</a>
                </div>

            </section>
            <!-- <section class="follow__us"> -->
            <div class="socialmedia">
                <p class="socialmedia__legend">Siguenos en:</p>
                <i class='socialmedia__icon bx bxl-facebook-circle'></i>
                <i class='socialmedia__icon bx bxl-linkedin-square'></i>
                <i class='socialmedia__icon bx bxl-twitter'></i>
                <i class='socialmedia__icon bx bxl-instagram-alt'></i>

            </div>
            <!-- </section> -->


        </div>
        <div class="contact">
            <div class="item__contact">
                <i class='bx bxs-copyright contact__icon'></i>
                <h3 class="contact__title">PARKING MANAGEMENT </h3>
            </div>
            <div class="item__contact">
                <i class='bx bx-mail-send contact__icon'></i>
                <h3 class="contact__title">ParkingManagment@gmail.com </h3>
            </div>
            <div class="item__contact">
                <i class='bx bx-mail-send contact__icon'></i>
                <h3 class="contact__title"> 315300000 </h3>
                <h3 class="contact__title"> 3919592 </h3>
            </div>
            <div class="item__contact">
                <i class='bx bxs-chat contact__icon'></i>
                <h3 class="contact__title">Contatanos ahora </h3>
                <h3 class="contact__title">Developer : Ximena Paez  </h3>
            </div>
        </div>
    </footer>
    <!-- <script src="main.js"></script> -->
</body>

</html>