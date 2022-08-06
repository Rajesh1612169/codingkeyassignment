<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Coding Key Rask</title>
</head>

<body>


    <body>
    <h1>Task 1</h1>
        <div class="benefits-table">
            <table border="1" style="width: 100%;border-collapse: collapse">

                <!-- Table Caption -->
               
                <!-- Table body -->
                <tbody>
                    <tr>
                        <td colspan="3" style="background-color: #4b4bcf;">
                            <span style="float: left;padding:10px; color: white">Your Insurance Plan</span>
                            <span style="float: right;background-color: yellow;padding:10px">RECOMMENDED</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="background-color: #00bcd4;">
                            <span style="display: block;text-align: center;padding: 5px;font-weight: 600;">SCHEDULE OF BENEFITS</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" style="text-align: center;">
                            <img src="./imagess.png" alt="">
                        </td>
                        <td colspan="2">
                            <table border="1" style="width: 100%;border-collapse: collapse;">
                                <tr style="background: #b1b1b1;">
                                    <th>Benefit</th>
                                    <th>Per Person Limit</th>
                                    <th>Benefit</th>
                                    <th>Per Person Limit</th>
                                </tr>
                                <tr>
                                    <td>Trip Cancellation percent</td>
                                    <td>70%</td>
                                    <td>Baggage Delay</td>
                                    <td>$100</td>
                                </tr>
                                <tr>
                                    <td>Trip Interruption</td>
                                    <td>Up to 100% of trip cost</td>
                                    <td>24-Hours AD&D</td>
                                    <td>$5,000</td>
                                </tr>
                                <tr>
                                    <td>Trip Delay</td>
                                    <td>$250.00</td>
                                    <td>Common Carrier AD&D</td>
                                    <td>$10,000</td>
                                </tr>
                                <tr>
                                    <td>Trip Amount</td>
                                    <td>$250%</td>
                                    <td>Optional Flight Accident</td>
                                    <td>$100,000, $250,000, $500,000</td>
                                </tr>
                                <tr>
                                    <td>Emergency Medical Expense</td>
                                    <td>$10,000</td>
                                    <td>Optional Rental Car Damage</td>
                                    <td>$35,000</td>
                                </tr>
                                <tr>
                                    <td>Emergency Medical Evacuation/Repatriation</td>
                                    <td>$100,000</td>
                                    <td>Tax Assistance Services </td>
                                    <td>Included</td>
                                </tr>
                                <tr>
                                    <td>Lost Baggage/Personal Effects</td>
                                    <td>$500</td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </table>
                        </td>
                    </tr>


                </tbody>

                <!-- Table Foot -->
                <tfoot>
                    <tr style="text-align: center; background: #b1b1b1;">
                        <td colspan="3">Quote Base On</td>
                    </tr>
                    <tr>
                        <td colspan="1">Dates: 2/1/2021 – 2/9/2020</td>
                        <td colspan="1">Total Trip Cost: $4,000</td>
                        <td colspan="1">Destination: Mexico</td>
                    </tr>

                </tfoot>
            </table>

            <div class="puchase">
                <span class="cost">COST Per Person $200</span>
                <a class="puchase-link" href="">Click here to purchase</a>
            </div>

        </div>


        <h1>Task 2</h1>



<div class="container">
  <table class="table" border="1" style="border-collapse: collapse;">
    <thead>
      <tr style="background-color:#2196f3 ;">
        <th rowspan="2" colspan="2">Action</th>
        <th rowspan="1" colspan="1">Quantity</th>
        <th rowspan="1" colspan="1">Price</th>
        <th rowspan="1" colspan="1">Tax</th>
        <th rowspan="1" colspan="1">Extended Price</th>
        <!-- <th width="50px">
          <div class="action_container">
            <button class="success" onclick="create_tr('table_body')">
              +
            </button>
          </div>
        </th> -->
      </tr>
    </thead>
    <tbody id="table_body">
      <tr>
        <td col="1" >
            <button class="success" onclick="create_tr('table_body')">
              +
            </button>
        </td>
        <td  col="1" >
        <button class="danger" onclick="remove_tr(this)">
             -
            </button>
        </td>
        <td  col="1">
            <input type="text" class="form_control" placeholder="+880177x-xxxxxx">
        </td>
        <td  col="1">
            <input type="text" class="form_control" placeholder="+880177x-xxxxxx">
        </td>
        <td  col="1">
            <input type="text" class="form_control" placeholder="+880177x-xxxxxx">
        </td>
        <td  col="1">
            <input type="text" class="form_control" placeholder="+880177x-xxxxxx">
        </td>
      </tr>
      <tr>
        <td col="1" >
            <button class="success" onclick="create_tr('table_body')">
              +
            </button>
        </td>
        <td  col="1" >
        <button class="danger" onclick="remove_tr(this)">
             -
            </button>
        </td>
        <td  col="1">
            <input type="text" class="form_control" placeholder="+880177x-xxxxxx">
        </td>
        <td  col="1">
            <input type="text" class="form_control" placeholder="+880177x-xxxxxx">
        </td>
        <td  col="1">
            <input type="text" class="form_control" placeholder="+880177x-xxxxxx">
        </td>
        <td  col="1">
            <input type="text" class="form_control" placeholder="+880177x-xxxxxx">
        </td>
      </tr>
      <tr>
        <td col="1" >
            <button class="success" onclick="create_tr('table_body')">
              +
            </button>
        </td>
        <td  col="1" >
        <button class="danger" onclick="remove_tr(this)">
             -
            </button>
        </td>
        <td  col="1">
            <input type="text" class="form_control" placeholder="+880177x-xxxxxx">
        </td>
        <td  col="1">
            <input type="text" class="form_control" placeholder="+880177x-xxxxxx">
        </td>
        <td  col="1">
            <input type="text" class="form_control" placeholder="+880177x-xxxxxx">
        </td>
        <td  col="1">
            <input type="text" class="form_control" placeholder="+880177x-xxxxxx">
        </td>
      </tr>

      <tr>
        <td colspan="4">
        </td>
        <td colspan="1">
           <span>Sub Total</span>
        </td>
        <td colspan="1">
           -
        </td>
       
      </tr>
      
      <tr>
        <td colspan="4">
        </td>
        <td colspan="1">
            <span>Discount</span>
        </td>
        <td colspan="1">
            -
        </td>
       
      </tr>
      
      <tr>
        <td colspan="4">
        </td>
        <td colspan="1">
            <span>Grand Total</span>
        </td>
        <td colspan="1">
            -
        </td>
       
      </tr>
    </tbody>
  </table>
</div>



        <h1>Task 4</h1>


        <?php

            $url = "https://payments.researchconsultations.com/laravel/public/index.php/api/links";

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $headers = array(
            "Accept: application/json",
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            //for debug only!
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            $resp = curl_exec($curl);
            curl_close($curl);
            echo '<pre>';
            echo '<h1>Data In Json Format</h1>';
            print_r($resp);
            echo '<h1>Data In Array Format</h1>';
            print_r(json_decode($resp));
            echo '</pre>';

            ?>


            <script src="app.js"></script>
    </body>
</body>

</html>