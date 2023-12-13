<?php
//啟動session
session_start();

//檢查是否已經選擇了範圍
if (isset($_POST['applicable_scope'])){
    // 將選擇的範圍存入session
    $_SESSION["applicable_scope"]=$_POST['applicable_scope'];
}



?>