<?php

namespace Proxies\__CG__\ifrikiya\SiteBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Ecrivains extends \ifrikiya\SiteBundle\Entity\Ecrivains implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getIdecrivains()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idecrivains"];
        }
        $this->__load();
        return parent::getIdecrivains();
    }

    public function setNom($nom)
    {
        $this->__load();
        return parent::setNom($nom);
    }

    public function getNom()
    {
        $this->__load();
        return parent::getNom();
    }

    public function setPrenom($prenom)
    {
        $this->__load();
        return parent::setPrenom($prenom);
    }

    public function getNomPrenom()
    {
        $this->__load();
        return parent::getNomPrenom();
    }

    public function getPrenom()
    {
        $this->__load();
        return parent::getPrenom();
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->__load();
        return parent::setDateNaissance($dateNaissance);
    }

    public function getDateNaissance()
    {
        $this->__load();
        return parent::getDateNaissance();
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

    public function setTelephone($telephone)
    {
        $this->__load();
        return parent::setTelephone($telephone);
    }

    public function getTelephone()
    {
        $this->__load();
        return parent::getTelephone();
    }

    public function setPassworld($passworld)
    {
        $this->__load();
        return parent::setPassworld($passworld);
    }

    public function getPassworld()
    {
        $this->__load();
        return parent::getPassworld();
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
        return array('__isInitialized__', 'idecrivains', 'nom', 'prenom', 'dateNaissance', 'login', 'email', 'telephone', 'passworld', 'idLivre');
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