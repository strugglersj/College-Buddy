<link rel="stylesheet" href="viewmarks.css">


<?php require 'CONNECT.php';  
      session_start();
?>

<?php
    $query = "SELECT * FROM profile WHERE USER_NAME = '$_SESSION[LOGIN_USER]' ";
    $output = mysqli_query($conn,$query);
    if($output)
    {
        while($row = mysqli_fetch_assoc($output))
        {
            $REG_NO = $row['REG_NO'];
        }
    }
?>

<?php
    $query2 = "SELECT * FROM marks WHERE REG_NO = '$REG_NO' ";
    $result = mysqli_query($conn,$query2);
    if($result)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $MATHS = $row['MATHS'];
            $PHYSICS = $row['PHYSICS'];
            $COMPUTER_NETWORKS = $row['COMPUTER_NETWORKS'];
            $DSA = $row['DSA'];
            $ENGLISH = $row['ENGLISH'];
        }
    }
?>
<?php 
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
?>

<table border="2" colspan="7" align='center' class="container-table">
        <tbody>
            <caption><b> MARKS </b></caption> 
        </tbody>
    <thead>
    <tr>
        <th> SUBJECTS </th>
        <th> MARKS </th>
        <th> GRADES </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td> MATHS </td>
        <td> <?php echo $MATHS; ?> </td>
        <td> 
            <?php
                if($MATHS >= '90' && $MATHS <='100')
                    echo "A+";
                else if($MATHS >= '80' && $MATHS <'90')
                    echo "A";
                else if($MATHS >= '70' && $MATHS <'80')
                    echo "B";
                else if($MATHS >= '60' && $MATHS <'70')
                    echo "C";
                else if($MATHS >= '50' && $MATHS <'60')
                    echo "D";
                else if($MATHS >= '40' && $MATHS <'50')
                    echo "E";
                else if($MATHS < '40')
                    echo "F";
                ?>
        </td>
                
        </td>
    </tr>

    <tr>
        <td> PHYSICS </td>
        <td> <?php echo $PHYSICS; ?> </td>
        <td>
            <?php
                if($PHYSICS>= '90' && $PHYSICS <='100')
                    echo "A+";
                else if($PHYSICS >= '80' && $PHYSICS <'90')
                    echo "A";
                else if($PHYSICS >= '70' && $PHYSICS <'80')
                    echo "B";
                else if($PHYSICS >= '60' && $PHYSICS <'70')
                    echo "C";
                else if($PHYSICS >= '50' && $PHYSICS <'60')
                    echo "D";
                else if($PHYSICS >= '40' && $PHYSICS <'50')
                    echo "E";
                else if($PHYSICS < '40')
                    echo "F";
            ?>
        </td>
    </tr>

    <tr>
        <td> COMPUTER_NETWORKS </td>
        <td> <?php echo $COMPUTER_NETWORKS; ?> </td>
        <td>
            <?php
                if($COMPUTER_NETWORKS >= '90' && $COMPUTER_NETWORKS <='100')
                    echo "A+";
                else if($COMPUTER_NETWORKS >= '80' && $COMPUTER_NETWORKS <'90')
                    echo "A";
                else if($COMPUTER_NETWORKS >= '70' && $COMPUTER_NETWORKS <'80')
                    echo "B";
                else if($COMPUTER_NETWORKS >= '60' && $COMPUTER_NETWORKS <'70')
                    echo "C";
                else if($COMPUTER_NETWORKS >= '50' && $COMPUTER_NETWORKS <'60')
                    echo "D";
                else if($COMPUTER_NETWORKS >= '40' && $COMPUTER_NETWORKS <'50')
                    echo "E";
                else if($COMPUTER_NETWORKS < '40')
                    echo "F";
            ?>
        </td>
    </tr>

    <tr>
        <td> DSA </td>
        <td> <?php echo $DSA; ?> </td>
        <td>
            <?php
                if($DSA >= '90' && $DSA <='100')
                    echo "A+";
                else if($DSA >= '80' && $DSA <'90')
                    echo "A";
                else if($DSA >= '70' && $DSA<'80')
                    echo "B";
                else if($DSA >= '60' && $DSA <'70')
                    echo "C";
                else if($DSA >= '50' && $DSA <'60')
                    echo "D";
                else if($DSA >= '40' && $DSA <'50')
                    echo "E";
                else if($MATHS < '40')
                    echo "F";
            ?>
        </td>
    </tr>

    <tr>
        <td> ENGLISH </td>
        <td> <?php echo $ENGLISH; ?> </td>
        <td>
            <?php
                if($ENGLISH >= '90' && $ENGLISH <='100')
                    echo "A+";
                else if($ENGLISH >= '80' && $ENGLISH <'90')
                    echo "A";
                else if($ENGLISH >= '70' && $ENGLISH <'80')
                    echo "B";
                else if($ENGLISH >= '60' && $ENGLISH <'70')
                    echo "C";
                else if($ENGLISH >= '50' && $ENGLISH <'60')
                    echo "D";
                else if($ENGLISH >= '40' && $ENGLISH<'50')
                    echo "E";
                else if($ENGLISH < '40')
                    echo "F";
            ?>
        </td>
    </tr>
</tbody>
</table>

<?php 
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
?>
<div align='center'>
            <a href=MAIN_PAGE.php><button class="button button1">BACK</button>
</div>