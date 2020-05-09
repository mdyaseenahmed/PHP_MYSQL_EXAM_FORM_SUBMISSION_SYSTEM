<?php
    
    #Count the number of Students Register For Sem End exams.
    $sreg = "SELECT * FROM registration";
    $runsr = mysqli_query($con,$sreg);

    if($runsr){
    
    }
    $count=0;
    while($rowsr=mysqli_fetch_assoc($runsr))
    {
        $count++;
    }

    #Count the number of Students Register For Fastrack exams.
    $fstr = "SELECT * FROM fst_reg";
    $runfstr = mysqli_query($con,$fstr);

    if($runfstr){
    
    }
    $count1=0;
    while($row=mysqli_fetch_assoc($runfstr))
    {
        $count1++;
    }

    #Count the number of subjects added for 1st semester.
    $s1 = "SELECT * FROM add_s1";
    $run1 = mysqli_query($con,$s1);

    if($run1){
    
    }
    $cs1=0;
    while($row1=mysqli_fetch_assoc($run1))
    {
        $cs1++;
    }

    #Count the number of subjects added for 2nd semester.
    $s2 = "SELECT * FROM add_s2";
    $run2 = mysqli_query($con,$s2);

    if($run2){
    
    }
    $cs2=0;
    while($row2=mysqli_fetch_assoc($run2))
    {
        $cs2++;
    }

    #Count the number of subjects added for 3rd semester.
    $s3 = "SELECT * FROM add_s3";
    $run3 = mysqli_query($con,$s3);

    if($run3){
    
    }
    $cs3=0;
    while($row3=mysqli_fetch_assoc($run3))
    {
        $cs3++;
    }

    #Count the number of subjects added for 4th semester.
    $s4 = "SELECT * FROM add_s4";
    $run4 = mysqli_query($con,$s4);

    if($run4){
    
    }
    $cs4=0;
    while($row4=mysqli_fetch_assoc($run4))
    {
        $cs4++;
    }

    #Count the number of subjects added for 5th semester.
    $s5 = "SELECT * FROM add_s5";
    $run5 = mysqli_query($con,$s5);

    if($run5){
    
    }
    $cs5=0;
    while($row5=mysqli_fetch_assoc($run5))
    {
        $cs5++;
    }

    #Count the number of subjects added for 6th semester.
    $s6 = "SELECT * FROM add_s6";
    $run6 = mysqli_query($con,$s6);

    if($run6){
    
    }
    $cs6=0;
    while($row6=mysqli_fetch_assoc($run6))
    {
        $cs6++;
    }

    #Count the number of subjects added for 7th semester.
    $s7 = "SELECT * FROM add_s7";
    $run7 = mysqli_query($con,$s7);

    if($run7){
    
    }
    $cs7=0;
    while($row7=mysqli_fetch_assoc($run7))
    {
        $cs7++;
    }

    #Count the number of subjects added for 8th semester.
    $s8 = "SELECT * FROM add_s8";
    $run8 = mysqli_query($con,$s8);

    if($run8){
    
    }
    $cs8=0;
    while($row=mysqli_fetch_assoc($run8))
    {
        $cs8++;
    }

    #Count the number of subjects added for Fastrack.
    $fst = "SELECT * FROM add_fst";
    $run_fst = mysqli_query($con,$fst);

    if($run_fst){
    
    }
    $fst1=0;
    while($row=mysqli_fetch_assoc($run_fst))
    {
        $fst1++;
    }
?>