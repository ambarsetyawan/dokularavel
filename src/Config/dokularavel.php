<?php 

return [
	
	/*
	| ---------------------------------------------------------
	| Setting the payment route in PAYMENT_PATH, SHARED_KEY & MALL_ID is code that you get from DOKU Merchant Page.
	| ---------------------------------------------------------
	|
	*/
	'PAYMENT_PATH' => 'dokularavel',
	'SHARED_KEY'   => NULL, 
	'MALL_ID'      => NULL,
	
	/* CURRENCY */
	'CURRENCY'	=> 360, //For default IDR is 360, so no need to edit this one

	/* 
	| ---------------------------------------------------------
	| Define your table of order and the fields
	| ---------------------------------------------------------
	| 
	*/
	'TABLE_ORDER'                  => NULL,
	'TABLE_FIELD_NO_ORDER'         => NULL,
	'TABLE_FIELD_AMOUNT'           => NULL,
	'TABLE_FIELD_CUSTOMER_NAME'    => NULL,
	'TABLE_FIELD_CUSTOMER_PHONE'   => NULL,
	'TABLE_FIELD_CUSTOMER_EMAIL'   => NULL,
	'TABLE_FIELD_CUSTOMER_ADDRESS' => NULL,


	/*
	| ---------------------------------------------------------
	| DOKU PAYMENT AVAILABLE CHANNEL 
	| ---------------------------------------------------------
	| 15 = Credit Card
	| 04 = Doku Wallet
	| 02 = Mandiri Clickpay
	| 05 = Permata VA Lite	
	| 14 = ALFA
	|
	| This setting is for default payment channel otherwise you can set the payment channel on the fly by url parameter "payment_channel"
	*/	
	'AVAILABLE_PAYMENT_CHANNEL'=> ['15','04','02','05','14'],
	'DEFAULT_PAYMENT_CHANNEL'=> '15', 			


	/* 
	| ---------------------------------------------------------
	| This setting is for set the product name in doku transaction
	| Basicly "DOKULARAVEL" package only send 1 basket to DOKU, that is global invoice. 
	| ---------------------------------------------------------
	| Alias that you can use : 
	| [invoice_no] to generate your invoice number / trans_id 
	| 
	*/
	'PRODUCT_NAME_FORMAT' => 'Invoice For Order No. [invoice_no]',




	/* 
	| ---------------------------------------------------------
	| Set redirect page DOKU 
	| ---------------------------------------------------------
	| [Default] or SHOW_DOKU_SUCCESS_PAGE set TRUE, SHOW_FINISH_PAGE set TRUE, YOUR_OWN_FINISH_PAGE set NULL
	| - Payment Flow : USER DATA -> PROCESSING -> DOKU SUCCESS PAGE -> FINISH PAGE
	|
	| If SHOW_DOKU_SUCCESS_PAGE set TRUE, SHOW_FINISH_PAGE set FALSE, YOUR_OWN_FINISH_PAGE set NULL
	| - Payment Flow : USER DATA -> PROCESSING -> DOKU SUCCESS PAGE
	| 
	| If SHOW_DOKU_SUCCESS_PAGE set FALSE, SHOW_FINISH_PAGE set TRUE, YOUR_OWN_FINISH_PAGE set NULL
	| - Payment Flow : USER DATA -> PROCESSING -> FINISH PAGE
	| 
	| If SHOW_DOKU_SUCCESS_PAGE set FALSE, SHOW_FINISH_PAGE set TRUE, YOUR_OWN_FINISH_PAGE set not NULL / set your own URL PAGE
	| - Payment Flow : USER DATA -> PROCESSING -> YOUR OWN FINISH PAGE
	| 
	*/
	'SHOW_DOKU_SUCCESS_PAGE' => TRUE, //it means the page that generated from DOKU
	'SHOW_FINISH_PAGE'       => TRUE, //it means the page that generated from "dokularavel" package.
	'YOUR_OWN_FINISH_PAGE'   => NULL, //it means the page that generated by your self


	/* 
	| ---------------------------------------------------------
	| This setting is for Develope Mode only, you can view DOKULARAVEL Session, also doPrePayment, or doPayment response
	| ---------------------------------------------------------
	| Access the debug url at /debug
	| 
	| will be available if DEBUG_MODE set TRUE
	|
	*/
	'DEBUG_MODE' => FALSE,
];
