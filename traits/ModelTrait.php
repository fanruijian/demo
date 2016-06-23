<?php
namespace app\traits;
use Yii;

trait ModelTrait {

	public function M($model, $id='') {
        $nsModel = 'app\models\\'.ucfirst($model);
        if ($id) {
            $id = (int) $id;
            $M = $nsModel::find()->asArray()->indexBy('id')->all();
            if (isset($M[$id])) return $M[$id];
            return array_shift($M);
        } else {
            $M = $nsModel::find()->asArray()->indexBy('id')->all();
        }
        return $M;
    }

    /**
     * unique 约束下的 save
     *
     * 若 $data 提供的条件已有持久化数据，则返回数据
     * 否则保存并返回新建的持久化数据（包括 id 号）
     */
    public function checkAndSave($model, $data) {
        $nsModel = 'app\models\\'.ucfirst($model);
        $M = $nsModel::findOne($data);
        if ($M) return $M->attributes;
        return $this->save($model, $data);
    }

    // try to save model
    public function save($model, $data=[], $validate=true) {
        $iData = array_merge($_POST, $_GET);
        $nsModel = 'app\models\\'.ucfirst($model);
        $model = new $nsModel;
        $pk = '';
        if (isset($iData['id'])) {
            $pk = $iData['id'];
        }
        isset($data['id']) && $pk = $data['id'];
        if ($pk) $model = $nsModel::findOne($pk);
        $attrs = array_merge($data, $iData);
        $model->attributes = $attrs;
        try {
            $data = array_merge($iData, $data);
            $model->load($data);
            $model->save($validate);
            $result = $model->attributes;
        } catch (yii\db\CDbException $e) {
            $this->NG($e->getMessage());
        }
        $errors = $model->getFirstErrors();
        if ($errors) {
            $this->NG('出错：'.array_values($errors)[0]);    
        }
        return $result;
    }

    public function saveData($model, $data=[], $validate=true) {
        $nsModel = 'app\models\\'.ucfirst($model);
        $model = new $nsModel;
        $pk = '';
        isset($data['id']) && $pk = $data['id'];
        if ($pk) $model = $nsModel::findOne($pk);
        $model->attributes = $data;
        try {
            $model->load($data);
            $model->save($validate);
            $result = $model->attributes;
        } catch (yii\db\CDbException $e) {
            $this->NG($e->getMessage());
        }
        $errors = $model->getFirstErrors();
        if ($errors) {
            $this->NG('出错：'.array_values($errors)[0]);    
        }
        return $result;
    }

    public function update($model, $where, $data=['status'=>0]) {
        $nsModel = 'app\models\\'.ucfirst($model);
        //update the whole table
        $no = $nsModel::updateAll($data, $where);
        // $msg = "update table $model from condition";
        // foreach ($where as $key => $value) {
        //     $msg1[] = "$key => $value";
        // }
        // $msg1 = implode(',', $msg1);
        // $msg = $msg.' {'.$msg1.'} into ';
        // foreach ($data as $key => $value) {
        //     $msg2[] = "$key => $value";
        // }
        // $msg2 = implode(',', $msg2);
        // $msg = $msg.' {'.$msg2.'}';
        // $this->log($msg);
    }

    /**
     * 按唯一键（组合unique字段）保存或更新记录
     *
     */
    public function saveOn($model, $where, $data) {
        $nsModel = 'app\models\\'.ucfirst($model);
        $exists = $this->getAll($model, $where);
        if (!empty($exists)) {
            $condition = [];
            foreach ($where as $k => $v) {
                $condition[] = "`$k`='$v'";
            }
            $condition = implode(' and ', $condition);
            $no = $nsModel::updateAll($data, $condition);
            $log = new \app\services\LogService();
            $log->logUp($model, $data, $data, false); 

            if ($no == 1) {
                return $this->getOne($model, $condition);
            }
            //返回影响的行数，可能为零
            return $no;
        } else {
            $model = new $nsModel;
            $model->attributes = $data;
            $result = $model->save(true);
            if (!$result) {
                return $model->getFirstErrors();
            } else {
                $result = $model->attributes;
            }
            return $result;
        }
    }

    /**
     * 查询相应数据表中的所有符合条件的数据
     */
    public function getAll($model, $where='', $indexBy='id', $asArray=true) {
        $nsModel = 'app\models\\'.$model;
        if ($asArray) {
            $ret = $nsModel::find()->where($where)->indexBy($indexBy)->asArray()->all();
        } else {
            $ret = $nsModel::findAll($where)->indexBy($indexBy);
        }
        return $ret;
    }

    public function getOne($model, $where=[]) {
        $all = $this->getAll($model, $where);
        return array_pop($all);
    }

    public function query($sql, $matrix=[], $row='all') {
        $db = \Yii::$app->db;
        $cmd = $db->createCommand($sql);
        if ($row=='all') {
            $datas = $cmd->queryAll();
        } else if ($row == 'one') {
            $datas = $cmd->queryOne();
        }
        if (!empty($matrix)) {
            $datas = $this->fieldsMap($matrix, $datas);
        }
        return $datas;
    }

    public function executeSql($sql) {
        $db = \Yii::$app->db;
        $cmd = $db->createCommand($sql);
        return $cmd->execute();
    }

    public function queryOne($sql) {
        return $this->query($sql, [], 'one');
    }

    public function queryAll($sql, $matrix=[]) {
        return $this->query($sql, $matrix, 'all');
    }

    public function modelize($tableName) {
        $parts = explode('_', $tableName);
        $parts = array_map('ucfirst', $parts);
        return implode('', $parts);
    }
} 
