<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>function</h1>
    <?php
      $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.



      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."; //변수 str

      echo $str;  //$str 출력
     ?>

    <h2>strlen()</h2>
    <?php
      echo strlen($str);  //$str의 길이(글자수) 출력
     ?>

     <h2>nl2br</h2>
     <?php
      echo nl2br($str);  //$str의 nl(new line)을 br로 바꿔서 출력.(enter띄어쓴 부분 적용해서 출력, 자동줄바꿈)
      ?>
  </body>
</html>
