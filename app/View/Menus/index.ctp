
<div class="row">
    <div class="col-xs-12">

	<!-- Menus Search -->
	<div class="box box-warning">
		<div class="box-header">
			<h3 class="box-title"><?php echo __("<i class='glyphicon glyphicon-search'></i> Menus Search"); ?></h3>
		</div>	
		<div class="box-body table-responsive">
						<?php echo $this->Form->create('SearchMenu', array('role' => 'form')); ?>
			<fieldset>

									<div class="form-group col-xs-6">
						<?php echo $this->Form->input('menu_name', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('menu_icon', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('parent_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('is_sidebar', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('is_topmenu', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-xs-6">
						<?php echo $this->Form->input('has_child', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->

				<div class='form-group col-xs-12'>
					<?php echo $this->Form->button(__("<i class='glyphicon glyphicon-search'></i> Search Menu"), array(
						'type' => 'submit', 
						'class' => 'btn btn-warning', 
						'escape' => false)); ?>
				<div>				
			</fieldset>
						<?php echo $this->Form->end(); ?>
		</div><!-- /.table-responsive -->
	</div><!-- /.box box-warning -->
	<!-- End Menus Search -->


	<!-- Menus List -->
    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __("<i class='glyphicon glyphicon-list'></i> Menus List"); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> New Menu'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>	
		<div class="box-body table-responsive">
			<table id="Menus" class="table table-bordered table-striped">
				<thead>
					<tr>
											<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('menu_name'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('menu_icon'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('parent_id'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('is_sidebar'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('is_topmenu'); ?></th>
											<th class="text-center"><?php echo $this->Paginator->sort('has_child'); ?></th>
										<th class="text-center"><?php echo __('Actions'); ?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($menus as $menu): ?>
	<tr id='MenuRecord_<?php echo h($menu['Menu']['id']); ?>'>
		<td class="text-center"><?php echo h($menu['Menu']['id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($menu['Menu']['menu_name']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($menu['Menu']['menu_icon']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($menu['ParentMenu']['id'], array('controller' => 'menus', 'action' => 'view', $menu['ParentMenu']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($menu['Menu']['is_sidebar']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($menu['Menu']['is_topmenu']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($menu['Menu']['has_child']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $menu['Menu']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $menu['Menu']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-trash"></i>'), 'javascript:void(0)', array('class' => 'btn btn-danger btn-xs DeleteMenu','data-id'=>$menu['Menu']['id'] , 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete')); ?>
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
	<!-- End Menus List -->
	
	</div><!-- /#page-content .col-xs-12 -->

</div><!-- /#page-container .row-fluid -->



<!-- Delete Confirm Modal -->
<div id="DeleteMenuConfirmModal" class="modal" data-easein="expandIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					Confirm delete menu.
				</h4>
			</div>
			<div class="modal-body">
				<p>Are you sure to delete menu #ID<span id="DeleteId"></span>?</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary DeleteMenuConfirm">Yes</button>
				<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">No</button> 
			</div>
		</div>
	</div>
</div>
<!-- End Delete Confirm Modal -->


<script>
	$('.DeleteMenu').on('click', function() {
		id = $(this).data("id");
		$("#DeleteId").html(id);
		$("#DeleteMenuConfirmModal").modal();
	});

	$('.DeleteMenuConfirm').on('click', function() {
		var url = "<?php echo $this->Html->url(['controller' => 'Menus','action' => 'delete']) ?>";		// **********
		$.ajax({
			url: url,
			type: 'POST',
			data: {id: id}
		})
		.done(function(respone) {
			var respone = $.parseJSON(respone);
			if (respone.success) {
				$("#DeleteMenuConfirmModal").modal("hide");
				$("tr#MenuRecord_"+id).hide("slow");
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


