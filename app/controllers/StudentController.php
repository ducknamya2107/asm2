<?php
namespace App\Controllers;
use App\Models\Student;
class StudentController extends BaseController
{
    protected $student;
    public function __construct()
    {
        $this->student = new Student();
    }
    // function getStudent() {
    //     $students = new Student();
    //     $data = $students->getListStudent();
    //     return $this->render('student.index',compact('data'));
    // }
    public function index()
    {
        $objCate = new Student();
        $data = $objCate->getListStudent();
//        var_dump($data);
//        include 'app/views/category/index.php';
        return $this->render('student.index', compact('data'));
    }
    public function destroy($id){
        $check = $this->student->deleteStudent($id);
        if($check){
            flash('success', 'Xóa thành công','index');
        }
    }
    
//     public function index()
//     {
//         $objCate = new Category();
//         $data = $objCate->loadAllDataCategory();
// //        var_dump($data);
// //        include 'app/views/category/index.php';
//         return $this->render('category.list', compact('data'));
//     }
}
// include_once 'app/models/Course.php';
// include_once 'app/controllers/BaseController.php';
