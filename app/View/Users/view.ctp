<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Github Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['github_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Login'); ?></dt>
		<dd>
			<?php echo h($user['User']['login']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contributors'), array('controller' => 'contributors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contributor'), array('controller' => 'contributors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stargazers'), array('controller' => 'stargazers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stargazer'), array('controller' => 'stargazers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Contributors'); ?></h3>
	<?php if (!empty($user['Contributor'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Repository Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Contributor'] as $contributor): ?>
		<tr>
			<td><?php echo $contributor['id']; ?></td>
			<td><?php echo $contributor['user_id']; ?></td>
			<td><?php echo $contributor['repository_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contributors', 'action' => 'view', $contributor['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contributors', 'action' => 'edit', $contributor['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contributors', 'action' => 'delete', $contributor['id']), null, __('Are you sure you want to delete # %s?', $contributor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contributor'), array('controller' => 'contributors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Stargazers'); ?></h3>
	<?php if (!empty($user['Stargazer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Repository Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Stargazer'] as $stargazer): ?>
		<tr>
			<td><?php echo $stargazer['id']; ?></td>
			<td><?php echo $stargazer['user_id']; ?></td>
			<td><?php echo $stargazer['repository_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'stargazers', 'action' => 'view', $stargazer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'stargazers', 'action' => 'edit', $stargazer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stargazers', 'action' => 'delete', $stargazer['id']), null, __('Are you sure you want to delete # %s?', $stargazer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Stargazer'), array('controller' => 'stargazers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
