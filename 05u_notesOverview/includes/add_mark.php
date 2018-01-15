<? if (isset($error)) : ?>
    <div class="error">
    <?=$error?>
    </div>
<? endif; ?>

<form action="" method="post">

    <div>
        <label for="examName">Name of exam</label>
        <input type="text" name="ename" id="examName"
        value="<?=isset($error) && isset($_POST['ename']) ? htmlspecialchars($_POST['ename']) : ''?>">
    </div>

    <div>
        <label for="examDate">Date of exam</label>
        <input type="date" name="edate" id="examDate"
        value="<?=isset($error) && isset($_POST['edate']) ? $_POST['edate'] : ''?>">
    </div>
  
    <div>
        <label for="examMark">Mark of exam</label>
        <input type="text" name="emark" id="examMark"
        value="<?=isset($error) && isset($_POST['emark']) ? htmlspecialchars($_POST['emark']) : ''?>">
    </div>

<!--         [1.0, 1.3, 1.7, 2.0, 2.3, 2.7, 3.0, 3.3, 3.7, 4.0, 5.0]-->


        <label for="markInPercent">Is mark in percent?</label>
        <input type="checkbox" name="percentmark" id="markInPercent" value="true"
        value="<?=isset($error) && isset($_POST['percentmark']) ? $_POST['percentmark'] : ''?>">


    <label for="attempt">Attempt</label>
    <select name="attempt" id="attempt">
        <? foreach([ 1, 2, 3] as $attempt) : ?>
            <option value="<?=$attempt?>" <?=isset($error)&&$_POST['attempt']===$attempt?'selected':''?> >
                <?=$attempt?>
            </option>
        <? endforeach; ?>
    </select>

    <input type="submit" name="sendForm" value="Add new exam result">

</form>