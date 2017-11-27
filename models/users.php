<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aetusers".
 *
 * @property integer $userid
 * @property string $email
 * @property string $fname
 * @property string $lname
 * @property string $password
 * @property string $created
 * @property string $updated
 * @property string $deleted
 * @property integer $roleentitykey
 * @property string $secretkey
 */
class users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aetusers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'fname', 'lname', 'password', 'created', 'updated', 'deleted', 'roleentitykey', 'secretkey'], 'required'],
            [['created', 'updated', 'deleted'], 'safe'],
            [['roleentitykey'], 'integer'],
            [['email', 'fname', 'lname', 'password', 'secretkey'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userid' => 'Userid',
            'email' => 'Email',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'password' => 'Password',
            'created' => 'Created',
            'updated' => 'Updated',
            'deleted' => 'Deleted',
            'roleentitykey' => 'Roleentitykey',
            'secretkey' => 'Secretkey',
        ];
    }
}
