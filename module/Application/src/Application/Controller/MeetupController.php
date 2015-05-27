<?php

namespace Application\Controller;

use Application\Service\MeetupService;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class MeetupController extends AbstractActionController
{

    /**
     * @var MeetupService
     */
    private $meetupService;

    /**
     * @param MeetupService $meetupService
     */
    public function __construct(MeetupService $meetupService)
    {
        $this->meetupService = $meetupService;
    }

    /**
     * @return ViewModel
     */
    public function indexAction()
    {
        return new ViewModel(
            [
                'date' => $this->meetupService->getActualFormatedDate(),
            ]
        );
    }
}
