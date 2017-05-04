<?php

namespace Acme\EmailBoxBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EmailBoxBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
