<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
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
              <p></p><br />
            </div>

    <?php

        if (isset($_POST['input'])) {
            $input_name = htmlspecialchars($_POST['input']); 
            } 

        $json = '{
    "input1": [{
            "item": "Book",
            "category": "books",
            "quantity": "2",
            "price": "24.98",
            "imported": "no"
        },
        {
            "item": "Music CD",
            "category": "music",
            "quantity": "1",
            "price": "14.99",
            "imported": "no"
        },
        {
            "item": "Chocolate bar",
            "category": "food",
            "quantity": "1",
            "price": "0.85",
            "imported": "no"
        }
    ],
    "input2": [{
            "item": "Imported box of chocolates",
            "category": "food",
            "quantity": "1",
            "price": "10.00",
            "imported": "yes"
        },
        {
            "item": "Imported bottle of perfume",
            "category": "cosmetics",
            "quantity": "1",
            "price": "47.50",
            "imported": "yes"
        }
    ],
    "input3": [{
            "item": "Imported bottle of perfume",
            "category": "cosmetics",
            "quantity": "1",
            "price": "27.99",
            "imported": "yes"
        },
        {
            "item": "Bottle of perfume",
            "category": "cosmetics",
            "quantity": "1",
            "price": "18.99",
            "imported": "no"
        },
        {
            "item": "Packet of headache pills",
            "category": "medicines",
            "quantity": "1",
            "price": "9.75",
            "imported": "no"
        },
        {
            "item": "Box of imported chocolates",
            "category": "food",
            "quantity": "3",
            "price": "33.75",
            "imported": "yes"
        }
    ]
}';
        $prodotti = json_decode($json, true);
    ?>
<div class="page-content container">
    <div class="page-header text-blue-d2">
        <h1 class="page-title text-secondary-d1">
            Invoice
            <small class="page-info">
                <i class="fa fa-angle-double-right text-80"></i>
                ID: #001
            </small>
        </h1>

        <div class="page-tools">
            <div class="action-buttons">
                <a class="btn bg-white btn-light mx-1px text-95" onclick="window.print()" data-title="Print">
                    <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                    Print
                </a>
            </div>
        </div>
    </div>

    <div class="container px-0">
        <div class="row mt-4">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center text-150">
                            <i class="fa fa-book fa-2x text-success-m2 mr-1"></i>
                            <span class="text-default-d3">lanman.it</span>
                        </div>
                    </div>
                </div>
                <!-- .row -->
                <hr class="row brc-default-l1 mx-n1 mb-4" />

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                            <span class="text-sm text-grey-m2 align-middle">To:</span>
                            <span class="text-600 text-110 text-blue align-middle">Niccolò Gavagni</span>
                        </div>
                        <div class="text-grey-m2">
                            <div class="my-1">
                                Via Paolo Sarpi
                            </div>
                            <div class="my-1">
                                20154, Milano
                            </div>
                            <div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-secondary"></i> <b class="text-600">Italy</b></div>
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                        <hr class="d-sm-none" />
                        <div class="text-grey-m2">
                            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                Invoice
                            </div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">ID:</span> #001</div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Issue Date:</span> Jan 16, 2023</div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Status:</span> <span class="badge bg-success badge-pill px-25">Paid</span></div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

                <div class="mt-4">
                    <div class="row text-600 bgc-default-tp1 py-25">
                        <div class="d-none d-sm-block col-1">#</div>
                        <div class="col-9 col-sm-5">Item</div>
                        <div class="d-none d-sm-block col-4 col-sm-2">Category</div>
                         <div class="d-none d-sm-block col-4 col-sm-2">Qnt</div>
                        <div class="col-2">Amount</div>
                    </div>
                     <div class="text-95 text-secondary-d3">

                     <?php
                     foreach($prodotti as $key => $val) {

                        if ($key == $input_name){
                            $somma = 0;
                          foreach($val as $_key => $_val) {
                              echo '<div class="row mb-2 mb-sm-0 py-25">
                            <div class="d-none d-sm-block col-1">1</div>
                            <div class="col-9 col-sm-5">' . $_val[item] . '</div>
                            <div class="d-none d-sm-block col-2">' . $_val[category] . '</div>
                            <div class="col-2 text-secondary-d2">' . $_val[quantity] . '</div>
                            <div class="col-2 text-secondary-d2">' . $_val[price] . '</div>
                        </div>';
                            $somma+= $_val[price]; 
                                if ($_val[category] != "books" && $_val[category] != "food" && $_val[category] != "medicines" ){
                                       $tasse+= $_val[price];                  
                               } 
                                if ($_val[imported] == "yes"){
                                    $tasse_importazione+= $_val[price];                  
                               }
                             }
                           }
                         }

                        $percentuale_tasse = 10;
                        $percentuale_tasse_importazione = 5;
                        $ammontare_tasse = round(($tasse * $percentuale_tasse) / 100, 2);
                        $ammontare_tasse_importazione = round(($tasse_importazione * $percentuale_tasse_importazione) / 100, 2);
                        $arrotonda_tasse = round($ammontare_tasse  / 0.05) * 0.05;
                        $arrotonda_tasse_importazione = round($ammontare_tasse_importazione  / 0.05) * 0.05;
                        $calcolo_totale_tasse = $arrotonda_tasse + $arrotonda_tasse_importazione;
                        $totale = round($somma + $calcolo_totale_tasse, 2);

                      ?>
                
                    </div>
                    <div class="row border-b-2 brc-default-l2"></div>
                    <div class="row mt-3">
                        <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                            Extra note such as company or payment information...
                        </div>

                        <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
                            <div class="row my-2">
                                <div class="col-7 text-right">
                                    SubTotal:
                                </div>
                                <div class="col-5">
                                    <span class="text-120 text-secondary-d1"><?php echo $somma; ?></span>
                                </div>
                            </div>

                            <div class="row my-2">
                                <div class="col-7 text-right">
                                    Tax (10%):
                                </div>
                                <div class="col-5">
                                    <span class="text-110 text-secondary-d1"><?php echo $arrotonda_tasse; ?></span>
                                </div>
                            </div>

                            <div class="row my-2">
                                <div class="col-7 text-right">
                                    Import duty (5%):
                                </div>
                                <div class="col-5">
                                    <span class="text-110 text-secondary-d1"><?php echo $arrotonda_tasse_importazione; ?></span>
                                </div>
                            </div>

                            <div class="row my-2">
                                <div class="col-7 text-right">
                                    Total taxes amount:
                                </div>
                                <div class="col-5">
                                    <span class="text-110 text-secondary-d1"><?php echo $calcolo_totale_tasse; ?></span>
                                </div>
                            </div>

                            <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                                <div class="col-7 text-right">
                                    Total Amount:
                                </div>
                                <div class="col-5">
                                    <span class="text-150 text-success-d3 opacity-2"><?php echo $totale; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr />

                    <div>
                        <span class="text-secondary-d1 text-105">Thank you for your business</span>
                        <button class="btn btn-primary  btn-bold px-4 float-right mt-3 mt-lg-0" onclick="window.print()">Print Invoice</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
</html>