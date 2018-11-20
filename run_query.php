<html>
    <?php include "sqlconnect.php" ?>
    
    <head><title>Gear Exchange SQL Query Results From Text Input</title></head>
    
    <?php
    
        $sql = $_POST['query'];
    
        echo "<h3>Success</h3>";
        echo "<p>The following query was submitted to the SQL database:</p>";
        echo $sql;
    
        $result = mysqli_query($conn, $sql);
        
    ?>
    
    <body>
        <?php include "navbar.php" ?>
        
        
    </body>
</html>