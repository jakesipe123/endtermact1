<?php 
$loadnav = (isset($_GET['loadnav']) && $_GET['loadnav'] != '') ? $_GET['loadnav']: '';
?>
<html> 
    <head>
      <title>  API Endterm Exercise 1 </title>
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="navhead">
            <div class="navigation">
                        <ul> 
                        <li> <a href="index.php?loadnav=home"> <b>Home</b></a> </li>
                        <li> <a href="index.php?loadnav=list">Show Product</a> </li>
                        <li> <a href="index.php?loadnav=categories">Categories</a> </li>
                        <li> <a href="index.php?loadnav=create"> Create</a> </li>
                        </ul>
                        </div>
                    </div>
               
                        <?php 
                        switch($loadnav){
                            case 'list':
			    require_once 'show.php';
		            break;
                            case 'categories':
                            require_once 'categories.php';
                            break;
                            case 'create':
                            require_once 'form_create.php';
                            break;
                            case 'profile':
                            require_once 'pro_profile.php';
							break;
                            default:
                            require_once 'home.php';
                            break;
							
                        }
                        ?>
						
        
			

    </body>
</html>