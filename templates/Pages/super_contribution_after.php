<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
</style>
<body class="bg-light">
<div class="container-fluid">
    <main class="py-5 text-center">
        <div class="py-5 text-center">
            <h2 class="section-heading text-uppercase">Make contribution to your super</h2>
            <p class="section-subheading text-muted">Let's help you !</p>
        </div>

        <div class="text-center">
            <?php if ($_SESSION['age']>75){ ?>
                <p>Sorry, Your age is over 75!</p>
            <p>You cannot contribute into superannuation.</p>
                    <a class="btn btn-primary " href="<?= $this->Url->build(['controller' => 'modules','action' => 'dashboard']);?>">Back to Dashboard</a>
            <?php } else {?>
            <div class="row" style="justify-content: center">

            </div>



            <?php }?>
        </div>
    </main>
</div>
</body>
