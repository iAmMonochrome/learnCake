<?php echo $this->Form->create('Customers'); ?>
<?php echo $this->Form->input('keyword', ['placeholder' => 'Search', 'label' => 'Search a Customers: ']); ?>
<?php echo $this->Form->end('Search'); ?>



<!-- View Result-->
<?php if($is_empty == true): ?>
    <?php echo 'Search value is empty!' ?>
    <?php elseif ($not_found == true):?>
        <?php echo 'Not found for "'.$this->request->data['Customers']['keyword'].'"!' ?>
        <?php elseif (isset($results)):?>
            <?php echo 'Display results for "'.$this->request->data['Customers']['keyword'].': ' ?>
        <?php endif ?>
<!-- End View Results -->

<?php
    // var_dump($not_found);
?>