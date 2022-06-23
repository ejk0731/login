<?php
/* 
    php에서는 $ 기호를 사용해서 변수를 선언한다.

    - 변수명 생성규칙 -
    1. 특수문자 안됨
    2. 빈칸 금지(두번째 단어 첫글자 대문자, _ 로 연결)
    3. 예약어 ex) $this
    4) 대소문자 구분
        ex) $tmp = 10;
            $Tmp 
*/  
    let tmp = 10;
    console.log(tmp)

    $num = 10;
    $tmp = "헬로";

    echo "tmp: ".$tmp.$num;

?>