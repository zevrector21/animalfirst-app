<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/app.css" media="screen" />
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="header container">
            <div class="header-content">
                <div class="logo">
                    <img src="/images/AnimalsFirst_logo_large.png" alt="logo" />
                </div>
                <ul class="nav-items">
                    <li class="nav"><h4>HOME</h4></li>
                    <li class="nav"><h4>ABOUT</h4></li>
                    <li class="nav"><h4>FEATURES</h4></li>
                    <li class="nav"><h4>CONTACT</h4></li>
                    <li class="nav"><h4>LOGIN</h4></li>
                </ul>
            </div>
        </div>
        <div class="home-page page-wrapper container">
            <section class="top-bar">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <h1>Your Comprehensive, End-to-End One-Stop Animal Management Software</h1>
                        <h3>Our one-stop platform is customizable to your needs, making animal management easy and effient.</h3>
                        <div>
                            <button class="btn btn-lg btn-primary">REQUEST A DEMO</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="features">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <h1>FEATURES</h1>
                        <p>The future of animal sheltering and rescue, AnimalsFirst is intuitive and easy to use. The software platform's robust feature set is completely customizable to meet - and exceed - your organization's unique needs.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-6 col-xs-12 f-cell">
                                <div class="f-title">
                                    <img src="/images/icons/040621_AnimalsFirst_icons_Medical.png" alt="" />
                                    <h2>MEDICAL</h2>
                                </div>
                                <p class="f-content">Easily manage everything from medication and vaccination information to updates on diagnostics and surgeries within the platform.</p>
                            </div>
                            <div class="col-md-6 col-xs-12 f-cell">
                                <div class="f-title">
                                    <img src="/images/icons/040621_AnimalsFirst_icons-FieldServices.png" alt="" />
                                    <h2>FIELD SERVICES</h2>
                                </div>
                                <p class="f-content">Tailored to track and manage service calls in the community, the field services feature seamlessly integrates with your processes while maintaining the highest levels of security.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12 f-cell">
                                <div class="f-title">
                                    <img src="/images/icons/040621_AnimalsFirst_icons-Reports.png" alt="" />
                                    <h2>REPORTING</h2>
                                </div>
                                <p class="f-content">Leverage the power of your data to create reports completely customized to your requirements, objectives and resources.</p>
                            </div>
                            <div class="col-md-6 col-xs-12 f-cell">
                                <div class="f-title">
                                    <img src="/images/icons/040621_AnimalsFirst_icons-PeopleManagement.png" alt="" />
                                    <h2>PEOPLE MANAGEMENT</h2>
                                </div>
                                <p class="f-content">Manage the information of those who engage with your organization, from adopters and fasters to stass, volunteers and donors - all in one easy-to-use platform!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div id="features-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#features-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#features-carousel" data-slide-to="1"></li>
                                <li data-target="#features-carousel" data-slide-to="2"></li>
                                <li data-target="#features-carousel" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="/images/slider1.png" alt="" width="100%" />
                                </div>
                                <div class="item">
                                    <img src="/images/slider2.png" alt="" width="100%" />
                                </div>
                                <div class="item">
                                    <img src="/images/slider3.png" alt="" width="100%" />
                                </div>
                                <div class="item">
                                    <img src="/images/slider4.png" alt="" width="100%" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-t-md">
                    <button class="btn btn-lg view-all-features">VIEW ALL FEATURES</button>
                </div>
                <div class="row m-t-xl">
                    <div class="col-md-6 col-xs-12 phone-img">
                        <img src="/images/header-profile-skin-1.png" alt="" />
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="f-title">
                            <img src="/images/icons/040621_AnimalsFirst_icons-PurpleAdoption.png" alt="" />
                            <h1>ADOPTIONS</h1>
                        </div>
                        <p>The AnimalsFirst adoption portal is the only solution of its kind to create an adopter portal for easy sharing of animal records. With individual profiles, a paperless adoption process and third-party integrator capabilities, AnimalsFirst makes the process easy and effcient for new pet parents.</p>
                        <ul>
                            <li><img src="/images/icons/041321_animalsfirst_icons-22__1_.png" alt="" /><h4>FEATURE OF ADOPT PORTAL HERE</h4></li>
                            <li><img src="/images/icons/041321_animalsfirst_icons-22__1_.png" alt="" /><h4>FEATURE OF ADOPT PORTAL HERE</h4></li>
                            <li><img src="/images/icons/041321_animalsfirst_icons-22__1_.png" alt="" /><h4>FEATURE OF ADOPT PORTAL HERE</h4></li>
                        </ul>
                    </div>
                </div>
                <div class="row m-t-xl">
                    <div class="col-md-6 col-xs-12">
                        <div class="f-title">
                            <img src="/images/icons/040621_AnimalsFirst_icons-PurpleFosters.png" alt="" />
                            <h1>FOSTERS</h1>
                        </div>
                        <p>Our foster portal allows for dual management of the foster journey: by both the organization managing the foster care and by the foster "parent" who can provide visibility into the animal's well-being and other information from the home environment.</p>
                        <ul>
                            <li><img src="/images/icons/041321_animalsfirst_icons-22__1_.png" alt="" /><h4>FEATURE OF ADOPT PORTAL HERE</h4></li>
                            <li><img src="/images/icons/041321_animalsfirst_icons-22__1_.png" alt="" /><h4>FEATURE OF ADOPT PORTAL HERE</h4></li>
                            <li><img src="/images/icons/041321_animalsfirst_icons-22__1_.png" alt="" /><h4>FEATURE OF ADOPT PORTAL HERE</h4></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="caption">
                            <img src="/images/header-profile-skin-1.png" alt="" />
                        </div>
                    </div>
                </div>
                <div class="row m-t-md">
                    <div class="f-title text-centre" style="justify-content: center">
                        <h1 style="margin-left: 0">TESTIMONIALS</h1>
                    </div>
                    <div id="testimonial-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="caption">
                                            <img src="/images/testimonial1.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="testimonial">
                                            <span class="quote">&#8220;</span>
                                            <div>
                                                <p>AnimalsFirst software provides us with the flexibility and special features we require to manage all aspects of our animal shelter operations; normal shelter operations, animal control, vetting/surgery and transport.  The software give us the ability to make many changes ourselves but for major changes requiring AnimalsFirst help, Gerald and his staff quickly respond to our needs.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="caption">
                                            <img src="/images/7.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="testimonial">
                                            <span class="quote">&#8220;</span>
                                            <div>
                                                <p>We love AnimalsFirst, so many different aspects of sheltering animals are addressed for us and they have been greate with corresponding and helping us handle any issues
                                                </p>
                                                <h4>- Help Humane</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="caption">
                                            <img src="/images/testimonial2.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="testimonial">
                                            <span class="quote">&#8220;</span>
                                            <div>
                                                <p>Animalsfirst is extremely user friendly and easy to learn how to use. Any questions that come up are answered in a timely manner with a thorough explanation.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="caption">
                                            <img src="/images/testimonial3.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="testimonial">
                                            <span class="quote">&#8220;</span>
                                            <div>
                                                <p>Animals First is incredibly user friendly and we love that we can customize forms etc. on our own. Customer support is very helpful, friendly and responsive. We are very satisfied with our decision to start usin g Animals First for our kennel, adoption and health tracking needs!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="caption">
                                            <img src="/images/testimonial4.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="testimonial">
                                            <span class="quote">&#8220;</span>
                                            <div>
                                                <p>AnimalsFirst has given Big Bones Canine Rescue the tools to meet the challenges of double digit year-over-year growth in applications and adoptions, all while saving us tens of thousands of dollars yearly.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btns">
                            <a class="btn btn-lg" href="#testimonial-carousel" data-slide="prev"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a>
                            <a class="btn btn-lg" href="#testimonial-carousel" data-slide="next"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="bottom-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <h1>Schedule your demo today!</h1>
                        <p>Discover why our platform was designed to put animals first</p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <button class="btn btn-lg request-demo">REQUEST A DEMO</button>
                    </div>
                </div>
            </div>
        </section>
        <div class="footer-wraper">
            <div class="footer-content">
                <p>@ 2021 AnimalsFirst.com</p>
                <ul>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">79 madison Ave 15th Floor, NY, NY 10016</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>
