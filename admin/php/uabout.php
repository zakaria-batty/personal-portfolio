<?php
include('../../include/db.php');
if (isset($_POST['save'])) {
    $heading = mysqli_real_escape_string($db, $_POST['ptitle']);
    $subheading = mysqli_real_escape_string($db, $_POST['psubtitle']);
    $shortdesc = mysqli_real_escape_string($db, $_POST['shortdesc']);
    $longdesc = mysqli_real_escape_string($db, $_POST['longdesc']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);
    $Age = mysqli_real_escape_string($db, $_POST['Age']);
    $website = mysqli_real_escape_string($db, $_POST['website']);
    $Degree = mysqli_real_escape_string($db, $_POST['Degree']);
    $Phone = mysqli_real_escape_string($db, $_POST['Phone']);
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
    $City = mysqli_real_escape_string($db, $_POST['City']);
    $query = "UPDATE about SET ";
    $query .= "shortdesc='$shortdesc',";
    $query .= "heading='$heading',";
    $query .= "subheading='$subheading',";
    $query .= "longdesc='$longdesc',";
    $query .= "dob='$dob',";
    $query .= "Age='$Age',";
    $query .= "website='$website',";
    $query .= "Degree='$Degree',";
    $query .= "Phone='$Phone',";
    $query .= "Email='$Email',";
    $query .= "City='$City' WHERE id=1";
    echo $query;
    $queryrun = mysqli_query($db, $query);
    if ($queryrun) {
        header("location:../?editabout=true&msg=updated");
    }
}

