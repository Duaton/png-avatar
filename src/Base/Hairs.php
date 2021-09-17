<?php

namespace duaton\paint\Base;

use duaton\paint\Interfaces\BaseInterface;

class Hairs implements BaseInterface
{

    /**
     * @var mixed|string
     */
    private $filePath;

    public function __construct ( $filePath = __DIR__ . '/../Elements/Hairs/' )
    {
        $this->filePath = $filePath;
    }

    public function getAvailable (): array
    {
        return
            [ 'hair1'  => $this->filePath . 'hair1.png',
              'hair2'  => $this->filePath . 'hair2.png',
              'hair3'  => $this->filePath . 'hair3.png',
              'hair4'  => $this->filePath . 'hair4.png',
              'hair5'  => $this->filePath . 'hair5.png',
              'hair6'  => $this->filePath . 'hair6.png',
              'hair7'  => $this->filePath . 'hair7.png',
              'hair8'  => $this->filePath . 'hair8.png',
              'hair9'  => $this->filePath . 'hair9.png',
              'hair10' => $this->filePath . 'hair10.png',
            ];
    }

}