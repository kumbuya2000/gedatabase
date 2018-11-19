<html>
    <?php include "SQLconnect.php" ?>
    
    <head><title>Gear Exchange SQL Query</title></head>
    
    <body>
        <h1>Gear Exchange SQL Query</h1>
        
        <?php
        
                $sql = "SELECT id, firstname, lastname FROM MyGuests";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                }
            } else {
                echo "0 results";
            }
                
    ?>
    
    </body>
</html>