<?php
    include("connect.php");
    $sid = $_GET['x'];
    $q = mysqli_query($con, "DELETE FROM subcategory_master WHERE sid=$sid");
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
        header("location:subcategory_master.php");
    }   
    else {
        echo "Having Some Issues...";
    }
?>