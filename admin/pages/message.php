<?php
include 'controller/message.controller.php';
?>


<h1 class="">Message non lus</h1>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="">Nom</th>
			<th class="">Email</th>
			<th class="">Message</th>
            <th class="">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $i = 1; ?>
		<?php foreach ($Messages as $message) : ?>
			<tr id="commentaire_<?= $i ?>">
				<td class=""><?= $message["name"] ?></td>
				<td class=""><?= $message["email"] ?></td>
                <td class=""><?= $message["message"] ?></td>
				<td class="d-grid gap-2">
					<!-- <a href="" id="comment_<?= $i ?>" class="btn-floating btn-small modal-trigger waves-effect waves-light green see_comment" data-target="modal<?= $i ?>" data-bs-toggle="modal" data-bs-target="#modal<?= $i ?>"><i class="material-icons">done</i></a> -->
					<a href="index.php?page=message&action=deleteMessage&id=<?= $message["id"] ?>" id="comment_<?= $i ?>" class="btn-floating btn-small waves-effect waves-light red see_comment"><i class="material-icons">delete</i></a>


					<div class="modal" id="modal<?= $i ?>">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<h4><?= $message["name"] ?></h4>
									<button type="button" class="btn-close text-danger" data-bs-dismiss="modal"></button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									<p><?= $message["message"] ?></p>
								</div>

								<!-- Modal footer -->
								<div class="modal-footer">
									<a href="index.php?page=dashboard&action=deleteComment&id=<?= $message["id"] ?>" id="comment_<?= $i ?>" id="comment_<?= $i ?>" class="modal-action modal-close waves-effect waves-red btn-flat delete_comment"><i class="material-icons">delete</i></a>
									<a href="index.php?page=dashboard&action=publishComment&id=<?= $message["id"] ?>" id="comment_<?= $i ?>" class="modal-action modal-close waves-effect waves-green btn-flat see_comment"><i class="material-icons">done</i></a>
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