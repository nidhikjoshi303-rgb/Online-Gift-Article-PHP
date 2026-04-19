<?php
    include("connect.php");
    $cid = $_GET['x'];
    $q = mysqli_query($con, "DELETE FROM category_master WHERE cid=$cid");
    if($q) {
        echo "
        <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
        <script>
            swal({
                title: 'Good job!',
                text: 'Category Deleted successfully!',
                icon: 'success',
                button: 'OK',
            })
        </script>
        ";
        header("location:category_master.php");
    }   
    else {
        echo "Having Some Issues...";
    }
?>