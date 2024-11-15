<?php

namespace Plugin\BootechInvoiceReceipt40\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation as Eccube;

/**
 * @Eccube\EntityExtension("Eccube\Entity\Order")
 */
trait OrderTrait
{
    /**
     * @var int
     *
     * @ORM\Column(name="print_invoice", type="integer", options={"default":0})
     */
    private $print_invoice = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="print_receipt", type="integer", options={"default":0})
     */
    private $print_receipt = 0;

    /**
     * @return int
     */
    public function getPrintInvoice()
    {
        return $this->print_invoice;
    }

    /**
     * @param int $print_invoice
     */
    public function setPrintInvoice($print_invoice)
    {
        $this->print_invoice = $print_invoice;
    }

    /**
     * @return int
     */
    public function getPrintReceipt()
    {
        return $this->print_receipt;
    }

    /**
     * @param int $print_receipt
     */
    public function setPrintReceipt($print_receipt)
    {
        $this->print_receipt = $print_receipt;
    }
}
