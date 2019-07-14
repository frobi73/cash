
<nav class="navbar sticky-top navbar-expand-md bg-light navbar-light" id="grad">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php">Capacity Sharing logo </a>
  
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php"> <?=$lang['nav1'];?> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="features.php" > <?=$lang['nav2'];?> </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="work.php"> <?=$lang['nav3'];?></a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="search.php"> <?=$lang['nav4'];?> </a>
        </li> 
        <li class="nav-item">
            <a class="nav-link" href="prices.php"> <?=$lang['nav5'];?></a>
        </li> 
        <li class="nav-item">
            <a class="nav-link" href="login.php"> <?=$lang['nav6'];?></a>
        </li> 
        <li class="nav-item dropdown" >

                    <a class="nav-link dropdown-toggle" style="padding-right:0px !important; padding-left:0px !important;" href="#" id="navbardrop" data-toggle="dropdown" >
                        <?=$lang['nav7'];?>  
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
    </div> <!-- collapse-->
  </nav>
