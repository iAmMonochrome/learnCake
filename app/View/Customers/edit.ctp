<div class="customers form">
<?php echo $this->Form->create('Customer'); ?>
	<fieldset>
		<legend><?php echo __('Edit Customer'); ?></legend>
	<?php
		echo $this->Form->input('customerNumber');
		echo $this->Form->input('customerName');
		echo $this->Form->input('contactLastName');
		echo $this->Form->input('contactFirstName');
		echo $this->Form->input('phone');
		echo $this->Form->input('addressLine1');
		echo $this->Form->input('addressLine2');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('postalCode');
		echo $this->Form->input('country');
		echo $this->Form->input('salesRepEmployeeNumber');
		echo $this->Form->input('creditLimit');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Customer.customerNumber')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Customer.customerNumber')))); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?></li>
	</ul>
</div>
