<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>

<div class="row">
    <div class="col-xs-12">

	<!-- <?php echo $pluralHumanName; ?> Search -->
	<div class="box box-warning">
		<div class="box-header">
			<h3 class="box-title"><?php echo "<?php echo __(\"<i class='glyphicon glyphicon-search'></i> {$pluralHumanName} Search\"); ?>"; ?></h3>
		</div>	
		<div class="box-body table-responsive">
			<?php echo "\t\t\t<?php echo \$this->Form->create('Search{$modelClass}', array('role' => 'form')); ?>\n";?>
			<fieldset>

				<?php
					foreach ($fields as $field) {

						if (!in_array($field, array('id','password','created', 'modified'))) {
							echo "\t\t\t\t\t<div class=\"form-group col-xs-6\">\n";
							echo "\t\t\t\t\t\t<?php echo \$this->Form->input('{$field}', array('class' => 'form-control')); ?>\n";
							echo "\t\t\t\t\t</div><!-- .form-group -->\n";
						}
					}
					echo "\n";
					
					echo "\t\t\t\t<div class='form-group col-xs-12'>\n";
					echo "\t\t\t\t\t<?php echo \$this->Form->button(__(\"<i class='glyphicon glyphicon-search'></i> Search {$modelClass}\"), array(
						'type' => 'submit', 
						'class' => 'btn btn-warning', 
						'escape' => false)); ?>\n";
					echo "\t\t\t\t<div>";
				?>
				
			</fieldset>
			<?php echo "\t\t\t<?php echo \$this->Form->end(); ?>\n";?>
		</div><!-- /.table-responsive -->
	</div><!-- /.box box-warning -->
	<!-- End <?php echo $pluralHumanName; ?> Search -->


	<!-- <?php echo $pluralHumanName; ?> List -->
    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo "<?php echo __(\"<i class='glyphicon glyphicon-list'></i> {$pluralHumanName} List\"); ?>"; ?></h3>
			<div class="box-tools pull-right">
                <?php echo "<?php echo \$this->Html->link(__('<i class=\"glyphicon glyphicon-plus\"></i> New ".$singularHumanName."'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>\n"; ?>
            </div>
		</div>	
		<div class="box-body table-responsive">
			<table id="<?php echo str_replace(' ', '', $pluralHumanName); ?>" class="table table-bordered table-striped">
				<thead>
					<tr>
					<?php foreach ($fields as $field): ?>
						<th class="text-center"><?php echo "<?php echo \$this->Paginator->sort('{$field}'); ?>"; ?></th>
					<?php endforeach; ?>
					<th class="text-center"><?php echo "<?php echo __('Actions'); ?>"; ?></th>
					</tr>
				</thead>
				<tbody>
				<?php 
					echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
					echo "\t<tr id='{$modelClass}Record_<?php echo h(\${$singularVar}['{$modelClass}']['id']); ?>'>\n";
					foreach ($fields as $field) {
						$isKey = false;
						if (!empty($associations['belongsTo'])) {
							foreach ($associations['belongsTo'] as $alias => $details) {
								if ($field === $details['foreignKey']) {
									$isKey = true;
									echo "\t\t<td class=\"text-center\">\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
									break;
								}
							}
						}
						if ($isKey !== true) {
							echo "\t\t<td class=\"text-center\"><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
						}
					}

					echo "\t\t<td class=\"text-center\">\n";
					echo "\t\t\t<?php echo \$this->Html->link(__('<i class=\"glyphicon glyphicon-eye-open\"></i>'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>\n";
					echo "\t\t\t<?php echo \$this->Html->link(__('<i class=\"glyphicon glyphicon-pencil\"></i>'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>\n";
					echo "\t\t\t<?php echo \$this->Html->link(__('<i class=\"glyphicon glyphicon-trash\"></i>'), 'javascript:void(0)', array('class' => 'btn btn-danger btn-xs Delete{$modelClass}','data-id'=>\${$singularVar}['{$modelClass}']['{$primaryKey}'] , 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete')); ?>\n";
					echo "\t\t</td>\n";
					echo "\t</tr>\n";

					echo "<?php endforeach; ?>\n";
				?>
				</tbody>
			</table>

			<p>
				<div class="pull-left">
					<?php echo "<?php
						echo \$this->Paginator->counter(array(
							'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
						));
					?>"; ?>	
				</div>
				<div class="pull-right">
					<?php echo "
						<?php echo \$this->Paginator->prev();?>
						<?php echo \$this->Paginator->numbers();?>
						<?php echo \$this->Paginator->next();?>
					"; ?>
				</div>
			</p>

		</div><!-- /.table-responsive -->		
	</div><!-- /.box box-primary -->
	<!-- End <?php echo $pluralHumanName; ?> List -->
	
	</div><!-- /#page-content .col-xs-12 -->

</div><!-- /#page-container .row-fluid -->



<!-- Delete Confirm Modal -->
<div id="Delete<?php echo $modelClass;?>ConfirmModal" class="modal" data-easein="expandIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					Confirm delete <?php echo strtolower($modelClass);?>.
				</h4>
			</div>
			<div class="modal-body">
				<p>Are you sure to delete <?php echo strtolower($modelClass);?> #ID<span id="DeleteId"></span>?</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary Delete<?php echo $modelClass;?>Confirm">Yes</button>
				<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">No</button> 
			</div>
		</div>
	</div>
</div>
<!-- End Delete Confirm Modal -->


<script>
	$('.Delete<?php echo $modelClass;?>').on('click', function() {
		id = $(this).data("id");
		$("#DeleteId").html(id);
		$("#Delete<?php echo $modelClass;?>ConfirmModal").modal();
	});

	$('.Delete<?php echo $modelClass;?>Confirm').on('click', function() {
		var url = <?php echo "\"<?php echo \$this->Html->url(['controller' => '{$pluralHumanName}','action' => 'delete']) ?>\";"; ?>
		// **********
		$.ajax({
			url: url,
			type: 'POST',
			data: {id: id}
		})
		.done(function(respone) {
			var respone = $.parseJSON(respone);
			if (respone.success) {
				$("#Delete<?php echo $modelClass;?>ConfirmModal").modal("hide");
				$("tr#<?php echo $modelClass;?>Record_"+id).hide("slow");
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


