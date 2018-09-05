<?php
	class Controller
	{
		function renderPhpFile($filename, $data = null)
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