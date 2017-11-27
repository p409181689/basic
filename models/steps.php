<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aetsteps".
 *
 * @property integer $stepid
 * @property string $stepname
 * @property integer $aetusersuserid
 */
class steps extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aetsteps';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stepname', 'aetusersuserid'], 'required'],
            [['aetusersuserid'], 'integer'],
            [['stepname'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'stepid' => 'Stepid',
            'stepname' => 'Stepname',
            'aetusersuserid' => 'Aetusersuserid',
        ];
    }
}
