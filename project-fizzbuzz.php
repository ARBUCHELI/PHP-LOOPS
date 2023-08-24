<?php
/*$counter = 1;
while ($counter <= 100) {
  if ($counter % 15 === 0) {
    echo "FizzBuzz";
  } elseif ($counter % 3 === 0) {
    echo "Fizz";
  } elseif ($counter % 5 === 0) {
    echo "Buzz";
  } else {
    echo $counter;
  }
  echo "\n";
  $counter++;
}*/

$output = [];
for ($count = 1; $count <= 100; $count++) {
  if ($count % 15 === 0) {
    array_push($output, "FizzBuzz");
  } elseif ($count % 3 === 0) {
    array_push($output, "Fizz");
  } elseif ($count % 5 === 0) {
    array_push($output, "Buzz");
  } else {
    array_push($output, $count);
  }
}

/*foreach ($output as $value) {
  echo $value . "\n";
}*/

/*foreach ($output as $value) {
  if ($value === "Fizz") {
    continue;
  }
  echo "$value\n";
}*/

foreach ($output as $value) {
  if ($value === "Fizz") {
    continue;
  } elseif ($value === "FizzBuzz") {
    echo "$value\n";
    break;
  }
  echo "$value\n";
}