

<?php
    if(isset($_POST['name']))
{
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);


    if(!$con){
        die("Connection to the database error due to". mysqli_connect_error());
    }
    
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $other=$_POST['other'];


    $sql="INSERT INTO `travel`.`details`( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
    if ($con->query($sql)==true){
        echo '<div class="alert alert-success" role="alert">
        Successfully Inserted
      </div>';
    }
    else{
        echo "Error:$sql <br/> $con->error";
    }



    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
    <div class ="container">
        <h1>Welcome to Travel Form</h1>
        <p>Enter your details and submit this form to confirm your participation</p>


        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Name:">
            <input type="text" name="age" id="age" placeholder="Age:">
            <input type="text" name="gender" id="gender" placeholder="Gender:">
            <input type="email" name="email" id="email" placeholder="Email:">
            <input type="phone" name="phone" id="phone" placeholder="Phone:">
            <textarea name="other" id="desc" cols="30" rows="10" placeholder="Enter any text"></textarea>
            <button class="btn btn-outline-dark">Submit</button>
            <button class="btn btn-outline-dark">Reset</button>



        </form>

    </div>
    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>