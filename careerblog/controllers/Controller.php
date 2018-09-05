<?php
	class Controller
	{

/*
THIS FUNCTON IS TO RENDER VIEWS AND THE DATA WITH IT. THE DATA IS INITIALIZED AS NULL INITIALLY WHICH CAN TAKE THE FORM OF AN ARRAY
OR AN INTEGER.
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
/*
THIS FUNCTON IS TO RENDER THE CONTENTS OF A FILE
*/

    public function file_contents_of($dir) 
    {
      $dir_name=array();

      if (is_dir($dir))
      {
          if ($dh = opendir($dir))
          {
            while (($file = readdir($dh)) !== false)
            { 
                $dir_name[]=$dir.'/'.$file;
            }
            closedir($dh);
          }
      }
      return $dir_name;
    }

	}
?>