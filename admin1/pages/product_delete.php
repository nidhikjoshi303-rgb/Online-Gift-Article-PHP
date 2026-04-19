<?php
    include("connect.php");
    $pid = $_GET['x'];
    echo $x;
    $q = mysqli_query($con, "DELETE FROM product_master WHERE pid=$pid");
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
        header("location:product_master.php");
    }   
    else {
        echo "Having Some Issues...";
    }
?>