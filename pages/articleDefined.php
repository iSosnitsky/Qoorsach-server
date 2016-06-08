<?php

include ('../scripts/tomain.php');
/**
 * Created by PhpStorm.
 * User: Roman Kurbanov
 * Date: 28.02.16
 * Time: 17:01
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>#НазваниеСтатьи#</title>
    <link rel="stylesheet" href="/css/commonStylesheet.css">
    <script>
        function checkRadio(rightAnswer, radioName) {
            var radios = document.getElementsByName(radioName);
            var response = false;
            for (var i = 0, length = radios.length; i < length; i++) {
                if (radios[i].checked) {
                    if ((radios[i].value.trim().toLowerCase()) == rightAnswer) response = true;
                }
            }
            return response;
        }

        function checkTextArea(rightAnswer, textAreaName) {
            var response = false;
            var textArea=document.getElementsByName(textAreaName)[0];
            if (textArea.value.trim().toLowerCase()==rightAnswer){
                response = true;
            }
            return response;
        }

        function qs1 () {
            if (checkTextArea('#', 'q1')) {
                document.getElementById('q1a').innerHTML="<img src='../img/check.png'> Верно!";
            } else {
                document.getElementById('q1a').innerHTML="<img src='../img/cross.png'> Неверно.";
            }
        }
        function qs2 () {
            if (checkRadio('#','q2')) {
                document.getElementById("q2a").innerHTML="<img src='../img/check.png'> Верно!";
            } else {
                document.getElementById("q2a").innerHTML="<img src='../img/cross.png'> Неверно.";
            }
        }
        function qs3 () {
            answer = document.getElementById('q3').value;
            if (answer.trim().toLowerCase() == '#') {
                document.getElementById("q3a").innerHTML="<img src='../img/check.png'> Верно!";
            } else {
                document.getElementById("q3a").innerHTML="<img src='../img/cross.png'> Неверно.";
            }
        }
    </script>
</head>
<body>
<div class="feed">
    <h1>#НазваниеСтатьи#</h1>
    <article>
        
    </article>
</div>
<div class="feed">
    <h2>Контрольные вопросы</h2>
    <ol>
        <li>
            #
            <br>
            <input name="q1" class="blitz"> <input  class="blitz" type="button" onClick="qs1()" value="Ответить"><br>
            <p id="q1a" ></p>
        </li>
        <li>
            #
            <br>
            <label><input name="q2" type="radio" value="#">#</label>
            <label><input name="q2" type="radio" value="#">#</label>
            <label><input name="q2" type="radio" value="#">#</label>
            <input type="button" onClick="qs2()" value="Ответить"><br>
            <p id="q2a"></p>
        </li>
        <li>
            #
            <br>
            <input id="q3" class="blitz"> <input type="button" onClick="qs3()" value="Ответить"><br>
            <p id="q3a"></p>
        </li>
    </ol>
</div>
<?php
include ('../scripts/tomain.php');
?>
</body>
</html>
