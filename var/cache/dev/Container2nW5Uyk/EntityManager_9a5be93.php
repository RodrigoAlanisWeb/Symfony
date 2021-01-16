<?php

namespace Container2nW5Uyk;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf6562 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer558a7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbe08f = [
        
    ];

    public function getConnection()
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'getConnection', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'getMetadataFactory', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'getExpressionBuilder', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'beginTransaction', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'getCache', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->getCache();
    }

    public function transactional($func)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'transactional', array('func' => $func), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->transactional($func);
    }

    public function commit()
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'commit', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->commit();
    }

    public function rollback()
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'rollback', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'getClassMetadata', array('className' => $className), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'createQuery', array('dql' => $dql), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'createNamedQuery', array('name' => $name), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'createQueryBuilder', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'flush', array('entity' => $entity), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'clear', array('entityName' => $entityName), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->clear($entityName);
    }

    public function close()
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'close', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->close();
    }

    public function persist($entity)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'persist', array('entity' => $entity), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'remove', array('entity' => $entity), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'refresh', array('entity' => $entity), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'detach', array('entity' => $entity), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'merge', array('entity' => $entity), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'getRepository', array('entityName' => $entityName), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'contains', array('entity' => $entity), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'getEventManager', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'getConfiguration', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'isOpen', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'getUnitOfWork', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'getProxyFactory', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'initializeObject', array('obj' => $obj), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'getFilters', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'isFiltersStateClean', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'hasFilters', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return $this->valueHolderf6562->hasFilters();
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

        $instance->initializer558a7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf6562) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf6562 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf6562->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, '__get', ['name' => $name], $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        if (isset(self::$publicPropertiesbe08f[$name])) {
            return $this->valueHolderf6562->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6562;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolderf6562;
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
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6562;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolderf6562;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value; return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, '__isset', array('name' => $name), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6562;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf6562;
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
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, '__unset', array('name' => $name), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6562;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf6562;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, '__clone', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        $this->valueHolderf6562 = clone $this->valueHolderf6562;
    }

    public function __sleep()
    {
        $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, '__sleep', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;

        return array('valueHolderf6562');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer558a7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer558a7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer558a7 && ($this->initializer558a7->__invoke($valueHolderf6562, $this, 'initializeProxy', array(), $this->initializer558a7) || 1) && $this->valueHolderf6562 = $valueHolderf6562;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf6562;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf6562;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
