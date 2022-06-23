<?php
    /*JS 자료형
        1) 문자
        2) 숫자
        3) boolean
---------------------------------------
    php 자료형
        1) 문자 - string
        2) 숫자 - 정수(int)
                  실수(float)
        3) boolean
        4) 배열 - array
        5) 객체 - object

    자료형 확인 - var_dump(자료)
                (JS의 typeof() 와 비슷하지만 결과값까지 나옴)    
*/
            $a = 1;
            var_dump($a); // => int(1)

            $b = 1.1;
            var_dump($b); // => float(1.1)
            
            $bc = "hello";
            var_dump($bc); // => string(5) "hello

?>