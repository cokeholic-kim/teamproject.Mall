<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
    <script src="https://kit.fontawesome.com/a5fe8c9c01.js" crossorigin="anonymous"></script>
    <script  defer src="./javascript/hiddenbanner.js"></script>
</head>
<body>
    <div id="wrap">
        <header>
            <div id="header">
                <div id="logo">    
                    <i class='fas fa-bolt'></i>
                    <a href="index.php">
                        <h1>LIGHTNING SHOP</h1>
                    </a>
                </div>
                <div id="searcBox">
                    <input type="text" class="searchInput" name="searchInput">
                    <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                </div>
                <div>
                    <ul id="headerList">
                        <li><a href="#">장바구니</a></li>
                        <li><a href="#">마이페이지</a></li>
                        <li><a href="login.php">로그인</a></li>
                    </ul>
                </div>
            </div>
            <div id="menuBar">
                <div id="innerMenu">
                    <nav>
                        <i class="fa-sharp fa-solid fa-bars"></i>
                    </nav>
                    <ul id="mainList">
                        <li><a href="">블리자드 기획전</a></li>
                        <li><a href="">리그 오브 레전드</a></li>
                        <li><a href="">배틀그라운드</a></li>
                        <li><a href="">게임 굿즈</a></li>
                    </ul>
                    <div id="hiddenMenu">
                        <ul id="hiddenList">
                            <li><a href="#">블리자드 기획전</a></li>
                            <li><a href="#">리그오브 레전드</a>
                                <div class="subMenu">
                                    <ul class="subList">
                                        <li><a href="#">abc</a></li>
                                        <li><a href="#">def</a></li>
                                        <li><a href="#">ghi</a></li>
                                        <li><a href="#">ghi</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">배틀그라운드</a></li>
                            <li><a href="#">게임 굿즈</a>
                                <div class="subMenu">
                                    <ul class="subList">
                                        <li><a href="#">a</a></li>
                                        <li><a href="#">b</a></li>
                                        <li><a href="#">c</a></li>
                                        <li><a href="#">ghi</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
