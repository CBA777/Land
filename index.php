<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<?php
$id_f=2;// ID в таблице data

/*$title='Мое портфолио - Start Bootstrap Theme';
$firma='Vova Soft';
$firma_style='color:blue;text-align:middle;vertical-align:center;margin:30px';
$slogan='Фирма веников не вяжет!!!';
$slogan_style='color:yellow';
$service1='Производство тучек';
$service1_desc='Качественно, в большом количестве.';
$service2='Укажем путь';
$service2_desc='Расскажем куда Вам идти.';
$service3='Гоним';
$service3_desc='Наливаем полстакана.';
$service4='Полузащита';
$service4_desc='Защищаем от покемонов.';
$img_portfolio1='1.jpg';
$img_portfolio2='2.jpg';
$img_portfolio3='3.jpg';
$img_portfolio4='4.jpg';
//$img_portfolio4='portfolio-4.jpg';
$about1='Stylish Portfolio is the perfect theme for your next project!';
$about2='This theme features some wonderful photography courtesy of <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo';
$callout1='Vertically Centered Text';
$callout2='(можем по другому, но дороже)';
$footer_adr1='м.Кобеляки';
$footer_adr2='вул. Геройська';
$footer_phone='+380687778855';
$footer_email='VovaSoft@example.com';
$footer_copyright='Copyright &copy; Vova Soft 2016';
$map1='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2609.6211282488935!2d34.1950299515198!3d49.1508174879241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDnCsDA5JzAyLjkiTiAzNMKwMTEnNTAuMCJF!5e0!3m2!1suk!2sua!4v1471466092013';
$map2='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2609.6211282488935!2d34.1950299515198!3d49.1508174879241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDnCsDA5JzAyLjkiTiAzNMKwMTEnNTAuMCJF!5e0!3m2!1suk!2sua!4v1471466092013';
*/
//$myland = new mysqli("mysql8.000webhost.com", "a7640224_admin", "a1b1c1", "a7640224_db");
$myland = new mysqli("localhost", "root", "", "land");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
mysqli_query($myland, "set names utf8");
//$query = "SELECT FIO,Pass,Login  FROM users WHERE id=".$id_f;
$query = "SELECT * FROM data WHERE id=".$id_f;
$result = $myland->query($query);
$row = $result->fetch_array(MYSQLI_ASSOC);

foreach ($row as $r=>$s){
    $$r=$s;
}

$result->close();
$myland->close();
?>
<?php echo '      <title>'.$title.'</title>'?>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>Start Bootstrap</a>
            </li>
            <li>
                <a href="#top" onclick=$("#menu-close").click();>Домой</a>
            </li>
            <li>
                <a href="#about" onclick=$("#menu-close").click();>О нас</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();>Услуги</a>
            </li>
            <li>
                <a href="#portfolio" onclick=$("#menu-close").click();>Наши работы</a>
            </li>
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>Контакты</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <?php echo '<header  id="top" class="header" style="background: url(img/'.$header_img.') no-repeat center center scroll;webkit-background-size: cover;moz-background-size: cover;background-size: cover;o-background-size: cover ">';?>
        <div class="text-vertical-center">
        <?php echo '            <h1 style='.$firma_style.'>'.$firma.'</h1>';?>
        <?php echo '            <h2 style='.$slogan_style.'>'.$slogan.'</h2>';?>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Узнать больше</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php echo '<h2>'.$about1.'</h2> '?>
                    <?php echo '<p class="lead">'.$about2.'</a>.</p>'?>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Наши услуги</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
<?php echo '                                    <strong>'.$service1.'</strong>'?>
                                </h4>
<?php echo '                                <p>'.$service1_desc.'</p>'?>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
<?php echo '                                    <strong>'.$service2.'</strong>'?>
                                </h4>
<?php echo '                                <p>'.$service2_desc.'</p>'?>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
<?php echo '                                    <strong>'.$service3.'</strong>'?>
                                </h4>
<?php echo '                                <p>'.$service3_desc.'</p>'?>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
<?php echo '                                    <strong>'.$service4.'</strong>'?>
                                </h4>
<?php echo '                                <p>'.$service4_desc.'</p>'?>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <?php echo '<h1>'.$callout1.'</h1>'?>
		<?php echo '<h3>'.$callout2.'</h3>'?>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Наши работы</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/<?php echo $img_portfolio1?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/<?php echo $img_portfolio2?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/<?php echo $img_portfolio3?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/<?php echo $img_portfolio4?>">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark">View More Items</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>The buttons below are impossible to resist.</h3>
                    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Map -->
    <section id="contact" class="map">
        <?php echo '<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="'.$map1.'"></iframe>'?>
        <br />
        <small>
<!--            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
-->
            <?php echo '<a href="'.$map2.'"></a>'?>
        </small>
        </iframe>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                <?php echo '<h4><strong>'.$firma.'</strong>'?>
                    </h4>
                    <?php echo '<p>'.$footer_adr1?>
                        <?php echo '<br>'.$footer_adr2.'</p>'?>
                    <ul class="list-unstyled">
                        <?php echo '<li><i class="fa fa-phone fa-fw"></i>'.$footer_phone.'</li>'?>
                        <?php echo '<li><i class=\"fa fa-envelope-o fa-fw\"></i> <a href=\"mailto:'.$footer_email.'\">'.$footer_email.'</a>'?>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <?php echo '<p class="text-muted">'.$footer_copyright.'</p>'?>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>

</body>

</html>
