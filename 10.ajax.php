<?php
// = ajax = 
//     JS의 라이브러리
//     비동기 방식
//     클라이어트와 서버간의 데이터를 주고 받는 기술


    $.ajax({
        url: "정보를 요청(전달)할 php 파일 경로",
        data: { 키:값, 키:값, ... },
        type: 'GET 또는 POST',
        dataType: "json",
        success: function() {
            // db 잘 다녀왔을때
        },
        error: function(){ 
            // db 못 다녀왔을때
        }
    })

?>