
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Posts'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> New Post'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>	
			<div class="box-body table-responsive">
                <table id="Posts" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('title'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('body'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('modified'); ?></th>
												<th class="text-center"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($posts as $post): ?>
	<tr id='PostRecord_<?php echo h($post['Post']['id']); ?>'>
		<td class="text-center"><?php echo h($post['Post']['id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($post['Post']['title']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($post['Post']['body']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($post['Post']['created']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($post['Post']['modified']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $post['Post']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $post['Post']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
			<?php //echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $post['Post']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-trash"></i>'), 'javascript:void(0)', array('class' => 'btn btn-danger btn-xs DeleteUser','data-id'=>$post['Post']['id'], 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete')); ?>
			
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
<div id="DeleteUserConfirm" class="modal" data-easein="expandIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
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
		$("#DeleteUserConfirm").modal();
	});

	$('.DeleteUserConfirm').on('click', function() {
		var url = "<?php echo $this->Html->url(["controller" => "posts","action" => "delete"]); ?>";
		$.ajax({
			url: url,
			type: 'POST',
			data: {id: id}
		})
		.done(function(respone) {
			if (respone) {
				$("#DeleteUserConfirm").modal("hide");
				$("tr#PostRecord_"+id).hide("slow");
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

<!-- public function delete() {
		$this->autoRender = false;
		if ($this->request->is('Ajax')) {
			$this->User->id = $this->request->data['id'];
			if ($this->User->delete()) {
				return true;
			}else{
				return false;
			}
		}
	} -->


