<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Hotel - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php
    require ('../css/csslink.php');
    ?>
    <style>
        .availabilty-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width:575px) {
            .availabilty-form {
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>
</head>

<body class="bg-light">

    <?php
    require ('header.php');
    ?>

    <!-- Carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-carousel">
            <div class="swiper-wrapper">
                <?php
                
                $res = selectAll($con,'carousel');
                while ($data = mysqli_fetch_assoc($res)) {
                    $path = Carousel_IMG_PATH;
                    echo <<<data
                        <div class="swiper-slide">
                        <img src="$path$data[image]" class="w-100 d-block" />
                        </div>
                        data;
                }

                ?>
            </div>
        </div>
    </div>

    <!-- check availabilty form-->
    <div class="container availabilty-form mt-4">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form action="#" method="post">
                    <div class="row align-items-end ">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-in</label>
                            <input type="date" class="form-control" name="#">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-out</label>
                            <input type="date" class="form-control" name="#">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select">
                                <option selected>Please select number of Adult</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Children</label>
                            <select class="form-select">
                                <option selected>Please select number of Children</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Our Rooms -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="../images/rooms/1.jpg" class="card-img-top" alt="Image not found">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                3 sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                WIFI
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Television
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                5 Adults
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                4 Children
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="../images/rooms/1.jpg" class="card-img-top" alt="Image not found">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                3 sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                WIFI
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Television
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                5 Adults
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                4 Children
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="../images/rooms/1.jpg" class="card-img-top" alt="Image not found">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                3 sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                WIFI
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Television
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                5 Adults
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                4 Children
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold">More Rooms >>></a>
            </div>
        </div>
    </div>

    <!-- Our Facilities -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR Facilities</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="../images/features/wifi.svg" alt="Image not found" width="80px">
                <h5 class="mt-3">WIFI</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="../images/features/wifi.svg" alt="Image not found" width="80px">
                <h5 class="mt-3"></h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="../images/features/wifi.svg" alt="Image not found" width="80px">
                <h5 class="mt-3"></h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="../images/features/wifi.svg" alt="Image not found" width="80px">
                <h5 class="mt-3"></h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="../images/features/wifi.svg" alt="Image not found" width="80px">
                <h5 class="mt-3"></h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold">More Facilities >>></a>
            </div>
        </div>
    </div>
    <!-- testimonials -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-light p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="../images/features/star.png" alt="" width="30px">
                        <h6 class="m-0 ms-2">Random user 1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, aliquam? Dolore omnis, ut
                        similique officia repellendus illo provident repellat nobis?
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-light p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="../images/features/star.png" alt="" width="30px">
                        <h6 class="m-0 ms-2">Random user 2</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, aliquam? Dolore omnis, ut
                        similique officia repellendus illo provident repellat nobis?
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-light p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="../images/features/star.png" alt="" width="30px">
                        <h6 class="m-0 ms-2">Random user 3</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, aliquam? Dolore omnis, ut
                        similique officia repellendus illo provident repellat nobis?
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-light p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="../images/features/star.png" alt="" width="30px">
                        <h6 class="m-0 ms-2">Random user 4</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, aliquam? Dolore omnis, ut
                        similique officia repellendus illo provident repellat nobis?
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold">Know More >>></a>
        </div>
    </div>

    <!-- Reach us -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100" height="450" src="<?php echo $contact_r['iframe'] ?>" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call us</h5>
                    <a href="tel: +919664647582" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                            class="bi bi-telephone-fill"></i>+<?php echo $contact_r['pn1'] ?></a>
                    <br>
                    <?php
                    if ($contact_r['pn2'] != '') {
                        echo <<<data
                            <a href="tel: +$contact_r[pn2]" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                            class="bi bi-telephone-fill"></i>+$contact_r[pn2]</a>
                            <br>
                            data;
                    }
                    if ($contact_r['pn3'] != '') {
                        echo <<<data
                            <a href="tel: +$contact_r[pn3]" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                              class="bi bi-telephone-fill"></i>+$contact_r[pn3]</a>
                            data;
                    }
                    ?>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: <?php echo $contact_r['email'] ?>"
                        class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill me-2"></i><?php echo $contact_r['email'] ?>
                    </a>
                </div>
                
                    <?php
                    $hasSocialLinks = false;

                    if ($contact_r['fb'] != '') {
                        $hasSocialLinks = true;
                    }
                    if ($contact_r['insta'] != '') {
                        $hasSocialLinks = true;
                    }                    
                    if ($contact_r['tw'] != '') {
                        $hasSocialLinks = true;
                    }
                    
                    if ($hasSocialLinks) {
                        echo '<div class="bg-white p-4 rounded mb-4">';
                        echo "<h5>Follow us</h5>";       
                        if ($contact_r['fb'] != '') {                            
                            echo <<<data
                                    <a href="$contact_r[fb]" class="d-inline-block mb-3 ">
                                        <span class="badge bg-light text-dark fs-6 p-2">
                                            <i class="bi bi-facebook me-1"></i>Facebook</span>
                                    </a>
                                    <br>
                                data;
                        }                 
                        if ($contact_r['insta'] != '') {                        
                            echo <<<data
                                    <a href="$contact_r[insta]" class="d-inline-block mb-3">
                                        <span class="badge bg-light text-dark fs-6 p-2">
                                        <i class="bi bi-instagram me-1"></i>Instagram</span>
                                    </a>
                                    <br>
                                data;
                        }
                        if ($contact_r['tw'] != '') {                       
                            echo <<<data
                                    <a href="$contact_r[tw]" class="d-inline-block">
                                        <span class="badge bg-light text-dark fs-6 p-2">
                                        <i class="bi bi-twitter-x me-1"></i>Twitter</span>
                                     </a>
                                     <br>
                                 data;
                        }
                        echo '</div>';
                    }
                    ?>
            </div>
        </div>
    </div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-carousel", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false
            }
        });

        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
            breakPoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
    <?php
    require ('footer.php');
    ?>
</body>

</html>