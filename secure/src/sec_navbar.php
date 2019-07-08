
<nav class="navbar sticky-top navbar-expand-md bg-light navbar-light">
    <!-- Brand -->
    <a class="navbar-brand" href="home.php">Capacity Sharing</a>
  
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="home.php"> <?=$lang['nav1'];?> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="search.php" > <?=$lang['nav2'];?> </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="blank.php"> <?=$lang['nav3'];?></a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="profil.php"> <?=$lang['nav4'];?> </a>
        </li> 
        <li class="nav-item">
            <a class="nav-link" href="logout.php"> <?=$lang['nav5'];?></a>
        </li> 
        <li class="nav-item dropdown" >
            <div class="container">
              <div class="row">
                  <div class="col" style="padding-right:0px !important; padding-left:0px !important;">
                    <a class="nav-link dropdown-toggle" style="padding-right:0px !important; padding-left:0px !important;" href="#" id="navbardrop" data-toggle="dropdown" >
                        <?=$lang['nav6'];?>  
                    </a>
                    <div id="langSelect">
                      <div class="dropdown-menu">
                        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                          <button class="dropdown-item" type="submit" value="hu" name="lang_btn" > Magyar</button>
                          <button class="dropdown-item" type="submit" value="en" name="lang_btn" > English </button>
                          <button class="dropdown-item" type="submit" value="de" name="lang_btn" > Deutsch </button>
                        </form> 
                        </div> <!-- dropwdown-menu-->
                    </div>	<!-- Langselect-->
                    <?php 
                       if($_SERVER['REQUEST_METHOD'] == "POST")
                       {
                          $_SESSION['lang'] = $_POST["lang_btn"]; 
                          header('Location:'.$_SERVER['PHP_SELF']);
                       }
                    ?>
                </div>  <!-- col-->
              </div>  <!-- row-->
            </div>   <!-- container-->
          </li>
      </ul>
    </div> <!-- collapse-->
  </nav>