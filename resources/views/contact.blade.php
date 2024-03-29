@extends('master')


@section('content')

        <!-- Hero -->
        <div class="section section-header pb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 text-center">
                        <h1 class="display-2 mb-4">Entrez en contact avec nous.</h1>
                        <p class="lead mb-5">Utilisz notre système de filtrage pour pouvoir localiser n'importe quel candidat qui vous interesse etant donné qu'il se soit enregistré volontié dans notre système.</p>
                        <a class="btn btn-primary" href="./contact.html"><span class="fas fa-book-reader mr-2"></span>Our works</a></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!--Breadcrumb-->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-gray breadcrumb-transparent my-2">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                        <!--End of Breadcrumb-->
                    </div>
                </div>
            </div>
        </div>

        <div class="container px-md-10 px-7 py-4">
            <div class="row" style="height: 5px;">
                <div class="col-4" style="background-color: #ffc800;"></div>
                <div class="col-4" style="background-color: #1893ff;"></div>
                <div class="col-4" style="background: red;"></div>
            </div>
        </div>

        <!-- Section -->
        <section class="section section-lg pt-0">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12 col-lg-12 mb-5 mt-5">
                        <!-- Contact Card -->
                        <div class="card bg-primary shadow-soft border-light p-2 p-md-3 p-lg-5">
                            <div class="card-header">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="shadow-inset p-4 mb-5 rounded">
                                            <iframe class="map rounded" id="gmap_canvas" src="https://maps.google.com/maps?q=san%20francisco&t=&z=8&ie=UTF8&iwloc=&output=embed"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-8 text-center mb-5">
                                        <h1 class="display-2 mb-3">Get in touch today</h1>
                                        <p class="lead">Have a new project in mind? Need help with an ongoing one? Drop us a line about your project needs, we answer same day.</p>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-4 col-lg-4 text-center">
                                        <!-- Visit Box -->
                                        <div class="icon-box mb-4">
                                            <div class="icon icon-shape shadow-soft border-light rounded-circle mb-4">
                                                <span class="fas fa-map-marker-alt"></span>
                                            </div>
                                            <h2 class="h5 icon-box-title">Visit us</h2>
                                            <span>
                                                27 Silicon Valley
                                                <br>
                                                USA, California
                                            </span>
                                        </div>
                                        <!-- End of Visit Box -->
                                    </div>
                                    <div class="col-md-4 col-lg-4 text-center">
                                        <!-- Call Box -->
                                        <div class="icon-box mb-4">
                                            <div class="icon icon-shape shadow-soft border-light rounded-circle mb-4">
                                                <span class="fas fa-headphones-alt"></span>
                                            </div>
                                            <h2 class="h5 icon-box-title">Call</h2>
                                            <span>+3912345678</span>
                                            <div class="text-small text-gray">
                                                Mon - Fri, 8am - 4pm
                                            </div>
                                        </div>
                                        <!-- End of Call Box -->
                                    </div>
                                    <div class="col-md-4 col-lg-4 text-center">
                                        <!-- Email Box -->
                                        <div class="icon-box mb-4">
                                            <div class="icon icon-shape shadow-soft border-light rounded-circle mb-4">
                                                <span class="far fa-paper-plane"></span>
                                            </div>
                                            <h2 class="h5 icon-box-title">Email</h2>
                                            <a href="#">example@company.com</a>
                                            <br><a href="#">name@company.com</a>
                                        </div>
                                        <!-- End of Email Box -->
                                    </div>
                                </div>
                            </div>
                            <form class="col-12 col-md-8 mx-auto">
                                <!-- Form -->
                                <div class="form-group">
                                    <label for="nameInputIcon2">Your Name</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="far fa-user-circle"></span></span>
                                        </div>
                                        <input class="form-control" id="nameInputIcon2" placeholder="e.g. Bonnie Green" type="text" aria-label="contact name input">
                                    </div>
                                </div>
                                <!-- Form -->
                                <div class="form-group">
                                    <label for="emailInputIcon2">Your Email</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="far fa-envelope"></span></span>
                                        </div>
                                        <input class="form-control" id="emailInputIcon2" placeholder="example@company.com" type="email" aria-label="contact email input">
                                    </div>
                                </div>
                                <!-- Form -->
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea2">Your Email</label>
                                    <textarea class="form-control" placeholder="Enter your message..." id="exampleFormControlTextarea2" rows="4"></textarea>
                                </div>
                                <!-- End of Form -->
                            </form>
                            <div class="card-footer px-0 mx-auto">
                                <button type="submit" class="btn btn-primary">Send message</button>
                            </div>
                        </div>
                        <!-- End of Contact Card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End of section -->

        <div class="section section-md pt-0 bg-primary">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row mt-4 mt-lg-6 justify-content-center">
                            <div class="col-md-8">
                                <div class="news-carousel owl-carousel owl-theme owl-loaded owl-drag">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(-2960px, 0px, 0px); transition: all 0.25s ease 0s; width: 5180px;">
                                            <div class="owl-item cloned" style="width: 730px; margin-right: 10px;">
                                                <div class="item text-center">
                                                    <div class="mb-4">
                                                        <img class="m-auto shadow-inset p-2 border border-light rounded-circle avatar-sm" src="../../assets/img/team/profile-picture-3.jpg" alt="Bonnie avatar">
                                                    </div>
                                                    <span class="d-block my-3">
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                    </span>
                                                    <blockquote class="blockquote">Themesberg makes beautiful products to help people with creative ideas succeed. Our company empowers millions of people.
                                                        <footer class="h5 mt-3 text-dark">Bonnie Green</footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 730px; margin-right: 10px;">
                                                <div class="item text-center">
                                                    <div class="mb-4">
                                                        <img class="m-auto shadow-inset p-2 border border-light rounded-circle avatar-sm" src="../../assets/img/team/profile-picture-2.jpg" alt="Joseph avatar">
                                                    </div>
                                                    <span class="d-block my-3">
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                    </span>
                                                    <blockquote class="blockquote">Themesberg makes beautiful products to help people with creative ideas succeed. Our company empowers millions of people.
                                                        <footer class="h5 mt-3 text-dark">Joseph Garth</footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 730px; margin-right: 10px;">
                                                <div class="item text-center">
                                                    <div class="mb-4">
                                                        <img class="m-auto shadow-inset p-2 border border-light rounded-circle avatar-sm" src="../../assets/img/team/profile-picture-1.jpg" alt="Jose avatar">
                                                    </div>
                                                    <span class="d-block my-3">
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star far fa-star text-gray"></span>
                                                    </span>
                                                    <blockquote class="blockquote">Themesberg makes beautiful products to help people with creative ideas succeed. Our company empowers millions of people.
                                                        <footer class="h5 mt-3 text-dark">Jose Leos</footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 730px; margin-right: 10px;">
                                                <div class="item text-center">
                                                    <div class="mb-4">
                                                        <img class="m-auto shadow-inset p-2 border border-light rounded-circle avatar-sm" src="../../assets/img/team/profile-picture-3.jpg" alt="Bonnie avatar">
                                                    </div>
                                                    <span class="d-block my-3">
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                    </span>
                                                    <blockquote class="blockquote">Themesberg makes beautiful products to help people with creative ideas succeed. Our company empowers millions of people.
                                                        <footer class="h5 mt-3 text-dark">Bonnie Green</footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 730px; margin-right: 10px;">
                                                <div class="item text-center">
                                                    <div class="mb-4">
                                                        <img class="m-auto shadow-inset p-2 border border-light rounded-circle avatar-sm" src="../../assets/img/team/profile-picture-2.jpg" alt="Joseph avatar">
                                                    </div>
                                                    <span class="d-block my-3">
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                    </span>
                                                    <blockquote class="blockquote">Themesberg makes beautiful products to help people with creative ideas succeed. Our company empowers millions of people.
                                                        <footer class="h5 mt-3 text-dark">Joseph Garth</footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-dots disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <section class="section section-lg pt-0">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center text-md-left">
                    <div class="col-md-4 col-lg-3 mb-4 mb-lg-0">
                        <span class="counter counter-alternate display-1 text-dark d-block">100</span>
                        <h2 class="h5">Trusted partners</h2>
                    </div><div class="col-md-4 col-lg-5">
                        <p class="lead">We know how hard it is to find someone you can trust to work in your home or business. That's why we've compiled a list of our most trusted business partners.</p>
                        <p class="lead">We personally know these business owners and can confidently refer them to you.</p>
                    </div>
                </div>
                <div class="row mt-4 mt-lg-6">
                    <div class="clients-carousel owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-1150px, 0px, 0px); transition: all 0s ease 0s; width: 4140px;">
                                <div class="owl-item cloned" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/elastic.svg" alt="elastic brand">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/docker.svg" alt="docker logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/airbnb.svg" alt="airbnb brand">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/forbes.svg" alt="forbes logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/elastic.svg" alt="elastic logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/paypal.svg" alt="paypal logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4"><div class="card bg-primary border-light shadow-soft p-4">
                                        <img class="img-fluid image-sm" src="../../assets/img/clients/airbnb.svg" alt="airbnb logo"></div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/forbes.svg" alt="forbes brand">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/elastic.svg" alt="elastic brand">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/docker.svg" alt="docker logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/airbnb.svg" alt="airbnb brand">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/forbes.svg" alt="forbes logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/elastic.svg" alt="elastic logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/paypal.svg" alt="paypal logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-lg pt-0">
            <div class="container">
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="autoplay-carousel owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-1866px, 0px, 0px); transition: all 0.25s ease 0s; width: 3360px;">
                                    <div class="owl-item cloned" style="width: 363.333px; margin-right: 10px;">
                                        <div class="item p-3">
                                            <div class="card bg-primary shadow-soft border-light">
                                                <div class="card-header p-4">
                                                    <img src="./assets/img/team/profile-picture-1.jpg" class="card-img-top rounded" alt="Wood Portrait">
                                                </div>
                                                <div class="card-body pt-2">
                                                    <h3 class="h5 mb-2">Christopher Wood</h3>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 363.333px; margin-right: 10px;">
                                        <div class="item p-3">
                                            <div class="card bg-primary shadow-soft border-light">
                                                <div class="card-header p-4">
                                                    <img src="./assets/img/team/profile-picture-2.jpg" class="card-img-top rounded" alt="Wood Portrait">
                                                </div>
                                                <div class="card-body pt-2">
                                                    <h3 class="h5 mb-2">Christopher Wood</h3>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 363.333px; margin-right: 10px;">
                                        <div class="item p-3">
                                            <div class="card bg-primary shadow-soft border-light">
                                                <div class="card-header p-4">
                                                    <img src="./assets/img/team/profile-picture-3.jpg" class="card-img-top rounded" alt="Wood Portrait">
                                                </div>
                                                <div class="card-body pt-2">
                                                    <h3 class="h5 mb-2">Christopher Wood</h3>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 363.333px; margin-right: 10px;">
                                        <div class="item p-3">
                                            <div class="card bg-primary shadow-soft border-light">
                                                <div class="card-header p-4">
                                                    <img src="./assets/img/team/profile-picture-4.jpg" class="card-img-top rounded" alt="Wood Portrait">
                                                </div>
                                                <div class="card-body pt-2">
                                                    <h3 class="h5 mb-2">Christopher Wood</h3>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 363.333px; margin-right: 10px;">
                                        <div class="item p-3">
                                            <div class="card bg-primary shadow-soft border-light">
                                                <div class="card-header p-4">
                                                    <img src="./assets/img/team/profile-picture-1.jpg" class="card-img-top rounded" alt="Wood Portrait">
                                                </div>
                                                <div class="card-body pt-2">
                                                    <h3 class="h5 mb-2">Christopher Wood</h3>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 363.333px; margin-right: 10px;">
                                        <div class="item p-3">
                                            <div class="card bg-primary shadow-soft border-light">
                                                <div class="card-header p-4">
                                                    <img src="./assets/img/team/profile-picture-2.jpg" class="card-img-top rounded" alt="Wood Portrait">
                                                </div>
                                                <div class="card-body pt-2">
                                                    <h3 class="h5 mb-2">Christopher Wood</h3>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned active" style="width: 363.333px; margin-right: 10px;">
                                        <div class="item p-3">
                                            <div class="card bg-primary shadow-soft border-light">
                                                <div class="card-header p-4">
                                                    <img src="./assets/img/team/profile-picture-3.jpg" class="card-img-top rounded" alt="Wood Portrait">
                                                </div>
                                                <div class="card-body pt-2">
                                                    <h3 class="h5 mb-2">Christopher Wood</h3>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" aria-label="github social link" role="presentation" class="owl-prev">
                                    <span aria-label="Previous">‹</span>
                                </button>
                                <button type="button" aria-label="github social link" role="presentation" class="owl-next">
                                    <span aria-label="Next">›</span>
                                </button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection
