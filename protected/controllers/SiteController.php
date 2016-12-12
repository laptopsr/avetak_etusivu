<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function accessRules()
	{
		return array(
			array('allow', 
				'actions'=>array('index', 'yritysesittely', 'visio', 'asiakaspalvelun_yhteystiedot', 'asiakkuuden_hallinta', 'laskutus', 'uutiset', 'media', 'tiedotteet', 'kuvapankki', 'kilpailutus', 'kilpailutus', 'tyonhallinta', 'vararesurssi', 'laatu_toiminnan_tueksi', 'laatukoulutus', 'prosessikuvaus', 'prosessimanuaali', 'koulutus_tukipalvelut', 'menetelma_prosessikehitys', 'teollinen_internet', 'laskutuspalvelu', 'tuotteet', 'asiakaskunta', 'kumppanuus', 'kansainvalisyys', 'oletkovalmis', 'asiakas_epalkki', 'tuottaja_epalkki', 'esimerkit', 'tyopaikat', 'videolinkit', 'kuvapankki2', 'prosessipalvelut'),
				'users'=>array('*'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array(''),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}


	public function actionYritysesittely()
	{
		$this->render('yritysesittely');
	}

	public function actionVisio()
	{
		$this->render('visio');
	}

	public function actionAsiakaspalvelun_yhteystiedot()
	{
		$this->render('asiakaspalvelun_yhteystiedot');
	}

	public function actionAsiakkuuden_hallinta()
	{
		$this->render('asiakkuuden_hallinta');
	}

	public function actionLaskutus()
	{
		$this->render('laskutus');
	}

	public function actionUutiset()
	{
		$this->render('uutiset');
	}

	public function actionMedia()
	{
		$this->render('media');
	}

	public function actionTiedotteet()
	{
		$this->render('tiedotteet');
	}

	public function actionKuvapankki()
	{
		$this->render('kuvapankki');
	}


	public function actionKilpailutus()
	{
		$this->render('kilpailutus');
	}

	public function actionTyonhallinta()
	{
		$this->render('tyonhallinta');
	}

	public function actionVararesurssi()
	{
		$this->render('vararesurssi');
	}

	public function actionLaatu_toiminnan_tueksi()
	{
		$this->render('laatu_toiminnan_tueksi');
	}

	public function actionLaatukoulutus()
	{
		$this->render('laatukoulutus');
	}

	public function actionProsessikuvaus()
	{
		$this->render('prosessikuvaus');
	}

	public function actionProsessimanuaali()
	{
		$this->render('prosessimanuaali');
	}

	public function actionKoulutus_tukipalvelut()
	{
		$this->render('koulutus_tukipalvelut');
	}

	public function actionMenetelma_prosessikehitys()
	{
		$this->render('menetelma_prosessikehitys');
	}

	public function actionTeollinen_internet()
	{
		$this->render('teollinen_internet');
	}

	public function actionLaskutuspalvelu()
	{
		$this->render('laskutuspalvelu');
	}

	public function actionTuotteet()
	{
		$this->render('tuotteet');
	}

	public function actionAsiakaskunta()
	{
		$this->render('asiakaskunta');
	}

	public function actionKumppanuus()
	{
		$this->render('kumppanuus');
	}

	public function actionKansainvalisyys()
	{
		$this->render('kansainvalisyys');
	}

	public function actionOletkovalmis()
	{
		$this->render('oletkovalmis');
	}


	public function actionAsiakas_epalkki()
	{
		$this->render('asiakas_epalkki');
	}

	public function actionTuottaja_epalkki()
	{
		$this->render('tuottaja_epalkki');
	}

	public function actionEsimerkit()
	{
		$this->render('esimerkit');
	}

	public function actionTyopaikat()
	{
		$this->render('tyopaikat');
	}

	public function actionVideolinkit()
	{
		$this->render('videolinkit');
	}
	public function actionKuvapankki2()
	{
		$this->render('kuvapankki2');
	}
	public function actionProsessipalvelut()
	{
		$this->render('prosessipalvelut');
	}


	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
