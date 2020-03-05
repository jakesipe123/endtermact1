<?php
 $id = $_GET['id'];
 $json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
 $data = json_decode($json,true);
 $details = array('records' => $data);
 $result = $details['records'];
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
                        <li> <a href="index.php?loadnav=readprod"> Show Product</a> </li>
                        <li> <a href="index.php?loadnav=categories"> Categories</a> </li>
                        <li> <a href="index.php?loadnav=create"> Create  </a> </li>
                        </ul>
                        </div>
                    </div>

  <div class="home_body"><br/><br/>
  <div class="content">
		<h1><b><?php echo $result['name']; ?></b></h1>
		<table border=1>
				<p> <b>Price:  </b><?php echo $result['price']; ?></p>
				<p> <b>Description:  </b><?php echo $result['description']; ?> </p>
				<p> <b>Category:  </b><?php echo $result['category_name'];?> </p>
		</table>
				<footer>
					<a  href="index.php?loadnav=form_update.php?id=<?php echo $id ?>"><h2>Update</h2> | </a>
					<a  href="index.php?loadnav=pro_delete.php?id=<?php echo $id ?>"><h2>Delete</h2></a></br></br>
					<a  href="index.php?loadnav=list"><h2><== Back</h></a>
			
				</footer>
			</div>
		</div>
  </div>
</body>
</html>