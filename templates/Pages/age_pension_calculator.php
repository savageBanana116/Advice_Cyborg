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

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

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

                        <div class="container" style="padding-bottom: 20px">
                            <div class="row">
                                <div  class="col-sm" style="margin-top: 1em; ">
                                    <span>Are you <span class="blue"> a single or a couple?</span></span>
                                    <div style="border: 1px solid lightgray;border-radius: 5px;">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio"  name="is_relationship" id="is_single" class="custom-control-input" value="single"checked >
                                            <label class="custom-control-label" for="customRadioInline">Single</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio"  name="is_relationship" id="is_couple"  class="custom-control-input" value="couple" >
                                            <label class="custom-control-label" for="customRadioInline">Couple</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm" style="margin-top: 1em; ">
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
                            </div>
                        </div>



                        <div tclass="form-group" syle="padding-top:1em; padding-bottom:1em">
                            <button type="button" id="Submit_Age_pension_Basic" class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase"> Continue </button>
                        </div>

                    </form>

                    <form style="display: none" class="form-inline" id="age_pension_input_double">
                        <H1>PERSONAL INFORMATION</H1>
                        <div class="form-group row">
                            <div class="col-xs-2">
                                <h2>Client</h2>
                                <span>What is your<span class="blue" > name?</span></span>
                                <input type="text"   class="form-control" min="18" max="120" onkeypress="return lettersOnly(event)" id="name">
                            </div>
                            <div class="col-xs-2">
                                <h2>Spouse</h2>
                                <span>What is your spouse's <span class="blue"> name</span> </span>
                                <input type="text"  class="form-control" min="18" max="120"  onkeypress="return lettersOnly(event)" id="spouse_name" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-2">
                                <span>What is your<span class="blue" > gender?</span></span>
                                <div style="border: 1px solid lightgray;border-radius: 5px; height: 50px; ">
                                    <div class="custom-control custom-radio custom-control-inline">

                                        <label class="custom-control-label" for="customRadioInline">Male
                                            <input type="radio"  name="is_gender" id="is_gender_male" class="custom-control-input" value="Male" checked>
                                        </label>

                                        <label class="custom-control-label" for="customRadioInline" style="padding-right: 15px; padding-left: 15px; padding-top: 10px">Female
                                            <input type="radio" name="is_gender" id="is_gender_female" class="custom-control-input" value="Female">
                                        </label>


                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <span>What is your spouse's<span class="blue" > gender?</span></span>
                                <div style="border: 1px solid lightgray;border-radius: 5px; height: 50px; ">
                                    <div class="custom-control custom-radio custom-control-inline" >
                                        <label class="custom-control-label" for="customRadioInline">Male
                                            <input type="radio"  name="is_gender_spouse" id="is_gender_male_spouse" class="custom-control-input" value="Male" >
                                        </label>

                                        <label class="custom-control-label" for="customRadioInline" style="padding-right: 15px; padding-left: 15px; padding-top: 10px">Female
                                            <input type="radio"  name="is_gender_spouse" id="is_gender_female_spouse" class="custom-control-input" value="Female" checked>
                                        </label>


                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="form-group row">
                                <div class="col-xs-2" >
                                    <span>What is your<span class="blue" > date of birth?</span></span>
                                    <input type="date" placeholder="dd-mm-yyyy" min="1900-01-01" max="2004-01-01" class="form-control" id="DOB">
                                </div>

                                <div class="col-xs-2">
                                    <span>What is your spouse's <span class="blue"> date of birth?</span> </span>
                                    <input type="date" placeholder="dd-mm-yyyy" min="1900-01-01" max="2004-01-01" class="form-control" id="spouse_DOB">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-xs-2">
                                    <span>What is your<span class="blue" > Gross annual salary?</span></span>
                                    <input type="number"  class="form-control" min="18" max="120" onKeyPress="return check(event,value)" id="Gross_annual_salary">
                                </div>
                                <div class="col-xs-2">
                                    <span>What is your spouse's <span class="blue">Gross annual salary?</span> </span>
                                    <input type="number"  class="form-control" min="18" max="120" onKeyPress="return check(event,value)" id="spouse_Gross_annual_salary" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-2">
                                    <span>What is your<span class="blue" > Superannuation?</span></span>
                                    <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="Super">
                                </div>
                                <div class="col-xs-2">
                                    <span>What is your spouse's <span class="blue">Superannuation?</span> </span>
                                    <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="spouse_Super" >
                                </div>

                            </div>
                        <br>
                        <div class="form-group row">
                            <H1> NON FINANCIAL ASSETS </H1>
                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Car/s, Caravan, Boat etc?</span> </span>
                                <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="vehicle_invest" >
                            </div>

                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> contents?</span> </span>
                                <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="content_invest" >
                            </div>
                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Investment property?</span></span>
                                <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="property_invest" >
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <H1> FINANCIAL ASSETS </H1>
                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Bank accounts?</span> </span>
                                <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="bank_accounts_invest" >
                            </div>

                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Shares?</span> </span>
                                <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="shares_invest" >
                            </div>
                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Managed funds?</span></span>
                                <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="funds_invest" >
                            </div>
                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> life insurance?</span> </span>
                                <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="insurance_invest" >
                            </div>

                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Loans,Debentures/Bonds?</span> </span>
                                <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="loans_invest" >
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <H1> OTHER ASSETS </H1>
                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Gifted assets?(max $10,000 p.a)</span> </span>
                                <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="gifted_assets" >
                            </div>

                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Funeral Bond?</span> </span>
                                <input type="number"  class="form-control"  onKeyPress="return check(event,value)" min="18" max="120" id="funeral_bond" >
                            </div>
                        </div>
                        <div tclass="form-group" style="padding-top:1em; padding-bottom:1em">
                            <button type="button" id="Submit_Age_pension_single" onKeyPress="return check(event,value)"  data-bs-toggle="modal" onclick="openModel_double()" class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase"  >
                                Calculate
                            </button>
                        </div>

                    </form>




                    <form class="form-inline" style="display: none" id="age_pension_input_single_form">
                            <h1>Personal Information</h1>

                            <div class="form-group row">


                                <div class="col-xs-2">
                                    <span>What is your<span class="blue" > name?</span></span>
                                    <input type="text"  class="form-control" min="18" max="120" id="name_single" onkeypress="return lettersOnly(event)"  required>
                                </div>

                                <div class="col-xs-2">
                                    <span>What is your<span class="blue" > gender?</span></span>
                                    <div style="border: 1px solid lightgray;border-radius: 5px; height: 35px; ">
                                        <div class="custom-control custom-radio custom-control-inline">

                                            <label class="custom-control-label" for="customRadioInline">Male
                                                <input type="radio"  name="is_gender" id="is_gender_male_single" class="custom-control-input" value="Male" checked>
                                            </label>

                                            <label class="custom-control-label" for="customRadioInline" style="padding-right: 15px; padding-left: 15px; padding-top: 10px">Female
                                                <input type="radio" name="is_gender" id="is_gender_female_single" class="custom-control-input" value="Female">
                                            </label>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-2">
                                    <span>What is your<span class="blue" > date of birth?</span></span>
                                    <input type="date" placeholder="dd-mm-yyyy" min="1900-01-01" max="2004-01-01" class="form-control" id="DOB_single" required>
                                </div>
                                <div class="col-xs-2">
                                    <span>What is your<span class="blue" > Gross annual salary?</span></span>
                                    <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="Gross_annual_salary_single">
                                </div>

                            </div>

                            </br>


                            <div class="form-group row">
                                <H1> Non Financial Assets </H1>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Car/s, Caravan, Boat etc?</span> </span>
                                    <input type="number"  class="form-control"   min="0" max="999999999"  onKeyPress="return check(event,value)" id="vehicle_invest_single" >
                                </div>

                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> contents?</span> </span>
                                    <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="content_invest_single" >
                                </div>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Investment property?</span></span>
                                    <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="property_invest_single" >
                                </div>

                            </div><br>
                            <div class="form-group row">
                                <H1> Financial Assets </H1>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Bank accounts?</span> </span>
                                    <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="bank_accounts_invest_single" >
                                </div>

                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Shares?</span> </span>
                                    <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="shares_invest_single" >
                                </div>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Managed funds?</span></span>
                                    <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="funds_invest_single" >
                                </div>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> life insurance?</span> </span>
                                    <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="insurance_invest_single" >
                                </div>

                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Loans,Debentures/Bonds?</span> </span>
                                    <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="loans_invest_single" >
                                </div>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Superannuation?</span></span>
                                    <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="super_single" >
                                </div>

                            </div><br>
                            <div class="form-group row">
                                <H1> Other Assets </H1>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Gifted assets?(max $10,000 p.a)</span> </span>
                                    <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="gifted_assets-single" >
                                </div>

                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Funeral Bond?</span> </span>
                                    <input type="number"  class="form-control" onKeyPress="return check(event,value)" min="18" max="120" id="funeral_bond_single" >
                                </div>



                            </div>
                        <div class="form-group" style="padding-top:1em; padding-bottom:1em">
                            <button type="button" id="Submit_Age_pension_single"  data-bs-toggle="modal" onclick="openModel_single()"  class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase"  >
                                Calculate
                            </button>
                        </div>
                        </form>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Pension Output</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <output id="model_output">0</output>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>






                <br>
            </div>
        </div>



<script>
    function openModel_single(){
        let DOB  = document.getElementById('DOB_single').value;
        const DOB_String = DOB.toString();
        let DOB_check = new Date(Date.parse(DOB_String));
        let name = document.getElementById('name_single').value;
        let GAS = document.getElementById('Gross_annual_salary_single').value;
        let minDate = new Date();
        let maxDate = new Date();
        minDate.setFullYear(minDate.getFullYear() - 18);
        maxDate.setFullYear(maxDate.getFullYear() - 120);
        if(DOB != '' && name != '' && GAS != 0){
            if (parseInt(DOB_check.getFullYear().toString()) > parseInt(minDate.getFullYear().toString()) || parseInt(DOB_check.getFullYear().toString()) < parseInt(maxDate.getFullYear().toString())) {
                alert('Please enter an appropriate date');
            }else{
                $('#exampleModal').modal('show');
            }

        }else{
            alert('Please enter your personal information');
        }
    }
    function openModel_double(){
        let DOB  = document.getElementById('DOB').value;
        let DOB_spouse  = document.getElementById('spouse_DOB').value;
        const DOB_String = DOB.toString();
        let DOB_check = new Date(Date.parse(DOB_String));
        const DOB_String_spouse = DOB_spouse.toString();
        let DOB_check_spouse = new Date(Date.parse(DOB_String_spouse));
        let minDate = new Date();
        let maxDate = new Date();
        minDate.setFullYear(minDate.getFullYear() - 18);
        maxDate.setFullYear(maxDate.getFullYear() - 120);



        let name = document.getElementById('name').value;
        let name_spouse = document.getElementById('spouse_name').value;
        let GAS = document.getElementById('Gross_annual_salary').value;
        let GAS_spouse = document.getElementById('spouse_Gross_annual_salary').value;

        if(DOB != ''&& DOB_spouse != '' && name != '' && name_spouse != '' && GAS_spouse != 0 && GAS != 0){
            if(parseInt(DOB_check.getFullYear().toString()) > parseInt(minDate.getFullYear().toString()) || parseInt(DOB_check_spouse.getFullYear().toString()) < parseInt(maxDate.getFullYear().toString()) && parseInt(DOB_check_spouse.getFullYear().toString()) > parseInt(minDate.getFullYear().toString()) || parseInt(DOB_check_spouse.getFullYear().toString()) < parseInt(maxDate.getFullYear().toString())){
                alert('Please enter an appropriate date');
            }else{
                $('#exampleModal').modal('show');
            }

        }else{
            alert('Please enter your personal information');
        }
    }
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
