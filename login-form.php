<!--Zalogajcic
    Copyright (C) 2021, Team "Zalogajcic"

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
        <form class="auth-form">
            
            <label for="email"><b>E-mail adresa</b></label>
            <input class="auth-input" type="text" placeholder="sajt@primer.rs" name="email" id="email" required>
            
            <label for="psw"><b>Lozinka</b></label>
            <input class="auth-input" type="password" placeholder="hello_world_!" name="psw" id="psw" required>

            <h6>Zaboravili ste lozinku? <a class="link" href="#">Kliknite ovde.</a></h6>
            
            <button type="submit" class="btn" id="btn-reg">Ulogujte se</button>
        </form>
    </body>
</html>