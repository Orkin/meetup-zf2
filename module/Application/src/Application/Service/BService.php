<?php

namespace Application\Service;


class BService implements AServiceAwareInterface
{
    /**
     * @var AService
     */
    private $aService;

    public function __toString()
    {
        return $this->aService . ' b';
    }

    public function setAService(AService $aService)
    {
        $this->aService = $aService;
    }


} 