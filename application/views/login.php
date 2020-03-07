<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <p><center>Silahkan Login</center></p>
    <center>
        <form action="<?= base_url('login/login'); ?>" method="POST">
            <table cellpadding="5" style="text-align: center">
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="uname" size="40"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="pass" size="40"></td>
                </tr>
            </table>
            <br>
            <button type="submit">Submit</button> <button type="reset">Reset</button>
        </form>
    </center>
</body>
</html>