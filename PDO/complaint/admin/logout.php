<?php
session_start();
$_SESSION['alogin']=="";
session_unset();
//session_destroy();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="http://localhost:8080/e-grampanchayat/PDO/complaint/admin/index.php";
</script>
