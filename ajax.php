<?php
include '../includes/connection.php';
error_reporting(0);
if($_POST['action'] == 'getdata'){
    $b=mysqli_query($con, "SELECT * FROM attendance WHERE date='".$_POST['date']."'");?>

    
    <table class="table table-bordered table-responsive table-striped">
                        
                        <tr>
                            <th>Sr No.</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Attendance</th>
                            
                        </tr>
                        <?php
                        $i=1;
                        
                        while($res=mysqli_fetch_assoc($b)){ ?>
                        
                        <tr>
                            <td><?php echo $i++;?></td>
                            <td><?php echo $res['emp_id'];
                            $n=  mysqli_query($con, "SELECT name FROM employee WHERE employee_id='".$res['emp_id']."'");
                            $nn=  mysqli_fetch_assoc($n);
                            
                            
                            ?></td>
                            <td><?php echo $nn['name'];?></td>
                            <td><?php echo $res['atd'];?></td>
                            
                        </tr>
 <?php } ?>
                    </table>
<?php } ?>