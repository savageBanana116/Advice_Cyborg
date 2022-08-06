<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PaymentProvider $paymentProvider
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paymentProvider->payment_provider_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paymentProvider->payment_provider_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Payment Providers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="paymentProviders form content">
            <?= $this->Form->create($paymentProvider) ?>
            <fieldset>
                <legend><?= __('Edit Payment Provider') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
