<?php
require_once('../connection.php');
$query = mysqli_query($con, "SELECT * from registration WHERE usn = '$user'");
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="update.css">
</head>

<body>
    <?php
    extract($_POST);
    if (isset($Update)) {
        $q = "UPDATE registration set fname = '$fname',lname = '$lname',bdate = '$dob',phno = '$phone' where usn = '$user'";
        $run = mysqli_query($con, $q);
        if ($run) {
            $err = "<font color='green' align='center'>Profile Updated Successfully...!</font>";
        } else {
            $err = "<font color='red' align='center'>Error in Updating Profile.!</font>";
        }
    }
    ?>
    <div class=" mcontainer">
        <form name="register" method="post" class="myform" action="" enctype="multipart/form-data">
            <h1 class="tit">Update Your Profile</h1>
            <?php echo @$err; ?>
            <hr>
            <table width="100%">
                <tr>
                    <td>
                        <label class="required">First Name</label>
                    </td>

                    <td>

                    </td>

                    <td class="td1">
                        <input type="text" autocomplete="off" name="fname" placeholder="First Name" class="required" value="<?php echo $row['fname']; ?>" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="required">Last Name</label>
                    </td>

                    <td>

                    </td>

                    <td class="td1">
                        <input type="text" name="lname" autocomplete="off" placeholder="Last Name" required value="<?php echo $row['lname']; ?>" />
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Birth Date</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="date" name="dob" autocomplete="off" placeholder="YYYY/MM/DD" value="<?php echo $row['bdate']; ?>" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="required">USN</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="text" name="USN" autocomplete="off" placeholder="1BM19CS000" readonly value="<?php echo $row['usn']; ?>" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="required">Email</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="email" name="mail" autocomplete="off" placeholder="student.cs19@bmsce.ac.in" readonly value="<?php echo $row['email']; ?>" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Phone</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="phone" autocomplete="off" name="phone" id="phone" placeholder="9998887776" value="<?php echo $row['phno']; ?>" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="required">Department</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="text" name="dept" readonly value="<?php echo $row['dept']; ?>" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="required">Semester</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="text" name="sem" value="<?php echo $row['sem']; ?>" readonly />
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="Update" class="login_btn" value="Update" />
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="reset" onClick="window.location.href=window.location.href" class="reset_btn" value="Reset" />
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>