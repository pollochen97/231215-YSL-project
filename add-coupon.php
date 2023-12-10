<!doctype html>
<html lang="en">

<head>
  <title>Add coupon</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php
  include("../ysl_project/ysl-css.php");
  ?>

</head>

<body>
  <div class="container">
    <!-- Back to coupon list -->
    <div class="py-2">
      <a href="coupon-list.php" class="btn btn-warning" title="回到優惠券一覽列表"><i class="fa-solid fa-arrow-left"></i></a>
    </div>
    <!-- Add Coupon form start -->
    <form action="doAddCoupon.php" method="post">
      <div class="mb-3">
        <label for="title" class="form-label">優惠券名稱：</label>
        <input type="text" class="form-control" id="title" placeholder="請輸入優惠券名稱（限20字元內）" name="title" required>
      </div>
      <div class="mb-3">
        <label for="coupon_code" class="form-label">優惠券代碼：</label>
        <input type="text" class="form-control" id="randomCouponInput" placeholder="請輸入優惠券代碼，限20字元內的數字、英文大小寫" name="coupon_code" required>
        <h6 class="small text-secondary p-2">(可自定義20字元內的大小寫英文、數字混雜字元)</h6>
        <button class="btn btn-warning mb-3" onclick="generateRandomCouponCode()">隨機生成一組代碼</button>

        <div class="mb-3 row">
          <div class="col-6">
            <label for="discount_type" class="form-label">優惠券類型：</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="discount_type" id="percentage" value="percentage" required>
              <label class="form-check-label" for="percentage">
                依售價百分比折價
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="discount_type" id="amount" value="amount" required>
              <label class="form-check-label" for="amount">
                依優惠金額折價
              </label>
            </div>
          </div>
          <div class="col-6">
            <label for="discount_value" class="form-label">優惠券折扣百分比／折扣金額：</label>
            <input type="text" class="form-control" id="discount_value" placeholder="請輸入折扣的百分比或是折扣金額" name="discount_value" required>
          </div>
        </div>
        <div class="mb-3">
          <label for="usage_times" class="form-label">可使用次數：</label>
          <input type="text" class="form-control" id="usage_times" placeholder="請輸入可使用次數" name="usage_times" required>
        </div>
        <div class="mb-3 row">
          <div class="col-6">
            <label for="start_date" class="form-label">優惠券開始日期：</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
          </div>
          <div class="col-6">
            <label for="expiration_date" class="form-label">優惠券截止日期：</label>
            <input type="date" class="form-control" id="expiration_date" name="expiration_date" required>
          </div>
        </div>
        <div class="mb-3">
          <label for="price_rule" class="form-label">最低消費金額：</label>
          <input type="text" class="form-control" id="price_rule" placeholder="請輸入最低消費金額" name="price_rule" required>
        </div>
        <div class="mb-3">
          <label for="applicable_scope" class="form-label">優惠券使用範圍</label>
          <select class="form-select" aria-label="applicable_scope" name="applicable_scope" required>
            <option>請選擇優惠券使用範圍</option>
            <option value="global">全站</option>
            <option value="type">依類別</option>
          </select>
        </div>
        <?php //$applicableScope=$_POST["applicableScope"]
        ?>
        <?php //if($applicableScope == 2): 
        ?>
        <div class="mb-3">
          <label for="applicable_type_id" class="form-label">優惠券使用類別</label>
          <select class="form-select" aria-label="applicable_type_id" name="applicable_type_id">
            <option selected>請選擇優惠券使用類別</option>
            <option value="0">全站使用</option>
            <option value="1">RPG</option>
            <option value="2">AVG</option>
            <option value="3">ETC</option>
            <option value="4">ACT</option>
            <option value="5">SLG</option>
            <option value="6">ARPG</option>
            <option value="7">SRPG</option>
            <option value="8">RAC</option>
            <option value="9">SPG</option>
            <option value="10">STG</option>
            <option value="11">AAPG</option>
            <option value="12">FTG</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="status" class="form-label">優惠券狀態：</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status_1" value="1" required>
            <label class="form-check-label" for="status_1">
              可使用
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status_0" value="0" required>
            <label class="form-check-label" for="status_0">
              未啟用
            </label>
          </div>
        </div>
        <?php //endif; 
        ?>
        <button class="btn btn-warning mb-3" type="submit">建立優惠券</button>
      </div>
    </form>

  </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
  <!-- 隨機碼產生按鈕JS -->
  <script>
    function generateRandomCode(length) {
      const characters =
        '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      let randomCode = '';
      for (let i = 0; i < length; i++) {
        randomCode += characters.charAt(Math.floor(Math.random() * characters.length));
      }
      return randomCode;
    }

    function generateRandomCouponCode() {
      // 生成20個字元的隨機碼
      const randomCode = generateRandomCode(20);
      // 將隨機碼產生在input框框中
      document.getElementById('randomCouponInput').value = randomCode;
    }
   
  </script>
</body>

</html>