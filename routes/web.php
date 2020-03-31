<?php

Auth::routes(['reset' => false, 'confirm' => false, 'verify' => false]);

Route::get('{any}', 'AppController')->where('any', '.*');
