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
                    <li class="nav"><a href="/home"><h4>HOME</h4></a></li>
                    <li class="nav"><h4>ABOUT</h4></li>
                    <li class="nav"><a href="features"><h4>FEATURES</h4></a></li>
                    <li class="nav"><h4>CONTACT</h4></li>
                    <li class="nav"><h4>LOGIN</h4></li>
                </ul>
            </div>
        </div>
        <div class="thankyou-page page-wrapper container">
            <section>
                <div class="row">
                    <div class="col-md-6">                        
                        <h1>THANK YOU!</h1>
                        <p>Your messasge has been successfully sent. A presentative will get back to you within 24hours about your demo.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="/images/AdobeStock_223987142_1.jpeg" width="600" alt="" />
                    </div>
                </div>
            </section>
        </div>
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
