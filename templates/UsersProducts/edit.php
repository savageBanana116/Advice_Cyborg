<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersProduct $usersProduct
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersProduct->users_products_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersProduct->users_products_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersProducts form content">
            <?= $this->Form->create($usersProduct) ?>
            <fieldset>
                <legend><?= __('Edit Users Product') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('product_id', ['options' => $products]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
