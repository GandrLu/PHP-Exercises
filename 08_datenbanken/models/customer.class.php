<?php

class Customer extends BaseModel
{
    const TABLENAME = '`customer`';

    protected $schema = [
        'id'        => [ 'type' => BaseModel::TYPE_INT ],
        'createdAt' => [ 'type' => BaseModel::TYPE_STRING ],
        'updatedAt' => [ 'type' => BaseModel::TYPE_STRING ],
        'firstName' => [ 'type' => BaseModel::TYPE_STRING, 'min' => 2, 'max' => 45],
        'lastName'  => [ 'type' => BaseModel::TYPE_STRING, 'min' => 2, 'max' => 45],
        'phone'     => [ 'type' => BaseModel::TYPE_STRING ],
        'email'     => [ 'type' => BaseModel::TYPE_STRING ],
        'address'   => [ 'type' => BaseModel::TYPE_INT ],
    ];

}
?>