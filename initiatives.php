<?php require 'db_initiatives.php'; ?>	
<?php 
	$single = get_id($_GET['id']); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Инициативы</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="initiatives.css">
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
	
<!-- initiatives -->

	<div class="initiatives">
		<div class="container">
			<div class="initiatives__inner">
			<a href="all_initiatives.php">
			<p class="initiatives__back">к инициативам</p>
			</a>
			<h2 class="initiative__tittle"><?php echo $single["Заголовок"]; ?></h2>
			<img src="<?php echo $single["Изображение"]; ?>" class="initiative__img">
			<p class="initiatives__description"><?php echo $single["Текст"]; ?></p>
			
			<div class="card__vote">
			 		<img class="vote__img" src="img/card/vote.svg">
			 		<div class="vote__count">(0)</div>
			 		<div class="vote__text">Голосовать</div>
			</div>

			</div>
		</div>
	</div>






<?php
				 if(isset($_COOKIE['user']) == false):
				?>
<!-- footer -->
	<footer class="footer">
		<div class="footercontainer">
			<p class="p1">Обратная связь</p>
				<p><textarea class="input1" id="tal" name="name" placeholder="ФИО"></textarea></p>
				<p><textarea class="input2" id="tal" name="mail" placeholder="Почта"></textarea></p>
				<p><textarea class="input3" id="tal" name="tel" placeholder="Телефон"></textarea></p>
				<p><textarea class="input4" id="tal" name="text" placeholder="Описание"></textarea></p>
			<button class="buttfoot" type="submit">отправить</button>
			<p class="p3">8 900 565 44 44</p>
			<p class="pochta">Pochta@mail.ru</p>
			<p class="adress">Проспект Лунчарского, д 65 офис 3</p>
			<p class="p4">Политика конфиденциальности</p>
			<p class="p5">(c) created by hopper-it</p>
		</div>
		<hr class="hr"></hr>
	</footer>

<?php else: ?>
	<footer class="footer">
	<div class="footercontainer">
		<p class="p1">У Вас что-то случилось?</p>
		<p class="p2">Сообщите нам о проблеме, и мы ответим Вам в течение 1 <br> рабочего дня на электронную почту.</p>
		<p><textarea class="input" id="tal" name="tal" placeholder="Описание проблемы"></textarea></p>
		<button class="buttfoot" type="text">отправить</button>
		<p class="p3">8 900 565 44 44</p>
		<p class="pochta">Pochta@mail.ru</p>
		<p class="adress">Проспект Лунчарского, д 65 офис 3</p>
		<p class="p4">Политика конфиденциальности</p>
		<p class="p5">(c) created by hopper-it</p>
	</div>
	<hr class="hr"></hr>
</footer>
<style type="text/css">.footer{
	
   	height: 681px;
   	width:100%;

	position: absolute;
	background-color: #292935;
}
.p1
{
	position: absolute;
	top: 120px;

	font-style: normal;
	font-weight: 400;
	font-size: 30px;
	line-height: 40px;

	color: #FFFFFF;
}
.p2{
	position: absolute;
	top: 180px;

	font-style: normal;
	font-weight: 500;
	font-size: 16px;
	line-height: 22px;

	color: #FFFFFF
}
.p3{
	position: absolute;
	left: 970px;
	top: 120px;
/* H2 */

	font-style: normal;
	font-weight: 400;
	font-size: 50px;
	line-height: 60px;
/* identical to box height, or 120% */


/* white */

	color: #FFFFFF;
}
.pochta{
	position: absolute;
	left: 970px;
	top: 200px;

	font-style: normal;
	font-weight: 400;
	font-size: 16px;
	line-height: 20px;
/* identical to box height, or 125% */


/* white */

	color: #FFFFFF;

}
.adress{
	position: absolute;
	left: 970px;
	top: 230px;

	font-style: normal;
	font-weight: 400;
	font-size: 16px;
	line-height: 20px;
/* identical to box height, or 125% */


/* white */

	color: #FFFFFF;
}
.hr{
	position: absolute;
	margin-left: 360px;
	margin-right: 360px;
	width: 1200px;
	top: 519px;

/* gray text */

	
}
.p4{
	position: absolute;
	top: 559px;

/* body/16 */

	font-style: normal;
	font-weight: 500;
	font-size: 16px;
	line-height: 22px;
/* identical to box height, or 138% */


/* white */

	color: #FFFFFF;
}
.p5{
	position: absolute;
	top: 601px;

	font-style: normal;
	font-weight: 400;
	font-size: 16px;
	line-height: 20px;
/* identical to box height, or 125% */


/* white */

	color: #FFFFFF;

	opacity: 0.5;
}
.footercontainer
{
	width: 1200px;

	margin-left: 360px;
	margin-right: 360px;
}
.input{
	font-family: 'Montserrat', sans-serif;
	position: absolute;
	top: 264px;
	bottom: 26.01%;

	width: 488px;
	height: 120px;

	background: #292935;

	border: 1px solid #DEDEDE;
	box-sizing: border-box;
	color: #FFFFFF;
	text-align: left;
	resize: none;
	
	/* body/16 */
	
	font-style: normal;
	font-weight: 500;
	font-size: 16px;
	line-height: 22px;
	
	opacity: 0.5;
	
	padding: 15px;
}
.buttfoot{
	position: absolute;
	top: 414px;
	text-align: center;
	text-transform: uppercase;
	color: #fff;
	font-style: normal;
	font-weight: 600;
	font-size: 14px;
 
	height: 45px;
	width: 159px;

	letter-spacing: 0.05em;
	padding: 15px 30px 15px 30px;
	border-radius: 2px;

	opacity: 0.9;
	background-color: #0D47A1;
	transition: opacity 0.35s linear;

	border: 0;
}
.buttfoot:hover{
	cursor: pointer;
	opacity: 1;
}
.pamyatka{
	text-align: left;

	width: 662 px;
	height: 331 px;
	
	left: 898 px;
	top: 320 px;
}</style>

<?php endif;?>






</body>
</html>