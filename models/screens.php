<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aetscreens".
 *
 * @property integer $screenid
 * @property string $screenname
 * @property integer $aetstepsstepid
 *
 * @property screens $aetstepsstep
 * @property screens[] $screens
 */
class screens extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aetscreens';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['screenname', 'aetstepsstepid'], 'required'],
            [['aetstepsstepid'], 'integer'],
            [['screenname'], 'string', 'max' => 255],
            [['aetstepsstepid'], 'exist', 'skipOnError' => true, 'targetClass' => screens::className(), 'targetAttribute' => ['aetstepsstepid' => 'aetstepsstepid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'screenid' => 'Screenid',
            'screenname' => 'Screenname',
            'aetstepsstepid' => 'Aetstepsstepid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAetstepsstep()
    {
        return $this->hasOne(screens::className(), ['aetstepsstepid' => 'aetstepsstepid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScreens()
    {
        return $this->hasMany(screens::className(), ['aetstepsstepid' => 'aetstepsstepid']);
    }
}
