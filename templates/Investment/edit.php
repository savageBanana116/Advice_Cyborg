<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Investment $investment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $investment->investment_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $investment->investment_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Investment'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="investment form content">
            <?= $this->Form->create($investment) ?>
            <fieldset>
                <legend><?= __('Edit Investment') ?></legend>
                <?php
                    echo $this->Form->control('company_name');
                    echo $this->Form->control('investment_name');
                    echo $this->Form->control('admin_fee');
                    echo $this->Form->control('investment_type');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
