<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Lewis Bolender">
    <title>Major System Trainer</title>

    <link rel="stylesheet" href="CSS/generalValues.css">
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="CSS/header.css">
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
        <?php include_once('topSection.php'); ?>

        <div class="py-4 px-5 bg-light" id="mainSectionContainer">

            <div class="alert alert-success col-md-4 offset-md-4" role="alert" id="homeAlert">
                <span id="homeAlertContent"> </span>
                <button type="button" class="btn-close" id="btnCloseAlert" aria-label="Close"></button>
            </div>
            <?php if (isset($_SESSION['alert'])) {
                $alert = $_SESSION['alert'];
                echo '<script>showHomeAlert("' . $alert['type'] . '", "' . addslashes($alert['message']) . '");</script>';
                unset($_SESSION['alert']);
            }
            ?>

            <div id="signSectionReload">
                <?php if (!isset($_SESSION['loggedin'])) {
                    include_once('signSection.php');
                } ?>
            </div>

            <div id="homeBtnContainer">
                <?php
                if (isset($_SESSION['loggedin'])) { ?>
                    <div class="text-center pb-4">
                        <button type="button" class="btn btn-success btn-md" data-bs-toggle="modal"
                            data-bs-target="#modalAssoc" data-bs-type="modalAdd">Add</button>
                        <button type="button" class="btn btn-primary btn-md" id="fillBtn">Fill to 100</button>
                        <button type="button" class="btn btn-danger btn-md" id="deleteAllBtn">Delete all</button>
                    </div>
                <?php } ?>
            </div>
            <div id="associationsContainer">
                <?php if (!empty($assocs)) { ?>
                    <div class="container-fluid px-4">
                        <div class="row gx-3">
                            <?php foreach ($assocs as $assoc) { ?>

                                <div class="card-container col-lg-2 col-md-4 col-sm-6 mb-4"
                                    id="card-container-<?= $assoc['id'] ?>" data-bs-toggle="modal" data-bs-target="#modalAssoc"
                                    data-bs-type="modalEdit" data-assoc-id="<?= $assoc['id'] ?>">
                                    <div class="bg-white p-3 border rounded">
                                        <div class="upper-part-card">

                                            <div class="img-assoc-container">
                                                <img src="<?= $assoc['img_url'] ?>" class="img-assoc"
                                                    onerror="this.src='IMG/noImgDefault.jpg'">
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="bottom-part-card">
                                            <h3 class="text-center" id="number-value-display"
                                                data-number-value='<?= $assoc['digit'] ?>'>
                                                <?= $assoc['digit'] ?>
                                            </h3>
                                            <h3 class="text-center" id="word-value-display"
                                                data-word-value='<?= $assoc['word'] ?>'>
                                                <?= $assoc['word'] ?>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-close-container">
                                    <button type="button" class="btn-close btn-delete" data-id="<?= $assoc['id'] ?>"
                                        aria-label="Delete">
                                    </button>
                                </div>

                            <?php } ?>

                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>

        <!-- MODAL ADD  -->
        <?php include_once('modalDefault.php'); ?>
        <!-- MODAL ADD  -->

    </main>

    <?php include_once('footer.php'); ?>

    <script src="JS/deleteAssoc.js"></script>
    <script src="JS/deleteAllAssocs.js"></script>
    <script src="JS/modalDefault.js"></script>
    <script src="JS/fillAssocs.js"></script>

</body>

</html>