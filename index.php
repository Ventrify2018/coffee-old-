<html>
<head></head>
<body>
    <h1>AWS PHP DATBASE CONNECTIVITY AND HOSTING</h1>
    <?php
        include 'connect.php';
        $result = $conn->query("select * from user");
        $results = $result->fetch_all();
        print_r($results);
        $conn->close();
    ?>
</body>    
</html>