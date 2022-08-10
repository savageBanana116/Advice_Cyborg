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
            <h2 class="text-uppercase" style="font-size: 56px">Salary Sacrifice Calculators</h2>
            <form id="Salary_Sacrifice_Form" >
                <ul class="no-bullets">
                    <li>
                        <label for="DOB">Date of Birth:</label>
                        <input type="date" id="DOB">
                    </li>
                    <li>
                        <label for="Salary">Salary ($):</label>
                        <input type="number" id="Salary" >
                    </li>
                    <li>
                        <label for="Salary_Sacrifice_Amount">Salary Sacrifice Amount :</label>
                        <input type="number" id="Salary_Sacrifice_Amount">
                    </li>
                    <li>
                        <label for="is_Family">Are you considered apart of a family  (Yes/No):</label>
                        <input type="text" id="is_Family">
                    </li>
                </ul>
            </form>

            <button id="Submit"> Calculate </button>

            <form id="Salary_Sacrifice_Form_Output" >
                <ul class="no-bullets">
                    <li>
                        <label for="Finical_Year_Ending">Total Number of Payments:</label>
                        <input type="text" id="Finical_Year_Ending" readonly>
                    </li>
                    <li>
                        <label for="Client_Age">Final Payment Date:</label>
                        <input type="text" id="Client_Age" readonly>
                    </li>
                    <li>
                        <label for="Concessional_Contribution_Cap">Concessional Contribution Cap:</label>
                        <input type="text" id="Concessional_Contribution_Cap" readonly>
                    </li>
                    <li>
                        <label for="SG_Contributions">SG Contributions:</label>
                        <input type="text" id="SG_Contributions" readonly>
                    </li>
                    <li>
                        <label for="Allowed_Salary_Sacrifice">Salary Sacrifice Allowable :</label>
                        <input type="text" id="Allowed_Salary_Sacrifice" readonly>
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
