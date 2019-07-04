<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   
    <!-- Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>


        <script src="jquery.MultiLanguage.min.js"></script>

    <script>
      $(document).ready(function(){
        $.MultiLanguage('language.json');
      })
    </script>
    <script src="src/jquery.MultiLanguage.min.js"></script>

    <script>
                $(document).ready(function()
                {
                  $.MultiLanguage('language.json');
                }
                )
    </script>

    <title>Capacity Sharing</title>
    <link rel="shortcut icon" href="images/ico/favicon.ico">

  </head>
  <body>
   
    <div class="brand">
      Capacity Sharing
    </div>
    <div class="brand brand-bar" id="band">
       
    </div>

                <?php 
                    include("navbar.html");
                ?>
    <!-- Script Cookie-->
                <script src="dist/jquery.cookieMessage.min.js"> </script>
                <script type="text/javascript">
                        $.cookieMessage({
                            'mainMessage': 'This website uses cookies. By using this website you consent to our use of these cookies. For more information visit the <a href="https://ec.europa.eu/info/law/law-topic/data-protection/reform_hu?pk_source=google_ads&pk_medium=paid&pk_campaign=gdpr2019"> GDPR Law Website</a>. ',
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
    <!-- Script Cookie-->
 

    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="box">
                    <div class="col col-lg-12">
                            <h2 class="text-center" id="demo">
                                
                            </h2>
                            <hr>
                        <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="center">
                                        <i class="fas fa-chart-line icon" style="font-size:60px;color:#52b6ec"></i>
                                        <h4 id="k1"></h4>
                                        </div>
                                </div><!--/.col-md-4-->
                                <div class="col-md-4 col-sm-6">
                                    <div class="center">
                                        <i class="fas fa-globe icon" style="font-size:60px;color:#52b6ec"></i>
                                        <h4 id="k2"></h4>
                                    </div>
                                </div><!--/.col-md-4-->
                                <div class="col-md-4 col-sm-6">
                                    <div class="center">
                                        <i class=" fas fa-industry icon" style="font-size:60px;color:#52b6ec"></i>
                                        <h4 id="k3"></h4>
                                    </div>
                                </div><!--/.col-md-4-->
                                <div class="col-md-6 col-sm-6">
                                    <div class="center">
                                        <i class="far fa-clock icon" style="font-size:60px;color:#52b6ec"></i>
                                        <h4 id="k4"></h4>
                                    </div>
                                </div><!--/.col-md-4-->
                                <div class="col-md-6 col-sm-12">
                                    <div class="center">
                                        <i class="fas fa-landmark icon" style="font-size:60px;color:#52b6ec"></i>
                                        <h4 id="k5" ></h4>
                                    </div>
                                </div><!--/.col-md-4-->
                            </div><!--/.row-->

                    </div><!-- col-->
                </div><!-- box-->
            </div>  <!-- row-->
            <br>
            <div class="row">
                <div class="box">
                    <div class="col col-lg-12">
                            <h2 class="text-center">
                                Milyen előnyöket kínálunk önnek ? 
                            </h2>
                            <hr>
                        <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="center">
                                       <ul>
                                                <li>Új megbízások szerzése</li>
                                                <li>Új üzleti partner / beszállító szerzése</li>
                                                <li>Új szaktudás / kompetencia elérése</li>
                                                <li>Globális, nemzetközi piacra lépés lehetősége</li>
                                                <li>Új iparágak felé történő nyitás lehetősége</li>
                                                <li>Új innovatív technológiák kipróbálásának lehetősége</li>
                                        </ul>
                                    </div>
                                </div><!--/.col-md-4-->
                                <div class="col-md-6 col-sm-12">
                                    <div class="center">
                                        <ul>
                                                <li> Véleményével alakíthatja, befolyásolhatja az üzleti közösséget</li>
                                                <li> Jelenlegi és jövőbeni üzleti trendeket ismerhet meg.</li>
                                                <li> Ajánlatkérések megválaszolása fordított idő a töredékére csökken</li>
                                                <li> Új ügyfelek, megbízások szerzése leegyszerűsödhet.</li>
                                                <li> Munkatársait folyamatosan tudja foglalkoztatni, eszközeit eredményesebben tudja kihasználni.</li>
                                        </ul>
                                    </div>
                                </div><!--/.col-md-4-->
                            </div><!--/.row-->

                    </div><!-- col-->
                </div><!-- box-->
            </div>  <!-- row-->    
        </div><!-- jumbotron-->     

    </div><!-- Container-->

    <?php include("footer.html"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>