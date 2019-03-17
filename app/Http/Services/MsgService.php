<?php
namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class MsgService
{

    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function set($msg)
    {
        $this->request->session()->push('msg', $msg);
    }

    public function get()
    {
        return $this->request->session()->get('msg');
    }
}
