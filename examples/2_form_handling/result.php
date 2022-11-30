<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Username: <?php echo $_POST['username']; ?></td>
        </tr>
        <tr>
            <td>Password: <?php echo $_POST['password']; ?></td>
        </tr>
        <tr>
            <td>Gender: <?php echo $_POST['gender']; ?></td>
        </tr>
        <tr>
            <td>Makanan Favorit: <?php echo $_POST['favorites'][0]; ?></td>
        </tr>
        <tr>
            <td>Tanggal lahir: <?php echo $_POST['date_of_birth']; ?></td>
        </tr>
        <tr>
            <td>Email: <?php echo $_POST['email']; ?></td>
        </tr>
        <tr>
            <td>
                Deskripsi:<br>
                <?php echo $_POST['description']; ?>
            </td>
        </tr>
        <tr>
            <td>Umur: <?php echo $_POST['age']; ?></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Save">
            </td>
        </tr>
    </table>
</body>
</html>