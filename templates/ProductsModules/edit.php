<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsModule $productsModule
 * @var string[]|\Cake\Collection\CollectionInterface $products
 * @var string[]|\Cake\Collection\CollectionInterface $modules
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productsModule->product_module_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productsModule->product_module_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Products Modules'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productsModules form content">
            <?= $this->Form->create($productsModule) ?>
            <fieldset>
                <legend><?= __('Edit Products Module') ?></legend>
                <?php
                    echo $this->Form->control('product_id', ['options' => $products]);
                    echo $this->Form->control('module_id', ['options' => $modules]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
