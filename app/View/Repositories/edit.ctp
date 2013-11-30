<div class="repositories form">
<?php echo $this->Form->create('Repository'); ?>
	<fieldset>
		<legend><?php echo __('Edit Repository'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('github_id');
		echo $this->Form->input('name');
		echo $this->Form->input('full_name');
		echo $this->Form->input('stargazers_url');
		echo $this->Form->input('contributors_url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Repository.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Repository.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Repositories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contributors'), array('controller' => 'contributors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contributor'), array('controller' => 'contributors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stargazers'), array('controller' => 'stargazers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stargazer'), array('controller' => 'stargazers', 'action' => 'add')); ?> </li>
	</ul>
</div>
