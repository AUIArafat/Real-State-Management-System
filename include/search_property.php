<?php
extract($_REQUEST);

$keyword = $_REQUEST['keyword'];
// Type
// City
// Bedrooms
// Garages
// Bathrooms
// Min Price
echo"<script>window.location.href='../property-grid.php?keyword='++;</script>";
header( "Location: ../property-grid.php?keyword=".$keyword."&Type=".$Type."&City=".$City."&Bedrooms=".$Bedrooms."&Garages=".$Garages."&Bathrooms=".$Bathrooms."&Min_Price=".$Min_Price );
?>