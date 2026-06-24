<?php
namespace Magento\Catalog\Model\CategoryManagement;

/**
 * Interceptor class for @see \Magento\Catalog\Model\CategoryManagement
 */
class Interceptor extends \Magento\Catalog\Model\CategoryManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, \Magento\Catalog\Model\Category\Tree $categoryTree, \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoriesFactory)
    {
        $this->___init();
        parent::__construct($categoryRepository, $categoryTree, $categoriesFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getTree($rootCategoryId = null, $depth = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTree');
        return $pluginInfo ? $this->___callPlugins('getTree', func_get_args(), $pluginInfo) : parent::getTree($rootCategoryId, $depth);
    }

    /**
     * {@inheritdoc}
     */
    public function move($categoryId, $parentId, $afterId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'move');
        return $pluginInfo ? $this->___callPlugins('move', func_get_args(), $pluginInfo) : parent::move($categoryId, $parentId, $afterId);
    }

    /**
     * {@inheritdoc}
     */
    public function getCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCount');
        return $pluginInfo ? $this->___callPlugins('getCount', func_get_args(), $pluginInfo) : parent::getCount();
    }
}
