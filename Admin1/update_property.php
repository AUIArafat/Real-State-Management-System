<?php 
include('include/header.php');
include'include/config.php';
extract($_REQUEST);

$id=$_REQUEST['id'];

$query=mysqli_query($con,"select * from properties where PropertyId='$id'");
$res=mysqli_fetch_array($query);

$id=$res['PropertyId'];
$img=$res['PropertyImg'];



if(isset($submit))
{

  $file=$_FILES['file']['name'];

  if($file=="")
  {

  $query="update properties set Location='$Location',Title='$title',PropertyType='$property_type',Status='$status',Area='$land_area',Beds='$bedroom',Baths='$bathroom',Garage='$garage',Price=$price,PropertyDescription='$description', address='$add',VideoLink='$video',locationLink='$location' where PropertyId='$id'";
      
  mysqli_query($con,$query); 

  $msg='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Property Data Update successful.
  </div>';
    echo"<script>window.location.href='view_property.php';</script>";
  }
  else
  {
  $status='';
  $query="update properties set Location='$Location',Title='$title',PropertyType='$property_type',Status='$status',Area='$land_area',Beds='$bedroom',Baths='$bathroom',Garage='$garage',Price=$price,PropertyDescription='$description', address='$add',VideoLink='$video',locationLink='$location',PropertyImg='$file' where PropertyId='$id'";
  mysqli_query($con,$query);
  unlink("images/property_image/$img");

  move_uploaded_file($_FILES['file']['tmp_name'],"images/property_image/".$_FILES['file']['name']); 


   $msg='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Property Data Update successful.
  </div>'.$query;

echo"<script>window.location.href='view_property.php';</script>";

   }          
}

         ?>        

    <!-- Header -->
    
    <section>
       
       <!-- Left Sidebar -->
<?php include('include/sidebar.php');?>
        <!-- #END# Left Sidebar -->
        <section class="content">
        <div class="container-fluid">
            <?php echo @$msg;?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="text-align: center;">
                                Update Property
                                
                            </h2>
                            <!-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                        <div class="body">
                            <form method="post" enctype="multipart/form-data">
                                <div class="row clearfix">

                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="title" value="<?php echo $res['Title'];?>" class="form-control">
                                                <label class="form-label">Title</label>
                                            </div>
                                        </div>
                                    </div>

                                   <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <!-- <input required type="text" name="Location" value="" class="form-control"> -->
                                                <select class="form-control form-control-lg form-control-a" id="city" name="Location">
                                                    <option <?php if($res['Location']=="Dhaka") echo 'selected="selected"'; ?> >Dhaka</option>
                                                    <option <?php if($res['Location']=="Chittagong") echo 'selected="selected"'; ?> >Chittagong</option>
                                                    <option <?php if($res['Location']=="Sylhet") echo 'selected="selected"'; ?> >Sylhet</option>
                                                    <option <?php if($res['Location']=="Rajshahi") echo 'selected="selected"'; ?> >Rajshahi</option>
                                                    <option <?php if($res['Location']=="Khulna") echo 'selected="selected"'; ?> >Khulna</option>
                                                    <option <?php if($res['Location']=="Barisal") echo 'selected="selected"'; ?> >Barisal</option>
                                                    <option <?php if($res['Location']=="Rangpur") echo 'selected="selected"'; ?> >Rangpur</option>
                                                </select>
                                                <label class="form-label">Location</label>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="Status" value="<?php echo $res['Status'];?>" class="form-control">
                                                <label class="form-label">Status</label>
                                            </div>
                                        </div>
                                     </div> -->

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <!-- <input required type="text" name="property_type" value="" class="form-control"> -->
                                                <select class="form-control form-control-lg form-control-a" id="Type" name="property_type">
                                                    <option  <?php if($res['PropertyType']=="For Rent") echo 'selected="selected"'; ?> >For Rent</option>
                                                    <option  <?php if($res['PropertyType']=="For Sale") echo 'selected="selected"'; ?> >For Sale</option>
                                                    <option  <?php if($res['PropertyType']=="Open House") echo 'selected="selected"'; ?> >Open House</option>
                                                </select>
                                                <label class="form-label">Property Type</label>
                                            </div>
                                        </div>
                                    </div>

                                
                                     

                                     <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="land_area" value="<?php echo $res['Area'];?>" class="form-control">
                                                <label class="form-label">Area</label>
                                            </div>
                                        </div>
                                     </div>
                                    
                                    
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="price" value="<?php echo $res['Price'];?>" class="form-control">
                                                <label class="form-label">Price</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <textarea required name="description" class="form-control"><?php echo $res['PropertyDescription'];?></textarea>
                                                <label class="form-label">Description</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="add" value="<?php echo $res['Address'];?>" class="form-control">
                                                <label class="form-label">Address</label>
                                            </div>
                                        </div>
                                    </div>
                            



                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value='<?php echo $res['VideoLink'];?>' required name="video">
                                                <label class="form-label">Add Video Link</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value='<?php echo $res['LocationLink'];?>' required name="location">
                                                <label class="form-label">Add Location Link</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">                                       
                                     <div class="custom-file">
                                    <label class="form-label">Add Property Image</label>
                                    <input  name="file"  type="file" multiple />                                   
                                     </div>                                            
                                      </div>

                                      <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">                                       
                                     <div class="custom-file">
                                    <label class="form-label">Property Image</label>
                                    <img src="images/property_image/<?php echo $img;?>" width="200">                              
                                     </div>                                            
                                      </div>

                                <div class="header col-lg-12 col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
                                                 
                               <h4 style="text-align: center;">Condition</h4>
                                                                                     
                                </div>




                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="bedroom" value="<?php echo $res['Beds'];?>" class="form-control">
                                                <label class="form-label">Bedroom</label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="bathroom" value="<?php echo $res['Baths'];?>" class="form-control">
                                                <label class="form-label">Bathroom</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="garage" value="<?php echo $res['Garage'];?>" class="form-control">
                                                <label class="form-label">Garage</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
                             
                                     
                                        <input type="submit" name="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            <?php include'include/footer.php';?>