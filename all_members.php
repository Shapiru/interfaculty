<?php
//include(all_members.php);
$conn=mysqli_connect("localhost","root","","transfer")or die(mysqli_error($conn));
$db_records=mysqli_query($conn,"select * from admin")or die(mysqli_error($conn));
?>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
              <script type="text/javascript" src="bootstrap/js/bootstrap.js"> </script>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">ALL MEMBERS</h4>
                                <p class="category">Here is a list of the members</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Date</th>
                                    	<th>Former department</th>
										<th>Current department</th>
                                    </thead>
                                    <tbody>
									<?php foreach($db_records as $record){?>
										<tr>
											<td><?php echo $record['id'];?></td>
											<td><?php echo $record['name'];?></td>
											<td><?php echo $record['date'];?></td>
											<td><?php echo $record['former department'];?></td>
											<td><?php echo $record['current department'];?></td>
											
									    </tr>  
									<?php }?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>