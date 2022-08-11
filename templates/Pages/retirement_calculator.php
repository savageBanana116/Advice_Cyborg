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

<body>
<div class="container">
    <!--
    <div class="text-center" style="margin-top: 5%">
        <h2 class="text-uppercase" style="font-size: 56px">Salary Sacrifice Calculators</h2>
        <p class="text-muted">Calculate your ___________</p>
    </div>-->
    <div class="container" >
        <div class="text-center" style="margin-top: 5%">
            <h2 class="text-uppercase" style="font-size: 56px">Retirement Calculators</h2>
            <form id="Retirement_Calculator_Form" >
                <ul class="no-bullets">
                    <li>
                        <label for="Age">Age: </label>
                        <input type="number" id="Age">
                    </li>
                    <li>
                        <label for="Retirement_Age">Retirement Age:</label>
                        <input type="number" id="Retirement_Age" >
                    </li>
                    <li>
                        <label for="Year_Payments">Year of Payments :</label>
                        <input type="number" id="Year_Payments">
                    </li>
                    <li>
                        <label for="Payment_Required_Today">Payment Required Amount Today:</label>
                        <input type="text" id="Payment_Required_Today">
                    </li>
                    <li>
                        <label for="Indexation">Indexation: </label>
                        <input type="number" id="Indexation">
                    </li>
                    <li>
                        <label for="Interest_Rate">Interest Rate: </label>
                        <input type="number" id="Interes_Rate">
                    </li>
                    <li>
                        <label for="Current_Super">Current Superannuation: </label>
                        <input type="number" id="Current_Super">
                    </li>
                    <li>
                        <label for="Current_Net_Contributions">Current Net Contributions: </label>
                        <input type="number" id="Current_Net_Contributions">
                    </li>
                    <li>
                        <label for="Estimated_Return_Rate">Current Rate of Return: </label>
                        <input type="number" id="Estimated_Return_Rate">
                    </li>
                </ul>
            </form>

            <button id="Submit"> Calculate </button>

            <form id="Retirement_Calculator_Form_Output" >
                <ul class="no-bullets">
                    <li>
                        <label for="Value_Required">Value Required :</label>
                        <input type="text" id="Value_Required" readonly>
                    </li>
                    <li>
                        <label for="Estimated_Annual_Deduct">Estimated Annual Deductible Amount:</label>
                        <input type="text" id="Estimated_Annual_Deduct" readonly>
                    </li>
                    <li>
                        <label for="Estimated_Super">Estimated Value of Super at Retirement:</label>
                        <input type="text" id="Estimated_Super" readonly>
                    </li>
                    <li>
                        <label for="Lumpsum">Lumpsum Shortfall:</label>
                        <input type="text" id="Lumpsum" readonly>
                    </li>
                    <li>
                        <label for="Net_Payment">Net Payment Required to Reach Target(Surplus):</label>
                        <input type="text" id="Net_Payment" readonly>
                    </li>
                    <li>
                        <label for="Cross_Payment">Gross Payment (Inc Surcharge):</label>
                        <input type="text" id="Cross_Payment" readonly>
                    </li>
                </ul>
            </form>
        </div>

    </div>




</div>
<!--
<nav class="navbar navbar-expand-lg navbar-dark bg-success py-4 w-100" style="width: 100%; margin-bottom: 25%">

    <div class="collapse navbar-collapse" id="navbarNav" style="font-size: 300%;color: white">
        <ul class="navbar-nav">
            <li class="nav-item active px-5">
                <a class="nav-link" href="car_lease_calculator">Car Lease <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item px-5">
                <a class="nav-link" href="income_tax_calculator">Income Tax</a>
            </li>
            <li class="nav-item px-5">
                <a class="nav-link" href="retirement_calculator">Retirement</a>
            </li>
            <li class="nav-item px-5" style="border-bottom:  5px solid #f5f4eb">
                <a class="nav-link" href="#">Salary Sacrifice</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="age_pension_calculator">Age Pension</a>
            </li>
        </ul>
    </div>
</nav>
-->

</body>
