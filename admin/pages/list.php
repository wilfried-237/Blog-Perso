<?php
include 'controller/list.controller.php';

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

$listposts = listPagination($debut,$nbre_element);


?>
<div class="pt-3">
<?php foreach ($listposts as $post) : ?>
    <div class="rows">
        <div class="w-100 mx-auto">


            <div class="row">
                <div class="col-10">
                    <!--Affichage de l'aperçu du post-->
                    <h4 class="white-text bg-primary">
                        <?= $post['title'] ?>
                    </h4>
                    <p class="">

                        <?php

                        if (strlen($post['description']) > 10)
                            $post['description'] = substr($post['description'], 0, 150) . '...';

                        echo $post['description'];

                        ?>

                    </p>

                </div>
                <div class="col-2 d-grid gap-2">
                    <!--Affichage de l'image du post-->
                    <img src="img/<?= $post['image'] ?>" class="img-fluid" alt="" />

                    <a class="btn waves-effect waves-light bg-primary white-text" href="index.php?page=listview&id=<?= $post['id'] ?>&title=<?= $post['title'] ?>&desc=<?= $post['description'] ?>&image=<?= $post['image'] ?>">Lire</a>

                    <a class="btn waves-effect waves-light bg-primary white-text" href="index.php?page=list&action=delete&id=<?= $post['id'] ?>">Supprimer</a>

                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- pagination	 -->
<ul class="pagination justify-content-center" style="width:100%; margin-top: 50px;">
            <li class="page-item <?php if ($num == 1) {
                    echo 'disabled';
                } ?>"><a href="index.php?page=list&num=<?= $num - 1 ?>" class="page-link">Previous</a></li>
            <?php for ($i = 1; $i <= $nbre_page; $i++) { ?>

                <li class="page-item <?php if ($num == $i) {
                                echo "bg-primary active";
                            } ?>"><a href="index.php?page=list&num=<?= $i ?>" class="page-link text-decoration-none"><?= $i ?></a></li>

            <?php } ?>
            <li class="page-item waves-effect <?php if ($num == $nbre_page) {
                                        echo "disabled";
                                    } ?>"><a href="index.php?page=list&num=<?= $num + 1 ?>" class="page-link">Next</a></li>
        </ul>
</div>