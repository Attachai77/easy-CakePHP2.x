
<div class="row">
    <div class="col-xs-12">

	<!-- Documents Search -->
	<div class="box box-warning">
		<div class="box-header">
			<h3 class="box-title"><?php echo __("<i class='glyphicon glyphicon-search'></i> Documents Search"); ?></h3>
		</div>	
		<div class="box-body table-responsive">
						<?php echo $this->Form->create('SearchDocument', array('role' => 'form')); ?>
			<fieldset>

									<div class="form-group col-xs-6">
						<?php echo $this->Form->input('document_template_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('secret_type_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('speed_type_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('speed_type_id2', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('doc_no', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('doc_no_con', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('document_title_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('inform', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('topic', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('to_person_do', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('to_person_know', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('vol_no', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('year', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('episode', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('doc_when', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('doc_where', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('description', array('class' => 'form-control')); ?>
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
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('master_uid', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('revision_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('doc_status', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('unit_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('document_ref_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->

				<div class='form-group col-xs-12'>
					<?php echo $this->Form->button(__("<i class='glyphicon glyphicon-search'></i> Search Document"), array(
						'type' => 'submit', 
						'class' => 'btn btn-warning', 
						'escape' => false)); ?>
				<div>				
			</fieldset>
						<?php echo $this->Form->end(); ?>
		</div><!-- /.table-responsive -->
	</div><!-- /.box box-warning -->
	<!-- End Documents Search -->


	<!-- Documents List -->
    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __("<i class='glyphicon glyphicon-list'></i> Documents List"); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> New Document'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>	
		<div class="box-body table-responsive">
			<table id="Documents" class="table table-bordered table-striped">
				<thead>
					<tr>
											<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('document_template_id'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('secret_type_id'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('speed_type_id'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('speed_type_id2'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('doc_no'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('doc_no_con'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('document_title_id'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('inform'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('topic'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('to_person_do'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('to_person_know'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('vol_no'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('year'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('episode'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('doc_when'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('doc_where'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('description'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('deleted'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('create_uid'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('modified'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('update_uid'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('master_uid'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('revision_id'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('doc_status'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('unit_id'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('document_ref_id'); ?></th>
										<th class="text-center"><?php echo __('Actions'); ?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($documents as $document): ?>
	<tr id='DocumentRecord_<?php echo h($document['Document']['id']); ?>'>
		<td class="text-center"><?php echo h($document['Document']['id']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($document['DocumentTemplate']['name'], array('controller' => 'document_templates', 'action' => 'view', $document['DocumentTemplate']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($document['SecretType']['name'], array('controller' => 'secret_types', 'action' => 'view', $document['SecretType']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($document['SpeedType']['name'], array('controller' => 'speed_types', 'action' => 'view', $document['SpeedType']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($document['Document']['speed_type_id2']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['doc_no']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['doc_no_con']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($document['DocumentTitle']['name'], array('controller' => 'document_titles', 'action' => 'view', $document['DocumentTitle']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($document['Document']['inform']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['topic']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['to_person_do']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['to_person_know']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['vol_no']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['year']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['episode']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['doc_when']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['doc_where']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['description']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['deleted']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['created']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['create_uid']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['modified']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['update_uid']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['master_uid']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['revision_id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['doc_status']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['unit_id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($document['Document']['document_ref_id']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $document['Document']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $document['Document']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-trash"></i>'), 'javascript:void(0)', array('class' => 'btn btn-danger btn-xs DeleteDocument','data-id'=>$document['Document']['id'] , 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete')); ?>
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
	<!-- End Documents List -->
	
	</div><!-- /#page-content .col-xs-12 -->

</div><!-- /#page-container .row-fluid -->



<!-- Delete Confirm Modal -->
<div id="DeleteDocumentConfirmModal" class="modal" data-easein="expandIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					Confirm delete document.
				</h4>
			</div>
			<div class="modal-body">
				<p>Are you sure to delete document #ID<span id="DeleteId"></span>?</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary DeleteDocumentConfirm">Yes</button>
				<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">No</button> 
			</div>
		</div>
	</div>
</div>
<!-- End Delete Confirm Modal -->


<script>
	$('.DeleteDocument').on('click', function() {
		id = $(this).data("id");
		$("#DeleteId").html(id);
		$("#DeleteDocumentConfirmModal").modal();
	});

	$('.DeleteDocumentConfirm').on('click', function() {
		var url = "<?php echo $this->Html->url(['controller' => 'Documents','action' => 'delete']) ?>";		// **********
		$.ajax({
			url: url,
			type: 'POST',
			data: {id: id}
		})
		.done(function(respone) {
			var respone = $.parseJSON(respone);
			if (respone.success) {
				$("#DeleteDocumentConfirmModal").modal("hide");
				$("tr#DocumentRecord_"+id).hide("slow");
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


