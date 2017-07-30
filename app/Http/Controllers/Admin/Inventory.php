<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\CoreWorkLabController;

class Inventory extends CoreWorkLabController
{
    public function __construct() {
        parent::__construct();
    }
    public function branches(Request $request,$operation='') {
        return $this->setView();
    }
}
