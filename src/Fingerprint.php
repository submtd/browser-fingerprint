<?php

namespace Submtd\BrowserFingerprint;

class Fingerprint
{
    public $getServerVariables = [
        'HTTP_USER_AGENT',
        'HTTP_ACCEPT',
        'REMOTE_ADDR',
    ];

    public $fingerprint = [];

    public function __invoke(array $serverVariables = null)
    {
        return get_browser();
        if ($serverVariables) {
            $this->getServerVariables = $serverVariables;
        }
        foreach ($this->getServerVariables as $variable) {
            if (isset($_SERVER[$variable])) {
                $this->fingerprint[$variable] = $_SERVER[$variable];
            }
        }
        return $_SERVER;
        return $this->fingerprint;
    }

    public static function get(array $serverVariables = null)
    {
        $fingerprint = new static($serverVariables);
        return $fingerprint();
    }
}
