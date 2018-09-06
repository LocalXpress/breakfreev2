<?php
	require_once '../controllers/Controller.php';
    $controller     =   new Controller;
    $data_name 		= 	$controller->file_contents_of('../'.$_GET['path']);
	$intialPage     =  	1;
    $finalPage      =  	(sizeof($data_name)-2);
    $path			=  	'../'.$_GET['path'].'/'.$_GET['filename'].'-';
?>
<!--JS AND CSS FILES INCLUSION-->
<head>
    <title><?=$_GET['filename'];?></title>
    <!--PARTICULAR JS AND CSS FILE FOR THIS VIEW-->
    <link rel="stylesheet" href="../css/BlogDisplay.css">
    <script type="text/javascript" src="../js/BlogDisplay.js"></script>
    <!--CDN FOR THE SEMENTIC UI-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>  
</head>
<!--START OF THE MAIN CONTENT-->

<body>
<!--
HEADER OF THE PAGE    
-->
    <?php
        require_once 'header.php'; 
    ?>

    <div id="MainContent">
        <?php 
            for($i=$intialPage;$i<=$finalPage;$i++)
            {   
                if($i<10)
                    echo '<img class="lazy"   src="../img/loading.gif" data-src="'.$path.'0'.$i.'.jpg">';
                else
                    echo '<img class="lazy"   src="../img/loading.gif" data-src="'.$path.$i.'.jpg">';   
            }
        ?>
    </div>
</body>

<!--
FOOTER OF THE PAGE    
-->
    <?php
        require_once 'footer.php';
    ?>


          