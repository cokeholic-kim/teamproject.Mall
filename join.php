<?php
    include_once "./include/header.php"
?>
<div class="join">
    <h2>회원가입</h2>
    <div>
        <form action="../process/join_process.php" method="post">
            <div>
                <p>이름</p> 
                <input type="text" name="username">
            </div>
            <div>
                <p>ID</p> 
                <input type="text" name="userid">
            </div>
            <div>
                <p>PW</p> 
                <input type="password" name="userpw">
            </div>
            <div>
                <p>비밀번호재확인</p> 
                <input type="password" name="userpwch">
            </div>
            <div>
                <p>연락처</p> 
                <input type="text" name="usertel">
            </div>
            <p>
                <button type="submit" onclick="location.href='join_.php'">회원가입</button>
                <button type= "reset">취소</button>
            </p>
        </form>
    </div>
</div>
<?php
    include_once "./include/footer.php"
?>