<div class="col-md-8 order-md-1 card">
    <h2 style="margin-bottom:10px !important;margin-top:10px !important">Adatok</h2>

    <form>
        <h4 style="margin-bottom:10px !important;margin-top:10px !important">Cég adatok </h4> 
        <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="Contact_name">Contact name</label>
                    <div class="input-group">
                            <label for="Contact_name" id="at_label">
                                <i class="far fa-user"></i>
                            </label>
                        <input type="text" class="form-control" id="Contact_name" name="Contact_name" placeholder="Példa János" value="" required>
                    </div><!-- input group -->
                </div><!--col md 6 mb 3 -->
                <div class="col-md-6 mb-3">
                    <label for="Company_name">Company name</label>
                    <div class="input-group">
                            <label for="Company_name" id="at_label">
                                <i class="fas fa-briefcase"></i>
                            </label>
                        <input type="text" class="form-control" id="Company_name"  name="Company_name" placeholder="Példa Kft." value="" required>
                    </div><!-- input group -->
                </div><!--cold md 6 mb 3 -->
        </div><!-- row -->

            <div class="mb-3">
            <label for="tax">Tax Number</label>
            <div class="input-group">
                        <label for="tax" id="at_label">
                        <i class="far fa-money-bill-alt"></i>
                        </label>
                <input id="tax" type="text" class="form-control" name="tax" placeholder="Tax Number" Required>
            </div><!-- input group -->
        </div><!-- mb 3  -->

        <div class="mb-3">
            <label for="phone">Phone Number</label>
            <div class="input-group">
                        <label for="phone" id="at_label">
                        <i class="fas fa-phone"></i>
                        </label>
                <input id="phone" type="text" class="form-control" name="phone" placeholder="Phone Number" Required>
            </div><!-- input group -->
        </div><!-- mb 3  -->

        <button type="submit" class="btn btn-danger" value="Szerkesztés" name="edit_company">Szerkesztés</button>
        <?php 
        
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

 