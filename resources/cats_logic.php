<!-- header php links -->
<?php
// mysql load category row
if ($row['got_subcat']==1) {
	// load subcat page
} else {
	if ($row['got_series']==1) {
		// load series page
	} else {
		// load products page
	}
}
?>

<!-- subcat page -->
<?php
// mysql load category join cats where cats_id==$cats_id
if ($row['got_series']==1) {
	// show subcategories but link to series page
} else {
	// show subcategories but link to products page
}
?>

<!-- series page -->
<?php
// mysql load series join cats,subcats where cats_id=cats.id and subcats_id=subcats.id
// show series, link to producs page
?>

<!-- products page -->
<?php
// mysql load products join cats,subcats,series where cats_id=cats.id and subcats_id=subcats.id and series_id=series.id
// show products, link to individual product page
?>

<!-- product page -->
<?php
// mysql load products where id=$get_id
// show product
?>