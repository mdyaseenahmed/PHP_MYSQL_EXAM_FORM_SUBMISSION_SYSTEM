<?php
error_reporting(0);
require_once('../connection.php');
$checkbox1 = $_POST['sub'];
for ($i = 0; $i < sizeof($checkbox1); $i++) {
  $query = "SELECT sub_code, credits  from add_s1 where sub_name = '$checkbox1[$i]'";
  $q1 = mysqli_query($con, $query);
  while ($row = mysqli_fetch_assoc($q1)) {
    $code = $row['sub_code'];
    $cred = $row['credits'];
    $query1 = "INSERT INTO sub_reg (usn, sub_name, sub_code, credits) VALUES ('$user','$checkbox1[$i]','$code','$cred')";
    $res1 = mysqli_query($con, $query1) or die("Error : " . mysqli_error($con));
    if ($res1) {
      $exec1 = "<font color='primary'>Your Response Has Been Recorded.!</font>";
    } else {
      $exec1 = "<font color='red';font-family:'Acme';>Error in Registration.!</font>";
    }
  }
}


?>


<?php
require_once('../connection.php');
$user = $_SESSION['user'];
$q = mysqli_query($con, "SELECT * FROM add_s1");
$rr = mysqli_num_rows($q);
if (!$rr) {
  echo "<h2 style='color:red;color:#ff0000;font-family:Acme;'>No Subjects Listed/Added Yet.</h2>";
} else {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../scroll.js"></script>
    <style type="text/css">
      .back-to-top {
        position: fixed;
        bottom: 25px;
        right: 25px;
        display: none;
      }

      @import url('https://fonts.googleapis.com/css?family=Acme|Handlee|Bitter|Odibee+Sans|Simonetta|Trade+Winds&display=swap');



      .mylink a:hover {
        text-decoration: none;
        color: white;
      }



      .forms {
        width: fit-content;
        height: fit-content;
        margin-left: auto;
        margin-right: auto;
        display: block;
        box-shadow: -2px -2px 9px rgba(0, 0, 0, 0.5),
          5px 5px 9px rgba(0, 0, 0, 0.5);
        padding: 0;
        border: 1px solid silver;
        border-radius: 3px;
        background-color: rgb(82, 66, 85, 0.2);
        justify-content: flex-start;
      }

      .myform {
        padding: 20px;
        border-radius: 8px;

      }

      table th {
        text-align: center;
        padding: 8px;
        color: rgb(4, 71, 32);
        font-family: 'Bitter';
        text-transform: capitalize;
        text-shadow: rgb(240, 240, 12);
        font-size: 26px;
      }

      table td {
        text-align: center;
        padding: 5px;
        font-size: 22px;
        color: black;
        font-family: 'Bitter';
      }

      .myh1 {
        text-align: center;
        font-size: 30px;
        text-decoration: none;
        padding-bottom: 15px;
        text-shadow: rgba(0, 0, 0, 0.1);
        font-family: 'PT Serif';
        font-weight: bold;
      }

      .geekmark {
        height: 20px;
        width: 20px;
        background-color: green;
      }

      body {
        background-color: whitesmoke;
      }
    </style>
    <title>CSE | 1st Sem</title>
  </head>

  <body>
    <h1 class="myh1">1st Semester Computer Science & Engineering Subjects</h1>
    <div class="forms">

      <form class="myform" method="POST">
        <table width="100%">
          <tr>
            <th> Select</th>
            <th> Subject name</th>
            <th> Subject Code</th>
            <th> Credits </th>
          </tr>
          <?php

          ?>
          <?php

          while ($row = mysqli_fetch_array($q)) {
            echo "<tr style='color:black;font-size:18px;'>";
            echo "<td> <input type='checkbox' class='geekmark' value = ' . $row[id] . ' /></td>";
            echo "<td align = 'center'>" . $row['sub_name'] . "</td>";
            echo "<td align = 'center'>" . $row['sub_code'] . "</td>";
            echo "<td align = 'center'>" . $row['credits'] . "</td>"; ?>

        <?php }
        }

        ?>
        <tr>
          <td colspan="2"> <input class="btn login_btn" type="submit" name="Submit" value="Submit" /> </td>
          <td colspan="2"> <input class="btn reset_btn" type="reset" value="Reset"></td>
        </tr>
        </table>
      </form>
    </div>
  </body>

  </html>