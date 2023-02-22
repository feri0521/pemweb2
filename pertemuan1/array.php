 <?php
 // Array index
 $animals = ['kambing', 'kucing', 'ayam'];

 // Mengakses semua array
 foreach($animals as $animal){
    echo $animal . '<br>';
 }

 // array assosiatif
 $studen = [
    'name' => 'peri maulanan',
    'major' => 'informatics',
    'mage' => 3
 ];

 echo   $studen['name'];