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
        <div class="demo-page page-wrapper container">
            <section class="top-bar">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <h1>Simplify your data and rehome pets faster and more efficiently</h1>
                        <h3>The secure end-to-end platform helps your staff streamline their workflows and spend more time caring for animals</h3>
                    </div>
                </div>
            </section>
            <section class="features">
                <div class="row">
                    <h1 style="color: #736eb2">REQUEST A DEMO</h1>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="row">
                            <div class="f-title">
                                <h2 class="m-l-0"><b>What to Expect</b></h2>
                            </div>
                            <ul>
                                <li><img src="/images/icons/041321_animalsfirst_icons-22__1_.png" alt="" /><h4>Personalized demonstration of the entire platform and all features.</h4></li>
                                <li><img src="/images/icons/041321_animalsfirst_icons-22__1_.png" alt="" /><h4>Answers to your specific questions.</h4></li>
                                <li><img src="/images/icons/041321_animalsfirst_icons-22__1_.png" alt="" /><h4>Customized tutorial covering your management needs.</h4></li>
                                <li><img src="/images/icons/041321_animalsfirst_icons-22__1_.png" alt="" /><h4>30- to 45- minute virtual demo presentation.</h4></li>
                            </ul>
                        </div>
                        <form id="demo-form" class="demo-form" action="/demo" method="post">
                            {{ csrf_field() }}
                            <div class="row">                                
                                <div class="col-md-6 col-xs-12 m-t-md">
                                    <label for="name">YOUR NAME<span>*</span></label>
                                    <input id="name" type="text" placeholder="Jack Wayley" class="form-control" required />
                                </div>
                                <div class="col-md-6 col-xs-12 m-t-md">
                                    <label for="email">YOUR EMAIL<span>*</span></label>
                                    <input id="email" type="email" placeholder="jackwayley@gmail.com" class="form-control" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-12 m-t-md">
                                    <label for="shelter_name">SHELTER NAME<span>*</span></label>
                                    <input id="shelter_name" placeholder="Web design" class="form-control" required />
                                </div>
                                <div class="col-md-6 col-xs-12 m-t-md">
                                    <label for="phone">YOUR PHONE NUMBER<span>*</span></label>
                                    <input id="phone" value="" placeholder="+1-800-643-4500" class="form-control" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-xs-12 m-t-md">
                                    <label for="quetion">WHAT QUESTIONS DO YOU HAVE? WHAT FEATURES ARE YOU MOST IN INTERESTED IN?</label>
                                    <textarea rows="5" id="quetion" placeholder="Hi, there, I would like to ..." class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="m-t-md">
                                <button class="btn btn-lg btn-primary" type="submit">REQUEST A DEMO</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <img src="/images/7.png" alt="" width="100%" />
                    </div>
                </div>
                <div class="row m-t-xl text-centre">                    
                    <h1 class="m-l-0">FEATURES</h1>
                    <p>Unlike many other shelter management tools, all of our platform features are included in your plan. No additional purchases or commitments required.</p>

                    <div id="features-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12">
                                        <img src="/images/icons/040621_AnimalsFirst_icons_Intake-Outcome.png" alt="" />
                                        <h3>Animal Intake <br />& Outcome</h3>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <img src="/images/icons/040621_AnimalsFirst_icons_Intake-Outcome.png" alt="" />
                                        <h3>Medical <br />Reports</h3>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <img src="/images/icons/040621_AnimalsFirst_icons-Reports.png" alt="" />
                                        <h3>Specialized <br />Reporting</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12">
                                        <img src="/images/icons/040621_AnimalsFirst_icons_Intake-Outcome.png" alt="" />
                                        <h3>Animal Intake <br />& Outcome</h3>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <img src="/images/icons/040621_AnimalsFirst_icons_Intake-Outcome.png" alt="" />
                                        <h3>Medical <br />Reports</h3>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <img src="/images/icons/040621_AnimalsFirst_icons-Reports.png" alt="" />
                                        <h3>Specialized <br />Reporting</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#features-carousel" data-slide="prev">
                          <span class="glyphicon glyphicon-menu-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#features-carousel" data-slide="next">
                          <span class="glyphicon glyphicon-menu-right"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="row m-t-xl">
                    <div class="col-md-6 col-xs-12">
                        <div class="caption">
                            <img src="/images/congruent_pentagon.png" alt="" />
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="f-title">
                            <h1 class="m-l-0">TESTIMONIALS</h1>
                        </div>
                        <div class="testimonial">
                            <span class="quote">&#8220;</span>
                            <div>
                                <p>We love AnimalsFirst, so many different aspects of sheltering animals are addressed for us and they have been greate with corresponding and helping us handle any issues
                                </p>
                                <h4>- Help Humane</h4>
                                <div class="btns m-t-xl">
                                    <button class="btn btn-lg"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></button>
                                    <button class="btn btn-lg"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>            
        </div>
    </body>
</html>
