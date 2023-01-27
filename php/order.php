<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/order.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    <title>Pizza_Kingdom Orders</title>
</head>
<body>
    <div class="linked"> <!--<header class="links" style="border: solid;">-->
        <ul>
            <li><a href="homepage.html" title="Home" value="" target="">Home</a>
            </li>
        </ul>
    </div>
    <div class="">
        <div class="controls">
            <form>
                <Fieldset>
                    <h1>Ordering Menu :</h1>

                    <h1>Pizzas :</h1>
                   <div class="row">
                        <div class="column">
                          <img src="/images/pizaa.jpeg" alt="Snow" style="width:100%">
                          <div class="image-caption"  >Veggy Pizza  price=1050 <button type="button" class="btn btn-warning btn-lg modalTrigger" data-toggle="modal" data-target="#myModal">Add to cart</button></div>
                        </div>
                        <div class="column">
                          <img src="/images/pizaa_p1.jpeg" alt="Forest" style="width:100%">
                          <div class="image-caption"  >Locateli deluxe  price=1250 <button type="button" class="btn btn-warning btn-lg modalTrigger" data-toggle="modal" data-target="#myModal">Add to cart</button></div>
                        </div>
                        <div class="column">
                          <img src="/images/pizza_p2.jpeg" alt="Mountains" style="width:100%">
                          <div class="image-caption"  >Explosive flavor pizza  Price=1350 <button type="button" class="btn btn-warning btn-lg modalTrigger" data-toggle="modal" data-target="#myModal">Add to cart </button></div>
                        </div>
                      </div>
                      

                </Fieldset>
            </form>
        </div>
        <div class="controls">
            <form>
                <Fieldset>
                    <h1>Drinks :</h1>
                    <div class="row">
                        <div class="column">
                          <img src="/images/cocktail1.jpeg" alt="Snow" style="width:100%">
                          <div class="image-caption"  >Tangy cocktail  Price=250 <button type="button" class="btn btn-warning btn-lg modalTrigger" data-toggle="modal" data-target="#myModal">Add to cart</button></div>
                        </div>
                        <div class="column">
                          <img src="/images/cocktail2.jpeg" alt="Forest" style="width:100%">
                          <div class="image-caption"  >Chakra tea  Price=350 <button type="button" class="btn btn-warning btn-lg modalTrigger" data-toggle="modal" data-target="#myModal">Add to cart</button></div>
                        </div>
                        <div class="column">
                          <img src="/images/drink2.jpeg" alt="Mountains" style="width:100%">
                          <div class="image-caption"  >Warm love  Price=300 <button type="button" class="btn btn-warning btn-lg modalTrigger" data-toggle="modal" data-target="#myModal">Add to cart </button></div>
                        </div>
                      </div>

                    
                </Fieldset>
            </form>
        </div>
        <div class="controls">
            <form>
                <Fieldset>
                    <h1>Offers :</h1>
                    <div class="row">
                        <div class="column">
                          <img src="/images/pp1.jpeg" alt="Snow" style="width:100%">
                          <div class="image-caption"  >Veggy Pizza  Price=500 <button type="button" class="btn btn-warning btn-lg modalTrigger" data-toggle="modal" data-target="#myModal">Add to cart</button></div>
                        </div>
                        <div class="column">
                          <img src="/images/pp2.jpeg" alt="Forest" style="width:100%">
                          <div class="image-caption"  >Locateli deluxe  Price=450 <button type="button" class="btn btn-warning btn-lg modalTrigger" data-toggle="modal" data-target="#myModal">Add to cart</button></div>
                        </div>
                        <div class="column">
                          <img src="/images/pp3.jpeg" alt="Mountains" style="width:100%">
                          <div class="image-caption"  >Explosive flavor pizza  Price=550 <button type="button" class="btn btn-warning btn-lg modalTrigger" data-toggle="modal" data-target="#myModal">Add to cart </button></div>
                        </div>
                      </div>
                    
                </Fieldset>
            </form>
        </div>
        <div class="controls">
            <form>
                <Fieldset>
                    <h1>Payment :</h1>
                    <p>Do you prefer your usual payment method <span><a href="#">yes</a></span></p>
                    <label for="payment">Choose payment</label>
            <select name="payment" id="payment">
                <option value="ICS">Credit Card</option>
                <option value="ICS">Cash</option>
                <option value="ICS">M-pesa</option>
            </select><br><br>
            <p>Can we bring it to the address ?</p>
            
            <label for="select_M">yes</label>
            <input type="radio" id="select_M" name="user_pLocation" value="M-pesa">
            <label for="select_Card">no</label>
            <input type="radio" id="select_Card" name="user_pLocation" value="Credit card">
            <p>If no where would you like to pick it up?</p>
            <textarea class="answer1"> </textarea><br><br>
            <p>You have added these to your cart :</p>
            <textarea readonly class="answer2"> </textarea>
            <p>Kindly press payed,so that we can confirm your order</p>
            <p>If not you may clear the list</p>
            <button>Payed</button>
            <button type="reset">Clear</button>

                </Fieldset>
            </form>
        </div>


    </div>
    
</body>
</html>