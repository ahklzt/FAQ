<?php

namespace DD\FAQ\Pub\Controller;

use XF\Pub\Controller\AbstractController;
use XF\Mvc\ParameterBag;

class ddFAQ extends AbstractController
{
    public function actionIndex()
    {
        $page = $this->filterPage();
        
        $viewParams = [
            'page' => $page,
        ];

        return $this->view('DD\FAQ:ddFAQ', 'dd_faq', $viewParams);
    }
}