<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <title>Acsendo y el Invierno laboral</title>
      <meta property="og:url"                content="https://www.acsendo.com/GoT/index.html" />
      <meta property="og:type"               content="website" />
      <meta property="og:title"              content="¡Westeros Inc necesita tu ayuda!" />
      <meta property="og:description"        content="Con la llegada del invierno el fin de Westeros Inc parece acercarse, ¡evítalo con Acsendo!" />
      <meta property="og:image"              content="https://www.acsendo.com/GoT/GoT/ImagenRedesGoT1.png" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
      <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/jquery.validate.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,700" rel="stylesheet">
      <link rel="stylesheet" href="Font-Awesome-master/css/font-awesome.min.css">

      <link rel="icon" href="https://www.acsendo.com/wp-content/blogs.dir/39/files/2017/07/cropped-favicon-01-01-32x32.png" sizes="32x32" />
      <link rel="icon" href="https://www.acsendo.com/wp-content/blogs.dir/39/files/2017/07/cropped-favicon-01-01-192x192.png" sizes="192x192" />
      <link rel="apple-touch-icon-precomposed" href="https://www.acsendo.com/wp-content/blogs.dir/39/files/2017/07/cropped-favicon-01-01-180x180.png" />
      <style>
         img {
            -webkit-touch-callout: none;
            /* iOS Safari */
            -webkit-user-select: none;
            /* Safari */
            -khtml-user-select: none;
            /* Konqueror HTML */
            -moz-user-select: none;
            /* Firefox */
            -ms-user-select: none;
            /* Internet Explorer/Edge */
            user-select: none;
            /* Non-prefixed version, currently
                  supported by Chrome and Opera */
         }

         .select_disable {
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
         }

         body {
            overflow: hidden;
            font-family: 'Nunito', sans-serif;
            font-weight: 400;
            cursor: url('shoot.png'), auto !important;
         }

         #game_wrapper {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 15px;
            left: 0;
            overflow: hidden;
         }

         #tutorial_wrapper {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 15px;
            left: 0;
            overflow: hidden;
            z-index: 5;
         }

         .running_div,
         img {
            -webkit-user-drag: none;
            -khtml-user-drag: none;
            -moz-user-drag: none;
            -o-user-drag: none;
            user-drag: none;
         }

         .white_walker:active .char {
            opacity: 1;
            -webkit-transition: transform .2s ease-in-out;
            -khtml-transition: transform .2s ease-in-out;
            -moz-transition: transform .2s ease-in-out;
            -o-transition: transform .2s ease-in-out;
         }

         .health {
            position: absolute;
            top: -2vh;
            left: 0;
            height: .5vh;
            width: 3vh;
            margin-left: -1.5vh;
            background-color: azure;
            padding: 2px;
            border-radius: 4px;
            box-shadow: 0 1px 1px 1px rgba(0, 0, 0, .25);
         }

         .boss_health {
            position: absolute;
            top: -2vh;
            left: 0;
            height: .5vh;
            width: 5vh;
            margin-left: -1.5vh;
            background-color: azure;
            padding: 2px;
            border-radius: 4px;
            box-shadow: 0 1px 1px 1px rgba(0, 0, 0, .25);
         }

         .healthbar {
            position: relative;
            width: 100%;
            height: 100%;
            background-color: red;
            border-radius: 2px;
         }

         .acsendo_logo {
            position: absolute;
            opacity: 0;
            top: 0;
            left: 0;
            height: 3vh;
            width: 3vh;
            margin-left: -1.5vh;
         }

         .running_div img:not(.acsendo_logo) {
            width: auto;
            height: 100%;
         }

         .star {
            top: -2vh;
            left: 0;
            margin-top: -1vh;
            margin-left: -4.5vh;
            width: 3vh !important;
            height: 3vh !important;
            position: absolute;
            z-index: 3;
         }

         #wall_patt,
         .wall_patt {
            width: auto;
            height: 100%;
            position: absolute;
            display: block;
            top: 0;
            /*left:-100vh;*/
         }

         #char1 {
            position: absolute;
            width: auto;
            height: 15.8vh;
            left: 88.7vh;
            top: 28.7vh;
         }

         #char2 {
            position: absolute;
            width: auto;
            height: 17.5vh;
            left: 114.7vh;
            top: 57.2vh;
         }

         #char3 {
            position: absolute;
            width: auto;
            height: 20.2vh;
            left: 129vh;
            top: 54.5vh;
         }

         #char4 {
            position: absolute;
            width: auto;
            height: 18.2vh;
            left: 167.5vh;
            top: 28.5vh;
         }

         #char5 {
            position: absolute;
            width: auto;
            height: 18.9vh;
            left: 182.9vh;
            top: 63.7vh;
         }

         #char6 {
            position: absolute;
            width: auto;
            height: 16.5vh;
            left: 211.9vh;
            top: 17.5vh;
         }

         #char8 {
            position: absolute;
            width: auto;
            height: 24.9vh;
            left: 276.9vh;
            top: 55.7vh;
         }

         #char9 {
            position: absolute;
            width: auto;
            height: 15vh;
            left: 230.8vh;
            top: 21.9vh;
         }

         #char10 {
            position: absolute;
            width: auto;
            height: 17.2vh;
            left: 221.3vh;
            top: 22.8vh;
         }

         #char11 {
            position: absolute;
            width: auto;
            height: 16.7vh;
            left: 224.9vh;
            top: 78.8vh;
         }

         #char12 {
            position: absolute;
            width: auto;
            height: 20.5vh;
            left: 217vh;
            top: 75.1vh;
         }

         #char13 {
            position: absolute;
            width: auto;
            height: 16.7vh;
            left: 233.9vh;
            top: 78.8vh;
         }

         #char14 {
            position: absolute;
            width: auto;
            height: 17vh;
            left: 291vh;
            top: 20.7vh;
         }

         #char15 {
            position: absolute;
            width: auto;
            height: 14.7vh;
            left: 298.8vh;
            top: 23vh;
         }

         #char16 {
            position: absolute;
            width: auto;
            height: 14.9vh;
            left: 305.2vh;
            top: 22.8vh;
         }

         #char17 {
            position: absolute;
            width: auto;
            height: 17.7vh;
            left: 301.6vh;
            top: 55.7vh;
         }

         #char18 {
            position: absolute;
            width: auto;
            height: 25.7vh;
            left: 344.4vh;
            top: 11.1vh;
         }

         #char19 {
            position: absolute;
            width: auto;
            height: 18.1vh;
            left: 318.7vh;
            top: 30.9vh;
         }

         #char20 {
            position: absolute;
            width: auto;
            height: 18.1vh;
            left: 332.5vh;
            top: 30.9vh;
         }

         #char21 {
            position: absolute;
            width: auto;
            height: 15.7vh;
            left: 338.2vh;
            top: 58.8vh;
         }

         #char22 {
            position: absolute;
            width: auto;
            height: 15.7vh;
            left: 342.6vh;
            top: 58.8vh;
         }

         #char23 {
            position: absolute;
            width: auto;
            height: 17.3vh;
            left: 345.3vh;
            top: 75.7vh;
         }

         #char24 {
            position: absolute;
            width: auto;
            height: 16.7vh;
            left: 370.2vh;
            top: 23.1vh;
         }

         #char25 {
            position: absolute;
            width: auto;
            height: 18.8vh;
            left: 388.9vh;
            top: 27.4vh;
         }

         #char26 {
            position: absolute;
            width: auto;
            height: 16.1vh;
            left: 399vh;
            top: 30vh;
         }

         #char27 {
            position: absolute;
            width: auto;
            height: 16.8vh;
            left: 405.7vh;
            top: 29.2vh;
         }

         #char28 {
            position: absolute;
            width: auto;
            height: 16.7vh;
            left: 380.6vh;
            top: 60vh;
         }

         #char29 {
            position: absolute;
            width: auto;
            height: 16.4vh;
            left: 384.7vh;
            top: 60.5vh;
         }

         #char30 {
            position: absolute;
            width: auto;
            height: 14.6vh;
            left: 371.3vh;
            top: 62.1vh;
         }

         #char31 {
            position: absolute;
            width: auto;
            height: 19.3vh;
            left: 401.7vh;
            top: 58.7vh;
         }

         #char32 {
            position: absolute;
            width: auto;
            height: 19.3vh;
            left: 411.6vh;
            top: 58.7vh;
         }

         #char33 {
            position: absolute;
            width: auto;
            height: 18.3vh;
            left: 391.2vh;
            top: 76.4vh;
         }

         #char34 {
            position: absolute;
            width: auto;
            height: 16.8vh;
            left: 419.2vh;
            top: 18.7vh;
         }

         #char35 {
            position: absolute;
            width: auto;
            height: 16.8vh;
            left: 431.3vh;
            top: 18.7vh;
         }

         #char36 {
            position: absolute;
            width: auto;
            height: 17.2vh;
            left: 469.4vh;
            top: 18.8vh;
         }

         #char37 {
            position: absolute;
            width: auto;
            height: 15.3vh;
            left: 476.7vh;
            top: 21.8vh;
         }

         #char38 {
            position: absolute;
            width: auto;
            height: 20.2vh;
            left: 490.3vh;
            top: 14.2vh;
         }

         #char39 {
            position: absolute;
            width: auto;
            height: 17.2vh;
            left: 455.3vh;
            top: 30.6vh;
         }

         #char40 {
            position: absolute;
            width: auto;
            height: 18.2vh;
            left: 430.1vh;
            top: 55.8vh;
         }

         #char41 {
            position: absolute;
            width: auto;
            height: 17.2vh;
            left: 497.2vh;
            top: 30.1vh;
         }

         #char42 {
            position: absolute;
            width: auto;
            height: 17.2vh;
            left: 508.2vh;
            top: 30.1vh;
         }

         #char43 {
            position: absolute;
            width: auto;
            height: 19.4vh;
            left: 475.5vh;
            top: 54.6vh;
         }

         #char44 {
            position: absolute;
            width: auto;
            height: 19.4vh;
            left: 489.1vh;
            top: 54.6vh;
         }

         #char45 {
            position: absolute;
            width: auto;
            height: 19.4vh;
            left: 502.1vh;
            top: 54.6vh;
         }

         #char46 {
            position: absolute;
            width: auto;
            height: 17.5vh;
            left: 437.1vh;
            top: 78.1vh;
         }

         #char47 {
            position: absolute;
            width: auto;
            height: 15.5vh;
            left: 444.3vh;
            top: 80.7vh;
         }

         #char48 {
            position: absolute;
            width: auto;
            height: 16.7vh;
            left: 465.7vh;
            top: 77.1vh;
         }

         #char49 {
            position: absolute;
            width: auto;
            height: 16.7vh;
            left: 460.5vh;
            top: 77.1vh;
         }

         #char50 {
            position: absolute;
            width: auto;
            height: 15.7vh;
            left: 508.2vh;
            top: 79.3vh;
         }

         #char51 {
            position: absolute;
            width: auto;
            height: 17.5vh;
            left: 516.7vh;
            top: 77.6vh;
         }

         #char52 {
            position: absolute;
            width: auto;
            height: 15.7vh;
            left: 500vh;
            top: 79.3vh;
         }

         #char53 {
            position: absolute;
            width: auto;
            height: 18.6vh;
            left: 546.4vh;
            top: 22.5vh;
         }

         #char54 {
            position: absolute;
            width: auto;
            height: 16.8vh;
            left: 579.1vh;
            top: 30.7vh;
         }

         #char55 {
            position: absolute;
            width: auto;
            height: 16.8vh;
            left: 589.5vh;
            top: 30.7vh;
         }

         #char56 {
            position: absolute;
            width: auto;
            height: 18.3vh;
            left: 527.6vh;
            top: 59.7vh;
         }

         #char57 {
            position: absolute;
            width: auto;
            height: 18.3vh;
            left: 542.3vh;
            top: 59.7vh;
         }

         #char58 {
            position: absolute;
            width: auto;
            height: 15.8vh;
            left: 565.7vh;
            top: 55vh;
         }

         #char59 {
            position: absolute;
            width: auto;
            height: 15.8vh;
            left: 572vh;
            top: 55vh;
         }

         #char60 {
            position: absolute;
            width: auto;
            height: 17.6vh;
            left: 563.2vh;
            top: 76.7vh;
         }

         #char61 {
            position: absolute;
            width: auto;
            height: 17.6vh;
            left: 574vh;
            top: 76.7vh;
         }

         #char62 {
            position: absolute;
            width: auto;
            height: 17.3vh;
            left: 606.9vh;
            top: 22vh;
         }

         #char63 {
            position: absolute;
            width: auto;
            height: 15.3vh;
            left: 614.1vh;
            top: 24.6vh;
         }

         #char64 {
            position: absolute;
            width: auto;
            height: 17.3vh;
            left: 634.3vh;
            top: 22vh;
         }

         #char65 {
            position: absolute;
            width: auto;
            height: 15.2vh;
            left: 629.1vh;
            top: 24.6vh;
         }

         #char66 {
            position: absolute;
            width: auto;
            height: 19.1vh;
            left: 653.2vh;
            top: 26vh;
         }

         #char67 {
            position: absolute;
            width: auto;
            height: 18.6vh;
            left: 599.4vh;
            top: 55.1vh;
         }

         #char68 {
            position: absolute;
            width: auto;
            height: 18.2vh;
            left: 632.5vh;
            top: 52.7vh;
         }

         #char69 {
            position: absolute;
            width: auto;
            height: 18.2vh;
            left: 662.4vh;
            top: 55.1vh;
         }

         #char70 {
            position: absolute;
            width: auto;
            height: 18.2vh;
            left: 618.1vh;
            top: 57.8vh;
         }

         #char71 {
            position: absolute;
            width: auto;
            height: 18.2vh;
            left: 647.5vh;
            top: 57.7vh;
         }

         #char72 {
            position: absolute;
            width: auto;
            height: 18.2vh;
            left: 632.5vh;
            top: 64.1vh;
         }

         #char73 {
            position: absolute;
            width: auto;
            height: 18.2vh;
            left: 662.5vh;
            top: 64.7vh;
         }

         #char74 {
            position: absolute;
            width: auto;
            height: 18.3vh;
            left: 600vh;
            top: 78.3vh;
         }

         #char75 {
            position: absolute;
            width: auto;
            height: 16.2vh;
            left: 610vh;
            top: 80.4vh;
         }

         #char76 {
            position: absolute;
            width: auto;
            height: 17.7vh;
            left: 616.6vh;
            top: 79vh;
         }

         #char77 {
            position: absolute;
            width: auto;
            height: 16.2vh;
            left: 650vh;
            top: 80.2vh;
         }

         .front {
            position: absolute;
            left: 0;
            top: 0;
            z-index: 1
         }

         .char {
            z-index: 2;
            -webkit-transition: transform .2s ease-in-out;
            -khtml-transition: transform .2s ease-in-out;
            -moz-transition: transform .2s ease-in-out;
            -o-transition: transform .2s ease-in-out;
         }

         .white_walker p {
            background-color: red;
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            color: white;
            padding: 0 0.35em;
            border-radius: 100%;
            text-align: center;
         }

         #hud {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            background-color: #33384f;
            z-index: 6;
            box-shadow: 0 3px 10px rgba(0, 0, 0, .2);
         }

         #bonus {
            font-weight: 700;
            color: white;
            font-size: 24pt;
            position: absolute;
            right: 170px;
            top: 0;
            text-shadow: 0 5px 0 #008967;
            -ms-transform: scale(3);
            /* IE 9 */
            -webkit-transform: scale(3);
            /* Safari */
            transform: scale(3);
            -webkit-animation: bonusAnim .3s ease-in-out infinite;
            -moz-animation: bonusAnim .3s ease-in-out infinite;
            animation: bonusAnim .3s ease-in-out infinite;
         }

         @-webkit-keyframes bonusAnim {
            0% {
               text-shadow: 0 5px 0 #e53846
            }
            33% {
               text-shadow: 0 5px 0 #00abf7
            }
            66% {
               text-shadow: 0 5px 0 #fc8238
            }
            100% {
               text-shadow: 0 5px 0 #e53846
            }
         }

         @-moz-keyframes bonusAnim {
            0% {
               text-shadow: 0 5px 0 #e53846
            }
            33% {
               text-shadow: 0 5px 0 #00abf7
            }
            66% {
               text-shadow: 0 5px 0 #fc8238
            }
            100% {
               text-shadow: 0 5px 0 #e53846
            }
         }

         @keyframes bonusAnim {
            0% {
               text-shadow: 0 5px 0 #e53846
            }
            33% {
               text-shadow: 0 5px 0 #00abf7
            }
            66% {
               text-shadow: 0 5px 0 #fc8238
            }
            100% {
               text-shadow: 0 5px 0 #e53846
            }
         }

         .highscore {
            -webkit-animation: highScoreAnim .3s ease-in-out infinite;
            -moz-animation: highScoreAnim .3s ease-in-out infinite;
            animation: highScoreAnim .3s ease-in-out infinite;
         }

         @-webkit-keyframes highScoreAnim {
            0% {
               color: #e53846
            }
            33% {
               color: #00abf7
            }
            66% {
               color: #fc8238
            }
            100% {
               color: #e53846
            }
         }

         @-moz-keyframes highScoreAnim {
            0% {
               color: #e53846
            }
            33% {
               color: #00abf7
            }
            66% {
               color: #fc8238
            }
            100% {
               color: #e53846
            }
         }

         @keyframes highScoreAnim {
            0% {
               color: #e53846
            }
            33% {
               color: #00abf7
            }
            66% {
               color: #fc8238
            }
            100% {
               color: #e53846
            }
         }

         .special {
            width: 64px;
            height: 64px;
            margin-right: 10px;
            float: left;
            position: relative;
            cursor: pointer;
            border: 3px solid white;
         }

         #laser {
            background-color: aqua;
         }

         #atomic {
            background-color: aquamarine;
         }

         #minas {
            background-color: azure;
         }

         #atomic_radius {
            position: absolute;
            width: 350px;
            height: 350px;
            border-radius: 100%;
            background-color: rgba(255, 0, 0, .3);
            border: 3px solid red;
            display: none;
         }

         #wall,
         .wall {
            height: 29%;
            display: block;
            width: 100%;
            background-color: #f7f8f9;
         }

         #rodape,
         .rodape {
            height: 2%;
            display: block;
            width: 100%;
            background-color: #5e616a;
         }

         #floor1,
         .floor1 {
            height: 20%;
            display: block;
            width: 100%;
            background: #e2dcd5;
         }

         #corridor,
         .corridor {
            height: 8%;
            display: block;
            width: 100%;
            background: #f7f3f0;
         }

         #floor2,
         .floor2 {
            height: 41%;
            display: block;
            width: 100%;
            background: #e2dcd5;
         }

         #bodymovin,
         #bodymovin2 {
            position: absolute;
            width: auto;
            height: 21vh;
            display: block;
            overflow: hidden;
            transform: translate3d(0, 0, 0);
            margin: auto;
            top: 36vh;
            left: 33%;
            z-index: 6;
         }

         #popup {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .75);
            z-index: 7;
         }

         .popup_module {
            width: 100vh;
            height: 65vh;
            border-radius: 15px;
            margin-left: 15vw;
            top: 18vh;
            position: relative;
            margin: auto;
            background-color: #33384f;
            text-align: center;
            color: white;
            box-shadow: 0 3px 10px rgba(0, 0, 0, .3);
            background: #33384f url('wavves.png');
            background-size: 100% auto;
            background-repeat: no-repeat;
            background-position: center bottom;
         }

         #intro_screen {
            background-color: #ffffff;
            color: #333851;
            width: 550px;
            height: 80vh;
            top: 10vh;
            display: none;
         }

         .intro_slide {
            padding-top: 10vh;
         }

         .intro_slide img {
            width: 65%;
         }

         #intro_screen .intro_slide p {
            font-size: 2vh;
            padding: 0 5em;
         }

         #intro_screen .intro_slide h1 {
            font-size: 24pt;
            margin: 0;
         }

         .intro2,
         .intro3,
         .intro4 {
            display: none;
         }

         .intro3 {
            padding-top: 5vh !important; 
         }
         #intro_nav {
            position: absolute;
            bottom: 20px;
            height: 20px;
            width: auto;
            margin-left: 50%;
            transform: translateX(-50%)
         }

         .intro_bola {
            width: 13px;
            height: 13px;
            border-radius: 10px;
            float: left;
            margin: 10px;
            background-color: #b8c2e0;
            cursor: pointer;
            -webkit-transition: background-color .6s;
            /* Safari */
            transition: background-color .6s;
         }

         .intro_bola.active {
            background-color: #4c5470;
         }

         .intro_custom_text {
            display: none;
         }

         #char_select {
            top: 15vh;
            height: 75vh;
            width: 120vh;
         }

         .button {
            border-radius: 10px;
            color: white;
            cursor: pointer;
            float: left;
            width: 4vh;
            height: 4vh;
            margin-top: 5px;
            margin-bottom: 10px;
            margin-left: 10px;
            margin-right: 10px;
            transition: all .2s ease-out;
         }

         .button img {
            position: relative;
            width: 70%;
            height: 70%;
            left: 15%;
            top: 50%;
            transform: translateY(-50%);
         }

         .button.large {
            width: 25vh;
            height: 6vh;
            margin-left: 17.5vh;
            margin-right: 17.5vh;
            display: inline-block;
            margin-bottom: 2vh;
         }
         .button.large img {
            left: 10% !important;
         }

         input.button.large {
            margin-left: 0 !important;
            margin-right: 0 !important;
            background-color: #05c9a3;
            box-shadow: 0 5px 0 #037c59;
         }

         input.button.large:hover {
            margin-top: 10px;
            margin-bottom: 30px;
            box-shadow: 0 0 0 #037c59;
         }

         input.button.large:active {
            background-color: #037c59;
         }

         .button.large p {
            line-height: 6vh;
            vertical-align: middle;
            margin: 0;
         }

         .button.large img {
            display: inline;
            float: left;
            width: 30px;
            height: 30px;
         }

         .button.large.twitter {
            background-color: #61b0eb;
            width: 12vh;
            margin-right: .5vh;
            box-shadow: 0 5px 0 #3e8ecb;
            overflow: hidden;
         }

         .button.large.twitter:hover {
            margin-top: 10px;
            margin-bottom: calc(2vh - 5px);
            box-shadow: 0 0 0 #3e8ecb;
         }

         .button.large.twitter:active {
            background-color: #3e8ecb;
         }

         .button.large.facebook {
            background-color: #566ea8;
            width: 12vh;
            margin-left: .5vh;
            box-shadow: 0 5px 0 #415993;
            overflow: hidden;
         }

         .button.large.facebook:hover {
            margin-top: 10px;
            margin-bottom: calc(2vh - 5px);
            box-shadow: 0 0 0 #415993;
         }

         .button.large.facebook:active {
            background-color: #415993;
         }

         #score {
            width: 150px;
            text-align: center;
            line-height: 4vh;
            position: absolute;
            right: 0;
            top: 0;
            background-color: #00c780;
            box-shadow: 0 5px 0 #008967;
            cursor: default;
         }

         #pause,
         .pause {
            margin-left: 20px;
            background-color: #00abf7;
            box-shadow: 0 5px 0 #2a7a9f;
         }

         #pause:hover {
            margin-top: 10px;
            margin-bottom: -5px;
            box-shadow: 0 0 0 #2a7a9f;
         }

         .start {
            background-color: #05c9a3;
            box-shadow: 0 5px 0 #037c59;
            margin-left: 50% !important;
            transform: translateX(-50%);
            width: 250px !important;
         }

         .start.button.large p {
            margin: 0;
            line-height: 6vh;
         }

         .button.large.ranking {
            background-color: #05c9a3;
            box-shadow: 0 5px 0 #037c59;
            margin-left: 50% !important;
            transform: translateX(-50%);
            width: 25vh !important;
         }

         .button.large.ranking:hover {
            margin-top: 10px;
            margin-bottom: calc(2vh - 5px);
            box-shadow: 0 0 0 #037c59;
         }

         .button.large.ranking:active {
            background-color: #037c59;
         }

         .start:hover {
            margin-top: 10px;
            margin-bottom: calc(2vh - 5px);
            box-shadow: 0 0 0 #037c59;
         }

         .start:active {
            background-color: #037c59;
         }

         .pause:hover {
            margin-top: 10px;
            margin-bottom: calc(2vh - 5px);
            box-shadow: 0 0 0 #2a7a9f;
         }

         #pause:active,
         .pause:active {
            background-color: #2a7a9f;
         }

         #mute,
         .muter {
            background-color: #00ccd6;
            box-shadow: 0 5px 0 #008c94;
         }

         .muter {
            position: absolute;
            right: 30px;
            top: 20px;
         }

         .muter img {
            left: 0;
         }

         #mute:hover,
         .muter:hover {
            margin-top: 10px;
            margin-bottom: -5px;
            box-shadow: 0 0 0 #008c94;
         }

         #mute:active,
         .muter:active {
            background-color: #008c94;
         }

         #restart,
         .restart {
            margin-right: 20px;
            background-color: #fc8238;
            box-shadow: 0 5px 0 #d76e2f;
         }

         #restart:hover {
            margin-top: 10px;
            margin-bottom: -5px;
            box-shadow: 0 0 0 #d76e2f;
         }

         .restart:hover {
            margin-top: 10px;
            margin-bottom: calc(2vh - 5px);
            box-shadow: 0 0 0 #2a7a9f;
         }

         #restart:active,
         .restart:active {
            background-color: #d76e2f;
         }

         .quit {
            background-color: #e53846;
            box-shadow: 0 5px 0 #b02b3e;
         }

         .quit:hover {
            margin-top: 10px;
            margin-bottom: calc(2vh - 5px);
            box-shadow: 0 0 0 #b02b3e;
         }

         .quit:active {
            background-color: #b02b3e;
         }

         .logo {
            height: 2.5vh;
            width: auto;
            position: absolute;
            left: 50%;
            margin-top: 2vh;
            transform: translate(-50%, 0);
         }

         .subtext {
            text-align: center;
            margin-top: 1.5em;
         }

         .smalltext {
            font-size: 10pt;
         }

         #pause_menu,
         #share_screen,
         #share_form,
         #fame_screen,
         #challenge {
            display: none;
            width: 60vh;
            height: 70vh;
            top: 10vh;
         }

         #fame_screen span .entry {
            width: 100%;
            margin-bottom: 10px;
            float: left;
            font-size: 1.7vh;
         }
         #fame_screen > span > div:nth-child(1){
            display: flex;
            align-items: center;
            justify-content: center;
         }
         #fame_screen > span > div:nth-child(1):before {
            display: inline-block;
            content: "";
            height: 36px;
            width: 30px;
            background-image: url(trhone.png);
            background-size: 25px;
            background-repeat: no-repeat;
         }
         #fame_screen > span > div:nth-child(1) > .name {
            margin-left: 10px;
            font-weight: 600;
            font-size: 15px;
         }
         #fame_screen > span > div:nth-child(1) > .score {
            margin-left: 10px;
            margin-right: 0px;
            font-weight: 600;
            font-size: 15px;
         }
         #fame_screen h1 {
            padding-top: 3vh;
            margin: 14px 0;
         }

         #fame_screen .bottom_list .entry:first-child {
            margin-top: 2em;
         }

         #fame_screen .bottom_list .entry:last-child {
            margin-bottom: 2em;
         }

         #fame_screen span .entry .name {
            float: left;
            margin-left: 100px;
         }

         #disclaimer {
            position: absolute;
            background-color: #008c94;
            text-align: left;
            padding: 30px 10px;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
            border-top-left-radius: 0 !important;
            border-bottom-left-radius: 0 !important;
            padding: 10px 30px;
            padding-right: 15px;
            display: none;
            width: 20%;
            top: 25%;
            left: calc(50% + 30vh);
            transform: translateX(-100%);
            height: auto !important;
         }

         #disclaimer h3 {
            font-size: 14pt;
            color: white;
         }

         #disclaimer p:not(.small) {
            font-size: 11pt;
            color: white;
         }

         #disclaimer p.small {
            font-size: 8pt;
            color: #33384f;
         }

         #fame_screen span .entry .score {
            float: right;
            margin-right: 100px;
         }

         #fame_screen span .entry.player_one {
            -webkit-animation: highScoreAnim .3s ease-in-out infinite;
            -moz-animation: highScoreAnim .3s ease-in-out infinite;
            animation: highScoreAnim .3s ease-in-out infinite;
         }

         #share_form {
            width: calc(60vh - 100px);
            height: calc(70vh - 100px);
            padding: 50px;
            text-align: left;
         }

         #share_form form input,
         #share_form form select {
            width: 100%;
            font-size: 12pt;
            padding-top: 1em;
            padding-bottom: 1em;
            padding: .5em;
            width: calc(100% - 1em);
            border: 0;
            margin-bottom: 1em;
            border-radius: 2px;
         }

         #share_form form input.button.large {
            border-radius: 10px;
         }

         #share_form form input[type=submit],
         #share_form form select {
            width: 100%;
         }

         #share_form form select {
            width: 100%;
            padding: 5px 35px 5px 5px;
            font-size: 16px;
            height: 2.5em;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: white;
            background: url(imgs/select_arrow.png) 97% / 3% no-repeat #eee;
            border-radius: 2px;
         }


         /* CAUTION: IE hackery ahead */

         #share_form form select::-ms-expand {
            display: none;
            /* remove default arrow on ie10 and ie11 */
         }

         #share_form #conversion-got-6277fc9cfc259c4784db,
         #share_form #conversion-got-6277fc9cfc259c4784db header,
         #form-container-got-6277fc9cfc259c4784db #conversion-got-6277fc9cfc259c4784db section {
            background-color: transparent !important;
            font-family: "Nunito", sans-serif !important;
            padding: 0 !transparent;
         }

         #form-container-got-6277fc9cfc259c4784db #conversion-got-6277fc9cfc259c4784db.wrapper section,
         #form-container-got-6277fc9cfc259c4784db #conversion-got-6277fc9cfc259c4784db.wrapper header {
            padding: 0 !important;
         }

         #share_form #conversion-got-6277fc9cfc259c4784db p.error_message {
            float: right !important;
            margin-top: 0 !important;
            color: #e53846 !important;
            margin-bottom: 0 !important;
            display: none !important;
         }

         #pause_menu h1 {
            line-height: 100%;
            font-size: 36pt;
            padding-bottom: 10%;
            padding-top: 20%;
         }

         #share_screen {
            background-color: white;
         }

         #form-container-got-6277fc9cfc259c4784db #conversion-got-6277fc9cfc259c4784db.wrapper header h1 {
            line-height: 100% !important;
            font-size: 5vh !important;
            color: white !important;
         }

         #form-container-got-6277fc9cfc259c4784db #conversion-got-6277fc9cfc259c4784db.wrapper header h2 {
            font-size: 2vh !important;
            color: white !important;
            line-height: 1.5em !important;
            margin-bottom: 2em !important;
         }

         #conversion-got-6277fc9cfc259c4784db form label {
            color: white !important;
            font-size: 1.5vh !important;
            padding-bottom: 0 !important;
            margin-bottom: -.5vh !important;
         }

         #conversion-got-6277fc9cfc259c4784db form input {
            height: 4vh !important;
            padding-top: 8px !important;
         }

         #form-container-got-6277fc9cfc259c4784db #conversion-got-6277fc9cfc259c4784db header h1 {
            font-family: "Nunito", sans-serif !important;
         }

         #form-container-got-6277fc9cfc259c4784db #conversion-got-6277fc9cfc259c4784db header h2 {
            font-family: "Nunito", sans-serif !important;
         }

         #conversion-got-6277fc9cfc259c4784db #conversion-form-got-6277fc9cfc259c4784db p.notice {
            display: none !important;
         }

         #form-container-got-6277fc9cfc259c4784db #conversion-got-6277fc9cfc259c4784db #conversion-form-got-6277fc9cfc259c4784db div.actions input.call_button {
            margin-left: 0 !important;
            margin-right: 0 !important;
            background-color: #05c9a3 !important;
            box-shadow: 0 5px 0 #037c59 !important;
            border-radius: 10px !important;
            height: 6vh !important;
            font-family: "Nunito", sans-serif !important;
         }

         #form-container-got-6277fc9cfc259c4784db #conversion-got-6277fc9cfc259c4784db #conversion-form-got-6277fc9cfc259c4784db div.actions input.call_button:hover {
            margin-top: 10px !important;
            margin-bottom: 30px !important;
            box-shadow: 0 0 0 #037c59 !important;
         }

         #form-container-got-6277fc9cfc259c4784db #conversion-got-6277fc9cfc259c4784db #conversion-form-got-6277fc9cfc259c4784db div.actions input.call_button:active {
            background-color: #037c59 !important;
         }

         

         #cheering_char {
            position: absolute;
            background-color: white;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            width: 100%;
            height: 50%;
         }

         #cheering_char img {
            height: 75%;
            margin-top: 10%;
         }

         #cheering_char h1 {
            position: absolute;
            top: 0;
            margin: 0;
            padding-top: .5em;
            font-size: 3vh;
            margin-left: 50%;
            transform: translateX(-50%);
            color: #33384f;
         }

         #cheering_char p {
            font-size: 1.7vh;
            padding: 1em 10vh;
            background-color: white;
            margin-top: -1.7vh;
            color: #33384f;
         }

         h1.popup_h1 {
            padding-top: .5em;
            font-size: 3vh;
            color: white;
            text-align: center;
         }

         p.popup_p {
            font-size: 1.7vh;
            padding: 1em 0;
            color: white;
            text-align: center;
         }

         #char_select h1 {
            padding-top: 2em;
            padding-bottom: 0;
            margin: 0;
         }

         #picker_wrapper {
            padding: 5vh;
            height: 50vh;
            position: relative;
            padding-left: 0;
         }

         .char_picker {
            background-color: white;
            color: #393e54;
            font-weight: 700;
            border-radius: 10px;
            width: 35%;
            height: 100%;
            position: relative;
            float: left;
            margin-left: 15%;
            cursor: pointer;
            box-shadow: 0 3px 10px rgba(0, 0, 0, .3);
         }

         .char_picker span {
            position: absolute;
            width: 71%;
            height: 100%;
            top: 0;
            left: 0;
            padding-left: 8vh;
            padding-right: 3vh;
            text-align: left;
         }

         .char_picker img {
            height: 107%;
            margin-top: -3%;
            margin-left: -110%;
            width: auto;
         }

         .char_picker .barra_habilidade {
            height: 5px;
            width: 100%;
            border-radius: 10px;
            background-color: #c6cce0;
         }

         .char_picker .nivel_habilidade {
            height: 100%;
            border-radius: 10px;
            background-color: #393e54;
            animation: 2s ease-out 0s 1 slideInFromLeft;
         }

         #jon .barra_habilidade.liderazgo {
            width: 80%;
            padding-right: 20%;
         }

         #dany .barra_habilidade.liderazgo {
            width: 100%;
         }

         #jon .barra_habilidade.trabajo {
            width: 100%;
         }

         #dany .barra_habilidade.trabajo {
            width: 80%;
            padding-right: 20%;
         }

         #jon .barra_habilidade.influencia {
            width: 80%;
            padding-right: 20%;
         }

         #dany .barra_habilidade.influencia {
            width: 60%;
            padding-right: 40%;
         }

         #jon .barra_habilidade.desarrollo {
            width: 70%;
            padding-right: 30%;
         }

         #dany .barra_habilidade.desarrollo {
            width: 90%;
            padding-right: 10%;
         }

         @keyframes slideInFromLeft {
            0% {
               width: 0;
            }
            100% {
               width: 100%;
            }
         }

         .char_picker p.char_nombre {
            font-weight: 700;
            margin-top: 2em;
            margin-bottom: .2em;
         }

         .char_picker p.char_cargo {
            font-weight: 400;
            font-size: 10pt;
            margin-top: 0;
            margin-bottom: 1.5em;
         }

         .char_picker p.habilidade {
            font-weight: 400;
            font-size: 9pt;
            margin-bottom: .5vh;
            margin-top: 1.5vh;
         }

         .char_picker .boton_seleccionar {
            color: #3ab99a;
            font-weight: 400;
            border: 2px solid #3ab99a;
            border-radius: 2em;
            text-align: center;
            padding: 4px 13px;
            display: inline;
            -webkit-transition: background-color 1s;
            /* Safari */
            transition: background-color 1s;
            position: absolute;
            bottom: 5vh;
            left: 8vh;
         }

         .char_picker:hover>span>.boton_seleccionar {
            background-color: #3ab99a;
            color: white;
         }

         .margin_bottom_20 {
            margin-bottom: 20px;
         }

         .estrellas {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: auto;
         }

         .score_bar {
            width: 100%;
            height: 5px;
            background-color: aquamarine;
         }

         .barscore {
            height: 100%;
            width: 0;
            background-color: red;
         }

         .set0 {
            height: 14.4vh;
            width: auto;
            left: 121.5vh;
            top: 9.1vh;
            position: absolute;
            opacity: 0;
            margin-top: 30px;
         }

         .set1 {
            height: 9.6vh;
            width: auto;
            left: 282.6vh;
            top: 14.7vh;
            position: absolute;
            opacity: 0;
            margin-top: 30px;
         }

         .set2 {
            height: 14.4vh;
            width: auto;
            left: 325.9vh;
            top: 9.1vh;
            position: absolute;
            opacity: 0;
            margin-top: 30px;
         }

         .set3 {
            height: 9.6vh;
            width: auto;
            left: 369.3vh;
            top: 11.4vh;
            position: absolute;
            opacity: 0;
            margin-top: 30px;
         }

         .set4 {
            height: 18.3vh;
            width: auto;
            left: 406.6vh;
            top: 4.7vh;
            position: absolute;
            opacity: 0;
            margin-top: 30px;
         }

         .set5 {
            height: 14.4vh;
            width: auto;
            left: 438.3vh;
            top: 9.1vh;
            position: absolute;
            opacity: 0;
            margin-top: 30px;
         }

         .set6 {
            height: 18.4vh;
            width: auto;
            left: 480.0vh;
            top: 5.3vh;
            position: absolute;
            opacity: 0;
            margin-top: 30px;
         }

         .set7 {
            height: 14.4vh;
            width: auto;
            left: 580.8vh;
            top: 9.1vh;
            position: absolute;
            opacity: 0;
            margin-top: 30px;
         }

         .hole {
            position: absolute;
            width: 19.5vh;
            height: 19.5vh;
            left: 70vw;
            top: 70vh;
            border-radius: 15.8vh;
            z-index: 5;
            -webkit-transition: box-shadow .6s;
            /* Safari */
            transition: box-shadow .6s;
         }

         .hole.box_shadow {
            box-shadow: 0 0 0 99999px rgba(0, 0, 0, .7);
            -webkit-box-shadow: 0 0 0 100vw rgba(0, 0, 0, .7);
            -moz-box-shadow: 0 0 0 99999px rgba(0, 0, 0, .7);
         }

         .hole h1 {
            display: none;
            cursor: auto;
            margin-top: 0;
         }

         .hidden_highscore {
            display: none;
         }

         .hole .pause.button.large.hidden {
            display: none;
            margin: 0;
            text-align: center;
         }

         .hole .pause.button.large.hidden:hover {
            margin-top: 5px;
         }

         #dummy {
            position: absolute;
            width: auto;
            height: 15.7vh;
            margin-left: 50%;
            transform: translateX(-50%);
            bottom: 0;
         }

         #dummy .acsendo_logo,
         .health {
            left: 2.5vh;
         }

         .fixed_text {
            position: absolute;
            color: white;
            width: 500px;
            transform: translate(-110%, -40%);
            margin-top: 0;
         }
         .fixed_text h1 {
            font-size: 22px;
            font-weight: 100;
         }
         .fixed_text .tip {
            display: none;
            font-size: 16px;
            font-weight: 600;
         }
         .intro_arrow.right {
            position: absolute;
            right: 0;
            top: 50%;
            cursor: pointer;
         }

         .intro_arrow.right i {
            font-size: 38pt;
            margin-top: -.5em;
            margin-right: -2em;
            color: white;
         }

         .intro_arrow.left {
            position: absolute;
            left: 0;
            top: 50%;
            cursor: pointer;
            display: none;
         }

         .intro_arrow.left i {
            font-size: 38pt;
            margin-top: -.5em;
            margin-left: -2em;
            color: white;
         }

         @media screen and (min-height: 750px) {
            .char_picker p.habilidade {
               margin-bottom: .5em;
               margin-top: 1.5em;
            }
         }

         #mobile {
            display: none;
         }

         #mobile h1 {
            position: absolute;
            top: 20%;
            transform: translateY(-50%);
            width: 100%;
            text-align: center;
         }

         @media (orientation: portrait) {
            #mobile {
               display: block;
               position: fixed;
               top: 0;
               left: 0;
               width: 100%;
               height: 100%;
               background-color: #33384f;
               z-index: 10;
               color: white;
            }
            #mobile img {
               position: absolute;
               width: 100%;
               height: auto;
               bottom: 0;
            }
         }

         #twitter-widget-0 {
            width: 25vh !important;
         }

         #twitter-widget-0 #widget {
            display: block !important;
         }

         #twitter-widget-0 .btn-o {
            width: 100% !important;
         }

         #twitter-widget-0 .btn-o a {
            width: 100% !important;
            text-align: center !important;
         }

         input.hidden {
            display: none;
         }

         iframe {
            display: none;
         }

         .cursor {
            width: 20px;
            height: 20px;
            background-color: transparent;
            border-radius: 50%;
            position: absolute;
            transition-duration: 100ms;
            transition-timing-function: ease-out;
            animation: cursorAnim .2s infinite alternate;
            pointer-events: none;
            z-index: 99999999;
         }


         /* .cursor::after {
                     content: "";
                     width: 24px;
                     height: 24px;
                     position: absolute;
                     border: 4px solid #fc8238;
                     border-radius: 50%;
                     opacity: .5;
                     top: -6px;
                     left: -6px;
                     animation: cursorAnim2 .5s infinite alternate;
                  } */

         @keyframes cursorAnim {
            from {
               transform: scale(1);
            }
            to {
               transform: scale(.7);
            }
         }

         @keyframes cursorAnim2 {
            from {
               transform: scale(1);
            }
            to {
               transform: scale(.4);
            }
         }

         @keyframes cursorAnim3 {
            0% {
               transform: scale(1);
            }
            50% {
               transform: scale(2);
            }
            100% {
               transform: scale(1);
               opacity: 0;
            }
         }

         .expand {
            animation: cursorAnim3 .5s forwards;
            border: 4px solid #fc8238;
            background-color: rgba(0, 204, 214, .6);
         }

         .popup_module_back {
            position: absolute;
            bottom: 0;
            width: 100%;
            max-width: 275px;
            display: block;
            padding: 16px 0;
            text-align: center;
         }

         .popup_module_back p {
            color: #fff;
            font-weight: bold;
            font-size: 14px;
            text-align: center;
            text-decoration: none;
         }

         .popup_module_back p:hover {
            cursor: pointer !important;
         }

         .modal-challenge {
            position: relative;
            width: 100%;
            max-width: 300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
         }
         .modal-challenge h1 {
            margin-bottom: 0;
         }

         .modal-challenge .field{
            margin-bottom: 16px;
         }

         .form-control {
            display: inline-block !important;
            background-color: #FFFFFF !important;
            vertical-align: middle !important;
            font-size: 18px !important;
            line-height: 20px !important;
            width: 100% !important;
            height: 36px !important;
            margin: 0 !important;
            padding: 5px !important;
            -webkit-border-radius: 3px !important;
            -moz-border-radius: 3px !important;
            border-radius: 3px !important;
            border: 0;
         }

         label {
            color: #969696!important;
            display: block !important;
            font-size: 10px;
            margin: 0 !important;
            padding: 0 0 5px 0 !important;
            text-align: left !important;
            text-overflow: ellipsis !important;
         }

         .btn-retar {
            margin-right: 20px;
            background-color: #fc8238;
            box-shadow: 0 5px 0 #d76e2f;
         }

         .btn-retar:hover {
            margin-top: 10px;
            margin-bottom: -5px;
            box-shadow: 0 0 0 #d76e2f;
         }

         .btn-retar:active {
            background-color: #d76e2f;
         }

         .retar_back {
            position: relative;
            text-align: center;
            margin-top: 40px;
            cursor: pointer;
         }

         #cheering_char .restart {
            position: absolute;
            left: 30px;
            top: 20px;
         }

         #cheering_char .restart img {
            left: 2%;
            top: 40%;
         }

         .customMsg {
            position: absolute;
            width: 200px;
            height: auto;
            z-index: 999999;
            right: 20px;
            bottom: 40px;
            background-color: #00c780;
            border-radius: 16px;
            padding: 8px 12px;
            -webkit-box-shadow: 0px 5px 10px 4px rgba(191,191,191,0.5);
            -moz-box-shadow: 0px 5px 10px 4px rgba(191,191,191,0.5);
            box-shadow: 0px 5px 10px 4px rgba(191,191,191,0.5);
            font-size: 22px;
            font-weight: bolder;
            color: #fff;
            text-align: center;
            animation: fadeMsg .2s;
            transform: scale(0.8);
         }


         @keyframes fadeMsg {
            from {
               transform: scale(0.8);
               opacity: 0;
            }
            to {
               transform: scale(1);
               opacity: 1;
            }
         }

         .throne {
            position: absolute;
            max-width: 200px;
            left: 10px;
         }
         .throne img {
            max-width: 80px;
         }

         .btn-ebook {
            position: relative;
            display: block;
            text-decoration: none;
            background-color: #33384f;
            border-radius: 8px;
            padding: 8px 12px;
            -webkit-box-shadow: 0px 2px 0px 1px rgba(51,56,79,0.5);
            -moz-box-shadow: 0px 2px 0px 1px rgba(51,56,79,0.5);
            box-shadow: 0px 2px 0px 1px rgba(51,56,79,0.5);
            font-size: 16px;
            font-weight: bolder;
            color: #fff;
            text-align: center;
         }

         .modal-challenge form {
            width: 100%;
         }

      </style>
      <script src="bodymovin.js"></script>
      <script>
         var tl;
         var tutTl;
         var bonusTime = new TimelineLite();
         var bonusTime2 = new TimelineLite();
         var anim;
         var animEstrellas;
         var mute = false;
         var pausable = true;
         var tutorial = true;
         var endGame = false;
         var deadCount = 0;
         var millisStart;
         var millisEnd;
         var millisMiddle;
         var millisDiscount = 0;
         
         var score;
         var bonusVentas = false;
         var bonusTecnologia = false;
         var bonusRrhh = false;
         var bonusCustomSucc = false;
         var bonusAdministracion = false;
         
         var ventasDeaths = 0;
         var tecnologiaDeaths = 0;
         var rrhhDeaths = 0;
         var customSuccDeaths = 0;
         var administracionDeaths = 0;
         
         var departamentoOrder = [];
         
         var liderDeaths = 0;
         
         var gameSetUp = {
             intro: true,
             tutorial: true,
             mute: false,
             character: 'dany',
             email: null,
             name: null,
         }

         function checkMobile(x) {
            if (x.matches) { // If media query matches
               window.location.replace("mov.html");
            } else {
               console.log('Todo va bien');
            }
         }

         var x = window.matchMedia("(max-width: 768px)")
         checkMobile(x) // Call listener function at run time
         x.addListener(checkMobile) // Attach listener function on state changes
         
         function checkSetUp() {
           const setUp = localStorage.getItem('setUpGame');
           
           if (!setUp) {
               localStorage.setItem('setUpGame', JSON.stringify(gameSetUp))
           } 
           return JSON.parse(setUp)
         }
         
         function UpdateSetUp(data) {
            console.log(data);
            localStorage.setItem('setUpGame', JSON.stringify(data))
         }
         
         function AnimCharacters() {
            $(".hole").css("cursor", "pointer");
            $("#game_wrapper").css("cursor", "pointer");
            $(".white_walker").css("cursor", "pointer").hover(function() {
                    $(this).find(".char").css("transform","scale(1.02)");
                }, function(){
                    $(this).find(".char").css("transform","scale(1)");
            });
         }
         function startTutorial(chosenChar) {
             theme.addEventListener('ended', function() {
                 this.currentTime = 0;
                 this.play();
             }, false);
             theme.play();
             theme.volume = 0.3;
         
         
             var dummyHealth = 3;
             tl = new TimelineLite();
             tutTl = new TimelineLite();
         
             game_width = $("#wall_patt").width();
             $("#popup").css("display","none");
             walkCycle(chosenChar);
             tl.to($(".running_div"), 120, {marginLeft:(-game_width)});
             setTimeout(function(){
                 tl.pause();
                 $(".hole").addClass("box_shadow");
                 anim.pause();
         
                AnimCharacters();
         
                 $(".hole h1").fadeIn(300);
                 $(".hole h2").fadeOut(100);
                 $(".hole").click(function(){
         
                     if(dummyHealth == 1) {
                         dummyHealth--;
                         triggerHealspell2()
         
                         $("#dummy").find(".health, .boss_health, .star").css("opacity","0");
         
                         $("#dummy").find(".char").attr("src", "char/char22.png");
                         $("#dummy").removeClass("white_walker");
                         TweenLite.to($("#dummy").find(".acsendo_logo"), .5, {opacity:"1", "top":"-3vh", ease: Elastic. easeOut.config( 1, 0.3), delay:.2});
                         $(".hole h2").fadeIn();
                         $(".hole h1").fadeOut(function() {
                             $(this).text("¡Bien hecho! Este colaborador está contento y motivado. Haz lo mismo con los demás").fadeIn();
                             $(".hole .pause").fadeIn();
                         });
         
                         $(".start_game").click(function(){
                             $("#tutorial_wrapper").css("display","none");
                             startGame(chosenChar);
                           
                           // Actualizo el obgeto en local Storage
                             const set = checkSetUp();
                             set.tutorial = false;
                             UpdateSetUp(set);
                         });
         
                     } else {
                         dummyHealth--;
                         triggerHit();
                         $("#dummy").find(".health .healthbar").css("width", (dummyHealth * 33) + "%");
                     }
                 });
             }, 3000);
         }
         
         function startGame(chosenChar) {
             tutorial = false;
             pausable = true;
             millisDiscount = 0;
             
             if (anim) {
               anim.destroy();
             } else {
                AnimCharacters();
                theme.addEventListener('ended', function() {
                    this.currentTime = 0;
                    this.play();
                }, false);
                theme.play();
                validateSound();
             }
             
             
             $(".running_div").css("marginLeft","0");
             tl = new TimelineLite();
             $("#bodymovin").css("z-index","0");
         
             showSpecialCursor(true);
           
             var charLength = $(".character").length;
             for (i = 1; i <= charLength; i++){
         
                 if ($("#game_wrapper > .character:nth-of-type(" + i + ").character").children('div').hasClass('health')){
                     $("#game_wrapper > .character:nth-of-type(" + i + ").character").data("hp", 3);
                 } else if ($("#game_wrapper > .character:nth-of-type(" + i + ").character").children('div').hasClass('boss_health')){
                     $("#game_wrapper > .character:nth-of-type(" + i + ").character").data("hp", 5);
                 }
         
         
                 var temp2 = $("#game_wrapper > .character:nth-of-type(" + i + ").character").find(".acsendo_logo").data("logo");
                 $("#game_wrapper > .character:nth-of-type(" + i + ").character").find(".health, .boss_health, .star").css("left",temp2 + "vh");
             }
         
             game_width = $("#wall_patt").width();
             $("#popup").css("display","none");
             walkCycle(chosenChar);
             tl.to($(".running_div"), 60, {marginLeft:(-game_width),  ease: Sine. easeIn, onComplete: function(){
                 //alert("END");
         
                 checkHighscore(chosenChar);
                 //results();
         
             }});
         }
         
         function showSpecialCursor(val) {
         
           const cursor = document.querySelector('.cursor');
         
           const show = function (e) {
               cursor.setAttribute("style", "display: block;" + "top: "+(e.pageY - 15)+"px; left: "+(e.pageX - 15)+"px;")
           }
         
           const hide = function (e) {
               cursor.setAttribute("style", "display: none;" + "top: 50vh; left: 20vw;")
           }
         
           const effect = function (e) {
               cursor.classList.add("expand");
               setTimeout(() => { cursor.classList.remove("expand") }, 300)
           }
         
           if (val) {
               document.removeEventListener('mousemove', hide);
               document.addEventListener('mousemove', show);
               document.addEventListener('click', effect);
           } else {
               document.removeEventListener('mousemove', show);
               document.removeEventListener('click', effect);
               document.addEventListener('mousemove', hide);
           }
           
         }
         function restartGame(chosenChar){
             window.location.reload();
         }
         function bonusScore(bonus, departamento) {
             triggerSuccess();
             bonusTime.kill();
             bonusTime2.kill();
             $("#bonus").remove();
             $("#bonus").css({"opacity":"1", "-webkit-transform":"scale(3)", "-moz-transform":"scale(3)", "-ms-transform":"scale(3)", "-o-transform":"scale(3)", "transform":"scale(3)", "-webkit-transform":"rotation(0)", "-moz-transform":"rotation(0)", "-ms-transform":"rotation(0)", "-o-transform":"rotation(0)", "transform":"rotation(0)"});
         
             $("#hud").append("<div id='bonus'>+" + bonus + "</div>");
             bonusTime.to($("#bonus"), .7, { scale:1, rotation:353, ease: Elastic. easeInOut.config( 1, 0.3), onComplete:function(){
                 bonusTime2.to($("#bonus"), .3, { opacity:0, ease:  Power1. easeInOut, delay: 1.2, onComplete:function(){
                     $("#hud #bonus").remove();
         
                 }});
             }});
             departamentoOrder.push(departamento);
         }
         
         function checkHighscore(chosenChar){
             pausable = false;
             endGame = true;
             showSpecialCursor(false);
             millisEnd = new Date();
            
            if (!millisStart) { millisStart = new Date(); } 

             var bonusMillis = (millisEnd.getTime()) - (millisStart.getTime());
             score = Math.floor((((bonusMillis - millisDiscount) * .001) * deadCount) + (deadCount*1000));
             $(".button.large.twitter").parent().attr("href", "https://twitter.com/intent/tweet?text=¡Obtuve%20" + score + "%20puntos%20en%20el%20juego%20de%20de%20#GameofThrones%20de%20Acsendo!%20¡Pruébalo!%20http://www.acsendo.com/GoT/");
         
             $(".popup_module").css("display","none");
             $("#popup, #share_screen").css("display","block");
             $("h1.score_display").html(score);
             $("#score_screen").fadeIn(300);
             var bestScore = localStorage.getItem("highscore");
         
             if (bestScore == null){
                 localStorage.setItem("highscore", 0);
                 bestScore = 0;
             } else {
                 $("#share_screen h2.best_display").html("SU MEJOR SCORE: " + bestScore);
             }
         
             $("#score span").html(score);
             if (score > bestScore){
                 bestScore = score;
                 localStorage.setItem("highscore", score);
                 $("#share_screen h1.score_display").addClass("highscore");
                 $("#share_screen h2.best_display").html("¡NUEVO HIGHSCORE!");
                 triggerHighscore();
             }
             var cheering, cheering_h1, cheering_p;
         
             if (score < 50000) {
                 cheering = "imgs/" + chosenChar + "_end_mal.png";
                 cheering_h1 = "¡Inténtalo nuevamente!";
                 cheering_p = "Aún hay colaboradores que afectan el ambiente laboral. Juega de nuevo y conviértelos a todos.";
             } else if (score < 70000) {
                 cheering = "imgs/" + chosenChar + "_end_bueno.png";
                 cheering_h1 = "¡Sigue así!";
                 cheering_p = "Aún falta mucho por hacer para mejorar el clima de Westeros Inc. Inténtalo nuevamente.";
             } else {
                 cheering = "imgs/" + chosenChar + "_end_perfecto.png";
                 cheering_h1 = "¡Victoria!";
                 cheering_p = "Superaste el invierno con éxito. ¡Tu nombre será recordado para siempre en Westeros Inc!";
             }
             $("#cheering_char>img").attr("src", cheering);
             $("#cheering_char h1.cheering").html(cheering_h1);
             $("#cheering_char p.cheering").html(cheering_p);

            $("#disclaimer").delay(400).fadeIn(300);
            TweenLite.to($("#disclaimer"), 1.3, {"transform":"translateX(0%)", delay:1, ease: Elastic. easeOut.config( 1, 0.3)});
         }
         
         
         function validateSound() {
               const set = checkSetUp();
         
               if (set.mute) {
                   theme.volume = 0;
                   $('#mute').removeClass("mute").addClass("unmute");
                   $("#mute, .muter").html("<img src='btn/mute.svg'/>");
                   mute = true;
               } else {
                   theme.volume = 0.3;
                   $('#mute').removeClass("unmute").addClass("mute");
                   $("#mute, .muter").html("<img src='btn/unmute.svg'/>");
                   mute = false;
               }
           }
         
         function triggerHealspell2(){
             if (!mute){
                 var healspell2 = new Audio("snd/convert2.wav");
                 healspell2.play();
             }
         
         }
         function triggerHealspell3(){
             if (!mute){
                 var healspell3 = new Audio("snd/convert.wav");
                 healspell3.play();
             }
         }
         function triggerHit(){
             if (!mute){
                 var hit = new Audio("snd/hit.wav");
                 hit.play();
                 hit.volume = 0.5;
             }
         }
         function triggerSuccess(){
             if (!mute){
                 var success = new Audio("snd/success.wav");
                 success.play();
                 success.volume = 0.5;
             }
         }
         function triggerHighscore(){
             if (!mute){
                 var highscore = new Audio("snd/highscore.wav");
                 highscore.play();
                 highscore.volume = 0.5;
             }
         }


         /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         var theme = new Audio("snd/theme_bit.mp3");
         $(document).ready(function(){
           checkSetUp ();
            const set = checkSetUp ();
            // console.log(set);
            const cursor = document.querySelector('.cursor');
            cursor.style.display = 'none';
            score = 0;
            var introSlideCounter = 1;


            const customMsg = $('#customMsg');
            customMsg.hide();
            
            
             $(".ranking").click(function(){
                     
                  $("#got-6277fc9cfc259c4784db h1").text('Descubre tu puntaje');
                  $("#got-6277fc9cfc259c4784db h2").text('Ingresa tus datos para saber si tu puntaje está entre los mejores resultados.');

                     $(".popup_module").fadeOut(300);
                     $("#share_form").delay(400).fadeIn(300);
         
                     $("#cf_submit-got-6277fc9cfc259c4784db").click(function(){
                         let email = $("#got-6277fc9cfc259c4784db input[name='email']").val();
                         let nombre = $("#got-6277fc9cfc259c4784db input[name='name']").val();
                         let country = $("#got-6277fc9cfc259c4784db #custom_fields_128333").val();
         
                         console.log("alguma coisa?");
         
                         console.log("Nombre:   " + nombre);
                         console.log("Email:   " + email);
                         console.log("Country:   " + country);
         
                         function validateEmail(email) {
                             var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                             return re.test(email);
                         }
                         $("p.error_message").fadeOut(300);
                         if (!validateEmail(email) || country == "" || nombre == ""){
                             console.log("problem!!");
                         } else {

                            // Actualizo el obgeto en local Storage
                           const set = checkSetUp();
                           set.name = nombre;
                           set.email = email;
                           UpdateSetUp(set);
         
                             $.ajax({
                                 url: 'highscore/savedata.php',
                                 type: 'POST',
                                 data: {
                                     name: nombre,
                                     score: score,
                                     email: email
                                 },
                                 //dataType: 'json',//envia na mesma para BaseDados, mas corre error:function()
                                 success: function(msg) {
                                     $("#fame_screen>span").html(msg);
                                     var player1_rank = $("#player_one_rank").html();
                                     $(".button.large.twitter").parent().attr("href", "https://twitter.com/intent/tweet?text=¡Estoy%20en%20el%20puesto%20" + player1_rank + "%20del%20juego%20de%20Acsendo!%20¿Podrás%20superar%20mi%20puntaje?%20http://www.acsendo.com/GoT/");
                                 },
                                 error: function (){
                                     alert("error calling table");
                                 }
                             });
         
                             $(".popup_module").fadeOut(300);
         
                           //   $("#fame_screen, #disclaimer").delay(400).fadeIn(300);
                           //   TweenLite.to($("#disclaimer"), 1.3, {"transform":"translateX(0%)", delay:1, ease: Elastic. easeOut.config( 1, 0.3)});
                             var fameHTML = $(".hidden_highscore .entry");
                             //$("#fame_screen span").html(fameHTML);
                             var score_temp = score;
         
                             for (i = 0; i < 5; i++){
                                 if (($(".hidden_highscore .entry:eq(" + i + ") .score").html()) < score_temp) {
                                     $("#fame_screen span").append("<div class='entry'>\n<div class='name'>" + nombre + "</div>\n<div class='score'>" + score + "</div>\n</div>\n\n");
         
                                     $("#fame_screen span").append("<div class='entry'>" + ($(".hidden_highscore .entry:eq(" + i + ")").html()) + "</div>\n\n");
                                     score_temp = 0;
                                 } else if (i == (($(".hidden_highscore .entry").length) - 1) && score_temp != 0) {
                                     $("#fame_screen span").append("<div class='entry'>" + ($(".hidden_highscore .entry:eq(" + i + ")").html()) + "</div>\n\n");
         
                                     $("#fame_screen span").append("<div class='entry'>\n<div class='name'>" + nombre + "</div>\n<div class='score'>" + score + "</div>\n</div>\n\n");
                                 } else {
                                     $("#fame_screen span").append("<div class='entry'>" + ($(".hidden_highscore .entry:eq(" + i + ")").html()) + "</div>\n\n");
                                 }
                             }
         
                             var tempToBeSent = $("#fame_screen span").html();
         
                         }
                     });
         
         
                     $('#myform').validate({ // initialize the plugin
                         rules: {
                             nombre: {
                                 required: true,
                                 email: true
                             },
                             email: {
                                 required: true
                             },
                             coutry: {
                                 required: true
                             }
                         },
                         submitHandler: function (form) { // for demo
         
                         }
                     });
             });
             
            $("#btn-volver-form").click(function () {
               $(".popup_module").fadeOut(300);
               $("#share_screen").delay(400).fadeIn(300);
            });

            $("#btn-volver-retar").click(function () {
               $(".popup_module").fadeOut(300);
               $("#share_screen").delay(400).fadeIn(300);
            });

            $('.btn-retar').click(function () {
               const set = checkSetUp();
               if (set.email) {
                  $(".popup_module").fadeOut(300);
                  $("#challenge").delay(400).fadeIn(300);
               } else {
                  $(".popup_module").fadeOut(300);
                  $("#share_form").delay(400).fadeIn(300);
                  $("#got-6277fc9cfc259c4784db h1").text('Regístrate');
                  $("#got-6277fc9cfc259c4784db h2").text('Ingresa primero tus datos para poder retar a un colega.');
                  $("#cf_submit-got-6277fc9cfc259c4784db").val('ENVIAR');               
                  $("#cf_submit-got-6277fc9cfc259c4784db").click(function(){
                     let email = $("#got-6277fc9cfc259c4784db input[name='email']").val();
                     let nombre = $("#got-6277fc9cfc259c4784db input[name='name']").val();
                     let country = $("#got-6277fc9cfc259c4784db #custom_fields_128333").val();
                     const set = checkSetUp();
                     set.name = nombre;
                     set.email = email;
                     UpdateSetUp(set);
                     $(".popup_module").fadeOut(300);
                     $("#challenge").delay(400).fadeIn(300);
                  });
               }
            });

            $("#submitRetar").click(function (){
               event.preventDefault();
               const email = $("#email-challenge").val();
               console.log(email);
               const set = checkSetUp();
               const score = localStorage.getItem('highscore');

               function validateEmail(email) {
                  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                     return re.test(email);
               }
               if (!validateEmail(email)) {
                  console.log('error email');
               } else {
                  $.ajax({
                     url: 'includes/validation.php',
                     type: 'POST',
                     data: {
                        email: email,
                        emailSend: set.email,
                        nameSend: set.name,
                        score: score,
                     },
                     success: function(msg) {
                        console.log(msg);
                        $('#retar-callback').html('<p>' + msg + '</p>');
                     },
                     error: function (err){
                        console.log(err)
                     }
                  });
               }
             });

               $("#mute, .muter").click(function(){
                   const set = checkSetUp();
                   if($(this).hasClass("mute")){
                       theme.volume = 0;
                       $(this).removeClass("mute").addClass("unmute");
                       $("#mute, .muter").html("<img src='btn/mute.svg'/>");
                       mute = true;
                       set.mute = mute;
                       UpdateSetUp(set);
                   } else if ($(this).hasClass("unmute")){
                       theme.volume = 0.3;
                       $(this).removeClass("unmute").addClass("mute");
                       $("#mute, .muter").html("<img src='btn/unmute.svg'/>");
                       mute = false;
                       set.mute = mute;
                       UpdateSetUp(set);
                   }
               });
         
             $(".intro_bola").click(function(){
                 if (!$(this).hasClass("active")){
                     $(".active").removeClass("active");
                     $(this).addClass("active");
                     introSlideCounter = $(this).data("num");
                     $(".intro_slide").fadeOut(300);
                     $(".intro_slide.intro" + introSlideCounter).delay(300).fadeIn(300);
                     if(introSlideCounter >= 3){
                         $(".intro_arrow.right").fadeOut();
                         $(".intro_arrow.left").fadeIn();
                     } else if (introSlideCounter == 2){
                         $(".intro_arrow.left, .intro_arrow.right").fadeIn();
                     } else if(introSlideCounter <= 1){
                         $(".intro_arrow.left").fadeOut();
                         $(".intro_arrow.right").fadeIn();
                     }
                 }
             });
         
             $(".intro_arrow").click(function(){
                 var trueOrFalse = true;
                 if (((introSlideCounter == 3 && $(this).hasClass("right"))) || ((introSlideCounter == 1) && $(this).hasClass("left"))) {
                     trueOrFalse = false;
                 }
         
                 if ($(this).hasClass("right")){
                     introSlideCounter++;
                     if(introSlideCounter >= 3){
                         introSlideCounter = 3;
                         $(this).fadeOut();
                     } else if (introSlideCounter == 2){
                         $(".intro_arrow.left").fadeIn();
                     }
         
                 } else if ($(this).hasClass("left")) {
                     introSlideCounter--;
                     if(introSlideCounter <= 1){
                         introSlideCounter = 1;
                         $(this).fadeOut();
                     } else if (introSlideCounter == 2){
                         $(".intro_arrow.right").fadeIn();
                     }
         
                 }
                 console.log(introSlideCounter);
                 if (trueOrFalse) {
                     $(".intro_slide").fadeOut(300);
                     $(".intro_bola.active").removeClass("active");
                     $(".intro_slide.intro" + introSlideCounter).delay(300).fadeIn(300);
                     $(".intro_bola.bola" + introSlideCounter).addClass("active");
                 }
             });
         
             $(".start").click(function(){
                 $("#char_select, #popup").fadeOut(300);
                 //$("#char_select").delay(400).fadeIn(300);
         
                 startTutorial(chosenChar);
             });
         
             var plusplus = .1;
             var displayWidth = $(window).width();
             var clickable = true;
         
              var pauseBtn = document.getElementById("pause");
         
         
             var chosenChar = "";
         
             var offset = 0;
         
             $(window).blur(function(){
                 console.log(tl);
                 if (pausable) {
                   if (!tl.paused()){
                         pauseIt();
                         pausable = false;
                     }
                 }
             });
             function pauseIt() {
                 if (!tutorial && !endGame){
                     pausable = true;
                     tl.paused(!tl.paused());
                     pauseBtn.innerHTML = tl.paused() ? "<img src='btn/play.svg''/>" : "<img src='btn/pause.svg'/>";
         
                     if (tl.paused()){
                         millisMiddle = new Date();
         
                         clickable = false;
                         anim.pause();
                         $(".white_walker").css("cursor","auto");
                         showSpecialCursor(false);
         
                         $(".white_walker").hover(function() {
                             $(this).find(".char").css("opacity","1");
                         });
                         $("#popup").css("display","block");
                         $(".popup_module").css("display","none");
                         $("#pause_menu").css("display","block");
                     } else {
                         millisMiddleEnd = new Date();
                         millisDiscount += (millisMiddleEnd.getTime() - millisMiddle.getTime());
         
                         clickable = true;
                         anim.play();
                         
                         showSpecialCursor(true);
                         AnimCharacters();
                         $("#popup").css("display","none");
                     }
                 }
         
             }
             $(".button.pause, #pause").click(function(){
                 pauseIt();
             });
         
         
             var setItemNum = 0;
             setInterval(function(){
                 var runningDivOffset = $(".running_div").css("margin-left");
         
                 if((parseInt($(".set" + setItemNum ).css("left")) + parseInt(runningDivOffset)) < 500){
                     var tempSel = $(".set" + setItemNum + "");
         
                     TweenLite.to($(".set" + setItemNum ), .5, {opacity:"1", "margin-top":"0", ease: Elastic. easeOut.config( 1, 0.3)});
         
                     setItemNum++;
                 }
             }, 200);
         
         
         
         
             $("#popup .char_picker").click(function(){
                   const set = checkSetUp();
                   if ($(this).is("#jon")) {
                       chosenChar = "jon";
                       set.character = chosenChar;
                       UpdateSetUp(set);
                       $(".intro_custom_text.juan").css("display", "block");
                     //startGame(chosenChar);
                   } else if ($(this).is("#dany")) {
                       chosenChar = "dany";
                       set.character = chosenChar;
                       UpdateSetUp(set);
                       $(".intro_custom_text.daniela").css("display", "block");
                       //startGame(chosenChar);
                   }
         
                   if (set.tutorial) {
                       $("#intro_screen .intro1 img").attr("src", "imgs/" + chosenChar + "_intro_1.png");
                       $("#intro_screen .intro2 img").attr("src", "imgs/" + chosenChar + "_intro_2.png");
                       $("#char_select").fadeOut(300);
                       $("#intro_screen").delay(400).fadeIn(300);
                   } else {
                       $("#tutorial_wrapper").css("display","none");
                       startGame(chosenChar);
                   }
                 
             })
               
             $("#restart, .restart").click(function(){
                 if (!tutorial){
                     if ((tl.paused())){
                         pauseIt();
                     }
                     restartGame(chosenChar);
                 }
             });
         
         
             $('img, div').on('dragstart', function(event) { event.preventDefault(); });
         
             function characterDies(dying) {
                 millisStart = new Date();
                 millisDiscount = 0;
                 originalUrl = dying.find(".char").attr("src");
                 urlLength = originalUrl.length;
                 subString = originalUrl.substring(0, (urlLength - 6));
         
                 dying.data("hp", 0);
                 dying.removeClass("white_walker");
         
                 dying.find(".health, .boss_health, .star").css("opacity","0");
                 var temp = dying.find(".acsendo_logo").data("logo");
                 dying.find(".acsendo_logo").css({"left": temp + "vh"});
         
                 dying.find(".char").attr("src", subString + ".png");
                 TweenLite.to(dying.find(".acsendo_logo"), .5, {opacity:"1", "top":"-3vh", ease: Elastic. easeOut.config( 1, 0.3), delay:.2});
         
                 if (dying.hasClass("ventas")){
                     ventasDeaths+=1;
                 } else if (dying.hasClass("tecnologia")){
                     tecnologiaDeaths+=1;
                 } else if (dying.hasClass("rrhh")){
                     rrhhDeaths+=1;
                 } else if (dying.hasClass("customSucc")){
                     customSuccDeaths+=1;
                 } else if (dying.hasClass("administracion")){
                     administracionDeaths+=1;
                 } else {
                     console.log("something went terribly wrong");
                 }
         
                 deadCount++;

                  // console.log(deadCount);

                 function showMessage (msg) {
                     customMsg.show();
                     customMsg.html(msg);
                 }

                 function HideMessade () {
                     setTimeout(() => {
                        customMsg.fadeOut();
                     }, 1000);
                 }

                 let Msg = '';

                 if(deadCount == 5) {
                    if (chosenChar == 'dany') {
                        Msg = 'Crea un ambiente de confianza';
                    } else {
                        Msg = 'Crea un ambiente de confianza';
                    }
                     showMessage(Msg);
                     HideMessade();
                 } else if (deadCount == 10) {
                     if (chosenChar == 'dany') {
                        Msg = 'Escucha a tus empleados' ;
                     } else {
                        Msg = 'Escucha a tus empleados';
                     }
                     showMessage(Msg);
                     HideMessade();
                 } else if (deadCount == 15) {
                     if (chosenChar == 'dany') {
                        Msg = 'Impulsa la formación';
                     } else {
                        Msg = 'Impulsa la formación';
                     }
                     showMessage(Msg);
                     HideMessade();
                 } else if (deadCount == 20) {
                     if (chosenChar == 'dany') {
                        Msg = 'Brindar feedback es clave';
                     } else {
                        Msg = 'Brindar feedback es clave';
                     }
                     showMessage(Msg);
                     HideMessade();
                 } else if (deadCount == 30) {
                     if (chosenChar == 'dany') {
                        Msg = 'Celebra los logros';
                    } else {
                        Msg = 'Celebra los logros';
                    }
                     showMessage(Msg);
                     HideMessade();
                 } else if (deadCount == 40) {
                     if (chosenChar == 'dany') {
                        Msg = 'Acsendo es un gran aliado' ;
                     } else {
                        Msg = 'Acsendo es un gran aliado';
                     }
                     showMessage(Msg);
                     HideMessade();
                 } else if (deadCount == 50) {
                     if (chosenChar == 'dany') {
                        Msg = 'Impulsa la formación';
                     } else {
                        Msg = 'Impulsa la formación';
                     }
                     showMessage(Msg);
                     HideMessade();
                 } else if (deadCount == 60) {
                     if (chosenChar == 'dany') {
                        Msg = 'Escucha a tus empleados' ;
                     } else {
                        Msg = 'Escucha a tus empleados';
                     }
                     showMessage(Msg);
                     HideMessade();
                 } else if (deadCount == 70) {
                     if (chosenChar == 'dany') {
                        Msg = 'Brindar feedback es clave';
                     } else {
                        Msg = 'Brindar feedback es clave';
                     }
                     showMessage(Msg);
                     HideMessade();
                 }
                 
             }
         
         
         
             $(".white_walker").mousedown(function(){
                 var ventas = [1,9,10,11,12,13,24,31,32,33,36,37,43,44,45,60,61,54,55];
                 var tecnologia = [4,25,26,27,34,35,40,46,47,48,49,56,57,68,69,70,71,72,73];
                 var rrhh = [8,21,22,41,42,77];
                 var customSucc = [17,19,20,23,28,29,30,39,58,59,62,63,64,65];
                 var administracion = [2,3,14,15,16,38,50,51,52,53,74,75,76];
         
                 if (clickable){
                     var HP = $(this).data("hp");
                     if (HP > 1) {
                         HP--;
         
                         $(this).data("hp", HP);
                         $(this).find(".health .healthbar").css("width", ((100 / 3) * HP) + "%");
                         $(this).find(".boss_health .healthbar").css("width", ((100 / 5) * HP) + "%");
                         triggerHit();
                         //$(this).find("p").html(HP);
                     } else if (HP === 1){
         
         
                         characterDies($(this));
         
                         if ($(this).is("#char6")) {
                             liderDeaths++;
                             triggerHealspell3();
                             for (i = 0; i < ventas.length; i++){
                                 var newHealth = $("#char" + ventas[i]).data("hp") - 1;
                                 $("#char" + ventas[i]).data("hp", newHealth)
                                 $("#char" + ventas[i]).find(".acsendo_logo").data("hp", newHealth);
                                 $("#char" + ventas[i]).find(".health .healthbar").css("width", ((100 / 3) * newHealth) + "%");
         
                                 $("#char" + ventas[i]).append("<div class='estrellas'><img src='estrellas_loop.gif'/></div>");
                                 setTimeout(function () {
                                     for (i = 0; i < ventas.length; i++){
                                       $("#char" + ventas[i]).children(".estrellas").remove();
                                     }
                                 },1500);
         
                                 if (newHealth == 0){
                                     characterDies($("#char" + ventas[i]));
                                 }
                             }
                         } else if ($(this).is("#char67")) {
                             liderDeaths++;
                             triggerHealspell3();
                             for (i = 0; i < tecnologia.length; i++){
                                 var newHealth = $("#char" + tecnologia[i]).data("hp") - 1;
                                 $("#char" + tecnologia[i]).data("hp", newHealth)
                                 $("#char" + tecnologia[i]).find(".acsendo_logo").data("hp", newHealth);
                                 $("#char" + tecnologia[i]).find(".health .healthbar").css("width", ((100 / 3) * newHealth) + "%");
         
                                 $("#char" + tecnologia[i]).append("<div class='estrellas'><img src='estrellas_loop.gif'/></div>");
                                 setTimeout(function () {
                                     for (i = 0; i < tecnologia.length; i++){
                                       $("#char" + tecnologia[i]).children(".estrellas").remove();
                                     }
                                 },1500);
         
                                 if (newHealth == 0){
                                     characterDies($("#char" + tecnologia[i]));
                                 }
                             }
                         } else if ($(this).is("#char66")) {
                             liderDeaths++;
                             triggerHealspell3();
                             for (i = 0; i < rrhh.length; i++){
                                 var newHealth = $("#char" + rrhh[i]).data("hp") - 1;
                                 $("#char" + rrhh[i]).data("hp", newHealth)
                                 $("#char" + rrhh[i]).find(".acsendo_logo").data("hp", newHealth);
                                 $("#char" + rrhh[i]).find(".health .healthbar").css("width", ((100 / 3) * newHealth) + "%");
         
                                 $("#char" + rrhh[i]).append("<div class='estrellas'><img src='estrellas_loop.gif'/></div>");
                                 setTimeout(function () {
                                     for (i = 0; i < rrhh.length; i++){
                                       $("#char" + rrhh[i]).children(".estrellas").remove();
                                     }
                                 },1500);
         
                                 if (newHealth == 0){
                                     characterDies($("#char" + rrhh[i]));
                                 }
                             }
                         } else if ($(this).is("#char5")) {
                             liderDeaths++;
                             triggerHealspell3();
                             for (i = 0; i < customSucc.length; i++){
                                 var newHealth = $("#char" + customSucc[i]).data("hp") - 1;
                                 $("#char" + customSucc[i]).data("hp", newHealth)
                                 $("#char" + customSucc[i]).find(".acsendo_logo").data("hp", newHealth);
                                 $("#char" + customSucc[i]).find(".health .healthbar").css("width", ((100 / 3) * newHealth) + "%");
         
                                 $("#char" + customSucc[i]).append("<div class='estrellas'><img src='estrellas_loop.gif'/></div>");
                                 setTimeout(function () {
                                     for (i = 0; i < customSucc.length; i++){
                                       $("#char" + customSucc[i]).children(".estrellas").remove();
                                     }
                                 },1500);
         
                                 if (newHealth == 0){
                                     characterDies($("#char" + customSucc[i]));
                                 }
                             }
                         } else if ($(this).is("#char18")) {
                             liderDeaths++;
                             triggerHealspell3();
                             for (i = 0; i < administracion.length; i++){
                                 var newHealth = $("#char" + administracion[i]).data("hp") - 1;
                                 $("#char" + administracion[i]).data("hp", newHealth)
                                 $("#char" + administracion[i]).find(".acsendo_logo").data("hp", newHealth);
                                 $("#char" + administracion[i]).find(".health .healthbar").css("width", ((100 / 3) * newHealth) + "%");
         
                                 $("#char" + administracion[i]).append("<div class='estrellas'><img src='estrellas_loop.gif'/></div>");
                                 setTimeout(function () {
                                     for (i = 0; i < administracion.length; i++){
                                           $("#char" + administracion[i]).children(".estrellas").remove();
                                     }
                                 },1500);
         
                                 if (newHealth == 0){
                                     characterDies($("#char" + administracion[i]));
                                 }
                             }
                         } else if (($(this).is("#char31") && $("#char32").data("hp") <= 0) || ($(this).is("#char32") && $("#char31").data("hp") <= 0)){ //CEOS
                             liderDeaths+=2;
                             triggerHealspell3();
                             for (i = 1; i <= 77; i++){
                                 var newHealth = $("#char" + i).data("hp") - 1;
                                 $("#char" + i).data("hp", newHealth)
                                 $("#char" + i).find(".acsendo_logo").data("hp", newHealth);
                                 $("#char" + i).find(".health .healthbar").css("width", ((100 / 3) * newHealth) + "%");
                                 $("#char" + i).find(".boss_health .healthbar").css("width", ((100 / 5) * newHealth) + "%");
         
                                 $("#char" + i).append("<div class='estrellas'><img src='estrellas_loop.gif'/></div>");
                                 setTimeout(function () {
                                     for (i = 1; i <= 77; i++){
                                           $("#char" + i).children(".estrellas").remove();
                                     }
                                 },1500);
         
                                 if (newHealth === 0){
                                     characterDies($("#char" + i));
                                 }
                             }
                         } else {
                             triggerHealspell2();
                         }
         
         
         
         
                         if (!bonusTecnologia) {
                             for (i = 0; i < tecnologia.length; i++){
                                 if ($("#char" + tecnologia[i]).data("hp") > 0){
                                     bonusTecnologia = false;
         
                                     break;
                                 }
                                 if (i == (tecnologia.length - 1) && $("#char" + tecnologia[i]).data("hp") <= 0){
                                     bonusTecnologia = true;
                                     deadCount += 20;
                                     bonusScore(2000, 0);
                                 }
                             }
                         }
         
                         if (!bonusRrhh) {
                             for (i = 0; i < rrhh.length; i++){
                                 if ($("#char" + rrhh[i]).data("hp") > 0){
                                     bonusRrhh = false;
         
                                     break;
                                 }
                                 if (i == (rrhh.length - 1) && $("#char" + rrhh[i]).data("hp") <= 0){
                                     bonusRrhh = true;
                                     deadCount += 7;
                                     bonusScore(700, 1);
                                 }
                             }
                         }
         
                         if (!bonusVentas) {
                             for (i = 0; i < ventas.length; i++){
                                 if ($("#char" + ventas[i]).data("hp") > 0){
                                     bonusVentas = false;
         
                                     break;
                                 }
                                 if (i == (ventas.length - 1) && $("#char" + ventas[i]).data("hp") <= 0){
                                     bonusVentas = true;
                                     deadCount += 19;
                                     bonusScore(1900, 2);
                                 }
                             }
                         }
         
                         if (!bonusCustomSucc) {
                             for (i = 0; i < customSucc.length; i++){
                                 if ($("#char" + customSucc[i]).data("hp") > 0){
                                     bonusCustomSucc = false;
         
                                     break;
                                 }
                                 if (i == (customSucc.length - 1) && $("#char" + customSucc[i]).data("hp") <= 0){
                                     bonusCustomSucc = true;
                                     deadCount += 20;
                                     bonusScore(2000, 3);
                                 }
                             }
                         }
         
                         if (!bonusAdministracion) {
                             for (i = 0; i < administracion.length; i++){
                                 if ($("#char" + administracion[i]).data("hp") > 0){
                                     bonusAdministracion = false;
         
                                     break;
                                 }
                                 if (i == (administracion.length - 1) && $("#char" + administracion[i]).data("hp") <= 0){
                                     bonusAdministracion = true;
                                     deadCount += 14;
                                     bonusScore(1400, 4);
                                 }
                             }
                         }
         
         
                         //$(".score_bar .barscore").css("width", deadCount * (100 / /*76*/152) + "%");
                         score = deadCount * 1000;
                         $("#score span").html(score);
         
                     } else if (HP < 1) {
                     }
                 }
             }).mouseup(function(){
                 //clickable = true;
             });
         
         
         
         
         
             $('body').keydown(function(e) {
               if(e.keyCode == 80) { // PPPPP
         
                   if (pausable) {
                       pauseIt();
                       pausable = false;
                   }
               }
         
               $('html').on('keydown', function (e) {
                   //console.log("KEY " + e.keyCode);
               });
           });
           $('body').keyup(function(e){
               if (!tutorial){
                   pausable = true;
               }
           });
         });
         
         
         
      </script>
   </head>
   <body>
      <div class="hidden_highscore">
         <?php
            include 'highscore/halloffame.txt';
            ?>
      </div>
      <div id="game_wrapper">
         <div class="cursor"></div>
         <div class="customMsg" id="customMsg">Buen travajo !!</div>
         <!-- <div class="StartTip">
            <h2 class="tip">
               <span>Tip:</span> ¡Concéntrate en los líderes! Convertirlos primero te ayudará con los demás. 
            </h2>
         </div> -->
         <span id="wall"></span>
         <span id="rodape"></span>
         <span id="floor1"></span>
         <span id="corridor"></span>
         <span id="floor2"></span>
         <img id="wall_patt" class="running_div" src="walls.png"/>
         <img class="set0 running_div" src="set/set2.png"/>
         <img class="set1 running_div" src="set/set1.png"/>
         <img class="set2 running_div" src="set/set2.png"/>
         <img class="set3 running_div" src="set/set3.png"/>
         <img class="set4 running_div" src="set/set4.png"/>
         <img class="set5 running_div" src="set/set2.png"/>
         <img class="set6 running_div" src="set/set5.png"/>
         <img class="set7 running_div" src="set/set2.png"/>
         <div class="running_div white_walker character ventas" id="char1">
            <img class="acsendo_logo" data-logo="6.4" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char1_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char4">
            <img class="acsendo_logo" data-logo="7.3" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char4_w.png"/>
         </div>
         <div class="running_div white_walker character ventas" id="char6">
            <img class="acsendo_logo" data-logo="2.5" src="acsendo_logo.png"/>
            <img class="star" src="boss_star.png"/>
            <div class="boss_health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char6_w.png"/>
         </div>
         <div class="running_div white_walker character ventas" id="char9">
            <img class="acsendo_logo" data-logo="6.7" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char9_w.png"/>
         </div>
         <div class="running_div white_walker character ventas" id="char10">
            <img class="acsendo_logo" data-logo="7.3" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char10_w.png"/>
         </div>
         <div class="running_div white_walker character administracion" id="char15">
            <img class="acsendo_logo" data-logo="5" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="front" src="front/front15.png"/>
            <img class="char" src="char/char15_w.png"/>
         </div>
         <div class="running_div white_walker character administracion" id="char18">
            <img class="acsendo_logo" data-logo="6.7" src="acsendo_logo.png"/>
            <img class="star" src="boss_star.png"/>
            <div class="boss_health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char18_w.png"/>
         </div>
         <div class="running_div white_walker character customSucc" id="char19">
            <img class="acsendo_logo" data-logo="8.9" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char19_w.png"/>
         </div>
         <div class="running_div white_walker character customSucc" id="char20">
            <img class="acsendo_logo" data-logo="8.5" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char20_w.png"/>
         </div>
         <div class="running_div white_walker character ventas" id="char24">
            <img class="acsendo_logo" data-logo="6.8" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char24_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char25">
            <img class="acsendo_logo" data-logo="7.3" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char25_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char26">
            <img class="acsendo_logo" data-logo="3.5" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char26_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char27">
            <img class="acsendo_logo" data-logo="4.3" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char27_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char34">
            <img class="acsendo_logo" data-logo="7.1" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char34_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char35">
            <img class="acsendo_logo" data-logo="9.9" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char35_w.png"/>
         </div>
         <div class="running_div white_walker character ventas" id="char36">
            <img class="acsendo_logo" data-logo="4.5" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char36_w.png"/>
         </div>
         <div class="running_div white_walker character ventas" id="char37">
            <img class="acsendo_logo" data-logo="3.6" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char37_w.png"/>
         </div>
         <div class="running_div white_walker character administracion" id="char38">
            <img class="acsendo_logo" data-logo="4.1" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char38_w.png"/>
         </div>
         <div class="running_div white_walker character customSucc" id="char39">
            <img class="acsendo_logo" data-logo="7.1" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char39_w.png"/>
         </div>
         <div class="running_div white_walker character rrhh" id="char41">
            <img class="acsendo_logo" data-logo="5.9" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="front" src="front/front41.png"/>
            <img class="char" src="char/char41_w.png"/>
         </div>
         <div class="running_div white_walker character rrhh" id="char42">
            <img class="acsendo_logo" data-logo="7.4" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char42_w.png"/>
         </div>
         <div class="running_div white_walker character administracion" id="char53">
            <img class="acsendo_logo" data-logo="12.5" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char53_w.png"/>
         </div>
         <div class="running_div white_walker character ventas" id="char54">
            <img class="acsendo_logo" data-logo="2.7" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char54_w.png"/>
         </div>
         <div class="running_div white_walker character ventas" id="char55">
            <img class="acsendo_logo" data-logo="2.8" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char55_w.png"/>
         </div>
         <div class="running_div white_walker character customSucc" id="char62">
            <img class="acsendo_logo" data-logo="4.3" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char62_w.png"/>
         </div>
         <div class="running_div white_walker character customSucc" id="char63">
            <img class="acsendo_logo" data-logo="3.8" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char63_w.png"/>
         </div>
         <div class="running_div white_walker character customSucc" id="char64">
            <img class="acsendo_logo" data-logo="7.5" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char64_w.png"/>
         </div>
         <div class="running_div white_walker character customSucc" id="char65">
            <img class="acsendo_logo" data-logo="6.2" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char65_w.png"/>
         </div>
         <div class="running_div white_walker character rrhh" id="char66">
            <img class="acsendo_logo" data-logo="4.8" src="acsendo_logo.png"/>
            <img class="star" src="boss_star.png"/>
            <div class="boss_health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char66_w.png"/>
         </div>
         <span id="bodymovin"></span>
         <div class="running_div white_walker character administracion" id="char2">
            <img class="acsendo_logo" data-logo="10.3" src="acsendo_logo.png"/>
            <img class="front" src="front/front2.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char2_w.png"/>
         </div>
         <div class="running_div white_walker character administracion" id="char3">
            <img class="acsendo_logo" data-logo="3.2" src="acsendo_logo.png"/>
            <img class="front" src="front/front3.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char3_w.png"/>
         </div>
         <div class="running_div white_walker character customSucc" id="char5">
            <img class="acsendo_logo" data-logo="5.2" src="acsendo_logo.png"/>
            <img class="star" src="boss_star.png"/>
            <div class="boss_health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char5_w.png"/>
         </div>
         <div class="running_div white_walker character ventas" id="char11">
            <img class="acsendo_logo" data-logo="4.1" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="front" src="front/front11.png"/>
            <img class="char" src="char/char11_w.png"/>
         </div>
         <div class="running_div white_walker character ventas" id="char12">
            <img class="acsendo_logo" data-logo="4.8" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="front" src="front/front12.png"/>
            <img class="char" src="char/char12_w.png"/>
         </div>
         <div class="running_div white_walker character ventas" id="char13">
            <img class="acsendo_logo" data-logo="7.5" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="front" src="front/front13.png"/>
            <img class="char" src="char/char13_w.png"/>
         </div>
         <div class="running_div white_walker character rrhh" id="char8">
            <img class="acsendo_logo" data-logo="7.3" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char8_w.png"/>
         </div>
         <div class="running_div white_walker character administracion" id="char14">
            <img class="acsendo_logo" data-logo="4.8" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="front" src="front/front14.png"/>
            <img class="char" src="char/char14_w.png"/>
         </div>
         <div class="running_div white_walker character administracion" id="char16">
            <img class="acsendo_logo" data-logo="6.4" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="front" src="front/front16.png"/>
            <img class="char" src="char/char16_w.png"/>
         </div>
         <div class="running_div white_walker character customSucc" id="char17">
            <img class="acsendo_logo" data-logo="8.2" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char17_w.png"/>
         </div>
         <div class="running_div white_walker character rrhh" id="char21">
            <img class="acsendo_logo" data-logo="2.1" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char21_w.png"/>
         </div>
         <div class="running_div white_walker character rrhh" id="char22">
            <img class="acsendo_logo" data-logo="2.5" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char22_w.png"/>
         </div>
         <div class="running_div white_walker character customSucc" id="char23">
            <img class="acsendo_logo" data-logo="7.8" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char23_w.png"/>
         </div>
         <div class="running_div white_walker character customSucc" id="char28">
            <img class="acsendo_logo" data-logo="2.5" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="front" src="front/front28.png"/>
            <img class="char" src="char/char28_w.png"/>
         </div>
         <div class="running_div white_walker character customSucc" id="char29">
            <img class="acsendo_logo" data-logo="5" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="front" src="front/front29.png"/>
            <img class="char" src="char/char29_w.png"/>
         </div>
         <div class="running_div white_walker character customSucc" id="char30">
            <img class="acsendo_logo" data-logo="6.3" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char30_w.png"/>
         </div>
         <div class="running_div white_walker character ventas" id="char31">
            <img class="acsendo_logo" data-logo="4.8" src="acsendo_logo.png"/>
            <img class="star" src="boss_star.png"/>
            <div class="boss_health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char31_w.png"/>
         </div>
         <div class="running_div white_walker character ventas" id="char32">
            <img class="acsendo_logo" data-logo="5.6" src="acsendo_logo.png"/>
            <img class="star" src="boss_star.png"/>
            <div class="boss_health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char32_w.png"/>
         </div>
         <div class="running_div white_walker character ventas" id="char33">
            <img class="acsendo_logo" data-logo="7.3" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char33_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char40">
            <img class="acsendo_logo" data-logo="7.2" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char40_w.png"/>
         </div>
         <div class="running_div white_walker character ventas" id="char43">
            <img class="acsendo_logo" data-logo="7.7" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char43_w.png"/>
         </div>
         <div class="running_div white_walker character ventas" id="char44">
            <img class="acsendo_logo" data-logo="6.2" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char44_w.png"/>
         </div>
         <div class="running_div white_walker character ventas" id="char45">
            <img class="acsendo_logo" data-logo="9.8" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char45_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char46">
            <img class="acsendo_logo" data-logo="4.5" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char46_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char47">
            <img class="acsendo_logo" data-logo="4" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char47_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char48">
            <img class="acsendo_logo" data-logo="5.6" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char48_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char49">
            <img class="acsendo_logo" data-logo="4.2" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char49_w.png"/>
         </div>
         <div class="running_div white_walker character administracion" id="char50">
            <img class="acsendo_logo" data-logo="3.6" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="front" src="front/front50.png"/>
            <img class="char" src="char/char50_w.png"/>
         </div>
         <div class="running_div white_walker character administracion" id="char51">
            <img class="acsendo_logo" data-logo="3.1" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="front" src="front/front51.png"/>
            <img class="char" src="char/char51_w.png"/>
         </div>
         <div class="running_div white_walker character administracion" id="char52">
            <img class="acsendo_logo" data-logo="3.8" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char52_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char56">
            <img class="acsendo_logo" data-logo="6.4" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char56_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char57">
            <img class="acsendo_logo" data-logo="5" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char57_w.png"/>
         </div>
         <div class="running_div white_walker character customSucc" id="char58">
            <img class="acsendo_logo" data-logo="3" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char58_w.png"/>
         </div>
         <div class="running_div white_walker character customSucc" id="char59">
            <img class="acsendo_logo" data-logo="2.2" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char59_w.png"/>
         </div>
         <div class="running_div white_walker character ventas" id="char60">
            <img class="acsendo_logo" data-logo="6.6" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char60_w.png"/>
         </div>
         <div class="running_div white_walker character ventas" id="char61">
            <img class="acsendo_logo" data-logo="6.3" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char61_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char67">
            <img class="acsendo_logo" data-logo="7.1" src="acsendo_logo.png"/>
            <img class="star" src="boss_star.png"/>
            <div class="boss_health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char67_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char68">
            <img class="acsendo_logo" data-logo="7.2" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char68_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char69">
            <img class="acsendo_logo" data-logo="7.2" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char69_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char70">
            <img class="acsendo_logo" data-logo="7.2" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char70_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char71">
            <img class="acsendo_logo" data-logo="7.2" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char71_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char72">
            <img class="acsendo_logo" data-logo="7.2" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char72_w.png"/>
         </div>
         <div class="running_div white_walker character tecnologia" id="char73">
            <img class="acsendo_logo" data-logo="7.2" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char73_w.png"/>
         </div>
         <div class="running_div white_walker character administracion" id="char74">
            <img class="acsendo_logo" data-logo="7.2" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="front" src="front/front74.png"/>
            <img class="char" src="char/char74_w.png"/>
         </div>
         <div class="running_div white_walker character administracion" id="char75">
            <img class="acsendo_logo" data-logo="3.6" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="front" src="front/front75.png"/>
            <img class="char" src="char/char75_w.png"/>
         </div>
         <div class="running_div white_walker character administracion" id="char76">
            <img class="acsendo_logo" data-logo="4.1" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="front" src="front/front76.png"/>
            <img class="char" src="char/char76_w.png"/>
         </div>
         <div class="running_div white_walker character rrhh" id="char77">
            <img class="acsendo_logo" data-logo="4.8" src="acsendo_logo.png"/>
            <div class="health">
               <div class="healthbar"></div>
            </div>
            <img class="char" src="char/char77_w.png"/>
         </div>
      </div>
      <div id="tutorial_wrapper">
         <div class="hole running_div">
            <div class="white_walker character" id="dummy">
               <img class="acsendo_logo" data-logo="2.5" src="acsendo_logo.png"/>
               <div class="health">
                  <div class="healthbar"></div>
               </div>
               <img class="char" src="char/char22_w.png"/>
            </div>
            <div class="fixed_text">
               <h1>
                  Haz clic sobre los colaboradores contagiados hasta que vuelvan a la normalidad. 
               </h1>
               <div class="pause button large hidden start_game">
                  <img src="btn/play.svg"/>
                  <p>Empezar</p>
               </div>
            </div>
         </div>
         <span class="wall"></span>
         <span class="rodape"></span>
         <span class="floor1"></span>
         <span class="corridor"></span>
         <span class="floor2"></span>
         <div id="bodymovin2"></div>
         <img class="wall_patt running_div" src="walls_tut.png"/>
      </div>
      <div id="popup">
         <div id="intro_screen" class="popup_module">
            <div class="intro_arrow left"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
            <div class="intro_arrow right"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
            <div class="muter mute button">
               <img src="btn/unmute.svg"/>
            </div>
            <div class="intro_slide intro1">
               <img src="imgs/dany_intro_1.png"/>
               <p class="intro_custom_text juan">Juan Nieve fue nombrado director de RRHH de Westeros Inc y ahora se enfrenta a un gran reto. </p>
               <p class="intro_custom_text daniela">Daniela ingresó a Westeros Inc para dirigir el área de RR.HH. Pero ha encontrado un mal clima laboral a causa de la llegada del invierno. </p>
            </div>
            <div class="intro_slide intro2">
               <img src="imgs/dany_intro_2.png"/>
               <p class="intro_custom_text juan">Deberá mejorar el mal clima laboral que ha traído consigo el invierno y necesita que le ayudes a usar Acsendo para lograrlo.</p>
               <p class="intro_custom_text daniela">El invierno ha generado un ambiente negativo donde nadie trabaja de la mejor manera y necesita que le ayudes a usar Acsendo para mejorarlo.</p>
            </div>
            <div class="intro_slide intro3">
               <img src="imgs/invierno.png"/>
               <h1 class="intro_custom_text daniela">Ayúdala ahora a salvar <br> Westeros Inc.</h1>
               <h1 class="intro_custom_text juan">Ayúdalo ahora a salvar <br> Westeros Inc.</h1>
               <div class="start button large">
                  <p>¡Jugar ahora!</p>
               </div>
            </div>

            <div id="intro_nav">
               <div data-num="1" class="intro_bola bola1 active"></div>
               <div data-num="2" class="intro_bola bola2"></div>
               <div data-num="3" class="intro_bola bola3"></div>
            </div>
         </div>
         <!-- <div id="disclaimer" class="popup_module">
            <h3>¡Descubre qué tipo de líder eres según Game of Thrones!</h3>
            <p>Obtén nuestro ebook gratuito y averigua a qué personaje te pareces según tu estilo de liderazgo.</p>
            <a href="https://www.acsendo.com/landing/es/" class="btn-ebook" target="_blank">DESCARGAR AHORA</a>
         </div> -->
         <div id="disclaimer" class="popup_module">
            <video width="260" controls>
               <source src="pruebaVid.mp4" type="video/mp4">
               Your browser does not support HTML5 video.
            </video>
         </div>
         <div id="fame_screen" class="popup_module">
            <div class="restart button" style="position: absolute; top: 20px; left: 20px;">
               <img src="btn/restart.svg" style="left: 0;">
            </div>
            <h1>High Scores</h1>
            <span>
               <!-- ACA VA EL RANKING -->
            </span>
            <a href="https://twitter.com/intent/tweet?text=Hello%20world"  onclick="window.open(this.href, 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;">
               <div class="button large twitter">
                  <p>
                     <i class="fa fa-twitter" aria-hidden="true"></i>
                  </p>
               </div>
            </a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.acsendo.com%2FGoT%2Fgot.php&amp;src=sdkpreparse" onclick="window.open(this.href, 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;">
               <div class="button large facebook">
                  <p>
                     <i class="fa fa-facebook" aria-hidden="true"></i>
                  </p>
               </div>
            </a>
            <div class="btn-retar button large" id="">
               <p>RETA UN COLEGA</p>
            </div>
         </div>
         <div id="share_form" class="popup_module">
            <div id="got-6277fc9cfc259c4784db"></div>
            <script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
            <script type="text/javascript">
               new RDStationForms('got-6277fc9cfc259c4784db-html', 'UA-5384729-1').createForm();
            </script>
            <div class="popup_module_back">
               <p id="btn-volver-form">Volver</p>
            </div>
         </div>
         <div id="share_screen" class="popup_module">
            <div id="cheering_char">
               <h1 class="cheering"></h1>
               <div class="restart button">
                  <img src="btn/restart.svg">
               </div>
               <div class="muter mute button">
                  <img src="btn/unmute.svg"/>
               </div>
               <img src=""/>
               <p class="cheering"></p>
            </div>
            <div style="height:40%;position:absolute;top:60%;">
               <a href="https://twitter.com/intent/tweet?text=Hello%20world"  onclick="window.open(this.href, 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;">
                  <div class="button large twitter">
                     <p>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        
                     </p>
                  </div>
               </a>
               <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.acsendo.com%2FGoT%2Fgot.php&amp;src=sdkpreparse" onclick="window.open(this.href, 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;">
                  <div class="button large facebook">
                     <p>
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                     </p>
                  </div>
               </a>
               <div class="ranking button large">
                  <p>RANKING</p>
               </div>
               <div class="btn-retar button large" id="reta-btn">
                  <p>RETA UN COLEGA</p>
               </div>
            </div>
         </div>
         <div id="char_select" class="popup_module">
            <div class="muter mute button">
               <img src="btn/unmute.svg"/>
            </div>
            <h1>Escoge un líder</h1>
            <div id="picker_wrapper">
               <div class="char_picker" id="dany">
                  <span>
                     <p class="char_nombre">DANIELA TARGARONA</p>
                     <p class="char_cargo">Directora de RRHH</p>
                     <p class="habilidade">
                        Daniela es una persona metódica y pensativa que se apoya en Acsendo para mejorar el engagement de los colaboradores.
                     </p>
                     <div class="boton_seleccionar">Seleccionar</div>
                  </span>
                  <img src="dany.png"/>
               </div>
               <div class="char_picker" id="jon">
                  <span>
                     <p class="char_nombre">JUAN NIEVE</p>
                     <p class="char_cargo">Director de RRHH</p>
                     <p class="habilidade">
                        No te dejes engañar por su apellido, Juan es reconocido por ser una persona cálida y aguerrida. Le gusta usar Acsendo para gestionar el desempeño de su equipo. 
                     </p>
                     <div class="boton_seleccionar">Seleccionar</div>
                  </span>
                  <img src="jon.png"/>
               </div>
            </div>
         </div>
         <div id="pause_menu" class="popup_module">
            <div class="muter mute button">
               <img src="btn/unmute.svg"/>
            </div>
            <h1>PAUSA</h1>
            <div class="pause button large">
               <img src="btn/play.svg"/>
               <p>CONTINUAR</p>
            </div>
            <div class="restart button large">
               <img src="btn/restart.svg"/>
               <p>REINICIAR</p>
            </div>
         </div>

         <div id="challenge" class="popup_module">
            <div class="modal-challenge">
               <h1>Reta a un colega</h1>
               <p>Ingresa el correo de la persona que deseas retar y compite por ver quién obtiene mejor puntaje</p>
               <form id="form-challenge">
                  <div class="field">
                     <label for="email">Ingresa su email</label>
                     <input type="email" name="email-challenge" id="email-challenge" value="" class="form-control required js-email" placeholder="" required="required">
                  </div>
               </form>

               <div class="btn-retar button large" id="submitRetar">
                  <p>DESAFIAR</p>
               </div>
               <div id="retar-callback">
                  
               </div>
               <div class="retar_back">
                  <p id="btn-volver-retar">Volver</p>
               </div>
            </div>
         </div>
      </div>

      <div id="hud">
         <div id="pause" class="button">
            <img src="btn/pause.svg"/>
         </div>
         <div id="mute" class="mute button">
            <img src="btn/unmute.svg"/>
         </div>
         <div id="restart" class="button">
            <img src="btn/restart.svg"/>
         </div>
         <img class="logo" src="imgs/logoacsendo.png"/>
         <div class="button" id="score">
            SCORE: <span>0</span>
         </div>
      </div>
      <div id="mobile">
         <img src="imgs/mobile.png"/>
         <h1>Ingrese desde un ordenador para jugar</h1>
      </div>
      <!--
         -->
      <script>
         function walkCycle(chosenChar) {
         
             var elem = document.getElementById('bodymovin')
             var animData = {
                 container: elem,
                 renderer: 'svg',
                 loop: true,
                 autoplay: true,
                 rendererSettings: {
                     progressiveLoad:false
                 },
                 path: chosenChar + '.json'
             };
             anim = bodymovin.loadAnimation(animData);
         }
         
      </script>
   </body>
</html>