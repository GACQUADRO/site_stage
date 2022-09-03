<?php

namespace ContainerFsgmhxT;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderec45f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer098a3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa42d9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'getConnection', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'getMetadataFactory', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'getExpressionBuilder', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'beginTransaction', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'getCache', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'transactional', array('func' => $func), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'commit', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->commit();
    }

    public function rollback()
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'rollback', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'getClassMetadata', array('className' => $className), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'createQuery', array('dql' => $dql), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'createNamedQuery', array('name' => $name), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'createQueryBuilder', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'flush', array('entity' => $entity), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'clear', array('entityName' => $entityName), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->clear($entityName);
    }

    public function close()
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'close', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->close();
    }

    public function persist($entity)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'persist', array('entity' => $entity), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'remove', array('entity' => $entity), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'refresh', array('entity' => $entity), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'detach', array('entity' => $entity), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'merge', array('entity' => $entity), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'contains', array('entity' => $entity), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'getEventManager', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'getConfiguration', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'isOpen', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'getUnitOfWork', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'getProxyFactory', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'initializeObject', array('obj' => $obj), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'getFilters', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'isFiltersStateClean', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'hasFilters', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return $this->valueHolderec45f->hasFilters();
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

        $instance->initializer098a3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderec45f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderec45f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderec45f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, '__get', ['name' => $name], $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        if (isset(self::$publicPropertiesa42d9[$name])) {
            return $this->valueHolderec45f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec45f;

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

        $targetObject = $this->valueHolderec45f;
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
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec45f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderec45f;
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
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, '__isset', array('name' => $name), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec45f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderec45f;
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
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, '__unset', array('name' => $name), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec45f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderec45f;
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
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, '__clone', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        $this->valueHolderec45f = clone $this->valueHolderec45f;
    }

    public function __sleep()
    {
        $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, '__sleep', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;

        return array('valueHolderec45f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer098a3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer098a3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer098a3 && ($this->initializer098a3->__invoke($valueHolderec45f, $this, 'initializeProxy', array(), $this->initializer098a3) || 1) && $this->valueHolderec45f = $valueHolderec45f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderec45f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderec45f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
