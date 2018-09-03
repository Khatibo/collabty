

<?php
$DBC = mysqli_connect("localhost","root","","collabty3");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to Database: " . mysqli_connect_error();
}
