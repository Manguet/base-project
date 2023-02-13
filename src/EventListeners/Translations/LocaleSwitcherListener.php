<?php

namespace App\EventListeners\Translations;

use Symfony\Component\HttpKernel\Event\RequestEvent;

class LocaleSwitcherListener
{
    public function onKernelRequest(RequestEvent $event): void
    {
        if (!$event->isMainRequest()) {
            return;
        }

        $request = $event->getRequest();
        $locale  = $request->getLocale();

        $request->setLocale($locale);
    }
}