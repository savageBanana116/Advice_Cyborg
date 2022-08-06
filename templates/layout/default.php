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
 * @var \App\View\AppView $this
 */

$identity = $this->Identity->get();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= h('Advice Cyborg') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-olOxEXxDwd20BlATUibkEnjPN3sVq2YWmYOnsMYutq7X8YcUdD6y/1I+f+ZOq/47" crossorigin="anonymous">

    <?= $this->Html->css(['styles']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="<?= $this->Url->build('/') ?>" id="navbar-brand"">
                <?= $this->Html->image('ava.png', ['alt' => 'Advice Cyborg']); ?>
            <?= $this->Html->tableRow('Advice Cyborg'); ?>

            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <?php if ($this->Identity->isLoggedIn()): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle"></i>
                                My Account
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="<?= $this->Url->build(['controller' => 'modules','action' => 'dashboard']);?>">Dashboard</a></li>
                                <li><a class="dropdown-item" href="<?= $this->Url->build(['controller' => 'users','action' => 'profile']);?>">Settings</a></li>
                                <li><a class="dropdown-item" href="<?= $this->Url->build(['controller' => 'users','action' => 'logout']);?>">Logout</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link" href="<?= $this->Url->build(['controller' => 'users','action' => 'login']);?>">Log in</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= $this->Url->build(['controller' => 'users','action' => 'add']);?>">Sign up</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-4 text-lg-start">Copyright &copy;  Advice Cyborg 2021</div>
                <div class="col-sm-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href=""><i class="fas fa-globe"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/AVA-AdviceCyborg-559264284478177"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/company/advicecyborg/about/?viewAsMember=true"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-sm-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'privacy']);?>">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'terms_condition']);?>">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <?= $this->Html->script('scripts.js') ?>
</body>
</html>
