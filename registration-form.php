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

<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <link rel="stylesheet" href="auth-form-styles.css">
    <body>
        <!--<form class="auth-form" action="registration.php" method="POST">-->
        <!--<form class="auth-form">-->
        <form class="auth-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div id="bio">
                <div id="bio-personal">
                    <label for="name"><b>Ime</b></label>
                    <input class="auth-input" type="text" placeholder="Petar" name="name" id="name" required>
                    
                    <label for="last-name"><b>Prezime</b></label>
                    <input class="auth-input" type="text" placeholder="Petrović" name="last-name" id="last-name" required>
        
                    <label for="phone-num"><b>Broj telefona</b></label>
                    <input class="auth-input" type="text" placeholder="+381*********" name="phone-num" id="phone-num" required>
                </div>
                <div id="bio-border"></div> <!-- Granica izmedju dva kontejnera; nema uloge, samo se sluzi kao ukras -->
                <div id="bio-on-web">
                    <label for="email"><b>E-mail adresa</b></label>
                    <input class="auth-input" type="text" placeholder="sajt@primer.rs" name="email" id="email" required>
                    
                    <label for="pass"><b>Lozinka</b></label>
                    <input class="auth-input" type="password" placeholder="hello,world!" name="pass" id="pass" required>
                    
                    <label for="pass-confirm"><b>Podtvrdite lozinku</b></label>
                    <input class="auth-input" type="password" placeholder="hello,world!" name="pass-confirm" id="pass-confirm" required>
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