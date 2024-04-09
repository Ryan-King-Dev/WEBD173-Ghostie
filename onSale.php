<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghostie Gear Incorporated</title>
    <?php include("styles/styles.php") ?>
</head>

<body>

    <?php include("server/connectDB.php") ?>

    <div class='utility'><?php include("components/utility.php") ?></div>

    <?php include("components/navbar.php") ?>

    <div>
        <h1>On Sale</h1>
    </div>

    <?php include('components/footer.php') ?>
    <?php include("styles/bootstrapjs.php") ?>
</body>

</html>