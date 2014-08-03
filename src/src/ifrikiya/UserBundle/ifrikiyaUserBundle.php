<?php

namespace ifrikiya\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ifrikiyaUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
