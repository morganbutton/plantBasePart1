<!DOCTYPE html>
<html lang = "en">
<head>
<title>Test php </title>
</head>
<body>

<?php
    require_once 'initialize.php';
    $query = 'SELECT * FROM books';
    $result = $connection->query($query);
    if(!$result) die('Fatal Error');
    $rows = $result -> num_rows;
    $urlArr = array();
    $titleArr = array();
    for($j = 0; $j < $rows; ++$j){
        $row = $result->fetch_array(MYSQLI_ASSOC);
        echo '<br>';
        ?>
        <img src="<?php echo 'images/'  .($row['image']) ?>">
        <br>
        <br>
        <?php 
        echo 'file Name:' .htmlspecialchars($row['fileNAme']) . '<br>';
        echo 'url:' .htmlspecialchars($row['url']) . '<br>';
        //add url's to array
        array_push($urlArr, ($row['url'])); 
        echo 'title:' .htmlspecialchars($row['title']) . '<br>';
        array_push($titleArr, ($row['title'])); 
        echo 'year:' .htmlspecialchars($row['year']) . '<br>';
        ?>
         <button><a href ="<?php echo $urlArr[$j] ?>"><?php echo ($row['title']) ?></a></button> <br>
        
        
     <?php 
    } 
    //print url test array
    //echo $urlArr[1];

   // ?>
    

      
   

</body>
</html>