<?php

namespace Application\Service;


class DService
{

    /**
     * @var AService
     */
    private $aService;

    /**
     * @var BService
     */
    private $bService;

    public function __construct(AService $aService, BService $bService)
    {
        $this->aService = $aService;
        $this->bService = $bService;
    }

    public function __toString()
    {
        return $this->aService . ' ' . $this->bService . ' ' . 'd';
    }
} 