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

    <link rel="stylesheet" href="src\style.css">
        
    <link rel="stylesheet" href="src\features.css">

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

    <title>Capacity Sharing</title>
    <link rel="shortcut icon" href="src/images/ico/favicon.ico">
   
  </head>
  <body>
   
    <div class="brand">
      Capacity Sharing
    </div>
    <div class="brand brand-bar" >
        <?=$lang['band'];?>
    </div>

                <?php 
                    include("src/navbar.php");
                    //<!-- Script Cookie-->
                    include("src/cookie.html");
                    //<!-- Script Cookie-->
                    
                ?>

    <div class="container">
        <div class="jumbotron">
            <div class="row">
                    <div class="col col-lg-12">
                        <div class="center gap">
                                <h2 class="center">
                                    <?= $lang['demo'];?>
                                </h2><hr>
                                <p class="lead"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo reprehenderit magni.
                                    Sapiente similique assumenda a, praesentium rerum nulla tenetur animi, earum esse culpa explicabo corporis sed eum, commodi qui? 
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae eveniet magni eum commodi quis unde, ea id ipsa nemo tempore 
                                    quod repudiandae quasi sunt recusandae nisi? Alias minima quis veniam?
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore deleniti alias quae fugit sunt iste ducimus deserunt iusto quia 
                                    perspiciatis ad, praesentium enim, consequatur distinctio sit, illum recusandae!</p>
                        </div>  <!-- center gap-->
                    </div><!-- col-->
            </div>  <!-- row-->
                <div class="feature">
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">     
                             <label for="keres">
                                <i class="fas fa-search"></i>
                            </label>
                            <input type="text" name="keres" placeholder="Keresés" id="keres" required>
                            
                            <div class="col col-lg-5">
                                <div class="form-group">
                                    <select class="form-control" id="select_country" onchange="test(this)"
                                    name="orszag" placeholder="Ország">
                                        <option selected disabled>Ország</option>
                                        <option value="hu">Magyar</option>
                                        <option value="de">Német</option>   
                                        <option value="au">Osztrák</option>  
                                    </select>
                                    <script>
                                        function test(varos_id) 
                                        {
                                            var varos = (varos_id.value || varos_id.options[varos_id.selectedIndex].value);
                                            var cities = ["Budapest","Győr","Pécs","Szeged","Debrecen",
                                                    "Berlin","München","Hamburg","Frankfurt","Stuttgart",
                                                    "Innsbruck","Salzburg","Wien","Graz","Linz"];
                                        switch(varos) {
                                            case "hu":
                                            var div = document.querySelector("#select_city"),
                                            frag = document.createDocumentFragment(),
                                            select = document.createElement("select");
                                            select.classList.add("form-control");
                                            select.setAttribute("name","varos");
                                            select.setAttribute("id","placeholder");
                                            var element = document.getElementById("placeholder");
                                            element.parentNode.removeChild(element);
                                                var i;
                                                for (i = 0; i < 5; i++) 
                                                {
                                                    select.options.add( new Option(cities[i],cities[i]) );
                                                }
                                                break;

                                            case "de":
                                            var div = document.querySelector("#select_city"),
                                            frag = document.createDocumentFragment(),
                                            select = document.createElement("select");
                                            select.classList.add("form-control");
                                            select.setAttribute("name","varos");
                                            select.setAttribute("id","placeholder");
                                            var element = document.getElementById("placeholder");
                                            element.parentNode.removeChild(element);
                                            var i;
                                                for (i = 5; i < 10; i++) 
                                                { 
                                                    select.options.add( new Option(cities[i],cities[i]));
                                                }
                                                break;

                                            case "au":
                                            var div = document.querySelector("#select_city"),
                                            frag = document.createDocumentFragment(),
                                            select = document.createElement("select");
                                            select.classList.add("form-control");
                                            select.setAttribute("name","varos");
                                            select.setAttribute("id","placeholder");

                                            var element = document.getElementById("placeholder");
                                            element.parentNode.removeChild(element);

                                            var i;
                                                for (i = 10; i < 15; i++) 
                                                { 
                                                    select.options.add( new Option(cities[i],cities[i]) );
                                                }
                                                break;
                                            }
                                        
                                            frag.appendChild(select);
                                            div.appendChild(frag);
                                        }

                                        function getInputsByValue(value)
                                        {
                                            var y = document.getElementsByTagName("option")[0].getAttribute("value");
                                            if(y=0)
                                            {

                                            } 
                                        }
                                       
                                        </script>
                                </div>  <!--from group-->
                            </div>  <!--col col-lg-4-->
                            <div class="col col-lg-5">
                                <div id="some_div"></div>
                                <div class="form-group" id="select_city">
                                    <select class="form-control"  name="varos" id="placeholder">
                                        <option>Város</option>
                                    </select>
                                </div>  <!--from group-->
                            </div>  <!--col col-lg-4-->
                            <div class="col col-lg-5">
                                <div class="form-group">
                                    <select class="form-control" id="selection" name="Iparag" placeholder="Iparág">
                                        <option>Összes</option>
                                        <option>Mezőgazdaság</option>
                                        <option>Informatika</option>     
                                    </select>
                                </div>  <!--from group-->
                            </div>  <!--col col-lg-4-->
                            <div class="col col-lg-5">
                                <div class="form-group">
                                    <select class="form-control" id="selection" name="Eroforras" placeholder="Erőforrás Típusa">
                                        <option>Összes</option>
                                        <option>Áram</option>
                                        <option></option>     
                                    </select>
                                </div>  <!--from group-->
                            </div>  <!--col col-lg-4-->
                        <input type="submit" value="Keresés" name="search_btn">

                    </form>
 
                    </div> <!-- feature-->
        </div><!-- jumbotron-->     
    </div><!-- Container-->

    <?php include("src/footer.html"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>