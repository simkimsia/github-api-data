<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('github_id');
		echo $this->Form->input('login');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contributors'), array('controller' => 'contributors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contributor'), array('controller' => 'contributors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stargazers'), array('controller' => 'stargazers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stargazer'), array('controller' => 'stargazers', 'action' => 'add')); ?> </li>
	</ul>
</div>
