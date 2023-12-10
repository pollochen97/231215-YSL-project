<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Length Validation</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

<form id="myForm" onsubmit="return validateForm()">
    <label for="inputData">Input Data:</label>
    <input type="text" id="inputData" name="inputData" required>
    <span id="inputDataError" class="error"></span>

    <br>

    <button type="submit">Submit</button>
</form>

<!-- 驗證input內容有無符合20字元內 -->
<script>
    function validateForm(){
      //獲取輸入值      
      let titleData = document.getElementById('titleData').value;
      //正規表達式：驗證是否符合20字元內
      let pattern = /^.{1,20}$/;
      //進行驗證
      let isTitleValid = pattern.test(titleData);
      //顯示驗證結果
      document.getElementById('titleDataError').innerHTML = isTitleValid ? '' : '名稱必須在20字元內';
      //返回是否通過驗證
      return isTitleValid;
    }
  </script>

</body>
</html>
