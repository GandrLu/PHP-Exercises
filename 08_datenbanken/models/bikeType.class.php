<?php

class BikeType

{
    const TABLENAME = '`bikeType`';
    private $data;

    public function __construct($id, $type)
    {
        $this->data['id'] = $id;
        $this->data['type'] = $type;
    }

    public function __get($key)
    {
        if(isset($this->data[$key]))
        {
            return $this->data[$key];
        }
    }
}