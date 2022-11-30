<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="POST">
        <table border="1">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="Pria">Pria
                    <input type="radio" name="gender" value="Wanita">Wanita
                </td>
            </tr>
            <tr>
                <td>Makanan Favorit</td>
                <td>
                    <input type="checkbox" name="favorites[0]" value="Pizza">Pizza
                    <br>
                    <input type="checkbox" name="favorites[1]" value="Bakso">Bakso
                    <br>
                    <input type="checkbox" name="favorites[2]" value="Sate">Sate
                </td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td><input type="date" name="date_of_birth"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>
                    <textarea name="description"></textarea>
                </td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="number" name="age"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Save">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>