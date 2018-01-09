
<div class="row">
    <div class="col-xs-12">

	<!-- Document Titles Search -->
	<div class="box box-warning">
		<div class="box-header">
			<h3 class="box-title"><?php echo __("<i class='glyphicon glyphicon-search'></i> Document Titles Search"); ?></h3>
		</div>	
		<div class="box-body table-responsive">
						<?php echo $this->Form->create('SearchDocumentTitle', array('role' => 'form')); ?>
			<fieldset>

									<div class="form-group col-xs-6">
						<?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('deleted', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('create_uid', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('update_uid', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->

				<div class='form-group col-xs-12'>
					<?php echo $this->Form->button(__("<i class='glyphicon glyphicon-search'></i> Search DocumentTitle"), array(
						'type' => 'submit', 
						'class' => 'btn btn-warning', 
						'escape' => false)); ?>
				<div>				
			</fieldset>
						<?php echo $this->Form->end(); ?>
		</div><!-- /.table-responsive -->
	</div><!-- /.box box-warning -->
	<!-- End Document Titles Search -->


	<!-- Document Titles List -->
    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __("<i class='glyphicon glyphicon-list'></i> Document Titles List"); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> New Document Title'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>	
		<div class="box-body table-responsive">
			<table id="DocumentTitles" class="table table-bordered table-striped">
				<thead>
					<tr>
											<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('name'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('deleted'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('create_uid'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('modified'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('update_uid'); ?></th>
										<th class="text-center"><?php echo __('Actions'); ?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($documentTitles as $documentTitle): ?>
	<tr id='DocumentTitleRecord_<?php echo h($documentTitle['DocumentTitle']['id']); ?>'>
		<td class="text-center"><?php echo h($documentTitle['DocumentTitle']['id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTitle['DocumentTitle']['name']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTitle['DocumentTitle']['deleted']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTitle['DocumentTitle']['created']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTitle['DocumentTitle']['create_uid']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTitle['DocumentTitle']['modified']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTitle['DocumentTitle']['update_uid']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $documentTitle['DocumentTitle']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $documentTitle['DocumentTitle']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-trash"></i>'), 'javascript:void(0)', array('class' => 'btn btn-danger btn-xs DeleteDocumentTitle','data-id'=>$documentTitle['DocumentTitle']['id'] , 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete')); ?>
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
	</div><!-- /.box box-primary -->
	<!-- End Document Titles List -->
	
	</div><!-- /#page-content .col-xs-12 -->

</div><!-- /#page-container .row-fluid -->



<!-- Delete Confirm Modal -->
<div id="DeleteDocumentTitleConfirmModal" class="modal" data-easein="expandIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					Confirm delete documenttitle.
				</h4>
			</div>
			<div class="modal-body">
				<p>Are you sure to delete documenttitle #ID<span id="DeleteId"></span>?</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary DeleteDocumentTitleConfirm">Yes</button>
				<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">No</button> 
			</div>
		</div>
	</div>
</div>
<!-- End Delete Confirm Modal -->


<script>
	$('.DeleteDocumentTitle').on('click', function() {
		id = $(this).data("id");
		$("#DeleteId").html(id);
		$("#DeleteDocumentTitleConfirmModal").modal();
	});

	$('.DeleteDocumentTitleConfirm').on('click', function() {
		var url = "<?php echo $this->Html->url(['controller' => 'Document Titles','action' => 'delete']) ?>";		// **********
		$.ajax({
			url: url,
			type: 'POST',
			data: {id: id}
		})
		.done(function(respone) {
			var respone = $.parseJSON(respone);
			if (respone.success) {
				$("#DeleteDocumentTitleConfirmModal").modal("hide");
				$("tr#DocumentTitleRecord_"+id).hide("slow");
			}else{
				alert(respone.message);
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


