<?php
	class Core
	{

/*
PLEASE USE ECHO.
*/
		public function renderPhpFile($filename, $data = null)
		{
  			if (is_array($data) && !empty($data)) 
  			{		
  				extract($data);
  			}

  			ob_start();
  			include $filename;
  			return ob_get_clean();
		}

	}
?>