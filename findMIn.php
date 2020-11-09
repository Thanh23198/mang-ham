<?php
$arr = array( 1,2,3 );
$min = $arr[ 0 ];
for ( $i = 0 ; $i < count ($arr ); $i ++) {
    if($arr[$i] < $min ) {
        $min = $arr[$i];
    }
}
echo  "Gia tri nho nhat la" . $min ;
