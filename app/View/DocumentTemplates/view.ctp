
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Document Template'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $documentTemplate['DocumentTemplate']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="DocumentTemplates" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($documentTemplate['DocumentTemplate']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($documentTemplate['DocumentTemplate']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Level'); ?></strong></td>
		<td>
			<?php echo h($documentTemplate['DocumentTemplate']['level']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Parent'); ?></strong></td>
		<td>
			<?php echo h($documentTemplate['DocumentTemplate']['parent']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Path'); ?></strong></td>
		<td>
			<?php echo h($documentTemplate['DocumentTemplate']['path']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($documentTemplate['DocumentTemplate']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Create Uid'); ?></strong></td>
		<td>
			<?php echo h($documentTemplate['DocumentTemplate']['create_uid']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($documentTemplate['DocumentTemplate']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Update Uid'); ?></strong></td>
		<td>
			<?php echo h($documentTemplate['DocumentTemplate']['update_uid']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Delete'); ?></strong></td>
		<td>
			<?php echo h($documentTemplate['DocumentTemplate']['delete']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('File Extension'); ?></strong></td>
		<td>
			<?php echo h($documentTemplate['DocumentTemplate']['file_extension']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('File Size'); ?></strong></td>
		<td>
			<?php echo h($documentTemplate['DocumentTemplate']['file_size']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Content Type'); ?></strong></td>
		<td>
			<?php echo h($documentTemplate['DocumentTemplate']['content_type']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('File Name'); ?></strong></td>
		<td>
			<?php echo h($documentTemplate['DocumentTemplate']['file_name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Reg Format'); ?></strong></td>
		<td>
			<?php echo h($documentTemplate['DocumentTemplate']['reg_format']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Related Documents'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Document'), array('controller' => 'documents', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($documentTemplate['Document'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Document Template Id'); ?></th>
		<th class="text-center"><?php echo __('Secret Type Id'); ?></th>
		<th class="text-center"><?php echo __('Speed Type Id'); ?></th>
		<th class="text-center"><?php echo __('Speed Type Id2'); ?></th>
		<th class="text-center"><?php echo __('Doc No'); ?></th>
		<th class="text-center"><?php echo __('Doc No Con'); ?></th>
		<th class="text-center"><?php echo __('Document Title Id'); ?></th>
		<th class="text-center"><?php echo __('Inform'); ?></th>
		<th class="text-center"><?php echo __('Topic'); ?></th>
		<th class="text-center"><?php echo __('To Person Do'); ?></th>
		<th class="text-center"><?php echo __('To Person Know'); ?></th>
		<th class="text-center"><?php echo __('Vol No'); ?></th>
		<th class="text-center"><?php echo __('Year'); ?></th>
		<th class="text-center"><?php echo __('Episode'); ?></th>
		<th class="text-center"><?php echo __('Doc When'); ?></th>
		<th class="text-center"><?php echo __('Doc Where'); ?></th>
		<th class="text-center"><?php echo __('Description'); ?></th>
		<th class="text-center"><?php echo __('Deleted'); ?></th>
		<th class="text-center"><?php echo __('Created'); ?></th>
		<th class="text-center"><?php echo __('Create Uid'); ?></th>
		<th class="text-center"><?php echo __('Modified'); ?></th>
		<th class="text-center"><?php echo __('Update Uid'); ?></th>
		<th class="text-center"><?php echo __('Master Uid'); ?></th>
		<th class="text-center"><?php echo __('Revision Id'); ?></th>
		<th class="text-center"><?php echo __('Doc Status'); ?></th>
		<th class="text-center"><?php echo __('Unit Id'); ?></th>
		<th class="text-center"><?php echo __('Document Ref Id'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($documentTemplate['Document'] as $document): ?>
		<tr>
			<td class="text-center"><?php echo $document['id']; ?></td>
			<td class="text-center"><?php echo $document['document_template_id']; ?></td>
			<td class="text-center"><?php echo $document['secret_type_id']; ?></td>
			<td class="text-center"><?php echo $document['speed_type_id']; ?></td>
			<td class="text-center"><?php echo $document['speed_type_id2']; ?></td>
			<td class="text-center"><?php echo $document['doc_no']; ?></td>
			<td class="text-center"><?php echo $document['doc_no_con']; ?></td>
			<td class="text-center"><?php echo $document['document_title_id']; ?></td>
			<td class="text-center"><?php echo $document['inform']; ?></td>
			<td class="text-center"><?php echo $document['topic']; ?></td>
			<td class="text-center"><?php echo $document['to_person_do']; ?></td>
			<td class="text-center"><?php echo $document['to_person_know']; ?></td>
			<td class="text-center"><?php echo $document['vol_no']; ?></td>
			<td class="text-center"><?php echo $document['year']; ?></td>
			<td class="text-center"><?php echo $document['episode']; ?></td>
			<td class="text-center"><?php echo $document['doc_when']; ?></td>
			<td class="text-center"><?php echo $document['doc_where']; ?></td>
			<td class="text-center"><?php echo $document['description']; ?></td>
			<td class="text-center"><?php echo $document['deleted']; ?></td>
			<td class="text-center"><?php echo $document['created']; ?></td>
			<td class="text-center"><?php echo $document['create_uid']; ?></td>
			<td class="text-center"><?php echo $document['modified']; ?></td>
			<td class="text-center"><?php echo $document['update_uid']; ?></td>
			<td class="text-center"><?php echo $document['master_uid']; ?></td>
			<td class="text-center"><?php echo $document['revision_id']; ?></td>
			<td class="text-center"><?php echo $document['doc_status']; ?></td>
			<td class="text-center"><?php echo $document['unit_id']; ?></td>
			<td class="text-center"><?php echo $document['document_ref_id']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'documents', 'action' => 'view', $document['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'documents', 'action' => 'edit', $document['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'documents', 'action' => 'delete', $document['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $document['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

