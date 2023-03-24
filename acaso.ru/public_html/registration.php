		<div class="desctop">

		    <?php include_once("form_auth.php"); ?>
		    <div class="block">
		        <div class="navigate">

		            <a id="logo" href="https://acaso.ru">acaso</a>
		            <button id="come" onclick="onOff.on(this.id)">Войти</button>

		        </div>
		        <div class="midle">

		            <h1 id="utp">Ежедневные розыгрыши денег<br>за 1 рубль</h1>

		            <!-- <div class="main-illustration"></div>-->

		            <object class="main-illustration" type="image/svg+xml" data="image/illustration1.svg"></object>

		            <button class="glavButt" id="reg" onclick="onOff.on(this.id)">Регистрация</button>
		            <img src="image/wheel.png" class="wheel" id="wheel1">
		            <img src="image/wheel.png" class="wheel" id="wheel2">
		            <div class="dialog">
		                <div class="text" id="question">Любишь розыгрыши?</div>
		                <div id="dialog"></div>
		                <div id="dialogButton">
		                    <button class="yes" id="button1" onclick="openDialog.click(1)">Да</button>
		                    <div class="text" id="about1">- Тогда поехали!</div>
		                </div>

		            </div>
		            <div class="scroll">
		                <img id="scroll" src="gif/scroll.gif" alt="scroll">
		                <img id="swipeUp" src="gif/swipeUp.gif" alt="swipeUp">
		            </div>
		        </div>


		        <div class="content" id="block1">
		            <h3 id="caption">КАК РАБОТАЮТ РОЗЫГРЫШИ?</h3>
		            <div class="descriptionOll">
		                <div class="description">
		                    <object type="image/svg+xml" data="image/illustration2.svg"></object>
		                    <d>Жмёте УЧАСТВОВАТЬ<br>и оплачиваете рубль<br></d>
		                </div>

		                <div class="description" id="center">
		                    <object type="image/svg+xml" data="image/illustration3.svg"></object>
		                    <d>Рубль попадает в призовой фонд</d>
		                </div>

		                <div class="description">
		                    <object type="image/svg+xml" data="image/illustration4.svg"></object>
		                    <d>Розыгрыш призового фонда в 20:00 МСК</d>
		                </div>
		            </div>
		        </div>

		        <div class="regBlockPhone">
		            <button class="glavButt" id="reg" onclick="onOff.on(this.id)">Регистрация</button>
		        </div>

		        <div class="content" id="block2">
		            <div class="text" id="question">Заинтересовался?</div>
		            <div id="dialog"></div>
		            <div id="dialogButton">
		                <button class="yes" id="button2" onclick="openDialog.click(2)">Да</button>
		                <div class="text" id="about2">- Дальше лучше!</div>
		            </div>
		        </div>

		        <div class="content" id="block3">
		            <h3 id="caption">КАК РАСПРЕДЕЛЯЕМ ПРИЗОВОЙ ФОНД?</h3>
		            <div class="descriptionOll">
		                <div class="description">
		                    <num>1<br>место</num><br>
		                    <place>
		                        Выигрывает<br>
		                        <proc>45%</proc>
		                    </place>
		                </div>
		                <div class="description" id="center">
		                    <num>2-3<br>место</num><br>
		                    <place>
		                        Выигрывает по<br>
		                        <proc>15%</proc>
		                    </place>
		                </div>

		                <div class="description">
		                    <num>4-8<br>место</num><br>
		                    <place>
		                        Выигрывает по<br>
		                        <proc>5%</proc>
		                    </place>
		                </div>
		            </div>
		        </div>

		        <div class="regBlockPhone">
		            <button class="glavButt" id="reg" onclick="onOff.on(this.id)">Регистрация</button>
		        </div>

		        <div class="content" id="block4">
		            <div class="text" id="question">Хочешь выиграть?</div>
		            <div id="dialog"></div>
		            <div id="dialogButton">
		                <button class="yes" id="button3" onclick="openDialog.click(3)">Да</button>
		                <div class="text" id="about3">- Узнай о преимуществах!</div>
		            </div>
		        </div>

		        <div class="content" id="block5">
		            <h3 id="caption">ПРЕИМУЩЕСТВА</h3>
		            <div class="descriptionOll">
		                <div class="description">
		                    <object type="image/svg+xml" data="image/illustration5.svg"></object>
		                    <d>Выводим любые суммы от 1 рубля<br></d>
		                </div>

		                <div class="description" id="center">

		                    <div class="root" data-commentid="1"></div>
		                    <d>Есть vk ссылка на победителей</d>
		                </div>

		                <div class="description">
		                    <object type="image/svg+xml" data="image/illustration7.svg"></object>
		                    <d>Не берём <br>комиссий</d>
		                </div>
		            </div>
		        </div>



		        <div class="content" id="block6">
		            <div class="footer-landing">
		                <a href="/docs/userAgreement">Пользовательское соглашение</a>
		                <a id="center" href="/docs/politica">
		                    Политика конфиденциальности<br>персональных данных</a>

		                <div class="date-landing"> Все права защищены © <?php echo date("Y"); ?> </div>
		            </div>
		            <div class="text" id="question">Готов к регистрации?</div>
		            <div id="dialog"></div>
		            <div id="dialogButton">
		                <button class="yes" id="button4" onclick="openDialog.click(4)">Да</button>
		                <div class="text" id="about4">- Регистрируйся скорее!
		                    <div class="buttonRegVk">
		                        <a href="/auth/vk_reg.php"><button class="regButt" id="vkReg">Через<img src="image/vk-auth.svg" alt="vk"></button>
		                        </a>
		                    </div>
		                </div>
		            </div>
		        </div>

		        <div class="regBlockPhone">
		            <div id="caption">Для участия - пройди регистрацию в 3 клика!</div>
		            <button class="glavButt" id="reg" onclick="onOff.on(this.id)">Регистрация</button>
		        </div>

		        <div class="road" id="roadJs">
		            <div class="lines">
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>

		                <div class="line"></div>
		                <div class="line"></div>

		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>

		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>

		                <div class="line"></div>

		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>

		                <div class="line"></div>
		                <div class="line"></div>

		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="line"></div>
		                <div class="finish">
		                    <t>Finish</t>
		                </div>
		            </div>
		        </div>

		    </div>
		</div>



		<script type="text/javascript">
		    let check = 0;
		    window.addEventListener('scroll', function() {

		        if (check == 0) {
		            document.getElementsByClassName("lines")[0].style.transform = 'translateY(0)';
		            document.getElementsByClassName("glavButt")[0].style.transform = 'translateY(41vh)';
		            document.getElementsByClassName("glavButt")[0].style.transition = '1s';
		            document.getElementsByClassName("wheel")[0].style.transition = '1s';
		            document.getElementsByClassName("wheel")[1].style.transition = '1s';
		            document.getElementsByClassName("dialog")[0].id = "appearance";
		        }

		        if (check == 4) {
		            document.getElementsByClassName("glavButt")[0].style.transition = '0.3s';
		            document.getElementsByClassName("wheel")[0].style.transition = '0.3s';
		            document.getElementsByClassName("wheel")[1].style.transition = '0.3s';
		        }

		        let scrollLocal = scrollY;

		        document.getElementsByClassName("block")[0].style.transform = 'translateX( -' + scrollY + 'px)';
		        document.getElementsByClassName("glavButt")[0].style.transform = 'translateX( ' + scrollY + 'px) translateY(41vh)';
		        document.getElementsByClassName("wheel")[0].style.transform = 'translateX( ' + scrollY + 'px) rotate(' + scrollY + 'deg) translateY(0)';
		        document.getElementsByClassName("wheel")[1].style.transform = 'translateX( ' + scrollY + 'px) rotate(' + scrollY + 'deg) translateY(0)';
		        if (check < 5) {
		            check++;
		        }

		    });

		</script>


		<script type="text/javascript">
		    const openDialog = {
		        click: function(name) {
		            document.getElementById('about' + name).id = "on";
		            document.getElementById('button' + name).id = "off";
		        }
		    }

		</script>

		<script type="text/babel" src="src/index.js"></script>
