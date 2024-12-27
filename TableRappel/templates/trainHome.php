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
    <script src="JS/alertHandler.js"></script>
</head>

<body>
    <?php include_once('header.php'); ?>

    <main>

        <div class="py-5 px-5 bg-light">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-12 mt-5 mb-5">
                        <h1>Choose your training</h1>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">What's that number ?</h5>
                                    <p class="card-text">Find the word associated to a certain number.</p>
                                    <a href="<?= $nbToWordUrl ?>" class="btn btn-primary">Train</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">What's that image ?</h5>
                                    <p class="card-text">Find the number associated to a certain image.</p>
                                    <a href="<?= $imgToNbUrl ?>" class="btn btn-primary">Train</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">What's that image ?</h5>
                                    <p class="card-text">Find the number associated to a certain image.</p>
                                    <a href="<?= $imgToNbUrl ?>" class="btn btn-primary">Train</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>

    <?php include_once('footer.php'); ?>
</body>

</html>