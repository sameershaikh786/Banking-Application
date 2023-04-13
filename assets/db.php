<?php 
     $con = new mysqli('ruralbanking-server.mysql.database.azure.com','jvtncydpkj','X82A51F83IF6N58E$','ruralbanking-database');
    define('bankname', 'Rural Bank');
    if(isset($_SESSION['userId'])) {
        $ar = $con->query("select * from userAccounts,branch where id = '$_SESSION[userId]' AND userAccounts.branch = branch.branchId");
        $userData = $ar->fetch_assoc();
    }
?>
<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
