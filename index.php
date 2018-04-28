<?php
include './include/config.php';

$query = "SELECT * FROM employee";
$data = selectEmployees($query);

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    
        $delete="DELETE FROM employee WHERE emp_id=".$id;
        $deleteUser=updateEmployees($delete);

        if($deleteUser!=0){
            header("Location: index.php");
        }else{
            echo 'error in delete';
        }    
    
}


?>

<table>
    <tr>
        <td>Emp Name</td><td>Email</td><td>Position</td><td>Edit</td><td>Delete</td>
    </tr>

    <?php

    if(!empty($data)):
    foreach ($data as $user):
    ?>
    <tr>
        <td><?php echo $user['emp_name']; ?></td>
        <td><?php echo $user['emp_email']; ?></td>
        <td><?php echo $user['emp_position']; ?></td>
        <td><a href="edit.php?id=<?php echo $user['emp_id']; ?>">Edit</a></td>
        <td><a href="index.php?deleteid=<?php echo $user['emp_id']; ?>">Delete</a></td>
    </tr>
    <?php
    endforeach;
    else:
        echo "<h4>No Employees Found!</h4>";
    endif;
    ?>

</table>