<!-- 
    1. 테이블 - 정보를 저장하는 각각의 박스
        0) 테이블 리스트 불러오기 -> show tables;

        1) 생성
            - create table 테이블이름 (
                컬럼1 타입,
                컬럼2 타입,
                ...
                컬럼10 int(10)
                컬럼11 varchar(255)
            );
            *int(10) - 정수형 숫자 10자리 까지 커버
                       0 기준으로 음수 양수 10자리의 숫자
                       unsigned를 쓰면 양수로만 10자리 가능
            *varchar(255) - 문자 255byte 까지의 양을 저장
            longtext - 용량이 varchar보다 클때 사용
            auto_increment - 자동으로 값 증가 i++ 같은거

            primary key - 해당 컬럼에서 중복 안되게. (메인키)

            
            create table test_member (
                seqno int(10) unsigned not null auto_increment, 
                id varchar(255) not null ,
                pw varchar(255) not null ,
                uName varchar(255) not null ,
                uEmail varchar(255) not null ,

                primary key(seqno)
            );


        2) 삭제
            drop table 테이블이름
            ex) drop table test_member


        3) 정보확인 - desc 테이블이름


    2. 레코드 
        1) 추가 
            - insert into 테이블이름 value ('값1', '값2', '값3'.... )
            ex) insert into test_member value ('', 'abcd1', 'pw1', '이름1', '이메일');
                insert into test_member value ('', 'abcd2', 'pw2', '이름2', '이메일');
                insert into test_member value ('', 'abcd3', 'pw3', '이름3', '이메일');
        2) 조회
            - 전체 조회: select * from 테이블이름
            - 일부 조회: select 필드명1, 필드명2, ... from 테이블이름
            - 특정조건 조회: select * from 테이블이름 where 필드명 = "값"

        3) 삭제
            - delete from 테이블이름 where 필드명 = "값"
            ex) delete from test_member where 필드명 = "값"

        4) 수정
            - update 테이블이름 set 필드명="바꿀내용" where 필드명=값;
            ex) update test_member set uEmail="tttt@naver.com" where id='abcd2';
    3. 컬럼 변경
        1) 추가 
            - alter table 테이블명 add 컬럼명 타입
            ex) alter table test_member add uPhone varchar(255) not null;
        2) 삭제
            - alter table 테이블명 drop 컬럼명
            ex) alter table test_member drop uPhone ;
        3) 컬럼 타입 수정
            - alter table 테이블명 modify 컬럼명 타입
        4) 컬럼명 수정
            - alter table 테이블명 change 기존컬럼명 새컬럼 컬럼타입
                ex) alter table 테이블명 change 타입
 -->