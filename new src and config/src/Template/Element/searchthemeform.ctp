<?= $this->Form->create('Post', array('action'=>'search')); ?>
	<?= $this->Form->input('searchtheme', array('label' => '', 'placeholder' => 'Search By Theme...')); ?>
<?= $this->Form->end(); ?>