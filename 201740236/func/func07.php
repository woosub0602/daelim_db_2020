<?php
//함수 선언은 호출 전 후 모두 가능


if (function_exists("hello")) {
    echo "hello 함수가 존재하네용.";
} else {
   // echo "hello 함수가 뭐야? 첨들어요.";

function hello($name="ㅋㅋㅋㅋ")
//매개변수 $name
{
echo "안녕하세요. <br>"; // BR태그로 다음줄 전송
 print "머림머학교의";
  print $name. "입니다. <BR>"; 
    return true;
}
}
hello();
hello("최재혁");
hello("최재혁");