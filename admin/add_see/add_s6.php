<?php
require_once('../connection.php');
extract($_POST);
if (isset($Add)) {
    $sql = "INSERT INTO add_s6 VALUES ('','$sname','$scode','$credit')";
    $exec = mysqli_query($con, $sql);
    if ($exec) {
        $err = "<font color='green'>Subject Added Successfully..!</font>";
    } else {
        $err = "<font color='red'>Error In Adding Subjects</fonts>";
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
    <title>Add Subject | 6th Sem</title>
</head>

<body>
    <h1 class="mh1" style="color:black;">Add Subject To 6th Semester</h1>
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
                        <input type="text" name="sname" autocomplete="off" placeholder="Subject Name" class="required" required />
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
                        <input type="text" name="scode" autocomplete="off" placeholder="Subject Code" required />
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
                        <select name="credit" class="select1" placeholder="" required>
                            <option name="s1"> 0 </option>
                            <option name="s2"> 1 </option>
                            <option name="s3"> 2 </option>
                            <option name="s4"> 3 </option>
                            <option name="s5" selected> 4 </option>
                        </select>
                    </td>
                </tr>

            </table>
            <input type="submit" value="Add Subject" name="Add" class="login_btn" value="Submit" />
            <input type="reset" class="reset_btn" value="Reset" onClick="window.location.href=window.location.href" />
        </form>
    </div>

</body>

</html>