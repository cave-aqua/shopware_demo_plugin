<?php

namespace SwagStartup\Subscribers;

use Enlight\Event\SubscriberInterface;

class FrontendRoutingSubscriber implements SubscriberInterface{

    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PostDispatch_Frontend_RoutingDemo' => 'onPreDispatchTemplateRegistration'

        ];
    }
    public function onPreDispatchTemplateRegistration(\Enlight_Event_EventArgs $args)
    {

        /** @var \Shopware_Controllers_Frontend_RoutingDemo $subject */
        $controller = $args->getSubject();

        //Register template directory
        $controller->View()->addTemplateDir(__DIR__ . '/../Resources/views/');
    }
}
