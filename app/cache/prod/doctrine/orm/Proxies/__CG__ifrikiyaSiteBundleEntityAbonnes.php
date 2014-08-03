<?php

namespace Proxies\__CG__\ifrikiya\SiteBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Abonnes extends \ifrikiya\SiteBundle\Entity\Abonnes implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getIdabonnes()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idabonnes"];
        }
        $this->__load();
        return parent::getIdabonnes();
    }

    public function setLogin($login)
    {
        $this->__load();
        return parent::setLogin($login);
    }

    public function getLogin()
    {
        $this->__load();
        return parent::getLogin();
    }

    public function setPseudo($pseudo)
    {
        $this->__load();
        return parent::setPseudo($pseudo);
    }

    public function getPseudo()
    {
        $this->__load();
        return parent::getPseudo();
    }

    public function setMdp($mdp)
    {
        $this->__load();
        return parent::setMdp($mdp);
    }

    public function getMdp()
    {
        $this->__load();
        return parent::getMdp();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setTelephone1($telephone1)
    {
        $this->__load();
        return parent::setTelephone1($telephone1);
    }

    public function getTelephone1()
    {
        $this->__load();
        return parent::getTelephone1();
    }

    public function setTelephone2($telephone2)
    {
        $this->__load();
        return parent::setTelephone2($telephone2);
    }

    public function getTelephone2()
    {
        $this->__load();
        return parent::getTelephone2();
    }

    public function setAdresse($adresse)
    {
        $this->__load();
        return parent::setAdresse($adresse);
    }

    public function getAdresse()
    {
        $this->__load();
        return parent::getAdresse();
    }

    public function addIdLivre(\ifrikiya\SiteBundle\Entity\Livres $idLivre)
    {
        $this->__load();
        return parent::addIdLivre($idLivre);
    }

    public function removeIdLivre(\ifrikiya\SiteBundle\Entity\Livres $idLivre)
    {
        $this->__load();
        return parent::removeIdLivre($idLivre);
    }

    public function getIdLivre()
    {
        $this->__load();
        return parent::getIdLivre();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'idabonnes', 'login', 'pseudo', 'mdp', 'email', 'telephone1', 'telephone2', 'adresse', 'idLivre');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}