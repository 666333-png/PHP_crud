<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="name" name="name" placeholder = "Masukkan Nama"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="email" name="email" placeholder = "Masukkan Email"></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="number" name="mobile" placeholder = "Masukkan Nomor HP"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        
        
        include_once("config.php");
                
        
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
        
        
    }
    ?>
</body>
</html>