<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cash</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
        <style>

            * {box-sizing: border-box}


        input[type=text], input[type=password], input[type=email], input[type=number] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: 1px solid #52b6ec;
        background: #white;
        }

        input[type=text]:focus, input[type=password]:focus, input[type=email]:focus, input[type=number]:focus {
        background-color: #ddd;
        outline: none;
        }

        hr {
        border: 1px solid #52b6ec;
        }

        .registerbtn {
        background-color: #52b6ec;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
        }

        .registerbtn:hover {
        opacity:1;
        }

        a {
        color: dodgerblue;
        }

        .signin {
        background-color: #f1f1f1;
        text-align: center;
        }
        </style>
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#main-slider"><i class="icon-home"></i></a></li>
                        <li><a href="#services">Jellemzők</a></li>
                        <li><a href="#portfolio">Keresés</a></li>
                        <li><a href="#pricing">Árak</a></li>
                        <li><a href="">Nyelv</a></li>
                        <li><a href="#contact"> Login / Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header><!--/#header-->


            <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
            <script src="dist/jquery.cookieMessage.min.js"></script>
        <script type="text/javascript">
                $.cookieMessage({
                    'mainMessage': 'This website uses cookies. By using this website you consent to our use of these cookies. For more information visit the  <a href="https://ec.europa.eu/info/law/law-topic/data-protection/reform_hu?pk_source=google_ads&pk_medium=paid&pk_campaign=gdpr2019"> GDPR Law Website</a>. ',
                    'acceptButton': 'Got It!',
                    'fontSize': '16px',
                    'backgroundColor': '#222',
                });
        </script>

        <script type="text/javascript">

                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-36251023-1']);
                _gaq.push(['_setDomainName', 'jqueryscript.net']);
                _gaq.push(['_trackPageview']);

                (function() {
                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();

        </script>


    <section id="main-slider" class="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="carousel-content">
                        <h1>Capacity Sharing</h1>
                        <p class="lead">Növelje cége hatékonyságát és profitját!</p>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item">
                <div class="container">
                    <div class="carousel-content">
                        <h1>Capacity Sharing</h1>
                        <p class="lead">Túrbózza fel vállalkozását egyedülálló üzleti platformunk segítségével</p>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
        <a class="prev" href="#main-slider" data-slide="prev"><i class="icon-angle-left"></i></a>
        <a class="next" href="#main-slider" data-slide="next"><i class="icon-angle-right"></i></a>
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
            <div class="box first">
                <div class="row">
                        <div class="center">
                                <h2>Példa bemutatás</h2>
                                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                        Nulla ipsum omnis porro dolor soluta aut incidunt quia numquam alias!
                                        Voluptatem culpa asperiores ea nihil. Laudantium assumenda cumque saepe dolores earum?</p>
                            </div><!--/.center-->   
                    </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i class="fas fa-chart-line" style="font-size:60px;color:#52b6ec"></i>
                            <h4>Jelenlegi céges erőforrásai jobb kihasználásával magasabb bevételre tehet szert</h4>
                            </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i class="fas fa-globe" style="font-size:60px;color:#52b6ec"></i>
                            <h4>Cégének piaci jelenléte tovább növekedhet. Globális és nemzetközi piacra lépés lehetősége</h4>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i class=" fas fa-industry" style="font-size:60px;color:#52b6ec"></i>
                            <h4>Vezető szerepet vállalhat egy innovativ üzleti közösség kialakításábant</h4>
                          </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-6 col-sm-6">
                        <div class="center">
                            <i class="far fa-clock" style="font-size:60px;color:#52b6ec"></i>
                            <h4>Adminisztratív és reklám tevékenységekre fordított idők, költségek csökkenthetők</h4>
                          </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-6 col-sm-12">
                        <div class="center">
                            <i class="fas fa-landmark" style="font-size:60px;color:#52b6ec"></i>
                            <h4>Cége hosszútávú innovatív munkaadóként jelenhet meg a munkaerőpiacon</h4>
                         </div>
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="portfolio">
        <div class="container">
            <div class="box">
                <div class="center gap">
                    <h2>Példa Keresés</h2>
                    <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Nulla ipsum omnis porro dolor soluta aut incidunt quia numquam alias!
                        Voluptatem culpa asperiores ea nihil. Laudantium assumenda cumque saepe dolores earum?</p>
                </div><!--/.center-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id="pricing">
        <div class="container">
            <div class="box">
                <div class="center">
                    <h2>Áraink</h2>
                    <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Nulla ipsum omnis porro dolor soluta aut incidunt quia numquam alias!
                            Voluptatem culpa asperiores ea nihil. Laudantium assumenda cumque saepe dolores earum?</p>
                </div><!--/.center-->   
                <div class="big-gap"></div>
                <div id="pricing-table" class="row">
                    <div class="col-sm-4">
                        <ul class="plan">
                            <li class="plan-name">Basic</li>
                            <li class="plan-price">$29</li>
                            <li>5 eszköz egyszeri hirdetése</li>
                            <li>havi 15 üzlet kötése</li>
                            <li>Lorem</li>
                            <li>Ipsum</li>
                            <li>meg ami kell</li>
                            <li class="plan-action"><a href="#contact" class="btn btn-primary btn-lg">Előfizetés</a></li>
                        </ul>
                    </div><!--/.col-sm-4-->
                    <div class="col-sm-4">
                        <ul class="plan">
                            <li class="plan-name">Standard</li>
                            <li class="plan-price">$49</li>
                            <li>15 eszköz egyszeri hirdetése</li>
                            <li>havi 50 üzlet kötése</li>
                            <li>Lorem</li>
                            <li>Ipsum</li>
                            <li>meg ami kell</li>
                            <li class="plan-action"><a href="#contact" class="btn btn-primary btn-lg">Előfizetés</a></li>
                        </ul>
                    </div><!--/.col-sm-4-->
                    <div class="col-sm-4">
                        <ul class="plan">
                            <li class="plan-name">Premum</li>
                            <li class="plan-price">$99</li>
                            <li>50 eszköz egyszeri hirdetése</li>
                            <li>havi korlátlan üzlet kötése</li>
                            <li>Lorem</li>
                            <li>Ipsum</li>
                            <li>meg ami kell</li>
                            <li class="plan-action"><a href="#contact" class="btn btn-primary btn-lg">Előfizetés</a></li>
                        </ul>
                    </div><!--/.col-sm-4-->
                </div> 
            </div> 
        </div>
    </section><!--/#pricing-->

    <section id="contact">
        <div class="container">
            <div class="box last">
                <div class="row">
                    <div class="col-sm-6">
                                <form action="action_page.php">
                                        <div class="container">
                                            <h2 class="display-4">Register</h2>
                                            <p>Kérlek tölts ki minden mezőt a regisztráláshoz.</p>
                                            <hr>

                                            <label for="username"><b>Username</b></label>
                                            <input type="text" placeholder="Enter Username" name="username" required>

                                            <label for="email"><b>Email</b></label>
                                            <input type="email" placeholder="Enter Email" name="email" required>

                                            <label for="psw"><b>Password</b></label>
                                            <input type="password" placeholder="Enter Password" name="psw" required>

                                            <label for="psw-repeat"><b>Repeat Password</b></label>
                                            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                                            <label for="taxnumber"><b>Adószám - példa mező / lehet cserélni</b></label>
                                            <input type="number" placeholder="Enter Tax Number" name="taxnumber" min="0" max="10000000" required>

                                            <hr>

                                            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a> and the GDPR stuff</p>
                                            <button type="submit" class="registerbtn" name="reg_user">Register</button>
                                        </div>

                                        <div class="container signin">
                                            <p>Already have an account? <a href="#">Sign in</a>.</p>
                                        </div>
                                </form>
                            </div><!--/.col-sm-6-->
                            <div class="col-sm-6">
                        <p> Péda Login Form</p>

                        <div class="status alert alert-success" style="display: none"></div>
                        
                    </div><!--/.col-sm-6-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2019 <a target="_blank"> Capacity Sharing</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                        Regisztált parnerek: 2734

                        Regisztált erőforrások: 12637
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>