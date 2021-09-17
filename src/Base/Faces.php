<?php

namespace duaton\paint\Base;

use duaton\paint\Interfaces\BaseInterface;
use duaton\paint\Interfaces\RequiredInterface;

class Faces implements BaseInterface, RequiredInterface
{
    /**
     * @var mixed|string
     */
    private $filePath;

    public function __construct ( $filePath = __DIR__ . '/../Elements/Faces/' )
    {
        $this->filePath = $filePath;

    }

    public function getAvailable (): array
    {
        return
            [ 'face1' => $this->filePath . 'face1.png',
              'face2' => $this->filePath . 'face2.png',
            ];
    }

    public function default ()
    {
        return $this->filePath . 'face1.png';
    }

}