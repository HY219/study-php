<!doctype html>
<html>
<body>
  <h1>String & String Operator</h1>
    <?php
      echo " Hello world"; //작은따음표(' ') or 큰따음표(" ") ->문자
      echo ' Hello world<br>';  //문자열 ''안에 <html태그> 가능.
      echo " Hello 'w'orld";
      //echo " Hello "w"orld";  //error
      echo " Hello \"w\"ord"; //\뒤에 있는 기호는 일시적으 제 역할을 잃고 문자로 사용
    ?>

  <h2>concatenation operator</h2>
    <?php
      echo " Hello"."world";  //.으로 두개의 문자열을 합할 수 있다.(.연산자를 이용해 좌항 우항을 결합해 하나의 문자열로 나타냄.)
    ?>

  <h2>String length function</h2>
  <?php
  //php string length 검색(문자의 길이 알아내기)
    echo strlen("Hello world");
  ?>
</body>
</html>
