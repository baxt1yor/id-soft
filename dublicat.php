<?php
	// function duplicat($word){
	// 	$res = "";
	// 	$str = str_split(strtolower($word));
	// 	for ($i=0; $i < count($str); $i++) { 
	// 		if (array_search($str[$i], $str, true)) {
	// 			$res .= "(";
	// 		}else{
	// 			$res .= ")";
	// 		}
	// 	}
	// 	return $res;
	// }
	// // $word = readline();
	// $ress = duplicat("recede");
	// echo $ress;

// function get_average($a) {
//   $res = 0;
//   $len = sizeof($a);
//   if(empty($a)){
//     return;
//   }else{
//     for($i = 0; $i < sizeof($a); $i++){
//       $res += $a[$i];
//     }
//   }
//   return intval($res/$len);
// }


// echo get_average([1, 1, 1, 1, 1, 1, 1, 2]);

function reverseWords($str) {
  $str = strrev($str);
  
  
  return $str; // reverse those words
}

echo reverseWords("hello world!");



echo $reversed_s = join(' ',array_reverse(explode(' ',"Hello World")));
?>