<?php

namespace App\classes;

class Home
{
    public $message;
    public $data = [];

    public function __construct()
    {
        $this->message = "Welcome to Home";
        $this->data = [
            "Dhaka" => [
                "Dhaka" => [
                    "Dhanmondi",
                    "Uttara",
                    "Mirpur"
                ],
                "Gazipur" => [
                    "Joydebpur",
                    "Tongi",
                    "Kaliakair"
                ],
                "Narayanganj" => [
                    "Sadar",
                    "Fatullah",
                    "Sonargaon"
                ]
            ],

            "Chattogram" => [
                "Chattogram" => [
                    "Kotwali",
                    "Pahartali",
                    "Panchlaish"
                ],
                "Cox's Bazar" => [
                    "Sadar",
                    "Teknaf",
                    "Ukhiya"
                ],
                "Feni" => [
                    "Sadar",
                    "Parshuram",
                    "Fulgazi"
                ]
            ],

            "Rajshahi" => [
                "Rajshahi" => [
                    "Boalia",
                    "Motihar",
                    "Shah Makhdum"
                ],
                "Pabna" => [
                    "Sadar",
                    "Ishwardi",
                    "Chatmohar"
                ],
                "Naogaon" => [
                    "Sadar",
                    "Manda",
                    "Raninagar"
                ]
            ]
        ];
    }
    public function getAllData() {
        return $this->data;
    }
    public function index() {
        header('Location:action.php?page=home');
    }
}