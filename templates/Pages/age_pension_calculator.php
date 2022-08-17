<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */
?>
<!doctype html>
<html lang="en">
<style>

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
        <h2 class="text-uppercase" style="font-size: 56px">Financial Calculators</h2>
        <form id="FV_Single_Sum" >
            <ul class="no-bullets">
                <h4>Future Value of a single sum</h4>
                <li>
                    <label for="Start_Balance">Balance at Start:</label>
                    <input type="number" id="Start_Balance">
                </li>
                <li>
                    <label for="Interest">Interest (%) :</label>
                    <input type="number" id="Interest" >
                </li>
                <li>
                    <label for="Term">Terms (Year) :</label>
                    <input type="number" id="Term">
                </li>
            </ul>
        </form>
        <button id="Submit_FV_Single_Sum"> Calculate </button>
        <h4> Outputs </h4>
                <form>
                    <ul>
                        <li>
                            <label for="Future_Value_Sum">Future Value :</label>
                            <input type="text" id="Future_Value_Sum" readonly>
                        </li>
                        <li>
                            <label for="Today_Value">Today's Value :</label>
                            <input type="text" id="Today_Value" readonly>
                        </li>
                    </ul>
                </form>

        <h4>Future Value of a single sum</h4>
        <form id="FV_annual" >
            <ul class="no-bullets">
                <li>
                    <label for="Loan_Date">Total Number of Payments:</label>
                    <select id="Frequency">
                        <option value="year">Year</option>
                        <option value="month">Month</option>
                        <option value="day">Day</option>
                        <option value="quarter">Quarter</option>
                        <option value="half">Half</option>
                    </select>
                </li>
                <li>
                    <label for="Amount_Pa">Amount Pa ($) :</label>
                    <input type="number" id="Amount_Pa">
                </li>
                <li>
                    <label for="Interest_Pa">Interest Pa (%) :</label>
                    <input type="number" id="Interest_Pa">
                </li>
                <li>
                    <label for="Years">Number of Years :</label>
                    <input type="number" id="Years">
                </li>
                <li>
                    <label for="Inflation">Inflation :</label>
                    <input type="number" id="Inflation">
                </li>
            </ul>
        </form>
        <button id="Submit_FV_ann"> Calculate </button>
        <h4> Outputs </h4>
        <form>
            <ul>
                <li>
                    <label for="Future_Value_Sum">Future Value ($) :</label>
                    <input type="text" id="Future_Value_Ann" readonly>
                </li>
                <li>
                    <label for="Today_Value">Today's Value ($) :</label>
                    <input type="text" id="Today_Value_Ann" readonly>
                </li>
            </ul>
        </form>
    </div>

</div>
<!--
<nav class="navbar navbar-expand-lg navbar-dark bg-success py-4 w-100" style="width: 100%; margin-bottom: 25%">

    <div class="collapse navbar-collapse" id="navbarNav" style="font-size: 300%;color: white">
        <ul class="navbar-nav">
            <li class="nav-item active px-5">
                <a class="nav-link" href="#" style="border-bottom:  5px solid #f5f4eb ">Car Lease <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item px-5 " >
                <a class="nav-link" href="income_tax_calculator">Income Tax</a>
            </li>
            <li class="nav-item px-5">
                <a class="nav-link" href="retirement_calculator">Retirement</a>
            </li>
            <li class="nav-item px-5">
                <a class="nav-link" href="salary_sacrifice_calculator">Salary Sacrifice</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="age_pension_calculator">Age Pension</a>
            </li>
        </ul>
    </div>
</nav>
-->



<?= $this -> Html -> script('FutureValue.js') ?>

</body>
