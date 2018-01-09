
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Document'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $document['Document']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Documents" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Document Template'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($document['DocumentTemplate']['name'], array('controller' => 'document_templates', 'action' => 'view', $document['DocumentTemplate']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Secret Type'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($document['SecretType']['name'], array('controller' => 'secret_types', 'action' => 'view', $document['SecretType']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Speed Type'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($document['SpeedType']['name'], array('controller' => 'speed_types', 'action' => 'view', $document['SpeedType']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Speed Type Id2'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['speed_type_id2']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Doc No'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['doc_no']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Doc No Con'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['doc_no_con']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Document Title'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($document['DocumentTitle']['name'], array('controller' => 'document_titles', 'action' => 'view', $document['DocumentTitle']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Inform'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['inform']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Topic'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['topic']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('To Person Do'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['to_person_do']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('To Person Know'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['to_person_know']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Vol No'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['vol_no']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Year'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['year']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Episode'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['episode']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Doc When'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['doc_when']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Doc Where'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['doc_where']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Deleted'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['deleted']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Create Uid'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['create_uid']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Update Uid'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['update_uid']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Master Uid'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['master_uid']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Revision Id'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['revision_id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Doc Status'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['doc_status']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Unit Id'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['unit_id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Document Ref Id'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['document_ref_id']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

