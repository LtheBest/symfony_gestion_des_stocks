<?php

namespace ContainerJ9ncYjl;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8ec2f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6afa9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6684d = [
        
    ];

    public function getConnection()
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'getConnection', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'getMetadataFactory', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'getExpressionBuilder', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'beginTransaction', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'getCache', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'transactional', array('func' => $func), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'commit', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->commit();
    }

    public function rollback()
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'rollback', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'getClassMetadata', array('className' => $className), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'createQuery', array('dql' => $dql), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'createNamedQuery', array('name' => $name), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'createQueryBuilder', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'flush', array('entity' => $entity), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'clear', array('entityName' => $entityName), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->clear($entityName);
    }

    public function close()
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'close', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->close();
    }

    public function persist($entity)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'persist', array('entity' => $entity), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'remove', array('entity' => $entity), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'refresh', array('entity' => $entity), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'detach', array('entity' => $entity), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'merge', array('entity' => $entity), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'contains', array('entity' => $entity), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'getEventManager', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'getConfiguration', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'isOpen', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'getUnitOfWork', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'getProxyFactory', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'initializeObject', array('obj' => $obj), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'getFilters', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'isFiltersStateClean', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'hasFilters', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return $this->valueHolder8ec2f->hasFilters();
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

        $instance->initializer6afa9 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder8ec2f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8ec2f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8ec2f->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, '__get', ['name' => $name], $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        if (isset(self::$publicProperties6684d[$name])) {
            return $this->valueHolder8ec2f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ec2f;

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

        $targetObject = $this->valueHolder8ec2f;
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
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ec2f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8ec2f;
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
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, '__isset', array('name' => $name), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ec2f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8ec2f;
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
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, '__unset', array('name' => $name), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ec2f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8ec2f;
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
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, '__clone', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        $this->valueHolder8ec2f = clone $this->valueHolder8ec2f;
    }

    public function __sleep()
    {
        $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, '__sleep', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;

        return array('valueHolder8ec2f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6afa9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6afa9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6afa9 && ($this->initializer6afa9->__invoke($valueHolder8ec2f, $this, 'initializeProxy', array(), $this->initializer6afa9) || 1) && $this->valueHolder8ec2f = $valueHolder8ec2f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8ec2f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8ec2f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
