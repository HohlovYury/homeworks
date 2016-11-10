<?php
$i = 0;
$count_3=0;
while ($i <= 333) {


    if (strpos($i, '3') !== false) {
        echo ">>> ";

        // ====================================
        $letter_array = str_split($i);
        $count_letter = 0;
        foreach ($letter_array as $letter) {
            if ($letter == 3) {
                $count_letter++;
                $count_3++;
            }
        }
        echo "[".$count_letter."] ";
        // ====================================

    }


    echo $i."<br>";
    $i++;
}
echo "<b>".$count_3."</b>";
