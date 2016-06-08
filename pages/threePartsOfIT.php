<?php

include('../scripts/tomain.php');
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
    <title>Понятие информатики</title>
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

        function qs1() {
            if (checkRadio('технические средства', 'q1')) {
                document.getElementById('q1a').innerHTML = "<img src='../img/check.png'> Верно!";
            } else {
                document.getElementById('q1a').innerHTML = "<img src='../img/cross.png'> Неверно.";
            }
        }

        function qs2() {
            if (checkRadio('программные средства', 'q2')) {
                document.getElementById("q2a").innerHTML = "<img src='../img/check.png'> Верно!";
            } else {
                document.getElementById("q2a").innerHTML = "<img src='../img/cross.png'> Неверно.";
            }
        }

        function qs3() {
            if (checkRadio('алгоритмические средства', 'q3')) {
                document.getElementById("q3a").innerHTML = "<img src='../img/check.png'> Верно!";
            } else {
                document.getElementById("q3a").innerHTML = "<img src='../img/cross.png'> Неверно.";
            }
        }
    </script>
</head>
<body>
<div class="feed">
    <h1>Понятие информатики, три её составные части</h1>
    <h2>Hardware (аппаратное обеспечение ЭВМ)</h2>
    <article>
        Технические средства, или аппаратура компьютеров, в английском языке обозначаются словом Hardware, которое
        буквально переводится как "твердые изделия".<br><br>

        Компьютер – универсальная техническая система, способная четко выполнять последовательность операций
        определенной программы. Взаимодействие с пользователем происходит через много сред от алфавитно-цифрового (или
        графического диалога) с помощью дисплея, клавиатуры, мышки до устройств виртуальной реальности.
    </article>
    <h2>Software (программное обеспечение ЭВМ</h2>
    <article>
        Для обозначения программных средств, под которыми понимается совокупность всех программ, используемых
        компьютерами, и область деятельности по их созданию и применению, используется слово Software (буквально —
        "мягкие изделия"), которое подчеркивает равнозначность самой машины и программного обеспечения, а также
        способность программного обеспечения модифицироваться, приспосабливаться и развиваться.
    </article>
    <h2>Brainware</h2>
    <article>
        Brainware - термин, характеризующий алгоритмы. Академик А.А. Дородницин так определял Программированию задачи
        всегда предшествует разработка способа ее решения в виде последовательности действий, ведущих от исходных данных
        к искомому результату, иными словами, разработка алгоритма решения задачи. Для обозначения части информатики,
        связанной с разработкой алгоритмов и изучением методов и приемов их построения, применяют термин Brainware
        (англ. brain — интеллект).<br><br>
        Существует и другое определение термина brainware - характеризующий “мозговой” фактор, т.е. человеческий мозг
        как часть информационных систем.
    </article>
</div>
<div class="feed">
    <h2>Контрольные вопросы</h2>
    <form class="questions">
        <ol>
            <li>
                Что значит Hardware?
                <br>
                <label><input name="q1" type="radio" value="Технические средства"> Технические
                    средства</label><label><input name="q1" type="radio" value="Программные средства">Программные
                    средства</label><label><input name="q1" type="radio" value="Алгоритмические средства">Алгоритмические
                    средства</label> <input class="blitz" type="button" onClick="qs1()" value="Ответить"><br>
                <p id="q1a"></p>
            </li>
            <li>
                Что значит Software?
                <br>
                <label><input name="q2" type="radio" value="Технические средства"> Технические
                    средства</label><label><input name="q2" type="radio" value="Программные средства">Программные
                    средства</label><label><input name="q2" type="radio" value="Алгоритмические средства">Алгоритмические
                    средства</label><input class="blitz" type="button" onClick="qs2()" value="Ответить"><br>
                <p id="q2a"></p>
            </li>
            <li>
                Что значит Brainware?
                <br>
                <label><input name="q3" type="radio" value="Технические средства"> Технические
                    средства</label><label><input name="q3" type="radio" value="Программные средства">Программные
                    средства</label><label><input name="q3" type="radio" value="Алгоритмические средства">Алгоритмические
                    средства</label><input class="blitz"
                                                                                                type="button"
                                                                                                onClick="qs3()"
                                                                                                value="Ответить"><br>
                <p id="q3a"></p>
            </li>
        </ol>
    </form>
</div>
<?php
include('../scripts/tomain.php');
?>
</body>
</html>
