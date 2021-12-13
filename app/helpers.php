<?php

use Illuminate\Support\Facades\Auth;

function user_name(){
    echo Auth::User()->name;
}
?>