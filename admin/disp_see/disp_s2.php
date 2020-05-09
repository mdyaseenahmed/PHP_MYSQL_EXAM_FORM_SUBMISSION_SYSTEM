<?php
    require_once('../connection.php');
    $query1 = "SELECT * FROM add_s2";
    $result = mysqli_query($con,$query1);
    $rr=mysqli_num_rows($result);
    if(!$rr)
    {
    echo "<h2 style='color:red;color:#ff0000;font-family:Acme;'>No Subjects Listed/Added Yet.</h2>";
    }
    else
    {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Manage Users</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
    <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
    <script src="js/jquery.js"></script>
    <script lang="js/javascript" src="xlsx.full.min.js"></script>
    <script lang="js/javascript" src="FileSaver.min.js"></script>
    <script>
        function DeleteUser(id)
        {
            if(confirm("Are You Sure..? You Want To Delete this Subject...?"))
            {
                window.location.href="delete_s2.php?id="+id;
            }
        }
    </script>
    <style type = "text/css">
        @import url('https://fonts.googleapis.com/css?family=Acme|Bree+Serif|Patrick+Hand|Volkhov|Handlee|PT+Serif|Numans|Bitter|Odibee+Sans|Simonetta|Trade+Winds&display=swap');

        .mcon{
            font-family:'Acme';
            
        }
       
        
        .mtab{
            font-family:'Acme';
        }

        .mybtn{
            background-color: #999999;
            border: 1px solid black;
            color: black;
        }

        .mybtn:hover{
            width: 20%;
            background-color: #888;
            cursor: pointer;
            border:3px solid black;
            color: black;
        }

        table th{
            text-align: center;
        }
        </style>
    </head>
<body>
    <img id="head" width="500px" style = "font-family:'PT Serif';" left:10 align='left' src = "../css/images/bmsheader.jpeg">
    <br /><br /><br /><br /><br /><br />
    <h2 style="color:#ff0000;font-family:'Acme';" class = "page-header">2nd Sem Subjects</h2>
    
    <div class = "col-lg-10 mcon text-center">
        <table id="myTable" width = "100%" class="mtab table table-bordered table-hover table-responsive">
    	    <tr align = 'center' style = "background-color:rgba(128,0,128,0.3);color:black;font-size:25px;font-family: 'PT serif';" class="table-info">
                <th style='border:2px solid black'>SL.No</th>
                <th style='border:2px solid black'>Subject Name</th>
                <th style='border:2px solid black'>Subject Code</th>
                <th style='border:2px solid black'>Credits</th>
                <th style='border:2px solid black'>Update</th>
                <th style='border:2px solid black'>Delete</th>
            </tr>
            <?php
                $i=1;
                while($row = mysqli_fetch_array($result)) 
                    {
                        echo "<tr style='color:black;border-bottom:2px solid black;font-size:18px;border-right:2px solid black;border-top:2px solid black;border-left:2px solid black;'>";
                        echo "<td style='border:2px solid black' align = 'center'>".$i."</td>";
                        echo "<td style='border:2px solid black' align = 'center'>".$row['sub_name']."</td>";
                        echo "<td style='border:2px solid black' align = 'center'>".$row['sub_code']."</td>";
                        echo "<td style='border:2px solid black' align = 'center'>".$row['credits']."</td>";
            ?>
                        <td align = 'center' style='border:2px solid black'> <a href="update_s2.php?id=<?php echo $row['id']; ?>" style='color:green'><i class = "fas fa-pencil-alt"></i></a> </td>
                        <td align = 'center' style='border:2px solid black'> <a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:red'><i class = "fas fa-trash"></i></a> </td>
            <?php
                echo "<tr />";
                $i++;
                }
            ?> 
            <?php
                }
            ?>  
        </table>
    </div>
    <script type = "text/javascript">
        $(document).ready( function () {
        $('#myTable').DataTable();
        } );
    </script>    
</body>
</html>