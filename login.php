<?php
session_start();

$conn=mysqli_connect("localhost","root","","transfer")or die(mysqli_error($conn));
 
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $password=$_POST['password'];

    $select_query=mysqli_query($conn,"SELECT * FROM members WHERE name='$name' AND password='$password'")
    or die(mysqli_error($conn));

    $num=mysqli_num_rows($select_query);

    if($num==1){
        foreach($select_query as $record){

            $_SESSION['name']=$record['name'];
            $_SESSION['password']=$record['password'];
            $_SESSION['password']=TRUE;
        }
         echo "<script>window.alert('login successful')</script>";
         header ("refresh:0;url=index.php"); 
    }else{
        echo "<script>window.alert('login failed')</script>";
        header ("refresh:0;url=login.php"); 
    }
}
?>

<html>
    <header>
        <title>ADMIN LOGIN</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    </header>
    <body>
        <div class="container">
            <div class="row" style="height:200px;<?php echo $_SESSION['name'];echo $_SESSION['password'];?>"></div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <form name="login form" action="" method="POST">
                    <h3>login</h3>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="name"><br/><br/>
                            <input type="password" name="password" class="form-control" placeholder="password"><br/><br/>
                            <input type="submit" name="submit" class="btn btn-primary" style="width:300px" value="Submit">
                        </div>
                    </form>

                </div>
                <div class="col-sm-4"></div>


            </div>
        </div>
    </body>

</html>