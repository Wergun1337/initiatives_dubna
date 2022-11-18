<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Инициативы</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
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
        <div class="log">
         <div class="log_nav">
            <a class="log_butt" href="#">Вход</a>
            <a class="reg_butt" href="reg.php">Регистрация</a>
        </div>
        <div class="log_hr_cl">
            <hr class="log_hr"></hr>
        </div>
        <form action="php/auth.php" method="post">
        <div class="log_txar">
            <p><input type="email" class="log_input1" id="tal" name="mail" placeholder="Почта"></input></p>
            <p><input type="password" class="log_input1" id="tal" name="pass" placeholder="Пароль"></input></p>
        </div>
        <div class="log_buttns">
            <button class="enter_butt" type="submit">Войти</button>
            <a class="reset_butt" href="#">Восстановить пароль</a>
        </div>
        </form>
    </main>
    <footer class="footer">
		<div class="footercontainer">
			<p class="p1">Обратная связь</p>
				<p><textarea class="foot_input1" id="tal" name="name" placeholder="ФИО"></textarea></p>
				<p><textarea class="foot_input2" id="tal" name="mail" placeholder="Почта"></textarea></p>
				<p><textarea class="foot_input3" id="tal" name="tel" placeholder="Телефон"></textarea></p>
				<p><textarea class="foot_input4" id="tal" name="text" placeholder="Описание"></textarea></p>
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