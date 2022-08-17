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
                        <input type="checkbox" id="is_Family">
                    </li>
                </ul>
            </form>

            <button id="Submit_Salary_Sacrifice"> Calculate </button>
            <h3> Basic Information </h3>
            <form id="Salary_Sacrifice_Form_Output" >
                <ul class="no-bullets">
                    <li>
                        <label for="Age">Age :</label>
                        <input type="text" id="Age" readonly>
                    </li>
                    <li>
                        <label for="Finical_Year_Ending">Total Number of Payments:</label>
                        <input type="text" id="Finical_Year_Ending" readonly>
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

                    <h3>After Tax Contributions</h3>
                    <li>
                        <label for="Salary">Salary :</label>
                        <input type="text" id="After_Tax_Salary" readonly>
                    </li>
                    <li>
                        <label for="Salary_Sacrifice">Salary Sacrifice :</label>
                        <input type="text" id="After_Tax_Salary_Sacrifice" readonly>
                    </li>
                    <li>
                        <label for="Taxable_Income">Taxable Income:</label>
                        <input type="text" id="After_Tax_Taxable_Income" readonly>
                    </li>
                    <li>
                        <label for="Tax_Payable">Basic Tax Payable :</label>
                        <input type="text" id="After_Tax_Payable_Basic" readonly>
                    </li>
                    <li>
                        <label for="Levy"> Medicare Levy :</label>
                        <input type="text" id="After_Levy" readonly>
                    </li>
                    <li>
                        <label for="LM_Tax_Offset">Low & Middle Income Tax Offset :</label>
                        <input type="text" id="After_LM_Tax_Offset" readonly>
                    </li>
                    <li>
                        <label for="Low_Income_Tax_Offset">Low Income Tax Offset :</label>
                        <input type="text" id="After_Low_Income_Tax_Offset" readonly>
                    </li>
                    <li>
                        <label for="Tax_Payable">Tax Payable (Including ML) :</label>
                        <input type="text" id="After_Tax_Payable" readonly>
                    </li>
                    <li>
                        <label for="Net_Income">Net Income :</label>
                        <input type="text" id="After_Net_Income" readonly>
                    </li>
                    <li>
                        <label for="Less_After_Tax">Less After Tax Contributions :</label>
                        <input type="text" id="After_Less_After_Tax" readonly>
                    </li>
                    <li>
                        <label for="Take_Home_Pay">Take Home Pay :</label>
                        <input type="text" id="After_Take_Home_Pay" readonly>
                    </li>
                    <h5> Effects on your Super Contributions - After Tax </h5>
                    <li>
                        <label for="After_SG">10% SG ($) :</label>
                        <input type="text" id="After_SG" readonly>
                    </li>
                    <li>
                        <label for="After_Salary_Sacrifice">Salary Sacrifice ($) :</label>
                        <input type="text" id="After_Salary_Sacrifice" readonly>
                    </li>
                    <li>
                        <label for="After_Less_Contribution_Tax">Less 15% Contributions Tax :</label>
                        <input type="text" id="After_Less_Contribution_Tax" readonly>
                    </li>
                    <li>
                        <label for="After_tax">After Tax ($) :</label>
                        <input type="text" id="After_tax" readonly>
                    </li>

                    <h3>Pre-Tax Contributions</h3>
                    <li>
                        <label for="Salary">Salary :</label>
                        <input type="text" id="Pre_Tax_Salary" readonly>
                    </li>
                    <li>
                        <label for="Salary_Sacrifice">Salary Sacrifice :</label>
                        <input type="text" id="Pre_Tax_Salary_Sacrifice" readonly>
                    </li>
                    <li>
                        <label for="Taxable_Income">Taxable Income:</label>
                        <input type="text" id="Pre_Tax_Taxable_Income" readonly>
                    </li>
                    <li>
                        <label for="Tax_Payable">Basic Tax Payable :</label>
                        <input type="text" id="Pre_Tax_Payable_Basic" readonly>
                    </li>
                    <li>
                        <label for="Levy"> Medicare Levy :</label>
                        <input type="text" id="Pre_Levy" readonly>
                    </li>
                    <li>
                        <label for="LM_Tax_Offset">Low & Middle Income Tax Offset :</label>
                        <input type="text" id="Pre_LM_Tax_Offset" readonly>
                    </li>
                    <li>
                        <label for="Low_Income_Tax_Offset">Low Income Tax Offset :</label>
                        <input type="text" id="Pre_Low_Income_Tax_Offset" readonly>
                    </li>
                    <li>
                        <label for="Tax_Payable">Tax Payable (Including ML) :</label>
                        <input type="text" id="Pre_Tax_Payable" readonly>
                    </li>
                    <li>
                        <label for="Net_Income">Net Income :</label>
                        <input type="text" id="Pre_Net_Income" readonly>
                    </li>
                    <li>
                        <label for="Less_After_Tax">Less After Tax Contributions :</label>
                        <input type="text" id="Pre_Less_After_Tax" readonly>
                    </li>
                    <li>
                        <label for="Take_Home_Pay">Take Home Pay :</label>
                        <input type="text" id="Pre_Take_Home_Pay" readonly>
                    </li>
                    <h5> Effects on your Super Contributions - Pre-Tax </h5>
                    <li>
                        <label for="Pre_SG">10% SG ($) :</label>
                        <input type="text" id="Pre_SG" readonly>
                    </li>
                    <li>
                        <label for="Pre_Salary_Sacrifice">Salary Sacrifice ($) :</label>
                        <input type="text" id="Pre_Salary_Sacrifice" readonly>
                    </li>
                    <li>
                        <label for="Pre_Less_Contribution_Tax">Less 15% Contributions Tax :</label>
                        <input type="text" id="Pre_Less_Contribution_Tax" readonly>
                    </li>
                    <li>
                        <label for="Pre_After_tax">After Tax ($) :</label>
                        <input type="text" id="Pre_After_tax" readonly>
                    </li>
                    <h3> Summary </h3>
                    <li>
                        <label for="Tax_Saving">Personal Tax Saving :</label>
                        <input type="text" id="Tax_Saving" readonly>
                    </li>
                    <li>
                        <label for="Total_TaxSaving">Total Tax Saving :</label>
                        <input type="text" id="Total_TaxSaving" readonly>
                    </li>
                    <li>
                        <label for="Increase">Increase In Take Home Pay and Super :</label>
                        <input type="text" id="Increase" readonly>
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
<script src = "\team18-app_fit3048\webroot\js\salary_sacrifice.js"></script>
</body>
