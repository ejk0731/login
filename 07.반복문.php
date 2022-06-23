<?php
/*
    JS와 동일
        1. for
        2. while
        3. do/while
            while의 조건이 false가 나와도 일단 한번은 동작

            do {
                ...
            } while(조건)

        4. foreach
            foreach(배열 as 매 바퀴마다 저장할 변수) { }
            unset(변수);

            *foreach가 끝나면 unset으로 foreach 안에서 사용하던 변수를 삭제


*/
        $arr = array("값1","값2","값3","값4"); 

        foreach($arr as $value) {
            echo "현재값은 {$value} 입니다.<br>";
        }
        unset($value);
        



?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script> 
        let input = prompt("국어점수 입력");
        do {
            if(input <= 0) {
                console.log("잘못 입력했슈")
                input = prompt("국어점수 입력");
            }
            else {
                console.log("오케이")
            }

        } while(input < 0)

    ////////////////////////////////////////

        // let input = prompt("국어점수 입력");
        // while(input < 0) {
        //     console.log("잘못 입력했슈")
        //     input = prompt("국어점수 입력");
        // }
        // console.log("오케이")

    ////////////////////////////////////////
        // let chk = true
        // while(chk) {
        //     let input = prompt("국어점수 입력");
        //     if(input <= 0) {
        //         console.log("잘못 입력했슈")
        //     }
        //     else {
        //         console.log("오케이")
        //         chk = false
        //     }
        // }

    </script> -->
</body>
</html>