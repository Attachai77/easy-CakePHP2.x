
<div class="row">
    <div class="col-xs-12">

	<!-- Document Templates Search -->
	<div class="box box-warning">
		<div class="box-header">
			<h3 class="box-title"><?php echo __("<i class='glyphicon glyphicon-search'></i> Document Templates Search"); ?></h3>
		</div>	
		<div class="box-body table-responsive">
						<?php echo $this->Form->create('SearchDocumentTemplate', array('role' => 'form')); ?>
			<fieldset>

									<div class="form-group col-xs-6">
						<?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('level', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('parent', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('path', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('create_uid', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('update_uid', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('delete', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('file_extension', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('file_size', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('content_type', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('file_name', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('reg_format', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->

				<div class='form-group col-xs-12'>
					<?php echo $this->Form->button(__("<i class='glyphicon glyphicon-search'></i> Search DocumentTemplate"), array(
						'type' => 'submit', 
						'class' => 'btn btn-warning', 
						'escape' => false)); ?>
				<div>				
			</fieldset>
						<?php echo $this->Form->end(); ?>
		</div><!-- /.table-responsive -->
	</div><!-- /.box box-warning -->
	<!-- End Document Templates Search -->


	<!-- Document Templates List -->
    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __("<i class='glyphicon glyphicon-list'></i> Document Templates List"); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> New Document Template'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>	
		<div class="box-body table-responsive">
			<table id="DocumentTemplates" class="table table-bordered table-striped">
				<thead>
					<tr>
											<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('name'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('level'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('parent'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('path'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('create_uid'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('modified'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('update_uid'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('delete'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('file_extension'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('file_size'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('content_type'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('file_name'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('reg_format'); ?></th>
										<th class="text-center"><?php echo __('Actions'); ?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($documentTemplates as $documentTemplate): ?>
	<tr id='DocumentTemplateRecord_<?php echo h($documentTemplate['DocumentTemplate']['id']); ?>'>
		<td class="text-center"><?php echo h($documentTemplate['DocumentTemplate']['id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTemplate['DocumentTemplate']['name']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTemplate['DocumentTemplate']['level']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTemplate['DocumentTemplate']['parent']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTemplate['DocumentTemplate']['path']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTemplate['DocumentTemplate']['created']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTemplate['DocumentTemplate']['create_uid']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTemplate['DocumentTemplate']['modified']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTemplate['DocumentTemplate']['update_uid']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTemplate['DocumentTemplate']['delete']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTemplate['DocumentTemplate']['file_extension']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTemplate['DocumentTemplate']['file_size']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTemplate['DocumentTemplate']['content_type']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTemplate['DocumentTemplate']['file_name']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($documentTemplate['DocumentTemplate']['reg_format']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $documentTemplate['DocumentTemplate']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $documentTemplate['DocumentTemplate']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-trash"></i>'), 'javascript:void(0)', array('class' => 'btn btn-danger btn-xs DeleteDocumentTemplate','data-id'=>$documentTemplate['DocumentTemplate']['id'] , 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete')); ?>
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
	<!-- End Document Templates List -->
	
	</div><!-- /#page-content .col-xs-12 -->

</div><!-- /#page-container .row-fluid -->



<!-- Delete Confirm Modal -->
<div id="DeleteDocumentTemplateConfirmModal" class="modal" data-easein="expandIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					Confirm delete documenttemplate.
				</h4>
			</div>
			<div class="modal-body">
				<p>Are you sure to delete documenttemplate #ID<span id="DeleteId"></span>?</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary DeleteDocumentTemplateConfirm">Yes</button>
				<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">No</button> 
			</div>
		</div>
	</div>
</div>
<!-- End Delete Confirm Modal -->


<script>
	$('.DeleteDocumentTemplate').on('click', function() {
		id = $(this).data("id");
		$("#DeleteId").html(id);
		$("#DeleteDocumentTemplateConfirmModal").modal();
	});

	$('.DeleteDocumentTemplateConfirm').on('click', function() {
		var url = "<?php echo $this->Html->url(['controller' => 'Document Templates','action' => 'delete']) ?>";		// **********
		$.ajax({
			url: url,
			type: 'POST',
			data: {id: id}
		})
		.done(function(respone) {
			var respone = $.parseJSON(respone);
			if (respone.success) {
				$("#DeleteDocumentTemplateConfirmModal").modal("hide");
				$("tr#DocumentTemplateRecord_"+id).hide("slow");
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


