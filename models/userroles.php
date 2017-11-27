<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aetuserroles".
 *
 * @property integer $userrolesid
 * @property string $rolename
 */
class userroles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aetuserroles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rolename'], 'required'],
            [['rolename'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userrolesid' => 'Userrolesid',
            'rolename' => 'Rolename',
        ];
    }
}
