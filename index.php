<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PAWNO-CRMP.RU</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="css/cube.css">
<link rel="stylesheet" href="css/loader.css">
<style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Roboto+Mono:100&subset=cyrillic');

        html,
        body {
            font-family: 'Roboto Mono', monospace;
            background: #212121;
            height: 100%;
			overflow: hidden;
        }

        .container {
            height: 100%;
            width: 100%;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .text {
            font-weight: 100;
            font-size: 28px;
            color: #fafafa;
        }

        .lite-ad {
            font-weight: 100;
            font-size: 28px;
            color: #fafafa;
        }

        .dud {
            color: #757575;
        }
    </style>

</head>
<body>
<iframe src="media/crime.mp3" allow="autoplay" id="audio" style="display:none" id="bg" volume="0.333"></iframe>
<center><div class="wrap">
<div class="cube">
<div class="front">
excountrp.ru/forum
</div>
<div class="back">
    pawno-crmp.ru
</div>
<div class="top">
</div>
<div class="bottom">
</div>
<div class="left">
    vk.com/pawno.crmp
</div>
<div class="right">
    DEVELOPER:<br>
    Jaliba_Baron<br>
    Mirex
</div>
</div>
</div></center>
<div class="container">
</br><div class="text"></div>
</div>
<script src="js/jquery.js"></script>
<script src="js/index.js"></script>
<script src="js/title.js"></script>
<script>
var phrases = ['♥ PAWNO-CRMP.RU ♥', '♥ DEVELOPER Jaliba Baron ♥', '♥ DEVELOPER Mirex ♥', '♥ vk.com/pawno.crmp ♥']
var el = document.querySelector('.text');
var fx = new TextScramble(el);
var counter = 0;
var next = function next() {
	fx.setText(phrases[counter]).then(function () {
            setTimeout(next, 1000);
    });
    counter = (counter + 1) % phrases.length;
};
next();
</script>
</body>
</html>
