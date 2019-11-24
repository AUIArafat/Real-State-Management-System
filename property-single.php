<?php include('include/header.php');
extract($_REQUEST);

$id=$_REQUEST['id'];
include'include/config.php';
$query=mysqli_query($con,"select * from properties where PropertyId='$id'");
$res=mysqli_fetch_array($query);


$id=$res['PropertyId'];
$img=$res['PropertyImg'];
$description=$res['PropertyDescription'];
$title=$res['Title'];
$price=$res['Price'];
$address=$res['Address'];
$video=$res['VideoLink'];
$location = $res['Location'];
$price = $res['Price'];
$area = $res['Area'];
$beds = $res['Beds'];
$baths = $res['Baths'];
$garage = $res['Garage'];
$property_type = $res['PropertyType'];
$status = $res['Status'];
$map = $res['LocationLink'];

?>
<!-- main header end -->
  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single"><?php echo $address ?></h1>
            <span class="color-text-a"><?php echo $location ?></span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="property-grid.html">Properties</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
               <?php echo $location ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
          <?php

              $query=mysqli_query($con,"select * from documents where PropertyId='$id'");
              $res=mysqli_fetch_array($query);
                                  
              $img1=$res['Src1'];
              $img2=$res['Src2'];
              $img3=$res['Src3'];
              $img4=$res['Src4'];
          ?>
            <div class="carousel-item-b">
              <img src="admin1/images/property_image/<?php echo $img;?>" alt="" style="height: 768px;">
            </div>
            <div class="carousel-item-b">
              <img src="admin1/images/property_image/<?php echo $img1;?>" alt="" style="height: 768px;">
            </div>
            <div class="carousel-item-b">
              <img src="admin1/images/property_image/<?php echo $img2;?>" alt="" style="height: 768px;">
            </div>
            <div class="carousel-item-b">
              <img src="admin1/images/property_image/<?php echo $img3;?>" alt="" style="height: 768px;">
            </div>
            <div class="carousel-item-b">
              <img src="admin1/images/property_image/<?php echo $img4;?>" alt="" style="height: 768px;">
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="ion-money">৳</span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h5 class="title-c"><?php echo $price ?></h5>
                  </div>
                </div>
              </div>
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Quick Summary</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>Property ID:</strong>
                      <span><?php echo $id ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Location:</strong>
                      <span><?php echo $address.", ".$location ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Property Type:</strong>
                      <span><?php echo $property_type ?></span>
                    </li>
                    <!-- <li class="d-flex justify-content-between">
                      <strong>Status:</strong>
                      <span><?php echo $status ?></span>
                    </li> -->
                    <li class="d-flex justify-content-between">
                      <strong>Area:</strong>
                      <span><?php echo $area ?>m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Beds:</strong>
                      <span><?php echo $beds ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Baths:</strong>
                      <span><?php echo $baths ?></span></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Garage:</strong>
                      <span><?php echo $garage ?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Property Description</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                  <?php echo $description ?>
                </p>
              </div>
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Amenities</h3>
                  </div>
                </div>
              </div>
              <div class="amenities-list color-text-a">
                <ul class="list-a no-margin">
                  <li>Balcony</li>
                  <li>Outdoor Kitchen</li>
                  <li>Cable Tv</li>
                  <li>Deck</li>
                  <li>Tennis Courts</li>
                  <li>Internet</li>
                  <li>Parking</li>
                  <li>Sun Room</li>
                  <li>Concrete Flooring</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10 offset-md-1">
          <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab"
                aria-controls="pills-video" aria-selected="true">Video</a>
            </li>
              <!-- <li class="nav-item">
                <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-plans" role="tab" aria-controls="pills-plans"
                  aria-selected="false">Floor Plans</a>
              </li> -->
            <li class="nav-item">
              <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map"
                aria-selected="false">Ubication</a>
            </li>
          </ul>
          <!-- https://player.vimeo.com/video/73221098 -->
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
              <iframe src="<?php echo $video ?>" width="100%" height="460" frameborder="0"
                webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
              <img src="img/plan2.jpg" alt="" class="img-fluid">
            </div>
            <!-- https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834 -->
            <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
              <iframe src="<?php echo $map ?>"
                width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row section-t3">
            <div class="col-sm-12">
              <div class="title-box-d">
                <h3 class="title-d">Contact Agent</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- <div class="col-md-6 col-lg-4">
              <img src="img/30.jpg" alt="" class="img-fluid">
            </div> -->
            <!-- <div class="col-md-6 col-lg-4">
              <div class="property-agent">
                <h4 class="title-agent">Afroza Sultana</h4>
            
                <ul class="list-unstyled">
                  <li class="d-flex justify-content-between">
                    <strong>Phone:</strong>
                    <span class="color-text-a">+54 356 945239</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Mobile:</strong>
                    <span class="color-text-a">01968260710</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Email:</strong>
                    <span class="color-text-a">agent7@example.com</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Skype:</strong>
                    <span class="color-text-a">Afroza.ge</span>
                  </li>
                </ul>
                <div class="socials-a">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div> -->
            <div class="col-md-12 col-lg-4">
              <div class="property-contact">
                <form class="form-a" >
                  <div class="row">
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-lg form-control-a" id="inputName"
                          placeholder="Name *" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1"
                          placeholder="Email *" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <textarea id="textMessage" class="form-control" placeholder="Comment *" name="message" cols="45"
                          rows="8" required></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-a">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property Single End /-->

    <!-- Footer start -->
<?php include('include/footer.php');?>
