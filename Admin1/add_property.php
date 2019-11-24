<?php 
   include('include/header.php');
extract($_REQUEST);
include'include/config.php';
if(isset($submit))
{

$file=$_FILES['file']['name'];
  $status = '';
  $query="insert into properties values('','$Location','$title','$property_type','$status','$area','$bedroom','$bathroom','$garage','$price','$description','$add','$video','$location','$file')";  
  $r=mysqli_query($con,$query);

  move_uploaded_file($_FILES['file']['tmp_name'],"images/property_image/".$_FILES['file']['name']); 

if($r)
{
  $msg='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Property Data Add successful.
  </div>';    
}
else
{
$msg='<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Property Data Add Not successful.
  </div>';

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
                                Add Property
                                
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
                                                <input required type="text" name="title" class="form-control">
                                                <label class="form-label">Title</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <!-- <input required type="text" name="Location" class="form-control"> -->
                                                <select class="form-control form-control-lg form-control-a" id="city" name="Location">
                                                    <!-- <option>All City</option> -->
                                                    <option>Dhaka</option>
                                                    <option>Chittagong</option>
                                                    <option>Sylhet</option>
                                                    <option>Rajshahi</option>
                                                    <option>Khulna</option>
                                                    <option>Barisal</option>
                                                    <option>Rangpur</option>
                                                </select>
                                                <label class="form-label">Property Location</label>
                                            </div>
                                        </div>
                                    </div>
                              

                                    <!-- <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="status" class="form-control">
                                                <label class="form-label">Status</label>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <!-- <input required type="text" name="property_type" class="form-control"> -->
                                                <select class="form-control form-control-lg form-control-a" id="Type" name="property_type">
                                                    <!-- <option>All Type</option> -->
                                                    <option>For Rent</option>
                                                    <option>For Sale</option>
                                                    <option>Open House</option>
                                                </select>
                                                <label class="form-label">Property Type</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="area" class="form-control">
                                                <label class="form-label">Area</label>
                                            </div>
                                        </div>
                                     </div>

                              
                                     

                                    
                                    
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="price" class="form-control">
                                                <label class="form-label">Price</label>
                                            </div>
                                        </div>
                                    </div>

                                  <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <textarea required name="description" class="form-control"></textarea>
                                                <label class="form-label">Description</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="add" value="" class="form-control">
                                                <label class="form-label">Address</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" required name="video">
                                                <label class="form-label">Add Video Link</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" required name="location">
                                                <label class="form-label">Add Location Link</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                
                                <div class="custom-file">
                                    <label class="form-label">Add Property Image</label>
                                    <input required name="file"  type="file" multiple />
                                    
                                </div>
                           
                                            
                               </div>

                                <div class="header col-lg-12 col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
                                                 
                               <h4 style="text-align: center;">Condition</h4>
                                                                                     
                                </div>



                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="bedroom" class="form-control">
                                                <label class="form-label">Bedroom</label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="bathroom" class="form-control">
                                                <label class="form-label">Bathroom</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="garage" class="form-control">
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