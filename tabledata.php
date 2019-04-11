<?php
//include();
$conn=mysqli_connect("localhost","root","","transfer")or die(mysqli_error($conn));
$db_records=mysqli_query($conn,"select * from admin")or die(mysqli_error($conn));
?>

<html>
<head>
<title>database records</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"> </script>
   
</head>
<body>
    <div class="container">
        <div class="row" style="height:100px"></div>
            
        <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <table class="table table-bordered">
                <thead>
                        
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">date</th>
                    <th scope="col">former department</th>
                    <th scope="col">current department</th>
                    
                    
                </tr>
                </thead>
                <tbody>
                    <?php foreach($db_records as $record){?>
                    <tr>
                        <td><?php echo $record['id'];?></td>
                        <td><?php echo $record['name'];?></td>
                        <td><?php echo $record['date'];?></td>
                        <td><?php echo $record['former department'];?></td>
                        <td><?php echo $record['current department'];?></td>
                        <td>
                        <a href="view_members.php?id=<?php echo $record['id'];?>"class="btn btn-primary">view</a>
                        <a href="update.php?id=<?php echo $record['id'];?>"class="btn btn-info">update</a>
                        <a href="delete.php?id=<?php echo $record['id'];?>"class="btn btn-danger">delete</a>
                        </td>
                    </tr> 
                    <?php }?>
                </tbody>
            </table>
    </div>
              
</body>

</html>

<?php
            if(isset($_POST['submit'])){
                $id=$record['id'];
                $name=$record['name'];
                $date=$record['date'];
                $former=$record['former department'];
                $current=$record['current department'];
                $update_query=mysqli_query($conn,"update admin set name='$name',date='$date',former department='$former',current department='$current ', where id='$id'")or die(mysqli_error($conn));
                if($update_query){
                    ?>
                     <script>
                            window.alert('success');
                            window.location.href='tabledata.php';
                     </script>
                    <?php
                    //echo "<script>window.alert('Update Success')</script>";
                    
                    //header("refresh:0;url=table_data.php");
                }else{
                    echo"<script>window.alert('failed)</script>";
                    header("refresh:0;url=tabledata.php");
                }

            }

        ?>