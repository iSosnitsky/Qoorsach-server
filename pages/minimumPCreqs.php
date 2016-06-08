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
    <title>Состав ПК</title>
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
            if (checkRadio('мппб','q1')) {
                document.getElementById('q1a').innerHTML="<img src='../img/check.png'> Верно!";
            } else {
                document.getElementById('q1a').innerHTML="<img src='../img/cross.png'> Неверно.";
            }
        }
        function qs2 () {
            if (checkRadio('10','q2')) {
                document.getElementById("q2a").innerHTML="<img src='../img/check.png'> Верно!";
            } else {
                document.getElementById("q2a").innerHTML="<img src='../img/cross.png'> Неверно.";
            }
        }
        function qs3 () {
            if (checkRadio('комп','q3')) {
                document.getElementById("q3a").innerHTML="<img src='../img/check.png'> Верно!";
            } else {
                document.getElementById("q3a").innerHTML="<img src='../img/cross.png'> Неверно.";
            }
        }
    </script>
</head>
<body>
<div class="feed">
    <h1>Минимальный состав ПК и дополнительные устройства</h1>
    <article>
        Персональный компьютер (стандартная аббревиатура — «ПК») — компьютер, предназначенный для эксплуатации одним пользователем, то есть для личного использования. К ПК условно можно отнести также и любой другой компьютер, используемый конкретным человеком в качестве своего личного компьютера. Подавляющее большинство людей используют в качестве ПК настольные и различные переносные компьютеры.
        <br><br>
        Основные составные части типичного ПК:
        <ul>
            <li>
                Монитор,
            </li>
            <li>
                Материнская плата,
            </li>
            <li>
                Центральный процессор,
            </li>
            <li>
                Оперативная память,
            </li>
            <li>
                Карты расширений,
            </li>
            <li>
                Блок питания,
            </li>
            <li>
                Оптический привод,
            </li>
            <li>
                Жёсткий диск,
            </li>
            <li>
                Компьютерная мышь,
            </li>
            <li>
                Клавиатура.
            </li>
        </ul>
        <br>
        <b>Монитор </b>является устройством вывода текстовой и графической информации, он позволяет отображать текстовую информацию, векторную, растровую, трехмерную графику и т.д. Монитор является одним из главных устройств взаимодействия ПК с пользователем.<br><br>
        <b>Клавиатура </b>является устройством ввода данных (текст и команды), позволяет управлять ресурсами ПК.<br><br>
        <b>Компьютерная мышь</b> также является устройством ввода данных. Мышь передаёт информацию о перемещении курсора пользователем, позволяет вводить команды и работать с контекстным меню.<br><br>
        <b>Жёсткий диск </b>(накопитель на жёстких магнитных дисках или НЖМД (англ. hard (magnetic) disk drive, HDD, HMDD, в компьютерном сленге «винчестер») — запоминающее устройство (устройство хранения информации) произвольного доступа, основанное на принципе магнитной записи. Является основным накопителем данных в большинстве компьютеров.<br><br>
        <b>Оперативная память </b>(англ. Random Access Memory, память с произвольным доступом) — энергозависимая часть системы компьютерной памяти, в которой временно хранятся данные и команды, необходимые процессору для выполнения им операции.<br>
        <b>Материнская плата </b>(системная плата (англ. motherboard, MB), также используется название англ. mainboard — главная плата) — это сложная многослойная печатная плата, на которой устанавливаются основные компоненты персонального компьютера либо сервера начального уровня (центральный процессор, контроллер ОЗУ и собственно ОЗУ, загрузочное ПЗУ, контроллеры базовых интерфейсов ввода-вывода).Именно материнская плата объединяет и координирует работу таких различных по своей сути и функциональности комплектующих, как процессор, оперативная память, платы расширения и всевозможные накопители. Это второй по важности компонент системного блока.<br><br>
        <b>Центральный процессор </b>(ЦП, или центральное процессорное устройство — ЦПУ; англ. central processing unit, сокращенно — CPU, дословно — центральное обрабатывающее устройство) — электронный блок либо микросхема — исполнитель машинных инструкций (кода программ), главная часть аппаратного обеспечения компьютера или программируемого логического контроллера.<br><br>
        <b>Карта расширения (адаптер) </b>в информатике — печатная плата, которую помещают в слот расширения материнской платы компьютерной системы с целью добавления дополнительных функций. Один край карты расширения оснащён контактами, точно соответствующими разъёму гнезда материнской платы. Контакты обеспечивают электрическое соединение между компонентами карты и материнской платы. Плата расширения предназначена для расширения функций персонального компьютера. Может содержать оперативную память и устройства ввода-вывода. Могут обмениваться данными с другими устройствами на шине.<br><br>
        <b>Оптический привод </b>— устройство, имеющее механическую составляющую, управляемую электронной схемой, и предназначенное для считывания и, (в некоторых моделях), записи информации с оптических носителей информации в виде пластикового диска с отверстием в центре (компакт-диск, DVD и т. д.); процесс считывания/записи информации с диска осуществляется при помощи лазера.<br><br>
        <b>Блок питания </b>— это устройство, предназначенное для обеспечения питания электроприбора электрической энергией, при соответствии требованиям её параметров: напряжения, тока, и т. д. путём преобразования энергии других источников питания. Источник электропитания может быть интегрированным в общую схему (обычно в простых устройствах, либо когда недопустимо даже незначительное падение напряжения на подводящих проводах — например материнская плата компьютера имеет встроенные преобразователи напряжения для питания процессора), выполненным в виде модуля (блока питания, стойки электропитания и т. д.), или даже расположенным в отдельном помещении (цехе электропитания).<br><br>
        
    </article>

</div>
<div class="feed">
    <h2>Контрольные вопросы</h2>
    <ol>
        <li>
            Каков минимальный состав ПК?
            <br>
            <label><input name="q1" type="radio" value="wk">Процессор, память, блок питания, монитор</label>
            <label><input name="q1" type="radio" value="rc">Материнская плата, видеокарта, клавиатура</label>
            <label><input name="q1" type="radio" value="мппб">Материнская плата, процессор, память, блок питания</label>
            <input class="blitz" type="button" onClick="qs1()" value="Ответить"><br>
            <p id="q1a" ></p>
        </li>
        <li>
            Сколько составных частей ПК вы рассмотрели?
            <br>
            <label><input name="q2" type="radio" value="8">8</label>
            <label><input name="q2" type="radio" value="10">10</label>
            <label><input name="q2" type="radio" value="12">12</label>
            <input class="blitz" type="button" onClick="qs2()" value="Ответить"><br>
            <p id="q2a"></p>
        </li>
        <li>
            Как расшифровывается ПК?
            <br>
            <label><input name="q3" type="radio" value="комп">Персональный компьютер</label>
            <label><input name="q3" type="radio" value="кран">Пожарный кран</label>
            <label><input name="q3" type="radio" value="карта">Перфокарта</label>
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
