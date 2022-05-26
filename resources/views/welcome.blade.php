<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AllenCarlosDev website</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('img/icon-Allenpage.png') }}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/Allenpage1.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">
</head>

<body>
    <div id="loader" class="loader-background">
        <div class="lds-ripple loader">
            <div></div>
            <div></div>
        </div>
        <h2>Please wait</h2>
    </div>

    <header>
        <nav>
            <input type="checkbox" id="check">
            <div class="background-menu">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>
            </div>
            <ul class="nav-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <section class="header-text">
            <h1> Share your Photo Edits </h1>
            <h2>AllenCarlosDesigner</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #3e0796;"></path>
            </svg></div>
    </header>

    <main>
        <section id="home" class="container home">
            <h2 class="title"> Our design techniques</h2>
            <div class="container-home">
                <img src="{{ asset('img/ourtecniquesallencarlos.svg') }}" alt="" class="image-our-tecniques fade_up">
                <div class="content-texts fade_right">
                    <h3 class=""><span>1</span> The best design techniques </h3>
                    <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus
                        veritatis minima ipsam. Accusantium eum, debitis vero laudantium officiis ut eligendi odio,
                        corporis dolores dignissimos, repudiandae dolorum itaque facere magnam. Sapiente!</p>
                    <h3 class=""><span>2</span> The largest community of designers </h3>
                    <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus
                        veritatis minima ipsam. Accusantium eum, debitis vero laudantium officiis ut eligendi odio,
                        corporis dolores dignissimos, repudiandae dolorum itaque facere magnam. Sapiente!</p>
                    <h3 class=""><span>3</span> Monetize your designs </h3>
                    <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus
                        veritatis minima ipsam. Accusantium eum, debitis vero laudantium officiis ut eligendi odio,
                        corporis dolores dignissimos, repudiandae dolorum itaque facere magnam. Sapiente!</p>
                </div>
            </div>
        </section>
        <section id="gallery" class="gallery-of-designs">
            <div class="container">
                <h2 class="title">Gallery of Designs</h2>
                <div class="gallery">
                    <div class="images-gallery">
                        <img class="fade_down" src="{{ asset('img/gallery1.svg') }}" alt="">
                        <div class="hover-gallery">
                            <h3> Image 1</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, qui.</p>
                        </div>
                    </div>
                    <div class="images-gallery">
                        <img class="fade_down" src="{{ asset('img/gallery2.svg') }}" alt="">
                        <div class="hover-gallery">
                            <h3> Image 2</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, qui.</p>
                        </div>
                    </div>
                    <div class="images-gallery">
                        <img class="fade_down" src="{{ asset('img/gallery3.svg') }}" alt="">
                        <div class="hover-gallery">
                            <h3> Image 3</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, qui.</p>
                        </div>
                    </div>
                    <div class="images-gallery">
                        <img class="fade_down" src="{{ asset('img/gallery4.svg') }}" alt="">
                        <div class="hover-gallery">
                            <h3> Image 4</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, qui.</p>
                        </div>
                    </div>
                    <div class="images-gallery">
                        <img class="fade_down" src="{{ asset('img/gallery5.svg') }}" alt="">
                        <div class="hover-gallery">
                            <h3> Image 5</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, qui.</p>
                        </div>
                    </div>
                    <div class="images-gallery">
                        <img class="fade_down" src="{{ asset('img/gallery6.svg') }}" alt="">
                        <div class="hover-gallery">
                            <h3> Image 6</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, qui.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="designer container">
            <h2 class="title"> Designer</h2>
            <div class="cards">
                <div class="card fade_down">
                    <img class="fade_left" src="{{ asset('img/designer1.svg') }}" alt="">
                    <div class="content-text-card fade_up">
                        <h4>Carlos Allen</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium facilis sapiente quam deleniti ullam optio laboriosam laborum beatae neque exercitationem?</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="services">
            <h2 class="title">Services</h2>
            <div class="service-container fade_down">
                <div class="service-individual">
                    <img src="{{ asset('img/imagesedition.svg') }}" alt="">
                    <h3>Image Edition</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, ipsam.</p>
                </div>
                <div class="service-individual">
                    <img src="{{ asset('img/videosedition.svg') }}" alt="">
                    <h3>Video Edition</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, ipsam.</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="wave-footer" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 271.49,-49.98 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #4710a0;"></path></svg></div>
        <div id="contact" class="container-footer">
            <div class="content-footer">
                <ul class="socials">
                    <li><a href="https://github.com/allencarlosdev" target="_blank"><i class="fa fa-github"></i></a></li>
                    <li><a href="https://stackoverflow.com/users/16209550/carlos-allen" target="_blank"><i class="fa fa-stack-overflow"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/allencarlosdev/" target="_blank"><i
                                class="fa fa-linkedin"></i></a></li>
                    <li class="li-icon"><a href="https://www.sololearn.com/profile/20725585" target="_blank"><i class="fab fa-stripe-s"></i></a></li>
                </ul>
                <h6>Email - Allencarlosdev@gmail.com</h6>
            </div>
            <h4 class="copyright"> &copy; All copyrights - AllenCarlosdev 2022 </h4>
        </div>
    </footer>
    <button id="btn_scrolltop" class="btn-scrolltop">
        <i class="fas fa-chevron-up"></i>
    </button>
    <!-- icon awesome-->
    <script src="https://kit.fontawesome.com/8d2cede7ac.js" crossorigin="anonymous"></script>
    <!-- js script-->
    <script type="text/javascript" src="{{ asset('js/up_button.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/animation_fade.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/preloader.js') }}"></script>
</body>

</html>
