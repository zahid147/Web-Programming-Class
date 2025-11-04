<?php
namespace App\classes;
class Blog
{
    public array $blogs = [];
    public array $result = [];

    public function __construct()
    {
        $this->blogs = [
            ["id"=>1,"category_id"=>1,"title"=>"What is Lorem Ipsum?","description"=>"Lorem Ipsum is simply dummy text...","image"=>"11.jpg"],
            ["id"=>2,"category_id"=>2,"title"=>"Why do we use it?","description"=>"It is a long established fact...","image"=>"9.jpg"],
            ["id"=>3,"category_id"=>4,"title"=>"Where can I get some?","description"=>"There are many variations...","image"=>"10.jpg"],
        ];
    }
    public function getAllBlog(): array
    { return $this->blogs; }
    public function getLastThreeBlog(): array
    {
        rsort($this->blogs);
        return array_slice($this->blogs, 0, 3);
    }
    public function getBlogByCategoryId($categoryId): array
    {
        return array_filter($this->blogs, fn($b)=>$b['category_id']==$categoryId);
    }
    public function getBlogById($blogId) {
        foreach ($this->blogs as $blog) if($blog['id']==$blogId) return $blog;
    }
}
