<!DOCTYPE html>
<html lang = "en">
<head>
<title>Test php </title>
</head>
<body>
    <?php
        
        ob_start();
        include 'index.php';
        ob_end_clean();

        

        $bookCount = sizeof($urlArr);
        echo $bookCount;
        $bookCountIndex = $bookCount - 1;
        echo '<br>';
        echo $bookCountIndex;
       

    ?>



</body>
</html>


