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

<script>
function validateForm() {
    // 获取输入值
    var inputData = document.getElementById('inputData').value;

    // 正则表达式模式，验证是否为20个字符或更少
    var pattern = /^.{1,20}$/;

    // 进行验证
    var isInputValid = pattern.test(inputData);

    // 显示验证结果
    document.getElementById('inputDataError').innerHTML = isInputValid ? '' : 'Input must be 20 characters or less';

    // 返回是否通过验证
    return isInputValid;
}
</script>

</body>
</html>
