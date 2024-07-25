<?php
namespace App\Controllers;

use App\Models\StudentModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class StudentController extends BaseController
{
    public function index()
    {
        $student = new StudentModel();
        $data['students'] = $student->findAll();
        return view('students/index.php', $data);
    }
}
