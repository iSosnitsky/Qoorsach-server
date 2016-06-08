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
    <title>Принципы устройства</title>
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

        function q1 () {
            answer = document.getElementById('q1').value;
            if (answer.trim().toLowerCase() == 'фон нейман') {
                document.getElementById('q1a').innerHTML="<img src='../img/check.png'> Верно!";
            } else {
                document.getElementById('q1a').innerHTML="<img src='../img/cross.png'> Неверно.";
            }
        }
        function qs2 () {
            if (checkRadio('5','q2')) {
                document.getElementById("q2a").innerHTML="<img src='../img/check.png'> Верно!";
            } else {
                document.getElementById("q2a").innerHTML="<img src='../img/cross.png'> Неверно.";
            }
        }
        function qs3 () {
            if (checkRadio('40','q3')) {
                document.getElementById("q3a").innerHTML="<img src='../img/check.png'> Верно!";
            } else {
                document.getElementById("q3a").innerHTML="<img src='../img/cross.png'> Неверно.";
            }
        }
    </script>
</head>
<body>
<div class="feed">
    <h1>Классические принципы устройства ЭВМ</h1>
    <article>
        Классические принципы построения архитектуры ЭВМ были предложены в 40-х годах ХХ века Дж фон Нейманом. К этим принципам относятся.
    </article>
    <h2>Использование двоичной системы представления данных</h2>
    <article>
        Авторы продемонстрировали преимущества двоичной системы для технической реализации, удобство и простоту выполнения в ней арифметических и логических операций. ЭВМ стали обрабатывать и нечисловые виды информации — текстовую, графическую, звуковую и другие.Двоичное кодирование данных по-прежнему составляет информационную основу компьютера.
    </article>
    <h2>
        Принцип программного управления
    </h2>
    <article>
        Согласно этому принципу программа состоит из набора команд, которые выполняются процессором автоматически друг за другом в определенной последовательности
    </article>
    <h2>
        Принцип однородности памяти
    </h2>
    <article>
        Программы и данные хранятся в одной и той же памяти. Поэтому ЭВМ не различает, что хранится в данной ячейке памяти — число, текст или команда. Над командами можно выполнять такие же действия, как и над данными.
    </article>
    <h2>
        Принцип хранимой программы
    </h2>
    <article>
        программа задавалась путем установки перемычек на специальной коммутационной панели. Нейман предложил сохранять программу в той же самой памяти, что и обрабатываемые ею числа. Отсутствие принципиальной разницы между программой и данными дало возможность ЭВМ самой формировать для себя программу в соответствии с результатами вычислений. Фон Нейман выдвинул основополагающие принципы логического устройства ЭВМ ,и предложил ее структуру которая воспроизводилась в течение первых двух поколений ЭВМ.<br><br>
        Устройство управления (УУ) и арифметико-логическое устройство (АЛУ) в современных компьютерах объединены в один блок — процессор, являющийся преобразователем информации, поступающей из памяти и внешних устройств. Память (ЗУ) хранит информацию (данные) и программы. Запоминающее устройство у современных компьютеров "многоярусно" и включает оперативное запоминающее устройство (ОЗУ) и внешние запоминающие устройства(ВЗУ). ОЗУ- это устройство, хранящее ту информацию, с которой компьютер работает непосредственно в данное время ВЗУ-устройства гораздо большей емкости, чем ОЗУ, но существенно более медленны.
    </article>
    <h2>
        Принцип адресности
    </h2>
    <article>
        Структурно основная память состоит из пронумерованных ячеек. Процессору в произвольный момент времени доступна любая ячейка. Отсюда следует возможность давать имена областям памяти, так, чтобы к запомненным в них значениям можно было бы впоследствии обращаться или менять их в процессе выполнения программы с использованием присвоенных имен.
    </article>
</div>
<div class="feed">
    <h2>Контрольные вопросы</h2>
    <ol>
        <li>
            Кто предложил принципы построения архитектуры ЭВМ?<br>
            <input type="text" id="q1" class="blitz"> <input class="blitz" type="button" onClick="q1()" value="Ответить"><br>
            <p id="q1a" ></p>
        </li>
        <li>
            Сколько принципов построения архитектуры ЭВМ было предложено??<br>
            <label><input name="q2" type="radio" value="7">7</label>
            <label><input name="q2" type="radio" value="5">5</label>
            <label><input name="q2" type="radio" value="2">2</label>
            <input class="blitz" type="button" onClick="qs2()" value="Ответить"><br>
            <p id="q2a"></p>
        </li>
        <li>
            В каких годах были предложены принципы построения архитектуры ЭВМ?
            <br>
            <label><input name="q3" type="radio" value="40">40-x</label>
            <label><input name="q3" type="radio" value="50">50-x</label>
            <label><input name="q3" type="radio" value="60">60-x</label> <input class="blitz" type="button" onClick="qs3()" value="Ответить"><br>
            <p id="q3a"></p>
        </li>
    </ol>
</div>
<?php
include ('../scripts/tomain.php');
?>
</body>
</html>
