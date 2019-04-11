<?php
$conn=mysqli_connect("localhost","root","","transfer")or die(mysqli_error($conn));
$id=$_GET['id'];
$select_query=mysqli_query($conn,"select * from admin where id=$id")or die(mysqli_error($conn));
foreach ($select_query as $record){
    $id=$record['id'];
    $name=$record['name'];
    $date=$record['date'];
    $former=$record['former department'];
    $current=$record['current department'];
}
echo $name;
?>

<html>
     <head>
         <title>UPDATE</title>
              <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
              <script type="text/javascript" src="bootstrap/js/bootstrap.js"> </script>
     </head>
     
        <body>
            <div class="container">
                <form  method="POST" action="update.php">
                
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <input type="text" class="form-control" value="<?php echo $id;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" value="<?php echo $name;?>"  >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label >Date</label>
                                                <input type="date" class="form-control" value="<?php echo $date;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Former department</label>
                                                <input type="text" class="form-control" value="<?php echo $former;?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Current department</label>
                                                <input type="text" class="form-control" value="<?php echo $current;?>">
                                            </div>
                                        </div>
                                    </div>

                                    

                                    
                                    

                                    
                                    <div class="clearfix"></div>
                                </form>
                            </div>

                   

                    <div class="form-group">
                        <input type="submit" name="submit" value="UPDATE">
                    </div>
                </form>
            </div>
        </body>
</html>