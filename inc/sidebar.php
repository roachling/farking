<!-- Sidebar Column -->
<div class="col-md-3">
    <div class="list-group">
        <?php
            $sql = "SELECT id, name FROM cats";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    if ($row['follow']==0){
                        echo '<a href="index.php?page=products&id='.$row['id'].'" class="list-group-item">'.$row['name'].'</a>';
                    } elseif ($row['follow']==1) {
                        echo '<a href="index.php?page=series&id='.$row['id'].'" class="list-group-item">'.$row['name'].'</a>';
                    } elseif ($row['follow']==2) {
                        echo '<a href="index.php?page=subcategory&id='.$row['id'].'" class="list-group-item">'.$row['name'].'</a>';
                    }
                }
            } else {
                echo '<p class="list-group-item">No categories</p>';
            }
        ?>
    </div>
</div>