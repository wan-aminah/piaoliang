<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="http://localhost/myprojects/">Party Bookings</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <?php if($loggedIn) : ?>
      <li><?= $this->Html->link(__('Logout'),['controller'=>'users','action'=>'logout']); ?></li>
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
      <li><?= $this->Html->link(__('Bookings'),['controller'=>'bookings','action'=>'index']); ?></li>
      <li><?= $this->Html->link(__('Categories'),['controller'=>'categories','action'=>'index']); ?></li>
      <li><?= $this->Html->link(__('Clients'),['controller'=>'clients','action'=>'index']); ?></li>
      <li><?= $this->Html->link(__('Notes'),['controller'=>'notes','action'=>'index']); ?></li>
      <li><?= $this->Html->link(__('Themes'),['controller'=>'themes','action'=>'index']); ?></li>
      <li><?= $this->Html->link(__('Users'),['controller'=>'users','action'=>'index']); ?></li>
	  <li><?= $this->Html->link(__('Messages'),['controller'=>'messages','action'=>'index']); ?></li>
      <?php else : ?>
        <li><?= $this->Html->link(__('Login'),['controller'=>'users','action'=>'login']); ?></li>
      <li><?= $this->Html->link(__('Register'),['controller'=>'users','action'=>'register']); ?></li>
    <?php endif; ?>
    </ul>
  </section>
</nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
