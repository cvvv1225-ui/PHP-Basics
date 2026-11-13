<?php

$str = "나는 한국인이다";
// str_replace("바꿀문자열","바뀐문자열", "대상문자열");
$str1 = str_replace("미국인", "한국인", $str);
echo $str1;

// is_int(); 정수 판별
// is_float(); 실수 판별
// is_numeric();

$x = 3;

if(is_numeric($x)){
    echo "숫자입니다";
}else {
    echo "숫자가 아니다";
}


$x = 33.8;
if(is_float($x)){
    echo "x는 정수다";
} else{
    echo "x는 실수가 아니다";
}

?>