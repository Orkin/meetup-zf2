<?php

namespace Application\Service;


class MeetupService
{

    /**
     * @return string
     */
    public function getActualFormatedDate()
    {
        $now = new \DateTime('now');

        return $now->format('d/m/Y');
    }
} 