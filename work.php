<?php 
session_start();

if(isset($_SESSION['lang']))
{
    switch($_SESSION['lang'])
    {
        case "en":
           require('lang/en.php');		

       break;
       
       case "hu":
           require('lang/hu.php');	

       break;
       
       case "de":
           require('lang/de.php');		
	
       break;	
       
       default: 
           require('lang/hu.php');		
           
    }
}
else
{
    $_SESSION['lang'] = "hu";
    header('Location:'.$_SERVER['PHP_SELF']);
    exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="src\css\style.css">
        
    <link rel="stylesheet" href="src\css\features.css">

    <link rel="stylesheet" type="text/css" href="src\datepicker\daterangepicker.css" />

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

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>

    <title>Capacity Sharing</title>
    <link rel="shortcut icon" href="src/images/ico/favicon.ico">
   
  </head>
  <body>
                <?php 
                    include("src/navbar.php");
                    //<!-- Script Cookie-->
                    include("src/cookie.html");
                    //<!-- Script Cookie-->    
                ?>


    <div class="jumbotron">
        <div class="container">
            <div class="card">
                <div class="container">
                    <h1 class="h1 center">Növelje vállalkozása kapacitását akár pár kattintással</h1>

                    <p class="lead" style="text-align:justify">Célunk, hogy egy olyan, folyamatosan bővülő zárt, segítőkész vállalkozói közösségi létrehozása, ahol egymás között szabadon megoszthatóvá válnak az eddig kihasználatlanul állt erőforrások. 
                    A Capacity Sharing rendszerében Ön egyszerre lehet bérbeadó és bérlő is, vállalkozása adott üzleti helyzetétől függően.
                    </p>
                    <h4>Vegyük az alábbi két életszerű példát.</h4>
                    <h5>1.bérlés</h5>
                    <p class="lead" style="text-align:justify">
                        Vállalkozásában elromlott egy nagy teljesítményű targonca és a javítás heteket vesz igénybe, a megoldás sürgető, 
                        hiszen az eszközre szüksége van, ráadásul a targoncás sem tud dolgozni targonca nélkül.  
                        Keressen az oldalunkon egy a közelben lévő vállalkozást, ahol éppen rendelkezésre áll és szabadon bérelhető, 
                        egy ilyen vagy hasonló targonca, mert éppen kihasználatlanul áll az udvaron és foglalja le pár kattintással. 
                        (a keresés és foglalás konkrét lépéseit <a class="lead" href="search.php">itt találja</a> <br> <br> 
                   
                    A foglalásról a bérbeadó értesítést kap, amelyet hétköznap 24 órán belül visszaigazol önnek. A bérlés konkrét részleteit ezután már közvetlenül le tudják egyeztetni. (szükséges-e szállítás, mikortól lehet az eszközt igénybe venni, mikorra kell pontosan visszavinni)
                    </p>
                    
                    <h5>2. Bérbeadás</h5>
                    <p class="lead" style="text-align:justify">
                    Vállalkozásában kihasználatlanul áll hetek/hónapok óta egy korábban komoly pénzért vett 3D nyomató. Töltse fel az eszköz adatait, bérlési árát és foglaltsági elérhetőségét (amikor nélkülözni tudja az eszközt) a Capacity Sharing oldalra, hogy más vállalkozások, akik szívesen kipróbálnák, bérelnének 3D nyomtató rátaláljanak az eszközére. Ha ez megtörtént, akkor pár kattintással lefoglalhatják a 3D nyomtatót, ahelyett hogy rengeteg telefonálás, email váltás, ajánlatkészítés előzné meg az együttműködést. Szerencsés esetben akár már 24 órán belül hasznot hozhat önnek az egyébként nem használt eszköz.

                    Ugye milyen egyszerű?
                    A fenti két példában felvázolt együttműködéssel Ön, és üzleti partnere jól jár, hiszen kapacitás jobb kihasználásával tovább növelheti vállalkozása termelékenységét, bevételét. 
                    </p>
                    <div class="row" style="padding-bottom:20px">

                    <div class="col col-md-2">

                    </div><!-- col -->
                    <div class="col col-md-8">
                        <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title center"> Eszköz keresés és foglalás lépései.</h5>
                                    <p class="card-text lead" style="text-align:justify">
                                        Rendszerünkben gyorsan, számos kritérium alapján tudja megkeresni az önnek megfelelő eszközt,
                                        legyen az eszköztípus, iparág, város vagy konkrét elérhetőségi dátum.
                                        Az alábbi videóban bemutatjuk a keresés és foglalás menetét</p>
                                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/TLV4_xaYynY" 
                                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen style="margin:auto;"></iframe>
                                </div>
                            </div> <!-- card -->
                    </div><!-- col -->
                    <div class="col col-md-2">

                    </div><!-- col -->
                        
                    </div><!-- row -->


                   
                    
                </div><!-- container-->     
            </div><!-- card -->
        </div><!-- container-->     
    </div><!-- jumbotron-->     



    <?php include("src/footer.html"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>