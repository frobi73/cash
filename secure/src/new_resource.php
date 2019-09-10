

<div class="col-md-8 order-md-1 card" style="padding-bottom:20px !important;">
    <h2 style="margin-bottom:10px !important;margin-top:10px !important"> <?=$lang['menu_2'];?> </h2>

    
    <hr>

        

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="upload-form"> 

        <h4 style="margin-bottom:10px !important;margin-top:10px !important"> <?=$lang['img'];?> </h4>
            <div class="row" style="margin:auto"> 
                
            <div class="container">

                  <input type="file" name="files[]" accept=".jpg,.png" multiple>
              
            </div>

        <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="src/img_up/imageuploadify.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('input[type="file"]').imageuploadify();
            })
        </script>

            </div><!-- row -->
            <?=$lang['img_data'];?>
        <hr>

        <h4 style="margin-bottom:10px !important;margin-top:10px !important"><?=$lang['res_data'];?></h4>
        <hr>
        <div class="row"> 
            <div class="col-md-6 mb-3">
              <label for="name"><?=$lang['res_name'];?></label>
                <div class="input-group">
                        <label for="name" id="at_label">
                        <i class="fas fa-folder-open"></i>
                        </label>
                <input id="name" type="text" class="form-control" name="product_name" placeholder=<?php echo $lang['res_name'];?>  required>
                </div><!-- input group -->
            </div><!--cold md 6 mb 3 -->

          <div class="col-md-6 mb-3">
              <div class="form-group ">
                                    <label for="product_type"><?=$lang['res_name'];?></label>
                                        <select class="form-control" id="selection" name="product_type" placeholder=<?php echo $lang['res_type'];?> required>
                                            <option value="0"  selected disabled hidden><?=$lang['res_name'];?></option>
                                            <option value="1" > <?=$lang['res_type_1'];?> </option>
                                            <option value="2" > <?=$lang['res_type_2'];?> </option>
                                            <option value="3" > <?=$lang['res_type_3'];?> </option>
                                            <option value="4" > <?=$lang['res_type_4'];?> </option>
                                            <option value="5" > <?=$lang['res_type_5'];?></option>
                                        </select>
                                </div><!--form group-->
              </div><!--col-->
          </div><!-- row -->

          <div class="row">

              <div class="col-md-6 mb-3">
                <label for="year"><?=$lang['buildyear'];?></label>
                  <div class="input-group">
                          <label for="year" id="at_label">
                            <i class="fas fa-table"></i>
                          </label>
                  <input id="datepicker_year" type="text" class="form-control" name="year" placeholder=<?=$lang['buildyear'];?> required>
                  </div><!-- input group -->
              </div><!--cold md 6 mb 3 -->

              <div class="col-md-6 mb-3">
                <label for="repair"><?=$lang['repair'];?></label>
                  <div class="input-group">
                          <label for="repair" id="at_label">
                            <i class="fas fa-table"></i>
                          </label>
                      <input id="datepicker_service" type="text" class="form-control" name="repair" placeholder=<?=$lang['repair'];?> required>
                  </div><!-- input group -->
              </div><!--cold md 6 mb 3 -->

            </div><!-- row -->


            <div class="row">

              <div class="col-md-6 mb-3">
                <label for="condition"><?=$lang['condi'];?></label>
                  <div class="input-group">
                          <label for="condition" id="at_label">
                            <i class="fas fa-tools"></i>
                          </label>
                          <select class="form-control" id="condition" name="condition" placeholder="Erőforrás Típusa" required>
                                            <option value="0"  selected disabled hidden><?=$lang['condi'];?></option>
                                            <option value="1" ><?=$lang['cond_1'];?></option>
                                            <option value="2" ><?=$lang['cond_2'];?></option>
                                            <option value="3" ><?=$lang['cond_3'];?></option>
                                            <option value="4" ><?=$lang['cond_4'];?></option>
                                        </select>
                  </div><!-- input group -->
              </div><!--cold md 6 mb 3 -->

                <div class="col-md-6 mb-3">
                    <label for="price"><?=$lang['price'];?></label>
                      <div class="input-group">
                              <label for="condition" id="at_label">
                                  <i class="fas fa-dollar-sign"></i>
                              </label>
                      <input id="price" type="text" class="form-control"  data-decimals="0" name="price" placeholder=<?=$lang['price'];?> required>
                      </div><!-- input group -->

                      </div><!-- row -->   
                </div><!-- row -->

                <div class="form-group green-border-focus">
                    <label for="info"><?=$lang['info_1'];?></label>
                    <textarea class="form-control" id="info" rows="3" maxlength="500" name ="info"></textarea>
                    <?=$lang['text_char_data'];?> <span id='count'> </span>
                </div>

                <div class="form-group green-border-focus">
                    <label for="info"><?=$lang['info_2'];?></label>
                    <textarea class="form-control" id="booking_info" rows="4" maxlength="500" name="booking" >Az eszköz elérhető a foglalás napjától reggel 8:00-tól, és a foglalás utolsó napján 18:00-ig vissza kell szállítani! Szállításban segíteni nem tudok! Az eszközhöz értő embert tudok biztosítani 1100 Ft/órás munkabér mellett!</textarea>
                </div>


                <button type="submit" class="btn btn-success btn-block" id="new_res" value="" name="new_res">Feltöltés</button>
      
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

                         //$files = array_filter($_FILES['upload']['name']); //something like that to be used before processing files.

                          // Count # of uploaded files in array
                          $total = count($_FILES['files']['name']);
                          if($total > 5)
                          {
                            $total = 5;
                          }
                          // Loop through each file
                            extract($_POST);
                            $error=array();
                            $extension=array("jpeg","jpg","png");
                            for( $i=0 ; $i < $total ; $i++ )
                             {                               
                                $file_name=$_FILES["files"]["name"][$key];
                                $file_tmp=$_FILES["files"]["tmp_name"][$key];
                                $ext=pathinfo($file_name,PATHINFO_EXTENSION);

                                if(in_array($ext,$extension)) {
                                    if(!file_exists("src/images/product/".$file_name)) {
                                        move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"src/images/product/".$file_name);
                                    }
                                    else {
                                        $filename=basename($file_name,$ext);
                                        $newFileName=$filename.time().".".$ext;
                                        move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"src/images/product/".$newFileName);
                                    }
                                }
                                else {
                                    array_push($error,"$file_name");
                                }
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
                  else
                  {
                    $condition = 4;
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
                    $booking_info = $_POST["booking"];
                  }

                  $_ID = $_SESSION["id"];
                  include("db_config.php");
                  $company= "SELECT
                  accounts.company_ID
                FROM accounts
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
                  echo $company_ID;
                  //echo $product_name,$product_type, $info, $booking, $price, $company_ID, $img_name, $imgnumb,  $_ID;

                  $sql = "INSERT INTO `products`(`product_name`, `product_type_id`, `information`, `company_id`, `booking_info`, `price`, `images`, `image_num`, `condition`, `last_service`, `build_date`) 
                                        VALUES ('$product_name',$product_type,'$info','$company_ID','$booking_info','$price','$img_name','$imgnumb','$condition','$repair_year','$build_year');";
                  if ($con->query($sql) === TRUE) 
                  {
                    echo "<script> alert('Feltöltés sikeres'); </script>";
                  } 
                  else 
                  {
                      echo "Error: " . $sql . "<br>" . $con->error;
                  }

                }
              }
        
        ?>
        </form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous">
</script>
<link href="src\fileupload.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>

<script src="src/img_up/imageuploadify.js"></script>
<link href="src/img_up/imageuploadify.min.css" rel="stylesheet">

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
