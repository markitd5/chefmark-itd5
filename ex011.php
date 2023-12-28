<?php
if (!empty($_GET['score'])){
    $score = $_GET['score'];
if ($score > 100) {
    echo "over";
}   elseif($score >= 80) {
    echo "a";
}
 elseif ($score >= 70) {
    echo "b";
}
 elseif ($score >= 60) {
    echo "c";
} 
 elseif ($score >= 50) {
    echo "d";
} else {
    echo "f";
}
}////////end
?>

