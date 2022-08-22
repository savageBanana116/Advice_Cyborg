<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */
?>
<!doctype html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html lang="en">
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
echo $this->Html->css('custom.css');
?>
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
        word-wrap: break-word;
        white-space: nowrap;
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
            <a class="nav-link" style="color:lightblue" href="#">Age-pension (Coming Soon) </a>
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
            <h2 class="text-uppercase" style="font-size: 56px">Salary Sacrifice Calculator</h2>
            <div class="row">
                <div class="col-5" style="border-style:solid; border-color:black; background-color: #403535; color: white;"><h3> To Get Started!</h3>
                    <br>
                    <h5>Tell us about yourself </h5></div>
                <div class="col-5" style="margin-left: 5%; border-style:solid; border-color:black; background-color: #403535; color: white;">
                    <h5>Breakdown of your Costs</h5></div>
            </div>

            <div class="row">
                <div class="col-5" style="border-style:solid; border-color:black;" >

                    <form id="Salary_Sacrifice_Form" >
                        <br>
                        <span style="float: left">What is your<span class="blue" > Date of Birth?</span></span>
                        <div class="input-group mb-4">
                            <input type="date" class="form-control" id="DOB">
                        </div>

<!--                        <div class="form-group row">-->
<!--                            <label for="DOB" class="col-4 col-form-label">Date of Birth:</label>-->
<!--                            <div class="col-8">-->
<!--                                <input type="date" class="form-control" id="DOB">-->
<!--                            </div>-->
<!--                        </div>-->
                        <span style="float: left">What is your<span class="blue" > Current Annual Salary?</span></span>
                        <div class="input-group mb-4">
                            <input type="number"  class="form-control"   onKeyPress="return check(event,value)" id="Salary" >
                        </div>

<!--                        <div class="form-group row">-->
<!--                            <label for="Salary" class="col-4 col-form-label">Salary ($):</label>-->
<!--                            <div class="col-8">-->
<!--                                <input type="number"  class="form-control"id="Salary" >-->
<!--                            </div>-->
<!--                        </div>-->
                        <span style="float: left">What is your<span class="blue" > Current Salary Sacrifice?</span></span>
                        <div class="input-group mb-4">
                            <input type="number" class="form-control" onKeyPress="return check(event,value)"  id="Salary_Sacrifice_Amount">
                        </div>

<!--                        <div class="form-group row">-->
<!--                            <label for="Salary_Sacrifice_Amount" class="col-4 col-form-label">Salary Sacrifice Amount :</label>-->
<!--                            <div class="col-8">-->
<!--                                <input type="number" class="form-control" id="Salary_Sacrifice_Amount">-->
<!--                            </div>-->
<!--                        </div>-->
                        <span style="float: left">Are you considered <span class="blue"> a part of a family?</span></span>
                        <div class="input-group mb-4" style="float: left">
                            <div class="custom-control custom-radio custom-control-inline" style="padding-right: 2em">
                                <input type="radio"  id="is_Family" class="custom-control-input" value="yes">
                                <label class="custom-control-label" for="customRadioInline1">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio"  id="is_Family" class="custom-control-input" value="no" checked>
                                <label class="custom-control-label" for="customRadioInline2">No</label>
                            </div>
                        </div>
<!--                        <div class="form-group row">-->
<!--                            <label for="is_Family" class="col-4 col-form-label">Are you considered apart of a family :</label>-->
<!--                            <div class="col-8">-->
<!--                                <input type="checkbox" style="padding-right: 20px" id="is_Family">-->
<!--                            </div>-->
<!--                        </div>-->
                    </form>
                    <div class="form-group">
                        <button id="Submit_Salary_Sacrifice" class="btn btn-primary"> Calculate </button>
                    </div>
                </div>
                <div class="col-5" style="margin-left: 5%; border-style:solid; border-color:black;">

                    <table id="Salary_Sacrifice_Form_Output" >
                        <table>

                            <tr>
                                <td> <h7 style="float:left;" ><strong>Age :</strong> </h7> </td>
                                <td> <h6  style="" class="number"  >
                                        <output type="text" id="Age" readonly></output>
                                    </h6>
                                </td>
                            </tr>

<!--                        <br>-->
<!--                        <div class="form-group row">-->
<!--                            <label for="Age" class="col-4 col-form-label">Age :</label>-->
<!--                            <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                <ouput type="text" id="Age" readonly></ouput>-->
<!--                            </div>-->
<!--                        </div>-->
                            <tr>
                                <td> <h7 style="float:left;" ><strong>Financial Year Ending:</strong></h7> </td>
                                <td> <h6  style="" class="number"  >
                                        <output type="text" id="Finical_Year_Ending" readonly></output>
                                    </h6>
                                </td>
                            </tr>

<!--                        <br>-->
<!--                        <div class="form-group row">-->
<!--                            <label for="Finical_Year_Ending" class="col-4 col-form-label">Financial Year Ending:</label>-->
<!--                            <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                <output type="text" id="Finical_Year_Ending" readonly></output>-->
<!--                            </div>-->
<!--                        </div>-->

                            <tr>
                                <td> <h7 style="float:left;" ><strong>Concessional Contribution Cap:</strong></h7> </td>
                                <td> <h7  style="" class="number"  >
                                        <output type="text" id="Concessional_Contribution_Cap" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                        <br>-->
<!--                        <div class="form-group row">-->
<!--                            <label for="Concessional_Contribution_Cap" class="col-4 col-form-label">Concessional Contribution Cap:</label>-->
<!--                            <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                <output type="text" id="Concessional_Contribution_Cap" readonly></output>-->
<!--                            </div>-->
<!--                        </div>-->
                            <tr>
                                <td> <h7 style="float:left;" ><strong>SG Contributions:</strong></h7> </td>
                                <td> <h7  style="" class="number"  >
                                        <output type="text" id="SG_Contributions" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                        <br>-->
<!--                        <div class="form-group row">-->
<!--                            <label for="SG_Contributions" class="col-4 col-form-label">SG Contributions:</label>-->
<!--                            <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%" >-->
<!--                                <output type="text" id="SG_Contributions" readonly></output>-->
<!--                            </div>-->
<!--                        </div>-->

                            <tr>
                                <td> <h7 style="float:left;" ><strong>Salary Sacrifice Allowable :</strong></h7> </td>
                                <td> <h7  style=" q" class="number" >
                                        <output type="text" id="Allowed_Salary_Sacrifice" readonly></output>
                                    </h7>
                                </td>
                            </tr>
<!---->
<!--                        <div class="form-group row">-->
<!--                            <label for="Allowed_Salary_Sacrifice" class="col-4 col-form-label">Salary Sacrifice Allowable :</label>-->
<!--                            <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                <output type="text" id="Allowed_Salary_Sacrifice" readonly>-->
<!--                                </output>-->
<!--                            </div>-->
<!--                        </div>-->
                        <br>

                        </table>
                        <h3 style="padding-top:1%"> Summary </h3>
                    <table>
<!--                        <div class="form-group row">-->
<!--                            <label for="Tax_Saving" class="col-4 col-form-label">Personal Tax Saving :</label>-->
<!--                            <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                <output type="text" id="Tax_Saving" readonly>-->
<!--                                </output>-->
<!--                            </div>-->
<!--                        </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" ><strong>Personal Tax Saving :</strong></h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="Tax_Saving" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                        <div class="form-group row">-->
<!--                            <label for="Total_TaxSaving" class="col-4 col-form-label">Total Tax Saving :</label>-->
<!--                            <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                <output type="text" id="Total_TaxSaving" readonly>-->
<!--                                </output>-->
<!--                            </div>-->
<!--                        </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" ><strong>Total Tax Saving :</strong></h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="Total_TaxSaving" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                        <div class="form-group row">-->
<!--                            <label for="Increase" class="col-4 col-form-label">Increase In Take Home Pay and Super :</label>-->
<!--                            <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                <output type="text" id="Increase" readonly>-->
<!--                                </output>-->
<!--                            </div>-->
<!--                        </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" ><strong>Increase In Take Home Pay and Super :</strong></h7> </td>
                                <td> <h7   style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="Increase" readonly></output>
                                    </h7>
                                </td>
                            </tr>
                        </table>
                        <div id="after_tax_contributions" style="display:none">

                            <h3>After Tax Contributions</h3>
<!--                            <div class="form-group row">-->
<!--                                <label for="Salary" class="col-4 col-form-label">Salary :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="After_Tax_Salary" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->
    <table>
                            <tr>
                                <td> <h7 style="float:left;padding-bottom:1em" >Salary :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="After_Tax_Salary" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="Salary_Sacrifice" class="col-4 col-form-label">Salary Sacrifice :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="After_Tax_Salary_Sacrifice" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Salary Sacrifice :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="After_Tax_Salary_Sacrifice" readonly></output>
                                    </h7>
                                </td>
                            </tr>


<!--                            <div class="form-group row">-->
<!--                                <label for="Taxable_Income" class="col-4 col-form-label">Taxable Income:</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="After_Tax_Taxable_Income" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom:1em" >Taxable Income:</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="After_Tax_Taxable_Income" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="Tax_Payable" class="col-4 col-form-label">Basic Tax Payable :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="After_Tax_Payable_Basic" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Basic Tax Payable :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="After_Tax_Payable_Basic" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="Levy" class="col-4 col-form-label"> Medicare Levy :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="After_Levy" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Medicare Levy :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="After_Levy" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="LM_Tax_Offset" class="col-4 col-form-label">Low & Middle Income Tax Offset :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="After_LM_Tax_Offset" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Low & Middle Income Tax Offset :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="After_LM_Tax_Offset" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="Low_Income_Tax_Offset" class="col-4 col-form-label">Low Income Tax Offset :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="After_Low_Income_Tax_Offset" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Low Income Tax Offset :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="After_Low_Income_Tax_Offset" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="Tax_Payable" class="col-4 col-form-label">Tax Payable (Including ML) :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="After_Tax_Payable" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Tax Payable (Including ML) :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="After_Tax_Payable" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="Net_Income" class="col-4 col-form-label">Net Income :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="After_Net_Income" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Net Income :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="After_Net_Income" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="Less_After_Tax" class="col-4 col-form-label">Less After Tax Contributions :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="After_Less_After_Tax" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Less After Tax Contributions :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="After_Less_After_Tax" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="Take_Home_Pay" class="col-4 col-form-label">Take Home Pay :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="After_Take_Home_Pay" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Take Home Pay :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="After_Take_Home_Pay" readonly></output>
                                    </h7>
                                </td>
                            </tr>
                        </div>

                            <h5> Effects on your Super Contributions - After Tax </h5>
<!--                            <div class="form-group row">-->
<!--                                <label for="After_SG" class="col-4 col-form-label">10% SG ($) :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="After_SG" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >10% SG ($) :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="After_SG" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="After_Salary_Sacrifice" class="col-4 col-form-label">Salary Sacrifice ($) :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="After_Salary_Sacrifice" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Salary Sacrifice ($) :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="After_Salary_Sacrifice" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="After_Less_Contribution_Tax" class="col-4 col-form-label">Less 15% Contributions Tax :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="After_Less_Contribution_Tax" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Less 15% Contributions Tax :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="After_Less_Contribution_Tax" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="After_tax" class="col-4 col-form-label">After Tax ($) :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="After_tax" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >After Tax ($) :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="After_tax" readonly></output>
                                    </h7>
                                </td>
                            </tr>
                    </table>
                        </div>




                        <div id="pre_tax_contributions" style="display:none">
                            <h3>Pre-Tax Contributions</h3>
<!--                            <div class="form-group row">-->
<!--                                <label for="Salary" class="col-4 col-form-label">Salary :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="Pre_Tax_Salary" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->
<table>
                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Salary :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="Pre_Tax_Salary" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="Salary_Sacrifice" class="col-4 col-form-label">Salary Sacrifice :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="Pre_Tax_Salary_Sacrifice" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Salary Sacrifice :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="Pre_Tax_Salary_Sacrifice" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="Taxable_Income" class="col-4 col-form-label">Taxable Income:</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="Pre_Tax_Taxable_Income" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Taxable Income:</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="Pre_Tax_Taxable_Income" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="Tax_Payable" class="col-4 col-form-label">Basic Tax Payable :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="Pre_Tax_Payable_Basic" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Basic Tax Payable :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="Pre_Tax_Payable_Basic" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="Levy" class="col-4 col-form-label"> Medicare Levy :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="Pre_Levy" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Medicare Levy :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="Pre_Levy" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="LM_Tax_Offset" class="col-4 col-form-label">Low & Middle Income Tax Offset :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="Pre_LM_Tax_Offset" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Low & Middle Income Tax Offset :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="Pre_LM_Tax_Offset" readonly></output>
                                    </h7>
                                </td>
                            </tr>


<!--                            <div class="form-group row">-->
<!--                                <label for="Low_Income_Tax_Offset" class="col-4 col-form-label">Low Income Tax Offset :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="Pre_Low_Income_Tax_Offset" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Low Income Tax Offset :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="Pre_Low_Income_Tax_Offset" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="Tax_Payable" class="col-4 col-form-label">Tax Payable (Including ML) :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="Pre_Tax_Payable" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Tax Payable (Including ML) :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="Pre_Tax_Payable" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="Net_Income" class="col-4 col-form-label">Net Income :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="Pre_Net_Income" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Net Income :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="Pre_Net_Income" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="Less_After_Tax" class="col-4 col-form-label">Less After Tax Contributions :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="Pre_Less_After_Tax" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Less After Tax Contributions :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="Pre_Less_After_Tax" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="Take_Home_Pay" class="col-4 col-form-label">Take Home Pay :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="Pre_Take_Home_Pay" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Take Home Pay :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="Pre_Take_Home_Pay" readonly></output>
                                    </h7>
                                </td>
                            </tr>


                            <h5> Effects on your Super Contributions - Pre-Tax </h5>
<!--                            <div class="form-group row">-->
<!--                                <label for="Pre_SG" class="col-4 col-form-label">10% SG ($) :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="Pre_SG" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >10% SG ($) :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="Pre_SG" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="Pre_Salary_Sacrifice" class="col-4 col-form-label">Salary Sacrifice ($) :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="Pre_Salary_Sacrifice" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Salary Sacrifice ($) :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="Pre_Salary_Sacrifice" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="Pre_Less_Contribution_Tax" class="col-4 col-form-label">Less 15% Contributions Tax :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="Pre_Less_Contribution_Tax" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >Less 15% Contributions Tax :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="Pre_Less_Contribution_Tax" readonly></output>
                                    </h7>
                                </td>
                            </tr>

<!--                            <div class="form-group row">-->
<!--                                <label for="Pre_After_tax" class="col-4 col-form-label">After Tax ($) :</label>-->
<!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                                    <output type="text" id="Pre_After_tax" readonly>-->
<!--                                    </output>-->
<!--                                </div>-->
<!--                            </div>-->

                            <tr>
                                <td> <h7 style="float:left;padding-bottom: 1em" >After Tax ($) :</h7> </td>
                                <td> <h7  style="padding-bottom: 1em" class="number" >
                                        <output type="text" id="Pre_After_tax" readonly></output>
                                    </h7>
                                </td>
                            </tr>
                        </table>

                        </div>

                        <br>
                        <button type="button" class="btn btn-primary" onclick="toggle_pre_tax()">Pre Tax Contributions</button>
                        <button type="button" class="btn btn-primary" onclick="toggle_after_tax()">After Tax Contributions</button>
                        <br>
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
        <script>
            //input validation
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


            function check(e,value){
                //Check Character
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
        <script>
            function toggle_after_tax() {
                var x = document.getElementById("after_tax_contributions");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else if (x.style.display === "block") {
                    x.style.display = "none";
                }
            }

            function toggle_pre_tax() {
                var x = document.getElementById("pre_tax_contributions");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else if (x.style.display === "block") {
                    x.style.display = "none";
                }
            }
        </script>
        <?= $this -> Html -> script('salary_sacrifice.js') ?>
</body>
