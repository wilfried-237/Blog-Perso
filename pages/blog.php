<?php
include("controller/blog.controller.php");

//PAGINATION
$nbre_element = 3;
$nbre_page = ceil(count($all)/$nbre_element);

if(isset($_GET['num'])){
    
    if($_GET['num']<1){
        $num = 1;
    }else if($_GET['num']>$nbre_page){
        $num = $nbre_page;
    }else{
        $num = $_GET['num'];
    }
}else{
    $num = 1;
}

$debut=($num-1)*$nbre_element;

$posts = blogPagination($debut,$nbre_element);

?>


<div class="w-100 mx-auto pb-3">
    <h1 class=" pt-3 pb-3">Blog</h1>


    <?php foreach ($posts as $post) : ?>
        <div class="row">

            <div class="col-sm-8 col-md-10 col-lg-10">
                <h4 class="bg-primary white-text">
                    <?= $post['title'] ?>
                </h4>
                <!--Affichage de l'aperçu du post-->
                <p>

                    <?php

                    strlBlog($post['description']);

                    ?>
                </p>
            </div>
            <div class="col-sm-4 col-md-2 col-lg-2 d-grid gap-3">
                <!--Affichage de l'image du post-->
                <img src="admin/img/<?= $post['image'] ?>" class="materialboxed img-fluid" alt="" />

                <a class="btn btn-primary" href="index.php?page=view&id=<?= $post['id'] ?>&image=<?= $post['image'] ?>&title=<?= $post['title'] ?>&desc=<?= $post['description'] ?>">Lire Plus</a>

            </div>
        </div>
    <?php endforeach; ?>

        <!-- pagination	 -->
        <ul class="pagination justify-content-center" style="width:100%; margin-top: 50px;">
            <li class="page-item <?php if ($num == 1) {
                    echo 'disabled';
                } ?>"><a href="index.php?page=blog&num=<?= $num - 1 ?>" class="page-link">Previous</a></li>
            <?php for ($i = 1; $i <= $nbre_page; $i++) { ?>

                <li class="page-item <?php if ($num == $i) {
                                echo "bg-primary active";
                            } ?>"><a href="index.php?page=blog&num=<?= $i ?>" class="page-link text-decoration-none"><?= $i ?></a></li>

            <?php } ?>
            <li class="page-item waves-effect <?php if ($num == $nbre_page) {
                                        echo "disabled";
                                    } ?>"><a href="index.php?page=blog&num=<?= $num + 1 ?>" class="page-link">Next</a></li>
        </ul>
    

</div>