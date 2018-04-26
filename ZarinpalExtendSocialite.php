<?php

namespace SocialiteProviders\Zarinpal;

use SocialiteProviders\Manager\SocialiteWasCalled;

class ZarinpalExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'zarinpal', __NAMESPACE__.'\Provider'
        );
    }
}
