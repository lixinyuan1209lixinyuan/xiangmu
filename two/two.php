<?php
	// $a = 153;

	// $o = $a%10; 
	// // echo  $o;
	// $t = ($a%100-$o)/10;
	// // echo $t;
	// $th = ($a-$a%100)/100;
	// // echo $th;
	// $sum = $o*$o*$o+$t*$t*$t+$th*$th*$th;
	// echo "&nbsp;&nbsp;".$sum;
	function str($min,$max){
		// echo $max;
		for ($i=$min; $i < $max; $i++) { 
			// echo $i;break;
			$o = $i%10; 
			// echo  $o;break;
			$t = ($i%100-$o)/10;
			// echo $t;
			$th = ($i-$i%100)/100;
			// echo $th;break;
			$sum = $th*$th*$th+$t*$t*$t+$o*$o*$o;
			// echo "&nbsp;&nbsp;".$sum;
			if($i == $sum){
				echo "&nbsp;&nbsp;".$i;
			}
		}
			

	}
	str(100,999);

?>