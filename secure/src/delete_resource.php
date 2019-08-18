<div class="col-md-8 order-md-1 card" style="padding-bottom:20px">

    <h4 style="margin-bottom:10px !important;margin-top:10px !important">Eszközeim törlése:</h4>
    <hr>
            <?php

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
                    printf("Query nem sikerült: ", $con->error);
                }
                $arr_name = [];
                $arr_id = [];
                $sql = "SELECT
                        products.product_ID,
                        products.product_name
                    FROM products
                    WHERE products.company_id = ?";
                if ($stmt = $con->prepare($sql))
                {
                    $stmt->bind_param('i', $company_ID);
                    $stmt->execute();
                    $stmt->bind_result($my_product_ID,$my_product_name);

                    while ($stmt->fetch()) {
                        
                        array_push($arr_id,$my_product_ID,); 
                        array_push($arr_name,$my_product_name); 
                    }
                    //print_r($arr_fav);
                }
                else 
                {
                    printf("Query failed:", $con->error);
                }

                $startdate = date("Y/m/d") ;
                $enddate = date("Y/m/d") ;
                
            ?>
            <table id="wishlist_table" class="display responsive no-wrap"  style="width:100% !important;" >
                    <thead>
                        <th>Név</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php 
                            if(!empty($arr_name))
                            {

                                for($x = 0; $x < count($arr_name); $x++) 
                                {
                                    echo "<tr>";
                                        echo "<td>"; 
                                            echo  $arr_name[$x];
                                        echo "</td>";

                                        echo "<td>"; 
                                            echo '<form action="product.php" method="GET">
                                                    <a class="btn btn-danger btn-block" href="delete_product.php?_ID=' .  $arr_id[$x] . '"> Törlés </a>
                                                    </form>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                            } 
                        
                        ?>
                    </tbody>
            </table>


  </div> <!-- col-md-8 order-md-1 card -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
 
<script>
    
    $(document).ready(function() {
        $('#wishlist_table').DataTable();
    } );

    $('#wishlist_table').DataTable( {
        language: 
        {
                processing:     "Dolgozok rajta",
                search:         "Keresés&nbsp;:",
                lengthMenu:    "Megjelenítés: _MENU_  eszköz",
                info:           "Megjelenítve _END_ a _TOTAL_ -ből",
                infoEmpty:      "Nem található elem",
                infoFiltered:   "( Összesen : _MAX_ elemből)",
                infoPostFix:    "",
                loadingRecords: "Betöltés alatt",
                zeroRecords:    "Nincs találat",
                emptyTable:     "Nincs még egy eszközöd sem",
                paginate: {
                    first:      "Első",
                    previous:   "Előző",
                    next:       "Következő",
                    last:       "Utolsó"
                }
        },
        responsive: true,
    scrollY: 400
} );
</script>