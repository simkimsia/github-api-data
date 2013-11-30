<div class="searches form">
<?php echo $this->Form->create('Search'); ?>
	<fieldset>
		<legend><?php echo __('Edit Search'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('search_params');
		echo $this->Form->input('result_count');
		echo $this->Form->input('top_results');
		echo $this->Form->input('first_page_url');
		echo $this->Form->input('last_page_url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Search.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Search.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Searches'), array('action' => 'index')); ?></li>
	</ul>
</div>
