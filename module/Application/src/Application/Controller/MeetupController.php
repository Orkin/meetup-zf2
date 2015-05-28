<?php

namespace Application\Controller;

use Application\Service\AService;
use Application\Service\BService;
use Application\Service\CService;
use Application\Service\DService;
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
     * @return ViewModel
     */
    public function indexAction()
    {
        $aService = new AService();
        $bService = new BService($aService);
        $cService = new CService($bService);
        $dService = new DService($bService, $cService);

        return new ViewModel(
            [
                'date' => date('d/m/Y'),
            ]
        );
    }

    /**
     * @param MeetupService $meetupService
     * @return $this
     */
    public function setMeetupService(MeetupService $meetupService)
    {
        $this->meetupService = $meetupService;
    }

}
