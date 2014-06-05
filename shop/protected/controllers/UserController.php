<?php
	class UserController extends Controller{
		public function actionLogin(){
			//调用模板
			$this->renderPartial('login');
		}

		public function actionRegister(){
			$this->renderPartial('register');
		}
	}