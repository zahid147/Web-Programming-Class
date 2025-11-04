<?php
require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\Blog;

$category = new Category();
$categories = $category->getAllCategory();

if (isset($_GET['page'])) {
    if($_GET['page']=='home') {
        $blog = new Blog();
        $blogs = $blog->getLastThreeBlog();
        include 'pages/home.php';
    }
    elseif ($_GET['page']=='about') {
        include 'pages/about.php';
    }
    elseif ($_GET['page']=='contact') {
        include 'pages/contact.php';
    }
    elseif ($_GET['page']=='blog-category') {
        $categoryId = $_GET['id'];
        $blog = new Blog();
        $categoryBlogs = $blog->getBlogByCategoryId($categoryId);
        include 'pages/category.php';
    }
    elseif ($_GET['page']=='blog-detail') {
        $blogId = $_GET['id'];
        $blog = new Blog();
        $singleBlog = $blog->getBlogById($blogId);
        include 'pages/detail.php';
    }
}