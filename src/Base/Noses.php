<?php

namespace duaton\paint\Base;

use duaton\paint\Interfaces\BaseInterface;
use duaton\paint\Interfaces\RequiredInterface;

class Noses implements BaseInterface, RequiredInterface
{

    /**
     * @var mixed|string
     */
    private $filePath;

    public function __construct ( $filePath = __DIR__ . '/../Elements/Noses/' )
    {
        $this->filePath = $filePath;
    }


    public function getAvailable (): array
    {
        return
            [ 'nose1' => $this->filePath . 'nose1.png',
              'nose2' => $this->filePath . 'nose2.png',
            ];
    }

    public function default ()
    {
        return $this->filePath . 'nose1.png';
    }
}