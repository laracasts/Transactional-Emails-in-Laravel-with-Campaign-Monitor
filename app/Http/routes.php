<?php

use App\Emails\CancellationEmail;

Route::get('/', function () {

    // Example Usage:

    (new CancellationEmail)
        ->sendTo($someUser);

});
