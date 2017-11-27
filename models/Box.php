<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aetbox".
 *
 * @property integer $boxnoid
 * @property integer $boxnumber
 * @property integer $aetscreensscreenid
 *
 * @property Box $aetscreensscreen
 * @property Box[] $boxes
 * @property Aettext[] $aettexts
 */
class Box extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aetbox';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['boxnumber', 'aetscreensscreenid'], 'required'],
            [['boxnumber', 'aetscreensscreenid'], 'integer'],
            [['aetscreensscreenid'], 'exist', 'skipOnError' => true, 'targetClass' => Box::className(), 'targetAttribute' => ['aetscreensscreenid' => 'aetscreensscreenid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'boxnoid' => 'Boxnoid',
            'boxnumber' => 'Boxnumber',
            'aetscreensscreenid' => 'Aetscreensscreenid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAetscreensscreen()
    {
        return $this->hasOne(Box::className(), ['aetscreensscreenid' => 'aetscreensscreenid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBoxes()
    {
        return $this->hasMany(Box::className(), ['aetscreensscreenid' => 'aetscreensscreenid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAettexts()
    {
        return $this->hasMany(Aettext::className(), ['aetboxboxnoid' => 'boxnoid']);
    }
}
