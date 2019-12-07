<?php include('include/header.php');?>
      
      <script type="text/javascript">

function delet(id)
{
if(confirm("you want to delete ?"))
{
window.location.href='delete_property.php?x='+id;
}
}

</script>
<!-- Header -->

<section>
 
 <!-- Left Sidebar -->
<?php include('include/sidebar.php');?>
  <!-- #END# Left Sidebar -->
  <section class="content">
              <div class="row clearfix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="card">
                  <div class="header">
                      <!-- <a class="btn btn-info" href="add_property.php">Add Property</a> -->
                      <h2 style="text-align: center;">
                       Comments
                      </h2>
                  </div>
                  <div class="body">
                      <div class="table-responsive">
                          <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                              <thead>
                                 <tr>
                                      <th>SL No</th>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Message</th>
                                      <th>Date</th>
                                      <th>Property</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                          
                              <tbody>
                                  <?php
                                  $i=1;
include'include/config.php';

$query=mysqli_query($con,"select * from comments");
while($res=mysqli_fetch_array($query))
{
?>

                                  <tr>
                                      <td><?php echo $i++; ?></td>
                                      <td><?php echo $res['Name'];?></td>
                                      <td><?php echo $res['Email'];?></td>
                                      <td><?php echo $res['Comment'];?></td>
                                      <td><?php echo $res['Date'];?></td>
                                      <td><a href="../property-single.php?id=<?php echo $res['PropertyId']?>"><?php echo $res['PropertyId'];?></a></td>
                                       <td>
                                       <a class='btn btn-info' href="mailto:<?php echo $res['Email']?>?Subject=On behalf of your query" target="_top"><span class="glyphicon glyphicon-envelope" style="color:white;"></span></a>


<!-- <a class='btn btn-success' href="dashboard.php?page=c_info&id=<?php echo $id;?>"><span class="fa fa-eye"></span></a>-->

</td>
                                  </tr>
                             <?php } ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</section>
      <?php include'include/footer.php';?>


                          