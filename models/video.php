<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aetvideo".
 *
 * @property integer $videoid
 * @property integer $videopath
 * @property string $created
 * @property string $updated
 * @property string $deleted
 * @property integer $aetscreensscreenid
 */
class video extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aetvideo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['videopath', 'created', 'updated', 'deleted', 'aetscreensscreenid'], 'required'],
            [['videopath', 'aetscreensscreenid'], 'integer'],
            [['created', 'updated', 'deleted'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'videoid' => 'Videoid',
            'videopath' => 'Videopath',
            'created' => 'Created',
            'updated' => 'Updated',
            'deleted' => 'Deleted',
            'aetscreensscreenid' => 'Aetscreensscreenid',
        ];
    }
}
