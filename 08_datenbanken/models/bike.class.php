<?php

class Bike extends BaseModel
{
    const TABLENAME = '`bike`';

    protected $schema = [
        'id'          => [ 'type' => BaseModel::TYPE_INT ],
        'createdAt'   => [ 'type' => BaseModel::TYPE_STRING ],
        'updatedAt'   => [ 'type' => BaseModel::TYPE_STRING ],
        'type'        => [ 'type' => BaseModel::TYPE_INT],
        'name'        => [ 'type' => BaseModel::TYPE_STRING ],
        'customer'    => [ 'type' => BaseModel::TYPE_INT ]
    ];
} 
?>