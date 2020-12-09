<?php

/**
 * @author Kristof Friess <kristof.friess@fh-erfurt.de>
 * @copyright Since 2018 by Kristof Friess
 * @version 1.0.0
 */


namespace dwp\core;

class Controller
{
	protected $controller  = null;	// stores the called controller name
	protected $action 	   = null;	// stores the colled action name
	protected $currentUser = null;  // store current logged in user here

	protected $params = [];			// stores useful params for view rendering

	public function __construct($controller, $action)
	{
		$this->controller = $controller;
		$this->action = $action;

		if($this->loggedIn())
		{
			// TODO: Load the current user using the session and the account model
			// 		 write user model object to member variable currentUser
		}
	}

	public function setAction($action)
    {
        $this->action = $action;
    }

    public function setController($controller)
    {
        $this->controller = $controller;
    }

	/**
	 * Check a valid login is available for this current session
	 * @return Boolean 		true if the user logged in otherwise false
	 */
	public function loggedIn()
	{
		return ( isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true);
	}

	/**
	 * Render the correct view for the controller and action, using the params array to extract variables for the view
	 */
	public function render()
	{
		// generate the view path
		$viewPath = VIEWSPATH.$this->controller.DIRECTORY_SEPARATOR.$this->action.'.php';
		// check the file exists
		if(!file_exists($viewPath))
		{
            $viewPath = VIEWSPATH.$this->controller.DIRECTORY_SEPARATOR.'error.php';
            extract(['errMsg'=>'Unknown View Error 404']);
            include $viewPath;
		}
		else
        {
            // extract the params array to get all needed variables for the view
            extract($this->params);

            // just include the view here, it's like putting the code of the php file by copy paste on this position.
            include $viewPath;
        }
	}

	/**
	 * Setter for params, which will be used for the render method
	 * @param  String $key   Key in the param array
	 * @param  Mixed  $value Key value
	 */
	protected function
    setParam($key, $value = null)
	{
		$this->params[$key] = $value;
	}

	public function __destruct()
	{
		$this->controller = null;
		$this->action = null;
		$this->params = null;
	}
}