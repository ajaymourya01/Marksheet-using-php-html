<?php
if(isset($_POST['submit']))
{

$n=$_POST['name'];
$fn=$_POST['fname'];
$mn=$_POST['mname'];
$dob=$_POST['dob'];
$h=$_POST['h'];
$hp=$_POST['hp'];
$e=$_POST['e'];
$ep=$_POST['ep'];
$s=$_POST['s'];
$sp=$_POST['sp'];
$m=$_POST['m'];
$mp=$_POST['mp'];
$sc=$_POST['sc'];
$scp=$_POST['scp'];
$soc=$_POST['soc'];
$socp=$_POST['socp'];

$th=$h+$hp;
$te=$e+$ep;
$ts=$s+$sp;
$tm=$m+$mp;
$tsc=$sc+$scp;
$tsoc=$soc+$socp;
$grandtotal=$th+$te+$ts+$tm+$tsc+$tsoc;

$per=$grandtotal/6;
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
<fieldset allign-itme="Centre">
    <h1 align="Centre"> BOARD OF SECONDARY EDUCATION, MADHYA PRADESH, BHOPAL</h1>
    <h3>
        HIGH SCHOOL CERTIFICATE EXAMINATION(10+2) 2019
    </h3>
    <h3> MARKSHEET CUM-CERTIFICATE</h3>
    <table border="1" cellpadding="5" cellspacing="0" > 
            <tr> 
                <td>
                    Centre No 
                </td>
                <td>
                    School No
                </td>
                <td>
                    Enrollment No.
                </td>
                <td>
                    Regular/Private 
                </td>
                <td>
                    Roll No.
                </td>
            </tr>
            <tr> 
                <td>
                    ********
                </td>
                <td>
                    ********
                </td>
                <td>
                    ********
                </td>
                <td>
                    Regular
                </td>
                <td>
                    *******
                </td>
            </tr>
    </table>
        <p> Certified that</p> <br>
        <p> Shri/Sushri :   <?=$n; ?>              </p>                                      <p> Whose</p>
        <p> Father's / Husband's Name is :<?=$fn; ?>  </p>
        <p> Mother's Name is :      <?=$mn; ?>        </p>
        <p> And Date of Birth is :    <?=$dob; ?>     </p>
        <p> Appeared in the high school certificate examination of this board in the year 2019 from (School/Centre)** And subject wise Marks Obtained Are As Under :</p>
        <p>            </p>
     <table border="1"  cellpadding="5" cellspacing="0"> 
            <tr>
                <td rowspan="2">
                    Subject 
                </td>
                <td colspan="3">
                    Maximum Marks
                </td>
                <td colspan="2">
                    Minimum Marks
                </td>
                <td colspan="3"> 
                    Marks Obtained
                </td>
                <td rowspan="2">
                    Remarks
                </td>
            </tr>
            <tr>
                <td>
                    Theory
                </td>
                <td>
                    Internal/Practical 
                </td>
                <td>
                    Total
                </td>
                 <td>
                    Theory
                </td>
                <td>
                    Internal/Practical 
                </td>
                <td>
                    Theory
                </td>
                <td>
                    Internal/Practical 
                </td>
                <td>
                    Total
                </td>
            </tr>
            <tr>
                <td>
                    HINDI(SPECIAL)
                </td>
                <td>80</td>
                <td>20</td>
                <td>100</td>
                <td>26</td>
                <td>07</td>
                <td><?=$h;?></td>
                <td><?=$hp;?></td>
                <td><?=$th;?></td>
                <td>
                <?php if($th>=75 )
                        {
                        echo "Dist**";
                        }
                        elseif($th<=33)
                        {
                            echo "Supply";
                        }
                  ?>
                </td>
            </tr>
            <tr>
                <td>
                    ENGLISH(GENERAL)
                </td>
                <td>80</td>
                <td>20</td>
                <td>100</td>
                <td>26</td>
                <td>07</td>
                <td><?=$e;?></td>
                <td><?=$ep;?></td>
                <td><?=$te;?></td>
                <td>
                <?php if($te>=75 )
                        {
                        echo "Dist**";
                        }
                        elseif($te<=33)
                        {
                            echo "Supply";
                        }
                  ?>
                </td>
            </tr>
            <tr>
                <td>
                    SANSKRIT(GENERAL)
                </td>
                <td>80</td>
                <td>20</td>
                <td>100</td>
                <td>26</td>
                <td>07</td>
                <td><?=$s;?></td>
                <td><?=$sp;?></td>
                <td><?=$ts;?></td>
                <td>
                <?php if($ts>=75 )
                        {
                        echo "Dist**";
                        }
                        elseif($ts<=33)
                        {
                            echo "Supply";
                        }
                  ?>
                </td>
            </tr>
            <tr>
                <td>
                    MATHEMATICS
                </td>
                <td>80</td>
                <td>20</td>
                <td>100</td>
                <td>26</td>
                <td>07</td>
                <td><?=$m;?></td>
                <td><?=$mp;?></td>
                <td><?=$tm;?></td>
                <td> <?php if($tm>=75 )
                        {
                        echo "Dist**";
                        }
                        elseif($tm<=33)
                        {
                            echo "Supply";
                        }
                  ?></td>
            </tr>
            <tr>
                <td>
                    SCIENCE
                </td>
                <td>80</td>
                <td>20</td>
                <td>100</td>
                <td>26</td>
                <td>07</td>
                <td><?=$sc;?></td>
                <td><?=$scp;?></td>
                <td><?=$tsc;?></td>
                <td> <?php if($tsc>=75 )
                        {
                        echo "Dist**";
                        }
                        elseif($tsc<=33)
                        {
                            echo "Supply";
                        }
                  ?></td>
            </tr>
            <tr>
                <td>
                    SOCIAL SCIENCE
                </td>
                <td>80</td>
                <td>20</td>
                <td>100</td>
                <td>26</td>
                <td>07</td>
                <td><?=$soc;?></td>
                <td><?=$socp;?></td>
                <td><?=$tsoc;?></td>
                <td>
                <?php if($tsoc>=75 )
                        {
                        echo "Dist**";
                        }
                        elseif($tsoc<=33)
                        {
                            echo "Supply";
                        }
                  ?>
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="6">GRAND TOTAL</td>
                <td><?=$grandtotal;?></td>
                <td>00</td>
            </tr>
            <tr>
                <td colspan="10">GRAND TOTAL IN WORDS</td>
            </tr>
            <tr> 
                <td colspan="2">RESULT</td>
                <td colspan="8"> 
                    <?php
                        if($per>=75)
                        {
                        echo "Pass In First Division";}
                        elseif($per>=60)
                        {
                        echo "Pass In Second Division";}
                        elseif($per>=45)
                        {
                        echo "Pass In Third Division";}
                        elseif($per>=33)
                        {
                        echo "Pass In Fourth Division";}
                        $c=0;
                        if($th<33)
                        {
                            $c=$c+1;
                        }
                        elseif($te<33)
                        {
                            $c=$c+1;
                      

                        }
                        if($ts<33)
                        {
                            $c=$c+1;
                       

                        }
                        elseif($tm<33)
                        {
                            $c=$c+1;
                        

                        }
                        elseif($tsc<33)
                        {
                            $c=$c+1;
                 

                        }
                        elseif($tsoc<33)
                        {
                            $c=$c+1;
                    
                        }
                        if($c==2 or $c==1)
                        {
                            echo "Supply";
                        }
                        elseif($c>2)
                        {
                            echo "Fail";
                        }
                      
                ?>
            </td>
            </tr>
            <tr>
                <td>
                    ADDTIONAL SUBJECT
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <p>
            Participated in NCC 'A' Certificate Course and Obtained Grade :
        </p>
        <p> 
            Environment Education & Disaster Management. GRADE 
        </p>
        <p>
            AWARDED BONUS MARKS FOR PARTICIPATION IN STATE/NATIONAL/ INTERNATIONAL LEVEL GAME: 
        </p>
 
   
</fieldset>
</body>
</html>
