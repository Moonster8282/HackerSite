<?php 
ob_start();
session_start();
  include("./header/first.php");
  $page = $_GET['page'];
  if($page == "login"){
  include("./member/login.php");
  }
  else if($page == "login_chk"){
  include("./member/login_chk.php");
  }
  else if($page == "join"){
  include("./member/join.php");
  }
  else if($page == "join_chk"){
  include("./member/join_chk.php");
  }
  else if($page == "me"){
  include("./member/me.php");
  }
  else if($page == "logout"){
  include("./member/logout.php");
  }
  else if($page == "photo"){
  include("./bigboard/photo/photo.php");
  }
  else if($page == "board"){
  include("./bigboard/board/board.php");
  }
  else if($page == "video"){
  include("./bigboard/video/video.php");
  }
  else if($page == "write"){
  include("./bigboard/board/write.php");
  }
  else if($page == "write4"){
  include("./newboard/4/write.php");
  }
  else if($page == "writeup"){
  include("./bigboard/board/writeup.php");
  }
  else if($page == "writeup4"){
  include("./newboard/4/writeup.php");
  }
  else if($page == "send"){
  include("./bigboard/board/send.php");
  }
  else if($page == "pass"){
  include("./bigboard/board/pass.php");
  }
  else if($page == "pass4"){
  include("./newboard/4/pass.php");
  }
  else if($page == "delete"){
  include("./bigboard/board/check.php");
  }
  else if($page == "delete4"){
  include("./newboard/4/check.php");
  }
  else if($page == "mini1"){
  include("./newboard/1/go/jk/upload/index.php");
  }
  else if($page == "mini2"){
  include("./newboard/2/go/jk/upload/index.php");
  }
  else if($page == "mini3"){
  include("./newboard/3/go/jk/upload/index.php");
  }
  else if($page == "board4"){
  include("./newboard/4/board.php");
  }
  else if($page == "board5"){
  include("./newboard/5/board.php");
  }
  else if($page == "board6"){
  include("./newboard/6/board.php");
  }
  else if($page == "administrator"){
  include("./administrator/alogin.php");
  }
  else if($page == "alogin_chk"){
  include("./administrator/alogin_chk.php");
  }
  else if($page == "alogout"){
  include("./administrator/alogout.php");
  }
  else if($page == "ame"){
  include("./administrator/ame.php");
  }
  else if($page == "apass"){
  include("./administrator/apass.php");
  }
  else if($page == "aboard"){
  include("./administrator/aboard.php");
  }
  else if($page == "answer"){
  include("./answer.php");
  }
  else {
?>
    <h3>Hack</h3>
    <p><img src="css/images/ma/k_04.jpg" width="430" style="position:top;"></p>
    <script language="javascript">
    function example() {
      var url = "스크립트";
      alert(url + "작용이 됩니다!");
      }
    </script>
    <button
    type="button"
    style="color: #ccc; background:gray; font-size:1em; border-radius:0.1em; padding:3px 10px;"
    onclick="javascript:example()">자바스크립트!
    </button>
<?php
  }
  include("./header/last.php");
?>
