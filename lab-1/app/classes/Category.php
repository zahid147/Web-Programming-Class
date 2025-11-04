<?php
namespace App\classes;
class Category
{
    public array $categories = [];
    public function __construct()
    {
        $this->categories = [
            ["id"=>1,"name"=>"National"],
            ["id"=>2,"name"=>"International"],
            ["id"=>3,"name"=>"Education"],
            ["id"=>4,"name"=>"Sports"],
            ["id"=>5,"name"=>"Entertainment"],
            ["id"=>6,"name"=>"Crime"]
        ];
    }
    public function getAllCategory(): array
    { return $this->categories; }
}
