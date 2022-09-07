
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<div class="container-fluid">
    <main class="py-5 text-center">
        <div class="py-5 text-center">
            <h2 class="section-heading text-uppercase">Consolidate super</h2>
            <p class="section-subheading text-muted">Let's help you consolidate your superannuation!</p>
        </div>

        <div id="initialQuestion">
            <form>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <p class="lead">To start! Please go to the ATO online (MyGov) to see if you have any lost super</p>
                        <P class="lead">You can access this <a href="https://www.ato.gov.au/forms/searching-for-lost-super/#Howtosearchforyourlostsuper1" target="_blank">here!</a></P>
                    </div>

                </div>
                <div class="row justify-content-center">
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
                        <p class="lead">Do you have only one super account?</p>
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
                        <p class="lead">You don't need to consolidate your super.</p>
                </div>
                <div class="row text-center" style="justify-content: center">
                    <p>Do you want to explore other options?</p>
                    <div class="col-1">
                        <button class="btn btn-primary"  onclick="location.href='super_options' ">Yes</button>
                    </div>
                    <div class="col-1">
                        <button class="btn btn-primary" onclick="readyRetire()">No</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function readyRetire(){
                var x = document.getElementById("selectYes");
                var y= document.getElementById("readyRetire");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                    y.style.display ="block";
                }

            }
        </script>
        <div class="hide" id="readyRetire">
            <div class="allHere" id="allHere">
                <div class="form-group fieldGroup">
                    <p class="lead">Are you ready to retire now?</p>
                </div>
                <div class="row text-center" style="justify-content: center">
                    <div class="col-1">
                        <button class="btn btn-primary"  onclick="location.href='income_stream' ">Yes</button>
                    </div>
                    <div class="col-1">
                        <a class="btn btn-primary " href="<?= $this->Url->build(['controller' => 'modules','action' => 'dashboard']);?>">No</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
