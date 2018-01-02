<div class="form-wrap">
    <form method="post" action="<?$_SERVER['PHP_SELF']?>" class="customer-form">
        <div class="title">Neuer Kunde</div>

        <label for="firstName">Vorname</label>
        <input type="text" name="firstName" id="firstName">

        <label for="lastName">Nachname</label>
        <input type="text" name="lastName" id="lastName">

        <label for="email">eMail</label>
        <input type="email" name="email" id="email">

        <label for="phone">Telefon</label>
        <input type="text" name="phone" id="phone">

        <label for="street">Straße</label>
        <input type="text" name="street" id="street">

        <label for="number">Hausnummer</label>
        <input type="text" name="number" id="number">

        <label for="zip">PLZ</label>
        <input type="text" name="zip" id="zip">

        <label for="city">Stadt</label>
        <input type="text" name="city" id="city">

        <input type="submit" value="Kunden anlegen" name="newCustomer">
    </form>    
</div>