<div class="repositories index">
	<h2><?php echo __('Repositories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('github_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('full_name'); ?></th>
			<th><?php echo $this->Paginator->sort('stargazers_url'); ?></th>
			<th><?php echo $this->Paginator->sort('contributors_url'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($repositories as $repository): ?>
	<tr>
		<td><?php echo h($repository['Repository']['id']); ?>&nbsp;</td>
		<td><?php echo h($repository['Repository']['github_id']); ?>&nbsp;</td>
		<td><?php echo h($repository['Repository']['name']); ?>&nbsp;</td>
		<td><?php echo h($repository['Repository']['full_name']); ?>&nbsp;</td>
		<td><?php echo h($repository['Repository']['stargazers_url']); ?>&nbsp;</td>
		<td><?php echo h($repository['Repository']['contributors_url']); ?>&nbsp;</td>
		<td><?php echo h($repository['Repository']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $repository['Repository']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $repository['Repository']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $repository['Repository']['id']), null, __('Are you sure you want to delete # %s?', $repository['Repository']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Repository'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Contributors'), array('controller' => 'contributors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contributor'), array('controller' => 'contributors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stargazers'), array('controller' => 'stargazers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stargazer'), array('controller' => 'stargazers', 'action' => 'add')); ?> </li>
	</ul>
</div>
