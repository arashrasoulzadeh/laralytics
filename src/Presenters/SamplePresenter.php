<?php

namespace arashrasoulzadeh\Laralytics\Presenters;

class SamplePresenter extends \arashrasoulzadeh\Laralytics\Abstracts\PresenterAbstract
{

    public function title(): string
    {
        return 'sample';
    }

    public function value()
    {
        return 'value';
    }

    public function cacheTTL(): int
    {
       return -1;
    }
}
