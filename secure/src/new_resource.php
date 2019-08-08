<div class="col-md-8 order-md-1 card">
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
            A képek maximális mérete 4 MB. Megengedett képformátumok: .jpg, .png
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
                <input id="name" type="text" class="form-control" name="name" placeholder="Erőforrás neve" required>
                </div><!-- input group -->
            </div><!--cold md 6 mb 3 -->

          <div class="col-md-6 mb-3">
              <div class="form-group ">
                                    <label for="Eroforras">Erőforrás Típusa</label>
                                        <select class="form-control" id="selection" name="Eroforras" placeholder="Erőforrás Típusa" required>
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
                  <input id="condition" type="text" class="form-control" name="condition" placeholder="Állapot" required>
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
                    <textarea class="form-control" id="info" rows="3" maxlength="500" ></textarea>
                    Hátralevő karakterek: <span id='count'> </span>
                </div>

                <div class="form-group green-border-focus">
                    <label for="info">Egyéb információ *</label>
                    <textarea class="form-control" id="info" rows="3" > 
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
                  if(isset($_POST["image1"]))
                  {
                    img_upload();
                  }
                  if(isset($_POST["image2"]))
                  {
                    
                  }
                  if(isset($_POST["image3"]))
                  {
                    
                  }
                  if(isset($_POST["image4"]))
                  {
                    
                  }
                }
              }
                  function img_upload() 
                  {
                    $fileToUpload = $_FILES['fileToUpload']['name'];
                    $target_dir = "src/images/";
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                        if($check !== false) {
                            echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                        } else {
                            echo "File is not an image.";
                            $uploadOk = 0;
                        }
            
                      if ($uploadOk == 0) {
                          echo "Sorry, your file was not uploaded.";
                      } 
                      else 
                      {
                          // a fájl nevét deklarálni kell -> a szerveren így lesz tárolva - $newfilename = $_SESSION["username"] . '.' . $imageFileType;
                          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir .$newfilename )) {
            
                              echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                          } 
                          else 
                          {
                              echo "Sorry, there was an error uploading your file.";
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

 