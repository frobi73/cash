<?php 
    session_start();

    if( $_SESSION['loggedin'] != TRUE)
    {
        session_unset();
        session_destroy();
        header('Location:'. base_url(TRUE));   
    }

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
<html lang="hu">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="src\style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   
    <!-- Scripts-->


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
 

    <link rel="stylesheet" type="text/css" href="src/data.css"/>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
 


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <script src="src/dropzone.js"></script>

    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

    <title>Capacity Sharing - Home</title>
    <link rel="shortcut icon" href="src/images/ico/favicon.ico">

  </head>
  <body>
                <?php 
                    include("src/sec_navbar.php");
                    //<!-- Script Cookie-->
                    include("src/cookie.html");
                    //<!-- Script Cookie-->
                ?>

        <div class="jumbotron">
            <div class="container" style="margin-top:30px">
                <div class="row">
                   
                    <?php 
                        $useragent=$_SERVER['HTTP_USER_AGENT'];

                        function isMobile() {
                            return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
                        }
                        if(!isMobile()){
                            include("src/menu.php");
                        }      
                        if(isset( $_GET["cur_tab"]))
                        {
                            $menupont = $_GET["cur_tab"];
                        }
                        else{
                            $menupont="data";
                        }
                    ?>


            
<div class="col-md-8 order-md-1 card" style="padding-bottom:20px !important;">
    <h2 style="margin-bottom:10px !important;margin-top:10px !important">Új erőforrás feltöltése</h2>
    <hr>  

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="upload-form"> 

        <h4 style="margin-bottom:10px !important;margin-top:10px !important">Képek feltöltése:</h4>
            <div class="row" style="margin:auto"> 
                
                <div class="wrap-custom-file">
                  <input type="file" name="image1" class="upload-file" id="image1" accept=".jpg, .png" />
                  <label  for="image1">
                    <span>Select Cover Image</span>
                  </label>
                </div>

                <div class="wrap-custom-file">
                  <input type="file" name="image2" class="upload-file" id="image2" accept=".jpg, .png" />
                  <label for="image2">
                    <span>Select Image 1</span>
                  </label>
                </div>

                <div class="wrap-custom-file">
                  <input type="file" name="image3" class="upload-file" id="image3" accept=".jpg, .png" />
                  <label for="image3">
                    <span>Select Image 2</span>
                  </label>
                </div>

                <div class="wrap-custom-file">
                  <input type="file" name="image4" class="upload-file" id="image4" accept=".jpg, .png" />
                  <label for="image4">
                    <span>Select Image 3</span>
                  </label>
                </div>


<script>



            $(function(){
                var fileInput = $('.upload-file');
                var maxSize = 4194304;
                $('.upload-form').submit(function(e){
                    if(fileInput.get(0).files.length){
                        var fileSize = fileInput.get(0).files[0].size; // in bytes
                        if(fileSize>maxSize){
                            alert('file size is more then' + maxSize + ' bytes');
                            return false;
                        }else{
                            //sikeres - tehát a képek mérete megfelelő
                            alert('file size is correct- '+fileSize+' bytes');
                        }
                    }else{
                        alert('choose file, please');
                        return false;
                    }
                    
                });
            });
                    


                $('input[type="file"]').each(function(){

              var $file = $(this),
                      $label = $file.next('label'),
                      $labelText = $label.find('span'),
                      labelDefault = $labelText.text();

                  $file.on('change', function(event){
                    var fileName = $file.val().split( '\\' ).pop(),
                        tmppath = URL.createObjectURL(event.target.files[0]);
                    if( fileName ){
                      $label
                        .addClass('file-ok')
                        .css('background-image', 'url(' + tmppath + ')');
                      $labelText.text(fileName);
                    }else{
                      $label.removeClass('file-ok');
                      $labelText.text(labelDefault);
                    }
                  });

                  });
</script>
            
            </div><!-- row -->
            A képek maximális mérete 2 MB. Megengedett képformátumok: .jpg, .png
        <hr>

        <h4 style="margin-bottom:10px !important;margin-top:10px !important">Eszköz adatok:</h4>
        <hr>
        <div class="row"> 
            <div class="col-md-6 mb-3">
              <label for="name">Erőforrás neve *</label>
                <div class="input-group">
                        <label for="name" id="at_label">
                        <i class="fas fa-folder-open"></i>
                        </label>
                <input id="name" type="text" class="form-control" name="product_name" placeholder="Erőforrás neve" required>
                </div><!-- input group -->
            </div><!--cold md 6 mb 3 -->

          <div class="col-md-6 mb-3">
              <div class="form-group ">
                                    <label for="product_type">Erőforrás Típusa</label>
                                        <select class="form-control" id="selection" name="product_type" placeholder="Erőforrás Típusa" required>
                                            <option value="0"  selected disabled hidden>Erőforrás típusa</option>
                                            <option value="1" >Emelőgép</option>
                                            <option value="2" >Földmunkagép</option>
                                            <option value="3" >CNC</option>
                                            <option value="4" >Toronydarú</option>
                                            <option value="5" >3D nyomtató</option>
                                        </select>
                                </div><!--form group-->
              </div><!--col-->
          </div><!-- row -->

          <div class="row">

              <div class="col-md-6 mb-3">
                <label for="year">Gyártási év *</label>
                  <div class="input-group">
                          <label for="year" id="at_label">
                            <i class="fas fa-table"></i>
                          </label>
                  <input id="datepicker_year" type="text" class="form-control" name="year" placeholder="Gyártási év" required>
                  </div><!-- input group -->
              </div><!--cold md 6 mb 3 -->

              <div class="col-md-6 mb-3">
                <label for="repair">Legutoljára Szervizelve*</label>
                  <div class="input-group">
                          <label for="repair" id="at_label">
                            <i class="fas fa-table"></i>
                          </label>
                      <input id="datepicker_service" type="text" class="form-control" name="repair" placeholder="Legutóbb karbantartva" required>
                  </div><!-- input group -->
              </div><!--cold md 6 mb 3 -->

            </div><!-- row -->


            <div class="row">

              <div class="col-md-6 mb-3">
                <label for="condition">Állapot *</label>
                  <div class="input-group">
                          <label for="condition" id="at_label">
                            <i class="fas fa-tools"></i>
                          </label>
                          <select class="form-control" id="condition" name="product_type" placeholder="Erőforrás Típusa" required>
                                            <option value="0"  selected disabled hidden>Állapot</option>
                                            <option value="1" >Új</option>
                                            <option value="2" >Kitűnő</option>
                                            <option value="3" >Megkímélt</option>
                                            <option value="4" >Normál</option>
                                        </select>
                  </div><!-- input group -->
              </div><!--cold md 6 mb 3 -->

                <div class="col-md-6 mb-3">
                    <label for="price">Ár/nap *</label>
                      <div class="input-group">
                              <label for="condition" id="at_label">
                                  <i class="fas fa-dollar-sign"></i>
                              </label>
                      <input id="price" type="text" class="form-control"  data-decimals="0" name="price" placeholder="Ár/ nap" required>
                      </div><!-- input group -->

                      </div><!-- row -->   
                </div><!-- row -->

                <div class="form-group green-border-focus">
                    <label for="info">Leírás *</label>
                    <textarea class="form-control" id="info" rows="3" maxlength="500" name ="info"></textarea>
                    Hátralevő karakterek: <span id='count'> </span>
                </div>

                <div class="form-group green-border-focus">
                    <label for="info">Egyéb információ *</label>
                    <textarea class="form-control" id="info" rows="3" name="booking" > 
                          Az eszköz elérhető a foglalás napjától reggel 8:00-tól, és a 
                          foglalás utolsó napján 18:00-ig vissza kell szállítani! Szállításban segíteni nem tudok! 
                          Az eszközhöz értő embert tudok biztosítani 1100 Ft/órás munkabér mellett
                    </textarea>
                </div>


                <button type="submit" class="btn btn-success btn-block" id="new_res" value="Szerkesztés" name="new_res">Feltöltés</button>
      
        <?php 

            if($_SERVER['REQUEST_METHOD'] == 'POST') 
            {
                if (isset($_POST['new_res']))
                {

                  if(isset($_POST["product_name"]))
                  {
                    $product_name = $_POST["product_name"];
                  }

                  $img_name = $product_name . "_" . uniqid();;
                  $imgnumb = 0; // a képek száma az adott termékhez, hogy könnyítse a megjelenítést 

                  if(isset($_POST["image1"]))
                  {
                    img_upload($img_name,0);
                    $imgnumb = 1;
                  }

                  if(isset($_POST["image2"]))
                  {
                    img_upload($img_name,1);
                    $imgnumb = 2;
                  }

                  if(isset($_POST["image3"]))
                  {
                    img_upload($img_name,2);
                    $imgnumb = 3;
                  }

                  if(isset($_POST["image4"]))
                  {
                    img_upload($img_name,3);
                    $imgnumb = 4;

                  }
                  if(isset($_POST["product_type"]))
                  {
                    $product_type = $_POST["product_type"];
                  }

                  if(isset($_POST["year"]))
                  {
                    $build_year = $_POST["year"];
                  }

                  if(isset($_POST["repair"]))
                  {
                    $repair_year = $_POST["repair"];
                  }

                  if(isset($_POST["condition"]))
                  {
                    $condition = $_POST["condition"];
                  }

                  if(isset($_POST["price"]))
                  {
                    $price = $_POST["price"];
                  }

                  if(isset($_POST["info"]))
                  {
                    $info = $_POST["info"];
                  }

                  if(isset($_POST["booking"]))
                  {
                    $booking = $_POST["booking"];
                  }

                  $_ID = $_SESSION["id"];
                  include("db_config.php");
                  $company= "SELECT accounts.company_ID FROM accounts
                              WHERE accounts.account_ID = ?";

                  if ($stmt = $con->prepare($company)) 
                  {
                      $stmt->bind_param('i', $_ID);
                      $stmt->execute();
                      $stmt->store_result(); 
                  }
                  if ($stmt->num_rows > 0) 
                  {
                      $stmt->bind_result($company_ID);
                      $stmt->fetch();
                  }
                  else 
                  {
                      printf("Query failed: %s\n", $con->error);
                  }

                  echo $product_name,$product_type, $info, $booking, $price, $company_ID, $img_name, $imgnumb,  $_ID;

                  $sql = "CALL NEW_RESOURCE(?,?,?,?,?,?,?,?);";
                  $company_ID = 1;

                  if ($stmt = $con->prepare($sql)) 
                  {
                      $stmt->bind_param('sissiisi',$product_name,$product_type, $info, $booking, $price, $company_ID, $img_name, $imgnumb);
                      $stmt->execute();
                      $stmt->store_result(); 
                  }
                  if ($stmt->num_rows > 0) 
                  {
                      $stmt->fetch();
                  }
                  else 
                  {
                      printf("Query failed: %s\n", $con->error);
                  }
                }
              }

                  function img_upload($img_name,$numb) 
                  {
                    //$fileToUpload = $_FILES['fileToUpload']['name'];
                    $e_numb = "image" . ($numb+1);
                    if(isset($_FILES[$e_numb]['name']))
                    {
                      $target_dir = "src/images/product/";
                    
                      $target_file = $target_dir . basename($_FILES[$e_numb]["name"]);
                      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                      $newfilename =  $img_name . '_'. $numb . '.' . $imageFileType;
                            if (move_uploaded_file($_FILES[$e_numb]["tmp_name"], $target_dir . $newfilename )) 
                            {
              
                                echo "The file ". basename( $_FILES[$e_numb]["name"]). " has been uploaded.";
                            } 
                            else 
                            {
                                echo "Sorry, there was an error uploading your file.";
                            }
                    }
                   
                  }


     
        
        ?>
        </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous">
</script>
<link href="src\fileupload.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>

<script>

  var maxchar = 500;
  var i = document.getElementById("info");
  var c = document.getElementById("count");
  c.innerHTML = maxchar;
      
  i.addEventListener("keydown",count);

  function count(e){
      var len =  i.value.length;
      if (len >= maxchar){
        e.preventDefault();
      } else{
        c.innerHTML = maxchar - len-1;   
      }
  }

$("#datepicker_year").datepicker( {
    format: " yyyy",
    viewMode: "years", 
    minViewMode: "years",
    yearRange: '1959:2019',
});

$("#datepicker_service").datepicker( {
    format: " yyyy",
    viewMode: "years", 
    minViewMode: "years",
    yearRange: '1959:2019',
});
    //Új erőforrás adatok almenüpont felépítése: 
    //Egymás alatti beviteli mezők (csillaggal jelöltek kötelezően kitöltendő mezők): 
    //Resource Name*, Resource Type*, gyártási év*,  Állapot *, Szervizelve *. Bérlési ár/nap *,
    // Egyéb fontos paraméter, információ, leírás, pl. hány órától elérhető az eszköz, pl. reggel 8.00-tól (255 karakter), Részletes leírás: Szabadszöveges textboxban, Resource Pictures (max. 5db kép, képentként max. 0.5MB méretben) 

</script>
  </div> <!-- col-md-8 order-md-1 card -->

        </div>
    </div><!-- Container-->

    

    <?php include("src/sec_footer.html"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>

 