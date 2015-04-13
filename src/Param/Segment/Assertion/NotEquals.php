<?php

namespace Devhelp\Piwik\Api\Param\Segment\Assertion;

class NotEquals extends GenericOperator
{
    public function __construct($field, $value)
    {
        parent::__construct($field, $value, '!=');
    }
}
