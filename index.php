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
         
        <br>
        <br>
        <?php 
       // echo 'file Name:' .htmlspecialchars($row['fileNAme']) . '<br>';
       // echo 'url:' .htmlspecialchars($row['url']) . '<br>';
        //add url's to array
        array_push($urlArr, ($row['url'])); 
        array_push($titleArr, ($row['title'])); ?>
        <a href ="<?php echo 'collection/' .str_replace(' ', '', $titleArr[$j]) .'.php'  ?>"> <img src="<?php echo 'images/'  .($row['image']) ?>"> </a> <br>
        
        <?php 
       
        echo '<b>'. htmlspecialchars($row['title']) . ' (' .htmlspecialchars($row['year']) .')' .'</b>'  .'<br>';
       
      
         
    
        
        
     
    } 
    //print url test array
    //echo $urlArr[1];

   // ?>
    

      
   

</body>
</html>