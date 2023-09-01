<?php
include 'head.php';
mysqli_query($con, "delete from tblcart where cartid=" . $_GET['id']);

?>
<script type="text/javascript">
    window.location.href = "viewcart.php";
</script>