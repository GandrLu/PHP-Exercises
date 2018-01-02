<?

class bike
{
    const TABLENAME = '`bike`';
    private $data;

    public function __construct($id, $type, $name, $customer)
    {
        $this->data['id'] = $id;
        $this->data['type'] = $type;
        $this->data['name'] = $name;
        $this->data['customer'] = $customer;
    }

    public function __get($key)
    {
        if(isset($this->data[$key]))
        {
            return $this->data[$key];
        }
    }

    public static function find($where = '')
    {
        $db = $GLOBALS['db'];
        $result = null;

        try
        {
            $sql ='SELECT * FROM ' . self::TABLENAME;
        
            if (!empty($where))
            {
            $sql .= ' WHERE ' . $where . ';';
            }
        
            $result = $db->query($sql)->fetchAll();
        }
        catch(\PDOException $e)
        {
            die('Select statement failed: ' . $e->getMessage());
        }

        return $result;
    }

    public function insert()
    {
        $db = $GLOBALS['db'];

        try
        {
            $sql = 'INSERT INTO' : self::TABLENAME . ' (type,name,customer) VALUES (:type,:name,:customer)';

            $statement = $db->prepare($sql);
            $statement->bindParam(':type', $this->type);
            $statement->bindParam(':name', $this->name);
            $statement->bindParam(':customer', $this->customer);

            $statement->exexute();
            return true;
        }
        catch(\PDOException $e)
        {
            die('Error inserting bike: '.$e->getMessage());
        }
        return false;
    }

    public function delete()
    {
        $db = $GLOBALS['db'];

        try
        {
            $sql = 'DELETE FROM' . self::TABLENAME . 'WHERE id = ' . $this->id;
            $db->exec($sql);
            return true;
        }
        catch(\PDOException $e)
        {
            die('Error deleting bike: '.$e->getMessage());
        }
        return false;
    }
    
}