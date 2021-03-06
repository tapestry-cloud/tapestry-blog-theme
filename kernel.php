<?php

namespace Site;

use Tapestry\Modules\Kernel\KernelInterface;
use Tapestry\Tapestry;

class Kernel implements KernelInterface
{
    /**
     * @var Tapestry
     */
    private $tapestry;

    /**
     * DefaultKernel constructor.
     *
     * @param Tapestry $tapestry
     */
    public function __construct(Tapestry $tapestry)
    {
        $this->tapestry = $tapestry;
    }

    public function register()
    {
        // ...
    }

    public function boot()
    {
        // ...
    }
}
