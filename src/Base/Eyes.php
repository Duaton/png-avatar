<?php

namespace duaton\paint\Base;

use duaton\paint\Interfaces\BaseInterface;
use duaton\paint\Interfaces\RequiredInterface;

class Eyes implements BaseInterface, RequiredInterface
{

    /**
     * @var mixed|string
     */
    private $filePath;

    public function __construct ( $filePath = __DIR__ . '/../Elements/Eyes/' )
    {
        $this->filePath = $filePath;

    }

    public function getAvailable (): array
    {
        return [
            'Asian Eyes'  => $this->filePath . 'eyes2.png',
            'Sun Glasses' => $this->filePath . 'eyes3.png',
            'Red Glasses' => $this->filePath . 'eyes4.png',
            'Round Eyes'  => $this->filePath . 'eyes5.png',
        ];

    }

    public function default ()
    {
        return $this->filePath . 'eyes2.png';
    }

}