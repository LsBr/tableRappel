<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Lewis Bolender">
    <title>Major System Trainer</title>

    <link rel="stylesheet" href="CSS/generalValues.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/training.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</head>

<body>
    <?php include_once('header.php'); ?>

    <main>

        <div class="py-5 px-5 bg-light trainingContainer">
            <a class="btn btn-primary text-start" href="training.php"> 🡨<span class="fw-semibold"> Back </span></a>
            <div class="container text-center mt-5">
                <div class="row justify-content-center">
                    <!-- <?php print_r($randomAssoc); ?> -->
                    <div class="col-lg-12 mb-4">
                        <h1>What number does this image correspond to ?</h1>
                        <img class="imgTraining img-thumbnail mt-3" src="<?= $randomAssoc['img_url'] ?>" class="img-fluid">
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-5">
                        <input type="text" name="wordAnswer" id="wordAnswer" pattern="[\p{L}]*" class="form-control"
                            required>
                        <div class="invalid-feedback">
                            Answer must be a word
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-2 col-xs-2">
                        <button type="button" class="btn btn-primary" id="submitNbToWord">✓</button>
                    </div>
                    <div class="pt-5">
                        <div class="answerResult">
                            <h1>Good</h1>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="wordValue" id="wordValue" value="<?= $randomAssoc['word'] ?>" />
            </div>
    </main>

    <?php include_once('footer.php'); ?>

    <script type="text/javascript" src="JS/submitAnswer.js"></script>
</body>

</html>