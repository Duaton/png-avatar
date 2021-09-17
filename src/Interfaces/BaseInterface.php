<?php

namespace duaton\paint\Interfaces;


interface BaseInterface
{

    /**
     * @return array
     * [
     *     'key' => 'path to file'
     * ]
     */

    public function getAvailable (): array;

}