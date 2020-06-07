<?php
$n = "\n";
echo 'Task 1' . $n;

$a = rand(0,1000000);
echo $a, $n;


echo 'Task 2' . $n;
$count = 0;
for ($i=$a; $i>=1; $i=$i/10) {
    $count++;
};

for ($i=$count-1;  $i>=0; $i--) {
    $num = mb_substr($a, $i, 1);
    $arr[] = $num;
    echo $num;
};
echo $n;


echo 'Task 3' . $n;
$sum = 0;
for ($i=0; $i<$count; $i++) {
    $sum = $sum + $arr[$i]; 
};
echo $sum, $n;


echo 'Task 4' . $n;
$pro = 1;
for ($i=0; $i<$count; $i++) {
    $pro = $pro * $arr[$i]; 
};
echo $pro, $n;


echo 'Task 5' . $n;
$max = 0;
$min = $sum;
for ($i=0; $i<$count; $i++) {
    if ($min > $arr[$i]) {
        $min = $arr[$i];
    }
    if ($max < $arr[$i]) {
        $max = $arr[$i];
    }
}
echo $max, $n;
echo $min, $n;


echo 'Task 6' . $n;
$ch = [];
for ($i=0; $i<$count; $i++) {
    if ($arr[$i] > 0) {
    if ($arr[$i]%2 == 0) {
        $ch[] = $arr[$i];
    }
}
}
print_r($ch);
echo $n;

echo 'Task 7' . $n;
$nch = [];
for ($i=0; $i<$count; $i++) {
    if ($arr[$i] > 0) {
        if ($arr[$i]%2 != 0) {
            $nch[] = $arr[$i];
        }
    }
}
print_r($nch);
echo $n;


echo 'Task 8' . $n;
$arrn = [];

for ($i=0; $i<$count; $i++) {
    if ($arr[$i] > 0) {
        if ($arr[$i]%$arr[$i] == 0 && $arr[$i]%2 != 0 && $arr[$i] != 9) {
            $arrn[] = $arr[$i];
        }
    } 
}
print_r($arrn);


echo 'Task 9' . $n;

$arr1 = [];
for ($i=0; $i<30; $i++) {
    $arr1[$i] = [];
    for ($j=0; $j<20; $j++) {
        for ($a=0; $a<10; $a++) {
        $arr1[$i][$j][$a] = rand(0, 20);
        }
    }
}
//print_r($arr1);
//echo $n;


echo 'Task 10' . $n;

for ($i=0; $i<30; $i++) {
    for ($j=0; $j<20; $j++) {
        for ($a=0; $a<10; $a++) {
        
        arsort($arr1[$i][$j]);
        }
    }
}

//print_r($arr1);


echo 'Task 11' . $n;
$arr2 = [];
$arr3 = [];
for ($i=0; $i<30; $i++) {
    for ($j=0; $j<20; $j++) {
        $arr2[$i][$j] = $arr3[$i][$j] = array_sum($arr1[$i][$j]);
    };
    arsort($arr3[$i]);
     foreach ($arr3[$i] as $key => $value) {
         $arr3[$i][$key] = $arr1[$i][$key];
    }
};

//print_r($arr3);



echo 'Task 12' . $n;
$arr4 = [];
$arr4 = [];
for ($i=0; $i<30; $i++) {
    for ($j=0; $j<20; $j++) {
        $arr4[$i] = array_sum($arr2[$i]);
    };
    arsort($arr4);
    foreach ($arr4 as $key => $value) {
        $arr4[$key] = $arr1[$key];
   };

};
//print_r($arr4);



echo 'Task 13' . $n;
$string = file_get_contents('./text.txt');
$pattern = '/[A-ZА-Я]{1}[а-яa-z]{1,}/u';
$arr6 = [];
$arr5 = [];
preg_match_all($pattern, $string, $arr5);

for ($i=0; $i<5; $i++) {
    $arr6[$i] = [];
    for ($j=0; $j<10; $j++) {
        
        $key = array_rand($arr5[0]);
        $arr6[$i][$j] = $arr5[0][$key];
        unset($arr5[$key]);

        
    }
}
print_r($arr6);





