<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Smsevent]].
 *
 * @see Smsevent
 */
class SmseventQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Smsevent[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Smsevent|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
