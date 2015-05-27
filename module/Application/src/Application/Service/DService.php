<?php

namespace Application\Service;


class DService
{

    /**
     * @var BService
     */
    private $bService;

    /**
     * @var CService
     */
    private $cService;

    public function __construct(BService $bService, CService $cService)
    {
        $this->bService = $bService;
        $this->cService = $cService;
    }

    public function __toString()
    {
        return $this->bService . ' ' . $this->cService . ' ' . 'd';
    }
} 