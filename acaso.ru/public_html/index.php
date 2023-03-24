<?php
    session_start();
?>


<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="cleartype" content="on">
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>acaso</title>
    <link rel="shortcut icon" href="/image/favlogo.ico">
    <link rel="stylesheet" href="style.css">

    <?php 
      if(!isset($_SESSION["id"]) || $_SESSION["id"] == '0'){  ?>
    <link rel="stylesheet" href="/css/adaptivRegistration.css">
     <link rel="stylesheet" href="/css/winsReg.css">

</head>

<body>



    <div class="togle">
        <?php  require_once("registration.php");  ?>

    </div>




    <?php
	  	} else{
		  		require_once("bdconnect.php");
	            
		  		$id = $_SESSION["id"];
		  		$sql = "SELECT * FROM ".$db_table." WHERE id = '".$id."' ";
		  		$result = $mysqli->query($sql);
		  		$row = $result->fetch_assoc();
		  		
		  		$res = $mysqli->query("SELECT COUNT(*) FROM ".$bank_table.""); // выполняем запрос
		  		$count = $res->fetch_array(MYSQLI_NUM)[0]; // получаем количество строк
		  		$query_select = "SELECT * FROM ".$bank_table." WHERE id_user = '".$id."' ";
		  		$bankRes = $mysqli->query($query_select);
		  		$resultBank = $bankRes->num_rows;
	?>

    <link rel="stylesheet" href="/mobil/test/test.css">
    <link rel="stylesheet" href="/mobil/index.css">
    <link rel="stylesheet" href="/css/wins.css">
    <link rel="stylesheet" href="/css/adaptiveProfile.css">
    </head>

    <body>



        <div class="bring-toggle">
            <div onclick="bringOff()" class="bring-shadow"></div>
            <div class="window-bring">

                <div id="messages" class="success-messages"></div>
                <div id="messages" class="error-messages"></div>

                <form action="/#" id="form" onsubmit="return false;">

                    <t style="margin-bottom: 1vh;">Введите номер своего Qiwi кошелька</t>

                    <label for="bring_qiwi"></label>
                    <div class="plus">+<input class="inpQiwi" id="bring_qiwi" type="text" required></div>

                    <t style="margin-bottom: 1vh;" class="mrgn">Введите сумму на вывод</t>

                    <label for="bring_cash"></label>
                    <div class="plus">
                        <rub>₽</rub><input id="bring_cash" class="inpQiwi" type="text" style="text-align:center;" required>
                    </div>

                    <button class="mrgn" id="bring_send">Вывести</button>
                </form>
            </div>
        </div>

        <div class="container">
            <?php require_once("profil.php"); ?>
        </div>

        <div class="device">
            <div class="label">
                <div class="label-name">
                    <div class="headerPanel">
                        <img src="image/back.svg" alt="back" class="back-wins" onclick="winsOff()">
                        <h4>Победители</h4>
                    </div>

                </div>
            </div>
            <?php  require_once("device.php");  ?>
            <div class="root" id="wins-phone" data-commentid="2"></div>

        </div>


        <div class="footer"></div>
        <div class="footerInfo">
            <div class="footerInfoBlock"><a href="/docs/userAgreement">Пользовательское соглашение</a></div>
            <div class="footerInfoBlock" id="midle"><a href="/docs/politica">Политика конфиденциальности<br>персональных данных</a></div>
            <div class="footerInfoBlock">Наши контакты:
                <div class="contacts">
                    <a href="https://vk.com/acasoru" target="_blank"><img src="image/vkFoot.png" alt=""></a>
                    <img id="ico" src="image/instFoot.svg" alt="">
                </div>
            </div>
            <div class="date"> Все права защищены © <?php echo date("Y"); ?> </div>
        </div>



        <script type="text/javascript" src="js/footer.js"></script>
        <script>
            const winsOn = function() {
                document.getElementsByClassName("root")[1].style.display = "flex";
                document.getElementsByClassName("label")[1].style.display = "flex";
            }
            const winsOff = function() {
                document.getElementsByClassName("root")[1].style.display = "none";
                document.getElementsByClassName("label")[1].style.display = "none";
            }

        </script>

        <!-- Форма и обработка вывода -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            $('.inpQiwi').on('input', function() {
                $(this).val($(this).val().replace(/[^\d]/g, ''))
            });

        </script>

        <script type="text/javascript">
            $("#profil-phone").css("display", "block");

        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#bring_send').click(function() {
                    let bring_qiwi = $('#bring_qiwi').val();
                    let bring_cash = $('#bring_cash').val();
                    $.ajax({
                        url: "form_bring/bringOut_form.php",
                        type: "post",
                        dataType: "json",
                        data: {
                            "bring_qiwi": bring_qiwi,
                            "bring_cash": bring_cash
                        },
                        success: function(data) {
                            $('.success-messages').html(data.result);
                            $('.error-messages').html(data.error);
                        }
                    });
                });
            });

        </script>
        <script type="text/javascript">
            function bring() {
                document.getElementsByClassName('bring-toggle')[0].id = 'on';
            }

            function bringOff() {
                document.getElementsByClassName('bring-toggle')[0].id = 'off';
            }

        </script>
        <!-- Форма и обработка вывода -->

        <!-- on off menu -->
        <script type="text/javascript">
            const menuProfil = document.getElementById('topMenu');
            const openSpan = document.getElementById('span');
            let i = 0;
            window.onclick = function(event) {
                if (event.target.className == "profil") {
                    i++;
                    if (i % 2 != 0) {
                        menuProfil.style.backgroundColor = 'white';
                        openSpan.style.display = 'flex';
                        console.log(i);
                    } else {
                        offSpan();
                    }
                } else {
                    offSpan();
                    i = 0;
                }
            }

            const offSpan = function() {
                menuProfil.style.backgroundColor = '';
                openSpan.style.display = 'none';
            }

        </script>
        <!-- on off menu -->

        <?php } ?>




        <script type="text/javascript">
            document.addEventListener('scroll', e => e.preventDefault());

        </script>

        <script type="text/javascript" src="js/blockOpen.js"></script>






        <!-- React -->
        <script src="https://unpkg.com/react@16/umd/react.production.min.js" crossorigin></script>
        <script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js" crossorigin></script>
        <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <!-- React -->


       <script type="text/javascript">
            (function(m, e, t, r, i, k, a) {
                m[i] = m[i] || function() {
                    (m[i].a = m[i].a || []).push(arguments)
                };
                m[i].l = 1 * new Date();
                k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
            })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(57422236, "init", {
                clickmap: true,
                trackLinks: true,
                accurateTrackBounce: true,
                webvisor: false,
                ecommerce: "dataLayer"
            });

        </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/57422236" style="position:absolute; left:-9999px;" alt="" /></div>
        </noscript>
    </body>

</html>
