<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Theme $theme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?= $this->Element('actions', array('type' => 'Theme', 'typePlural' => 'Themes')); ?>
</nav>
<div class="themes view large-9 medium-8 columns content">
    <h3><?= h($theme->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Theme') ?></th>
            <td><?= h($theme->theme) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($theme->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($theme->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($theme->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bookings') ?></h4>
        <?php if (!empty($theme->bookings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Time') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($theme->bookings as $bookings): ?>
            <tr>
                <td><?= h($bookings->id) ?></td>
                <td><?= h($bookings->user_id) ?></td>
                <td><?= h($bookings->client_id) ?></td>
                <td><?= h($bookings->category_id) ?></td>
                <td><?= h($bookings->title) ?></td>
                <td><?= h($bookings->date) ?></td>
                <td><?= h($bookings->time) ?></td>
                <td><?= h($bookings->price) ?></td>
                <td><?= h($bookings->created) ?></td>
                <td><?= h($bookings->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Bookings', 'action' => 'view', $bookings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Bookings', 'action' => 'edit', $bookings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bookings', 'action' => 'delete', $bookings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
