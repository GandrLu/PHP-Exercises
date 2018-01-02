<div class="tables"> 

    <form method="post" action="#" class="pickTable">
        <button type="submit" name="pick" value="bikes">
            Fahrräder
        </button>
        <button type="submit" name="pick" value="customers">
            Kunden
        </button>
    </form>
    <div class="table-wrapper">
        <? 
            switch($pickedTable) 
            {
                case 'customers':
                include VIEWPATH.'tables/showCustomers.php';
                break;
                default:
                include VIEWPATH.'tables/showBikes.php';
                break;
            }
        ?>
    </div>
</div>