<?php

namespace arashrasoulzadeh\Laralytics\Abstracts;

use arashrasoulzadeh\Laralytics\Interfaces\PresenterInterface;
use arashrasoulzadeh\Laralytics\Traits\StorageTrait;

abstract class PresenterAbstract implements PresenterInterface
{

    use StorageTrait;
    /**
     * event listeners to catch
     *
     * @return array
     */
    public function listeners(): array
    {
        return [];
    }

    /**
     *
     * handle events that this presenter is listening to
     *
     * @param $event
     *
     * @return void
     */
    public  function  handle($event){

    }

}
