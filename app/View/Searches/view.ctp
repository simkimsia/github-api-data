<div class="searches view">
<h2><?php echo __('Search'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($search['Search']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Search Params'); ?></dt>
		<dd>
			<?php echo h($search['Search']['search_params']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Result Count'); ?></dt>
		<dd>
			<?php echo h($search['Search']['result_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Top Results'); ?></dt>
		<dd>
			<?php echo h($search['Search']['top_results']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($search['Search']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Page Url'); ?></dt>
		<dd>
			<?php echo h($search['Search']['first_page_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Page Url'); ?></dt>
		<dd>
			<?php echo h($search['Search']['last_page_url']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Search'), array('action' => 'edit', $search['Search']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Search'), array('action' => 'delete', $search['Search']['id']), null, __('Are you sure you want to delete # %s?', $search['Search']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Searches'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Search'), array('action' => 'add')); ?> </li>
	</ul>
</div>
