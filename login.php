<head>
	<meta charset="utf-8">
	<title> Mint Jewelary </title>
	<link rel="shortcut icon" href="LOGITEK.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="styleLogin.css"/>
</head>
<body>
	<header>
		<div class="flex-logo">
			<div class="image-menu"><img src="image/search.png" class="pic"  alt="Pas" ></div>
			<h1>Mint  Jewelary</h1>
			<div class = "menu">
				<div class="image-menu"> <a href="login.php"><img src="image/login.gif" class="pic"  alt="Pas" ></a></div>
				<div class="image-menu"><img src="image/like.png" class="pic"  alt="Pas" ></div>
				<div class="image-menu"><img src="image/bag.png" class="pic"  alt="Pas" ></div>
			</div>
		</div>
	</header>
    <div class="flex-links">
		<p class = "link"> <a href="index.html">Главная</a></p>
		<p class = "link"> <a href="shop.html">Магазин</a></p>
		<p class = "link">Сделать заказ</p>
        <p class = "link">Мастер-классы</p>	
        <p class = "link">Контакты</p>	
        <p class = "link">Вопросы</p>
	</div>
<div class = "main-container">
	<div class="flex-links1" >	
		<form action="reg.php" name="signup-form" method="post">
			<div class = "space-between-login">
				<label  >Email</label>
				<input type="text" name = "email" size = "20" required />
			</div>
			<div class = "space-between-login">
				<label >Password</label>
				<input type="text" name = "password" size = "20" required />
			</div>
		<button type="submit" name="register" value="register" class="but">Регистрация</button>
		</form>
	</div>
</div>
	<footer>
			<br>
			<div class="footer-row">
				<div class="footer-colunm">
					<h4>Mint Jevelary</h4>
					<p class ="footer-text">Изготовление ювелирных </p>
					<p class ="footer-text">украшений любой</p>
					<p class ="footer-text">сложности на заказ</p>
				</div>
				<div class="footer-colunm">
					<p class ="footer-text">Забота о клиенте</p>
					<p class ="footer-text">Доставка и оплата,</p>
					<p class ="footer-text">Гарантии</p>
					<p class ="footer-text">Вопросы и ответы</p>
					<p class ="footer-text">Отзывы</p>
					<p class ="footer-text">Личный кабинет</p>
					<p class ="footer-text">Подписка</p>
				</div>	
				<div class="footer-colunm">
					<p class ="footer-text">Ювелирная студия</p>
					<p class ="footer-text">Изготовление</p>
					<p class ="footer-text">Как заказать</p>
					<p class ="footer-text">Каталог</p>
					<p class ="footer-text">Наши работы</p>
					<p class ="footer-text">О компании</p>
					<p class ="footer-text">Контакты</p>
				</div>
				<div class="footer-colunm">
					<p class ="footer-text">8 800 555 35 35</p>
					<p class ="footer-text">Москва, Кузнецкий мост, 7</p>
					<p class ="footer-text">MintJewelary@gmail.com</p>
					<p class ="footer-text">B&B production</p>
				</div>
			</div>
		</footer>
</body>
</html>