<?php

Route::get('{any}', 'AppController')->where('any', '.*');
