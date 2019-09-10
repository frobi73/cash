  <nav class="navbar sticky-top navbar-expand-md bg-light navbar-light" id="grad">
    <!-- Brand -->
    <a class="navbar-brand" href="home.php">Capacity Sharing logo </a>
  
    <!-- Toggler/collapsibe Button -->
    <div class="d-block d-sm-none" >
      <a href="profil.php" class="navbar-user-icon" >
            <i class="fas fa-user"></i>
      </a> 
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
   

  
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="home.php"><i class="fas fa-home"></i> <?=$lang['nav1'];?> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="search.php" >  <i class="fas fa-search"></i><?=$lang['nav2'];?> </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="prices.php"> <i class="fas fa-euro-sign"></i> <?=$lang['nav3'];?></a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="work.php"> <i class="fas fa-question-circle"></i><?=$lang['nav8'];?></a>
        </li>
           
         

        

        <li class="nav-item dropdown" >

                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >
                    <i class="fas fa-language"></i>    <?=$lang['nav6'];?>  
                    </a>
                    <div id="langSelect">
                      <div class="dropdown-menu">
                        <form action="<?=($_SERVER['PHP_SELF'])?>" method="post">
                          <button class="dropdown-item" type="submit" value="hu" name="lang_btn" > Magyar</button>
                          <button class="dropdown-item" type="submit" value="en" name="lang_btn" > English </button>
                          <button class="dropdown-item" type="submit" value="de" name="lang_btn" > Deutsch </button>
                        </form> 
                        </div> <!-- dropwdown-menu-->
                    </div>	<!-- Langselect-->
                    <?php 
                       if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["lang_btn"]))
                       {
                          $_SESSION['lang'] = $_POST["lang_btn"]; 
                          echo' <script> location.replace("'.$_SERVER['PHP_SELF'].'"); </script>';
                       }
                    ?>

          </li>
        </ul>
        <ul class="navbar-nav ml-auto" >
        <li class="nav-item dropleft" >
            <form action="profil.php" method="GET">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >
              <i class="fas fa-user"></i> <?=$lang['nav4'];?>  
              </a>
                <div class="dropdown-menu">

                    <button class="dropdown-item" type="submit" name="cur_tab" value="data"  href="profil.php"> <?=$lang['menu_1'];?></button>
                    <button class="dropdown-item" type="submit" name="cur_tab" value="new_resource" href="profil.php"> <?=$lang['menu_2'];?> </button>
                    <button class="dropdown-item" type="submit" name="cur_tab" value="my_dates" href="profil.php"> <?=$lang['menu_3'];?> </button>
                    <button class="dropdown-item" type="submit" name="cur_tab" value="delete_resource" href="profil.php"> <?=$lang['menu_4'];?> </button>
                    <button class="dropdown-item" type="submit" name="cur_tab" value="my_bookings" href="profil.php">  <?=$lang['menu_5'];?> </button>
                    <button class="dropdown-item" type="submit" name="cur_tab" value="my_resources" href="profil.php"> <?=$lang['menu_6'];?> </button>
                    <button class="dropdown-item" type="submit" name="cur_tab" value="subscriptions" href="profil.php"> <?=$lang['menu_7'];?> </button>
                    <button class="dropdown-item" type="submit" name="cur_tab" value="favourites" href="profil.php"><?=$lang['menu_8'];?> </button>
                    <button class="dropdown-item" type="submit" name="cur_tab" value="invite_member" href="profil.php"> <?=$lang['menu_9'];?></button>
                    <a class="dropdown-item"  href="logout.php">  <i class="fas fa-sign-out-alt"></i> <?=$lang['nav5'];?> </a>
                  </div> <!-- dropwdown-menu-->
              </form>
          </li>
     
      </ul>
    </div> <!-- collapse-->
  </nav>
