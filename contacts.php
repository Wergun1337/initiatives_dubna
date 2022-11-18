<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Инициативы контакты</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="contacts.css">
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

	
	<!-- contacts -->
	<?php
				 if(isset($_COOKIE['user']) == false):
				?>
	<div class="container">
	<div class="contacts">
			<div class="contacts__inner">
				<div class="firstColumn">
				<h2 class="contacts__tittle">Контакты</h2>
				<form action="php/contacts_sending.php" method="post">
					<p>
							<input class="form__input" name="name" type="text" placeholder="ФИО">
						</p>
						<p>
							<input class="form__input" name="mail" type="email" placeholder="Почта">
						</p>
						<p>
							<input class="form__input" name="tel" type="tel" placeholder="Телефон">
						</p>
						<p>
							<input class="form__input input__text" name="text" type="textarea"  placeholder="Описание проблемы">
						</p>
			<button class=" btn btn--blue btn_contacts" type="submit">отправить</button>
			</form>
			</div>
			<div class="secondColumn">
				<h2 class="contacts__number">8 900 565 44 44</h2>
				<p class="contacts__mail">Pochta@mail.ru</p>
				<p class="contacts__adres">Проспект Луначарского, д 65 офис 3</p>
			</div>

			</div>	
				
		</div>
	</div>

<?php else: ?>
	<div class="container">
	<div class="contacts">
			<div class="contacts__inner">
				<div class="firstColumn">

				<h2 class="contacts__tittle">Контакты</h2>
				<p class=""><?=$_COOKIE['user']?>, что-то случилось? 
						<br>
						<br>
						Опишите проблему, мы свяжемся с Вами по электронной почте в течение <br> 1 рабочего дня!</p>
				<form action="php/contact_reg_sent.php" method="post">
							<input class="form__input input__text" name="text" type="textarea"  placeholder="Описание проблемы">
						</p>
			<button class=" btn btn--blue btn_contacts" type="submit">отправить</button>
			</form>
			</div>
			<div class="secondColumn">
				<h2 class="contacts__number">8 900 565 44 44</h2>
				<p class="contacts__mail">Pochta@mail.ru</p>
				<p class="contacts__adres">Проспект Луначарского, д 65 офис 3</p>
			</div>

			</div>	
				
		</div>
	</div>


<?php endif;?>	
<!-- footer -->
<footer class="footer">
	<div class="footercontainer">
	<p class="p4">Политика конфиденциальности</p>
	<p class="p5">(c) created by hopper-it</p>


</div>
</footer>
</body>
</html>