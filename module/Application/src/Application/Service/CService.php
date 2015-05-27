<?php

namespace Application\Service;


class CService
{

    /**
     * @var BService
     */
    private $bService;

    public function __construct(BService $bService)
    {
        $this->bService = $bService;
    }

    public function __toString()
    {
        return $this->bService . ' c';
    }
} 