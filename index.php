<?php
$titre = "Index";
require_once("header.php");
?>

<section id="index" class="vh100">
    <div class="w60 wh100">
        <p>
            <?php 
            $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
            $parameters = [
              'start' => '1',
              'limit' => '20',
              'convert' => 'USD'
            ];
            
            $headers = [
              'Accepts: application/json',
              'CMC_PRO_API_KEY: 111f3536-380c-4e85-8d58-2bf67b21b2e7'
            ];
            $qs = http_build_query($parameters); // query string encode the parameters
            $request = "{$url}?{$qs}"; // create the request URL
            echo $request;

            $data = '{
                "name" : "Aurel",
                "age" : "22",
                "address" : "Mandeure",
            }';
            $test = json_decode($data);
            
            
            $curl = curl_init(); // Get cURL resource
            // Set cURL options
            curl_setopt($curl, CURLOPT_URL, $request);
            curl_setopt($curl, CURLOPT_HEADER, $headers);
            $response = curl_exec($curl); // Send the request, save the response
            print_r(json_decode($response)); // print json decoded response
            var_dump($curl);
            var_dump($data);
            curl_close($curl); // Close request
            ?>
        </p>
    </div>

    <div class="w40">
    <?php 
        table_aleatoire();
    ?>
    </div>

</section>



<?php require_once("footer.php") ?>