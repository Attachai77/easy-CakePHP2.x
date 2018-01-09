
<div class="row">
    <div class="col-xs-12">

	<!-- Speed Types Search -->
	<div class="box box-warning">
		<div class="box-header">
			<h3 class="box-title"><?php echo __("<i class='glyphicon glyphicon-search'></i> Speed Types Search"); ?></h3>
		</div>	
		<div class="box-body table-responsive">
						<?php echo $this->Form->create('SearchSpeedType', array('role' => 'form')); ?>
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
					<?php echo $this->Form->button(__("<i class='glyphicon glyphicon-search'></i> Search SpeedType"), array(
						'type' => 'submit', 
						'class' => 'btn btn-warning', 
						'escape' => false)); ?>
				<div>				
			</fieldset>
						<?php echo $this->Form->end(); ?>
		</div><!-- /.table-responsive -->
	</div><!-- /.box box-warning -->
	<!-- End Speed Types Search -->


	<!-- Speed Types List -->
    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __("<i class='glyphicon glyphicon-list'></i> Speed Types List"); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> New Speed Type'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>	
		<div class="box-body table-responsive">
			<table id="SpeedTypes" class="table table-bordered table-striped">
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
				<?php foreach ($speedTypes as $speedType): ?>
	<tr id='SpeedTypeRecord_<?php echo h($speedType['SpeedType']['id']); ?>'>
		<td class="text-center"><?php echo h($speedType['SpeedType']['id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($speedType['SpeedType']['name']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($speedType['SpeedType']['deleted']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($speedType['SpeedType']['created']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($speedType['SpeedType']['create_uid']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($speedType['SpeedType']['modified']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($speedType['SpeedType']['update_uid']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $speedType['SpeedType']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $speedType['SpeedType']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-trash"></i>'), 'javascript:void(0)', array('class' => 'btn btn-danger btn-xs DeleteSpeedType','data-id'=>$speedType['SpeedType']['id'] , 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete')); ?>
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
	<!-- End Speed Types List -->
	
	</div><!-- /#page-content .col-xs-12 -->

</div><!-- /#page-container .row-fluid -->



<!-- Delete Confirm Modal -->
<div id="DeleteSpeedTypeConfirmModal" class="modal" data-easein="expandIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					Confirm delete speedtype.
				</h4>
			</div>
			<div class="modal-body">
				<p>Are you sure to delete speedtype #ID<span id="DeleteId"></span>?</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary DeleteSpeedTypeConfirm">Yes</button>
				<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">No</button> 
			</div>
		</div>
	</div>
</div>
<!-- End Delete Confirm Modal -->


<script>
	$('.DeleteSpeedType').on('click', function() {
		id = $(this).data("id");
		$("#DeleteId").html(id);
		$("#DeleteSpeedTypeConfirmModal").modal();
	});

	$('.DeleteSpeedTypeConfirm').on('click', function() {
		var url = "<?php echo $this->Html->url(['controller' => 'Speed Types','action' => 'delete']) ?>";		// **********
		$.ajax({
			url: url,
			type: 'POST',
			data: {id: id}
		})
		.done(function(respone) {
			var respone = $.parseJSON(respone);
			if (respone.success) {
				$("#DeleteSpeedTypeConfirmModal").modal("hide");
				$("tr#SpeedTypeRecord_"+id).hide("slow");
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


