<?php

namespace GDIP\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GDIPUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
