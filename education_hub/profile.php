
<?php
 require('db.php');
// Check connection

$username = '';
$email = '';
$password = '';
$sql = "SELECT * FROM users where id=5";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $username = $row['username'];
       $email = $row['email'];
      
    }
} else {
    echo "0 results";
}

$con->close();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-Learning Website</title>
  <style type="text/css">

    h1.login-title {
    color: #666;
    margin: 0px auto 25px;
    font-size: 25px;
    font-weight: 300;
    text-align: center;
}
.login-input {
    font-size: 15px;
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 25px;
    height: 25px;
    width: calc(100% - 23px);
}
.login-input:focus {
    border-color:#6e8095;
    outline: none;
}
.login-button {
    color: #fff;
    background: #55a1ff;
    border: 0;
    outline: 0;
    width: 100%;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
}
body {
    background: #3e4144;
}
.form {
    margin: 50px auto;
    width: 300px;
    padding: 30px 25px;
    background: white;
}
.btm{
     background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 5px;
}
  </style>
</head>
<body>
  <form class="form" action="" method="post">
        <h1 class="login-title">My Profile</h1>
        <label>Username</label>
        <input type="text" class="login-input" name="username" value="<?php echo $username?>"><label>Email-id</label>
        <input type="text" class="login-input" name="email" value="<?php echo $email?>">

       <div>
            <button class="btm"><a href="index.php">Back</a></button>
        </div>

    </form>
 
</body>
</html>