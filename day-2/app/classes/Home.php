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
                'name' => 'John Doe',
                'mobile' => [
                    'personal' => '017899',
                    'guardian' => '019899'
                ],
                'email' => 'jhon@gmail.com'
            ],
            1 => [
                'name' => 'Asad Ali',
                'mobile' => [
                    'personal' => '019559',
                    'guardian' => '015889'
                ],
                'email' => 'akasd@gmail.com'
            ],
            2 => [
                'name' => 'Khusu Hasi',
                'mobile' => [
                    'personal' => '013879',
                    'guardian' => '016877'
                ],
                'email' => 'khusu@gmail.com'
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