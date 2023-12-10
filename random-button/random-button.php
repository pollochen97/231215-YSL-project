<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Button Code</title>
</head>
<body>

<input type="text" id="randomInput">
<button onclick="generateAndDisplayRandomCode()">Generate Random Code</button>

<script>
function generateRandomCode(length) {
    const characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    let randomCode = '';
    for (let i = 0; i < length; i++) {
        randomCode += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    return randomCode;
}

function generateAndDisplayRandomCode() {
    // 生成20个字符的随机码
    const randomCode = generateRandomCode(20);

    // 将随机码显示在 input 框中
    document.getElementById('randomInput').value = randomCode;
}
</script>

</body>
</html>










