<?php 

        include("src/db_config.php");
        $_ID = $_SESSION["id"];
        $sql = 'SELECT
                    town.Town_Name,
                    companies.company_ID,
                    companies.company_name,
                    companies.email,
                    companies.street,
                    companies.contact_name,
                    companies.contact_phone,
                    companies.tax_number,
                    companies.company_phone,
                    countries.Name,
                    accounts.email
                FROM accounts
                    INNER JOIN companies
                        ON accounts.company_ID = companies.company_ID
                    INNER JOIN town
                        ON companies.town_Id = town.id
                    INNER JOIN countries
                        ON town.Country_Id = countries.id
                WHERE accounts.company_ID =  companies.company_ID AND accounts.account_ID = ' .$_ID ;
        if ($stmt = $con->prepare($sql)) 
        {
            $stmt->execute();
            $stmt->store_result(); 
        }
        if ($stmt->num_rows > 0) 
        {
            $stmt->bind_result(     $Town_Name,$company_ID,$company_Name,$company_email, 
                                    $street, $contact_name, $contact_phone,
                                    $tax_number,$company_phone,$country,$account_email);
                $stmt->fetch();
        }
        else 
        {
            // ha még nem adott meg cég adatot
        }
?>

<div class="col-md-8 order-md-1 card">
    <h2 style="margin-top:10px !important">Cég adatok </h2>
    <hr>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"> 

        <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="Contact_name">Contact Person name</label>
                    <div class="input-group">
                            <label for="Contact_name" id="at_label">
                                <i class="far fa-user"></i>
                            </label>
                        <input type="text" class="form-control" id="Contact_name" name="Contact_name" placeholder="" value="<?php echo $contact_name; ?>"required >
                    </div><!-- input group -->
                </div><!--col md 6 mb 3 -->
                <div class="col-md-6 mb-3">
                    <label for="contact_phone">Contact Phone Number</label>
                    <div class="input-group">
                            <label for="contact_phone" id="at_label">
                                <i class="fas fa-briefcase"></i>
                            </label>
                        <input type="text" class="form-control" id="contact_phone"  name="contact_phone" placeholder="" value="<?php echo $contact_phone; ?>"required >
                    </div><!-- input group -->
                </div><!--cold md 6 mb 3 -->
        </div><!-- row -->

        <div class="row">
        
                <div class="col-md-6 mb-3">
                    <label for="Contact_email"> Contact Email Adress </label>
                    <div class="input-group">
                            <label for="Contact_email" id="at_label">
                                <i class="fas fa-at"></i>
                            </label>
                        <input type="email" class="form-control" id="Contact_email" name="Contact_email" placeholder="" value="<?php echo $account_email; ?>" required>
                    </div><!-- input group -->
                </div><!--col md 6 mb 3 -->

                <div class="col-md-6 mb-3">
                    <label for="Company_phone">Company Phone Number</label>
                    <div class="input-group">
                            <label for="Company_phone" id="at_label">
                                <i class="fas fa-phone"></i>
                            </label>
                        <input type="text" class="form-control" id="Company_phone"  name="Company_phone" placeholder="Példa Kft."  value="<?php echo $company_phone; ?>" required >
                    </div><!-- input group -->
                </div><!--cold md 6 mb 3 -->
        </div><!-- row -->
<hr>

        <div class="row">

            <div class="col-md-6 mb-3">
                    <label for="Company_name">Company Name</label>
                    <div class="input-group">
                            <label for="Company_name" id="at_label">
                                <i class="fas fa-phone"></i>
                            </label>
                        <input type="text" class="form-control" id="Company_name"  name="Company_name" placeholder="Példa Kft."  value="<?php echo $company_Name; ?>"required >
                    </div><!-- input group -->
                </div><!--cold md 6 mb 3 -->

                <div class="col-md-6 mb-3">
                    <label for="Company_email"> Company Email Adress </label>
                    <div class="input-group">
                            <label for="Company_email" id="at_label">
                            <i class="fas fa-at"></i>
                            </label>
                        <input type="email" class="form-control" id="Company_email" name="Company_email" placeholder="" value="<?php echo $company_email; ?>"required >
                    </div><!-- input group -->
                </div><!--col md 6 mb 3 -->
                
        </div><!-- row -->
        <div class="row">

                <div class="col-md-6 mb-3">
                <label for="tax">Tax Number</label>
                <div class="input-group">
                        <label for="tax" id="at_label">
                        <i class="far fa-money-bill-alt"></i>
                        </label>
                <input id="tax" type="text" class="form-control" name="tax" placeholder="Tax Number" value="<?php echo $tax_number; ?>" required>
            </div><!-- input group -->
                </div><!--cold md 6 mb 3 -->

                <div class="col-md-6 mb-3">
                    <label for="Country_name"> Country </label>
                    <div class="input-group">
                            <label for="Country_name" id="at_label">
                                <i class="fas fa-at"></i>
                            </label>
                        <input type="text" class="form-control" id="Country_name" name="Country_name" placeholder="" value="<?php echo $country; ?>" required>
                    </div><!-- input group -->
                </div><!--col md 6 mb 3 -->
        </div><!-- row -->

        <div class="row">

            <div class="col-md-6 mb-3">
            <label for="Town">Town</label>
            <div class="input-group">
                    <label for="Town" id="at_label">
                    <i class="far fa-money-bill-alt"></i>
                    </label>
            <input id="Town" type="text" class="form-control" name="Town" placeholder="Town Name" value="<?php echo $Town_Name; ?>" required>
            </div><!-- input group -->
            </div><!--cold md 6 mb 3 -->

            <div class="col-md-6 mb-3">
                <label for="Street_name"> Street </label>
                <div class="input-group">
                        <label for="Street_name" id="at_label">
                            <i class="far fa-user"></i>
                        </label>
                    <input type="text" class="form-control" id="Street_name" name="Street_name" placeholder="" value="<?php echo $street; ?>" required>
                </div><!-- input group -->
            </div><!--col md 6 mb 3 -->
        </div><!-- row -->


        <button type="submit" class="btn btn-danger" id="edit_company" value="Szerkesztés" name="edit_company">Mentés</button>
      
      <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            if (isset($_POST['edit_company']))
            {
                if(isset($_POST['Contact_name'])) 
                { 
                    $contact_name = $_POST['Contact_name'];
                }
                if(isset($_POST['contact_phone'])) 
                { 
                    $contact_phone = $_POST['contact_phone'];
                }
                if(isset($_POST['Contact_email'])) 
                { 
                    $Contact_email = $_POST['Contact_email'];
                }
                if(isset($_POST['Company_phone'])) 
                { 
                    $company_phone = $_POST['Company_phone'];
                }

                if(isset($_POST['Company_Name'])) 
                { 
                    $company_Name = $_POST['Company_Name'];
                }
                if(isset($_POST['Company_email'])) 
                { 
                    $company_email = $_POST['Company_email'];
                }
                if(isset($_POST['tax'])) 
                { 
                    $tax_number = $_POST['tax'];
                }
                if(isset($_POST['Country_name'])) 
                { 
                    $country = $_POST['Country_name'];
                }
                if(isset($_POST['Town'])) 
                { 
                    $Town_Name = $_POST['Town'];
                }
                if(isset($_POST['Street_Name'])) 
                { 
                    $street = $_POST['Street_Name'];
                }

                if( $street == "asd")
                {
                    $sql = "INSERT INTO companies (company_name,email,country,town_id,street,contact_name,contact_phone,tax_number,company_phone)
                    VALUES (". $company_Name .",". $company_email .",". $Country_Id .",". $town_id .",". $street .",".$contact_name .",". $contact_phone .",". $tax_number .",".$company_phone .");" ;
                }
                else
                {
                    
                }
                echo $Country_Id;
                echo  $company_ID,$company_Name,$company_email,  $company_phone,
                $country, $Town_Name,$street, $contact_name, $contact_phone,$account_email,
                $tax_number;
               
                if ($stmt = $con->prepare($sql)) 
                {
                    $stmt->execute();
                    $stmt->store_result(); 
                }
                if ($stmt->num_rows > 0) 
                {
                    $stmt->bind_result(     $Town_Name,$company_ID,$company_Name,$company_email, 
                                            $street, $contact_name, $contact_phone,
                                            $tax_number,$company_phone,$country,$account_email);
                        $stmt->fetch();
                }
                else 
                {
                    // ha még nem adott meg cég adatot
                }
            }
        }

       
       ?>
    </form><!-- form  -->



    <form><!-- form  -->
    
        <h4 style="margin-bottom:10px !important;margin-top:10px !important">Account adatok</h4>
            
            <div class="mb-3">
                <label for="username">E-mail cím</label>
                <div class="input-group">
                            <label for="phone" id="at_label">
                            <i class="fas fa-at"></i>
                            </label>
                    <input id="e-mail" type="email" class="form-control" name="e-mail" placeholder="smth@smth.smth" Required>
                </div><!-- input group -->
            </div><!-- mb 3  -->
            <div class="row">
                <div class="col-md-6 mb-3">
                        <button type="submit" class="form-control btn-success" id="pwd_reset" name="pwd_reset" value="New Password"  required> New Password </button>
                    
                </div><!--col md 6 mb 3 -->
                <div class="col-md-6 mb-3">
                
                    <button type="submit" class="form-control btn-success" id="pwd_reset" name="pwd_reset" value="New Password"  required> Something else gomb </button>
                    
                </div><!--cold md 6 mb 3 -->
            </div> <!-- row -->
            <hr class="mb-4">
            <button type="submit" class="btn btn-danger" value="Szerkesztés" name="edit_company">Szerkesztés</button>
        </form><!-- form  -->
    </div> <!-- row -->

    
  </div> <!-- legfelső div -->

  <!-- Profil adatok almenüpont felépítése: Egymás alatti beviteli mezők 
  (csillaggal jelöltek kötelezően kitöltendő mezők): Contact Person Name*,
   Contact Phone Number*, Contact Email Adress*, Company Name*, Company Adress 
   (Country*, Region*, Town*, Street*, Street Number*), Company Vezetékes Telefon *, 
   Company Email Adress *, Company Tax Number * -->