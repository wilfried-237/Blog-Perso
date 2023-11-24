<?php
include 'controller/dashboard.controller.php';
?>
<div class="row">
	<div class="col m12 l4 s12">
		<div class="card bg-primary">
			<div class="card-content white-text">
				<span class="card-title"></span>
				<h4>Publications</h4>
				<span class="card-title"><?= $countPosts ?></span>
			</div>
		</div>
	</div>
	<div class="col m12 l4 s12">
		<div class="card bg-danger">
			<div class="card-content white-text">
				<span class="card-title"></span>

				<h4>Commentaires</h4>
				<span class="card-title"><?= $countComments ?></span>
			</div>
		</div>
	</div>
	<div class="col m12 l4 s12">
		<div class="card bg-primary">
			<div class="card-content white-text">
				<span class="card-title"></span>

				<h4>Utilisateurs</h4>
				<span class="card-title"><?= $countUsers ?></span>
			</div>
		</div>
	</div>
</div>


<h1 class="">Commentaires non lus</h1>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="">Article</th>
			<th class="">Commentaires</th>
			<th class="">Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php $i = 1; ?>
		<?php foreach ($getComments as $getComment) : ?>
			<tr id="commentaire_<?= $i ?>">
				<td class=""><?= $getComment["post_id"] ?></td>
				<td class=""><?= $getComment["comment"] ?></td>
				<td class="d-grid gap-2">
					<a href="" id="comment_<?= $i ?>" class="btn-floating btn-small modal-trigger waves-effect waves-light green see_comment" data-target="modal<?= $i ?>" data-bs-toggle="modal" data-bs-target="#modal<?= $i ?>"><i class="material-icons">done</i></a>
					<a href="index.php?page=dashboard&action=deleteComment&id=<?= $getComment["id"] ?>" id="comment_<?= $i ?>" class="btn-floating btn-small waves-effect waves-light red see_comment"><i class="material-icons">delete</i></a>


					<div class="modal" id="modal<?= $i ?>">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<h4><?= $getComment["name"] ?></h4>
									<button type="button" class="btn-close text-danger" data-bs-dismiss="modal"></button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									<p><?= $getComment["comment"] ?></p>
								</div>

								<!-- Modal footer -->
								<div class="modal-footer">
									<a href="index.php?page=dashboard&action=deleteComment&id=<?= $getComment["id"] ?>" id="comment_<?= $i ?>" id="comment_<?= $i ?>" class="modal-action modal-close waves-effect waves-red btn-flat delete_comment"><i class="material-icons">delete</i></a>
									<a href="index.php?page=dashboard&action=publishComment&id=<?= $getComment["id"] ?>" id="comment_<?= $i ?>" class="modal-action modal-close waves-effect waves-green btn-flat see_comment"><i class="material-icons">done</i></a>
								</div>

							</div>
						</div>
					</div>

				</td>
			</tr>
		<?php $i++;
		endforeach; ?>

	</tbody>
</table>