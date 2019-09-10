<div class="col-sm-4 card " style="position:sticky;">
    <h2 style="margin-bottom:0px !important;margin-top:10px !important">Menü</h2>
    <hr>
    <form action="profil.php" method="GET">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <button class="btn" type="submit" name="cur_tab" value="data" > <?=$lang['menu_1'];?>  </button> <!-- $lang['menu_1'] -->
            </li>
            <li class="nav-item">
                <button class="btn" type="submit" name="cur_tab" value="new_resource" > <?=$lang['menu_2'];?>  </button>
            </li>
            <li class="nav-item">
                <button class="btn" type="submit" name="cur_tab" value="my_dates">  <?=$lang['menu_3'];?>  </button>
            </li>
            <li class="nav-item">
                <button class="btn" type="submit" name="cur_tab" value="delete_resource"> <?=$lang['menu_4'];?>  </button>
            </li>
            <li class="nav-item">
                <button class="btn" type="submit" name="cur_tab" value="my_bookings">  <?=$lang['menu_5'];?> </button>
            </li>
            <li class="nav-item">
                <button class="btn" type="submit" name="cur_tab" value="my_resources">  <?=$lang['menu_6'];?> </button>
            </li>
            <li class="nav-item">
                <button class="btn" type="submit" name="cur_tab" value="subscriptions">  <?=$lang['menu_7'];?> </button>
            </li>
            <li class="nav-item">
                <button class="btn" type="submit" name="cur_tab" value="favourites"> <?=$lang['menu_8'];?> </button>
            </li>
            <li class="nav-item">
                <button class="btn" type="submit" name="cur_tab" value="invite_member"> <?=$lang['menu_9'];?> </button>
            </li>
        
        </ul>
    </form>
    <hr class="d-sm-none">
</div>