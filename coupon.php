<?php
if (!isset($_GET["coupon_id"])) {
    header("location: coupon-list.php");
}

$id = $_GET["coupon_id"];

require_once("../ysl_project/ysldb-connect.php");

$sql = "SELECT * FROM discount_coupon WHERE coupon_id = $id AND valid =1";

$result = $conn->query($sql);
$couponCount = $result->num_rows;
$row = $result->fetch_assoc();

?>

<!doctype html>
<html lang="en">

<head>
    <title>Coupon</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php
    include("../ysl_project/ysl-css.php");
    ?>
</head>

<body>
    <div class="container">
        <div class="py-2">
            <a href="coupon-list.php" class="btn btn-warning" title="回到優惠券一覽列表"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
        <?php if($couponCount == 0): ?>
            <h1>找不到此優惠券</h1>
        <?php else: ?>
        <table class="table table-bordered">
            <tr>
                <th>編號</th>
                <td><?=$row["coupon_id"]?></td>
            </tr>
            <tr>
                <th>優惠券名稱</th>
                <td><?=$row["title"]?></td>
            </tr>
            <tr>
                <th>優惠券代碼</th>
                <td><?=$row["coupon_code"]?></td>
            </tr>
            <tr>
                <th>折扣類型</th>
                <td><?=$row["discount_type"]?></td>
            </tr>
            <tr>
                <th>折扣百分比或折扣金額</th>
                <td><?=$row["discount_value"]?></td>
            </tr>
            <tr>
                <th>可使用次數</th>
                <td><?=$row["usage_times"]?></td>
            </tr>
            <tr>
                <th>起始日</th>
                <td><?=$row["start_date"]?></td>
            </tr>
            <tr>
                <th>截止日</th>
                <td><?=$row["expiration_date"]?></td>
            </tr>
            <tr>
                <th>使用門檻(滿多少錢可使用)</th>
                <td><?=$row["price_rule"]?></td>
            </tr>
            <tr>
                <th>可使用的範圍</th>
                <td><?=$row["applicable_scope"]?></td>
            </tr>
            <tr>
                <th>使用類別</th>
                <td><?=$row["applicable_type_id"]?></td>
            </tr>
            <tr>
                <th>創立日期</th>
                <td><?=$row["created_at"]?></td>
            </tr>
            <tr>
                <th>優惠券狀態</th>
                <td><?=$row["status"]?></td>
            </tr>
        </table>
        <div class="pb-2">
            <a href="coupon-edit.php?coupon_id=<?=$row["coupon_id"]?>" class="btn btn-warning" title="編輯優惠券"><i class="fa-solid fa-pen-to-square"></i></a>
        </div>
        <?php endif; ?>
        <h2>擁有這張優惠券的使用者</h2> 
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>