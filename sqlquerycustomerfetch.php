<html>
    <?php include "sqlconnect.php" ?>
    
    <head><title>Gear Exchange SQL Query</title></head>
    
    <body>
        <h1>Gear Exchange SQL Query</h1>
        
        <?php
        
                $sql = "SELECT * FROM inventory";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "Date Received: " . $row["datereceived"]. " - Item ID: " . $row["itemID"]. " - Manufacturer: " . $row["manufacturer"]. "<br>";
                }
            } else {
                echo "No results were found for this search.";
            }
                
    ?>
    
    </body>
</html>