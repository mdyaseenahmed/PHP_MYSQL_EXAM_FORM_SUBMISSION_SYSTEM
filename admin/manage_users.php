<?php
    require_once('../connection.php');
    $query1 = "SELECT * FROM registration";
    $result = mysqli_query($con,$query1);
    $rr=mysqli_num_rows($result);
    if(!$rr)
    {
    echo "<h2 style='color:red;color:#ff0000;font-family:Acme;position:relative;top:35px;left:30%;''>No Students Have Registered For Exams Yet.</h2>";
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
    <script src="jquery.js"></script>
    <script lang="javascript" src="xlsx.full.min.js"></script>
    <script lang="javascript" src="FileSaver.min.js"></script>
    <script>
        function DeleteUser(id)
        {
            if(confirm("Are You Sure..? You Want To Delete this User...?"))
            {
                window.location.href="delete_user.php?id="+id;
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
            margin-top: 0%;
        }

        .mybtn{
            background-color: rgba(127,0,128,0.2);
            border: 2px solid black;
            border-radius: 5px;
            color: black;
        }

        .mybtn:hover{
            width: 15%;
            background-color: rgba(0,128,128,0.9);
            cursor: pointer;
            border:3px solid black;
            color: white;
        }
        table th{
            text-align: center;
        }
        </style>
    </head>
<body>
    <img id="head" width="500px" style = "font-family:'PT Serif';" left:10 align='left' src = "../css/images/bmsheader.jpeg">
    <br /><br /><br /><br /><br /><br />
    <h2 style="color:#ff0000;font-family:'Acme';" class = "page-header"><u>Students Registered For Semester End Examination :</u></h2>
    
    <div class = "col-lg-12 mcon text-center">
        <table id="mytab1" width = "100%" class="mtab table table-bordered table-hover table-responsive" style = "margin-top:0;">
    	    <tr align = 'center' class = "text-center" style = "background-color:rgba(0,128,128,0.3);color:black;font-size:25px;text-align:center;font-family: 'PT serif';" class="table-info">
                <th style='border:2px solid black'>SL.No</th>
                <th style='border:2px solid black'>Name</th>
                <th style='border:2px solid black'>USN</th>
                <th style='border:2px solid black'>Semester</th>
                <th style='border:2px solid black'>Mail - Id</th>
                <th style='border:2px solid black'>Phone</th>
                <th style='border:2px solid black'>Delete</th>
		    </tr>
            <?php
                $i=1;
                while($row = mysqli_fetch_array($result)) 
                    {
                        echo "<tr style='color:black;border-bottom:2px solid black;font-size:18px;border-right:2px solid black;border-top:2px solid black;border-left:2px solid black;'>";
                        echo "<td style='border:2px solid black' align = 'center'>".$i."</td>";
                        echo "<td style='border:2px solid black' align = 'center'>".$row['fname'].' '.$row['lname']."</td>";
                        echo "<td style='border:2px solid black' align = 'center'>".$row['usn']."</td>";
                        echo "<td style='border:2px solid black' align = 'center'>".$row['sem']."</td>";
                        echo "<td style='border:2px solid black' align = 'center'>".$row['email']."</td>";
                        echo "<td style='border:2px solid black' align = 'center'>".$row['phno']."</td>";
            ?>
                
                        <td align = 'center' style='border:2px solid black'> <a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:red'><i class = "fa fa-trash"></i></a> </td>
            <?php
                echo "<tr />";
                $i++;
                
                }
            ?> 
            
            <?php
                }
            ?>  
        </table>
        <button id = "mbtn-a" class = "mybtn" style = "padding:5px;font-size:20px;">Create Excel</button>
    </div>
<script>
        var wb = XLSX.utils.table_to_book(document.getElementById('mytab1'), {sheet:"Sheet JS"});
        var wbout = XLSX.write(wb, {bookType:'xlsx', bookSST:true, type: 'binary'});
        function s2ab(s) {
                        var buf = new ArrayBuffer(s.length);
                        var view = new Uint8Array(buf);
                        for (var i=0; i<s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
                        return buf;
        }
        $("#mbtn-a").click(function(){
        saveAs(new Blob([s2ab(wbout)],{type:"application/octet-stream"}), 'Sem_End.xlsx');
        });
</script>
</script>

</body>
</html>