 <?php
include_once('connection.php');
if(isset($_POST['ok']))
{
    $employeename=$_POST['emname'];
    $designation=$_POST['dsgn'];
    $joiningdate=$_POST['jgdate'];
    $addres=$_POST['adress'];
    $contactnumber=$_POST['cno'];

    $email=$_POST['email'];

    $sql="INSERT INTO employee(emname,dsgn,jgdate,adress,cno,email)VALUES('$employeename','$designation','$joiningdate','$addres','$contactnumber','$email')";

    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
   

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <table align="center">
            
            <tr>
                <td>Employee Name</td>
                    <td><input type="text" name="emname" value="">
                </td>
            </tr>
            <tr>
                <td>Designation</td>
                    <td><select name="dsgn">
                        <option value="">select</option>
                            <option>software developer</option>
                            <option>Test analyst</option>
                            <option>IT analyst</option>
                            <option>database administraton</option>
                </td>
            </tr>
            <tr>
                <td>Joining Date</td>
                    <td><input type="date" name="jgdate" value="">
                </td>
            </tr>
            <tr>
                <td>Address</td>
                    <td><input type="text" name="adress" value="">
                </td>
            </tr>
            <tr>
                <td>contact Number</td>
                    <td><input type="text" name="cno" value="">
                </td>
            </tr>
            <tr>
                <td>Email </td>
                <td><input type="text" name="email" value="">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="ok" value="" >submit</button>
                </td>
            </tr>
</form>

</table>
</body>
</html>