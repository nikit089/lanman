<!DOCTYPE html>
<html>
<head>
  <title>Shopping Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="/lanman/css/style.css">
</head>
<body>
  <main class="page">
    <section class="shopping-cart dark">
      <div class="container">
            <div class="block-heading">
              <h2>Sales taxes problem for LanMan Group</h2>
              <p>Questa è una semplice pagina di checkout creata con l'ausilio di bootstrap, come feed ho scelto di creare un json con all'interno gli articoli con il quale andrò a popolare il carello, tramite la select sottostante sarà possibile cambiare le varie input così aggiornare gli oggetti nel carrello da poter inviare alla pagina preposta alla generazione della ricevuta in base alla tassazione e alle regole di arrotondamento imposte nel documento.</p><br />
                   <select name="input" id="input">
                      <option value="" selected disabled>Selezionare INPUT</option>
                      <option value="input1">INPUT 1</option>
                      <option value="input2">INPUT 2</option>
                      <option value="input3">INPUT 3</option>
                    </select>
            </div>

            <div class="content">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="items">
                <div class="product">
                  <div class="row">
                    <div class="col-md-3">
                      <img class="img-fluid mx-auto d-block image" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/shopping-circle-blue-1024.png" width="100">
                    </div>  
                    <div class="col-md-8">
                      <div class="info">
                        <div class="row">
                          <div class="col-md-5 product-name">
                            <div class="product-name">
                              <span class="item">Book</span>
                              <div class="product-info">
                                <div>Category: <span class="value category">books</span></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 quantity">
                            <label for="quantity">Quantity:</label>
                            <input id="quantity" name="quantity" type="number" value ="2" class="form-control quantity-input">
                          </div>
                          <div class="col-md-3 price">
                            <span class="price">24.98</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product">
                  <div class="row">
                    <div class="col-md-3">
                      <img class="img-fluid mx-auto d-block image" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/shopping-circle-blue-1024.png" width="100">
                    </div>
                    <div class="col-md-8">
                      <div class="info">
                        <div class="row">
                          <div class="col-md-5 product-name">
                            <div class="product-name">
                              <span class="item">Music CD</span>
                              <div class="product-info">
                                <div>Category: <span class="value category">music</span></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 quantity">
                            <label for="quantity">Quantity:</label>
                            <input id="quantity" type="number" name="quantity" value ="1" class="form-control quantity-input">
                          </div>
                          <div class="col-md-3 price">
                            <span class="price">14.99</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product">
                  <div class="row">
                    <div class="col-md-3">
                      <img class="img-fluid mx-auto d-block image" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/shopping-circle-blue-1024.png" width="100">
                    </div>
                    <div class="col-md-8">
                      <div class="info">
                        <div class="row">
                          <div class="col-md-5 product-name">
                            <div class="product-name">
                              <span class="item">Chocolate bar</span>
                              <div class="product-info">
                                <div>Category: <span class="value food">food</span></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 quantity">
                            <label for="quantity">Quantity:</label>
                            <input id="quantity" name="quantity" type="number" value ="1" class="form-control quantity-input">
                          </div>
                          <div class="col-md-3 price">
                            <span class="price">0.85</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <div class="summary">
                <h3>Summary</h3>
                <div class="summary-item"><span class="text">Discount</span><span id=""class="price">0</span></div>
                <div class="summary-item"><span class="text">Shipping</span><span id=""class="price">0</span></div>
                <div class="summary-item"><span class="text">Subtotal</span><span id="subtotal" class="price">40.82</span></div><br />
                <p>Taxes will be calculated during the checkout.</p>
                <form action="/lanman/payment.php" method="post" name="payment" id="payment">
                        <input type="hidden" name="input" />
                <button type="submit" class="btn btn-primary btn-lg btn-block">Checkout</button>
                </form>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </section>
  </main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>var json={ 
  "input1": [{
      "item": "Book",
      "category": "books",
      "quantity": 2,
      "price": 24.98
    },
    {
      "item": "Music CD",
      "category": "music",
      "quantity": 1,
      "price": 14.99
    },
    {
      "item": "Chocolate bar",
      "category": "food",
      "quantity": 1,
      "price": 0.85
    }
  ],
  "input2": [{
      "item": "Imported box of chocolates",
      "category": "food",
      "quantity": 1,
      "price": 10.00
    },
    {
      "item": "Imported bottle of perfume",
      "category": "cosmetics",
      "quantity": 1,
      "price": 47.50
    }
  ],
  "input3": [{
      "item": "Imported bottle of perfume",
      "category": "cosmetics",
      "quantity": 1,
      "price": 27.99
    },
    {
      "item": "Bottle of perfume",
      "category": "cosmetics",
      "quantity": 1,
      "price": 18.99
    },
    {
      "item": "Packet of headache pills",
      "category": "medicines",
      "quantity": 1,
      "price": 9.75
    },
    {
      "item": "Box of imported chocolates",
      "category": "food",
      "quantity": 3,
      "price": 33.75
    }
  ]
};


$('#input').change(function() {
    const boxes = document.querySelectorAll('.product');
     boxes.forEach(box => {
      box.remove();
});
var oggetto1 = $(this).val();
$('input[name=input]').val(oggetto1);
var subTotal = 0;

$.each(json[oggetto1], function(i, object) {
i++;
$('.items').append('<div class="product"><div class="row"><div class="col-md-3"><img class="img-fluid mx-auto d-block image" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/shopping-circle-blue-1024.png" width="100"></div><div class="col-md-8"><div class="info"><div class="row"><div class="col-md-5 product-name"><div class="product-name"><span class="item'+i+'">Book</span><div class="product-info"><div>Category: <span class="value category'+i+'">books</span></div></div></div></div><div class="col-md-4 quantity"><label for="quantity">Quantity:</label><input id="quantity" name="quantity'+i+'" type="number" value ="2" class="form-control quantity-input"></div><div class="col-md-3 price"><span class="price'+i+'">12,49</span></div></div></div></div></div></div>');

    $.each(object, function(proprieta, value) {
          $('input[name='+proprieta+i+']').val(value);
          $("."+proprieta+i).html(value);
       });
        
    $('.price'+i).each(function() {   
          subTotal +=parseFloat($(this).text());       
      });   
         }); 
    var subTotal=subTotal.toFixed(2);
            $('#subtotal').text(subTotal);
            $('input[name=subtotal]').val(subTotal);
         });
   
</script>
</body>
</html>
