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
    <title>Современные ПК</title>
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

        function qs1 () {
            if (checkRadio('прб','q1')) {
                document.getElementById('q1a').innerHTML="<img src='../img/check.png'> Верно!";
            } else {
                document.getElementById('q1a').innerHTML="<img src='../img/cross.png'> Неверно.";
            }
        }
        function qs2 () {
            if (checkRadio('рфв','q2')) {
                document.getElementById("q2a").innerHTML="<img src='../img/check.png'> Верно!";
            } else {
                document.getElementById("q2a").innerHTML="<img src='../img/cross.png'> Неверно.";
            }
        }
        function qs3 () {
            if (checkRadio('эвм','q3')) {
                document.getElementById("q3a").innerHTML="<img src='../img/check.png'> Верно!";
            } else {
                document.getElementById("q3a").innerHTML="<img src='../img/cross.png'> Неверно.";
            }
        }
    </script>
</head>
<body>
<div class="feed">
    <h1>Основные типы современных ПК</h1>
    <article>
        Окинув взглядом столетие компьютерной истории, мы увидим множество совершенно непохожих друг на друга устройств: от громоздких ламповых компьютеров начала пятидесятых до крохотных современных ноутбуков. Однако все они носят название компьютеров и работают по одной и той же схеме – пусть и воплощается она в каждом устройстве по-разному. И нет никакого сомнения, что этой классической схеме будут отвечать и компьютеры, созданные через десять, двадцать и даже сто лет!
    </article>
    <h2>
        Виды современных компьютеров
    </h2>
    <article>
        В современной информатике типы компьютеров различаются в зависимости от их назначения, архитектуры, размеров и функциональных возможностей.<br>
        <br>
        По назначению выделяют следующие виды компьютеров:<br>
        <ol type="a">
            <li>
                универсальные - предназначены для решения различных задач, типы которые не оговариваются. Эти ЭВМ характеризуются: разнообразием форм обрабатываемых данных (числовых, символьных и т.д.) при большом диапазоне их изменения и высокой точности представления; большой емкостью внутренней памяти; развитой системой организации ввода-вывода информации, обеспечивающей подключение разнообразных устройств ввода-вывода.
            </li>
            <li>
                проблемно-ориентированные - служат для решения более узкого круга задач, связанных, как правило, с управлением технологическими объектами, регистрацией, накоплением и обработкой небольших объемов данных, выполнением расчетов по несложным правилам. Они обладают ограниченным набором аппаратных и программных средств.
            </li>
            <li>
                специализированные - применяются для решения очень узкого круга задач. Это позволяет специализировать их структуру, снизить стоимость и сложность при сохранении высокой производительности и надежности. К этому классу ЭВМ относятся компьютеры, управляющие работой устройств ввода-вывода и внешней памятью в современных компьютерах. Такие устройства называются адаптерами, или контроллерами.
            </li>
        </ol>
        <br>
        По размерам и функциональным возможностям различают четыре вида компьютеров: суперЭВМ, большие, малые и микроЭВМ.<br>
        СуперЭВМ являются мощными многопроцессорными компьютерами с огромным быстродействием. Многопроцессорность позволяет распараллеливать решение задач и увеличивает объемы памяти, что значительно убыстряет процесс решения. Они часто используются для решения экспериментальных задач, например, для проведения шахматных турниров с человеком.<br>
        Большие ЭВМ (их называют мэйнфреймами от англ. mainframe) характеризуются многопользовательским режимом (до 1000 пользователей одновременно могут решать свои задачи). Основное направление – решение научно-технических задач, работа с большими объемами данных, управление компьютерными сетями и их ресурсами.<br>
        Малые ЭВМ используются как управляющие компьютеры для контроля над технологическими процессами. Применяются также для вычислений в многопользовательских системах, в системах автоматизации проектирования, в системах моделирования несложных объектов, в системах искусственного интеллекта.<br>
        По назначению микроЭВМ могут быть универсальными и специализированными. По числу пользователей, одновременно работающих за компьютером – много- и однопользовательские. Специализированные многопользовательские микроЭВМ (серверы - от англ. server) являются мощными компьютерами, используемыми в компьютерных сетях для обработки запросов всех компьютеров сети. Специализированные однопользовательские (рабочие станции – workstation, англ.) эксплуатируются в компьютерных сетях для выполнения прикладных задач. Универсальные многопользовательские микроЭВМ являются мощными компьютерами, оборудованными несколькими терминалами. Универсальные однопользовательские микроЭВМ общедоступны. К их числу относятся персональные компьютеры – ПК. Наиболее популярным представителем ПК в нашей стране является компьютер класса IBM PC (International Business Machines – Personal Computer).<br>
        По конструктивным особенностям ПК делятся на стационарные (настольные – тип DeskTop) и переносные. В свою очередь переносные ПК встречаются различных типов, например, ноутбуки, органайзеры, карманные и т.д.<br>
    </article>
</div>
<div class="feed">
    <h2>Контрольные вопросы</h2>
    <ol>
        <li>
            Какие виды компьютеров по назначению вы знаете?
            <br>
            <label><input name="q1" type="radio" value="игр">Игровые, домашние, офисные</label>
            <label><input name="q1" type="radio" value="эвм">СуперЭВМ, большие, малые, микроЭВМ</label>
            <label><input name="q1" type="radio" value="прб">Универсальные, проблемно-ориентированные, специализированные</label>
            <input class="blitz" type="button" onClick="qs1()" value="Ответить"><br>
            <p id="q1a" ></p>
        </li>
        <li>
            По каким характеристикам различают компьютеры?
            <br>
            <label><input name="q2" type="radio" value="рфв">Размер, функции, возможности</label>
            <label><input name="q2" type="radio" value="по">Типа процессора, объем памяти</label>
            <label><input name="q2" type="radio" value="нвс">Название, внешний вид, стоимость</label>
            <input class="blitz" type="button" onClick="qs2()" value="Ответить"><br>
            <p id="q2a"></p>
        </li>
        <li>
            Каких размеров встречаются современные компьютеры?
            <br>
            <label><input name="q3" type="radio" value="атх">ATX, mATX, microATX, BTX</label>
            <label><input name="q3" type="radio" value="эвм">СуперЭВМ, большие, малые, микроЭВМ</label>
            <label><input name="q3" type="radio" value="dt">Desktop, Tower</label>
            <input class="blitz" type="button" onClick="qs3()" value="Ответить"><br>
            <p id="q3a"></p>
        </li>
    </ol>
</div>
<?php
include ('../scripts/tomain.php');
?>
</body>
</html>