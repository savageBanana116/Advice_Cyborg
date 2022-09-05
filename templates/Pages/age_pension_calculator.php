<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */
?>
<!doctype html>
<html lang="en">
<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

    h7{
        font-weight:bold;
    }
    table {
        table-layout: fixed;
        width: 100%
    }

    td {
        width: 50%;
        text-align: left;
    }

    .col-xs-2 {
        width:33%;
    }
</style>
<link rel="stylesheet" href="\team18-app_fit3048\webroot\css\styles.css" type="text/css">
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="calculators">Calculator Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link " href="car_lease_calculator">Car-Lease </a>
            <a class="nav-item nav-link" href="income_tax_calculator">Income-Tax</a>
            <a class="nav-item nav-link" href="retirement_calculator">Retirement</a>
            <a class="nav-item nav-link " href="salary_sacrifice_calculator">Salary-Sacrifice</a>
            <a class="nav-item nav-link " href="age_pension_calculator">Age-pension</a>
        </div>
    </div>
</nav>
<div class="container" >
    <div class="text-center" style="margin-top: 5%">
        <h2 class="text-uppercase" style="font-size: 56px">Age Pension Calculators</h2>





<?= $this -> Html -> script('FutureValue.js') ?>

</body>
