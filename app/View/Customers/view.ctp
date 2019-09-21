<div class="customers view">
<h2><?php echo __('Customer'); ?></h2>
	<dl class='table'>
		<dt><?php echo __('CustomerNumber'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['customerNumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CustomerName'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['customerName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ContactLastName'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['contactLastName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ContactFirstName'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['contactFirstName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AddressLine1'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['addressLine1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AddressLine2'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['addressLine2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PostalCode'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['postalCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalesRepEmployeeNumber'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['salesRepEmployeeNumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CreditLimit'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['creditLimit']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['customerNumber'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['customerNumber']), array('confirm' => __('Are you sure you want to delete # %s?', $customer['Customer']['customerNumber']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?> </li>
	</ul>
</div>
