<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Site</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.1.6/swiper-bundle.css">
    <link rel="stylesheet" href="css/travel.css">
</head>

<body>
    <header class="container">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
            <div class="container">
                <a class="navbar-brand" href="#">Travel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav" style="margin-right: 12rem;">
                        <li class="nav-item  offset-1">
                            <a class="nav-link active-link text-white" href="#">Home</a>
                        </li>
                        <li class="nav-item  offset-1">
                            <a class="nav-link text-white" href="#">About</a>
                        </li>
                        <li class="nav-item  offset-1">
                            <a class="nav-link text-white" href="#">Discover</a>
                        </li>
                        <li class="nav-item  offset-1">
                            <a class="nav-link text-white" href="#">Places</a>
                        </li>
                        <li class="nav-item  offset-1">
                            <a class="nav-link text-white" href="#">Mode</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- home bg -->
    <section class="home banner-image w-100 grid" id="home">
        <!-- <div class="row"> -->
        <div class="home-container container text-white">
            <h4>Discover your place</h4>
            <h1 class="display-3" style="font-size: 2.5rem; margin-top:1rem;">Explore The<br />
                <span>Best Beautiful <br> Beaches<span>
            </h1>
            <button class="btn" style="margin-top: 2rem;">Explore</button>
        </div>
        <div class="row container" style="max-height: 172px;">
            <div class="home-social  col-6">
                <a href="https://www.facebook.com/" target="_blank" class="home-social-link">
                    <i class="fa-brands fa-facebook-square"></i>
                </a>
                <a href="https://www.instagram.com/" target="_blank" class="home-social-link">
                    <i class="fa-brands fa-instagram-square"></i>
                </a>
                <a href="https://twitter.com/" target="_blank" class="home-social-link">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </div>
            <div class="home-info col-6">
                <div class="row justify-content-center align-items-center">
                    <div class="col-6 text-white">
                        <p style="font-size: 1rem; font-weight: 500;">5 best places to visit</p>
                        <p style="font-size: 0.8rem;">More <span style="margin-left: 4px;"><i class="fa-solid fa-arrow-right"></i></span></p>
                    </div>
                    <div class="col-6">
                        <div class="w-100">

                            <img src="img/travel-img/home2.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- </div> -->

    </section>

    <!-- about -->
    <section class="about container" id="about">
        <div class="row justify-content-center align-items-center">
            <div class="col-6">
                <h3>More Information
                    About The Best Beaches</h3>
                <p>You can find the most beautiful and pleasant places at the best prices with special discounts, you
                    choose the place we will guide you all the way to wait, get your place now.</p>
                <button class="btn">Reserve a place</button>
            </div>
            <div class="col-6">
                <div class="row justify-content-center align-items-center">
                    <div class="col-5">
                        <img src="img/travel-img/about1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-7">
                        <img src="img/travel-img/about2.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- discover -->
    <section class="container discover" id="discover">
        <h2 class="text-center">Discover The Most <br /> Attractive Places</h2>
        <div class="swiper-container container discover-container">
            <div class="swiper-wrapper">
                <div class="discover-card swiper-slide">
                    <img src="img/travel-img/discover1.jpg" alt="" class="img-fluid">
                    <div class="card-info">
                        <div class="title">Bali</div>
                        <div class="description">24 tours available</div>
                    </div>
                </div>
                <div class="discover-card swiper-slide">
                    <img src="img/travel-img/discover2.jpg" alt="" class="img-fluid">
                    <div class="card-info">
                        <div class="title">Havr</div>
                        <div class="description">24 tours available</div>
                    </div>
                </div>
                <div class="discover-card swiper-slide">
                    <img src="img/travel-img/discover3.jpg" alt="" class="img-fluid">
                    <div class="card-info">
                        <div class="title">Miami</div>
                        <div class="description">24 tours available</div>
                    </div>
                </div>
                <div class="discover-card swiper-slide">
                    <img src="img/travel-img/discover4.jpg" alt="" class="img-fluid">
                    <div class="card-info">
                        <div class="title">Hawaiii</div>
                        <div class="description">24 tours available</div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- experience -->

    <section class="container experience" id="experience">
        <div class="top-exeperience text-center">
            <h2>With Our Experience <br> We Will Serve You</h2>
            <div class="count-experience d-flex justify-content-center">
                <div class="box">
                    <h2>70</h2>
                    <p>Year Experience</p>
                </div>
                <div class="box">
                    <h2>75</h2>
                    <p>completed tours</p>
                </div>
                <div class="box">
                    <h2>650+</h2>
                    <p>Tourists Destination</p>
                </div>
            </div>
            <div class="experience-img-grid">
                <div class="experience-overlay img-1">
                    <img src="img/travel-img/experience1.jpg" alt="" class="">
                </div>
                <div class="experience-overlay img-2">
                    <img src="img/travel-img/experience2.jpg" alt="" class="">
                </div>
            </div>
        </div>
    </section>

    <!--  -->
    <section class="places container" id="places">
        <h1 class="text-center">Choose Your Place</h1>
        <div class="places-grid">
            <div class="place-card">
                <img src="img/travel-img/place1.jpg" alt="" class="img-fluid w-100" style="height: 420px;">
                <div class="place-content">
                    <span>
                        <i class="fa-solid fa-star"></i>
                        <span>4,5</span>
                    </span>

                    <div class="info">
                        <p class="title">Bali</p>
                        <p class="name">Indonesia</p>
                    </div>
                    <div class="bottom">
                        <div class="price">$2444</div>
                        <button class="btn"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="place-card">
                <img src="img/travel-img/place1.jpg" alt="" class="img-fluid w-100" style="height: 420px;">
                <div class="place-content">
                    <span>
                        <i class="fa-solid fa-star"></i>
                        <span>4,5</span>
                    </span>

                    <div class="info">
                        <p class="title">Bali</p>
                        <p class="name">Indonesia</p>
                    </div>
                    <div class="bottom">
                        <div class="price">$2444</div>
                        <button class="btn"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="place-card">
                <img src="img/travel-img/place1.jpg" alt="" class="img-fluid w-100" style="height: 420px;">
                <div class="place-content">
                    <span>
                        <i class="fa-solid fa-star"></i>
                        <span>4,5</span>
                    </span>

                    <div class="info">
                        <p class="title">Bali</p>
                        <p class="name">Indonesia</p>
                    </div>
                    <div class="bottom">
                        <div class="price">$2444</div>
                        <button class="btn"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="place-card">
                <img src="img/travel-img/place1.jpg" alt="" class="img-fluid w-100" style="height: 420px;">
                <div class="place-content">
                    <span>
                        <i class="fa-solid fa-star"></i>
                        <span>4,5</span>
                    </span>

                    <div class="info">
                        <p class="title">Bali</p>
                        <p class="name">Indonesia</p>
                    </div>
                    <div class="bottom">
                        <div class="price">$2444</div>
                        <button class="btn"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="place-card">
                <img src="img/travel-img/place1.jpg" alt="" class="img-fluid w-100" style="height: 420px;">
                <div class="place-content">
                    <span>
                        <i class="fa-solid fa-star"></i>
                        <span>4,5</span>
                    </span>

                    <div class="info">
                        <p class="title">Bali</p>
                        <p class="name">Indonesia</p>
                    </div>
                    <div class="bottom">
                        <div class="price">$2444</div>
                        <button class="btn"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>


            <div class="place-card">
                <img src="img/travel-img/place1.jpg" alt="" class="img-fluid w-100" style="height: 420px;">
                <div class="place-content">
                    <span>
                        <i class="fa-solid fa-star"></i>
                        <span>4,5</span>
                    </span>

                    <div class="info">
                        <p class="title">Bali</p>
                        <p class="name">Indonesia</p>
                    </div>
                    <div class="bottom">
                        <div class="price">$2444</div>
                        <button class="btn"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <footer class="container">
        <div class="footer-info">
            <h2>Travel</h2>
            <p>Travel you choose the destination, we offer you the experience.</p>
            <div class="footer-social">
                <a href="https://www.facebook.com/" target="_blank" class="home-social-link">
                    <i class="fa-brands fa-facebook-square"></i>
                </a>
                <a href="https://www.instagram.com/" target="_blank" class="home-social-link">
                    <i class="fa-brands fa-instagram-square"></i>
                </a>
                <a href="https://twitter.com/" target="_blank" class="home-social-link">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </div>
        </div>
        <div class="footer-info">
            <h2>About</h2>
            <ul>
                <li>
                    <a href="">About Us</a>
                </li>
                <li>
                    <a href="">Features</a>
                </li>
                <li>
                    <a href="">New & Blog</a>
                </li>
            </ul>
        </div>
        <div class="footer-info">
            <h2>Company</h2>
            <ul>
                <li>
                    <a href="">Team</a>
                </li>
                <li>
                    <a href="">Plan y Pricing</a>
                </li>
                <li>
                    <a href="">Become a member</a>
                </li>
            </ul>
        </div>
        <div class="footer-info">
            <h2>Support</h2>
            <ul>
                <li>
                    <a href="">FAQs</a>
                </li>
                <li>
                    <a href="">Support Center</a>
                </li>
                <li>
                    <a href="">Contact Us</a>
                </li>
            </ul>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.1.6/swiper-bundle.min.js"></script>
    <script src="js/travel.js"></script>
</body>

</html>