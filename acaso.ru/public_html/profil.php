<div class="header" name="footer">

    <div class="label">
        <div class="label-name">
            <h4>Победители</h4>
        </div>
    </div>
    <div class="root" id="wins" data-commentid="1">
        <div class="load-background"></div>
    </div>



    <div class="navigate">

        <a id="logo" href="#">acaso</a>
        <div class="menuProfil" id="topMenu">
            <div id="width-prof" class="profil">
                <div id="elemMenu" class="avatar"><img class="ava" src="<?php echo $row['photo'] ?>" alt=""></div>
                <div id="elemMenu" class="info">
                    <div class="name"><?php echo $row['name'] ?></div>
                    <div class="balance"><?php echo $row['cash'] ?> <rub>₽</rub>
                    </div>
                </div>
                <div id="elemMenu" class="strel"><img style="height: 1vh; margin-right: 2vh;" src="/image/strel.png" alt=""></div>
            </div>
            <div class="openSpan" id="span">
                <!--<button id="width-prof" class="btnMenu">Выводы</button-->
                <a href="/auth/out.php"><button id="width-prof" class="btnMenu">Выход</button></a>
            </div>
        </div>
        <button onclick="bring()" id="come">Вывести</button>

    </div>

    <div class="midle-bank">
        <div style="margin-top: 25vh;" class="bank">
            <h1>Призовой фонд: <?php echo $count; ?> <rub>₽</rub>
            </h1>
            <timer>До розыгрыша осталось:&nbsp;<div id="timer">
                    <?php 
                $result_date_prize = $mysqli->query('SELECT * FROM date WHERE id = 1') or die('Запрос не удался: ' . mysql_error());
		        $date_sql_prize = $result_date_prize->fetch_assoc();
				$date_prize = $date_sql_prize ['date'];
                $date_prize_sec = abs(strtotime($date_prize) - strtotime(date("Y-m-dTH:i:s+3:00")));
                print (floor($date_prize_sec/86400));
                echo ' дней ';
                print date("G часа i мин s сек", mktime(0, 0, $date_prize_sec));
            ?>
                </div>
            </timer>

        </div>
    </div>

    <div class="midle">
        <?php if($resultBank == 0){ ?>
        <div class="buy">
            <form action="qiwi_pay">
                <button class="glavButt" id="takePart">Участвовать</button>
            </form>
            <div class="comment">Стоимость участия - 1 рубль. Для участия нажми кнопку.</div>
            <?php }else{?>
            <div class="success">
                <t>Желаем удачи!</t>
            </div>
            <?php } ?>
        </div>

    </div>

</div>
