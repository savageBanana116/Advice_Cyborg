<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */
?>
    <!doctype html>
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-success py-4 w-100" style="width: 100% ">

        <div class="collapse navbar-collapse" id="navbarNav" style="font-size: 300%;color: white">
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
                    <button type="button" onclick="taxCalculator()" class="btn btn-success" style="margin-left: 74%; margin-top: 10%;background-color: #000000; color: #ebe8e8">Calculate</button>
            </div>

            <div class="tax-output" style="flex: 1; height: 10em ;margin-top: 5% ;margin-left: 2% ; padding:2%; background-color: rgba(99, 99, 98, 0.06); border-left: 5px solid #fcba03;">
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
                                <td> <h6 style="margin-left: 10em">$ 0</h6></td>
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

        function addIncome(){
            let c1 =0;
            let c18= 0.1*salary- salarySacrifice;
            let c19 = (0.1*salary - salarySacrifice)-27500;
            if (27500<c18){
                c1 = c19;
            }
            const totalIncome = salary + investment + pension + rental + credits + others + salarySacrifice + c1 -salarySacrifice- free;
           return  totalIncome ;
        }

        var commas = addIncome().toLocaleString("en-US");
        var commas = addIncome().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");



        document.getElementById("echoOut").innerHTML = "$ " + commas ;

    }

</script>
<!--<script>-->
<!--    $('.input').on('input', function(){-->
<!--       taxCalculator();-->
<!--    });-->
<!--    taxCalculator();-->
<!--</script>-->