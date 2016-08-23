<?php

?>
<style>
body{
	margin:0;
}
.vasemalla{
min-height: 1250px;

/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+45,42454a+99 */
background: #000000; /* Old browsers */
background: -moz-linear-gradient(top,  #000000 45%, #42454a 99%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #000000 45%,#42454a 99%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #000000 45%,#42454a 99%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#42454a',GradientType=0 ); /* IE6-9 */

}
img.logo.img-thumbnail{
	border: none;
	padding: 0;
}
.fa{
	font-size: 180%;
}
</style>

<div class="">


  <!--vaseman puoli-->
  <div class="col-sm-3 vasemalla">
	<p>
	<div class="row">
	 <div class="col-sm-11 col-sm-offset-1">
		  <img src="img/logo.jpg" class="logo img-thumbnail">
	 </div>
	</div>
	</p>
<br><br>
	<p>
	<div class="row">
	 <div class="col-sm-10 col-sm-offset-1">


<div class="list-group">
  <a class="btn btn-lg btn-primary btn-block" href="<?php echo Yii::app()->request->baseUrl.'/index.php/site/asiakaskunta'; ?>"><i class="fa fa-users pull-left" aria-hidden="true"></i>&nbsp; <span class="small pull-left">Asiakaskunta</span></a>
  <a class="btn btn-lg btn-primary btn-block" href="<?php echo Yii::app()->request->baseUrl.'/index.php/site/kumppanuus'; ?>"><i class="fa fa-compass pull-left" aria-hidden="true"></i>&nbsp; <span class="small pull-left">Kumppanuus</span></a>
  <a class="btn btn-lg btn-primary btn-block" href="<?php echo Yii::app()->request->baseUrl.'/index.php/site/kansainvalisyys'; ?>"><i class="fa fa-globe pull-left" aria-hidden="true"></i>&nbsp; <span class="small pull-left">Kansainvälisyys</span></a>
  <a class="btn btn-lg btn-primary btn-block" href="<?php echo Yii::app()->request->baseUrl.'/index.php/site/oletkovalmis'; ?>"><i class="fa fa-question-circle pull-left" aria-hidden="true"></i>&nbsp; <span class="small pull-left">e-palkki</span></a>
</div>
<br><br><br>

<div class="row">
 <div class="col-sm-10 col-sm-offset-1">
  <img src="<?php echo Yii::app()->request->baseUrl; ?>/kotisivukuvat/etusivuvasen1.jpg" class="logo img-thumbnail">
 </div>
</div> 

	 </div>
	</div>
	</p>


  </div>

  <!--oikea puoli-->
  <div class="col-sm-9">
  <p>
  <div class="row">
   <div class="col-sm-12">

	<div class="row">
	  <div class="col-sm-7">





    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 500);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

<style>
@media screen and (min-width:480px){
  #jssor_1{
	position: relative; margin: 0 auto; top: 0px; left: 0px; 
  }
}


        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 12 css */
        /*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        */
        .jssora12l, .jssora12r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 30px;
            height: 46px;
            cursor: pointer;
            background: url('img/a12.png') no-repeat;
            overflow: hidden;
        }
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
    </style>


    <div id="jssor_1" style="width: 500px; height: 300px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 500px; height: 300px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/vaihtuva1.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/vaihtuva2.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/vaihtuva3.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/vaihtuva4.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/vaihtuva5.jpg" />
            </div>
            <a data-u="ad" href="http://www.jssor.com" style="display:none">Responsive Slider</a>
        
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
    </div>




	
	    </div><div class="col-sm-4">
		   <div class="row">
		   <br>

		     <a href="http://vetel.fi"><img src="img/e-palkki.jpg" class="img-thumbnail"></a>
		     <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/videolinkit"><img src="img/youtube.jpg" class="img-thumbnail"></a>
		   </div>
	    </div>


	</div>
  </p>
  <br>


  <br>
  <br>


<div class="row">
 <div class="col-sm-12">
  <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/alakuva.jpg" class="img-thumbnail">

</div>
</div>
  <br>
	<p>
	<div class="row">

	  <div class="col-sm-4">
 <a class="btn btn-lg btn-primary btn-block" href="<?php echo Yii::app()->request->baseUrl.'/index.php/site/asiakas_epalkki'; ?>"><i class="fa fa-cubes pull-left" aria-hidden="true"></i>&nbsp; <span class="small pull-left">Asiakkaan e-palkki</span></a>
	  </div>

	  <div class="col-sm-4">
 <a class="btn btn-lg btn-primary btn-block" href="<?php echo Yii::app()->request->baseUrl.'/index.php/site/tuottaja_epalkki'; ?>"><i class="fa fa-industry pull-left" aria-hidden="true"></i>&nbsp; <span class="small pull-left">Tuottajan e-palkki</span></a>
	  </div>

	  <div class="col-sm-4">
 <a class="btn btn-lg btn-primary btn-block" href="<?php echo Yii::app()->request->baseUrl.'/index.php/site/esimerkit'; ?>"><i class="fa fa-question-circle pull-left" aria-hidden="true"></i>&nbsp; <span class="small pull-left">Esimerkit e-palkki</span></a>
	  </div>
	</div>

  <br>

	<div class="row">
	  <div class="col-sm-4">
 <a class="btn btn-lg btn-primary btn-block" href="<?php echo Yii::app()->request->baseUrl.'/index.php/site/media'; ?>"><i class="fa fa-television pull-left" aria-hidden="true"></i>&nbsp; <span class="small pull-left">Media</span></a>
	  </div>
	  <div class="col-sm-4">
<a class="btn btn-lg btn-primary btn-block" href="<?php echo Yii::app()->request->baseUrl.'/index.php/site/tyopaikat'; ?>"><i class="fa fa-user-plus pull-left" aria-hidden="true"></i>&nbsp; <span class="small pull-left">Työpaikat</span></a>
	  </div>
	  <div class="col-sm-4">
<a class="btn btn-lg btn-primary btn-block" href="<?php echo Yii::app()->request->baseUrl.'/index.php/site/kuvapankki2'; ?>"><i class="fa fa-folder-open pull-left" aria-hidden="true"></i>&nbsp; <span class="small pull-left">Kuvapankki</span></a>
	  </div>
	</div>
	</p>


   </div>
  </div>


  </div>

</div>
