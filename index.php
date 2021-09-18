<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="utf-8">

    <title>Drumpassion</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <?php include "./includes/dependencies.php" ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-dark">
    <?php include './includes/navbar.php';?>
    <div class="row bg-dark">
        <div class="col-12 bg-dark">
            <h2 class="drumstickHeader">
                My passion.
            </h2>

        </div>
        <div class="col-12" style="text-align: center;">
            <image class="noselect" id="drumStick" style="height: 400px; margin: auto;" src="./images/drumStick.png" />
        </div>
        <div class="row spinTriggerContainer">
            <div class="col-6">
                <button class="btn btn-secondary spinTrigger" id="spinLeft">Spin me!</button>
            </div>
            <div class="col-6">
                <button class="btn btn-secondary spinTrigger" id="spinRight">Spin me!</button>
            </div>
        </div>
        <div class="col-12">
            <h2 class="drumstickHeader">
                Your future.
            </h2>
        </div>
    </div>
    <script src="./scripts/drumstick.js"></script>
    <script>
    initiateEventListener("drumStick");
    initiateSpinClockwiseListener("spinLeft", "drumStick");
    initiateSpinCounterClockwiseListener("spinRight", "drumStick");
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script> -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script>
    console.log("test 2")
    </script>
</body>

</html>