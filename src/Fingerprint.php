<?php

namespace Submtd\BrowserFingerprint;

class Fingerprint
{
    public function __invoke()
    {
        return 'hello, world!';
    }

    public static function get()
    {
        return $this();
    }
}
