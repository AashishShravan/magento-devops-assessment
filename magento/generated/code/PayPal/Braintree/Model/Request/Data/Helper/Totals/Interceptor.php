<?php
namespace PayPal\Braintree\Model\Request\Data\Helper\Totals;

/**
 * Interceptor class for @see \PayPal\Braintree\Model\Request\Data\Helper\Totals
 */
class Interceptor extends \PayPal\Braintree\Model\Request\Data\Helper\Totals implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function getAmountData(\Magento\Quote\Api\Data\CartInterface $quote): array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAmountData');
        return $pluginInfo ? $this->___callPlugins('getAmountData', func_get_args(), $pluginInfo) : parent::getAmountData($quote);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemsTotal(\Magento\Quote\Api\Data\CartInterface $quote): float
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemsTotal');
        return $pluginInfo ? $this->___callPlugins('getItemsTotal', func_get_args(), $pluginInfo) : parent::getItemsTotal($quote);
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingAmount(\Magento\Quote\Api\Data\CartInterface $quote): float
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShippingAmount');
        return $pluginInfo ? $this->___callPlugins('getShippingAmount', func_get_args(), $pluginInfo) : parent::getShippingAmount($quote);
    }

    /**
     * {@inheritdoc}
     */
    public function getDiscountAmount(\Magento\Quote\Api\Data\CartInterface $quote): float
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDiscountAmount');
        return $pluginInfo ? $this->___callPlugins('getDiscountAmount', func_get_args(), $pluginInfo) : parent::getDiscountAmount($quote);
    }

    /**
     * {@inheritdoc}
     */
    public function getTaxAmount(\Magento\Quote\Api\Data\CartInterface $quote): float
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTaxAmount');
        return $pluginInfo ? $this->___callPlugins('getTaxAmount', func_get_args(), $pluginInfo) : parent::getTaxAmount($quote);
    }
}
