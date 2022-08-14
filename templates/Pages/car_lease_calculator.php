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
        <h1 >Car Lease Calculators</h1>
        <div class="row">
            <div class="col" style="border-style:solid; border-color:black; background-color: #403535; color: white;"><h3> To Get Started!</h3>
            <br>
            <h5>Tell us about your Loan, we will use this to calculate the amount of the loan as well as the final payment date.</h5></div>
            <div class="col" style="margin-left: 5%; border-style:solid; border-color:black; background-color: #403535; color: white;">
                <h5>Your Expected Loan Interest</h5></div>
        </div>
<!--      -->
        <div class="row">
            <div class="col" style="border-style:solid; border-color:black;" >
        <form id="lease_form">
            <div class="form-group">
                <label for="Loan_Date">Date Of Loan</label>
                <input id="Loan_Date" name="Loan_date" placeholder="dd/mm/yyyy" type="date" class="form-control" required="required">
            </div>
            <div class="form-group">
                <label for="Loan_Amount">Amount Of Loan $</label>
                <input id="Loan_Amount" name="Loan_Amount" placeholder="30000" type="number" class="form-control" required="required">
            </div>
            <div class="form-group">
                <label for="Annual_Interest_Rate">Annual Interest Rate (%)</label>
                <input id="Annual_Interest_Rate" name="Annual_Interest_Rate" placeholder="5" type="number" class="form-control" required="required">
            </div>
            <div class="form-group">
                <label for="Terms_of_Loan">Term Of Loan (Years)</label>
                <input id="Terms_of_Loan" name="Terms_of_Loan" placeholder="3" type="number" class="form-control" required="required">
            </div>
            <div class="form-group">
                <label for="Number_of_Payment_Annually">Number of Payments Annually</label>
                <input id="Number_of_Payment_Annually" name="Number_of_Payment_Annually" placeholder="32" type="number" class="form-control" required="required">
            </div>
        </form>
<br>
        <div class="form-group">
            <button id="Submit" class="btn btn-primary">Calculate</button>
        </div>
                <br>
            </div>


<!--        <form id="lease_form" >-->
<!--            <ul class="no-bullets">-->
<!--                <li>-->
<!--                    <label for="Loan_Date">Date of Loan:</label>-->
<!--                    <input type="date" id="Loan_Date">-->
<!--                </li>-->
<!--                <li>-->
<!--                    <label for="Loan_Amount">Amount of Loan ($):</label>-->
<!--                    <input type="number" id="Loan_Amount" >-->
<!--                </li>-->
<!--                <li>-->
<!--                    <label for="Annual_Interest_Rate">Annual Interest Rate (%):</label>-->
<!--                    <input type="number" id="Annual_Interest_Rate">-->
<!--                </li>-->
<!--                <li>-->
<!--                    <label for="Terms_of_Loan">Terms of Loan (Years):</label>-->
<!--                    <input type="number" id="Terms_of_Loan">-->
<!--                </li>-->
<!--                <li>-->
<!--                    <label for="Number_of_Payment_Annually">Number of Payments Annually:</label>-->
<!--                    <input type="number" id="Number_of_Payment_Annually">-->
<!--                </li>-->
<!--            </ul>-->
<!--        </form>-->

<!--        <button id="Submit"> Calculate </button>-->
            <div class="col" style="margin-left: 5%; border-style:solid; border-color:black;">
        <form id="lease_form" >
            <div class="form-group">
                    <label for="Loan_Date">Total Number of Payments:</label>
                    <output id="Total_NO_Payments" readonly></output>
            </div>
            <div class="form-group">
                    <label for="Loan_Amount">Final Payment Date:</label>
                    <output type="text" id="Final_Payment_Date" readonly></output>
            </div>
            <div class="form-group">
                    <label for="Annual_Interest_Rate">Total Interest:</label>
                    <output type="text" id="Total_Interest" readonly></output>
            </div>
        </form>
    </div>

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
