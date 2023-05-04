<html>
 <head>
  <title>Тестируем PHP</title>
 </head>
 <body>

<?php 
function addDigits(int $digit) {

    $result = 0;
    $str = "{$digit}";

    for ($i = 0; $i <= strlen($str); $i++) {
    $currentNum = (int) $str[$i];
    $result += $currentNum;
    }
    
    if ($result > 9){
        
    }



}

print_r(addDigits(919));

?>
 </body>
</html>
