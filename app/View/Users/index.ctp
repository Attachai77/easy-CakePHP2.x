
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Users'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> New User'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>	
			<div class="box-body table-responsive">
                <table id="Users" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('username'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('password'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('first_name'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('last_name'); ?></th>
												<th class="text-center"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($users as $user): ?>
	<tr id='UserRecord_<?php echo h($user['User']['id']); ?>'>
		<td class="text-center"><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($user['User']['first_name']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($user['User']['last_name']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $user['User']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-trash"></i>'), 'javascript:void(0)', array('class' => 'btn btn-danger btn-xs DeleteUser','data-id'=>$user['User']['id'] , 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete')); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>

				<p>
					<div class="pull-left">
						<?php
							echo $this->Paginator->counter(array(
								'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
							));
						?>	
					</div>
					<div class="pull-right">
						
							<?php echo $this->Paginator->prev();?>
							<?php echo $this->Paginator->numbers();?>
							<?php echo $this->Paginator->next();?>
											</div>
				</p>

			</div><!-- /.table-responsive -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->



<!-- Delete Confirm Modal -->
<div id="DeleteUserConfirmModal" class="modal" data-easein="expandIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					Confirm delete user.
				</h4>
			</div>
			<div class="modal-body">
				<p>Are you sure to delete user #ID<span id="DeleteId"></span>?</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary DeleteUserConfirm">Yes</button>
				<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">No</button> 
			</div>
		</div>
	</div>
</div>
<!-- End Delete Confirm Modal -->


<script>
	$('.DeleteUser').on('click', function() {
		id = $(this).data("id");
		$("#DeleteId").html(id);
		$("#DeleteUserConfirmModal").modal();
	});

	$('.DeleteUserConfirm').on('click', function() {
		var url = "<?php echo $this->Html->url(['controller' => 'Users','action' => 'delete']) ?>";		// **********
		$.ajax({
			url: url,
			type: 'POST',
			data: {id: id}
		})
		.done(function(respone) {
			if (respone) {
				$("#DeleteUserConfirmModal").modal("hide");
				$("tr#UserRecord_"+id).hide("slow");
			}else{
				// alert('can not delete.');
			}
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	});
</script>


