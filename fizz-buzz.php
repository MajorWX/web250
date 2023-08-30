<?php


for ($i=1; $i < 100 ; $i++) { 
  //Is divisible by 3
  if ($i % 3 == 0)
  {
    //Is divisible by 3 and 5
    if ($i % 5 == 0)
    {
      echo 'FizzBuzz';
    }
    else
    {
      echo 'Fizz';
    }
    //Is divisible by 5
  }
  else if ($i % 5 == 0)
  {
    echo 'Buzz';
  }
  else
  {
    echo $i;
  }

  echo '<br>';
}