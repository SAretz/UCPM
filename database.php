<?php

class Database {
    private $config = '';
    private $con = '';
    private $query = '';

    public $where = null;
    public $orderBy = null;
    public $orderDirection = "DESC";

    function __construct() {
        $config = include(__DIR__.'/config.php');
        $this->config = $config['database'];

        $this->con = mysqli_connect($this->config['host'], $this->config['username'], $this->config['password'], $this->config['database']);
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
        if (!mysqli_set_charset($this->con, "utf8")) {
            printf("Error loading character set utf8: %s\n", mysqli_error($this->con));
            exit();
        }
    }

    public function RawQuery($query) {
        $returnResult = array();
        $result = $this->con->query($query);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($returnResult, $row);
            }
        }

        $this->Clear();
        return $returnResult;
    }

    public function Select($obj) {
        $type = get_Class($obj);
        $returnResult = array();

        $table = $obj->GetTableName();
        $sql = "SELECT * FROM `" . $table . "`" . $this->Where() . $this->OrderBy();
        $result = $this->con->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $newObj = new $type;
                foreach ($row as $key => $value) {
                    $newObj->$key = $value;
                }
                array_push($returnResult, $newObj);
            }
        }

        $this->Clear();
        return $returnResult;
    }

    public function SelectOne($obj, $id) {
        $this->where = array("ID" => $id);
        $result = $this->Select($obj);

        if(count($result) > 0)
            return $result[0];
        return null;
    }

    public function Insert($obj) {
        $table = $obj->GetTableName();
        $data = get_object_vars($obj);

        $this->_buildInsert($table, $data);

        $stmt = $this->_prepareQuery($this->query);
        $status = $stmt->execute();

        $error = $stmt->error;
        $count = $stmt->affected_rows;
        $id = $stmt->insert_id;
        $obj->ID = $id;

        $model = new stdClass();

        if ($status && $error == '' && $count > 0 && $id > 0) {
            $model->data = $obj;
        }
        else {
            $model->data = null;
            $model->status->state = "danger";
            $model->status->message = $error;
        }
        return $model;
    }

    private function _buildInsert($tableName, $insertData)
    {
        array_shift($insertData);
        $keys = array_keys($insertData);
        $values = array_values($insertData);

        $sql  = "INSERT INTO ".$tableName;
        $sql .= " (`".implode("`, `", $keys)."`) VALUES";
        $sql .= " ('".implode("', '", $values)."')";

        $this->query = $sql;
    }

    public function Update($obj) {
        $table = $obj->GetTableName();
        $data = get_object_vars($obj);

        $this->_buildUpdate($table, $data);

        $stmt = $this->_prepareQuery($this->query);
        $status = $stmt->execute();

        $error = $stmt->error;

        $model = new BaseViewModel();

        if ($status && $error == '') {
            $model->data = $obj;
        }
        else {
            $model->data = null;
            $model->status->state = "danger";
            $model->status->message = $error;
        }
        return $model;
    }

    private function _buildUpdate($tableName, $updateData)
    {
        $id = $updateData['ID'];
        array_shift($updateData);

        $sql  = "UPDATE ".$tableName." SET ";
        foreach($updateData as $key => $value) {
            $sql .= "`". $key."` = '". $value."', ";
        }
        $sql = substr($sql, 0, -2);
        $sql .= " WHERE ID = ".$id;

        $this->query = $sql;
    }

    public function Delete($obj) {
        $table = $obj->GetTableName();
        $data = get_object_vars($obj);

        $this->_buildDelete($table, $data);

        $stmt = $this->_prepareQuery($this->query);
        $status = $stmt->execute();

        $error = $stmt->error;

        $model = new BaseViewModel();

        if (!($status && $error == '')) {
            $model->status->state = "danger";
            $model->status->message = $error;
        }
        return $model;
    }

    private function _buildDelete($tableName, $updateData)
    {
        $id = $updateData['ID'];
        array_shift($updateData);

        $sql  = "DELETE FROM ".$tableName." WHERE ID = ".$id;

        $this->query = $sql;
    }

    private function _prepareQuery()
    {
        if (!$stmt = $this->con->prepare($this->query)) {
            $msg = $this->con->error . " query: " . $this->query;
            $num = $this->con->errno;
            throw new Exception($msg, $num);
        }
        return $stmt;
    }


    public function Clear() {
        $this->where = null;
        $this->orderBy = null;
        $this->orderDirection = "DESC";
    }

    private function Where() {
        $where = '';

        if(!is_null($this->where)) {
            $where = " WHERE ";

            if(is_array($this->where)) {
                $tmp = array();
                foreach($this->where as $key => $value) {
                    if(is_array($value)) {
                        $tmp[] = "(".$key." = '".$value[0]."'";
                        for($i = 1; $i < count($value); $i++) {
                            $tmp[count($tmp) - 1] .= " or ".$key." = '".$value[$i]."'";
                        }
                        $tmp[count($tmp) - 1] .= ")";
                    }
                    else {
                        $tmp[] = $key." = '".$value."'";
                    }
                }
                $where .= implode(' and ', $tmp);
            }
            else
                $where .= $this->where;
        }

        return $where;
    }

    private function OrderBy() {
        $orderBy = '';

        if(!is_null($this->orderBy)) {
            $orderBy = " ORDER BY ";

            if(is_array($this->orderBy)) {
                $tmp = array();
                foreach($this->orderBy as $key => $value) {
                    $tmp[] = $key." ".$value;
                }
                $orderBy .= implode(', ', $tmp);
            }
            else
                $orderBy .= $this->orderBy;
        }

        return $orderBy;
    }
}