<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="utf-8">

    <title>DrumPassion</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <?php include "./includes/dependencies.php" ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-dark">

    <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aboutModal">About DrumPassion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    I created this site to share my passion for drumming 🥁. <br><br>
                    It has been made as a part of a 2021 school 👨‍🎓 project.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php include './includes/navbar.php';?>
    <div class="row bg-dark p-4">
        <div class="col-12 bg-dark">
            <h2 class="drumstickHeader text-light">
                My passion. Your turn.
            </h2>

        </div>
        <div class="col-12" style="text-align: center; position: relative;">
            <h2 class="d-none d-lg-block noselect" id="tooltip">Hit me, baby!</h2>
            <image class="noselect" id="drumStick" style="height: 400px; margin: auto;" src="./images/drumStick.png" />
        </div>
        <div class="row spinTriggerContainer">
            <div class="col-6">
                <button class="btn btn-primary spinTrigger" id="spinLeft">Spin me left!</button>
            </div>
            <div class="col-6">
                <button class="btn btn-primary spinTrigger" id="spinRight">Spin me right!</button>
            </div>
        </div>
    </div>
    <div id="influences" class="row">
        <div class="col-12">
            <h2 class="drumstickHeader p-2 text-light">
                My influences
            </h2>
            <p class="text-light influences-teaser">
                Below you'll see some of my favorite drumming videos. <br>
                Can you even wait to watch? To feel the inspiration? <br>
                To sit behind the set and do what they do?
            </p>
        </div>
        <div class="col-12 col-lg-5 offset-lg-1 p-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe src="https://www.youtube.com/embed/IWdyOAse6MQ?start=69" allowfullscreen></iframe>
            </div>
            <p class="videoDescription">Jay Weinberg of Slipknot! I love the speed and linear fills.<br>And that snare
                tone!
                😱
            </p>
        </div>
        <div class="col-12 col-lg-5 p-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe src="https://www.youtube.com/embed/1yStL-PDu2w?start=60" allowfullscreen></iframe>
            </div>
            <p class="videoDescription">Joey Jordison, former drummer of Slipknot! <br>I watch this clip basically every
                day
                😍.<br>
                RIP
                2021.
            </p>
        </div>
        <div class="col-12 col-lg-5 offset-lg-1 p-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe src="https://www.youtube.com/embed/K7h6hOs_ySw?start=84" allowfullscreen></iframe>
            </div>
            <p class="videoDescription">Vinnie Colaiuta. One of my father's favorite drummers.

            </p>
        </div>
        <div class="col-12 col-lg-5 p-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe src="https://www.youtube.com/embed/TVljmrKC3FM?start=120" allowfullscreen></iframe>
            </div>
            <p class="videoDescription">I have absolute no idea who this is, but I just love this clip! <br>I wish I
                attended the event and had a few cold beers 🍺

            </p>
        </div>
    </div>
    <?php include "./includes/footer.php" ?>
    <script src="./scripts/drumstick.js"></script>
    <script>
    window.onload = () => {
        initiateEventListener("drumStick");
        initiateSpinClockwiseListener("spinRight", "drumStick");
        initiateSpinCounterClockwiseListener("spinLeft", "drumStick");
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
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
    </script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>