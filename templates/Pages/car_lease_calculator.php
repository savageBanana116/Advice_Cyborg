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
    td {
        padding-bottom: 2.5em;

    }
</style>
<link rel="stylesheet" href="\team18-app_fit3048\webroot\css\styles.css" type="text/css">
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success py-4 w-100"  ">

<div class="collapse navbar-collapse" id="navbarNav" >
    <ul class="navbar-nav">
        <li class="nav-item active px-5" style="border-bottom:  5px solid #f5f4eb">
            <a class="nav-link" href="car_lease_calculator">Car Lease <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item px-5 ">
            <a class="nav-link" href="income_tax_calculator">Income Tax</a>
        </li>
        <li class="nav-item px-5">
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
            <br>
            <div class="form-group row">
                <label for="Loan_Date" class="col-4 col-form-label">Date Of Loan</label>
                <div class="col-8">
                <input id="Loan_Date" name="Loan_date" placeholder="dd/mm/yyyy" type="date" class="form-control"  required="required">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="Loan_Amount" class="col-4 col-form-label">Amount Of Loan $</label>
                <div class="col-8">
                <input id="Loan_Amount" name="Loan_Amount" placeholder="30000" type="number" class="form-control" min="1" max="999999999" required="required">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="Annual_Interest_Rate" class="col-4 col-form-label">Annual Interest Rate (%)</label>
                <div class="col-8">
                <input id="Annual_Interest_Rate" onKeyPress="return check(event,value)" onInput="restrict(this);checkLength() " name="Annual_Interest_Rate" placeholder="5" type="number" min="0" max="100" class="form-control" required="required">
                </div>
                </div>
            <br>
            <div class="form-group row">
                <label for="Terms_of_Loan" class="col-4 col-form-label">Term Of Loan (Years)</label>
                <div class="col-8">
                <input id="Terms_of_Loan" name="Terms_of_Loan" placeholder="3" type="number" class="form-control" min="1" max="50" required="required">
            </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="Number_of_Payment_Annually" class="col-4 col-form-label">Number of Payments Annually</label>
                <div class="col-8">
                <input id="Number_of_Payment_Annually" name="Number_of_Payment_Annually" placeholder="32" type="number"  min="1" max="365" class="form-control" required="required">
            </div>
            </div>
            <br>
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
            <div class="form-group row" style="">
                    <label for="Loan_Date" class="col-4 col-form-label">Total Number of Payments:</label>
                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">
                    <output id="Total_NO_Payments" readonly></output>
                </div>
            </div>
            <div class="form-group row">
                    <label for="Loan_Amount" class="col-4 col-form-label">Final Payment Date:</label>
                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">
                    <output type="text" id="Final_Payment_Date" readonly></output>
                </div>
            </div>
            <div class="form-group row">
                    <label for="Annual_Interest_Rate" class="col-4 col-form-label">Total Interest:</label>
                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">
                    <output type="text" id="Total_Interest" readonly></output>
                </div>
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

    <script>
        function check(e,value){
            //Check Charater
            var unicode=e.charCode? e.charCode : e.keyCode;
            if (value.indexOf(".") != -1)if( unicode == 46 )return false;
            if (unicode!=8)if((unicode<48||unicode>57)&&unicode!=46)return false;
        }
        function checkLength(){
            var fieldVal = document.getElementById('Annual_Interest_Rate').value;
            //Suppose u want 3 number of character
            if(fieldVal <= 100){
                return true;
            }
            else
            {
                var str = document.getElementById('Annual_Interest_Rate').value;
                str = str.substring(0, str.length - 1);
                document.getElementById('Annual_Interest_Rate').value = str;
            }
        }
        function restrict(tis) {
            var prev = tis.getAttribute("data-prev");
            //console.log(prev);
            prev = (prev != '') ? prev : '';
            if (Math.round(tis.value*100)/100!=tis.value)
                tis.value=prev;
            tis.setAttribute("data-prev",tis.value)
        }
    </script>
<script src="\team18-app_fit3048\webroot\js\lease.js"></script>
</body>
