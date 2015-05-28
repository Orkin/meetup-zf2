<?php

namespace Application\Controller;

use Application\Service\AService;
use Application\Service\AServiceAwareInterface;
use Application\Service\BService;
use Application\Service\CService;
use Application\Service\DService;
use Application\Service\MeetupService;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class MeetupController extends AbstractActionController implements AServiceAwareInterface
{

    /**
     * @var AService $aService
     */
    protected $aService;

    protected $bService;

    public function __construct(BService $bService)
    {
        $this->bService = $bService;
    }

    /**
     * @var MeetupService
     */
    private $meetupService;

    /**
     * @return ViewModel
     */
    public function indexAction()
    {
        var_dump($this->aService);
        var_dump($this->bService);
        //$cService = new CService($bService);
        //$dService = new DService($bService, $cService);

        return new ViewModel(
            [
                'date' => date('d/m/Y'),
            ]
        );
    }

    public function setAService(AService $aService)
    {
        $this->aService = $aService;
    }


}
