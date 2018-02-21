<?php

class BikeType extends BaseModel
{
    const TABLENAME = '`bikeType`';

    protected $schema = [
        'id'          => [ 'type' => BaseModel::TYPE_INT ],
        'createdAt'   => [ 'type' => BaseModel::TYPE_STRING ],
        'updatedAt'   => [ 'type' => BaseModel::TYPE_STRING ],
        'name'        => [ 'type' => BaseModel::TYPE_STRING ],
    ];
}
?>