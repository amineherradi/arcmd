<?php

namespace Amine\Arcmd\Resources\Entities\Adresse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AdresseTags extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'adresse_tags';
    const PRIMARY_KEY  = 'adresse_tag_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ADRESSE_ID = 'adresse_id';
    const LABEL_ADRESSE_TAG_ID = 'adresse_tag_id';
    const LABEL_TAG_ID = 'tag_id';

    /** @var int $adresseId */
    private int $adresseId;

    /** @var int $adresseTagId */
    private int $adresseTagId;

    /** @var int $tagId */
    private int $tagId;


    /**
     * @param int $adresseId
     * @return AdresseTags
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseId(int $adresseId): AdresseTags
    {
        $this->adresseId = $adresseId;
        return $this;
    }

    /** @return int */
    public function getAdresseId(): int
    {
        return $this->adresseId;
    }

    /**
     * @param int $adresseTagId
     * @return AdresseTags
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseTagId(int $adresseTagId): AdresseTags
    {
        $this->adresseTagId = $adresseTagId;
        return $this;
    }

    /** @return int */
    public function getAdresseTagId(): int
    {
        return $this->adresseTagId;
    }

    /**
     * @param int $tagId
     * @return AdresseTags
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTagId(int $tagId): AdresseTags
    {
        $this->tagId = $tagId;
        return $this;
    }

    /** @return int */
    public function getTagId(): int
    {
        return $this->tagId;
    }
}
