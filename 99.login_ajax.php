<?php 
    session_start();
    include '99.db_conn.php';

    $id = $_GET['_id'];
    $pw = $_GET['_pw'];

    $sql = "select * from test_member where id='".$id."' and pw='".$pw."'";

    $result = mysqli_query($conn, $sql); // 검은창에 열쇠(conn) 이랑 할일(sql) 가져가서 엔터 쳐!!
    $row = mysqli_fetch_array($result);  // 결과중 컬럼들 떼고 알맹이만 row에 저장
    $result_count = mysqli_num_rows($result); // 결과가 총 몇줄이나 있냐?


    $data['sql'] = $sql;
    $data['id'] = $row['id']; // row에 담긴값 중에 id값을 data 박스에 넣기
    $data['pw'] = $row['pw'];
    $data['name'] = $row['name'];
    $data['result_count'] = $result_count;

    if($result_count == 1) {
        $_SESSION['M_ID'] = $row['id'];
        $_SESSION['M_NAME'] = $row['name'];
    }

 
    mysqli_close($conn);
    echo json_encode($data); // JS에 data 라는 박스 넘겨주기
?>