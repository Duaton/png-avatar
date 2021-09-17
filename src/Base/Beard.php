<?php

namespace duaton\paint\Base;

use duaton\paint\Interfaces\BaseInterface;

class Beard implements BaseInterface
{
    /**
     * @var mixed|string
     */
    private $filePath;

    public function __construct ( $filePath = __DIR__ . '/../Elements/Beards/' )
    {
        $this->filePath = $filePath;

    }

    public function getAvailable (): array
    {
        return [
            'beard1' => $this->filePath . 'beard1.png',
            'beard2' => $this->filePath . 'beard2.png',
            'beard3' => $this->filePath . 'beard3.png',
            'beard4' => $this->filePath . 'beard4.png',
        ];
    }

}