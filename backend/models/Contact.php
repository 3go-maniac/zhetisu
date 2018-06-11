<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $phone
 * @property string $email
 * @property string $address
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone', 'email', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Телефон',
            'email' => 'Email',
            'address' => 'Адрес',
        ];
    }

    public function getPhone()
    {
        return static::find()->select('phone')->one()->phone;
    }

    public function getEmail()
    {
        return static::find()->select('email')->one()->email;
    }

    public function getAddress()
    {
        return static::find()->select('address')->one()->address;
    }
}
