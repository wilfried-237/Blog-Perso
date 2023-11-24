<?php
include 'model/blog.model.php';

if(isset($_GET['page']) && $_GET['page'] == "blog"){
    $listBlogPosts = listBlogPosts();
}

$all = listBlogPosts();