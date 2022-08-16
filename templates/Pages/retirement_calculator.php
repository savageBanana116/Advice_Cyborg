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
<nav class="navbar navbar-expand-lg navbar-dark bg-success py-4 w-100"  ">

<div class="collapse navbar-collapse" id="navbarNav" >
    <ul class="navbar-nav">
        <li class="nav-item active px-5">
            <a class="nav-link" href="car_lease_calculator">Car Lease <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item px-5 ">
            <a class="nav-link" href="income_tax_calculator">Income Tax</a>
        </li>
        <li class="nav-item px-5" style="border-bottom:  5px solid #f5f4eb">
            <a class="nav-link" href="retirement_calculator">Retirement</a>
        </li>
        <li class="nav-item px-5">
            <a class="nav-link" href="salary_sacrifice_calculator">Salary Sacrifice</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="age_pension_calculator.php">Age Pension</a>
        </li>
    </ul>
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
            <h2 class="text-uppercase" style="font-size: 56px">Retirement Calculators</h2>
            <div class="row">
                <div class="col" style="border-style:solid; border-color:black; background-color: #403535; color: white;"><h3> To Get Started!</h3>
                    <br>
                    <h5>Tell us about your plans for retirement, we will use this to calculate the amount of the loan as well as the final payment date.</h5></div>
                <div class="col" style="margin-left: 5%; border-style:solid; border-color:black; background-color: #403535; color: white;">
                    <h5>Your Expected Loan Interest</h5></div>
            </div>
            <div class="row">
                <div class="col" style="border-style:solid; border-color:black;" >
            <form id="Retirement_Calculator_Form" >
                <br>
                <div class="form-group row">
                        <label for="Age" class="col-4 col-form-label">Age: </label>
                    <div class="col-8">
                        <input type="number" class="form-control" id="Age">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                        <label for="Retirement_Age" class="col-4 col-form-label">Retirement Age:</label>
                    <div class="col-8">
                        <input type="number" class="form-control" id="Retirement_Age" >
                    </div>
                </div>
                <br>
                <div class="form-group row">
                        <label for="Year_Payments" class="col-4 col-form-label">Year of Payments :</label>
                    <div class="col-8">
                        <input type="number" class="form-control" id="Year_Payments">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                        <label for="Payment_Required_Today" class="col-4 col-form-label">Payment Required Amount Today:</label>
                    <div class="col-8">
                        <input type="text"  class="form-control" id="Payment_Required_Today">
                    </div>
                </div>
                <br>

                <div class="form-group row">
                        <label for="Indexation" class="col-4 col-form-label">Indexation: </label>
                    <div class="col-8">
                        <input type="number" class="form-control" id="Indexation">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                        <label for="Interest_Rate" class="col-4 col-form-label">Interest Rate: </label>
                    <div class="col-8">
                        <input type="number" class="form-control" id="Interest_Rate">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                        <label for="Current_Super" class="col-4 col-form-label">Current Superannuation: </label>
                    <div class="col-8">
                        <input type="number" class="form-control" id="Current_Super">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                        <label for="Current_Net_Contributions" class="col-4 col-form-label">Current Net Contributions: </label>
                    <div class="col-8">
                        <input type="number" class="form-control" id="Current_Net_Contributions">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                        <label for="Estimated_Return_Rate" class="col-4 col-form-label">Current Rate of Return: </label>
                    <div class="col-8">
                        <input type="number" class="form-control" id="Estimated_Return_Rate">
                    </div>
                </div>
            </form>
                    <br>
                    <div class="form-group">
            <button id="Submit_retirement" class="btn btn-primary" > Calculate </button>
                    </div>
                    <br>
                </div>

                <div class="col" style="margin-left: 5%; border-style:solid; border-color:black;">
            <form id="Retirement_Calculator_Form_Output" >
                <br>
                <div class="form-group row" s>
                        <label for="Payment_Required_Future" class="col-4 col-form-label">Payment Required Amount Future :</label>
                    <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">
                        <output type="text" id="Payment_Required_Future" readonly></output>
                    </div>
                </div>
                <br>
                <div class="form-group row" >
                        <label for="Value_Required" class="col-4 col-form-label">Value Required :</label>
                    <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%6">
                        <output type="text" id="Value_Required" readonly></output>
                    </div>
                </div>
                <br>
                <div class="form-group row" >
                        <label for="Estimated_Annual_Deduct" class="col-4 col-form-label">Estimated Annual Deductible Amount:</label>
                    <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">
                        <output type="text" id="Estimated_Annual_Deduct" readonly></output>
                </div>
                </div>
                <br>
                <div class="form-group row" >
                        <label for="Estimated_Super" class="col-4 col-form-label">Estimated Value of Super at Retirement:</label>
                    <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">
                        <output type="text" id="Estimated_Super" readonly></output>
                    </div>
                </div>
                <br>
                <div class="form-group row" >
                        <label for="Lumpsum" class="col-4 col-form-label" >Lumpsum Shortfall:</label>
                    <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">
                        <output type="text" id="Lumpsum" readonly></output>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                        <label for="Net_Payment" class="col-4 col-form-label">Net Payment Required to Reach Target(Surplus):</label>
                    <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 10%">
                        <output type="text" id="Net_Payment" readonly></output>
                </div>
                    <br>
                </div>
                <div class="form-group row" >
                        <label for="Gross_Payment" class="col-4 col-form-label">Gross Payment (Inc Surcharge):</label>
                    <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">
                        <output type="text" id="Gross_Payment" readonly></output>
                    </div>
                </div>
                <br>
            </form>
        </div>
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
<script src="\team18-app_fit3048\webroot\js\retirement.js"></script>
</body>
