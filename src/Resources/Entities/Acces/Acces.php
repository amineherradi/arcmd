<?php

namespace Amine\Arcmd\Resources\Entities\Acces;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class Acces extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'acces';
    const PRIMARY_KEY  = 'acces_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'adresse',
            self::COLUMN_NAME => 'adresse_id_source',
        ],
    ];

    const LABEL_ACCES_ID = 'acces_id';
    const LABEL_ADRESSE_ID_SOURCE = 'adresse_id_source';
    const LABEL_COMMENTAIRE = 'commentaire';
    const LABEL_DATE_CREATION = 'date_creation';
    const LABEL_DATE_MODIFICATION = 'date_modification';
    const LABEL_DIGICODE_PRINCIPAL = 'digicode_principal';
    const LABEL_DIGICODE_PRINCIPAL_ETAT = 'digicode_principal_etat';
    const LABEL_GARDIEN_ETAT = 'gardien_etat';
    const LABEL_HORAIRES_GARDIEN = 'horaires_gardien';
    const LABEL_MAIL_GARDIEN = 'mail_gardien';
    const LABEL_MEMBRE_SYNDICAL_COMMENTAIRE = 'membre_syndical_commentaire';
    const LABEL_MEMBRE_SYNDICAL_MAIL = 'membre_syndical_mail';
    const LABEL_MEMBRE_SYNDICAL_NOM = 'membre_syndical_nom';
    const LABEL_MEMBRE_SYNDICAL_TEL = 'membre_syndical_tel';
    const LABEL_NOM_GARDIEN = 'nom_gardien';
    const LABEL_NON_GARDIEN = 'non_gardien';
    const LABEL_TEL2_GARDIEN = 'tel2_gardien';
    const LABEL_TEL_GARDIEN = 'tel_gardien';
    const LABEL_TYPE_ID = 'type_id';
    const LABEL_USERS_ID = 'users_id';
    const LABEL_VALEUR = 'valeur';

    /** @var int $accesId */
    private int $accesId;

    /** @var int $adresseIdSource */
    private int $adresseIdSource;

    /** @var string $commentaire */
    private string $commentaire;

    /** @var DateTime $dateCreation */
    private DateTime $dateCreation;

    /** @var DateTime $dateModification */
    private DateTime $dateModification;

    /** @var string $digicodePrincipal */
    private string $digicodePrincipal;

    /** @var int $digicodePrincipalEtat */
    private int $digicodePrincipalEtat;

    /** @var int $gardienEtat */
    private int $gardienEtat;

    /** @var string $horairesGardien */
    private string $horairesGardien;

    /** @var string $mailGardien */
    private string $mailGardien;

    /** @var string $membreSyndicalCommentaire */
    private string $membreSyndicalCommentaire;

    /** @var string $membreSyndicalMail */
    private string $membreSyndicalMail;

    /** @var string $membreSyndicalNom */
    private string $membreSyndicalNom;

    /** @var string $membreSyndicalTel */
    private string $membreSyndicalTel;

    /** @var string $nomGardien */
    private string $nomGardien;

    /** @var string $nonGardien */
    private string $nonGardien;

    /** @var string $tel2Gardien */
    private string $tel2Gardien;

    /** @var string $telGardien */
    private string $telGardien;

    /** @var int $typeId */
    private int $typeId;

    /** @var int $usersId */
    private int $usersId;

    /** @var string $valeur */
    private string $valeur;


    /**
     * @param int $accesId
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAccesId(int $accesId): Acces
    {
        $this->accesId = $accesId;
        return $this;
    }

    /** @return int */
    public function getAccesId(): int
    {
        return $this->accesId;
    }

    /**
     * @param int $adresseIdSource
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseIdSource(int $adresseIdSource): Acces
    {
        $this->adresseIdSource = $adresseIdSource;
        return $this;
    }

    /** @return int */
    public function getAdresseIdSource(): int
    {
        return $this->adresseIdSource;
    }

    /**
     * @param string $commentaire
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentaire(string $commentaire): Acces
    {
        $this->commentaire = $commentaire;
        return $this;
    }

    /** @return string */
    public function getCommentaire(): string
    {
        return $this->commentaire;
    }

    /**
     * @param DateTime $dateCreation
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateCreation(DateTime $dateCreation): Acces
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /** @return DateTime */
    public function getDateCreation(): DateTime
    {
        return $this->dateCreation;
    }

    /**
     * @param DateTime $dateModification
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateModification(DateTime $dateModification): Acces
    {
        $this->dateModification = $dateModification;
        return $this;
    }

    /** @return DateTime */
    public function getDateModification(): DateTime
    {
        return $this->dateModification;
    }

    /**
     * @param string $digicodePrincipal
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDigicodePrincipal(string $digicodePrincipal): Acces
    {
        $this->digicodePrincipal = $digicodePrincipal;
        return $this;
    }

    /** @return string */
    public function getDigicodePrincipal(): string
    {
        return $this->digicodePrincipal;
    }

    /**
     * @param int $digicodePrincipalEtat
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDigicodePrincipalEtat(int $digicodePrincipalEtat): Acces
    {
        $this->digicodePrincipalEtat = $digicodePrincipalEtat;
        return $this;
    }

    /** @return int */
    public function getDigicodePrincipalEtat(): int
    {
        return $this->digicodePrincipalEtat;
    }

    /**
     * @param int $gardienEtat
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setGardienEtat(int $gardienEtat): Acces
    {
        $this->gardienEtat = $gardienEtat;
        return $this;
    }

    /** @return int */
    public function getGardienEtat(): int
    {
        return $this->gardienEtat;
    }

    /**
     * @param string $horairesGardien
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setHorairesGardien(string $horairesGardien): Acces
    {
        $this->horairesGardien = $horairesGardien;
        return $this;
    }

    /** @return string */
    public function getHorairesGardien(): string
    {
        return $this->horairesGardien;
    }

    /**
     * @param string $mailGardien
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMailGardien(string $mailGardien): Acces
    {
        $this->mailGardien = $mailGardien;
        return $this;
    }

    /** @return string */
    public function getMailGardien(): string
    {
        return $this->mailGardien;
    }

    /**
     * @param string $membreSyndicalCommentaire
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMembreSyndicalCommentaire(string $membreSyndicalCommentaire): Acces
    {
        $this->membreSyndicalCommentaire = $membreSyndicalCommentaire;
        return $this;
    }

    /** @return string */
    public function getMembreSyndicalCommentaire(): string
    {
        return $this->membreSyndicalCommentaire;
    }

    /**
     * @param string $membreSyndicalMail
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMembreSyndicalMail(string $membreSyndicalMail): Acces
    {
        $this->membreSyndicalMail = $membreSyndicalMail;
        return $this;
    }

    /** @return string */
    public function getMembreSyndicalMail(): string
    {
        return $this->membreSyndicalMail;
    }

    /**
     * @param string $membreSyndicalNom
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMembreSyndicalNom(string $membreSyndicalNom): Acces
    {
        $this->membreSyndicalNom = $membreSyndicalNom;
        return $this;
    }

    /** @return string */
    public function getMembreSyndicalNom(): string
    {
        return $this->membreSyndicalNom;
    }

    /**
     * @param string $membreSyndicalTel
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMembreSyndicalTel(string $membreSyndicalTel): Acces
    {
        $this->membreSyndicalTel = $membreSyndicalTel;
        return $this;
    }

    /** @return string */
    public function getMembreSyndicalTel(): string
    {
        return $this->membreSyndicalTel;
    }

    /**
     * @param string $nomGardien
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNomGardien(string $nomGardien): Acces
    {
        $this->nomGardien = $nomGardien;
        return $this;
    }

    /** @return string */
    public function getNomGardien(): string
    {
        return $this->nomGardien;
    }

    /**
     * @param string $nonGardien
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNonGardien(string $nonGardien): Acces
    {
        $this->nonGardien = $nonGardien;
        return $this;
    }

    /** @return string */
    public function getNonGardien(): string
    {
        return $this->nonGardien;
    }

    /**
     * @param string $tel2Gardien
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTel2Gardien(string $tel2Gardien): Acces
    {
        $this->tel2Gardien = $tel2Gardien;
        return $this;
    }

    /** @return string */
    public function getTel2Gardien(): string
    {
        return $this->tel2Gardien;
    }

    /**
     * @param string $telGardien
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTelGardien(string $telGardien): Acces
    {
        $this->telGardien = $telGardien;
        return $this;
    }

    /** @return string */
    public function getTelGardien(): string
    {
        return $this->telGardien;
    }

    /**
     * @param int $typeId
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeId(int $typeId): Acces
    {
        $this->typeId = $typeId;
        return $this;
    }

    /** @return int */
    public function getTypeId(): int
    {
        return $this->typeId;
    }

    /**
     * @param int $usersId
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setUsersId(int $usersId): Acces
    {
        $this->usersId = $usersId;
        return $this;
    }

    /** @return int */
    public function getUsersId(): int
    {
        return $this->usersId;
    }

    /**
     * @param string $valeur
     * @return Acces
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setValeur(string $valeur): Acces
    {
        $this->valeur = $valeur;
        return $this;
    }

    /** @return string */
    public function getValeur(): string
    {
        return $this->valeur;
    }
}
