<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--http://127.0.0.1/index.php?id=HTML-->
    <h1>WEB</h1>
    <ol>
      <li><a href="index.php?id=HTML">HTML</a></li>
      <li><a href="index.php?id=CSS">CSS</a></li>
      <li><a href="index.php?id=Javascript">Javascript</a></li>
    </ol>
    <h2>
      <?php
        echo $_GET['id'];
        //사이트의 url은 href에 의해서 변경되고,
        //php코드는 url에서 id값을 가져와서 그대로 출력해줌. (url의 파라미터값을 가져옴)
       ?>
    </h2>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

      <!--url이 바뀔 때 본문의 내용도 바뀌도록-->
      <?php
        // echo data/id 값에 해당하는 파일의 내용.
        // php file read function 검색
        //echo file_get_contents("data/HTML");
        echo file_get_contents("data/".$_GET['id']);
        //실제로는 위와 같이 작성하면 안됨._보안적 문제
       ?>

       <!--반복문, isset-->
       <?php
       //php check value exists 검색
       //isset($a)->변수가 존재할 때 true가 된다.
       //isset($a, $b)->$a, $b가 모두 선언되어 있다면 true.
        if(isset($_GET['id'])){
          echo $_GET['id'];
        }
        else{
          echo "Welcome";
        }
       ?>
  </body>
</html>
