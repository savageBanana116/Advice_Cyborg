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
    <div class="container" >
        <div class="text-center" style="margin-top: 5%">
            <h2 class="text-uppercase" style="font-size: 56px">Income tax Calculators</h2>
            <p class="text-muted">Calculate your ___________</p>
        </div>

    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success py-4 w-100">

        <div class="collapse navbar-collapse" id="navbarNav" style="font-size: 200%;color: white">
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

    <div class="calculator" style="margin-top: 5%;margin-left: 18% ; width: 70%">
        <div class="tax-row" style="display: flex;">
            <div class="tax-input" style=" padding: 5% ;background-color: rgba(99, 99, 98, 0.06);" >
                <form action="income_tax_calculator">
            <h2>My Assessable Income</h2>
            <label for="mySalary">Salary</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" class="form-control" id="mySalary" value="0" >
            </div>
                    <label for="mySalarySacrifice">Less Salary Sacrifice</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" class="form-control" id="mySalarySacrifice" value="0" >
            </div>
                    <label for="myInvestment">Investment</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" class="form-control" id="myInvestment" value="0" >
            </div>
                    <label for="myPension">Account Base pension</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" class="form-control" id="myPension" value="0" >
            </div>

                    <label for="myRental">Rental</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" class="form-control" id="myRental" value="0" >
            </div>
                    <label for="myCredits">Add Franked credits</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" class="form-control" id="myCredits" value="0" >
            </div>

                    <label for="myOthers">Others</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" class="form-control" id="myOthers" value="0" >
            </div>
                    <label for="myTaxFree">Tax Free pension amount</label>>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input type="number" class="form-control" id="myTaxFree" value="0" >
                    </div>
                    <button type="button" onclick="taxCalculator()" class="btn btn-success" style="margin-left: 74%; margin-top: 10%;background-color: #000000; color: #ebe8e8">Calculate</button>
            </div>

            <div class="tax-output" style="flex: 1; height: 10em ; width: 30%;margin-left: 2% ; padding:2%; background-color: rgba(99, 99, 98, 0.06); border-left: 5px solid #fcba03;">
                <h5>Total annual net income</h5>
         <h1  style="color: #2f3a82">$</h1>

                </form>
                <div class="tax-output-2"style="flex: 1;width: 108%; height: 35em ;margin-top: 5em;margin-left: -2em ; padding:2%; background-color: rgba(99, 99, 98, 0.06); ">
                    <div class="output-table" style="padding: 6%">
                        <table>
                            <tr style="border-bottom: 1px solid black ;">
                                <td> <h4> Total Taxable Annual Income</h4> </td>

                                <td> <h5 id="echoOut" style="margin-left: 10em">$</h5></td>
                            </tr>
                            <tr style="border-bottom: 1px solid black ;">
                                <td> <h6> Basic Tax Payable</h6> </td>
                                <td> <h6 id="taxPayable" style="margin-left: 10em">$</h6></td>
                            </tr>
                            <tr style="border-bottom: 1px solid black ;">
                                <td> <h6> Medicare Levy </h6> </td>
                                <td> <h6 style="margin-left: 10em">$ 0</h6></td>
                            </tr>
                            <tr style="border-bottom: 1px solid black ;">
                                <td> <h6> Low & Middle Income Tax Offset </h6> </td>
                                <td> <h6 style="margin-left: 10em">$ 0</h6></td>
                            </tr>
                            <tr style="border-bottom: 1px solid black ;">
                                <td> <h6>Low Income Tax Offset </h6> </td>
                                <td> <h6 style="margin-left: 10em">$ 0</h6></td>
                            </tr>
                            <tr style="border-bottom: 1px solid black ;">
                                <td> <h6>Pension Rebate </h6> </td>
                                <td> <h6 style="margin-left: 10em">$ 0</h6></td>
                            </tr>
                            <tr>
                                <td> <h2>Total Tax Payable </h2> </td>
                                <td> <h6 style="margin-left: 10em">$ 0</h6></td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>


        </div>

    </div>

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



        let taxPayable = 0;
        function addTaxPayable(){
        if (addIncome()<=18200){
            taxPayable = 0;
        }else if (18201<= addIncome() && addIncome()<=45000){

            taxPayable = (addIncome()-18200)*0.19;

        }else if(45001<= addIncome()&& addIncome()<=120000){

            taxPayable = (addIncome()-45000)*0.325+5092;

        }else if( 120001<= addIncome()&& addIncome()<=180000){

            taxPayable = (addIncome()-120000)*0.37+29467;

        }else if( addIncome() >= 180001){

            taxPayable = (addIncome()-180000)*0.45 +51667;
        }

        return Math.round(taxPayable);
        }
        function addIncome(){
            let c1 =0;
            let c18= 0.1*salary- salarySacrifice;
            let c19 = (0.1*salary - salarySacrifice)-27500;
            if (27500<c18 && salarySacrifice!= 0){
                c1 = c19;
            }
            const totalIncome = salary + investment + pension + rental + credits + others + salarySacrifice + c1 -salarySacrifice- free;
           return totalIncome ;
        }



        var commas = addIncome().toLocaleString("en-US");
        var commas = addIncome().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var commas2 = addTaxPayable().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");


        document.getElementById("echoOut").innerHTML = "$ " + commas ;
        document.getElementById("taxPayable").innerHTML = "$ " + commas2 ;

    }

</script>
<!--<script>-->
<!--    $('.input').on('input', function(){-->
<!--       taxCalculator();-->
<!--    });-->
<!--    taxCalculator();-->
<!--</script>-->
