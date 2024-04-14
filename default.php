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


    <div id='motto'>
        <h1>"From Shadows to Specters, We Equip Adventurers."</h1>
    </div>

    <div id='promo'>
        <div id='announcement'>
            <h2>Login to get 20% off selected items. <br>
                Exclusive Member Promotion Event <br>
                ends in:</h2>
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
                He'll reward you with <br>
                a FREE SHIPPING code!
            </p>
        </div>

        <div id="example">
            <img src="/images/findghostie.png">
        </div>
    </div>

    <h1 id='exclusive'>Exclusive Member Promotions</h1>
    <div class='producthome'>
        <p class='productimage'><img src="images/emfreader3.png"></p>
        <div class='purchasegroup'>
            <div class='description'>
                <p class='productsale'><span style="font-size: 1.5em;">EMF Reader <br>
                        $20.00</span><br>
                    <span style="text-decoration: line-through;">$25.00</span> Save $5.00<br>
                </p>
                <p class='productdesc'>An EMF reader, or electromagnetic field meter, is a crucial tool in ghost hunting that detects fluctuations in <a href='' class='readmore'>... read more</a>
                </p>
            </div>
            <div class='purchase'>
                <button class='buynow'>Buy Now</button>
                <button class='addtocart'>Add to Cart</button>
                <button class='removeitem'>-</button>
                <p class='itemcount'>0</p>
                <button class='additem'>+</button>
            </div>
        </div>
    </div>

    <div class='producthome'>
        <p class='productimage'><img src="images/utility jacket - 2.png"></p>
        <div class='purchasegroup'>
            <div class='description'>
                <p class='productsale'><span style="font-size: 1.5em;">Utility Vest <br>
                        $52.00</span><br>
                    <span style="text-decoration: line-through;">$65.00</span> Save $13.00<br>
                </p>
                <p class='productdesc'>The utility vest is an essential piece of gear for ghost hunters, offering multiple pockets and compartments to easily carry <a href='' class='readmore'>... read more</a>
                </p>
            </div>
            <div class='purchase'>
                <button class='buynow'>Buy Now</button>
                <button class='addtocart'>Add to Cart</button>
                <button class='removeitem'>-</button>
                <p class='itemcount'>0</p>
                <button class='additem'>+</button>
            </div>
        </div>
    </div>

    <div class='producthome'>
        <p class='productimage'><img src="images/ghost sticker.png"></p>
        <div class='purchasegroup'>
            <div class='description'>
                <p class='productsale'><span style="font-size: 1.5em;">Bumper Sticker<br>
                        $16.00</span><br>
                    <span style="text-decoration: line-through;">$20.00</span> Save $4.00<br>
                </p>
                <p class='productdesc'>A bumper sticker that reads "Ghost Hunter on Board" is a playful way for enthusiasts to declare their passion for paranormal <a href='' class='readmore'>... read more</a>
                </p>
            </div>
            <div class='purchase'>
                <button class='buynow'>Buy Now</button>
                <button class='addtocart'>Add to Cart</button>
                <button class='removeitem'>-</button>
                <p class='itemcount'>0</p>
                <button class='additem'>+</button>
            </div>
        </div>
    </div>

    <h1 id='toprated'>Top Rated Items</h1>

    <h1 id='community'>Community Opportunities</h1>

    <div id="opportunity">
        <div id="group">
            <img src='images/community.png'>
            <p>
                Visit our <span style="font-weight:bold; font-size: 1.2em">COMMUNITY</span> page and connect with like-minded individuals today!
                <br><br>
                - Find local events.<br>
                - Discover haunted places to visit.<br>
                - Join hunting groups.
            </p>

        </div>
        <div id="evidence">
            <img src="images/sound wave.png">
            <p>
                Visit our <span style="font-weight:bold; font-size: 1.2em">EVIDENCE ROOM</span> to view ghostly submissions from our members using the very tools from our store.
                <br><br>
                Submit your own evidence to share with our community members.
            </p>
        </div>
    </div>

    <?php include('components/footer.php') ?>
    <?php include("styles/bootstrapjs.php") ?>
</body>

</html>