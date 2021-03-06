<?php
namespace Monty\Exception;

/**
 * Class PropertyCouldNotBeSetException
 * @package Monty\Exception
 * @author Willi Eßer <willi.esser@troublete.com>
 * @copyright 2017 Willi Eßer
 */
class PropertyCouldNotBeSetException extends GeneralException
{
    /**
     * PropertyCouldNotBeSetException constructor.
     * @param array ...$parameters
     */
    public function __construct(...$parameters)
    {
        parent::__construct(...$parameters);
        $this->message = 'Property could not be set to the request because there is no handling for such case.';
    }
}