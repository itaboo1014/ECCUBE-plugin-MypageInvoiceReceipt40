<?php

namespace Plugin\BootechMypageInvoiceReceipt40;

use Eccube\Entity\Master\OrderStatus;
use Eccube\Event\TemplateEvent;
use Eccube\Repository\Master\OrderStatusRepository;
use Eccube\Service\OrderStateMachine;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormFactoryInterface;

class Event implements EventSubscriberInterface
{
    /**
     * @var OrderStatusRepository
     */
    private $orderStatusRepository;

    /**
     * @var OrderStateMachine
     */
    protected $orderStateMachine;

    /**
     * @var FormFactoryInterface
     */
    private $formFactory;

    /**
     * ConfigController constructor.
     *
     * @param OrderStateMachine $orderStateMachine
     */
    public function __construct(
        OrderStatusRepository $orderStatusRepository,
        OrderStateMachine $orderStateMachine,
        FormFactoryInterface $formFactory
    ) {
        $this->orderStatusRepository = $orderStatusRepository;
        $this->orderStateMachine = $orderStateMachine;
        $this->formFactory = $formFactory;
    }

    public static function getSubscribedEvents()
    {
        return [
            'Mypage/history.twig' => 'onTemplateFrontMypageHistory',
        ];
    }

    public function onTemplateFrontMypageHistory(TemplateEvent $event)
    {
        $event->addSnippet('@BootechMypageInvoiceReceipt40/default/Mypage/invoice_receipt_btn.twig');
    }
}
