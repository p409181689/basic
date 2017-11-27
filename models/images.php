<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aetimages".
 *
 * @property integer $imageid
 * @property integer $imagepath
 * @property string $created
 * @property string $updated
 * @property string $deleted
 * @property integer $aetscreensscreenid
 *
 * @property images $aetscreensscreen
 * @property images[] $images
 */
class images extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aetimages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imagepath', 'created', 'updated', 'deleted', 'aetscreensscreenid'], 'required'],
            [['imagepath', 'aetscreensscreenid'], 'integer'],
            [['created', 'updated', 'deleted'], 'safe'],
            [['aetscreensscreenid'], 'exist', 'skipOnError' => true, 'targetClass' => images::className(), 'targetAttribute' => ['aetscreensscreenid' => 'aetscreensscreenid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'imageid' => 'Imageid',
            'imagepath' => 'Imagepath',
            'created' => 'Created',
            'updated' => 'Updated',
            'deleted' => 'Deleted',
            'aetscreensscreenid' => 'Aetscreensscreenid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAetscreensscreen()
    {
        return $this->hasOne(images::className(), ['aetscreensscreenid' => 'aetscreensscreenid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(images::className(), ['aetscreensscreenid' => 'aetscreensscreenid']);
    }
}
