<?php

namespace arashrasoulzadeh\Laralytics\Services;

use arashrasoulzadeh\Laralytics\Abstracts\PresenterAbstract;

class LaralyticsService
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
    public function setPresenters( array $presenters )
    {
        $this->presenters = $presenters;
    }

    /**
     * @param PresenterAbstract $presenter
     */
    public function addPresenter( PresenterAbstract $presenter )
    {
        $this->presenters[] = $presenter;
    }

    public function present()
    {
        $response = '';
        foreach ( $this->getPresenters() as $presenter ) {
            $response .= $presenter->title() . '=' . $presenter->value() . "/n";
        }
        return $response;
    }


}
