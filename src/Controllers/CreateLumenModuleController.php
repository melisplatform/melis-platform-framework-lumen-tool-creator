<?php
namespace MelisPlatformFrameworkLumenToolCreator\Controllers;

use Laravel\Lumen\Routing\Controller;
use MelisPlatformFrameworkLumenToolCreator\Service\MelisLumenModuleService;

class CreateLumenModuleController extends Controller
{
    /**
     * @var
     */
    private $moduleService;

    public function __construct(MelisLumenModuleService $lumenModuleService)
    {
        $this->moduleService = $lumenModuleService;
    }

    public function createModule()
    {
        echo "went here";die;
        return $this->moduleService->createModule();
    }
}