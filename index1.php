<?php // php 시작 태그

// c언어에서 출력은 == prinntf("내용");
// Java에서 출력은 == System.out.println("내용");

//
/* */
#

echo "Hello world";

$num = 123; // 변수는 $변수명으로 선언한다.
var_dump($num); // 변수 혹은 상수의 자료형을 알려준다.

$str = "문자열";
var_dump($str);

define("TEST",10); // 상수를 지정하는 define 함수
const TEST1 = 11; // 함수를 저장하는 const 자료형지정 사용
echo TEST1, "<br>"; // 온점 혹은 반점으로 동시출력 할 수 있다.

if($num > 100) {
    echo "참", "<br>";
}
else {
    echo "거짓", "<br>";
}

for($i=0; $i<10; $i++){
    echo $i, "<br>";
}

echo rand(0, 10);

?>