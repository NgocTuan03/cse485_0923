<?php
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
    65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    
    // tính tổng các số trong mảng
    $total = array_sum($numbers);

    // đếm số phần tử trong mảng
    $cout = count($numbers);

    //tính trung bình 
    $average = $total/$cout;

    echo "Trung bình: " . $average;

    // số lớn hơn trung bình 
    echo " <br> Các số lớn hơn số trung bình là:";
    $sumTB = 0;
    foreach ($numbers as $ktra) {
        if ($ktra > $average){
             $sumTB = $ktra ;
        }
        echo $sumTB .";";
    }

?>