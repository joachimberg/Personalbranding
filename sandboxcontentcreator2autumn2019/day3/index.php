<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>working with PHP</title>
</head>
<body>
    <?php 
    
    //this is a single line comment in PHP 
    #this is also a single line comment in PHP
    /* this is a 
    mutiline comment 
    */
    
    $firstName = "joachim";
    /*
    echo "<h2>" $firstName "</h2>";
    */
    
    //DATAtypes
    
    $birthyear = 1994;
    //string
    
    $costPrice = 19.95;
    //number
    
    $doorIsOpen = false;
    //decimal
    
    
    $myBMI = 0;
    $myHeightInMeter = 1.69;
    $myWigthInKg = 80;
    $myBMI = $myWigthInKg / ($myHeightInMeter * $myHeightInMeter);
    echo "<h1>" . $myBMI . "</h1>";
    
    $t = 13;
    
    if( $t < 12 && $t >= 5) {
        echo "<p>good morning</p>";
    }
    elseif ( $t >= 12 && $t < 18 ){
        echo "<p>good noon</p>";
    }
    elseif ( $t >= 18 && $t <= 23){
        echo "<p>good evening</p>";
    }
    else {
        echo "<p>good night</p>";
    }
    
    // defining an Array in PHP
    $MotorcykelMærker = array ('honda', 'yamaha', 'suzuki', 'bmw');
    // printing out the first element i $MotorcykelMærker
    echo $MotorcykelMærker[0];
        
    //making a for loop
    for($j = 0; $j <= count($MotorcykelMærker); $j++) {
    echo "<h3>".$MotorcykelMærker[$j]."</h3>";
    }
    
    
 //   foreach ($MotorcykelMærker as $currentElement) {
  //      echo "<h3>".$currentElement."</h3>";
 //   }
    
    
    ?>
</body>
</html>