<?php
require_once('../connection.php');
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * from add_s1 WHERE id = '$id'");
$row = mysqli_fetch_assoc($query);
?>

<?php
extract($_POST);
if (isset($Update)) {
    $q = "UPDATE add_s1 set sub_name = '$sname',sub_code = '$scode',credits = '$credits' where id = '$id'";
    $run = mysqli_query($con, $q);
    if ($run) {
        $err = "<font color='green' align='center'>Subject Updated Successfully...!</font>";
        header('location:dashboard.php?page=disp_s1');
    } else {
        $err = "<font color='red' align='center'>Error in Updating Subject.!</font>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Scroll Up js File -->
    <script src="../scroll.js"></script>

    <!--Custom Favicon -->
    <link rel="icon" type="image/png" sizes="64x64" href="../css/images/logo.png">

    <!--Custom CSS StyleSheet -->
    <link rel="stylesheet" type="text/css" href="Admin_Styles.css">

    <title>Update/Edit Subject | 1st Sem</title>
</head>

<body>
    <h1 class="mh1" style="color:black;">Update/Edit 1st Semester Subject</h1>
    <div class="forms">
        <form class="myform" method="post">
            <p style="font-family:'Bitter';font-size:20px;text-align:center;"><?php echo @$err; ?></p>
            <table width="100%">
                <tr>
                    <td>
                        <label class="label required">Subject Name</label>
                    </td>

                    <td>
                        :
                    </td>

                    <td class="td1">
                        <input type="text" name="sname" autocomplete="off" placeholder="Subject Name" class="required" value="<?php echo $row['sub_name'] ?>" required />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Subject Code</label>
                    </td>

                    <td>
                        :
                    </td>

                    <td class="td1">
                        <input type="text" name="scode" autocomplete="off" placeholder="Subject Code" value="<?php echo $row['sub_code'] ?>" required />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Credits</label>
                    </td>
                    <td>
                        :
                    </td>
                    <td class="td1">
                        <select name="credits" class="select1" placeholder="" required value="<?php echo $row['credits'] ?>">
                            <option name="s1"> 0 </option>
                            <option name="s2"> 1 </option>
                            <option name="s3"> 2 </option>
                            <option name="s4"> 3 </option>
                            <option name="s5" selected> 4 </option>
                        </select>
                    </td>
                </tr>

            </table>
            <input type="submit" value="Update Subject" name="Update" class="login_btn" value="Submit" />
            <input type="reset" class="reset_btn" value="Reset" />
        </form>
    </div>

</body>

</html>