<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel='stylesheet' href='css/iletisimcss.css' type='text/css' />
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
    <h1>Kullanici Kayit Formu</h1>
    <form id='register' name='registration' method=post  onSubmit="return formValidation();" action="iletisim_check.php">
        <ul>
            <li><label for="userid">Kullanici Adi:</label></li>
            <li><input type="text" name="userid" size="12" /></li>
            <li><label for="passid">Sifre:</label></li>
            <li><input type="password" name="passid" size="12" /></li>
            <li><label for="username">Isim:</label></li>
            <li><input type="text" name="username" size="50" /></li>
            <li><label for="address">Adres:</label></li>
            <li><input type="text" name="address" size="50" /></li>
            <li><label for="country">Ulke:</label></li>
            <li><select name="country">
                    <option selected="" value="Default">(Ulke Seciniz...)</option>
                    <option value="AF">Avustralya</option>
                    <option value="AL">Kanada</option>
                    <option value="DZ">Hindistan</option>
                    <option value="AS">Rusya</option>
                    <option value="AD">Amerika</option>
                    <option value="TR">Turkiye</option>
                </select></li>
            <li><label for="zip">Posta Kodu:</label></li>
            <li><input type="text" name="zip" /></li>
            <li><label for="email">Email:</label></li>
            <li><input type="text" name="email" size="50" /></li>
            <li><label for="gender" name="gender">Cinsiyet:</label></li>
            <li><input type="radio" name="msex" value="Male" /><span>Erkek</span></li>
            <li><input type="radio" name="fsex" value="Female" /><span>Kadin</span></li>
            <li><label for="lang" name="lang">Dil:</label></li>
            <li><input type="checkbox" name="en" value="en" checked /><span>Ingilizce</span></li>
            <li><input type="checkbox" name="nonen" value="noen" /><span>Diger</span></li>
            <li><label for="desc">Ozet:</label></li>
            <li><textarea name="desc" id="desc" for="desc"></textarea></li>
            <li><input type="submit" name="submit" value="Gonder" /></li>
            <li><input type="button" id='temizlebut' name="clearBut" onclick="clearForm()" value="Temizle" /></li>
        </ul>
    </form>
    <script type="text/javascript">
        function formValidation() {
            var uid = document.registration.userid;
            var passid = document.registration.passid;
            var uname = document.registration.username;
            var uadd = document.registration.address;
            var ucountry = document.registration.country;
            var uzip = document.registration.zip;
            var uemail = document.registration.email;
            var umsex = document.registration.msex;
            var ufsex = document.registration.fsex;
            var ulang = document.registration.lang;
            var udesc = document.registration.desc;
            if (userid_validation(uid, 5, 12)) {
                if (passid_validation(passid, 7, 12)) {
                    if (allLetter(uname)) {
                        if (alphanumeric(uadd)) {
                            if (countryselect(ucountry)) {
                                if (allnumeric(uzip)) {
                                    if (ValidateEmail(uemail)) {
                                        if (validsex(umsex, ufsex)) {}
                                    }
                                }
                            }
                        }
                    }
                }
            }
            return false;

        }

        function clearForm() {
            document.getElementById("register").reset();
         }

        function userid_validation(uid, mx, my) {
            var uid_len = uid.value.length;
            if (uid_len == 0 || uid_len >= my || uid_len < mx) {
                alert("Isım bos birakilamaz / uzunlugu " + mx + " ile " + my + "karakter olmalidir.");
                uid.focus();
                return false;
            }
            return true;
        }

        function passid_validation(passid, mx, my) {
            var passid_len = passid.value.length;
            if (passid_len == 0 || passid_len >= my || passid_len < mx) {
                alert("Sifre adi bos birakilamaz / uzunlugu " + mx + " ile " + my + "karakter olmalidir.");
                passid.focus();
                return false;
            }
            return true;
        }

        function allLetter(uname) {
            var letters = /^[A-Za-z]+$/;
            if (uname.value.match(letters)) {
                return true;
            } else {
                alert('Kullanici adi alfabe karakterlerini icermelidir.');
                uname.focus();
                return false;
            }
        }

        function alphanumeric(uadd) {
            var letters = /^[0-9a-zA-Z]+$/;
            if (uadd.value.match(letters)) {
                return true;
            } else {
                alert('Adres bilgisi sadece alfabe karakterlerini icermelidir.');
                uadd.focus();
                return false;
            }
        }

        function countryselect(ucountry) {
            if (ucountry.value == "Default") {
                alert('Ulkenizi Seciniz');
                ucountry.focus();
                return false;
            } else {
                return true;
            }
        }

        function allnumeric(uzip) {
            var numbers = /^[0-9]+$/;
            if (uzip.value.match(numbers)) {
                return true;
            } else {
                alert('Posta kodu sadece rakam icermelidir.');
                uzip.focus();
                return false;
            }
        }

        function ValidateEmail(uemail) {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (uemail.value.match(mailformat)) {
                return true;
            } else {
                alert("Email adres bicimi yanlis!");
                uemail.focus();
                return false;
            }
        }

        function validsex(umsex, ufsex) {
            x = 0;

            if (umsex.checked) {
                x++;
            }
            if (ufsex.checked) {
                x++;
            }
            if (x == 0) {
                alert('Select Male/Female');
                umsex.focus();
                return false;
            } else {
                alert('Form Succesfully Submitted');
                window.location.reload()
                return true;
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>