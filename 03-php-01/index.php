<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <form action="insert.php" method="post">
        <div>
            <label for="name">Digite o seu nome:</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="email">Digite o seu email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="password">Digite a senha:</label>
            <input type="password" id="password" name="password">
            <div>
                <input type="submit" value="Cadastrar">
            </div>
        </div>

    </form>
</body>
</html>
