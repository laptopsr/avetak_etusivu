<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="fi" />
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- blueprint CSS framework -->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />-->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />-->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->





  <!--<link rel="stylesheet" type="text/css" href="css/navbar.css" />-->
  <!--<link rel="stylesheet" href="css/etunti-bootstrap-theme.css">-->

  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/openSans.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/footer.css" />








<?php
Yii::app()->clientScript->registerPackage('jquery');
Yii::app()->clientScript->registerPackage('bootstrapJS');
Yii::app()->clientScript->registerPackage('bootstrapCSS');
?>



	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>


      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="Yii::app()->request->baseUrl.'/index.php'">Avetak</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                  <li><?php echo CHtml::link('Etusivu',Yii::app()->request->baseUrl.'/index.php'); ?></li>

<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tuotteet ja palvelut <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <!--<li><?php echo CHtml::link('Tuotteet',Yii::app()->request->baseUrl.'/index.php/site/tuotteet'); ?></li>-->
                  <li><?php echo CHtml::link('e-palkki palvelut',Yii::app()->request->baseUrl.'/index.php/site/kilpailutus'); ?></li>
                  <!--<li><?php echo CHtml::link('e-palkki työnhallinta',Yii::app()->request->baseUrl.'/index.php/site/tyonhallinta'); ?></li>-->
                  <!--<li><?php echo CHtml::link('e-palkki vararesurssi',Yii::app()->request->baseUrl.'/index.php/site/vararesurssi'); ?></li>
                  <li><?php echo CHtml::link('Laatu toiminnan tueksi',Yii::app()->request->baseUrl.'/index.php/site/laatu_toiminnan_tueksi'); ?></li>-->
                  <!--<li><?php echo CHtml::link('Laatukoulutus',Yii::app()->request->baseUrl.'/index.php/site/laatukoulutus'); ?></li>
                  <li><?php echo CHtml::link('Prosessikuvaus',Yii::app()->request->baseUrl.'/index.php/site/prosessikuvaus'); ?></li>-->
                 <!-- <li><?php echo CHtml::link('Prosessimanuaali',Yii::app()->request->baseUrl.'/index.php/site/prosessimanuaali'); ?></li>-->
                  <li><?php echo CHtml::link('Hallinto- ja tukipalvelut',Yii::app()->request->baseUrl.'/index.php/site/koulutus_tukipalvelut'); ?></li>
                  <li><?php echo CHtml::link('Prosessipalvelut',Yii::app()->request->baseUrl.'/index.php/site/prosessipalvelut'); ?></li>
                  <!--<li><?php echo CHtml::link('Menetelmä- ja prosessikehitys',Yii::app()->request->baseUrl.'/index.php/site/menetelma_prosessikehitys'); ?></li>
                  <li><?php echo CHtml::link('Teollinen internet',Yii::app()->request->baseUrl.'/index.php/site/teollinen_internet'); ?></li>
                  <li><?php echo CHtml::link('e-palkki laskutuspalvelu',Yii::app()->request->baseUrl.'/index.php/site/laskutuspalvelu'); ?></li>-->

                </ul>
              </li>    

<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ajankohtaista <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><?php echo CHtml::link('Uutiset',Yii::app()->request->baseUrl.'/index.php/site/uutiset'); ?></li>
                  <li><?php echo CHtml::link('Media',Yii::app()->request->baseUrl.'/index.php/site/media'); ?></li>
                  <li><?php echo CHtml::link('Tapahtumat / Tiedotteet',Yii::app()->request->baseUrl.'/index.php/site/tiedotteet'); ?></li>
                  <li><?php echo CHtml::link('Sosiaalinen media',Yii::app()->request->baseUrl.'/index.php/site/kuvapankki'); ?></li>
                </ul>
              </li>
         
<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Asiakaspalvelu <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><?php echo CHtml::link('Asiakaspalvelun yhteystiedot',Yii::app()->request->baseUrl.'/index.php/site/asiakaspalvelun_yhteystiedot'); ?></li>
                  <li><?php echo CHtml::link('Asiakkuuden hallinta',Yii::app()->request->baseUrl.'/index.php/site/asiakkuuden_hallinta'); ?></li>
                  <!--<li><?php echo CHtml::link('Laskutus',Yii::app()->request->baseUrl.'/index.php/site/laskutus'); ?></li>-->
                </ul>
              </li>

 <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Yritys <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><?php echo CHtml::link('Yritysesittely',Yii::app()->request->baseUrl.'/index.php/site/yritysesittely'); ?></li>
                 <!-- <li><?php echo CHtml::link('Visio',Yii::app()->request->baseUrl.'/index.php/site/visio'); ?></li>-->
                </ul>
              </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
           <!-- <li><?php echo CHtml::link('Sisään',Yii::app()->request->baseUrl.'/index.php/user/login'); ?></li>-->

            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>


<?php
$curpage = Yii::app()->getController()->getAction()->controller->id;
$curpage .= '/'.Yii::app()->getController()->getAction()->controller->action->id;
?>


<div class="container container-fluid">
 <div class="">
	<?php echo $content; ?>
 </div>
</div>




<footer class="footer-distributed">
<div class="container-fluid">
			<div class="footer-left">


<div class="row">
 <div class="col-sm-5">
				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>

				</div>


 </div><div class="col-sm-2">
<center>
<!-- TeamViewer  -->
<div style="position:relative; width:120px; height:60px;">
  <a href="https://go.teamviewer.com/cq666rv" style="text-decoration:none;">
    <img src="http://www.teamviewer.com/link/?url=979936&id=599737195" alt="Avetak Oy Online-Tapaaminen" title="Avetak Oy Online-Tapaaminen" border="0" width="120" height="60" />
    <span style="position:absolute; top:19.5px; left:50px; display:block; cursor:pointer; color:White; font-family:Arial; font-size:10px; line-height:1.2em; font-weight:bold; text-align:center; width:65px;">
      Avetak Oy Online-Tapaaminen
    </span>
  </a>
</div>
<!-- TeamViewer  -->
</center>
 </div>
</div>

			
			</div>

			<div class="footer-center">

<center>


					<i class="fa fa-envelope"></i>
					<p><a href="avetak@avetak.fi">info@avetak.fi</a></p>
					<br>
					<p class="footer-links">
					
					<a style="color:#9f9f9f">&copy; Avetak Oy</a>
					·
					<a href="http://www.avetak.fi" style="color:#9f9f9f">www.avetak.fi</a>
					·
					<a href="http://www.e-palkki.fi" style="color:#9f9f9f">www.e-palkki.fi</a>
					·
					<a style="color:#9f9f9f">Y-tunnus 2692378-6</a>

					</p>




</center>

			</div>

			<div class="footer-right">

<div>
<a href="https://www.tilaajavastuu.fi/fi/pikatarkistus/?yt=2692378-6"><img
border="0"
src="https://www.tilaajavastuu.fi/wp-content/uploads/2013/10/lk_logo.png"
alt="LuotettavaKumppaniyritys"/></a>
</div>

			</div>




</div>
</footer>


</body>
</html>
