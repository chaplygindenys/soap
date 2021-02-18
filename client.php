<?php
try{
    //make soap client
    $client = new SoapClient(
        "https://chaplygindenys.github.io/soap/");//global link to .wsld server
    $result = $client->getStock("3");
    echo "текуший запас на складе:", $result;


}catch(SoapFault $exception){
    echo $exception->getMessage();
}