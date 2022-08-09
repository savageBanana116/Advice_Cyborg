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
<div class="container" >
    <div class="text-center" style="margin-top: 5%">
        <h2 class="text-uppercase" style="font-size: 56px">Car Lease Calculators</h2>
        <form id="lease_form" >
            <ul class="no-bullets">
                <li>
                    <label for="Loan_Date">Date of Loan:</label>
                    <input type="date" id="Loan_Date">
                </li>
                <li>
                    <label for="Loan_Amount">Amount of Loan ($):</label>
                    <input type="number" id="Loan_Amount" >
                </li>
                <li>
                    <label for="Annual_Interest_Rate">Annual Interest Rate (%):</label>
                    <input type="number" id="Annual_Interest_Rate">
                </li>
                <li>
                    <label for="Terms_of_Loan">Terms of Loan (Years):</label>
                    <input type="number" id="Terms_of_Loan">
                </li>
                <li>
                    <label for="Number_of_Payment_Annually">Number of Payments Annually:</label>
                    <input type="number" id="Number_of_Payment_Annually">
                </li>
            </ul>
        </form>

        <button id="Submit"> Calculate </button>

        <form id="lease_form" >
            <ul class="no-bullets">
                <li>
                    <label for="Loan_Date">Total Number of Payments:</label>
                    <input type="text" id="Total_NO_Payments" readonly>
                </li>
                <li>
                    <label for="Loan_Amount">Final Payment Date:</label>
                    <input type="text" id="Final_Payment_Date" readonly>
                </li>
                <li>
                    <label for="Annual_Interest_Rate">Total Interest:</label>
                    <input type="text" id="Total_Interest" readonly>
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



<script src="\team18-app_fit3048\webroot\js\Lease_calculator.js"></script>
</body>
