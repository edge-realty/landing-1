@extends('layout.app')

@section('content')
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top">EDGE REALTY</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <img src="img/Venice-Logo.png" style="max-width: 320px;"  alt="Distict one villas Logo">
                <h1 class="text-white font-weight-bold mt-3">Damac Lagoons</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <H4 class="text-white-75 mb-4 mt-4">Pay 20% Down Payment Starting from AED 4.9M</H4>
                <P class="text-white-75 mb-2">Special post handover payment plan</P>
                <P class="text-white-75 mb-5">1, 2, 3 & 4 Bedroom Apartments</P>
                <a class="btn btn-primary btn-xl" href="#about">BOOK A VIEWING</a>
            </div>
        </div>
    </div>
</header>

<!-- About-->
<section class="page-section" id="about">
    <div class="container-fluid px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-dark mt-0">DAMAC Properties - Live the luxury</h2>
                <hr class="divider divider-light" />
                <p class="text-dark-50 mb-4">Venice in DAMAC Lagoons is one of 8 clusters in the exclusive community from the leading developer in the UAE, DAMAC Properties. At the moment the whole community of DAMAC Lagoons is under construction with the anticipated date of handover set to be in October 2024</p>

                <p class="text-dark-75 mb-4">The Venice cluster in DAMAC Lagoons provides a strategic location in Dubai Golf City with easy access to Sheikh Zayed Bin Hamdan Al Nahyan Street, Emirates Road, Jebel Ali – Ali Hibab Road and Hessa Street. The neighbouring districts of the community include Remraam, Tilal Al Ghaf, DAMAC Hills, Studio City, Dubai Investments Park and Jumeirah Golf Estates. Travel time to Al Maktoum International Airport, which is located closer than Dubai International Airport,  takes about a 25-minute drive.</p>
                <p class="text-dark-75 mb-4">The community of DAMAC Lagoons will occupy the same size of territory as the DAMAC Hills community and will have 4 gates, the main one of which will be on Hessa street. The main feature of the project will be a huge artificial lagoon called the Lazy River. The lagoon, which will be in the shape of the letter D, will provide a water park and an entertainment area for all residents to enjoy. Residents of the Venice cluster will also appreciate the various amenities of DAMAC Lagoons such as a floating cinema, yoga hubs, beaches, The Half hub, F&B areas, a water-integrated amphitheater, and much more. In addition, the sand beaches will be located on both sides of the crystal lagoons in the community.</p>
                <a class="btn btn-primary btn-xl" href="#portfolio">Get Started!</a>
            </div>
        </div>
    </div>
</section>




{{-- Carousel --}}
<div id="portfolio">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/amneties/Villa V3-Venice Rear.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/amneties/V-75-Venice rear view_20220512.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/amneties/V55 venice - Front LR.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/amneties/Villa V4-Venice Front.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/amneties/VD1 Front.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/amneties/V-1000 front.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
</div>

{{-- Amenities --}}
<section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">Amneties</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-left">
                <div class="mt-5">
                    <p class="text-muted mb-0"><i class="fa-solid fa-circle-check"></i> Barbeque Area</p>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-0"><i class="fa-solid fa-circle-check"></i> Club house</p>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-0"><i class="fa-solid fa-circle-check"></i> Sauna & Steam Rooms</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-left">
                <div class="mt-5">
                    <p class="text-muted mb-0"><i class="fa-solid fa-circle-check"></i> Cafes & Restaurants</p>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-0"><i class="fa-solid fa-circle-check"></i> Cycling track</p>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-0"><i class="fa-solid fa-circle-check"></i> Swimming Pool</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-left">
                <div class="mt-5">
                    <p class="text-muted mb-0"><i class="fa-solid fa-circle-check"></i> Car Parking</p>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-0"><i class="fa-solid fa-circle-check"></i> Gym</p>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-0"><i class="fa-solid fa-circle-check"></i> Walking Paths </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-left">
                <div class="mt-5">
                    <p class="text-muted mb-0"><i class="fa-solid fa-circle-check"></i> Children's Play Area</p>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-0"><i class="fa-solid fa-circle-check"></i> Private Pool</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <div id="portfolio">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div  class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/map.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
              </div>
        </div>
    </div>
</div> --}}
{{-- 2nd carousel --}}
{{-- <div id="carousel">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/amneties/VRender_1_Water_View.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/amneties/VRender_4_Venice_Carnival" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/amneties/VRender_6_Clubhouse.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/amneties/VRender_3_Glamour_Lifestyle.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/amneties/Villa V4-Venice Rear.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/amneties/V-1000 front.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>


        </div>
    </div>
</div> --}}


<div class="mx-auto">
    <div class="container-fluid p-5 mx-auto ">
        <div class="row mx-auto">
       <div class="card p-0 float-end shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <img src="img/amneties/V-1000 front.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card p-0 shadow mb-4  mx-auto" style="max-width: 40rem;" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <img src="img/amneties/VRender_6_Clubhouse.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card p-0 float-end shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <img src="img/amneties/VRender_1_Water_View.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card p-0  shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <img src="img/amneties/VRender_4_Venice_Carnival.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card p-0 float-end shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <img src="img/amneties/VRender_3_Glamour_Lifestyle.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card p-0  shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <img src="img/amneties/Villa V4-Venice Rear.jpg" class="card-img-top" alt="...">
        </div>
    </div>
    </div>
</div>

<div id="Payment-Plans">
    <div class="container p-5 mb-5">
        <h2 class="text-center mt-0">Payment Plan</h2>
        <hr class="divider" />
        <table class="table table-bordered text-center">
            <thead>
            <tr style="color: #fff; " class="bg-primary">
                <th class="text-center col-lg-4">Installments</th>
                <th class="text-center col-lg-4">Payment</th>
                <th class="text-center col-lg-4">MileStone</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Down Payment</td>
                    <td>20%</td>
                    <td>On Booking</td>
                </tr>
                <tr>
                    <td>Next Installment</td>
                    <td>60%</td>
                    <td>Till completion</td>
                </tr>
                <tr>
                    <td>Last Installment</td>
                    <td>20%</td>
                    <td>On Handover</td>
                </tr>


            </tbody>
        </table>
    </div>
</div>

<div class="mx-auto">
    <div class="container-fluid p-5 mx-auto bg-dark">

        <h2 class="text-center text-white mt-0">Flow Plans</h2>
        <BR>
        <h3 class="text-center text-white mt-0">6 BEDROOM VILLA</h3>
        <hr class="divider" />
        <div class="row mx-auto">
            <img src="img/floor1/img144.jpg" style="max-width: 80rem;" class="card-img-top mx-auto mb-5" alt="...">
            <img src="img/floor1/img148.jpg" style="max-width: 80rem;" class="card-img-top mx-auto mb-5" alt="...">
        </div>
        <div class="row mx-auto">
            <div class="card p-0 float-end shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <img src="img/floor1/img152.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card p-0 shadow mb-4  mx-auto" style="max-width: 40rem;" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <img src="img/floor1/img154.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card p-0 float-end shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <img src="img/floor/img156.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card p-0  shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <img src="img/floor/img158.jpg" class="card-img-top" alt="...">
            </div>
        </div>

        <BR>
        <div class="pt-5 ">
            <h3 class="text-center text-white mt-5">7 BEDROOM VILLA</h3>
            <hr class="divider" />
            <div class="row mx-auto">
                <img src="img/floor2/img162.jpg" style="max-width: 80rem;" class="card-img-top mx-auto mb-5" alt="..." data-aos="fade-up" data-aos-duration="2000">
                <img src="img/floor2/img166.jpg" style="max-width: 80rem;" class="card-img-top mx-auto mb-5" alt="..." data-aos="fade-down" data-aos-duration="2000">
            </div>
            <div class="row mx-auto">
                <div class="card p-0 float-end shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="img/floor2/img170.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card p-0  shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="img/floor2/img172.jpg" class="card-img-top" alt="...">
                </div>
                <div  class="card p-0 float-end shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="img/floor2/img174.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card p-0  shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="img/floor2/img176.jpg" class="card-img-top" alt="...">
                </div>
            </div>
        </div>

        <BR>
        <div class="pt-5 ">
            <h3 class="text-center text-white mt-5">6 BEDROOM VILLA</h3>
            <hr class="divider" />
            <div class="row mx-auto">
                <img src="img/floor3/img180.jpg" style="max-width: 80rem;" class="card-img-top mx-auto mb-5" alt="..." data-aos="fade-up" data-aos-duration="2000">
                <img src="img/floor3/img184.jpg" style="max-width: 80rem;" class="card-img-top mx-auto mb-5" alt="..." data-aos="fade-down" data-aos-duration="2000">
            </div>
            <div class="row mx-auto">
                <div class="card p-0 float-end shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="img/floor3/img188.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card p-0  shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="img/floor3/img190.jpg" class="card-img-top" alt="...">
                </div>
                <div  class="card p-0 float-end shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="img/floor3/img192.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card p-0  shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="img/floor3/img194.jpg" class="card-img-top" alt="...">
                </div>
            </div>
        </div>

        <BR>
        <div class="pt-5 ">
            <h3 class="text-center text-white mt-5">7 BEDROOM VILLA</h3>
            <hr class="divider" />
            <div class="row mx-auto">
                <img src="img/floor4/img198.jpg" style="max-width: 80rem;" class="card-img-top mx-auto mb-5" alt="..." data-aos="fade-up" data-aos-duration="2000">
                <img src="img/floor4/img202.jpg" style="max-width: 80rem;" class="card-img-top mx-auto mb-5" alt="..." data-aos="fade-down" data-aos-duration="2000">
            </div>
            <div class="row mx-auto">
                <div class="card p-0 float-end shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="img/floor4/img206.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card p-0  shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="img/floor4/img208.jpg" class="card-img-top" alt="...">
                </div>
                <div  class="card p-0 float-end shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="img/floor4/img210.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card p-0  shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="img/floor4/img212.jpg" class="card-img-top" alt="...">
                </div>
            </div>
        </div>


        <BR>
        <div class="pt-5 ">
            <h3 class="text-center text-white mt-5">6 BEDROOM VILLA</h3>
            <hr class="divider" />
            <div class="row mx-auto">
                <img src="img/floor5/img216.jpg" style="max-width: 80rem;" class="card-img-top mx-auto mb-5" alt="..." data-aos="fade-up" data-aos-duration="2000">
            </div>
            <div class="row mx-auto">
                <div class="card p-0 float-end shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="img/floor5/img220.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card p-0  shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="img/floor5/img222.jpg" class="card-img-top" alt="...">
                </div>
            </div>
        </div>



        <BR>
            <div class="pt-5 ">
                <h3 class="text-center text-white mt-5">6 BEDROOM VILLA</h3>
                <hr class="divider" />
                <div class="row mx-auto">
                    <img src="img/floor6/img226.jpg" style="max-width: 80rem;" class="card-img-top mx-auto mb-5" alt="..." data-aos="fade-up" data-aos-duration="2000">
                </div>
                <div class="row mx-auto">
                    <div class="card p-0 float-end shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <img src="img/floor6/img230.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card p-0  shadow mb-4 mx-auto" style="max-width: 40rem;" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <img src="img/floor6/img232.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>

    </div>
</div>

<!-- Call to action-->
<section class="page-section text-dark">
    <div class="container-fluid px-4 px-lg-5 text-center">
        <h2 class="mb-4">Nearby Places</h2>
        <hr class="divider" />

        <div class="row ">
            <div class="col-lg-2 col-md-2 text-left mx-auto">
                <div class="mt-5">
                    <p class="text-dark mb-0"><i class="fa-solid fa-clock"></i> 15 Minutes - Al Barsha</p>
                </div>
                <div class="mt-4">
                    <p class="text-dark mb-0"><i class="fa-solid fa-clock"></i> 25 Minutes - Palm Jumeirs</p>
                </div>
                <div class="mt-4">
                    <p class="text-dark mb-0"><i class="fa-solid fa-clock"></i> 30 Minutes - Downtown Dubai</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-left mx-auto">
                <div class="mt-5">
                    <p class="text-dark mb-0"><i class="fa-solid fa-clock"></i> 25 Minutes - Dubai Marina</p>
                </div>
                <div class="mt-4">
                    <p class="text-dark mb-0"><i class="fa-solid fa-clock"></i> 27 Minutes - Business Bayk</p>
                </div>
                <div class="mt-4">
                    <p class="text-dark mb-0"><i class="fa-solid fa-clock"></i> 35 Minuntes - International Airport</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Luxury Appointment-->
<section class="page-section text-dark bg-light">
    <div class="container-fluid px-4 px-lg-5 ">
        <h2 class="mb-4 text-center">LUXURY BY APPOINTMENT</h2>
        <hr class="divider" />
        <H4 class="text-center">Contact us at any of our offices or visit damacproperties.com</H4>
        <div class="row text-justify text-dark">
            <div class="col-lg-2 col-md-2 text-left mx-auto">
                <div class="mt-5">
                    <p class=" mb-0"><b>UNITED ARAB EMIRATES</b></p>
                    <p class=" mb-0">Dubai</p>
                    <p class=" mb-0">Tel: 800-DAMAC (800-32622)</p>
                    <p class=" mb-0">Email: dubai@damacgroup.com</p>


                </div>
                <div class="mt-4">
                    <p class=" mb-0">Park Towers - Sales Centre,</p>
                    <p class=" mb-0">Dubai International Financial Centre</p>
                </div>
                <div class="mt-4">
                    <p class=" mb-0">Aykon City - Sales Centre,</p>
                    <p class=" mb-0">Floor 63, Sheikh Zayed Road</p>
                </div>
                <div class="mt-4">
                    <p class=" mb-0">DAMAC Hills - Sales Centre,</p>
                    <p class=" mb-0">Sheikh Zayed Bin Hamdaan Al Nahyan Street</p>
                </div>
                <div class="mt-4">
                    <p class=" mb-0">DAMAC Hills - Sales Centre,</p>
                    <p class=" mb-0">Bellavista, Carson Building</p>
                </div>
                <div class="mt-4">
                    <p class=" mb-0">DAMAC Hills - Sales Centre,</p>
                    <p class=" mb-0">Golf Veduta, Townhouse TH2</p>
                </div>
                <div class="mt-4">
                    <p class=" mb-0">DAMAC Hills 2 - Sales Centre,</p>
                    <p class=" mb-0">Amazonia Cluster, Villa 333</p>
                </div>
                <div class="mt-4">
                    <p class=" mb-0">DAMAC Hills 2 - Sales Centre,</p>
                    <p class=" mb-0">Water Town</p>
                </div>
            </div>



            <div class="col-lg-3 col-md-6 text-left mx-auto">
                <div class="mt-5">
                    <p class=" mb-0"><b>QATAR</b></p>
                    <p class=" mb-0">Building 90, New Solta Area</p>
                    <p class=" mb-0">Ali bin Abi Talib Street</p>
                    <p class=" mb-0">Next to Omar bin Al Khattab Health Centre</p>
                    <p class=" mb-0">Tel: +974 44 666 986</p>
                    <p class=" mb-0">Tel: +974 44 554 576</p>
                    <p class=" mb-0">Email: doha@damacgroup.com</p>
                </div>


                <div class="mt-4">
                    <p class=" mb-0"><b>KINGDOM OF SAUDI ARABIA</b></p>
                    <p class=" mb-0">Riyadh,</p>
                    <p class=" mb-0">DAMAC Towers Riyadh</p>
                    <p class=" mb-0">South Tower</p>
                    <p class=" mb-0">Olaya District</p>
                    <p class=" mb-0">King Fahd Road</p>
                    <p class=" mb-0">PO Box 102460</p>
                    <p class=" mb-0">Tel: +966 11 835 0300</p>
                    <p class=" mb-0">E-mail: ksa@damacgroup.com</p>
                </div>


                <div class="mt-4">
                    <p class=" mb-0"><b>TURKEY</b></p>
                    <p class=" mb-0">Levazim, Mah. Koru Sk. Zorlu Centre</p>
                    <p class=" mb-0">No. 02 Ic Kapi No. 347 Besiktas/Istambul</p>
                    <p class=" mb-0">Turkey</p>
                    <p class=" mb-0">Tel: +90 212 892 0327</p>
                    <p class=" mb-0">Fax: +90 212 890 7184</p>
                    <p class=" mb-0">E-mail: turkey.office@damacgroup.com</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-left mx-auto">
                <div class="mt-5">
                    <p class=" mb-0"><b>LEBANON</b></p>
                    <p class=" mb-0">Unit 1801, 18th Floor DAMAC Tower</p>
                    <p class=" mb-0">Omar Daouk Street</p>
                    <p class=" mb-0">Mina El Hosn, Beirut Central District</p>
                    <p class=" mb-0">Tel: +961 81 647 200</p>
                    <p class=" mb-0">Email: beirut@damacgroup.com</p>
                </div>


                <div class="mt-5">
                    <p class=" mb-0"><b>JORDAN</b></p>
                    <p class=" mb-0">Al Isithmar Street</p>
                    <p class=" mb-0">Abdail Project</p>
                    <p class=" mb-0">Amman Opposite Abdali Mall gate #1</p>
                    <p class=" mb-0">Tel: +962 6 510 7000</p>
                    <p class=" mb-0">Tel: +962 6 565 7876</p>
                    <p class=" mb-0">Email: amman@damacgroup.com</p>
                </div>


                <div class="mt-5">
                    <p class=" mb-0"><b>UNITED KINGDOM</b></p>
                    <p class=" mb-0">4th Floor, 100 Brompton Road</p>
                    <p class=" mb-0">Opposite Harrods</p>
                    <p class=" mb-0">Knightsbridge, London</p>
                    <p class=" mb-0">SW3 1ER, United Kingdom</p>
                    <p class=" mb-0">Tel: +44 (0) 207 590 8050</p>
                    <p class=" mb-0">Email: sales@damactowe.co.uk</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Contact-->
<section class="page-section" id="contact" style="background: url(img/footer2.jpg) no-repeat center center fixed">
    <div class="container px-4 px-lg-5 bg-light p-5" style="opacity: .9">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Let's Get In Touch!</h2>
                <hr class="divider" />
                <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="name">Full name</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                        <label for="email">Email address</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                        <label for="phone">Phone number</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Message</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="bg-dark py-5" >
    <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 Edge Realty. All rights reserved.</div></div>
</footer>
@endsection
