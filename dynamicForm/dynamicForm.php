<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="dynamicForm" method="post" action="process_form.php">
        <?php
        // 初始显示第一个问题
        echo '<label>' . $questions[1]['question'] . '</label><br>';
        foreach ($questions[1]['options'] as $option) {
            echo '<input type="radio" name="answer" value="' . $option . '">' . $option . '<br>';
        }
        ?>
        <button type="button" onclick="getNextQuestion()">下一题</button>
    </form>
    
    <script>
        function getNextQuestion() {
            // 获取用户选择的答案
            var selectedAnswer = document.querySelector('input[name="answer"]:checked').value;
    
            // 使用AJAX将选择的答案发送给后端
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'process_form.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // 更新表单，显示下一个问题
                    document.getElementById('dynamicForm').innerHTML = xhr.responseText;
                }
            };
            xhr.send('selectedAnswer=' + selectedAnswer);
        }
    </script>
</body>
</html>