<div class="searches index">
	<h2><?php echo __('Searches'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('search_params'); ?></th>
			<th><?php echo $this->Paginator->sort('result_count'); ?></th>
			<th><?php echo $this->Paginator->sort('top_results'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('first_page_url'); ?></th>
			<th><?php echo $this->Paginator->sort('last_page_url'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($searches as $search): ?>
	<tr>
		<td><?php echo h($search['Search']['id']); ?>&nbsp;</td>
		<td><?php echo h($search['Search']['search_params']); ?>&nbsp;</td>
		<td><?php echo h($search['Search']['result_count']); ?>&nbsp;</td>
		<td><?php echo h($search['Search']['top_results']); ?>&nbsp;</td>
		<td><?php echo h($search['Search']['modified']); ?>&nbsp;</td>
		<td><?php echo h($search['Search']['first_page_url']); ?>&nbsp;</td>
		<td><?php echo h($search['Search']['last_page_url']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $search['Search']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $search['Search']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $search['Search']['id']), null, __('Are you sure you want to delete # %s?', $search['Search']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Search'), array('action' => 'add')); ?></li>
	</ul>
</div>
