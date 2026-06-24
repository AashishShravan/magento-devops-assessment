<?php
namespace Magento\Customer\Model\Vat;

/**
 * Interceptor class for @see \Magento\Customer\Model\Vat
 */
class Interceptor extends \Magento\Customer\Model\Vat implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($scopeConfig, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function getMerchantCountryCode($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMerchantCountryCode');
        return $pluginInfo ? $this->___callPlugins('getMerchantCountryCode', func_get_args(), $pluginInfo) : parent::getMerchantCountryCode($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getMerchantVatNumber($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMerchantVatNumber');
        return $pluginInfo ? $this->___callPlugins('getMerchantVatNumber', func_get_args(), $pluginInfo) : parent::getMerchantVatNumber($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerGroupIdBasedOnVatNumber($customerCountryCode, $vatValidationResult, $store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerGroupIdBasedOnVatNumber');
        return $pluginInfo ? $this->___callPlugins('getCustomerGroupIdBasedOnVatNumber', func_get_args(), $pluginInfo) : parent::getCustomerGroupIdBasedOnVatNumber($customerCountryCode, $vatValidationResult, $store);
    }

    /**
     * {@inheritdoc}
     */
    public function checkVatNumber($countryCode, $vatNumber, $requesterCountryCode = '', $requesterVatNumber = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkVatNumber');
        return $pluginInfo ? $this->___callPlugins('checkVatNumber', func_get_args(), $pluginInfo) : parent::checkVatNumber($countryCode, $vatNumber, $requesterCountryCode, $requesterVatNumber);
    }

    /**
     * {@inheritdoc}
     */
    public function canCheckVatNumber($countryCode, $vatNumber, $requesterCountryCode, $requesterVatNumber)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canCheckVatNumber');
        return $pluginInfo ? $this->___callPlugins('canCheckVatNumber', func_get_args(), $pluginInfo) : parent::canCheckVatNumber($countryCode, $vatNumber, $requesterCountryCode, $requesterVatNumber);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerVatClass($customerCountryCode, $vatValidationResult, $store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerVatClass');
        return $pluginInfo ? $this->___callPlugins('getCustomerVatClass', func_get_args(), $pluginInfo) : parent::getCustomerVatClass($customerCountryCode, $vatValidationResult, $store);
    }

    /**
     * {@inheritdoc}
     */
    public function isCountryInEU($countryCode, $storeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCountryInEU');
        return $pluginInfo ? $this->___callPlugins('isCountryInEU', func_get_args(), $pluginInfo) : parent::isCountryInEU($countryCode, $storeId);
    }
}
