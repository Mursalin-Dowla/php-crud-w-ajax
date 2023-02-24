<?php
$con = new mysqli('localhost','root','','day_26');

$action = $_POST['action'];
$action();

function insert(){
   global $con;
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $status = $_POST['status'];
    if($name == ''){
       echo 'Name is Required';
    }
    else if($email == ''){
        echo 'Email  is Required';
    }
    else if($phone == ''){
         echo 'Phone is Required';
    }
    else if($status == ''){
        echo 'Status is Required';
    }

    else{
        $insertion = $con->query("INSERT INTO tbl_student(name,email,phone,status)VALUE('$name','$email','$phone','$status')");
        if($insertion){
         echo "DATA SUBMITTED";
        }
        else{
         echo "DATA NOT SUBMITTED";
        }
    }
}
function show(){
   global $con;
   $obj = $con->query("SELECT * FROM tbl_student");
   $sl = 1;
    $allData = "";
    while($data = $obj->fetch_assoc()){
        if($data['status']== '1'){
            $status = "<button class='active btn btn-info btn-sm' value=".$data['id'].">Active</button>";
        }
        else{
            $status= "<button class='inactive btn btn-warning btn-sm' value=".$data['id'].">Inactive</button>";
        }
        $allData .= "<tr>
        <td>".$sl."</td>
        <td>".$data['name']."</td>
        <td>".$data['email']."</td>
        <td>".$data['phone']."</td>
        <td>".$status."</td>
        <td>
        <button class='btn btn-info btn-sm'  id='edit' value=".$data['id'].">Edit</button>
        <button class='btn btn-danger btn-sm' id='delete' value=".$data['id'].">Delete</button>
        </td>
        </tr>";
        $sl++;
    }
    echo $allData;
}
function active(){
    $id = $_POST['id'];
    global $con;
    $con->query("UPDATE tbl_student SET status='2' WHERE id='$id'");
}
function inactive(){
    $id = $_POST['id'];
    global $con;
    $con->query("UPDATE tbl_student SET status='1' WHERE id='$id'");
}
function update(){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $status = $_POST['status'];
    global $con;
    $con->query("UPDATE tbl_student SET name='$name',email='$email',phone='$phone',status='$status' WHERE id='$id'");
    }
function delete(){
    $id = $_POST['id'];
   global $con;
   $con->query("DELETE FROM tbl_student WHERE id='$id'");
}
?>