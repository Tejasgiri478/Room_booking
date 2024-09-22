<?php
require_once('../db_config.php');
require_once('../essentials.php');
adminLogin();

if (isset($_POST['add_room'])) {
    // Properly decode JSON arrays and sanitize each element
    $features = filtration(json_decode($_POST['features'], true));
    $facilities = filtration(json_decode($_POST['facilities'], true));

    $frm_data = filtration($_POST);
    $flag = 0;

    // Insert room details
    $q1 = "INSERT INTO `rooms`(`name`, `area`, `price`, `quantity`, `adult`, `children`, `description`) VALUES (?,?,?,?,?,?,?)";
    $values = [$frm_data['name'], $frm_data['area'], $frm_data['price'], $frm_data['quantity'], $frm_data['adult'], $frm_data['children'], $frm_data['desc']];

    if (insert($con, $q1, $values, 'siiiiis')) {
        $flag = 1;
    } else {
        $flag = 0;
    }

    $room_id = mysqli_insert_id($con);

    // Insert facilities
    $q2 = "INSERT INTO `room_facilities`(`room_id`, `facilities_id`) VALUES (?,?)";
    if ($stmt = mysqli_prepare($con, $q2)) {
        foreach ($facilities as $fac) {
            mysqli_stmt_bind_param($stmt, 'ii', $room_id, $fac);
            mysqli_stmt_execute($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        $flag = 0;
        die('Query cannot be prepared - insert facilities');
    }

    // Insert features
    $q3 = "INSERT INTO `room_feature`(`room_id`, `features_id`) VALUES (?,?)";
    if ($stmt = mysqli_prepare($con, $q3)) {
        foreach ($features as $fea) {
            mysqli_stmt_bind_param($stmt, 'ii', $room_id, $fea);
            mysqli_stmt_execute($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        $flag = 0;
        die('Query cannot be prepared - insert features');
    }

    // Final response
    if ($flag) {
        echo 1;
    } else {
        echo 0;
    }
}

if (isset($_POST['get_rooms'])) {
    $res = selectAll($con, 'rooms');
    $i = 1;
    $data = "";
    while ($row = mysqli_fetch_assoc($res)) {

        if ($row['status'] == 1) {
            $status = "<button onclick='toggle_status($row[id],0)' class='btn btn-dark btn-sm'>active</button>";
        } else {
            $status = "<button onclick='toggle_status($row[id],1)' class='btn btn-warning btn-sm'>inactive</button>";
        }

        $data .= "
        <tr class='align-middle'>
            <td>$i</td>
            <td>$row[name]</td>
            <td>$row[area]</td>
            <td>
                <span class='badge rounded-pill bg-light text-dark'>
                Adult: $row[adult]
                </span><br>
                <span class='badge rounded-pill bg-light text-dark'>
                Children: $row[children]
                </span>
            </td>
            <td>₹$row[price]</td>
            <td>$row[quantity]</td>
            <td>$status</td>
            <td>
                <button type='button' onclick='get_room($row[id])' class='btn btn-primary btn-sm' data-bs-toggle='modal'
                    data-bs-target='#edit-room'><i class='bi bi-pencil-square'></i>Edit
                </button>
            </td>
        </tr>
        ";
        $i++;
    }
    echo $data;
}

if (isset($_POST['get_room'])) {
   $frm_data = filtration($_POST);
   $res1 = select($con,"SELECT * FROM `rooms` WHERE `id` =?", [$frm_data['get_room']],'i');
   $res2 = select($con,"SELECT * FROM `room_feature` WHERE `room_id` =?", [$frm_data['get_room']],'i');
   $res3 = select($con,"SELECT * FROM `room_facilities` WHERE `room_id` =?", [$frm_data['get_room']],'i');

   $roomdata = mysqli_fetch_assoc($res1);
   $features = [];
   $facilities = [];

   if(mysqli_num_rows($res2)>0){
    while($row = mysqli_fetch_assoc($res2)){
        array_push($features,$row['features_id']);
    }
   }
   if(mysqli_num_rows($res3)>0){
    while($row = mysqli_fetch_assoc($res3)){
        array_push($facilities,$row['facilities_id']);
    }
   }

   $data = ['roomdata'=>$roomdata,'features'=>$features,'facilities'=>$facilities];

   $data = json_encode($data);

   echo $data;
}

if (isset($_POST['submit_edit_room'])) {
    $features = filtration(json_decode($_POST['features'], true));
    $facilities = filtration(json_decode($_POST['facilities'], true));

    $frm_data = filtration($_POST);
    $flag = 0;


    $q1 = "UPDATE `rooms` SET `name`=?,`area`=?,`price`=?,`quantity`=?,`adult`=?,`children`=?,`description`=? WHERE `id`=?";
    $values = [$frm_data['name'], $frm_data['area'], $frm_data['price'], $frm_data['quantity'], $frm_data['adult'], $frm_data['children'], $frm_data['desc'], $frm_data['room_id']];
    
    if(update($con,$q1,$values,'siiiiisi')){
        $flag = 1;
    }
    else{
        $flag = 0;
    }
    $del_features = delete($con,"DELETE FROM `room_feature` WHERE `room_id`=?",[$frm_data['room_id']],'i');
    $del_facilities = delete($con,"DELETE FROM `room_facilities` WHERE `room_id`=?",[$frm_data['room_id']],'i');

    if(!($del_features && $del_facilities)){
        $flag = 0;
        die('Query failed: Delete operations');
    }

    $q2 = "INSERT INTO `room_facilities`(`room_id`, `facilities_id`) VALUES (?,?)";
    if ($stmt = mysqli_prepare($con, $q2)) {
        foreach ($facilities as $fac) {
            mysqli_stmt_bind_param($stmt, 'ii', $frm_data['room_id'], $fac);
            mysqli_stmt_execute($stmt);
        }
        $flag = 1;
        mysqli_stmt_close($stmt);
    } else {
        $flag = 0;
        die('Query failed: Insert facilities');
    }

    $q3 = "INSERT INTO `room_feature`(`room_id`, `features_id`) VALUES (?,?)";
    if ($stmt = mysqli_prepare($con, $q3)) {
        foreach ($features as $fea) {
            mysqli_stmt_bind_param($stmt, 'ii', $frm_data['room_id'], $fea);
            mysqli_stmt_execute($stmt);
        }
        $flag = 1;
        mysqli_stmt_close($stmt);
    } else {
        $flag = 0;
        die('Query failed: Insert features');
    }

    // Final response
    if ($flag) {
        echo 1;
    } else {
        echo 0;
    }
}

if (isset($_POST['toggle_status'])) {
    $frm_data = filtration($_POST);
    $q = "UPDATE `rooms` SET `status`=? WHERE `id`=?";
    $v = [$frm_data['value'], $frm_data['toggle_status']];

    if (update($con, $q, $v, 'ii')) {
        echo 1;
    } else {
        echo 0;
    }
}