<?php 

include('../include/mysqli_connect.php');

if(isset($_FILES['img']))
{
    $imgName = $_FILES['img']['name'];
    $roots = $_FILES['img']['tmp_name'];
    $destination = "../images/".$imgName;

    if(copy($roots, $destination))
    {
        $sql = "INSERT INTO 'tbimg'(imgName,roots) VALUES ('$imgName', '$destination')";
        $res = mysqli_query($conn, $sql);

        if($res)
        {
            echo '<script type="text/javascript"> alert("Success images"); </script>';
        }
        else
        {
            die("Error".mysqli_error($conn));
        }
    }
}

?>