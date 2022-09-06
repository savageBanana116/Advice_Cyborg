<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */
?>
<!doctype html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html lang="en">

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<?php
echo $this->Html->css('custom.css');
?>
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

<body>
<nav class="navbar justify-content-center navbar-light bg-light">
    <ul class="nav justify-content-center">
        <li class="nav-item" >
            <a class="navbar-brand" href="calculators">Calculator Home </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="car_lease_calculator">Car-Lease </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="income_tax_calculator">Income-Tax </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"  style="color:lightblue"href="retirement_calculator">Retirement </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="salary_sacrifice_calculator">Salary-Sacrifice </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="age_pension_calculator">Age-pension</a>
        </li>
    </ul>
    <!--        <a class="nav-item " href="car_lease_calculator">Car-Lease </a>-->
    <!--        <a class="nav-item " href="income_tax_calculator">Income-Tax </a>-->
    <!--        <a class="nav-item " href="retirement_calculator">Retirement </a>-->
    <!--        <a class="nav-item  " href="salary_sacrifice_calculator">Salary-Sacrifice </a>-->
    <!--        <a class="nav-item  " href="#">Age-pension (Coming Soon) </a>-->
</nav>

<div class="container">
    <!--
    <div class="text-center" style="margin-top: 5%">
        <h2 class="text-uppercase" style="font-size: 56px">Salary Sacrifice Calculators</h2>
        <p class="text-muted">Calculate your ___________</p>
    </div>-->
    <div class="container" >
        <div class="text-center" style="margin-top: 5%">
            <h2 class="myTitle" >Age-Pension Calculator</h2>
            <div class="row">
                <div class="col colorBox" ><h3 class="mySubTitle"> To Get Started!</h3>
                    <br>
                    <h6 class="mySubTitle2">Tell us about yourself </h6></div>

            </div>

            <div class="row" style="padding-bottom:2em">
                <div class="col thinBox" class="form-group row" style="padding-bottom: 40px" >

                    <form class="form-inline" id="age_pension_basic_form" >
                        <br>
                        <div  class="mb-4" style="margin-top: 1em; ">
                            <span>Are you <span class="blue"> a single or a couple?</span></span>
                            <div style="border: 1px solid lightgray;border-radius: 5px;">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio"  name="is_relationship" id="is_single" class="custom-control-input" value="single" >
                                    <label class="custom-control-label" for="customRadioInline">Single</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio"  name="is_relationship" id="is_couple"  class="custom-control-input" value="couple" checked>
                                    <label class="custom-control-label" for="customRadioInline">Couple</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" style="margin-top: 1em; ">
                            <span>Do you own <span class="blue">a home ?</span></span>
                            <div style="border: 1px solid lightgray;border-radius: 5px;">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio"  name="is_house" id="is_homeowner" class="custom-control-input" value="yes">
                                    <label class="custom-control-label" for="customRadioInline">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio"  name="is_house" id="not_homeowner" class="custom-control-input" value="no" checked>
                                    <label class="custom-control-label" for="customRadioInline">No</label>
                                </div>
                            </div>
                        </div>

                        <div tclass="form-group" syle="padding-top:1em; padding-bottom:1em">
                            <button type="button" id="Submit_Age_pension_Basic" class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase"> Continue </button>
                        </div>
                        <br>
                    </form>

                    <form style="display: none" class="form-inline" id="age_pension_input_double">

                        <H1>Personal Information</H1>
                        <div class="form-group row">
                            <div class="col-xs-2">
                                <h2>Client</h2>
                                <span>What is your<span class="blue" > name?</span></span>
                                <input type="number"  class="form-control" min="18" max="120" id="Age">
                            </div>
                            <div class="col-xs-2">
                                <h2>Spouse</h2>
                                <span>What is your spouse's <span class="blue"> name</span> </span>
                                <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-2">
                                <span>What is your<span class="blue" > gender?</span></span>
                                <div style="border: 1px solid lightgray;border-radius: 5px; height: 50px; ">
                                    <div class="custom-control custom-radio custom-control-inline">

                                        <label class="custom-control-label" for="customRadioInline">Male
                                            <input type="radio"  name="is_gender" id="is_gender" class="custom-control-input" value="Male" checked>
                                        </label>

                                        <label class="custom-control-label" for="customRadioInline" style="padding-right: 15px; padding-left: 15px; padding-top: 10px">Female
                                            <input type="radio" name="is_gender" id="is_gender" class="custom-control-input" value="Female" checked>
                                        </label>

                                        <label class="custom-control-label" for="customRadioInline">Other
                                            <input type="radio"  name="is_gender" id="is_gender" class="custom-control-input" value="Other" checked>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <span>What is your spouse's<span class="blue" > gender?</span></span>
                                <div style="border: 1px solid lightgray;border-radius: 5px; height: 50px; ">
                                    <div class="custom-control custom-radio custom-control-inline" >
                                        <label class="custom-control-label" for="customRadioInline">Male
                                            <input type="radio"  name="is_gender_spouse" id="is_gender_spouse" class="custom-control-input" value="Male" checked>
                                        </label>

                                        <label class="custom-control-label" for="customRadioInline" style="padding-right: 15px; padding-left: 15px; padding-top: 10px">Female
                                            <input type="radio"  name="is_gender_spouse" id="is_gender_spouse" class="custom-control-input" value="Female" checked>
                                        </label>

                                        <label class="custom-control-label" for="customRadioInline">Other
                                            <input type="radio"  name="is_gender_spouse" id="is_gender_spouse" class="custom-control-input" value="Other" checked>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="form-group row">
                                <div class="col-xs-2">
                                    <span>What is your<span class="blue" > date of birth?</span></span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Age">
                                </div>
                                <div class="col-xs-2">
                                    <span>What is your spouse's <span class="blue"> date of birth?</span> </span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-2">
                                    <span>What is your<span class="blue" > Gross annual salary?</span></span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Age">
                                </div>
                                <div class="col-xs-2">
                                    <span>What is your spouse's <span class="blue">Gross annual salary?</span> </span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-2">
                                    <span>What is your<span class="blue" > Superannuation?</span></span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Age">
                                </div>
                                <div class="col-xs-2">
                                    <span>What is your spouse's <span class="blue">Superannuation?</span> </span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                                </div>

                            </div>
                        <div class="form-group row">
                            <H1> Non Financial Assets </H1>
                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Car/s, Caravan, Boat etc?</span> </span>
                                <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                            </div>

                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> contents?</span> </span>
                                <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                            </div>
                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Investment property?</span></span>
                                <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <H1> Financial Assets </H1>
                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Bank accounts?</span> </span>
                                <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                            </div>

                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Shares?</span> </span>
                                <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                            </div>
                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Managed funds?</span></span>
                                <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                            </div>
                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> life insurance?</span> </span>
                                <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                            </div>

                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Loans,Debentures/Bonds?</span> </span>
                                <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                            </div>
                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Superannuation?</span></span>
                                <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                            </div>

                        </div>
                        <div class="form-group row">
                            <H1> Other Assets </H1>
                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Gifted assets?(max $10,000 p.a)</span> </span>
                                <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                            </div>

                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Funeral Bond?</span> </span>
                                <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                            </div>
                        </div>
                        <div class="form-group" style="padding-top:1em; padding-bottom:1em">
                            <button type="button" id="Submit_Age_pension_Basic" class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase"> Calculate </button>
                        </div>

                    </form>




                    <form class="form-inline" style="display: none" id="age_pension_input_single_form">
                            <h1>Personal Information</h1>
                            <div class="form-group row">

                                <div class="col-xs-2">

                                    <span>What is your<span class="blue"> Name ?</span></span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                                </div>

                                <div class="col-xs-2">
                                    <span>What is your <span class="blue"> date of birth?</span> </span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                                </div>
                                <div class="col-xs-2">
                                    <span>What is your<span class="blue"> Gross annual salary ?</span></span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                                </div>
                            </div>
                            </br>


                            <div class="form-group row">
                                <H1> Non Financial Assets </H1>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Car/s, Caravan, Boat etc?</span> </span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                                </div>

                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> contents?</span> </span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                                </div>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Investment property?</span></span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <H1> Financial Assets </H1>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Bank accounts?</span> </span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                                </div>

                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Shares?</span> </span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                                </div>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Managed funds?</span></span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                                </div>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> life insurance?</span> </span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                                </div>

                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Loans,Debentures/Bonds?</span> </span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                                </div>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Superannuation?</span></span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                                </div>

                            </div>
                            <div class="form-group row">
                                <H1> Other Assets </H1>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Gifted assets?(max $10,000 p.a)</span> </span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                                </div>

                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Funeral Bond?</span> </span>
                                    <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                                </div>
                            </div>
                        <div tclass="form-group" style="padding-top:1em; padding-bottom:1em">
                            <button type="button" id="Submit_Age_pension_Basic" class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase"> Calculate </button>
                        </div>
                        </form>


                </div>
                </div>
                </div>




                <br>
            </div>
        </div>





<script>
    //input validation
    /*
    Salary.oninput = function () {
        const maxlength = 7;
        if (this.value.length > maxlength) {
            this.value = this.value.slice(0,maxlength);
        }
    }

    Salary_Sacrifice_Amount.oninput = function () {
        const maxlength = 7;
        if (this.value.length > maxlength) {
            this.value = this.value.slice(0,maxlength);
        }
    }
    */
    function check(e,value){
        //Check Character
        var unicode=e.charCode? e.charCode : e.keyCode;
        if (value.indexOf(".") != -1)if( unicode == 46 )return false;
        if (unicode!=8)if((unicode<48||unicode>57)&&unicode!=46)return false;
    }
    /*
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

*/
</script>

<?= $this -> Html -> script('age_pension.js') ?>
</body>
