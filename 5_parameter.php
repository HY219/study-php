<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
<!--
  url을 통해 입력값을 전달받고, 그것을 출력하는 방법

    안녕하세요. egoing님
    http://127.0.0.1/parameter.php ->parameter.php 라는 php 어플리케이션
    http://127.0.0.1/parameter.php?name=egoing ->parameter.php 라는 php 어플리케이션의 name은 egoing이다
    http://127.0.0.1/parameter.php?name=leezche ->parameter.php 라는 php 어플리케이션의 name은 leezche이다
    http://127.0.0.1/parameter.php?name=leezche&address=ABC

  ?뒤의 값=파라미터=입력값(들이 옴)
  & (앤퍼센트)= 입력값을 구분할 때 사용하는 구분자
-->

    안녕하세요. <?php echo $_GET['name'];//url로 넘어온 name의 값 ?>님
    <!--  입력값을 url로 주게 됨(url에 ?name=engoing 과 같은 값을 입력하면 name자리에 engoin이 입력됨.)  -->

    <!--안녕하세요. ***에 사시는..-->
    안녕하세요. <?php echo $_GET['address']; ?>에 사시는...



  </body>
</html>
