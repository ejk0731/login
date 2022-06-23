<?php

    1) db 연결 - pdo()
                 mysqli_connect(host, username, pw, db이름, port) - server에 연결하는 함수

                 검은창 들어감
                 ex) $conn = mysqli_connect('localhost', 'bitstudy', 'QhrtmqQhrtmq123!', 'bitstudy')
    
    2) 쿼리문 실행
            mysqli_query($conn,   $sql쿼리)


?>