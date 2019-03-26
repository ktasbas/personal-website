<?php
function currencyConverter($from_Currency,$to_Currency,$amount) {	
	$from_Currency = urlencode($from_Currency);
	$to_Currency = urlencode($to_Currency);	
	error_log("Requesting conversion...");
	$get = file_get_contents("https://free.currencyconverterapi.com/api/v6/convert?q={$from_Currency}_{$to_Currency}&compact=ultra&apiKey=9f6b065258edc8e4c3a5");
	$get = explode(":",$get);
	error_log("rate: " + $get[1]);
	$rate = substr($get[1], 0, -1);
	$converted_amount = $amount*$rate;
	$data = array( 'rate' => $rate, 'converted_amount' =>$converted_amount, 'from_Currency' => strtoupper($from_Currency), 'to_Currency' => strtoupper($to_Currency));
	echo json_encode( $data );	
}
?> 