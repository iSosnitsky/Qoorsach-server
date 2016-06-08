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
    <title>Форматы материнских плат</title>
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
            if (checkRadio('vf','q1')) {
                document.getElementById('q1a').innerHTML="<img src='../img/check.png'> Верно!";
            } else {
                document.getElementById('q1a').innerHTML="<img src='../img/cross.png'> Неверно.";
            }
        }
        function qs2 () {
            if (checkRadio('sf','q2')) {
                document.getElementById("q2a").innerHTML="<img src='../img/check.png'> Верно!";
            } else {
                document.getElementById("q2a").innerHTML="<img src='../img/cross.png'> Неверно.";
            }
        }
        function qs3 () {
            if (checkRadio('form','q3')) {
                document.getElementById("q3a").innerHTML="<img src='../img/check.png'> Верно!";
            } else {
                document.getElementById("q3a").innerHTML="<img src='../img/cross.png'> Неверно.";
            }
        }
    </script>
</head>
<body>
<div class="feed">
    <h1>Форматы материнских плат</h1>
    <article>
        Форм-фактор материнской платы — стандарт, определяющий размеры материнской платы для ПК, места ее крепления к корпусу; расположение на ней интерфейсов шин, портов ввода/вывода, сокета центрального процессора и слотов для оперативной памяти, а также тип разъема для подключения блока питания. В последних версиях форм-фактора определяются и требования и к системе охлаждения компьютера. При выборе комплектующих для ПК необходимо помнить, что корпус компьютера должен поддерживать форм-фактор материнской платы.<br><br>
        Форм-фактор ATX (Advanced Technology eXtended) – форм-фактор, который был предложен еще в 1995 г. компанией Intel и с тех пор по сей день сохранил огромную популярность. Системные платы форм фактора ATX имеют размеры 30,5 x 24,4 см. В настоящее время большинство системных плат, корпусов и блоки питания на базе процессоров Intel и AMD выпускаются в формате ATX.<br><br>
        К особенностям спецификации ATX относится следующее:
        <ul>
            <li>
                размещение портов ввода/вывода на системной плате;
            </li>
            <li>
                встроенный разъем типа PS/2 для клавиатуры и мыши;
            </li>
            <li>
                расположение разъемов IDE и FDD ближе к самим устройствам;
            </li>
            <li>
                размещение гнезд процессора в задней части платы, рядом с блоком питания;
            </li>
            <li>
                использование единого 20-контактного и 24-контактного разъемов питания.
            </li>
        </ul>
        На данный момент рекомендуется брать платы с форм-фактором ATX, т.к. они заметно больше по габаритам и, соответственно имеют, больше количество слотов, удобное их расположение, а также расположение чипсета и других разъёмов.<br><br>
        mATX (micro ATX) – уменьшенный стандарт ATX. Он используется в основном в офисных машинах, где не требуется много слотов для наращивания конфигурации. Стандарт mATX имеет размеры 24.4 x 24.4 см и поддерживает 4 слота расширения. Материнская плата стандарта mATX имеет основной разъем для подключения блока питания, содержащий 20 или 24 контакта. Практически все новые модели, начиная с 2003 г. имеют 24-контактный разъем.<br><br>
        EATX (Extended ATX) – основное отличие от ATX это размеры (30.5 x 33.0 см). Основная сфера их применения это серверы.<br><br>
        BTX (Balanced Technology Extended) – новый стандарт, разработанный с целью эффективного охлаждения внутренних компонентов системного блока. BTX имеет сравнительно небольшие размеры и подходит для построения миниатюрных компьютеров. Платы BTX имеют размеры 26.7 х 32.5 см и имеют 7 слотов расширения.<br><br>
        mBTX (micro BTX) – уменьшенный вариант BTX, поддерживающий 4 слота расширения. mBTX – имеют размеры 26.7 х 26.4 см.<br><br>
        mini-ITX – стандарт электрически и механически совместимые с форм-фактором ATX. Форм-фактор mini-ITX разработан компанией VIA Technologies и имеет небольшие размеры (17 х 17 см).<br><br>
        SSI EEB (Server Standards Infrastructure Entry Electronics Bay) – данный форм-фактор материнской платы в основном применяется для построения серверов и имеет размеры 30.5 x 33.0 см. Основной разъем для подключения блока питания имеет 24+8 контактов.<br><br>
        SSI CEB (SSI Compact Electronics Bay) – данный форм-фактор также применяется для построения серверов и имеет 24+8 контактов основной разъем. Габариты таких плат - 30.5 x 25.9 см.<br><br>
        Устаревшие стандарты: Baby-AT; Mini-ATX; полноразмерная плата AT; LPX.<br><br>
        Современные стандарты: АТХ; microATX; Flex-АТХ; NLX; WTX, CEB.<br><br>
        Внедряемые стандарты: Mini-ITX и Nano-ITX; Pico-ITX; BTX, MicroBTX и PicoBTX<br><br>


    </article>
</div>
<div class="feed">
    <h2>Контрольные вопросы</h2>
    <ol>
        <li>
            Какие внедряемые форматы вы знаете?
            <br>
            <label><input name="q1" type="radio" value="vf">Mini-ITX Nano-ITX Pico-iTX BTX MictoBTX PicoBTX</label>
            <label><input name="q1" type="radio" value="rc">СуперЭВМ, МикроЭВМ</label>
            <label><input name="q1" type="radio" value="mm">ATX MictoATX Flex-ATX NLX WTX CEB</label>
            <input class="blitz" type="button" onClick="qs1()" value="Ответить"><br>
            <p id="q1a" ></p>
        </li>
        <li>
            Какие современные форматы вы знаете?
            <br>
            <label><input name="q2" type="radio" value="wk">Mini-ITX Nano-ITX Pico-iTX BTX MictoBTX PicoBTX</label>
            <label><input name="q2" type="radio" value="rc">СуперЭВМ, МикроЭВМ</label>
            <label><input name="q2" type="radio" value="sf">ATX MictoATX Flex-ATX NLX WTX CEB</label>
            <input class="blitz" type="button" onClick="qs2()" value="Ответить"><br>
            <p id="q2a"></p>
        </li>
        <li>
            Чем различаются форматы материнских плат?
            <br>
            <label><input name="q3" type="radio" value="microchips">Наборами микросхем</label>
            <label><input name="q3" type="radio" value="form">Форм-фактором, возможностями</label>
            <label><input name="q3" type="radio" value="material">Материалом основы</label>
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
