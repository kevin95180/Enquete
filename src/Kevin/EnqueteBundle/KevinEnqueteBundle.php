<?php

namespace Kevin\EnqueteBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class KevinEnqueteBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
