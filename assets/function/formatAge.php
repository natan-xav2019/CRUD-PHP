<?php 

function formatAge(int $age) {
    if($age == 1) {
        return "$age ano";
    } elseif($age > 1 || $age == 0){
        return "$age anos";
    }
}
?>