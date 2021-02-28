<!--Zalogajcic
    Copyright (C) 2021, Team Zalogajcic

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.-->
    
<?php

$name = "";
$last_name = "";
$phone_num = "";
$email = "";
$pass = "";
$pass_confirm = "";

function try_input($data)
{
    $data = trim($data); // Remove unnecessary characters at the beginning and at the end of the string
    $data = stripslashes($data); // Un-quote a quoted string
    $data = htmlspecialchars($data); // Convert special characters to HTML format

    return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Check name

    if(empty($_POST["name"]))
    {
        $name_err = "Niste upisali ime.";
    }
    elseif(!preg_match("/^[a-zA-Z- ]*$/", $_POST["name"]))
    {
        $name_err = "Ime sadrži pogrešne karaktere.";
    }
    elseif(strlen($_POST["name"]) > 100) // TODO change condition according to database
    {
        $name_err = "Broj karaktera je prevelik.";
    }
    else
    {
        $name = try_input($_POST["name"]); 
    }

    // Check surname

    if(empty($_POST["last-name"]))
    {
        $last_name_err = "Niste upisali prezime.";
    }
    elseif(!preg_match("/^[a-zA-Z- ]*$/", $_POST["last-name"]))
    {
        $last_name_err = "Prezime sadrži pogrešne karaktere.";
    }
    elseif(strlen($_POST["last_name"]) > 100) // TODO change condition according to database
    {
        $last_name_err = "Broj karaktera je prevelik.";
    }
    else
    {
        $last_name = try_input($_POST["last-name"]); 
    }

    // Check phone number

    if(empty($_POST["phone-num"]))
    {
        $num_err = "Niste upisali broj telefona.";
    }
    elseif(!preg_match("/^[0-9+]*$/", $_POST["phone-num"]))
    {
        $num_err = "Broj telefona sadrži pogrešne karaktere.";
    }
    elseif(strlen($_POST["phone-num"]) > 13) // TODO change condition according to database
    {
        $num_err = "Broj karaktera je prevelik.";
    }
    else
    {
        $phone_num = try_input($_POST["phone-num"]); 
    }

    // Check email

    if(empty($_POST["email"]))
    {
        $email_err = "Niste upisali mejl.";
    }
    elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
    {
        $email_err = "Upisali ste pogrešan format mejl adrese.";
    }
    else
    {
        $email = try_input($_POST["email"]); 
    }

    // Check password

    if(empty($_POST["pass"]))
    {
        $pass_err = "Niste upisali lozinku.";
    }
    else
    {
        $pass = try_input($_POST["pass"]); 
    }

    // Check confirmation password

    if(empty($_POST["pass-confirm"]))
    {
        $pass_confirm_err = "Niste upisali podtvrdnu lozinku.";
    }
    elseif($_POST["pass"] != $_POST["pass-confirm"])
    {
        $pass_confirm_err = "Upisali ste pogrešnu lozinku.";
    }
    else
    {
        $pass_confirm = try_input($_POST["pass-confirm"]); 
    }

    header("login-form.php", true, 301);
}

?>

<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <link rel="stylesheet" href="auth-form-styles.css">
    <body>
        <form class="auth-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"> <!-- htmlspecialchars() for security reasons -->
            <div id="bio">
                <div id="bio-personal">
                    <label for="name"><b>Ime</b></label>

                    <div class="bio-input">
                        <input class="auth-input" type="text" placeholder="Petar" name="name" id="name" value="<?php echo $name;?>">
                        <span class="error"><?php echo $name_err;?></span>
                    </div>
                    
                    <label for="last-name"><b>Prezime</b></label>

                    <div class="bio-input">
                        <input class="auth-input" type="text" placeholder="Petrovic" name="last-name" id="last-name" value="<?php echo $last_name;?>">
                        <span class="error"><?php echo $last_name_err;?></span>
                    </div>
                    
        
                    <label for="phone-num"><b>Broj telefona</b></label>

                    <div class="bio-input">
                        <input class="auth-input" type="text" placeholder="+381*********" name="phone-num" id="phone-num" value="<?php echo $phone_num;?>">
                        <span class="error"><?php echo $num_err;?></span>
                    </div>
                </div>
                <div id="bio-border"></div> <!-- A border which separates the form into two parts; for aesthetics pusposes -->
                <div id="bio-on-web">
                    <label for="email"><b>E-mail adresa</b></label>

                    <div class="bio-input">
                        <input class="auth-input" type="text" placeholder="sajt@primer.rs" name="email" id="email" value="<?php echo $email;?>">
                        <span class="error"><?php echo $email_err;?></span>
                    </div>
                    
                    <label for="pass"><b>Lozinka</b></label>

                    <div class="bio-input">
                        <input class="auth-input" type="password" placeholder="hello,world!" name="pass" id="pass" value="<?php echo $pass;?>">
                        <span class="error"><?php echo $pass_err;?></span>
                    </div>
                    
                    <label for="pass-confirm"><b>Podtvrdite lozinku</b></label>

                    <div class="bio-input">
                        <input class="auth-input" type="password" placeholder="hello,world!" name="pass-confirm" id="pass-confirm">
                        <span class="error"><?php echo $pass_confirm_err;?></span>
                    </div>
                </div>
            </div>
            <div id="terms">
                <input class="checkbox" type="checkbox" required></input>
                <h6>Registracijom podtvrđujem da se slažem sa <a class="link" href="#">ulslovima</a> korišćenja naših usluga</h6>
            </div>

            <button type="submit" class="btn">Registrujte se</button>
        </form>
    </body>
</html>