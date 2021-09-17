<?php

namespace duaton\paint\Base;

use duaton\paint\Interfaces\BaseInterface;
use duaton\paint\Interfaces\RequiredInterface;

class Ears implements BaseInterface,RequiredInterface
{
    /**
     * @var mixed|string
     */
    private $filePath;

    public function __construct ( $filePath = __DIR__ . '/../Elements/Ears/' )
    {
        $this->filePath = $filePath;

    }

    public function getAvailable ():array
    {
        return [
            'Left Earring' => $this->filePath . 'ears2.png',
            'Right Earring' => $this->filePath . 'ears3.png',
            'Two Earrings' => $this->filePath . 'ears4.png',
        ];
    }

    public function default ()
    {
        return $this->filePath . 'ears1.png';
    }


}