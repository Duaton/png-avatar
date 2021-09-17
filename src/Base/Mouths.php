<?php

namespace duaton\paint\Base;

use duaton\paint\Interfaces\BaseInterface;
use duaton\paint\Interfaces\RequiredInterface;

class Mouths implements BaseInterface, RequiredInterface
{

    /**
     * @var mixed|string
     */
    private $filePath;

    public function __construct ( $filePath = __DIR__ . '/../Elements/Mouths/' )
    {
        $this->filePath = $filePath;
    }

    public function getAvailable (): array
    {
        return
            [ 'mouth1' => $this->filePath . 'mouth1.png',
              'mouth2' => $this->filePath . 'mouth2.png',
              'mouth3' => $this->filePath . 'mouth3.png',
              'mouth4' => $this->filePath . 'mouth4.png',
              'mouth5' => $this->filePath . 'mouth5.png',
              'mouth6' => $this->filePath . 'mouth6.png',
            ];
    }

    public function default ()
    {
        return $this->filePath . 'mouth1.png';
    }


}