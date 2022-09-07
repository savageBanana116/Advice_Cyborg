<?php
echo $this->Html->css('custom.css');
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html lang="en">

<div class="text-center" style="margin-top: 2%;margin-bottom: 2%">
    <h2 class="myTitle">Investing at retirement</h2>
<!--    <span>Fill in your personal details</span>-->
</div>
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
    .form-control{
        margin-top: 2em;

    }
    .hide{
        display: none;
    }
</style>

<div class="container-fluid">

<div class="row">
    <div class="col-5">
        <h3 id="title"></h3>
    <div class="card text-center" id="input">
        <div class="card-header">
            Fill in your personal details
        </div>
        <div class="card-body">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" data-bs-interval="false">
<!--                <div class="carousel-indicators">-->
<!--                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>-->
<!--                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>-->
<!--                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
<!--                </div>-->
                <div class="carousel-inner">
                    <form action="retirement_results" method="get" >
                    <div class="carousel-item active" style="background: white">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Question 1</h5>
                            <span>I am ____ years old and would like to retire now.</span><br>
                            <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                               Help
                            </button>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    Help: To be able to access your super benefits, you need to be 58 or older.
                                    If you have reasons to retire before the age of 58,
                                    please contact our office.                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-5">
                                    <input type="number" class="form-control" name="age" id="inputAge" placeholder="Enter your age here">
                                </div>
                            </div>

                        </div>
                        <?= $this->Html->image('modules/'."White_full.png", ['alt' => 'module_image',"class"=>"img-fluid","style"=>"width:75%"])?>
                    </div>
                        <div class="carousel-item" style="background: white">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Question 2</h5>
                                <span>At retirement I need a monthly income after tax of ____</span><br>
                                <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                                    Help
                                </button>
                                <div class="collapse" id="collapseExample1">
                                    <div class="card card-body">
                                        Help: The net monthly income you require to enjoy your desired lifestyle                                </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" name="income"  id="inputIncome" placeholder="Enter here">
                                    </div>
                                </div>
                            </div>
                            <?= $this->Html->image('modules/'."White_full.png", ['alt' => 'module_image',"class"=>"img-fluid","style"=>"width:75%"])?>
                        </div>
                        <div class="carousel-item" style="background: white">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Question 3</h5>
                                <span>I will receive a monthly gross income of other sources of ____</span><br>
                                <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                                    Help
                                </button>
                                <div class="collapse" id="collapseExample2">
                                    <div class="card card-body">
                                        Help: Your non-super source of income.
                                        Examples: rental, investment income                               </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control"  name="others" id="inputOthers" placeholder="Enter here">
                                    </div>
                                </div>
                            </div>
                            <?= $this->Html->image('modules/'."White_full.png", ['alt' => 'module_image',"class"=>"img-fluid","style"=>"width:75%"])?>
                        </div>
                        <div class="carousel-item" style="background: white">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Question 4</h5>
                                <span>I will need a lump sum of _________ to settle my liabilities</span><br>
                                <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
                                    Help
                                </button>
                                <div class="collapse" id="collapseExample3">
                                    <div class="card card-body">
                                        Help: This is the amount you need to settle your debts and retire debt-free.                            </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" name="lump" id="inputLump" placeholder="Enter here">
                                    </div>
                                </div>
                            </div>
                            <?= $this->Html->image('modules/'."White_full.png", ['alt' => 'module_image',"class"=>"img-fluid","style"=>"width:75%"])?>
                        </div>
                        <div class="carousel-item" style="background: white">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Question 5</h5>
                                <span>The current value of my Super investments: ____</span><br>
                                <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
                                    Help
                                </button>
                                <div class="collapse" id="collapseExample4">
                                    <div class="card card-body">
                                        Help: The value of your Super/Retirement funds.
                                        Does not include: investment funds, shares, bonds, term deposits, etc.                        </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" name="super" id="inputSuper" placeholder="Enter here">
                                    </div>
                                </div>
                            </div>
                            <?= $this->Html->image('modules/'."White_full.png", ['alt' => 'module_image',"class"=>"img-fluid","style"=>"width:75%"])?>
                        </div>

                        <div class="carousel-item" style="background: white">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Question 6</h5>
                                <span>The current value of my Non-Super investments: ____</span><br>
                                <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample5">
                                    Help
                                </button>
                                <div class="collapse" id="collapseExample5">
                                    <div class="card card-body">
                                        Help: The value of your other investments.
                                        Examples: investment funds, shares, bonds, term deposits, etc.                     </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" name="investment" id="inputInvestment" placeholder="Enter here">
                                    </div>
                                </div>
<!--                                <button type="button" onclick="hideInput()" class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase;margin-top: 1vh">Submit</button>-->
                                    <input type="submit" class="btn btn-primary"  >
                            </div>
                            <?= $this->Html->image('modules/'."White_full.png", ['alt' => 'module_image',"class"=>"img-fluid","style"=>"width:75%"])?>
                        </div>
                    </form>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
<!--        <div class="card-footer text-muted">-->
<!--            2 days ago-->
<!--        </div>-->
    </div>
        <div class="hide" id="output">
            <div class="container-fluid">
                <div class="text-center">
                    <h2>Your Results</h2>
                </div>
                <div class="row">
                    <div class="col-8">
                        <table>
                            <tr>
                                <td><h5>Your Age: </h5></td>
                                <td> <h6 id="myAge">age</h6></td>
                            </tr>
                            <tr>
                                <td><h5>Your required income: </h5></td>
                                <td> <h6 id="myIncome">Income</h6></td>
                            </tr>
                            <tr>
                                <td><h5>Your income from other sources: </h5></td>
                                <td><h6 id="myOtherIncome">Other</h6></td>
                            </tr>
                            <tr>
                                <td><h5>Your required lump sum: </h5></td>
                                <td> <h6 id="myLump">Lump</h6></td>
                            </tr>
                            <tr>
                                <td><h5>Your current Super investment: </h5></td>
                                <td><h6 id="mySuper">Super</h6></td>
                            </tr>
                            <tr>
                                <td><h5>Your current Non-Super investment: </h5></td>
                                <td> <h6 id="myInvestment">Investment</h6></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row" style="margin-top: 10%;margin-bottom: 10%">
                    <h3 class="text-center " style="margin-bottom: 1em">Choose your step</h3>
                    <div class="col-3">                    <button type="button" onclick="location.href='super_contribution' "  class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Contribution to Super</button>
                    </div>
                    <div class="col-3">                    <button type="button" onclick="location.href='risk_profile' " class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Investment portfolio</button>
                    </div>
                    <div class="col-3">                    <button type="button" onclick="location.href='consolidate_super' " class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">consolidate super</button>
                    </div>
                    <div class="col-3">                    <button type="button" onclick="location.href='income_stream' " class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">income stream</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>

</script>

<?= $this->Html->script('Invest_retirement.js') ?>


