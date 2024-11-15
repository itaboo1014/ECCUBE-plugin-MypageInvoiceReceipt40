<?php

namespace Plugin\BootechInvoiceReceipt40\Controller;

use Eccube\Controller\AbstractController;
use Eccube\Repository\OrderRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class InvoiceReceiptController extends AbstractController
{
    /**
     * @var OrderRepository
     */
    protected $orderRepository;

    /**
     * ConfigController constructor.
     *
     * @param OrderRepository $orderRepository
     */
    public function __construct(
        OrderRepository $orderRepository
    ) {
        $this->orderRepository = $orderRepository;
    }

    /**
     * 印刷画面を表示する.
     *
     * @Route("/mypage/{order_no}/{print}/print", name="mypage_print")
     *
     * @param Request $request
     * @param $order_no
     * @param $print
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function exportPrint(Request $request, $order_no, $print)
    {
        $Customer = $this->getUser();

        /* @var $Order \Eccube\Entity\Order */
        $Order = $this->orderRepository->findOneBy(
            [
                'order_no' => $order_no,
                'Customer' => $Customer,
            ]
        );

        if (!$Order) {
            throw new NotFoundHttpException();
        }

        if ($print == 'invoice') {
            $Order->setPrintInvoice($Order->getPrintInvoice() + 1);
        } elseif ($print == 'receipt') {
            $Order->setPrintReceipt($Order->getPrintReceipt() + 1);
        } else {
            throw new NotFoundHttpException();
        }

        $this->entityManager->persist($Order);
        $this->entityManager->flush();

        return $this->render('@BootechInvoiceReceipt40/default/Mypage/print_' . $print . '.twig', [
            'Order' => $Order,
        ]);
    }
}
