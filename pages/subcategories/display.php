<div class="container">
    <!-- Content Row -->
    <div class="row">
        <?php require_once('inc/sidebar.php'); ?>
        <!-- Content Column -->
        <div class="col-md-9">
            <?php

                $id = $_GET['id']; 
                $sql = "SELECT 
                            subcats.id AS subcatsID, 
                            subcats.cats_id, 
                            subcats.name AS name, 
                            subcats.tagline AS tagline, 
                            subcats.descr AS description, 
                            subcats.got_series 
                            FROM subcats 
                            INNER JOIN cats 
                            ON subcats.cats_id=cats.id 
                            WHERE cats_id='$id'";
                $result = $conn->query($sql);

                while($row = $result->fetch_assoc()) {
                    if ($row['got_series']==1) {
                        // show subcategories but link to series page
                        echo '<div class="col-md-6 img-portfolio">';
                            echo '<a href="index.php?page=series&from=subcats&id='.$row['subcatsID'].'"><img class="img-responsive img-hover" src="http://placehold.it/700x400" alt=""></a>';
                            echo '<h3><a href="index.php?page=series&from=subcats&id='.$row['subcatsID'].'">'.$row['name'].'</a></h3>';
                            echo '<p>'.$row['tagline'].'</p>';
                            echo '<p>'.$row['description'].'</p>';
                        echo '</div>';
                    } else {
                        // show subcategories but link to products page
                        echo '<div class="col-md-6 img-portfolio">';
                            echo '<a href="index.php?page=products&id='.$row['subcatsID'].'"><img class="img-responsive img-hover" src="http://placehold.it/700x400" alt=""></a>';
                            echo '<h3><a href="index.php?page=products&id='.$row['subcatsID'].'">'.$row['name'].'</a></h3>';
                            echo '<p>'.$row['tagline'].'</p>';
                            echo '<p>'.$row['description'].'</p>';
                        echo '</div>';
                    }
                }
            ?>
        </div><!-- colmd9 -->          
    </div><!-- row -->
</div><!-- container -->