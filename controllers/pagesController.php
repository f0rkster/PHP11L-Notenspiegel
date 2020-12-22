<?php

/**
 * @author Kristof Friess <kristof.friess@fh-erfurt.de>
 * @copyright Since 2018 by Kristof Friess
 * @version 1.0.0
 */



namespace dwp\controller;


class PagesController extends \dwp\core\Controller
{

	public function actionIndex()
	{

		if($this->loggedIn())
		{
			// TODO: Retrieve account which is logged in
			
			// TODO: Set the correct name of the current user here
			$this->setParam('name', 'unkown');

			// TODO: retrieve and set the marks of the current user
			$this->setParam('marks', []);

		}
		else
		{
			header('Location: index.php?c=pages&a=login');
		}

	}

    public function actionLogin()
	{
		// store error message
		$errMsg = null;

		// retrieve inputs 
		$username = isset($_POST['username']) ? $_POST['username'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';

		// check user send login field
		if(isset($_POST['submit']))
		{

			// TODO: Validate input first
			// TODO: Check login values with database accounts
			// TODO: Store useful variables into the session like account and also set loggedIn = true
			

			// if there is no error reset mail
			if($errMsg === null)
			{
				$username = '';
			}

		}

		// set param email to prefill login input field
		$this->setParam('username', $username);
		$this->setParam('errMsg', $errMsg);
	}

	public function actionSignup()
	{
		// store error message
		$errMsg = null;

		// TODO: Handle Inputfields for account

		// check user send login field
		if(isset($_POST['submit']))
		{

			// Validate and create account in database if possible
            if(!empty($_POST['submit']['surname'])
            && !empty($_POST['submit']['name'])
            && !empty($_POST['submit']['gender'])
            && !empty($_POST['submit']['email'])
            && !empty($_POST['submit']['password'])
            && !empty($_POST['submit']['passwordValidate'])
            && $_POST['submit']['password'] === $_POST['submit']['passwordValidate']
            && !empty($_POST['submit']['matriculationNumber'])
            )
            {
                // required values
                $surname             = $_POST['surname'];
                $name                = $_POST['name'];
                $gender              = $_POST['gender'];
                $email               = $_POST['email'];
                $password            = $_POST['password'];
                $matriculationNumber = $_POST['matriculationNumber'];

                // optional values
		        $secondname   = !empty($_POST['submit']['secondname'])   ? $_POST['submit']['secondname']    : '';
                $street       = !empty($_POST['submit']['street'])       ? $_POST['submit']['street']        : '';
                $streetNumber = !empty($_POST['submit']['streetNumber']) ? $_POST['submit']['streetNumber']  : '';
                $city         = !empty($_POST['submit']['city'])         ? $_POST['submit']['city']          : '';
                $zipCode      = !empty($_POST['submit']['zipCode'])      ? $_POST['submit']['zipCode']       : '';
                $phone        = !empty($_POST['submit']['phone'])        ? $_POST['submit']['phone']         : '';

                foreach ($_POST['submit'] as $key)
                {
                    // TODO: hier muss was in die datenbank geworfen werden
                    //
                }

            }
			

			// if there is no error reset mail
			if($errMsg === null)
			{
				// TODO: Redirect to login
			}

		}

		$this->setParam('errMsg', $errMsg);

		// TODO: Set params for account
		
	}

	public function actionExams()
	{
		// TODO: Check user is logged in
		
		// store error message
		$errMsg = null;

		// TODO: Handle Inputfields

		// check form sent
		if(isset($_POST['submit']))
		{

			// TODO: Validate input
			

			// if there is no error reset mail
			if($errMsg === null)
			{
				// TODO: reset input
			}

		}

		$this->setParam('errMsg', $errMsg);

		// TODO: Set params needed params like all exams with result
		$this->setParam('exams', []);
	}

	public function actionLogout()
	{
		session_destroy();
		header('Location: index.php?c=pages&a=login');
	}

}