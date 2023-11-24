<?php
include("controller/listview.controller.php");
?>


<div>
    <br>
    <div class="center">
        <img src="img/<?= $_GET['image'] ?>" class="img-fluid" alt="" />
    </div>
    <h2>
        <?= $_GET['title'] ?>
    </h2>
    <p>
        <?= $_GET['desc'] ?>
    </p>
</div>
</form>
</div>