<?php
echo $this->Html->css('custom.css');
$myAge = $_GET["age"];
$myIncome = $_GET["income"];
$myOthers = $_GET["others"];
$myLump = $_GET["lump"];
$mySuper = $_GET["super"];
$myInvestment = $_GET["investment"];

$_SESSION["age"] = $myAge;

?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html lang="en">
<div class="text-center" style="margin-top: 2%;margin-bottom: 2%">
    <h2 class="myTitle">Investing at retirement</h2>
    <!--    <span>Fill in your personal details</span>-->
</div>
<?php if ($myAge<58){ ?>
    <div class="text-center">
<p>Sorry, we can't help at this stage. Minimum age for retirement is 58</p>
        <a class="btn btn-primary " href="<?= $this->Url->build(['controller' => 'modules','action' => 'dashboard']);?>">Back to Dashboard</a>

    </div>
<?php } else{?>
    <div class="container-fluid">
        <div class="text-center">
            <h2>Your Results</h2>
        </div>
        <div class="row">

                <table style="width: 40%">
                    <tr>
                        <td><h5>Your Age: </h5></td>
                        <td> <h6 ><?php echo $myAge ?></h6></td>
                    </tr>
                    <tr>
                        <td><h5>Your required income: </h5></td>
                        <td> <h6><?php echo $myIncome ?></h6></td>
                    </tr>
                    <tr>
                        <td><h5>Your income from other sources: </h5></td>
                        <td><h6><?php echo $myOthers ?></h6></td>
                    </tr>
                    <tr>
                        <td><h5>Your required lump sum: </h5></td>
                        <td> <h6><?php echo $myLump ?></h6></td>
                    </tr>
                    <tr>
                        <td><h5>Your current Super investment: </h5></td>
                        <td><h6><?php echo $mySuper ?></h6></td>
                    </tr>
                    <tr>
                        <td><h5>Your current Non-Super investment: </h5></td>
                        <td> <h6><?php echo $myInvestment ?></h6></td>
                    </tr>
                </table>

        </div>

        <div class="row" style="margin-top: 10%;margin-bottom: 10%;justify-content: center">
            <h3 class="text-center " style="margin-bottom: 1em">Choose your step</h3>
            <div class="col-3">                    <button type="button" onclick="location.href='super_contribution' "  class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Contribution to Super</button>
            </div>
            <div class="col-3">
<!--                <button type="button" onclick="location.href='risk_profile' " class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Investment portfolio</button>-->
                <button type="button" onclick="location.href='#' " class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Investment portfolio(Coming Soon)</button>

            </div>
            <div class="col-3">                    <button type="button" onclick="location.href='#' " class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">consolidate super(Coming Soon)</button>
            </div>
            <div class="col-3">                    <button type="button" onclick="location.href='income_stream' " class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">income stream</button>
            </div>

        </div>

    </div>

<?php }?>
</html>
