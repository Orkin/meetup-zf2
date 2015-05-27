<?php

namespace Application\Service;


class BService
{
    /**
     * @var AService
     */
    private $aService;

    public function __construct(AService $aService)
    {
        $this->aService = $aService;
    }

    public function __toString()
    {
        return $this->aService . ' b';
    }
} 