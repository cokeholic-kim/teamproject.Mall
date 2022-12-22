<?php
    include_once "./include/header.php"
?>
<div id="loginpage">
    <h2>LOGIN</h2>
    <form action="../process/login_process.php" method="post">
        <div id="swrap">
            <div id="inputs">
                <input type ="text" name="id" placeholder="ID"><br/>
                <input type="password" name= "pw" placeholder="PW">
                <button type="submit">로그인</button>
            </div>
        </div>
        <p class="forgot">
            <a href="">아이디찾기</a>
            <a href="">비밀번호 찾기</a>
        </p>
        <p class="login_join">
            <button type="button" onclick="location.href='join.php'">회원가입</button>
        </p>
    </form>
</div>
<?php
    include_once "./include/footer.php"
?>