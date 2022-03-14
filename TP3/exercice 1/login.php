<form id="login_form" action="connected.php" method="POST">
    <table>
        <tr>
            <th>Login :</th>
                <td><input type="text" name="login"></td>
                    </tr>
                    <tr>
                        <th>Mot de passe :</th>
                        <td><input type="password" name="password"></td>
                        </tr>
                    <tr>
                        <th></th>
                        <td><input type="submit" value="Se connecter..." /></td>
                    </tr>
    </table>
</form>

<form id="style_form" action="login.php" method="GET">
<select name="css">
<option value="style1">style1</option>
<option value="style2">style2</option>
</select>
<input type="submit" value="Appliquer" />
</form>

<?php 

$styledefaut= "style1"
echo '<link rel="stylesheet" href= "'.$styledefaut.'.css"/>';

if (isset($_GET['css'])) {
    $styledefaut = $_GET['css'];
    echo '<link rel="stylesheet" href= "'.$styledefaut.'.css"/>';
    echo $styledefaut."<br>";
}
else {
    setcookie("cookie1",$styledefaut,time()+600);
    echo $_COOKIE["cookie1"];
    echo '<link rel="stylesheet" href= "'.$_COOKIE["cookie1"].'.css"/>';

}


?>

