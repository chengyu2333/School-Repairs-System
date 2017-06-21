<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Repairs]].
 *
 * @see Repairs
 */
class RepairsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Repairs[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Repairs|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
