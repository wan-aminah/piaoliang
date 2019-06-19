<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?= $this->Element('actions', array('type' => 'Booking', 'typePlural' => 'Bookings')); ?>
</nav>
<div class="bookings form large-9 medium-8 columns content">
    <?= $this->Form->create($booking) ?>
    <fieldset>
        <legend><?= __('Add Booking') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('client_id', ['options' => $clients]);
            echo $this->Form->control('category_id', ['options' => $categories]);
            echo $this->Form->control('title');
            echo $this->Form->control('date', ['empty' => true]);
            echo $this->Form->control('time', ['empty' => true]);
            echo $this->Form->control('price');
            echo $this->Form->control('themes._ids', ['options' => $themes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
