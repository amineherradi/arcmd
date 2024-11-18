<?php

namespace Amine\Arcmd\Resources\Entities\Adresse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AdresseScore extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'adresse_score';
    const PRIMARY_KEY  = 'adresse_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ADRESSE_ID = 'adresse_id';
    const LABEL_SCORE = 'score';

    /** @var int $adresseId */
    private int $adresseId;

    /** @var string $score */
    private string $score;


    /**
     * @param int $adresseId
     * @return AdresseScore
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseId(int $adresseId): AdresseScore
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
     * @param string $score
     * @return AdresseScore
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setScore(string $score): AdresseScore
    {
        $this->score = $score;
        return $this;
    }

    /** @return string */
    public function getScore(): string
    {
        return $this->score;
    }
}
