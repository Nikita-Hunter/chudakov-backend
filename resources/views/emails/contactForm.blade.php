<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Сообщение</title>
</head>
<body>
    <h1>Добрый день!</h1>
    <div>
        Вам пришло сообщение от {{ $username }}
    </div>
    <div>
        Сообщение: <br>
        {{ $usermessage  }}
    </div>
<div>
    Телефон для связи: {{ $userphone }}
</div>
</body>
</html>
