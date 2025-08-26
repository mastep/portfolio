<?php

namespace App\Helpers;

class Helper {

    static public function isDefProject() {
        return strstr(url()->current(), '7lab');
    }
}
