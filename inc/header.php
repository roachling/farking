<html>
<head>
	<title>FARKING LTD.</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/custom.css">
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">FARKINGASIA</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php?page=about">About</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                            	<?php
                                    $sql = "SELECT id, name, got_subcat, got_series FROM cats";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            if ($row['got_subcat']==1){
                                                echo '<a href="index.php?page=subcategories&id='.$row['id'].'">'.$row['name'].'</a>';
                                            } else {
                                                if ($row['got_series']==1) {
                                                    echo '<a href="index.php?page=series&id='.$row['id'].'">'.$row['name'].'</a>';
                                                } else {
                                                    echo '<a href="index.php?page=products&from=cat&id='.$row['id'].'">'.$row['name'].'</a>';
                                                }
                                            }
                                        }
                                    }
    							?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?page=collections">Collections</a>
                    </li>
                    <li>
                        <a href="index.php?page=news">News</a>
                    </li>		                    
                    <li>
                        <a href="index.php?page=faq">FAQ</a>
                    </li>                    
                    <li>
                        <a href="index.php?page=contact">Contact</a>
                    </li>		                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
