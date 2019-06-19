<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message $message
 */
?>
 <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('font-awesome.min.css') ?>
	<?= $this->Html->script('bootstrap.min.js') ?>
	<?= $this->Html->script('jquery-3.3.1.slim.min') ?>
	<?= $this->Html->script('popper.min.js') ?>
	

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
	
	<nav class="tnavbar navbar-expand-lg navbar-dark bg-dark fixed-top" data-topbar role="navigation">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
	<a class="navbar-brand" href="http://localhost/myprojects/">Party Bookings</a>
     
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
  </ul>
</nav>

<div class="messages form large-9 medium-8 columns content">
    <?= $this->Form->create($message) ?>
    <fieldset>
        <legend><?= __('Add Message') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('phone');
            echo $this->Form->control('email');
            echo $this->Form->control('message');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
