<?php
require_once('../connection.php');
$query1 = "SELECT * FROM sub_reg where usn = '$user'";
$result = mysqli_query($con, $query1);
$rr = mysqli_num_rows($result);
if (!$rr) {
    echo "<h2 style='color:red;color:#ff0000;font-family:Acme;'>You have Registered For Exam Yet.!</h2>";
} else {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admission Ticket</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css" />
        <script src="~/scripts/jquery-1.10.2.js"></script>

        <!-- #region datatables files -->
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <!-- #endregion -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" />
    </head>
    <style type="text/css">
        .mh1 {
            font-family: 'Bitter';
            margin-top: 2%;
            margin-bottom: 5%;
            font-size: 40px;
            margin-bottom: auto;
            text-decoration: underline;
            text-decoration-color: rgb(2, 66, 85);
            text-decoration-style: dashed;
            text-align: center;
            text-shadow: 1px 1px 2px rgba(252, 164, 133, 0.6);
        }
    </style>

    <body>
        <h1 class="mh1">Subjects Registered</h1>
        <div class="container" style="margin-top: 5%;">
            <table id="example" class="table responsive table-striped table-bordered table-hover">
                <thead>
                    <tr class="center" style="color:black;font-size:22px;text-align:center;font-family: 'PT serif';">
                        <th>Sl No.</th>
                        <th>Subject Name</th>
                        <th>Subject Code</th>
                        <th>Credits</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr style=text-align:center;font-family:Bitter;font-size: 18px;>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $row['sub_name'] . "</td>";
                    echo "<td>" . $row['sub_code'] . "</td>";
                    echo "<td>" . $row['credits'] . "</td>";
                    echo "</tr>";
                    $i++;
                }
            }
                ?>
                </tbody>

            </table>
        </div>

    </body>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#example").DataTable();
        });
    </script>

    </html>