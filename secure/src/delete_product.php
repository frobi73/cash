<?php 

    include("db_config.php");
echo "1";
    if(isset( $_GET["atadott_ID"]))
    {
        $_ID = $_GET["atadott_ID"];

        $sql = "DELETE FROM products WHERE products.product_ID =". $_ID;
    
            if ($stmt = $con->prepare($sql)) 
            {
                $stmt->execute();
                echo "Siker";
            }
            else 
            {
                printf("Query failed: %s\n", $con->error);
            }
    }
    header('Location: ' . $_SERVER["HTTP_REFERER"] );
exit;

    

?>