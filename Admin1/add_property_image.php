<?php 
include('include/header.php');
extract($_REQUEST);
include'include/config.php';
if(isset($submit))
{

  $file=rand(1,100).$property_id."-".$_FILES['file']['name'];
  $file1=rand(101,200).$property_id."-".$_FILES['file1']['name'];
  $file2=rand(201,300).$property_id."-".$_FILES['file2']['name'];
  $file3=rand(301,400).$property_id."-".$_FILES['file3']['name'];
  
  $query="insert into Documents values('','$file','$file1','$file2','$file3','$property_id')";  
    print_r($query);
  mysqli_query($con,$query);
  move_uploaded_file($_FILES['file']['tmp_name'],"images/property_image/".$file); 
  move_uploaded_file($_FILES['file1']['tmp_name'],"images/property_image/".$file1); 
  move_uploaded_file($_FILES['file2']['tmp_name'],"images/property_image/".$file2); 
  move_uploaded_file($_FILES['file3']['tmp_name'],"images/property_image/".$file3); 

   $msg='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Image Upload  successfuly.
  </div>';       
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

                                    <div class="col-lg-12 col-md-3 col-sm-3 col-xs-6">
                                        <select class="form-control form-control-lg form-control-a" name="property_id">
                                            <option disabled selected>--Select Room Title--</option>
                                            <?php
                                            $sel=mysqli_query($con,"select * from Properties");
                                            while($res=mysqli_fetch_array($sel))
                                            {
                                            ?>

                                            <option value="<?php echo $res['PropertyId'];?>"><?php echo $res['Title'];?></option>  
                                           
                                           <?php  }  ?>

                                        </select>  


                             
                                    </div>


                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                      <div class="dz-message">
                                   
                                    <h3>Click to Image upload.</h3>
                                    
                                </div>
                                <div>
                                    <input required name="file" type="file" multiple />
                                </div>
                             
                             </div>


                             <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                      <div class="dz-message">
                                   
                                    <h3>Click to Image upload.</h3>
                                    
                                </div>
                                <div>
                                    <input required name="file1" type="file" multiple />
                                </div>
                             
                             </div>

                             <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                      <div class="dz-message">
                                   
                                    <h3>Click to Image upload.</h3>
                                    
                                </div>
                                <div>
                                    <input required name="file2" type="file" multiple />
                                </div>
                             
                             </div>


                             <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                      <div class="dz-message">
                                   
                                    <h3>Click to Image upload.</h3>
                                    
                                </div>
                                <div>
                                    <input required name="file3" type="file" multiple />
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
            <!-- Select Plugin Js -->
 
