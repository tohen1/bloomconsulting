<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BLOOM CONSALTING - Главная</title>
        <meta name="description" content="">
        <meta name="Keywords" content=""> 
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="shortcut icon" href="images/favicon.gif" type="image/gif">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include_once 'header.php';?>
        <div class="container-fluid navigation">
        	<ul class="nav nav-tabs nav-justified" role="tablist">
  				<li><a href="#">Главная</a></li>
				<li><a href="#">Услуги</a></li>
  				<li><a href="#">Портфолио</a></li>
            	<li><a href="#">Вакансии</a></li>
            	<li><a href="#">Контакты</a></li>
			</ul>
		</div>
        <div id="carousel-example-generic" class="container carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="images/sliders/slide1.jpg" alt="">
            </div>
            <div class="item">
              <img src="images/sliders/slide2.jpg" alt="">
            </div>
            <div class="item">
              <img src="images/sliders/slide3.jpg" alt="">
            </div>
            <div class="item">
              <img src="images/sliders/slide4.jpg" alt="">
            </div>
            <div class="item">
              <img src="images/sliders/slide5.jpg" alt="">
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
        <div class="container miniature">
          <div class="col-lg-4">
            <a href="#" class="thumbnail">
              <img src="images/logo1.jpg"/>
            </a>
          </div>
          <div class="col-lg-4">
            <a href="#" class="thumbnail">
              <img src="images/logo2.jpg"/>
            </a>
          </div>
          <div class="col-lg-4">
            <a href="#" class="thumbnail">
              <img src="images/logo3.jpg"/>
            </a>
          </div>
        </div>
        <div class="container info">
            <h2>Кто мы?</h2>
            <br>
            <p>Компания "BLOOM consulting" специализируется на предоставлении комплексных консалтинговых, строительных, ремонтных услуг на рынке “бизнес для бизнеса”. Компания создана специалистами-практиками в области экономики, маркетинга, управления персоналом, обучения и дизайнерских услуг.</p>
            <p>Компания оказывает услуги для предприятий по всей Украине и за её приделами.
                Наша практика показывает,что именно комплексный и последовательный подход к решению проблем клиента, а также системное построение бизнес процессов обеспечивают максимальный эффект отдачи.</p>
            <p>Название “BLOOM consulting” в полной мере раскрывает позиционирование компании для потребительского рынка. Результатом работы высококвалифицированных специалистов  является выход на устойчивое повышение процента прибыли и укрепление текущего положения на рынке.</p>
            <h2>Наша миссия</h2>
            <p>Миссия компании “BLOOM consulting” – квалифицированная поддержка  частных компаний и бизнес проектов для повышения их прибыльности и  эффективности,путем развития новых бизнес-направлений и создания условий для повышения конкурентных преимуществ на выбранном рынке. В том числе, развитие и повышение конкурентоспособности украинского рынка товаров и услуг для иностранного потребителя.</p>
            <p><strong>Успешный бизнес приносит его владельцам, как удовольствие, так и прибыль. Развитие вашего бизнеса сегодня – залог его успеха и устойчивости в будущем.</strong></p>
            </div>
            <div class="container form_order">
            	<h2>Хотите обсудить свой будущий проект?</h2>
                <p>Не стесняйтесь. Напишите несколько слов о вашем проекте.<br>
                И мы вам перезвоним,что бы предложить возможные варианты работы.</p>
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-1">
                    	<label class="control-label">Ваше имя:</label>
                      	<input type="text" class="form-control" placeholder="Ваше имя">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-1">
                    	<label class="control-label">Ваш телефон или e-mail:</label>
                      	<input type="text" class="form-control" placeholder="Ваш телефон или e-mail">
                    </div>
                  </div>
                  <div class="form-group">        
                    <div class="col-lg-10 col-lg-offset-1">
                    	<label class="control-label">Хотите поговорить о:</label>
                      	<textarea class="form-control" rows="3"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-10">
                      <button type="submit" class="order btn btn-default">ЗАКАЗАТЬ ЗВОНОК</button>
                    </div>
                  </div>
                </form>
			</div>
    	<?php include_once 'footer.php';?>        
    </body>
</html>