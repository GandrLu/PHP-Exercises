<div class="login-wrapper">
    <div class="login-modal">
        <div class="img-shadow"></div>
        <div class="img"></div>
        <div class="title">REGISTRIERUNG</div>

<form action="" method="post">

    <div>
        <label for="first-name">Vorname</label>
        <input type="text" name="fname" id="first-name"
        value="<?=isset($error) && isset($_POST['fname']) ? htmlspecialchars($_POST['fname']) : ''?>">
    </div>

    <div>
        <label for="last-name">Nachname</label>
        <input type="text" name="lname" id="last-name"
        value="<?=isset($error) && isset($_POST['lname']) ? htmlspecialchars($_POST['lname']) : ''?>">
    </div>

    <div>
        <label for="username">Benutzername</label>
        <input type="text" name="username" id="username"
        value="<?=isset($error) && isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''?>">
    </div>

    <div>
        <label for="e-mail">E-Mail</label>
        <input type="email" name="email" id="e-mail"
        value="<?=isset($error) && isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''?>">
    </div>

    <div>
    <label for="loginPassword">Passwort</label>
            <input type="password" name="password" id="loginPassword" placeholder="Passwort">
            
    </div>

    <div>
    <label for="loginPassword">Passwort wiederholen</label>
            <input type="password" name="password" id="loginPassword" placeholder="Passwort"
            value="<?=isset($error) && isset($_POST['loginPassword']) ? htmlspecialchars($_POST['loginPassword']) : ''?>">

    </div>

    <input type="submit" name="sendForm" value="Neue Person anlegen">

</form>
            
<div class="clear"></div>
        </form>
    </div>
</div>