<?php

namespace App\Models;

class Student extends BaseModel
{
    public function getListStudent() {
        $sql = "SELECT * FROM sinh_vien";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}

?>