<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "peter", "image_upload");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$product = mysqli_real_escape_string($link, $_REQUEST['product']);
$price = mysqli_real_escape_string($link, $_REQUEST['price']);
// Get image name
$image = $_FILES['image']['name'];
 
// Attempt insert query execution
$sql = "INSERT INTO images (product, price, image) VALUES ('$product', '$price', '$image')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>