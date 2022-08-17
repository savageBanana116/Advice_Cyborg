<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */
?>
<!doctype html>
<html lang="en">
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
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
            <a class="nav-item nav-link " href="#">Age-pension (Coming Soon)</a>
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
                        <input type="number" class="form-control" onKeyPress="return check(event,value)" onInput="checkLength(this.id)"  id="Age">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                        <label for="Retirement_Age" class="col-4 col-form-label">Retirement Age:</label>
                    <div class="col-8">
                        <input type="number" class="form-control" onKeyPress="return check(event,value)" onInput="checkLength(this.id)"  id="Retirement_Age" >
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
                        <label for="Indexation" class="col-4 col-form-label">Indexation (%): </label>
                    <div class="col-8">
                        <input type="number" class="form-control" class="form-control" onKeyPress="return check(event,value)" onInput="restrict(this); checkLength(this.id)"  id="Indexation">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                        <label for="Interest_Rate" class="col-4 col-form-label">Interest Rate (%): </label>
                    <div class="col-8">
                        <input type="number" class="form-control" class="form-control" onKeyPress="return check(event,value)" onInput="restrict(this); checkLength(this.id)" id="Interest_Rate">
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
                        <input type="number" class="form-control" onKeyPress="return check(event,value)" onInput="checkLength(this.id)" id="Estimated_Return_Rate" required>
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
                    <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">
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

    <script>
        //input validation
        Year_Payments.oninput = function () {
            const maxlength = 10;
            if (this.value.length > maxlength) {
                this.value = this.value.slice(0,maxlength);
            }
        }

        Payment_Required_Today.oninput = function () {
            const maxlength = 10;
            if (this.value.length > maxlength) {
                this.value = this.value.slice(0,maxlength);
            }
        }

        Current_Super.oninput = function () {
            const maxlength = 10;
            if (this.value.length > maxlength) {
                this.value = this.value.slice(0,maxlength);
            }
        }
        Current_Net_Contributions.oninput = function () {
            const maxlength = 10;
            if (this.value.length > maxlength) {
                this.value = this.value.slice(0,maxlength);
            }
        }


        function check(e,value){
            //Check Charater
            var unicode=e.charCode? e.charCode : e.keyCode;
            if (value.indexOf(".") != -1)if( unicode == 46 )return false;
            if (unicode!=8)if((unicode<48||unicode>57)&&unicode!=46)return false;
        }
        function checkLength(id){
            var fieldVal = document.getElementById(id).value;
            const  limit_percent = 100, limit_age = 120;
            if(id === "Indexation" || id === "Interest_Rate" || id === "Estimated_Return_Rate" ){
                if(fieldVal <= limit_percent){
                    return true;
                }
                else
                {
                    var str = document.getElementById(id).value;
                    str = str.substring(0, str.length - 1);
                    console.log(str);
                    document.getElementById(id).value = str;
                }
            } else{
                if(fieldVal <= limit_age){
                    return true;
                }
                else
                {
                    var str = document.getElementById(id).value;
                    str = str.substring(0, str.length - 1);
                    document.getElementById(id).value = str;
                }
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
<script src="\team18-app_fit3048\webroot\js\retirement.js"></script>
</body>
