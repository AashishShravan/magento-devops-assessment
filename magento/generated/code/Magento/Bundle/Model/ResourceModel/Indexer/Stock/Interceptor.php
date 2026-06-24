<?php
namespace Magento\Bundle\Model\ResourceModel\Indexer\Stock;

/**
 * Interceptor class for @see \Magento\Bundle\Model\ResourceModel\Indexer\Stock
 */
class Interceptor extends \Magento\Bundle\Model\ResourceModel\Indexer\Stock implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\Framework\Indexer\Table\StrategyInterface $tableStrategy, \Magento\Eav\Model\Config $eavConfig, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Catalog\Model\ResourceModel\Indexer\ActiveTableSwitcher $activeTableSwitcher, \Magento\Bundle\Model\ResourceModel\Indexer\StockStatusSelectBuilder $stockStatusSelectBuilder, \Magento\Bundle\Model\ResourceModel\Indexer\BundleOptionStockDataSelectBuilder $bundleOptionStockDataSelectBuilder, \Magento\Bundle\Model\ResourceModel\Indexer\OptionQtyExpressionProvider $optionQtyExpressionProvider, $connectionName = null)
    {
        $this->___init();
        parent::__construct($context, $tableStrategy, $eavConfig, $scopeConfig, $activeTableSwitcher, $stockStatusSelectBuilder, $bundleOptionStockDataSelectBuilder, $optionQtyExpressionProvider, $connectionName);
    }

    /**
     * {@inheritdoc}
     */
    public function reindexAll()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reindexAll');
        return $pluginInfo ? $this->___callPlugins('reindexAll', func_get_args(), $pluginInfo) : parent::reindexAll();
    }

    /**
     * {@inheritdoc}
     */
    public function reindexEntity($entityIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reindexEntity');
        return $pluginInfo ? $this->___callPlugins('reindexEntity', func_get_args(), $pluginInfo) : parent::reindexEntity($entityIds);
    }

    /**
     * {@inheritdoc}
     */
    public function getActionType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionType');
        return $pluginInfo ? $this->___callPlugins('getActionType', func_get_args(), $pluginInfo) : parent::getActionType();
    }

    /**
     * {@inheritdoc}
     */
    public function setActionType($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setActionType');
        return $pluginInfo ? $this->___callPlugins('setActionType', func_get_args(), $pluginInfo) : parent::setActionType($type);
    }

    /**
     * {@inheritdoc}
     */
    public function setTypeId($typeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTypeId');
        return $pluginInfo ? $this->___callPlugins('setTypeId', func_get_args(), $pluginInfo) : parent::setTypeId($typeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTypeId');
        return $pluginInfo ? $this->___callPlugins('getTypeId', func_get_args(), $pluginInfo) : parent::getTypeId();
    }

    /**
     * {@inheritdoc}
     */
    public function setIsComposite($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsComposite');
        return $pluginInfo ? $this->___callPlugins('setIsComposite', func_get_args(), $pluginInfo) : parent::setIsComposite($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function getIsComposite()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsComposite');
        return $pluginInfo ? $this->___callPlugins('getIsComposite', func_get_args(), $pluginInfo) : parent::getIsComposite();
    }

    /**
     * {@inheritdoc}
     */
    public function getIdxTable($table = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdxTable');
        return $pluginInfo ? $this->___callPlugins('getIdxTable', func_get_args(), $pluginInfo) : parent::getIdxTable($table);
    }

    /**
     * {@inheritdoc}
     */
    public function getRelationsByChild($childIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRelationsByChild');
        return $pluginInfo ? $this->___callPlugins('getRelationsByChild', func_get_args(), $pluginInfo) : parent::getRelationsByChild($childIds);
    }

    /**
     * {@inheritdoc}
     */
    public function getRelationsByParent($parentIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRelationsByParent');
        return $pluginInfo ? $this->___callPlugins('getRelationsByParent', func_get_args(), $pluginInfo) : parent::getRelationsByParent($parentIds);
    }

    /**
     * {@inheritdoc}
     */
    public function syncData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'syncData');
        return $pluginInfo ? $this->___callPlugins('syncData', func_get_args(), $pluginInfo) : parent::syncData();
    }

    /**
     * {@inheritdoc}
     */
    public function insertFromTable($sourceTable, $destTable, $readToIndex = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'insertFromTable');
        return $pluginInfo ? $this->___callPlugins('insertFromTable', func_get_args(), $pluginInfo) : parent::insertFromTable($sourceTable, $destTable, $readToIndex);
    }

    /**
     * {@inheritdoc}
     */
    public function insertFromSelect($select, $destTable, array $columns, $readToIndex = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'insertFromSelect');
        return $pluginInfo ? $this->___callPlugins('insertFromSelect', func_get_args(), $pluginInfo) : parent::insertFromSelect($select, $destTable, $columns, $readToIndex);
    }

    /**
     * {@inheritdoc}
     */
    public function clearTemporaryIndexTable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearTemporaryIndexTable');
        return $pluginInfo ? $this->___callPlugins('clearTemporaryIndexTable', func_get_args(), $pluginInfo) : parent::clearTemporaryIndexTable();
    }

    /**
     * {@inheritdoc}
     */
    public function getIdFieldName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdFieldName');
        return $pluginInfo ? $this->___callPlugins('getIdFieldName', func_get_args(), $pluginInfo) : parent::getIdFieldName();
    }

    /**
     * {@inheritdoc}
     */
    public function getMainTable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMainTable');
        return $pluginInfo ? $this->___callPlugins('getMainTable', func_get_args(), $pluginInfo) : parent::getMainTable();
    }

    /**
     * {@inheritdoc}
     */
    public function getTable($tableName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTable');
        return $pluginInfo ? $this->___callPlugins('getTable', func_get_args(), $pluginInfo) : parent::getTable($tableName);
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConnection');
        return $pluginInfo ? $this->___callPlugins('getConnection', func_get_args(), $pluginInfo) : parent::getConnection();
    }

    /**
     * {@inheritdoc}
     */
    public function load(\Magento\Framework\Model\AbstractModel $object, $value, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($object, $value, $field);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($object);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($object);
    }

    /**
     * {@inheritdoc}
     */
    public function addUniqueField($field)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addUniqueField');
        return $pluginInfo ? $this->___callPlugins('addUniqueField', func_get_args(), $pluginInfo) : parent::addUniqueField($field);
    }

    /**
     * {@inheritdoc}
     */
    public function resetUniqueField()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetUniqueField');
        return $pluginInfo ? $this->___callPlugins('resetUniqueField', func_get_args(), $pluginInfo) : parent::resetUniqueField();
    }

    /**
     * {@inheritdoc}
     */
    public function unserializeFields(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unserializeFields');
        return $pluginInfo ? $this->___callPlugins('unserializeFields', func_get_args(), $pluginInfo) : parent::unserializeFields($object);
    }

    /**
     * {@inheritdoc}
     */
    public function getUniqueFields()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUniqueFields');
        return $pluginInfo ? $this->___callPlugins('getUniqueFields', func_get_args(), $pluginInfo) : parent::getUniqueFields();
    }

    /**
     * {@inheritdoc}
     */
    public function hasDataChanged($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasDataChanged');
        return $pluginInfo ? $this->___callPlugins('hasDataChanged', func_get_args(), $pluginInfo) : parent::hasDataChanged($object);
    }

    /**
     * {@inheritdoc}
     */
    public function getChecksum($table)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChecksum');
        return $pluginInfo ? $this->___callPlugins('getChecksum', func_get_args(), $pluginInfo) : parent::getChecksum($table);
    }

    /**
     * {@inheritdoc}
     */
    public function afterLoad(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterLoad');
        return $pluginInfo ? $this->___callPlugins('afterLoad', func_get_args(), $pluginInfo) : parent::afterLoad($object);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        return $pluginInfo ? $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo) : parent::beforeSave($object);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        return $pluginInfo ? $this->___callPlugins('afterSave', func_get_args(), $pluginInfo) : parent::afterSave($object);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeDelete(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeDelete');
        return $pluginInfo ? $this->___callPlugins('beforeDelete', func_get_args(), $pluginInfo) : parent::beforeDelete($object);
    }

    /**
     * {@inheritdoc}
     */
    public function afterDelete(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDelete');
        return $pluginInfo ? $this->___callPlugins('afterDelete', func_get_args(), $pluginInfo) : parent::afterDelete($object);
    }

    /**
     * {@inheritdoc}
     */
    public function serializeFields(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serializeFields');
        return $pluginInfo ? $this->___callPlugins('serializeFields', func_get_args(), $pluginInfo) : parent::serializeFields($object);
    }

    /**
     * {@inheritdoc}
     */
    public function beginTransaction()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beginTransaction');
        return $pluginInfo ? $this->___callPlugins('beginTransaction', func_get_args(), $pluginInfo) : parent::beginTransaction();
    }

    /**
     * {@inheritdoc}
     */
    public function addCommitCallback($callback)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addCommitCallback');
        return $pluginInfo ? $this->___callPlugins('addCommitCallback', func_get_args(), $pluginInfo) : parent::addCommitCallback($callback);
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'commit');
        return $pluginInfo ? $this->___callPlugins('commit', func_get_args(), $pluginInfo) : parent::commit();
    }

    /**
     * {@inheritdoc}
     */
    public function rollBack()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'rollBack');
        return $pluginInfo ? $this->___callPlugins('rollBack', func_get_args(), $pluginInfo) : parent::rollBack();
    }

    /**
     * {@inheritdoc}
     */
    public function getValidationRulesBeforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValidationRulesBeforeSave');
        return $pluginInfo ? $this->___callPlugins('getValidationRulesBeforeSave', func_get_args(), $pluginInfo) : parent::getValidationRulesBeforeSave();
    }
}
