<?php

namespace App\Helpers;

class Helper {

    static public function isDefProject() {
        return preg_match("/(7lab|localhost)/",url()->current());
    }
}
