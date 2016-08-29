<?php

namespace spec\nacholibre\BraintreeBundle;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class nacholibreBraintreeBundleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('nacholibre\BraintreeBundle\nacholibreBraintreeBundle');
    }

    function it_should_be_a_bundle()
    {
        $this->shouldHaveType('Symfony\Component\HttpKernel\Bundle\Bundle');
    }
}
