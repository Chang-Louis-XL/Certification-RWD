<?php
include_once "base.php";

$chk = $Admin->count(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);

// 若正確chk就會是1否則為0
if ($chk) {
    $_SESSION['login'] = 1;
    to("../admin.php");
    exit();
}
?>
<script>
    alert("帳號或密碼錯誤");
    location.href = "../index.php?do=login";
</script>