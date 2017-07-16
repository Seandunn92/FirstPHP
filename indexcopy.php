<!DOCTYPE html>
<html>
  <head>
    <title>Test Page</title>
  </head>
  <body>
    <p>
      <?php
      echo 'Hello World/n';


      ?>
    </p>
    <p>
    <?php

    $numberOfKittens = 5;
    echo 'There are ';
    //echo "\n";
    echo $numberOfKittens;
    echo ' kittens';
    ?>
  </p>
  <p>
  <?php

$numberOfHairs=4;
echo 'There are ';
echo $numberOfHairs *$numberOfKittens;
echo ' hairs';
  ?>
</p>

<p>
<?php

$firstName = 'Sean';
$lastName = 'Dunn';
$fullName = $firstName . ' ' . $lastName;
echo 'The full name is ' .'<br>'. $fullName . '<br>';


function callName($FirstName, $LastName){
return $FirstName  . ' ' . $LastName;

}


echo callName("Susan" , "Yakes");
echo "<br>";


$temp = 42;

if($temp<50 && $temp>30){
  echo "Put on a coat";
}
else if($temp<=30 && $temp>=0){
  echo "Wear a coat and hat";

}
else if ($temp <0){
  echo ("Stay inside");
}
else {
  echo "Wear whatever you want";
}

$numBeers= 99;
while ($numBeers > 0){
  echo $numBeers . "bottles of beer" . 'on the wall' . '<br>';
  $numBeers -=9;
}

for($ourNum =9; $ourNum>0; $ourNum--){
  echo "Here is the " . $ourNum . " table<br>";
for ($i = 1; $i<=12; $i++){

echo $ourNum . "*" . $i . '=';
    echo  $ourNum * $i;
    echo "<br>";
  }
}

$favFoods = array (
  'Sean' => 'Lasagna',
  'Susan' => 'Rice',
  'Dave' => 'Hamburger'
);
 var_dump($favFoods);
 echo "<br>";


foreach ($favFoods as $name => $food){
  echo $name . "'s favorite food is " . $food . "<br>";
}

for($i=1; $i<=100; $i++){
  if($i%15==0){
    echo 'FizzBuzz';
  }
  else if($i%3==0){
    echo 'Fizz';
  }
  else if($i%5 == 0){
    echo 'Buzz';
  }
  else {
    echo $i;
  }
  echo "<br>";

}

?>


</p>



  </body>
</html>
