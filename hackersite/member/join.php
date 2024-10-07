<script language="javascript">

function post(path, params, method) {
    method = method || "post";

    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    for(var key in params) {
        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", key);
        hiddenField.setAttribute("value", params[key]);

        form.appendChild(hiddenField);
    }

    document.body.appendChild(form);
    form.submit();
}

function check() {
  var id =  document.getElementById("uid").value;
  var pw =  document.getElementById("upw").value;
  var pw2 =  document.getElementById("upw2").value;
  var name =  document.getElementById("uname").value;
  var gender =  document.getElementById("ugender").value;
  var birthday =  document.getElementById("ubirthday").value;
  var phone =  document.getElementById("uphone").value;
  var hobby =  document.getElementById("uhobby").value;
  var email =  document.getElementById("uemail").value;
if(id != "" && pw != "" && pw2 != "" && pw == pw2 && name != "" && gender != "" && birthday != "" && phone != "" && hobby != "" && email != "" ) {
  post("./member/join_chk.php", {"uid": id, "upw": pw, "uname": name, "ugender": gender, "ubirthday": birthday, "uphone": phone, "uhobby": hobby, "uemail": email});
} else {
  alert("입력값에 문제가 있습니다.");
}

}
</script>
    <h3>Join</h3>
    <p>
      <table>
      <tr><td>아이디</td><td><input type="text" name="uid" id="uid" required></td>
      <td rowspan="3"><img src="css/images/ma/login.jpg" width="270" style="margin-left: 20px; margin-top: -38px; position:fixed;"></td></tr>

      <tr><td>비번</td><td colspan="2"><input type="password" name="upw" id="upw" required></td></tr>
      <tr><td>비번확인</td><td colspan="2"><input type="password" name="upw2" id="upw2" required></td></tr>

      <tr><td>이름</td><td colspan="2"><input type="text" name="uname" id="uname" required></td></tr>
      <tr><td>성별</td><td colspan="2"><input type="text" name="ugender" id="ugender" required></td></tr>
      <tr><td>생년월일</td><td colspan="2"><input type="text" name="ubirthday" id="ubirthday" required></td></tr>
      <tr><td>전화번호</td><td colspan="2"><input type="text" name="uphone" id="uphone" required></td></tr>
      <tr><td>취미</td><td colspan="2"><input type="text" name="uhobby" id="uhobby" required></td></tr>
      <tr><td>이메일</td><td colspan="2"><input type="text" name="uemail" id="uemail" required></td></tr>
      <tr><td colspan="2"><button onclick="javascript:check()" style="width: 100%; height: 30px" disabled>가입하기</button></td></tr>
      </table>
    </p>
