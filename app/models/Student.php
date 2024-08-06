<?php

namespace App\Models;

class Student extends BaseModel
{
    public function getListStudent() {
        $sql = "SELECT * FROM sinh_vien";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function deleteStudent($id){
        $sql = "DELETE FROM sinh_vien WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}

?>