<div class="container">
    <!-- Content Row -->
    <div class="row">
        <?php require_once('inc/sidebar.php'); ?>
        <!-- Content Column -->
        <div class="col-md-9">
            <?php

                $id = $_GET['id'];
                $from = $_GET['from'];

                if ($from=='subcats') {
                    $sql = "SELECT 
                        series.id AS seriesID, 
                        series.subcats_id, 
                        series.cats_id, 
                        series.name AS name, 
                        series.tagline AS tagline, 
                        series.descr AS description
                        FROM series
                        INNER JOIN subcats 
                        ON series.subcats_id=subcats.id
                        WHERE subcats.id='$id'";    
                } else {
                    $sql = "SELECT 
                        series.id AS seriesID,
                        series.cats_id,
                        series.name AS name, 
                        series.tagline AS tagline, 
                        series.descr AS description
                        FROM series
                        INNER JOIN cats 
                        ON series.cats_id=cats.id
                        WHERE cats.id='$id'";    
                    }
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4 img-portfolio">';
                        echo '<a href="index.php?page=products&from=series&id='.$row['seriesID'].'"><img class="img-responsive img-hover" src="http://placehold.it/700x400" alt=""></a>';
                        echo '<h3><a href="index.php?page=products&from=series&id='.$row['seriesID'].'">'.$row['name'].'</a></h3>';            
                        echo '<p>'.$row['model'].'</p>';
                        echo '<p>'.$row['name'].'</p>';
                    echo '</div>';
                }
            ?>
        </div><!-- colmd9 -->          
    </div><!-- row -->
</div><!-- container -->