<?php

	echo "LIST OF ALL THE BLOG POST WILL BE SHOWN HERE<BR>";

	for($i=2 ;$i<sizeof($data);$i++)
          {
            if(is_dir($data[$i]))
            {
            	$path_parts = pathinfo($data[$i]);
            	echo "<a href='views/BlogDisplay.php?path=".$data[$i]."/&&filename=".$path_parts['filename']."'>".$path_parts['filename']."</a>";
            }
          }
?>