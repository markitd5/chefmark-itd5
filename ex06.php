<?php

$score = 1;
if ($score >= 80) {
    echo "4";
} elseif ($score >= 75) {
    echo "3.5";
} elseif ($score >= 70) {
    echo "3";
} elseif ($score >= 65) {
    echo "2.5";
} elseif ($score >= 60) {
    echo "2";
} elseif ($score >= 55) {
    echo "1.5";
} elseif ($score >= 50) {
    echo "1";
} else {
    echo "0";
}

?>