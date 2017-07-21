<?php
return array(
    // set your paypal credential
   //'client_id' => 'ghadakhan04-facilitator-1@gmail.com',
     //'client_id' => 'AWbVayCF-Dam2sD4LkVOXmsxqaH1hwRnpF117OoGa8ISL3_diinVSxmYYHij6isCTd0hUEnT5_LmQ4c-',
    //'client_id' => 'AePMSRjN_EQeeFYzGQdpeiZqP6ucRKnKyEs3x9MeG1S1jErZeDsgp-IkyTaENvkWPCE4y4SdpRp9wGan',
   //'secret' => 'access_token$sandbox$3c2y5xqwqd3htzg5$5e58017ed17705b2b8ec22c5da972eec',
      //'secret' => 'EP-GRiOfusPuDsqoSBNSjw4ROikqCGe_9-mlqQLdSXdftyamyirXjGfP4vjHdfRaV8_uegrqLx89gxgd',
     //'secret' => 'ENz3t9AfyfRTKRstQcIRh7sav3qGocZndTWt1hqPwspTa6MkZcnJ5pWXJ2-MJZLKad_EeuhnUSxKhxlE',
    'client_id' => 'AWQxTw6rI97mENGgikWN7S1kEY2SBfOK7OcuQJgC7jHGJ49qTCeS64NCyZqeVyTtpZCqQ4X6b38-hpQr',
    'secret' => 'EJkesp0TpkWPm8EokReGRBFhpfR1WL8UU7TWHCDyWPRhcfni6pZaMIlO_p8D02vOJKoy0aUHJVSx2_7I',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
       'mode' => 'sandbox',
        //'mode' => 'live',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 130,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);