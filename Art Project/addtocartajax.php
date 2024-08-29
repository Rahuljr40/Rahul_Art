<?php

$conn = mysqli_connect('localhost','root','','art');

$id = $_POST['id'];
$uid = $_POST['uid'];

// $sql1 = "SELECT * FROM `ordertb` WHERE `aid`=$id AND `uid` = $uid";

// $res = $conn->query($sql1);

// if($res->num_rows>0){
//     $sql = "UPDATE `ordertb` SET `qty`=$qty WHERE `fid`=$fid AND `custID`=$cid";
//     if($conn->query($sql)){
//         echo 'Qauntity Updated';
//     }
// }
// else
{
    $sql = "INSERT INTO `ordertb`(`aid`, `uid`, `qty`) VALUES ('$id','$uid','1')";

    if($conn->query($sql)){
        echo 'Added to Cart';
    }
}

?>