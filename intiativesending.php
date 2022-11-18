<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Инициативы</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<!-- header -->
		<header class="header">
		<div class="container">
			<div class="header__inner">
				<div class="header__logo">
					<a href="main.php">
						<img class="logo__img" src="img/header/logo.PNG" alt="logo">
						<img class="logo__text" src="img/header/logo__text.svg">
					</a>
				</div>
				<div class="header__search">
     				<input type="text" maxlength= "80" placeholder="Поиск" class="searchbar">
     				<img src="img/header/search.svg" alt="search icon" class="search__button" width="20px" height="20px">     				 
    		</div>
				<nav class="nav">
							<a class="nav__link header__inactive" href="all_initiatives.php">Инициативы</a>
							<a class="nav__link header__inactive" href="pravilaraboty.php">Правила работы</a>
							<a class="nav__link header__inactive" href="contacts.php">Контакты</a>
				</nav>
				<?php
				 if(isset($_COOKIE['user']) == false):
				?>
				<div class="authorization">
					<a href="log.php" class="btn btn--blue">Войти</a>
				</div>
				<?php else: ?>
					<div class="dropdown">
					<button class="dropbtn"><?=$_COOKIE['user']?></button>
 				  <div class="dropdown-content">
    				<a href="php/exit.php"> выйти</a>
  				</div>
					</div>
			<?php endif;?>
			</div>
		</div>
	</header>
    <main>
    .container
		<a class="back_butt" href="all_initiatives.php">к инициативам</a>
		<h2 class="zagolovok">Новая инициатива</h2>
		<div class="initiativee">
			<div class="initiative_info">
				<form action="php/send_init.php" method="post">
				<p><textarea class="input1" id="tal" name="tittle" placeholder="Название"></textarea></p>
				<p><textarea class="input2" id="tal" name="text" placeholder="Описание"></textarea></p>
				<div class="uploadcont">
					<input id="file-input" type="file" name="file" multiple>
               		<label for="file-input">Выберите файл</label>
               		<span>или перетащите его сюда</span>
				</div>

			</div>
        	<div class="pamyatka">
				<div>
					<h3>Памятка</h3>
				</div>
				<div>
            		<p>Предложите что-то интересное и люди Вас поддержат. Введите заголовок с продающим текстом, тогда все будет круто и все проголосуют за Вашу инициативу.</p>
            		<p>Убедитесь в том, что похожей инициативы нет в базе, заполните все поля формы и нажмите "ОТПРАВИТЬ"</p>
            		<p>После отправки инициатива попадает на модерацию, мы обязательно рассмотрим вашу идею.</p>
            		<p>Улучшим город вместе!</p>
				</div>
        	</div>
		</div>
		<button class="initiative_butt" type="submit">отправить</button>
		</form>
    </main>
    <footer class="footer">
		<div class="footercontainer">
			<p class="p1">Обратная связь</p>
				<p><textarea class="foot_input1" id="tal" name="tal" placeholder="ФИО"></textarea></p>
				<p><textarea class="foot_input2" id="tal" name="tal" placeholder="Почта"></textarea></p>
				<p><textarea class="foot_input3" id="tal" name="tal" placeholder="Телефон"></textarea></p>
				<p><textarea class="foot_input4" id="tal" name="tal" placeholder="Описание"></textarea></p>
			<button class="buttfoot" type="submit">отправить</button>
			<p class="p3">8 900 565 44 44</p>
			<p class="pochta">Pochta@mail.ru</p>
			<p class="adress">Проспект Лунчарского, д 65 офис 3</p>
			<p class="p4">Политика конфиденциальности</p>
			<p class="p5">(c) created by hopper-it</p>
		</div>
		<hr class="hr"></hr>
	</footer>
</body>
</html>