<div class="customers index">
	<h2 class='d-flex justify-content-between align-items-center mb-5'>
		<?php echo __('List Of Customers'); ?>
	    <?php echo $this->Html->link(__('Add New Customer'), ['action' => 'add'], ['class' => 'btn btn-success']); ?>
	</h2>
	<hr>
	<div class='action--search'>
		<?php echo $this->Form->create('Customers'); ?>
		<?php echo $this->Form->input('keyword', ['placeholder' => 'Search', 'label' => 'Search a Customers: ']); ?>
		<?php echo $this->Form->end('Search'); ?>
	</div>

	<!-- View Result-->
	<?php if($is_empty == true): ?>
		<?php echo 'Search value is empty!' ?>
		<?php elseif ($not_found == true):?>
			<?php echo 'Not found for "'.$this->request->data['Customers']['keyword'].'"!' ?>
			<?php elseif ($is_search == true && isset($customers)):?>
				<h2>
					<?php echo 'Display results for "'.$this->request->data['Customers']['keyword'].'" : ' ?>
				</h2>
			<?php endif ?>
	<!-- End View Results -->
	<?php if(!empty($customers)): ?>
		<table cellpadding="0" cellspacing="0">
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('customerNumber'); ?></th>
				<th><?php echo $this->Paginator->sort('customerName'); ?></th>
				<th><?php echo $this->Paginator->sort('contactLastName'); ?></th>
				<th><?php echo $this->Paginator->sort('contactFirstName'); ?></th>
				<th><?php echo $this->Paginator->sort('phone'); ?></th>
				<th><?php echo $this->Paginator->sort('addressLine1'); ?></th>
				<th><?php echo $this->Paginator->sort('addressLine2'); ?></th>
				<th><?php echo $this->Paginator->sort('city'); ?></th>
				<th><?php echo $this->Paginator->sort('state'); ?></th>
				<th><?php echo $this->Paginator->sort('postalCode'); ?></th>
				<th><?php echo $this->Paginator->sort('country'); ?></th>
				<th><?php echo $this->Paginator->sort('salesRepEmployeeNumber'); ?></th>
				<th><?php echo $this->Paginator->sort('creditLimit'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($customers as $customer): ?>
		<tr>
			<td><?php echo h($customer['Customer']['customerNumber']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['customerName']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['contactLastName']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['contactFirstName']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['phone']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['addressLine1']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['addressLine2']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['city']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['state']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['postalCode']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['country']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['salesRepEmployeeNumber']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['creditLimit']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $customer['Customer']['customerNumber'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customer['Customer']['customerNumber'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customer['Customer']['customerNumber']), array('confirm' => __('Are you sure you want to delete # %s?', $customer['Customer']['customerNumber']))); ?>
			</td>
		</tr>
		<?php endforeach; ?>
			</tbody>
			</table>

			<!-- <p>
				<?php
				echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?>	
			</p> -->
			<div class="paging">
			<?php
				echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
			?>
			</div>
	<?php endif ?>
</div>
