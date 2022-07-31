<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body>
    <!-- 첫번째화면(main-window)에서 넘어가면
    main window none으로 처리하고 chatting window로 넘어가는걸로 -->
    <div id="window" >
        <div id="main-window">
            <div class="title-container">
                <div class="main-title">어서오세요</div>
            </div>
            <div class="char-container">
                <div class="char-desc">choose your character and name</div>
                    <div class="char-select-name">
                        <div class="char-select">
                            <div class="first-row">
                                <div class="char" id="char1" onclick="charClick(this)"><img src="img/스포아.png" alt=""></div>
                                <div class="char" id="char2" onclick="charClick(this)"><img src="img/빨간달팽이.png" alt=""></div>
                                <div class="char" id="char3" onclick="charClick(this)"><img src="img/슬라임.png" alt=""></div>
                                <div class="char" id="char4" onclick="charClick(this)"><img src="img/리본돼지.png" alt=""></div>
                            </div>
                            <div class="second-row">
                                <div class="char" id="char5" onclick="charClick(this)"><img src="img/주황버섯.png" alt=""></div>
                                <div class="char" id="char6" onclick="charClick(this)"><img src="img/초록버섯.png" alt=""></div>
                                <div class="char" id="char7" onclick="charClick(this)"><img src="img/파란버섯.png" alt=""></div>
                                <div class="char" id="char8" onclick="charClick(this)"><img src="img/뿔버섯.png" alt=""></div>
                            </div>
                        </div>
                        <div class="char-name">
                            <input id="nameinput" type="text" maxlength='4'>
                            <button id="startbutton">Start</button>
                        </div>
                    </div>
            </div>
        </div>
        <div id="chatting-window" class="none">
           <div class="chatting-container">
            <div class="game-window">
                <div class="card" id="card1"></div>
                <div class="card" id="card2"></div>
                <div class="card" id="card3"></div>
                <div class="card" id="card4"></div>
                <div class="card" id="card5"></div>
                <div class="card" id="card6"></div>
                <div class="card" id="card7"></div>
                <div class="card" id="card8"></div>
                <div class="card" id="card9"></div>
                <div class="card" id="card10"></div>
                <div class="card" id="card11"></div>
                <div class="card" id="card12"></div>
                <div class="card" id="card13"></div>
                <div class="card" id="card14"></div>
                <div class="card" id="card15"></div>
                <div class="card" id="card16"></div>
                <div class="card" id="card17"></div>
                <div class="card" id="card18"></div>
                <div class="card" id="card19"></div>
                <div class="card" id="card20"></div>
                <div class="card" id="card21"></div>
                <div class="card" id="card22"></div>
                <div class="card" id="card23"></div>
                <div class="card" id="card24"></div>
                <div class="card" id="card25"></div>
                <div class="card" id="card26"></div>
                <div class="card" id="card27"></div>
                <div class="card" id="card28"></div>
                <div class="card" id="card29"></div>
                <div class="card" id="card30"></div>

            </div>
            <div class="char-chatting-window">
                <div class="char-window">
                    <div class="entered-char" id="first-char">
                        <div class="entered-char-img">
                            <img src="" alt="" id="char-img-1">
                        </div>
                        <div class="entered-char-name" id="char-name-1"></div>
                        <div class="entered-char-score"></div>
                    </div>
                    <div class="entered-char" id="second-char">
                        <div class="entered-char-img">
                            <img src="" alt="" id="char-img-2">
                        </div>
                        <div class="entered-char-name" id="char-name-2"></div>
                        <div class="entered-char-score"></div>
                    </div>
                    <div class="entered-char" id="third-char">
                        <div class="entered-char-img">
                            <img src="" alt="" id="char-img-3">
                        </div>
                        <div class="entered-char-name" id="char-name-3"></div>
                        <div class="entered-char-score"></div>
                    </div>
                    <div class="entered-char" id="fourth-char">
                        <div class="entered-char-img">
                            <img src="" alt="" id="char-img-4">
                        </div>
                        <div class="entered-char-name" id="char-name-4"></div>
                        <div class="entered-char-score"></div>
                    </div>

                </div>
                <div class="gamestart">START</div>
                <div class="chat-window-container">
                    <div id="chat-window"></div>
                    <div id="chat-input-container">
                        <input type="text" id="chat-input">
                        <button id="chat-input-send">전송</button>
                    </div>
                </div>
            </div>
           </div>
        </div>
    </div>
    <!-- <div class="wrapper">
        <div class="user-container">
            대화명: <input type="text" id="nickname">
        </div>
        <div class="display-container">
            <ul class="chatting-list"></ul>
        </div>
        <div class="input-container">
            <input type="text" class="chatting-input">
            <button class="send-button">전송</button>
        </div>
    </div> -->
    <!-- <script src="/socket.io/socket.io.js"></script> -->
    <!-- <script src="js/chat.js"></script> -->
    <!-- <script src="js/test.js"></script> -->
    <!-- <script src="js/index.js"></script> -->
    <script src="js/client.js"></script>
    <script src="js/app1.js"></script>
    <script src="js/test.js"></script>
    

</body>
</html>