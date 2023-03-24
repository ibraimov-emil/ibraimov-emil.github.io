	<nav id="menu" class="menu">
	    <div class="profil" id="profil-phone" style="display:none;">
	        <div class="avatar"><img class="ava" src="<?php echo $row['photo'] ?>" alt=""></div>
	        <div class="info">
	            <div class="name">Имя: <?php echo $row['name'] ?></div>
	            <div class="balance">Баланс: <?php echo $row['cash'] ?> <rub>₽</rub>
	            </div>
	        </div>
	        <button onclick="bring()" id="btnDev">Вывести</button>
	        <div class="infoFAQ">acaso</div>
	        <a href="/auth/out.php"><button id="btnDev">Выход</button></a>

	    </div>
	</nav>
	<main id="panel" class="panel">
	    <header class="panel-header">
	        <button class="btn-hamburger js-slideout-toggle">&#8801;</button>
	    </header>

	    <div class="header">
	        <div class="navigate">

	            <a id="logo" href="#">acaso</a>



	        </div>

	        <div class="midle-bank">
	            <div style="margin-top: 21vh;" class="bank">
	                <h1>Призовой фонд: <?php echo $count; ?> <rub>₽</rub>
	                </h1>
	                <timer>До розыгрыша осталось:&nbsp;<div id="timer">
	                        <?php 
                        print (floor($date_prize_sec/86400));
                        echo ' дней ';
                        print date("G часа i мин s сек", mktime(0, 0, $date_prize_sec));
                        ?>
	                    </div>
	                </timer>
	            </div>
	        </div>

	        <div class="midle">

	            <div class="buy">
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
	        <div class="button-wins">
	            <button onclick="winsOn()"><img src="image/star.svg" alt=""></button>
	            <h4>Победители</h4>
	        </div>
	    </div>
	    <script>
	        mocha.setup('bdd');
	        var exports = null;

	        function assert(expr, msg) {
	            if (!expr) throw new Error(msg || 'failed');
	        }

	    </script>
	    <script src="/mobil/dist/slideout.js"></script>
	    <script src="/mobil/test/test.js"></script>
	    <script>
	        window.onload = function() {
	            document.querySelector('.js-slideout-toggle').addEventListener('click', function() {
	                slideout.toggle();
	            });

	            document.querySelector('.menu').addEventListener('click', function(eve) {
	                if (eve.target.nodeName === 'A') {
	                    slideout.close();
	                }
	            });

	            var runner = mocha.run();
	        };

	    </script>



	    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

	    <script type="text/babel" src="src/index.js"></script>
