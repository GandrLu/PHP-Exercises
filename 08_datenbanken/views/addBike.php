<div class="form-wrap">
    <form method="post" action="<?$_SERVER['PHP_SELF']?>" class="bike-form">
        <div class="title">Neues Fahrrad</div>

        <label for="bikeName">Bezeichnung</label>
        <input type="text" name="name" id="bikeName">

        <label for="">Typ</label>
        <select name="bikeType" id="">
            <? foreach($bikeTypes as $bikeType) : ?>
                <option value="<?=$bikeType->id?>"><?=$bikeType->type?></option>
            <? endforeach; ?>
        </select>

        <label for="">Kunde</label>
        <select name="customer" id="">
            <? foreach($customers as $customer) : ?>
                <option value="<?=$customer->id?>"><?=$customer->lastName . ', ' . $customer->firstName?></option>
            <? endforeach; ?>
        </select>

        <input type="submit" value="Fahrrad anlegen" name="newBike">
    </form>    
</div>