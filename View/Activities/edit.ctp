<div class="activity form">
<?php echo $this->Form->create('Activity');?>
  <fieldset>
    <?php
    echo $this->Form->input('Activity.id');
	echo $this->Form->input('Activity.name');
    echo $this->Form->input('Activity.description', array('type' => 'richtext')); ?>
  </fieldset>
  <?php echo $this->Form->end('Submit');?>
</div>

<?php
// set the contextual menu items
$this->set('context_menu', array('menus' => array(
	array(
		'heading' => 'Activities',
		'items' => array(
			$this->Html->link(__('List'), array('plugin' => 'activities', 'controller'=> 'activities', 'action' => 'index')),
			),
		),
	)));  ?>