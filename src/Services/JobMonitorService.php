<?php

namespace arashrasoulzadeh\Laralytics\Services;

class JobMonitorService
{
    private $presenters = [];

    /**
     * @return array
     */
    public function getPresenters()
    {
        return $this->presenters;
    }

    /**
     * @param array $presenters
     */
    public function setPresenters( $presenters )
    {
        $this->presenters = $presenters;
    }

    /**
     * @param array $presenter
     */
    public function addPresenter( $presenter )
    {
        $this->presenters[] = $presenter;
    }

    public  function present()
    {
        $response = '';
        foreach ( $this->getPresenters() as $presenter )
        {
            $response.=$presenter.'\n';
        }
        return $response;
    }


}
