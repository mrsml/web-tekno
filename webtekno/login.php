<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Gezgin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="index.php">HAKKINDA</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="cv.php">ÖZGEÇMİŞ</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="sehrim.php">ŞEHRİM</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="mirasimiz.php">MİRASIMIZ</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="login.php">PROFİL</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="iletisim.php">İLETİŞİM</a>
                </li>

            </ul>
        </div>
    </nav>

    <div div align="center">

        <h3>KULLANICI GIRISI</h3>
        <form id="login-form" method="post" action="authen_login.php">
            <table>
                <tr>
                    <td><label for="user_id">User Name</label></td>
                    <td><input type="text" name="user_id" id="user_id"></td>
                </tr>
                <tr>
                    <td><label for="user_pass">Password</label></td>
                    <td><input type="password" name="user_pass" id="user_pass"></input></td>
                </tr>

                <tr>

                    <td><input type="submit" value="Submit" />
                    <td><input type="reset" value="Reset" />

                </tr>
            </table>
        </form>
    </div>
</body>

</html>