<div class="container">
    <!-- Content Row -->
    <div class="row">
        <?php require_once('inc/sidebar.php'); ?>
        <!-- Content Column -->
        <div class="col-md-9">
            <?php

                $id = $_GET['id'];
                $from = $_GET['from'];

                if ($from=='series') {
                	// show full serie
                    $sql = "SELECT 
						products.id AS productsID,
						products.model AS model,
						products.series_id,
						products.tagline AS tagline, 
						products.descr AS description
						FROM products
						INNER JOIN series 
						ON products.series_id=series.id
						WHERE series.id='$id'";    
                } elseif ($from=='cat') {
                	// show full category
                    $sql = "SELECT 
						products.id AS productsID,
						products.model AS model,
						products.cats_id,
						products.tagline AS tagline, 
						products.descr AS description
						FROM products
						INNER JOIN cats 
						ON products.cats_id=cats.id
						WHERE cats.id='$id'";    
                    } else {
                    	// show full subcategory
                  	$sql = "SELECT 
						products.id AS productsID,
						products.model AS model,
						products.subcats_id,
						products.tagline AS tagline, 
						products.descr AS description
						FROM products
						INNER JOIN subcats 
						ON products.subcats_id=subcats.id
						WHERE subcats.id='$id'";                   	
                    }

                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
        
					echo '<div class="col-md-3 img-portfolio">';
						echo '<a href="portfolio-item.html"><img class="img-responsive img-hover" src="http://placehold.it/750x450" alt=""></a>';
						echo '<h4>'.$row['model'].'</h4>';
					echo '</div>';
        
                }
            ?>
        </div><!-- colmd9 -->          
    </div><!-- row -->
</div><!-- container -->