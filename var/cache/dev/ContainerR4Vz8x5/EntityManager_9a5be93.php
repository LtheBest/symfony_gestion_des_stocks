<?php

namespace ContainerR4Vz8x5;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd7775 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc4e59 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties22b27 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'getConnection', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'getMetadataFactory', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'getExpressionBuilder', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'beginTransaction', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'getCache', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'transactional', array('func' => $func), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'commit', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->commit();
    }

    public function rollback()
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'rollback', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'getClassMetadata', array('className' => $className), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'createQuery', array('dql' => $dql), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'createNamedQuery', array('name' => $name), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'createQueryBuilder', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'flush', array('entity' => $entity), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'clear', array('entityName' => $entityName), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->clear($entityName);
    }

    public function close()
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'close', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->close();
    }

    public function persist($entity)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'persist', array('entity' => $entity), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'remove', array('entity' => $entity), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'refresh', array('entity' => $entity), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'detach', array('entity' => $entity), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'merge', array('entity' => $entity), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'contains', array('entity' => $entity), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'getEventManager', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'getConfiguration', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'isOpen', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'getUnitOfWork', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'getProxyFactory', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'initializeObject', array('obj' => $obj), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'getFilters', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'isFiltersStateClean', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'hasFilters', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return $this->valueHolderd7775->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerc4e59 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderd7775) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd7775 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd7775->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, '__get', ['name' => $name], $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        if (isset(self::$publicProperties22b27[$name])) {
            return $this->valueHolderd7775->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7775;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd7775;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7775;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd7775;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, '__isset', array('name' => $name), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7775;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd7775;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, '__unset', array('name' => $name), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7775;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd7775;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, '__clone', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        $this->valueHolderd7775 = clone $this->valueHolderd7775;
    }

    public function __sleep()
    {
        $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, '__sleep', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;

        return array('valueHolderd7775');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc4e59 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc4e59;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc4e59 && ($this->initializerc4e59->__invoke($valueHolderd7775, $this, 'initializeProxy', array(), $this->initializerc4e59) || 1) && $this->valueHolderd7775 = $valueHolderd7775;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd7775;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd7775;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
