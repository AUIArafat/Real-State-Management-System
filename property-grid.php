<?php include('include/header.php');
// include('include/search_property.php');

?>

<!-- main header end -->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Our Amazing Properties</h1>
            <span class="color-text-a">Grid Properties</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item" aria-current="page">
                Properties Grid
              </li>
              <?php 
              if(isset($_REQUEST['location'])){
                ?>
              <li class="breadcrumb-item active" aria-current="page">
               <?php  echo $_REQUEST['location']?>
              </li>
              <?php } ?>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row" id="target-content">
        <div class="col-sm-12">
          <div class="grid-option">
            <form>
              <select class="custom-select" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                <option <?php if(isset($_GET["property_type"]) && $_GET['property_type']=="All") echo 'selected="selected"'; ?> value="property-grid.php?property_type=All">All</option>
                <option <?php if(isset($_GET["property_type"])  && $_GET['property_type']=="For Rent") echo 'selected="selected"'; ?> value="property-grid.php?property_type=For Rent">For Rent</option>
                <option <?php if(isset($_GET["property_type"])  && $_GET['property_type']=="For Sale") echo 'selected="selected"'; ?> value="property-grid.php?property_type=For Sale">For Sale</option>
                <option <?php if(isset($_GET["property_type"]) && $_GET['property_type']=="Open House") echo 'selected="selected"'; ?> value="property-grid.php?property_type=Open House">Open House</option>
              </select>
            </form>
          </div>
        </div>
        <?php 
          include'include/config.php';
          //for total count data
          $limit = 6;
          $property_type = '';
          if (isset($_GET["property_type"]) && $_GET["property_type"] != "All") 
          { 
            $property_type  = "where PropertyType='".$_GET["property_type"]."'"; 
          } 
          else 
          { 
            $property_type=''; 
          } 
          if (isset($_GET["location"])) { $property_type  = "where Location='".$_GET["location"]."'"; }
          $countSql = "SELECT COUNT(PropertyId) FROM properties $property_type";  
          $tot_result = mysqli_query($con, $countSql);  
          $row = mysqli_fetch_row($tot_result);  
          $total_records = $row[0]; 
          
          $total_pages = ceil($total_records / $limit);


          if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };   
          $start_from = ($page-1) * $limit; 
          if (isset($_REQUEST['keyword'])){
            $keyword = $_REQUEST['keyword'];
            $type = $_REQUEST['Type'] != "All Type" ? "AND PropertyType='".$_REQUEST['Type']."'" : '';
            $loc = $_REQUEST['City'] != "All City" ?  "AND Location='".$_REQUEST['City']."'" : '';
            $bed = $_REQUEST['Bedrooms'] != "Any" ? "AND Beds='".$_REQUEST['Bedrooms']."'" : '';
            $bath = $_REQUEST['Bathrooms'] != "Any" ? "AND Baths='".$_REQUEST['Bathrooms']."'" : '';
            $gar = $_REQUEST['Garages'] != "Any" ? "AND Garage='".$_REQUEST['Garages']."'" : '';
            $min_price = $_REQUEST['Min_Price'] != "Unlimite" ? $_REQUEST['Min_Price'] : 0;
            $sql = "SELECT * FROM `properties` WHERE Title LIKE '%$keyword%' $type $loc $bed $bath $gar AND Price >= $min_price";
            // print_r($sql);
            $query=mysqli_query($con, $sql);

            $countSql = "SELECT COUNT(PropertyId) FROM properties WHERE Title LIKE '%$keyword%' $type $loc $bed $bath $gar AND Price >= $min_price";
            // print_r($countSql);
            $tot_result = mysqli_query($con, $countSql);  
            $row = mysqli_fetch_row($tot_result);  
            $total_records = $row[0];  
            $total_pages = ceil($total_records / $limit);
          }
          else{
            $query=mysqli_query($con,"SELECT * FROM properties $property_type ORDER BY PropertyId ASC LIMIT $start_from, $limit");
          }
          // print_r($query);
          if ($total_records <=0){
            echo "<h1>No Property found!!!</h1>";
          }
          
          while($res= mysqli_fetch_assoc($query))
          {
          $id=$res['PropertyId'];
          $img=$res['PropertyImg'];
          $property_title = $res['Title'];
          $location = $res['Location'];
          $price = $res['Price'];
          $area = $res['Area'];
          $beds = $res['Beds'];
          $baths = $res['Baths'];
          $garage = $res['Garage'];
      ?> 
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="admin1/images/property_image/<?php echo $img ?>" alt="" class="img-a img-fluid" style="height:300px;width:100%;">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.php?id=<?php echo $id?>"><?php echo $property_title ?>
                      <br /><?php echo $location ?></a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">PRICE | <?php echo $price ?> TK </span>
                  </div>
                  <a href="property-single.php?id=<?php echo $id?>" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span><?php echo $area ?>m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span><?php echo $beds ?></span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span><?php echo $baths ?></span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span><?php echo $garage ?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
          <?php } ?>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <nav class="pagination-a">

        <ul class='pagination justify-content-end' id="pagination">
            <?php if(!empty($total_pages)):for($i=1; $i<=$total_pages; $i++):  
            if($i == 1):?>
                  <li class='page-item <?php if($page==$i) echo 'active'; ?>'  id="<?php echo $i;?>">
                    <a href='property-grid.php?page=<?php echo $i;?>' class="page-link"><?php echo $i;?></a>
                  </li> 
            <?php else:?>
              <li id="<?php echo $i;?>" class="page-item <?php if($page==$i) echo 'active'; ?>"><a href='property-grid.php?page=<?php echo $i;?>' class="page-link"><?php echo $i;?></a></li>
            <?php endif;?> 
            <?php endfor;endif;?> 
          </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property Grid End /-->

    <!-- Footer start -->

<?php include('include/footer.php');?>

    <!-- <script>
    jQuery("#pagination li").on('click',function(e){
        e.preventDefault();
        jQuery("#target-content").html('loading...');
        jQuery("#pagination li").removeClass('active');
        jQuery(this).addClass('active');
                var pageNum = this.id;
                jQuery("#target-content").load("property-grid.php?page=" + pageNum);
        });
    </script> -->