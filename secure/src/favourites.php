<div class="col-md-8 order-md-1 card" style="padding-bottom:20px">

    <h4 style="margin-bottom:10px !important;margin-top:10px !important">Elmentett eszközök:</h4>
    <hr>
            <?php
                require_once('db_config.php');
                
                $sql = "SELECT wishlist.ProductId FROM wishlist WHERE wishlist.UserId = ?";
                $_ID = $_SESSION["id"];
                $arr_type = [];
                $arr_id = [];
                $arr_name = [];
                $sql = "SELECT
                            products.product_ID,
                            products.product_name,
                            product_types.product_type_name
                        FROM wishlist
                            INNER JOIN products
                                ON wishlist.ProductId = products.product_ID
                            INNER JOIN product_types
                                ON products.product_type_id = product_types.product_type_ID
                        WHERE wishlist.UserId = ?";
                if ($stmt = $con->prepare($sql))
                {
                    $stmt->bind_param('i', $_ID);
                    $stmt->execute();
                    $stmt->bind_result($fav_product_ID,$fav_product_name, $fav_product_type_name);
                    $i = 0;
                    while ($stmt->fetch()) {
                        
                        array_push($arr_id,$fav_product_ID,); 
                        array_push($arr_name,$fav_product_name); 
                        array_push($arr_type,$fav_product_type_name);   
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
                        <th>Típus</th>
                        <th>Név</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php 
                            if(!empty($arr_type))
                            {

                                for($x = 0; $x < count($arr_type); $x++) 
                                {
                                    echo "<tr>";
                                        echo "<td>"; 
                                            echo $arr_type[$x];
                                        echo "</td>";
                                        echo "<td>"; 
                                            echo '<form action="product.php" method="GET">
                                                <a class="btn btn-block" id="btn-fav-link" href="product.php?_ID=' .  $arr_id[$x] . ' &startdate=' . $startdate. ' &enddate=' . $enddate . '">'.  $arr_name[$x] . '</a>
                                                </form>';
                                        echo "</td>";
                                       
                                        echo "<td>"; 
                                                    
                                        echo'<form action="product.php" method="GET">
                                                <a class="btn btn-success btn-block"  href="product.php?_ID=' . $arr_id[$x]  . ' &startdate=' . $startdate. ' &enddate=' . $enddate . '"> Megtekint</a>
                                        </form>' ;
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
                processing:     "DOlgozok rajta",
                search:         "Keresés&nbsp;:",
                lengthMenu:    "Megjelenítés: _MENU_  eszköz",
                info:           "Megjelenítve _END_ a _TOTAL_ -ből",
                infoEmpty:      "Nem található elem",
                infoFiltered:   "( Összesen : _MAX_ elemből)",
                infoPostFix:    "",
                loadingRecords: "Betöltés alatt",
                zeroRecords:    "Nincs találat",
                emptyTable:     "Nincs még elmentve egy sem",
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