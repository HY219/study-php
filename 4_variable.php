<!doctype html>
<html>
<body>
  <h1>Variable</h1>
  <?php
  //변수 //php variables 검색
  $a = 1; //변수이름 앞에 반드시 $
  echo $a+1;

  ?>

  <h1>Why need variable</h1>
  <?php
  //변수로 지정해 두면 일일이 변경할 필요 없음.
  $name = "aliqua";
  echo" Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.".
  " Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna $name.".
  " Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ".$name.
  " Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna"  //echo"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
  // Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
  //atom에서 lorem이라고 작성하면 랜덤텍스트 출력 해줌.
  ?>
</body>
</html>
