<?php
		/* __autoload function
            * *
            * *
            * * @param string: param string name of class
            * * @return: Retutn void
            * */
			
		function __autoload($class)
		{
			if (file_exists(dirname(__FILE__) . '/../controllers/'.$class.'.php') ) 
			{
				require_once (dirname(__FILE__) . '/../controllers/'.$class.'.php');
			}
			
			if (file_exists(dirname(__FILE__) . '/../models/'.$class.'.php') ) 
			{
				require_once (dirname(__FILE__) . '/../models/'.$class.'.php');
			}
			
			if (file_exists(dirname(__FILE__) . '/../views/'.$class.'.php') ) 
			{
				require_once (dirname(__FILE__) . '/../views/'.$class.'.php');
			}
		}
		
		/* redirect function
            * *
            * *
            * * @param string: param string name of template
            * * @return: Retutn void
            * */
			
		function redirect($view)
		{
			header('Location: index.php?view=' . $view);
		}
		
		/* checkId function
            * *
            * *
            * * @param int: param int id
            * * @return: Retutn bool
            * */
			
		function checkId($id)
		{
			if( preg_match("/^[0-9]+$/",$id) && $id > 0 )
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
	
	
	
	
	
