<?php
	include ('productCRUD.php');
	$obj = new productCRUD();
	// read data
	$list = $obj->readtoy();
	if($list){
	/*	foreach($list as $item){
			$content = "";
			foreach($item as $key => $value){
				$content = $content . $key.": ".$value."<br>";
			}
		echo $content."<br>";
		}
	}*/


	
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Home</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
        <link rel="stylesheet" type="text/css" href="style/style.css" />
    </head>
    <body>
        <div id="main">
        <div id="header">
            <div id="logo">
                <div id="logo_text">
                    <h1><a href="index.php">ATN<span class="logo_colour">Toystore</span></a></h1>
                    <h2>Make kid happy</h2>
                </div>
            </div>
        </div>
        <div id="content_header"></div>
        <div id="site_content">
            <div class="sidebar">
                <!-- insert your sidebar items here -->
                <h3>Latest News</h3>
                <p></p>
                <h4>New Website Launched</h4>
                <h5>October 28th, 2020</h5>
                <p>Welcome to ATN toystore website<br /><a href="#">Read more</a></p>
            </div>
            <div class="container">
                <table  class="table table-striped">
                    <tr>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Image</th>
                        <th>Product Detail</th>
                    </tr>
                    <?php foreach($list as $item){ ?>
                    <tr>
                        <td><?php echo $item["code"] ?></td>
                        <td><?php echo $item["name"] ?></td>
                        <td><?php echo $item["price"] ?></td>
                        <td><img src = "img\<?=$item["image"] ?> " width="200" height="142" /></td>
                        <td><?php echo $item["detail"] ?></td>
                    </tr>
                    <?php } ?>
                    <?php } ?>
                </table>
            </div>
            <div id="content_footer"></div>
            <div id="footer">
                Copyright &copy; simplestyle_1 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Website templates</a>
            </div>
        </div>
    </body>
</html>
