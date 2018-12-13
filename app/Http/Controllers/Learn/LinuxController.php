<?php

namespace App\Http\Controllers\Learn;

class LinuxController
{
    public function shell()
    {
//        dd([
//            'list' => 3,
//            'where' => 4,
//            'type' => 5
//        ]);
        return view('linux.shell', [
            'list' => 3,
            'where' => 4,
            'type' => 5
        ]);
        echo 888;
    }
}
