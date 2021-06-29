<!-- Created by Maiko Bergman and Guy Puts -->

<head>
    <style>
        body {
            background-image: url('/img/fakevideo.png');
            background-size: 100% 100%;
            background-repeat:no-repeat;
        }
        .container {
            height: 100%;
            width: 100%;
            position: relative;
            border: none;
        }

        .vertical-center {
            margin-left: 50%;
            position: absolute;
            width: 100%;
            height: 20%;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        .inputbox {
            margin-top: -265px;
            margin-left: -780px;
        }
        #submitbutton {
            margin-top: -2px;
            height: 25px;
            width: 83px;
        }
        .stream {
            height: 790px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="vertical-center">
            <div class="inputbox">
                <img src="videocap.jpg" class="stream">
            </div>
        </div>
    </div>
</body>
</html>
