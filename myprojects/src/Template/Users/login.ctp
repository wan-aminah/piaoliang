<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns content">
    <div class="panel">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Birtday Party Management Login') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
</div>
