<div class="repositories view">
<h2><?php echo __('Repository'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($repository['Repository']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Github Id'); ?></dt>
		<dd>
			<?php echo h($repository['Repository']['github_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($repository['Repository']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Full Name'); ?></dt>
		<dd>
			<?php echo h($repository['Repository']['full_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stargazers Url'); ?></dt>
		<dd>
			<?php echo h($repository['Repository']['stargazers_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contributors Url'); ?></dt>
		<dd>
			<?php echo h($repository['Repository']['contributors_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($repository['Repository']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Repository'), array('action' => 'edit', $repository['Repository']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Repository'), array('action' => 'delete', $repository['Repository']['id']), null, __('Are you sure you want to delete # %s?', $repository['Repository']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Repositories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repository'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contributors'), array('controller' => 'contributors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contributor'), array('controller' => 'contributors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stargazers'), array('controller' => 'stargazers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stargazer'), array('controller' => 'stargazers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Contributors'); ?></h3>
	<?php if (!empty($repository['Contributor'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Repository Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($repository['Contributor'] as $contributor): ?>
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
	<?php if (!empty($repository['Stargazer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Repository Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($repository['Stargazer'] as $stargazer): ?>
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
