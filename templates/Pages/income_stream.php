<!doctype html>
<html lang="en">

<head>
    <!-- Custom styles for this template -->
    <link href="../webroot/css/form-validation.css" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .hide {
            display: none;
        }
    </style>
</head>

<body class="bg-light">
<div class="container">
    <main class="py-5 text-center">
        <div class="py-5 text-center">
            <h2 class="section-heading text-uppercase">Setting up an income stream</h2>
            <p class="section-subheading text-muted">Let's help you set up your income stream!</p>
        </div>

        <div id="investment_form">
            <div id="initialQuestion">
            <form>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <p class="lead">To start! Please go to the Centrelink Payment and Services Finder to see if you are eligible for any payments</p>
                        <P class="lead">You can access this <a href="https://www.centrelink.gov.au/custsite_pfe/pymtfinderest/paymentFinderEstimatorPage.jsf?wec-appid=pymtfinderest&wec-locale=en_US#stay" target="_blank">here!</a></P>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary btn-lg btn-block mt-5" onclick="startQuestionnaire()" type="button">Start Questionnaire!</button>
                    </div>
                </div>
                <br>
                <br>
            </form>
            </div>
            <script>
                function startQuestionnaire() {
                    var x = document.getElementById("initialQuestion");
                    var y = document.getElementById("eligibility")
                    if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                        y.style.display ="block";
                    }
                }
            </script>
            <div class="hide" id="eligibility">
                <form>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <p class="lead">Are you eligible for any Social Security Payments?</p>
                        </div>
                        <div class="col-auto">
                            <select class="form-select" id="test" name="form_select">
                                <option value="" disabled selected>Choose..</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-lg btn-block mt-5" onclick="socialSecurity();" type="button">Next</button>
                    </div>
                </form>
            </div>
            <script>
                function socialSecurity() {
                    var y = document.getElementById("eligibility")
                    var test = $('#test').val();
                    if(test === "1") {
                        if (y.style.display === "none") {
                            y.style.display = "block";
                        } else {
                            document.getElementById("selectYes").style.display ="block";
                            y.style.display = "none";
                        }
                    }
                    else if (test === "0"){
                        document.getElementById("selectNo").style.display ="block";
                        y.style.display = "none";
                    }
                }
            </script>

            <div class="hide" id="selectYes">
                <div class="allHere" id="allHere">
                    <div class="form-group fieldGroup">

                        <form action="test1" method="get" class="pb-2">
                            <p class="lead">What is your Potential Monthly Centrelink Payment?</p>
                                <div class="col-auto" id="amount">
                                    <input class="form-control" type="number" min="0" placeholder="$" id="centrelinkPayment" name="centrelinkPayment" onkeyup="myFunction()" />
                                </div>
                        </form>
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary btn-lg btn-block mt-5" onclick="riskProfileShow();" type="button"><i class="fa-solid fa-person"></i>Submit</button>
                </div>
            </div>

            <div class="hide" id="selectNo">
                <div class="allHere" id="allHere">
                    <div class="form-group fieldGroup">

                        <form action="test1" method="get" class="pb-2">
                            <p class="lead">What is your required income stream payment? (or minimum rate allowed by government, whichever is greater)</p>
                            <div class="col-auto" id="amount">
                                <input class="form-control" type="number" min="0" placeholder="$" id="streamPayment" name="streamPayment" onkeyup="myFunction()" />
                            </div>
                        </form>
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary btn-lg btn-block mt-5" onclick="riskProfileShow();" type="button"><i class="fa-solid fa-person"></i>Submit</button>
                </div>
            </div>


            <!-- copy of input fields group -->
            <!--<div>-->
            <!--    <p style="font-size: 20px">This is your total amount:</p><p style="font-size: 20px" id = output>-->
            <!--</div>-->
            <!---->
            <!--<button class="btn btn-primary btn-lg btn-block" onclick="calcTotal()">Calculate</button>-->
</div>


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */

#include 'upload.php';
?>

<div class="hide" id="risk_profile">
    <div class="container">
        <div id="questionnaire-card" class="card">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-around pb-3">
                        <div class="col-auto col-md-10 align-self-center">
                            <h5 class="card-title text-center">Income Stream: <span id="section-title">Question 1</span></h5>
                            <h6 id="section-subtitle" class="card-subtitle mb-2 text-muted text-center">Where do you want to open an <span class="blue">income stream?</span></h6>
                        </div>
                        <div class="col-6 col-md-1 order-md-first align-self-center">
                            <div class="d-grid gap-2">
                                <a id="prevBtnTop" class="btn btn-secondary" onclick="onPrevious();" role="button">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-1 order-last align-self-center">
                            <div class="d-grid gap-2">
                                <a id="nextBtnTop" class="btn btn-primary" onclick="onNext();" role="button">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 align-content-center">
                            <div class="d-flex justify-content-center">
                                <div id="section-input" class="col">
                                    <select id="income-stream-options" class="form-control" name="income-stream-options">
                                        <option disabled selected value="3">Please select an option</option>
                                        <option value="0">Your Current Fund</option>
                                        <option value="1">Explore our Low Cost Options</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <a id="submit-button" style="display:none" class="btn btn-primary mt-3" onclick="showResults()">Submit complete questionnaire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Submit enquiry our funds -->
        <div class="hide" id="our-funds">
            <div class="container">
                <div id="questionnaire-card" class="card">
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row justify-content-around pb-3">
                                <div class="col-auto col-md-10 align-self-center">
                                    <h5 class="card-title text-center">Income Stream: <span id="section-title">Enquiry into our funds</span></h5>
                                    <h6 id="section-subtitle" class="card-subtitle mb-2 text-muted text-center">Where do you want to open an <span class="blue">income stream?</span></h6>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-8 align-content-center">
                                    <div class="d-flex justify-content-center">
                                        <div id="section-input" class="col">
                                            <form>
                                            <p>Features</p>
                                            <span>- Industry / Not For Profit Fund</span>
                                            <span>- Hands off Option</span>
                                            <span>- Paper Application</span>
                                            <br>
                                            <input type="radio" value="option-1" name ="options" id="option-1">
                                        </div>
                                        <div id="section-input" class="col">
                                            <p>Features</p>
                                            <span>- Low cost retail fund</span>
                                            <span>- Transparent Fees</span>
                                            <span>- Hands off Option</span>
                                            <span>- Online Application</span>
                                            <br>
                                            <input type="radio" value="option-2" name ="options" id="option-2">
                                        </div>
                                    </div>
                                        <div id="section-input" class="row">
                                            <span> Name</span>
                                            <input type="text" id="name" name="name">
                                            <span> Mobile Number</span>
                                            <input type="tel" id="phone-number" name="phone-number">
                                            <span> Email Address</span>
                                            <input type="email" id="email" name="email">
                                    </div>
                                </div>
                                <a id="submit-button" class="btn btn-primary mt-3" onclick="sendResults()">Submit Enquiry</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function sendResults() {
                var test = $('#test').val();
                var income;
                if(test === "1") {
                    income = $('#centrelinkPayment').val();
                }
                else {
                    income = $('#streamPayment').val();
                }
                var fundChoice = $('#income-stream-options').val();
                if(fundChoice === "0"){
                    document.getElementById('display').innerHTML = document.getElementById("name2").value;
                    document.getElementById('display2').innerHTML = document.getElementById("phone-number2").value;
                    document.getElementById('display3').innerHTML = document.getElementById("email2").value;
                    document.getElementById('display4').innerHTML = income;
                }
                else if(fundChoice === "1"){
                    document.getElementById('display').innerHTML = document.getElementById("name").value;
                    document.getElementById('display2').innerHTML = document.getElementById("phone-number").value;
                    document.getElementById('display3').innerHTML = document.getElementById("email").value;
                    document.getElementById('display4').innerHTML = $('input[name="options"]:checked').val();
                    document.getElementById('display5').innerHTML = income;
                }

            }
        </script>
        <p><span id='display'></span>
            <span id='display2'></span>
            <span id='display3'></span>
            <span id='display4'></span>
            <span id='display5'></span>
            <span id='display6'></span></p>


<!--    submit enquiry current fund-->
                <div class="hide" id="current-fund">
                    <div class="container">
                        <div id="questionnaire-card" class="card">
                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="row justify-content-around pb-3">
                                        <div class="col-auto col-md-10 align-self-center">
                                            <h5 class="card-title text-center">Income Stream: <span id="section-title">Submit an Enquiry</span></h5>
                                            <h6 id="section-subtitle" class="card-subtitle mb-2 text-muted text-center">Thank you for filling out this form! Fill out your details below and we will contact you regarding your options utilizing your current fund</span></h6>
                                        </div>
<!--                                        <div class="col-6 col-md-1 order-md-first align-self-center">-->
<!--                                            <div class="d-grid gap-2">-->
<!--                                                <a id="prevBtnTop" class="btn btn-secondary" onclick="onPrevious();" role="button">-->
<!--                                                    <i class="fas fa-chevron-left"></i>-->
<!--                                                </a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="col-6 col-md-1 order-last align-self-center">-->
<!--                                            <div class="d-grid gap-2">-->
<!--                                                <a id="nextBtnTop" class="btn btn-primary" onclick="onNext();" role="button">-->
<!--                                                    <i class="fas fa-chevron-right"></i>-->
<!--                                                </a>-->
<!--                                            </div>-->
<!--                                        </div>-->
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 align-content-center">
                                            <div class="d-flex justify-content-center">
                                                <div id="section-input" class="col">
                                                    <span> Name</span>
                                                    <input type="text" id="name2" name="name2">
                                                    <span> Mobile Number</span>
                                                    <input type="tel" id="phone-number2" name="phone-number2">
                                                    <span> Email Address</span>
                                                    <input type="email" id="email2" name="email2">
                                                </div>
                                            </div>
                                        </div>
                                        <a id="submit-button" class="btn btn-primary mt-3" onclick="sendResults()">Submit Your Enquiry</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            function onNext() {
                                var y = document.getElementById("risk_profile")
                                var x = document.getElementById("our-funds")
                                var z = document.getElementById("current-fund")
                                var test = $('#income-stream-options').val();
                                if(test === "0") {
                                    if (y.style.display === "none") {
                                        y.style.display = "block";
                                    } else {
                                        z.style.display ="block";
                                        y.style.display = "none";
                                    }
                                }
                                else if (test === "1"){
                                    x.style.display ="block";
                                    y.style.display = "none";
                                }
                            }
                        </script>


        <div id="result-card" style="display: none" class="card">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 mx-auto">
                            <h5 id="result-title" class="card-title text-center">Card title</h5>
                            <h6 id="result-subtitle" class="card-subtitle mb-2 text-muted text-center">Card subtitle</h6>
                            <div class="col-md-6 mx-auto py-5">

                                <p id="result-amountSaved" class="text-center text-muted">Amount Saved</p>
                                <h2 id="result-recommendation" class="text-center">Recommendation</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <?= $this->Html->script('questionnaire.js') ?>
        <script>
            // var questionnaire = new Questionnaire('income-stream', 'Income Stream', 'Used to understand your options for an income stream');
            //
            // var question = new Question("stream-options",
            //     new SelectMenu("stream-options", "stream options", "Please select an answer...", [
            //         new SelectOption(10, "Your Current Fund", false),
            //         new SelectOption(20, "Explore our low cost options", false)
            //     ])
            // );
            // var section = new Section("stream-options", "Question 1", "Where do you want to open an Income Stream?")
            // section.addQuestion(question);
            // questionnaire.addSection(section);
            //
            // question = new Question("return-expectation",
            //     new SelectMenu("return-expectation", "return expectation", "Please select an answer...", [
            //         new SelectOption(10, "A reasonable return without losing any capital", false),
            //         new SelectOption(20, "1-3%", false),
            //         new SelectOption(30, "4-6%", false),
            //         new SelectOption(40, "7-9%", false),
            //         new SelectOption(50, "Over 9%", false)
            //     ])
            // );
            // var section = new Section("return-expectation", "Question 2", "If you consider current interest rates what overall level of return (after inflation) do you reasonably expect to achieve from your investments over the period you wish to invest for?")
            // section.addQuestion(question);
            // questionnaire.addSection(section);
            //
            // question = new Question("poorly-performing-cash-in",
            //     new SelectMenu("poorly-performing-cash-in", "poorly performing cash in", "Please select an answer...", [
            //         new SelectOption(0, "You would cash it in if there was any loss in value", false),
            //         new SelectOption(10, "Less than 1 year", false),
            //         new SelectOption(20, "Up to 3 years", false),
            //         new SelectOption(30, "Up to 5 years", false),
            //         new SelectOption(40, "Up to 7 years", false),
            //         new SelectOption(50, "Up to 10 years", false)
            //     ])
            // );
            // var section = new Section("poorly-performing-cash-in", "Question 3", "Assuming you had no need for capital, how long would you allow a poorly performing investment to continue before cashing it in (assuming the poor performance was mainly due to market influences)?")
            // section.addQuestion(question);
            // questionnaire.addSection(section);
            //
            // question = new Question("investment-experience",
            //     new SelectMenu("investment-experience", "investment-experience", "Please select an answer...", [
            //         new SelectOption(10, "Very little understanding or interest", false),
            //         new SelectOption(20, "Not very familiar", false),
            //         new SelectOption(30, "Have had enough experience to understand the importance of diversification", false),
            //         new SelectOption(40, "I understand that markets may fluctuate and that different market sectors offer different income, growth and taxation characteristics.", false),
            //         new SelectOption(50, "I am experienced with all investment classes and understand the various factors that may influence performance.", false)
            //     ])
            // );
            // var section = new Section("investment-experience", "Question 4", "How familiar are you with investment markets?")
            // section.addQuestion(question);
            // questionnaire.addSection(section);
            //
            // question = new Question("tax-efficiency",
            //     new SelectMenu("tax-efficiency", "tax efficiency", "Please select an answer...", [
            //         new SelectOption(10, "Preferably guaranteed returns, ahead of tax-savings", false),
            //         new SelectOption(20, "Stable, reliable returns with minimal tax savings", false),
            //         new SelectOption(30, "Some variability in returns, some tax savings", false),
            //         new SelectOption(40, "Moderate variability in returns, reasonable tax savings", false),
            //         new SelectOption(50, "Higher variability but potentially higher returns, maximising tax savings", false)
            //     ])
            // );
            // var section = new Section("tax-efficiency", "Question 5", "There is generally a greater tax efficiency when investing in more volatile investments. With this in mind, which of the following would you be more comfortable with?")
            // section.addQuestion(question);
            // questionnaire.addSection(section);
            //
            // question = new Question("paper-hands",
            //     new SelectMenu("paper-hands", "portfolio decrease scenario", "Please select an answer...", [
            //         new SelectOption(10, "Horror – Security of your capital is critical and you do not intend to take risks.", false),
            //         new SelectOption(20, "You would cut your losses and transfer your funds to more secure investment sectors.", false),
            //         new SelectOption(30, "You would be concerned, but would wait to see if the investments improve.", false),
            //         new SelectOption(40, "This was a risk you understood – you would leave your investments in place expecting performance to improve.", false),
            //         new SelectOption(50, "You would invest more funds to take advantage of the lower unit/share prices expecting future growth.", false)
            //     ])
            // );
            // var section = new Section("paper-hands", "Question 6", "What would your reaction be if six months after placing your investments, you discovered that due mainly to market conditions your portfolio had decreased in value by 20%?")
            // section.addQuestion(question);
            // questionnaire.addSection(section);
            //
            // question = new Question("investing-purpose",
            //     new SelectMenu("investing-purpose", "investment purpose", "Please select an answer...", [
            //         new SelectOption(50, "You have an investment time frame of over 5 years. You understand investment markets and are mainly investing for growth to accumulate long-term wealth, or are prepared to use aggressive investments to provide income.", false),
            //         new SelectOption(40, "You are not nearing retirement, have surplus funds to invest and are aiming to accumulate long term wealth from a balanced portfolio.", false),
            //         new SelectOption(30, "You have a lump sum (eg inheritance or a superannuation rollover payment from your employer) and you are uncertain about what sort of investment alternatives are available.", false),
            //         new SelectOption(20, "You are nearing retirement and you are investing to ensure you have sufficient funds available to enjoy your retirement.", false),
            //         new SelectOption(20, "You have some specific objectives within the next 5 years for which you want to accumulate sufficient funds.", false),
            //         new SelectOption(10, "You want to provide a regular income and/or totally protect the value of your investment capital.", false)
            //     ])
            // );
            // var section = new Section("investing-purpose", "Question 7", "Which of the following best describes your purpose for investing?")
            // section.addQuestion(question);
            // questionnaire.addSection(section);
            //
            // var section = new Section("additional-notes", "Additional question", "Please note your preference for higher risk returns in relation to protecting your investment.")
            // var conditionalQuestion = new Question("additional-notes",
            //     new InputField("additional-question", "text", "Enter your response here", "...", true),
            //     false //required if not skipped
            // );
            // section.addQuestion(conditionalQuestion);
            // questionnaire.addSection(section);
            //
            // questionnaire.getCurrentSection().show();
            //
            // function shouldConditionalQuestionBeSkipped() {
            //     if (calculateTotalScore() > 100 && (questionnaire.getAnswerByQuestionId("return-expectation") == 10 || questionnaire.getAnswerByQuestionId("poorly-performing-cash-in") == 0 || questionnaire.getAnswerByQuestionId("paper-hands") == 10 || questionnaire.getAnswerByQuestionId("investing-purpose") == 10)) {
            //         return false;
            //     } else {
            //         return true;
            //     }
            // }
            // function calculateTotalScore() {
            //     var total = 0;
            //     total += parseFloat(questionnaire.getAnswerByQuestionId("stream-options"));
            //     total += parseFloat(questionnaire.getAnswerByQuestionId("return-expectation"));
            //     total += parseFloat(questionnaire.getAnswerByQuestionId("poorly-performing-cash-in"));
            //     total += parseFloat(questionnaire.getAnswerByQuestionId("investment-experience"));
            //     total += parseFloat(questionnaire.getAnswerByQuestionId("tax-efficiency"));
            //     total += parseFloat(questionnaire.getAnswerByQuestionId("paper-hands"));
            //     total += parseFloat(questionnaire.getAnswerByQuestionId("investing-purpose"));
            //     return total;
            // }
            //
            // function skipConditionalQuestion() {
            //     questionnaire.addSectionToSkipById("additional-notes");
            // }
            //
            // function doNotSkipConditionalQuestion() {
            //     questionnaire.removeSectionToSkipById("additional-notes");
            // }
            //
            // function onNext() {
            //     questionnaire.saveAnswersForCurrentSection();
            //
            //     if (shouldConditionalQuestionBeSkipped()) {
            //         skipConditionalQuestion();
            //     } else {
            //         doNotSkipConditionalQuestion();
            //     }
            //
            //     questionnaire.nextSection();
            //
            //     if (shouldSubmitButtonBeShown()) {
            //         showSubmitButton();
            //     }
            // }
            //
            // function onPrevious() {
            //     questionnaire.saveAnswersForCurrentSection();
            //
            //     if (shouldConditionalQuestionBeSkipped()) {
            //         skipConditionalQuestion();
            //     } else {
            //         doNotSkipConditionalQuestion();
            //     }
            //
            //     questionnaire.previousSection();
            //
            //     if (shouldSubmitButtonBeShown()) {
            //         showSubmitButton();
            //     }
            // }
            //
            // function shouldSubmitButtonBeShown() {
            //     return questionnaire.haveAllSectionsBeenAnswered();
            // }
            //
            // function showSubmitButton() {
            //     var submit = document.getElementById("submit-button");
            //     submit.style.display = "block";
            //     console.log("Submit button displayed")
            // }
            //
            // function onSubmit() {
            //     showResults();
            // }


            function riskProfileShow() {
                var s = document.getElementById("risk_profile");
                if (s.style.display === "block") {
                    s.style.display = "none";
                } else {
                    s.style.display = "block";
                }
                var i = document.getElementById("investment_form");
                if (i.style.display === "none") {
                    i.style.display = "block";
                } else {
                    i.style.display = "none"
                }
            }

        </script>
<?php
echo $this->Html->css("/webroot/css/investment.css");
echo $this->Html->script("/webroot/js/investment.js");
?>
