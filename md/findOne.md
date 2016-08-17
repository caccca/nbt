ActiveRecord::find()->one();

```php
ActiveRecord::findOne($condition);

// 如果$condition 不是关联数组 $condition = [static::primaryKey()[0] => $condition]
ActiveRecord::findByCondition($condition)->one();

ActiveRecord::find()->andWhere($condition)->one(); 

// ActiveQuery->where = $condition
ActiveQuery->one(); 

// 如果$db=null $db = 'yii\db\Connection'
ActiveQuery->createCommand($db)->queryOne(); 


Connection->createCommand(QueryBuider->build(ActiveQuery)[0], QueryBuider->build(ActiveQuery)[1])->queryOne();

Command->bindValues(QueryBuider->build(ActiveQuery)[1])->queryOne();

// protected function queryInternal
// 前面一大堆代码仅仅为了创建sql语句, 这里才是最终查询数据库
Command->queryInternal('fetch', Command->fetchMode)


```