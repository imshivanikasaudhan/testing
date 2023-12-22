<h1>Prime No.</h1>

<?php
$MyNum = 17;
$count = 0;

for($i = 1; $i < $MyNum; $i++) {
  if($MyNum % $i == 0){
    $count++;
    break;
  }
}

if ($count == 1){
  echo $MyNum." is a prime number.";
} else {
  echo $MyNum." is not a prime number.";
}
?>
