<?php
if (isset($_POST['title']) && $_POST['title']
 && isset($_POST['firstname']) && $_POST['firstname']
 (isset($_POST['middlename']) && $_POST['middlename']
 (isset($_POST['lastname']) && $_POST['lastname']
 (isset($_POST['chapter/city']) && $_POST['chapter/city']
 (isset($_POST['gender']) && $_POST['gender']
 (isset($_POST['dob']) && $_POST['dob']
 (isset($_POST['email']) && $_POST['email']
 (isset($_POST['phoneNumber']) && $_POST['phoneNumber']
 (isset($_POST['placeOfWork']) && $_POST['placeOfWork']
 (isset($_POST['currentJob']) && $_POST['currentJob']
 (isset($_POST['membershipcategory']) && $_POST['membershipcategory']
 (isset($_POST['submit']) && $_POST['submit'] )
  {
    // do user authentication as per your requirements
    // ...
    // ...
    // based on successful authentication
    echo json_encode(array('success' => 1));
} else {
    echo json_encode(array('success' => 0));
}
?>