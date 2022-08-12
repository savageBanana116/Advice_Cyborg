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
    td {
        padding-bottom: 2.5em;

    }
    span {
        padding-bottom: 5em;
    }
</style>

    <body>
    <div class="container-title" >
        <div class="text-center" >
            <h2 class="text-uppercase" >Income tax Calculators</h2>
            <p class="text-muted">Calculate your ___________</p>
        </div>

    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success py-4 w-100"  ">

        <div class="collapse navbar-collapse" id="navbarNav" >
            <ul class="navbar-nav">
                <li class="nav-item active px-5">
                    <a class="nav-link" href="car_lease_calculator">Car Lease <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item px-5 " style="border-bottom:  5px solid #f5f4eb">
                    <a class="nav-link" href="#">Income Tax</a>
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

    <div class="container-fluid" >
        <div class="row" >
            <div class="inputRow col-sm-3 " >
                <form action="income_tax_calculator">
            <h2>My Assessable Income</h2>
            <span >Salary</span>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" class="form-control" id="mySalary" value="0" >
            </div>
            <span >Less Salary Sacrifice</span>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" class="form-control" id="mySalarySacrifice" value="0" >
            </div>
            <span >Investment</span>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" class="form-control" id="myInvestment" value="0" >
            </div>
            <span>Account Base pension</span>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" class="form-control" id="myPension" value="0" >
            </div>

            <span>Rental</span>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" class="form-control" id="myRental" value="0" >
            </div>
            <span>Add Franked credits</span>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" class="form-control" id="myCredits" value="0" >
            </div>

            <span>Others</span>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" class="form-control" id="myOthers" value="0" >
            </div>
            <span>Tax Free pension amount</span>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" class="form-control" id="myTaxFree" value="0" >
            </div>
            <span>Are you considered apart of a family?</span>
            <div class="input-group mb-2">
                <div class="custom-control custom-radio custom-control-inline" style="padding-right: 2em">
                    <input type="radio"  name="myFamily" class="custom-control-input" value="1116">
                    <label class="custom-control-label" for="customRadioInline1">Yes</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio"  name="myFamily" class="custom-control-input" value="999" checked>
                    <label class="custom-control-label" for="customRadioInline2">No</label>
                </div>
            </div>
            <div class="text-right" style="text-align: right">
                <button type="button" onclick="taxCalculator()" class="btn btn-success calculate ">Calculate</button>
            </div>
        </div>


        </form>

            <div class="col-md-5">
                <div class="outputIncome">
                <h5>Total annual net income</h5>
                <h1  id="netIncome" style="color: #2f3a82">$</h1>
                </div>
                <div class="outputResult">
                    <table>
                        <tr style="border-bottom: 1px solid black ;">
                            <td> <h4> Total Taxable Annual Income</h4> </td>

                            <td> <h5 class="number" id="echoOut"  >$ 0</h5></td>
                        </tr>
                        <tr style="border-bottom: 1px solid black ;">
                            <td> <h6> Basic Tax Payable</h6> </td>
                            <td> <h6 class="number" id="taxPayable" >$ 0</h6></td>
                        </tr>
                        <tr style="border-bottom: 1px solid black ;">
                            <td> <h6> Medicare Levy </h6> </td>
                            <td> <h6 class="number" id="medicareLevy" >$ 0</h6></td>
                        </tr>
                        <tr style="border-bottom: 1px solid black ;">
                            <td> <h6> Low & Middle Income Tax Offset </h6> </td>
                            <td> <h6 class="number" id="middleOffset" >$ 0</h6></td>
                        </tr>
                        <tr style="border-bottom: 1px solid black ;">
                            <td> <h6>Low Income Tax Offset </h6> </td>
                            <td> <h6 class="number" id="lowOffset" >$ 0</h6></td>
                        </tr>
                        <tr style="border-bottom: 1px solid black ;">
                            <td> <h6>Pension Rebate </h6> </td>
                            <td> <h6 class="number" id="pensionRebate" >$ 0</h6></td>
                        </tr>
                        <tr>
                            <td> <h2>Total Tax Payable </h2> </td>
                            <td> <h6 class="number" id="taxPaid" >$ 0</h6></td>
                        </tr>
                        <tr>
                            <td> <h4>Tax Payable </h4> </td>
                            <td> <h6 class="number" id="Paid" >$ 0</h6></td>
                        </tr>
                    </table>
                </div>

            </div>





    </div>
    </div>
    </body>

<script>
    function taxCalculator(){
        const salary = parseFloat(document.getElementById("mySalary").value);
        const salarySacrifice = parseFloat(document.getElementById("mySalarySacrifice").value);
        const investment = parseFloat(document.getElementById("myInvestment").value);
        const pension = parseFloat(document.getElementById("myPension").value);
        const rental = parseFloat(document.getElementById("myRental").value);
        const credits = parseFloat(document.getElementById("myCredits").value);
        const others = parseFloat(document.getElementById("myOthers").value);
        const free = parseFloat(document.getElementById("myTaxFree").value);
        var myFamily = document.querySelector('input[name="myFamily"]:checked').value;


            // Calculating basic tax payable
        let taxPayable = 0;
        function addTaxPayable(){
        if (addIncome()<=18200){
            taxPayable = 0;
        }else if (18201<= addIncome() && addIncome()<=45000){

            taxPayable = (addIncome()-18200)*0.19;

        }else if(45001<= addIncome()&& addIncome()<=120000){

            taxPayable = (addIncome()-45000)*0.325+5092;

        }else if( 120001<= addIncome()&& addIncome()<=180000){

            taxPayable = (addIncome()-120000)*0.37+29467; // + 29467   / 5092

        }else if( addIncome() >= 180001){

            taxPayable = (addIncome()-180000)*0.45 +51667; // + 51667   / 29467
        }

        return Math.round(taxPayable);
        }

            // calculate medicare levy

        function addMedicareLevy(){
            let mediLevy = 0;
            let basicLevy = addIncome()*0.02;
            let totalLevy = 0;
            // is not a family member
           if (myFamily ==='999'){
                if (addIncome() <= 90000){
                    mediLevy = 0;
                }else {
                    if(addIncome()>=90001 &&addIncome() <= 105000){
                    mediLevy = addIncome() * 0.01;
                    }else {
                        if (addIncome() >= 105001 && addIncome() <= 140000){ // conflicting condition
                            mediLevy = addIncome() * 0.0125;
                        }else {
                            if (addIncome() > 105000){  // conflicting condition
                                mediLevy = addIncome() * 0.015;
                            }
                        }
                    }
                }
                // is part of a family
           }else if (myFamily === '1116'){
               if (addIncome() <= 180000){
                   mediLevy = 0;
               }else {
                   if(addIncome() >= 180001 && addIncome() <= 210000){
                       mediLevy = addIncome() * 0.01;
                   }else {
                       if (addIncome()>=210001 && addIncome() <= 280000){
                           mediLevy = addIncome() * 0.0125;
                       }else {
                           if (addIncome() > 210000){
                               mediLevy = addIncome() * 0.015;
                           }
                       }
                   }
               }

           }
            totalLevy = mediLevy + basicLevy;
            return totalLevy;

        }

        // calculate total taxable income
        function addIncome(){
            let c1 =0;
            let c18= 0.1*salary+ salarySacrifice;
            if (27500>c18){
                c1 = 0;
            }else {
                c1 = salarySacrifice;
            }
            const totalIncome = salary + investment + pension + rental + credits + others - c1 -free ;
           return Math.round(totalIncome)  ;
        }

        // calculate the low & middle income tax offset
        let middleOffset = 0;
        function addMiddleOffset(){
            if (addIncome() <= 37000){
                middleOffset = 255;
            }else if ( addIncome() >= 37001 && addIncome() <= 48000){
                middleOffset = (255 + (0.075*(addIncome() - 37000)));
            } else if (addIncome()>=48001 && addIncome()<= 90000){
                middleOffset = 1080;
            }else if (addIncome()>= 90001 && addIncome() <=126000){
                middleOffset = 1080-(0.03*(addIncome()-90000));
            }else {
                middleOffset = 0;
            }
            return Math.round(middleOffset);
        }
        // calculate the low income tax offset
        let lowOffset = 0;
        function addLowOffset(){
            if (addIncome() <= 37500){
                lowOffset = 700;
            } else if (addIncome()>=37501 && addIncome()<= 45000){
                lowOffset = (700-(0.05*(addIncome()-37500)));
            }else if( addIncome() >= 45001 && addIncome()<= 66667){
                lowOffset = (325-(0.015*(addIncome()-45000)));
            }else {
                lowOffset = 0;
            }
            return Math.round(lowOffset);
        }
        // calculate total tax payable
        let pensionRebate = (pension - free) * 0.15;
        let totalTax = addMedicareLevy() + addTaxPayable();
        let totalOffset = addMiddleOffset() + addLowOffset()+ pensionRebate;
        let taxPaid = 0;
        function addTotalTax(){
            if (totalOffset>=totalTax){
                taxPaid = 0;
            }else {
                taxPaid = totalTax - totalOffset;
            }
            return Math.round(taxPaid);
        }
        let taxYouPay = addTotalTax() - credits;
            let netIncome = (addIncome() + free) - taxYouPay;

        var commas = addIncome().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var commas2 = addTaxPayable().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var commas3 = addMedicareLevy().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var commas4 = pensionRebate.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var commas5 =addMiddleOffset().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var commas6 =addLowOffset().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var commas7 =addTotalTax().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var commas8 =netIncome.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var commas9 =taxYouPay.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");



        document.getElementById("echoOut").innerHTML = "$ " + commas ;
        document.getElementById("taxPayable").innerHTML = "- $ " + commas2 ;
        document.getElementById("medicareLevy").innerHTML = "- $ " + commas3 ;
        document.getElementById("pensionRebate").innerHTML = "+ $ " + commas4 ;
        document.getElementById("middleOffset").innerHTML = "+ $ " + commas5 ;
        document.getElementById("lowOffset").innerHTML = "+ $ " + commas6 ;
        document.getElementById("taxPaid").innerHTML = "- $ " + commas7 ;
        document.getElementById("netIncome").innerHTML = " $ " +  commas8 ;
        document.getElementById("Paid").innerHTML = "- $ " +  commas9 ;

        // document.getElementById("test1").innerHTML =  myFamily+ addMedicareLevy() ;


    }

</script>
<!--<script>-->
<!--    $('.input').on('input', function(){-->
<!--       taxCalculator();-->
<!--    });-->
<!--    taxCalculator();-->
<!--</script>-->
