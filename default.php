<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghostie Gear Incorporated</title>
    <?php include("../WEBD173-Ghostie/styles/styles.php") ?>
</head>

<body>

    <?php include("../WEBD173-Ghostie/server/connectDB.php") ?>

    <div class='utility'><?php include("../WEBD173-Ghostie/components/utility.php") ?></div>

    <?php include("../WEBD173-Ghostie/components/navbar.php") ?>


    <div id='motto'>
        <h1>"From Shadows to Specters, We Equip Adventurers."</h1>
    </div>

    <div id='promo'>
        <div id='announcement'>
            <p>Login to get 20% off selected items. <br>
                Exclusive Member Promotion Event <br>
                ends in:</p>
        </div>
        <div id='timer'>
            <div id='day1'>
                <p>0</p>
            </div>
            <div id='day2'>
                <p>3</p>
            </div>
            <div id='divide1'>
                <p>:</p>
            </div>
            <div id='hour1'>
                <p>1</p>
            </div>
            <div id='hour2'>
                <p>4</p>
            </div>
            <div id='divide2'>
                <p>:</p>
            </div>
            <div id='minute1'>
                <p>2</p>
            </div>
            <div id='minute2'>
                <p>9</p>
            </div>
            <div id='days'>
                <p>days</p>
            </div>
            <div id='hours'>
                <p>hours</p>
            </div>
            <div id='minutes'>
                <p>minutes</p>
            </div>
        </div>



        <div id='member'>
            <p>Not yet a member?</p><br>
            <button>Register Here</button>
        </div>
    </div>

    <div id="ghostie">
        <div id="hunt">
            <p>Ghostie is haunting our<br>
                homepage! <br><br>
                Hunt and Click on Ghosie! <br><br>
                He'll reward you with a FREE SHIPPING code!
            </p>
        </div>

        <div id="example">
            <img src="/images/ghostie - med - embossed - 03-11.png">
            <p><img src="/images/shirt.png"></p>

        </div>
    </div>





    <?php include("../WEBD173-Ghostie/styles/bootstrapjs.php") ?>
</body>

</html>