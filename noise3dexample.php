<?

$smooth = 42;
$smooth = 100;
$gridsize = $smooth;
$count = 0;

?>
<style>
    .block{
        display: inline-block;
        width: <?= 50/$smooth*10 ?>px;
        height: <?= 50/$smooth*10 ?>px;
        background-color : #000000;
    }
    </style>
<?php
include('../Perlin.php');
use \Perlin\Noise3d;

$bob = new Noise3d(1290);

for($y=0; $y<$gridsize; $y+=1) {
    for ( $x = 0 ; $x < $gridsize ; $x += 1 ) {
        $num = $bob->noise( $x , $y , 0 , $smooth );
        $num = round( $num * 100 );
        if($num>2){
            $color = 'black';
        }else{
            $color = 'blue';
            $num = 2;
        }
        echo '<div class="block " style="background-color:'.$color.';" >';

        echo '</div>';
    }
    echo '<br />';
}
