<?php
$db = mysqli_connect("localhost", "root", "", "Kursach");
mysqli_query($db, "set names utf8");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>КАЛИНИНГРАДСКИЙ МОРСКОЙ РЫБОПРОМЫШЛЕННЫЙ КОЛЛЕДЖ</title>
	<link rel="stylesheet" href="styles/root.css">
	<link rel="stylesheet" href="styles/Sudomex.css">
</head>
<body>
    <div id="page-wrapper">
		<header>
			<div class="header-line">
				<div class="header-text">
					<ul>
						<li><a href="index.html">Главная</a></li>
						<li><a href="college.html">Колледж</a></li>
						<li><a href="studuing.html">Обучение</a></li>
						<li><a href="admission.php">Поступление</a></li>
						<li><a href="contacts.html">Контакты</a></li>
					</ul>
				</div>
			</div>
			<div class="header-underline">
				<svg xmlns="http://www.w3.org/2000/svg" width="1920" height="72" viewBox="0 0 1920 72" fill="none">
					<path d="M1001 10V0H975.401L959.5 15L943.83 0H918V9.99812H939.234L952 23.0606L932 43.6042L959.51 72L987 43.6052L967 23.0606L980 10L1001 10.103L1001 10ZM972 43.5L959.5 56L947 43.6052L959.5 31L972 43.5Z" fill="#F4CA2F"/>
					<path d="M0 0H918V10H0V0Z" fill="#F4CA2F"/>
					<path d="M1001 0H1920V10H1001V0Z" fill="#F4CA2F"/>
				</svg>
			</div>
			<div class="studiyng-form-holder">
				<div class="studiyng-form">
					
				</div>
			</div>
		</header>
		<div class="wrapper">
		<section id="glav">
            <div class="container">
				<div class="header-inner">
					<br>
					<h1>Cпециальность</h1>
					<h1>ЭКСПЛУАТАЦИЯ СУДОВЫХ ЭНЕРГЕТИЧЕСКИХ УСТАНОВОК</h1>
				</div>
				<div class="tree">
				<p>КВАЛИФИКАЦИЯ:</p>
				<p>СРОК ОБУЧЕНИЯ:</p>
				<p>ФОРМА ОБУЧЕНИЯ:</p>
			</div>
				<div class="tree2">
                        <span>техник-судомеханик</span>
                        <span>3 года 10 месяцев</span>
                        <span>очная заочная</span>
				</div>
		</section>
		</div>
		</header>
		<section id="management">
			<div class="maneg-container">
				<div class="maneg-inner">
					<br>
					<br>
					<h4>КОНТАКТЫ</h4>
					<p class="adres">236039, г. Калининград, ул. Мореходная 3 </p>
					<p class="mail">smo@kmrk.ru</p>
					</p>
					<br>
					<hr>
					<br>
					<p><img src="assets/images/manegement/Nikishin 1.png"></p>
					<h4>ЗАВЕДУЮЩИЙ ОТДЕЛЕНИЕМ</h4>
					<h4>Никишин Михаил Юрьевич</h4>
                    <p class="info-Nikishin">к.п.н., член-корреспондент Международной академии холода </p>
					<hr>
					
					<h4>ЗАВЕДУЮЩИЙ СПЕЦИАЛЬНОСТЬЮ</h4>
					<h4>Пыленок Дмитрий Андреевич </h4>
                    <p><img src="assets/images/manegement/Пыленок Д.А 1.png"></p>
                    <p class="info-Pilenok">учебный корпус №1, этаж 2, каб. 1212 +7 (4012) 57-83-69</p>
					<br>
					<hr>
				
					<h4>Секретарь</h4>
					<h4>Лесечко Наталья Владимировна</h4>
                    <p><img src="assets/images/manegement/Лесечко Н.В 1.png"></p>
                    <p class="info-Lesenko">учебный корпус №2, этаж 2, каб. 2203 + 7 (4012) 57-83-74 </p>
                    <p class="mail-Lesechko">n.lesechko@kmrk.ru</p>
					<br>
					<hr>
				
                    <h4>ДИСПЕТЧЕР УЧЕБНОГО ОТДЕЛЕНИЯ (ПО ЗАОЧНОЙ ФОРМЕ ОБУЧЕНИЯ)</h4>
					<h4>Куряева Ольга Сергеевна</h4>
                    <p><img src="assets/images/manegement/Куряева О.С 1.png"></p>
                    <p class="info-Lesenko">учебный корпус №1, этаж 1, каб. 1109,+7 (4012) 57-82-64 </p>
                    <p class="mail-Kyriaeva">o.kuryaeva@kmrk.ru</p>
				</div>
			</div>
		</section>
        <section id="college-info">
			<div class="container">
				<div class="info-inner">
                    <div class="otstupy-izobrazheniye-slevo">
                        <p><img src="assets/images/Special_info/6 894531.png" alt="ZorNet.Ru — сайт для вебмастер">Здесь идет описание</p>
                        </div>
					<h4>О направлении подготовки специалистов среднего звена базового уровня:</h4>
                    <br>
                    <p>Курсанты получают знания и навыки в области эксплуатации, техобслуживания и ремонта судовых энергоустановок, судовых систем корпусов судов, буровых платформ, плавучих и автономных энергетических установок, дизельных электростанций, газо-турбокомпрессорных установок, а так же обеспечения безопасности мореплавания и организации работы коллектива исполнителей. </p>
                    <br>
                    <br>
                  
                    <div class="otstupy-izobrazheniye-slevo">
                        <p><img src="assets/images/Special_info/image 2.png" alt="ZorNet.Ru — сайт для вебмастер">Здесь идет описание</p>
                        </div>
                    <p> Подготовка ведётся в соответствии с требованиями Международной конвенции и Кодекса по подготовке и дипломировании моряков и несении вахты (ПДНВ-78), имеет сертификацию DNV Certification OY/AB (Финляндия) на соответствие системы менеджмента качества стандарту и позволяет выпускникам занимать должности командного состава на рыбопромысловых и морских судах России и иностранных государств. <p>
                    <br>
                    <h2>Профессиональные дисциплины</h2>
					<p>— Механика</p>
                    <div class="otstupy-izobrazheniye-slevo">
                        <p><img src="assets/images/Special_info/image 3 .png" alt="ZorNet.Ru — сайт для вебмастер">Здесь идет описание</p>
                        </div>
                    <p>— Техническая термодинамика и теплопередача</p>
                    <p>— Электроника и электротехника</p>
                    <p>— Основы эксплуатации, технического обслуживания и ремонта судового энергетического оборудования</p>
                    <p>— Теория и устройство судна</p>
                    <p>— Инженерная графика</p>
                    <p>— Материаловедение</p>
                    <p>— Метрология и стандартизация</p>
                    <p>— Безопасность жизнедеятельности</p>
                    <div class="otstupy-izobrazheniye-slevo">
                        <p><img src="assets/images/Special_info/image 4.png" alt="ZorNet.Ru — сайт для вебмастер">Здесь идет описание</p>
                        </div>
                    <p>— Безопасность жизнедеятельности на судне и транспортная безопасность</p>
                    <p>— Основы управления структурным подразделением</p>
                    <h2>Полученные знания позволят</h2>
					<p>— обеспечивать оптимальный режим работы главных энергетических установок судна, вспомогательных механизмов и связанных с ними систем управления,</p>
                    <P>— обслуживать и ремонтировать судовое оборудование,</P>
                    <P>— эксплуатировать судовые технические средства в соответствии с установленными правилами и процедурами, обеспечивающими безопасность операций и отсутствие загрязнения </P>
                    <div class="otstupy-izobrazheniye-slevo">
                        <p><img src="assets/images/Special_info/image 5.png" alt="ZorNet.Ru — сайт для вебмастер">Здесь идет описание</p>
                        </div>
                    <P>— контролировать выполнение национальных и международных требований по эксплуатации судна,</P>
                    <p>— координировать действия подчиненных членов экипажа судна при организации учебных пожарных тревог, предупреждения возникновения пожара и при тушении пожара, при авариях, при оставлении судна, использовать спасательные шлюпки, спасательные плоты и иные спасательные средства, применять средства по борьбе за живучесть судна,</p>
                     <p>— оказывать первую медицинскую помощь пострадавшим,</p>
                    <p>— проводить мероприятия по обеспечению транспортной безопасности,</p>
                    <h2>Трудоустройство выпускников</h2>
                    <P>Рыбодобывающие и судоходные транспортные компании, суда морского и внутреннего водного транспорта, энергетические установки судов, освоения шельфов и буровых платформ, плавучих дизельных электростанций; - газо-турбокомпрессорные установки; судоремонтные и судостроительные организации.</P>
                    <br>
                    <br>
                    <h2>Специальность позволяет стать</h2>
                    <p>— мотористом (машинистом),</p>
                    <p>— вахтенным механиком.</p>
                    <p>Программа обучения предусматривает освоение рабочей профессии с присвоением квалификации:моторист</p>
                    <p>— разработчиком веб и мультимедийных приложений.</p>
                    <br>
                    <h2>Квалификация: администратор баз данных</h2>
                    <p>О направлении подготовки специалистов среднего звена базового уровня:</p>
                    <br>
                    <p>Программа дает основы высшей математики и математической логики, технологии разработки и проектирования информационных систем, навыки программирования, устройства, обслуживания и сопровождения информационных систем. Обучающие получают знания о передовых информационных технологиях для дальнейшей автоматизации управления предприятием в современных бизнес-условиях, об организации инфраструктуры информационных технологий предприятия.                    </p>
                </section>
				<footer>
					<div class="footer-line"></div>
					<div class="footer-info-holder">
						<div class="footer-info">
							<div class="kmrk-logo">
								<svg xmlns="http://www.w3.org/2000/svg" width="166" height="41" viewBox="0 0 166 41" fill="none">
									<path d="M0.00663941 26.8949H1.31902C3.44583 26.8949 3.53325 26.3284 3.53325 25.4387V7.9108C3.53325 6.97907 3.57751 6.02743 1.59898 6.02743H0V0.0121722H17.7647V6.02743H17.0178C15.9732 6.02743 15.0459 6.21997 15.0459 7.57662V12.9302L21.1984 7.28891C21.4341 7.1019 21.9508 6.49219 21.9508 6.29965C21.9508 6.06284 20.9671 6.01969 20.7812 6.01969H20.2589V0.00553279H37.2756L37.3254 6.01969H36.231C32.5738 6.01969 29.1778 8.65108 27.2125 11.0955L34.2038 22.4654C36.7101 26.5508 38.6754 26.8374 39.378 26.8806V32.8958H20.5997V26.8806H21.4407C22.4665 26.8806 22.6657 26.1281 22.6657 25.712C22.6657 25.2882 22.0438 24.2934 21.7328 23.7833L18.723 18.8945L15.0525 22.4654V24.9031C15.0525 25.6113 15.1023 26.8806 16.9248 26.8806H17.3099V32.8958H0.00663941V26.8949ZM105.321 7.15723C108.425 7.02112 110.732 7.77358 110.732 10.4913C110.732 11.7605 110.26 14.2049 106.124 14.2049H105.321V7.15723ZM90.282 32.9069H109.408V26.8949H107.305C105.278 26.8949 105.321 25.961 105.321 25.0094V21.34L109.365 21.3843C114.49 21.433 123.514 20.115 123.514 11.0955C123.514 1.2316 114.434 0 104.531 0H90.282V6.01415H91.8423C93.8584 6.01415 93.8153 6.95916 93.8153 7.89863V25.0027C93.8153 25.9477 93.8584 26.8872 91.8434 26.8872H90.282V32.9069ZM125.716 26.8938H127.029C129.15 26.8938 129.243 26.3273 129.243 25.4376V7.90969C129.243 6.97797 129.293 6.02633 127.327 6.02633H125.723V0.0110656H143.481V6.02633H142.741C141.695 6.02633 140.757 6.21887 140.757 7.57551V12.9302L146.914 7.28891C147.157 7.1019 147.666 6.49219 147.666 6.29965C147.666 6.06284 146.671 6.01969 146.491 6.01969H145.975V0.00553279H162.98L163.029 6.01969H161.947C158.283 6.01969 154.906 8.65108 152.929 11.0955L159.926 22.4654C162.414 26.5519 164.398 26.8374 165.089 26.8806V32.8958H146.298V26.8817H147.15C148.176 26.8817 148.363 26.1292 148.363 25.712C148.363 25.2882 147.748 24.2934 147.43 23.7833L144.419 18.8945L140.743 22.4654V24.9031C140.743 25.6113 140.793 26.8817 142.622 26.8817H143.002V32.8958H125.711V26.8938H125.716ZM73.6681 0.576518H88.3854V3.68042H87.2091C85.1874 3.68042 85.2372 4.61325 85.2372 5.55272V25.0083C85.2372 25.9544 85.1874 26.8927 87.2091 26.8927H88.7583V32.908H70.7689V26.8927H71.8014C73.7234 26.8927 73.7234 25.9599 73.7234 25.0083L73.6681 0.576518ZM56.0229 2.86046L56.0284 0.583157H41.3001V3.68706H42.4753C44.497 3.68706 44.4472 4.61989 44.4472 5.55936V25.0149C44.4472 25.961 44.497 26.9005 42.4753 26.9005H40.9206V32.9146H58.921V26.8994H57.8886C55.9543 26.8994 55.9543 25.9665 55.9543 25.0149L56.0229 2.86046Z" fill="#00558F"/>
									<path d="M88.7581 6.23625V0.0107422H73.9413L64.842 9.10999L55.7483 0.0107422H40.9271V6.23514H53.18L60.4446 13.513L48.9009 25.0577L64.8487 40.9999L80.7964 25.0577L69.2461 13.5141L76.5229 6.23625H88.7581ZM71.9948 25.0522L64.842 32.1984L57.7014 25.0522L64.842 17.9116L71.9948 25.0522Z" fill="#F4CA2F"/>
								</svg>
							</div>
							<div class="footer-text-info">
								<p><span>Калининградский морской</span></p>
								<p><span>рыбопромышленный колледж</span></p>
								<ul>
									<li>
										<svg xmlns="http://www.w3.org/2000/svg" width="12" height="18" viewBox="0 0 12 18" fill="none">
											<path d="M5.69328 0C4.18381 0.00158829 2.73662 0.604423 1.66927 1.67622C0.601915 2.74803 0.0015817 4.20124 0 5.717C0 6.663 0.236017 7.601 0.684149 8.433L5.38158 16.966C5.41222 17.0221 5.45733 17.0689 5.51216 17.1015C5.567 17.1341 5.62955 17.1513 5.69328 17.1513C5.757 17.1513 5.81956 17.1341 5.87439 17.1015C5.92923 17.0689 5.97433 17.0221 6.00498 16.966L10.7044 8.431C11.1505 7.601 11.3866 6.663 11.3866 5.717C11.385 4.20124 10.7846 2.74803 9.71729 1.67622C8.64993 0.604423 7.20274 0.00158829 5.69328 0ZM5.69328 8.575C4.93859 8.57421 4.21501 8.27287 3.68127 7.73709C3.14753 7.20132 2.8472 6.47484 2.84614 5.717C2.84719 4.95934 3.14739 4.23301 3.68092 3.69726C4.21445 3.16151 4.93776 2.86006 5.69228 2.859C6.4468 2.86006 7.17012 3.16151 7.70364 3.69726C8.23717 4.23301 8.53737 4.95934 8.53842 5.717C8.53711 6.47414 8.23707 7.19991 7.704 7.73539C7.17093 8.27087 6.44828 8.57241 5.69427 8.574L5.69328 8.575Z" fill="#007CC4"/>
										</svg>
										236039, Калининград, ул.Мореходная 3
									</li>
									<li>
										<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
											<path d="M12.5567 9.79057C12.5208 9.68357 12.2948 9.52457 11.8775 9.31557C11.7177 9.22344 11.5567 9.13343 11.3945 9.04557C11.1864 8.93257 10.9972 8.82757 10.8269 8.73157C10.6662 8.64125 10.5069 8.54857 10.3489 8.45357C10.326 8.43557 10.2513 8.38357 10.1258 8.29657C10.0248 8.22447 9.91862 8.15996 9.80813 8.10357C9.72931 8.06358 9.64249 8.04204 9.55419 8.04057C9.43469 8.04057 9.28531 8.12657 9.10705 8.29657C8.92793 8.46789 8.76369 8.65423 8.6161 8.85357C8.46672 9.05357 8.30938 9.23857 8.14207 9.40957C7.97577 9.57957 7.83834 9.66557 7.73178 9.66557C7.66267 9.66218 7.59463 9.64697 7.53062 9.62057C7.46805 9.59818 7.40657 9.57281 7.34639 9.54457C7.27348 9.50527 7.20206 9.46324 7.13228 9.41857C7.07647 9.38322 7.02003 9.34888 6.96299 9.31557C6.19376 8.89544 5.48683 8.36935 4.86274 7.75257C4.24925 7.1261 3.72601 6.41656 3.30822 5.64457C3.27479 5.58691 3.24026 5.5299 3.20465 5.47357C3.16042 5.40353 3.1189 5.33181 3.08017 5.25857C3.05182 5.19858 3.02656 5.13716 3.00448 5.07457C2.97814 5.01031 2.96298 4.94198 2.95967 4.87257C2.95967 4.76457 3.04432 4.62657 3.21361 4.45957C3.3829 4.29257 3.56813 4.13357 3.7683 3.98357C3.96747 3.83457 4.1527 3.66957 4.32199 3.49057C4.49129 3.31057 4.57693 3.16157 4.57693 3.04157C4.5755 2.9529 4.55405 2.86571 4.51419 2.78657C4.45813 2.67557 4.39389 2.56894 4.32199 2.46757C4.23535 2.34157 4.18357 2.26757 4.16564 2.24357C4.07602 2.09357 3.9844 1.93357 3.8888 1.76357C3.7932 1.59357 3.68963 1.40357 3.5761 1.19357C3.48857 1.03074 3.39894 0.869059 3.30722 0.70857C3.10008 0.29257 2.94274 0.0635705 2.83519 0.0275705C2.77506 0.00668968 2.71152 -0.00247432 2.64797 0.000570469C2.48664 0.000570469 2.27651 0.0305704 2.01759 0.0905704C1.75867 0.15057 1.55452 0.21357 1.40515 0.27957C1.10739 0.40457 0.791701 0.769571 0.459087 1.37357C0.152365 1.93657 0 2.49257 0 3.04357C0.00024271 3.37746 0.0485429 3.70956 0.143402 4.02957C0.197178 4.22157 0.24 4.36357 0.272863 4.45657C0.305726 4.54857 0.366473 4.71457 0.4561 4.95457C0.545726 5.19357 0.599502 5.33957 0.617427 5.39457C0.82556 5.98057 1.07253 6.50357 1.35834 6.96457C1.82938 7.72957 2.47071 8.52157 3.28432 9.33757C4.09693 10.1546 4.88564 10.7996 5.64747 11.2716C6.10656 11.5586 6.62838 11.8066 7.21095 12.0166C7.26573 12.0346 7.41112 12.0886 7.64913 12.1786C7.88813 12.2686 8.05344 12.3286 8.14506 12.3616C8.23768 12.3946 8.37909 12.4386 8.57029 12.4916C8.7605 12.5466 8.93178 12.5836 9.08415 12.6046C9.23552 12.6246 9.39286 12.6356 9.5522 12.6356C10.1009 12.6356 10.6546 12.4836 11.2153 12.1786C11.8168 11.8436 12.1802 11.5266 12.3047 11.2266C12.3705 11.0766 12.4332 10.8726 12.4929 10.6126C12.5527 10.3526 12.5826 10.1416 12.5826 9.97957C12.5858 9.91542 12.5767 9.85125 12.5557 9.79057H12.5567Z" fill="#007CC4"/>
										</svg>
										Приёмная начальника колледжа +7 (4012) 64-29-15
									</li>
									<li>
										<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
											<path d="M12.5567 9.79057C12.5208 9.68357 12.2948 9.52457 11.8775 9.31557C11.7177 9.22344 11.5567 9.13343 11.3945 9.04557C11.1864 8.93257 10.9972 8.82757 10.8269 8.73157C10.6662 8.64125 10.5069 8.54857 10.3489 8.45357C10.326 8.43557 10.2513 8.38357 10.1258 8.29657C10.0248 8.22447 9.91862 8.15996 9.80813 8.10357C9.72931 8.06358 9.64249 8.04204 9.55419 8.04057C9.43469 8.04057 9.28531 8.12657 9.10705 8.29657C8.92793 8.46789 8.76369 8.65423 8.6161 8.85357C8.46672 9.05357 8.30938 9.23857 8.14207 9.40957C7.97577 9.57957 7.83834 9.66557 7.73178 9.66557C7.66267 9.66218 7.59463 9.64697 7.53062 9.62057C7.46805 9.59818 7.40657 9.57281 7.34639 9.54457C7.27348 9.50527 7.20206 9.46324 7.13228 9.41857C7.07647 9.38322 7.02003 9.34888 6.96299 9.31557C6.19376 8.89544 5.48683 8.36935 4.86274 7.75257C4.24925 7.1261 3.72601 6.41656 3.30822 5.64457C3.27479 5.58691 3.24026 5.5299 3.20465 5.47357C3.16042 5.40353 3.1189 5.33181 3.08017 5.25857C3.05182 5.19858 3.02656 5.13716 3.00448 5.07457C2.97814 5.01031 2.96298 4.94198 2.95967 4.87257C2.95967 4.76457 3.04432 4.62657 3.21361 4.45957C3.3829 4.29257 3.56813 4.13357 3.7683 3.98357C3.96747 3.83457 4.1527 3.66957 4.32199 3.49057C4.49129 3.31057 4.57693 3.16157 4.57693 3.04157C4.5755 2.9529 4.55405 2.86571 4.51419 2.78657C4.45813 2.67557 4.39389 2.56894 4.32199 2.46757C4.23535 2.34157 4.18357 2.26757 4.16564 2.24357C4.07602 2.09357 3.9844 1.93357 3.8888 1.76357C3.7932 1.59357 3.68963 1.40357 3.5761 1.19357C3.48857 1.03074 3.39894 0.869059 3.30722 0.70857C3.10008 0.29257 2.94274 0.0635705 2.83519 0.0275705C2.77506 0.00668968 2.71152 -0.00247432 2.64797 0.000570469C2.48664 0.000570469 2.27651 0.0305704 2.01759 0.0905704C1.75867 0.15057 1.55452 0.21357 1.40515 0.27957C1.10739 0.40457 0.791701 0.769571 0.459087 1.37357C0.152365 1.93657 0 2.49257 0 3.04357C0.00024271 3.37746 0.0485429 3.70956 0.143402 4.02957C0.197178 4.22157 0.24 4.36357 0.272863 4.45657C0.305726 4.54857 0.366473 4.71457 0.4561 4.95457C0.545726 5.19357 0.599502 5.33957 0.617427 5.39457C0.82556 5.98057 1.07253 6.50357 1.35834 6.96457C1.82938 7.72957 2.47071 8.52157 3.28432 9.33757C4.09693 10.1546 4.88564 10.7996 5.64747 11.2716C6.10656 11.5586 6.62838 11.8066 7.21095 12.0166C7.26573 12.0346 7.41112 12.0886 7.64913 12.1786C7.88813 12.2686 8.05344 12.3286 8.14506 12.3616C8.23768 12.3946 8.37909 12.4386 8.57029 12.4916C8.7605 12.5466 8.93178 12.5836 9.08415 12.6046C9.23552 12.6246 9.39286 12.6356 9.5522 12.6356C10.1009 12.6356 10.6546 12.4836 11.2153 12.1786C11.8168 11.8436 12.1802 11.5266 12.3047 11.2266C12.3705 11.0766 12.4332 10.8726 12.4929 10.6126C12.5527 10.3526 12.5826 10.1416 12.5826 9.97957C12.5858 9.91542 12.5767 9.85125 12.5557 9.79057H12.5567Z" fill="#007CC4"/>
										</svg>
										Морской учебно-тренажерный центр +7 (4012) 64-72-04
									</li>
									<li>
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
											<path d="M14.0524 0H1.35436C1.14523 0 0.950041 0.044 0.773776 0.115L7.67303 5.949L9.21959 4.693L14.633 0.115C14.4487 0.0395462 14.2515 0.000500026 14.0524 0ZM15.2714 0.655L10.1776 4.962L15.2714 9.27C15.3583 9.12133 15.405 8.9524 15.4068 8.78V1.145C15.405 0.972598 15.3583 0.803669 15.2714 0.655ZM0.135436 0.617C0.0483198 0.765962 0.0016219 0.935258 0 1.108V8.742C0 8.918 0.0507884 9.083 0.135436 9.232L5.22921 4.925L0.135436 0.617Z" fill="#007CC4"/>
											<path d="M9.53944 5.50195L7.99289 6.75895C7.90298 6.83256 7.79022 6.8722 7.67422 6.87095C7.55788 6.87243 7.44472 6.83279 7.35455 6.75895L5.86774 5.50195L0.774963 9.80995C0.951229 9.88095 1.14642 9.92395 1.35554 9.92395H14.0546C14.2628 9.92395 14.458 9.88095 14.6342 9.80995L9.53944 5.50195Z" fill="#007CC4"/>
										</svg>
										Курсы матросов, мотористов, электриков +7 (4012) 37-50-39
									</li>
								</ul>
							</div>
							<div class="look-out-for-us">
								<p class="look-p">Следите за нами</p>
								<p><svg xmlns="http://www.w3.org/2000/svg" width="26" height="19" viewBox="0 0 26 19" fill="none">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M24.929 3.964C24.929 3.964 24.682 2.164 23.928 1.37C22.97 0.33 21.897 0.326 21.405 0.264C17.881 -2.98023e-08 12.595 0 12.595 0H12.585C12.585 0 7.299 -2.98023e-08 3.775 0.264C3.283 0.324 2.21 0.329 1.252 1.37C0.497 2.163 0.252 3.964 0.252 3.964C0.252 3.964 0 6.078 0 8.192V10.174C0 12.289 0.252 14.403 0.252 14.403C0.252 14.403 0.497 16.203 1.252 16.996C2.21 18.037 3.469 18.005 4.029 18.113C6.043 18.313 12.59 18.376 12.59 18.376C12.59 18.376 17.881 18.368 21.405 18.103C21.897 18.042 22.97 18.037 23.928 16.996C24.682 16.203 24.928 14.403 24.928 14.403C24.928 14.403 25.18 12.289 25.18 10.174V8.193C25.18 6.079 24.929 3.964 24.929 3.964Z" fill="#DFE7ED"/>
									<path fill-rule="evenodd" clip-rule="evenodd" d="M9.98999 12.5758V5.23584L16.793 8.91784L9.98999 12.5758Z" fill="#095C94"/>
								</svg>
								</p>
								<p>
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="15" viewBox="0 0 26 15" fill="none">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M14.0558 14.2579C14.0558 14.2579 14.5178 14.2079 14.7538 13.9579C14.9708 13.7299 14.9638 13.2989 14.9638 13.2989C14.9638 13.2989 14.9338 11.2869 15.8878 10.9899C16.8268 10.6979 18.0318 12.9359 19.3118 13.7959C20.2788 14.4459 21.0118 14.3039 21.0118 14.3039L24.4318 14.2579C24.4318 14.2579 26.2198 14.1499 25.3718 12.7709C25.3018 12.6579 24.8768 11.7509 22.8298 9.88792C20.6848 7.93792 20.9728 8.25292 23.5548 4.87792C25.1278 2.82392 25.7558 1.56892 25.5598 1.03292C25.3728 0.519916 24.2158 0.655916 24.2158 0.655916L20.3678 0.678916C20.3678 0.678916 20.0818 0.640916 19.8698 0.764916C19.6638 0.886916 19.5298 1.16992 19.5298 1.16992C19.5298 1.16992 18.9208 2.75992 18.1088 4.11292C16.3948 6.96492 15.7088 7.11592 15.4288 6.93892C14.7768 6.52592 14.9388 5.27892 14.9388 4.39492C14.9388 1.62892 15.3678 0.476916 14.1068 0.178916C13.6888 0.0789161 13.3808 0.0139161 12.3098 0.00291615C10.9368 -0.0100839 9.7748 0.00791615 9.1158 0.322916C8.6778 0.532916 8.3398 1.00292 8.5458 1.02892C8.8008 1.06192 9.3758 1.18092 9.6818 1.58892C10.0758 2.11492 10.0618 3.29592 10.0618 3.29592C10.0618 3.29592 10.2888 6.55192 9.5328 6.95592C9.0148 7.23292 8.3028 6.66692 6.7748 4.07792C6.25657 3.17846 5.7976 2.24615 5.4008 1.28692C5.4008 1.28692 5.2868 1.01292 5.0828 0.865916C4.8358 0.687916 4.4928 0.632916 4.4928 0.632916L0.834798 0.655916C0.834798 0.655916 0.284798 0.670916 0.0837982 0.905916C-0.0962018 1.11292 0.0697982 1.54292 0.0697982 1.54292C0.0697982 1.54292 2.9328 8.11192 6.1758 11.4229C9.1498 14.4569 12.5258 14.2579 12.5258 14.2579H14.0558Z" fill="#DFE7ED"/>
									</svg>
								</p>
							</div>
						</div>
					</div>
				</footer>
		</div>
</body>
</html>