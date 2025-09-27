<?php

namespace App\classes;

class Home
{
    public $message, $firstName, $lastName, $fullName, $firstNumber, $secondNumber, $thirdNumber;
    public $data = [];
    public $student = [];

    public function __construct()
    {
        $this->message = "Welcome to Home";
        $this->student = [
            0 => [
                'course_code' => 'CSE05121',
                'course_name' => 'Data Communication',
                'grade' => '3.75'
            ],
            1 => [
                'course_code' => 'CSE05125',
                'course_name' => 'Web Programming',
                'grade' => '3.50'
            ],
            2 => [
                'course_code' => 'CSE05127',
                'course_name' => 'Database Management System',
                'grade' => '4.00'
            ],
        ];
    }
    public function getAllStudent() {
        return $this->student;
    }
    public function index() {
        header('Location:action.php?page=home');
    }
}