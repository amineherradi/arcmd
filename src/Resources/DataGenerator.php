<?php

namespace Amine\Arcmd\Resources;

use Amine\Arcmd\Resources\Entities\Commune\Commune;
use Amine\Arcmd\Resources\Entities\Fermeture\FermetureFcfCommune;
use Amine\Arcmd\Resources\Entities\Fermeture\FermetureFcfIris;
use Amine\Arcmd\Resources\Entities\Fermeture\FermetureFtcCommune;
use Amine\Arcmd\Resources\Entities\Fermeture\FermetureFtcIris;
use Amine\Arcmd\Resources\Entities\Fermeture\FermetureLot;
use Amine\Arcmd\Resources\Entities\Iris\Iris;
use Illuminate\Database\Connection;
use Illuminate\Database\QueryException;
use Monolog\Logger;
use PDO;
use TerminalProgress\Bar;

class DataGenerator
{
    const INITIATEUR = [
        1,
        2,
        3,
    ];
    const NATURE = [
        1,
        2,
        3,
    ];
    const SQLSTATE_23000 = 'SQLSTATE[23000]';
    const NOTICE = "[   NOTICE   ] This reference already exist. Retrieving it...\n";
    const BAR = "[%s] Progress: [:bar] - :current/:total - :percent%% - Elapsed::elapseds - ETA::etas - Rate::rate/s";

    private PDO $pdo;
    private Connection $connexion;
    private Logger $log;

    public function __construct(PDO $pdo, Connection $connexion, Logger $log)
    {
        $this->log = $log;
        $this->pdo = $pdo;
        $this->connexion = $connexion;
    }

    public function generateFCFIris(array $lots): void
    {
        $irisQuery = $this->connexion->table(Iris::TABLE_NAME);
        $irisQuery->select(Iris::LABEL_IRIS_ID);
        $irisIds = $irisQuery->get()->toArray();

        $f = sprintf(self::BAR, "  FCF-IRIS  ");
        $communeProgressBar = new Bar(count($lots), $f);
        $communeProgressBar->symbolComplete = "█";

        foreach ($lots as $key => $lot) {
            if (str_contains($lot, 'FMT')) {
                $lotQuery = $this->connexion->table(FermetureLot::TABLE_NAME);
                $lotQuery->select(FermetureLot::LABEL_FERMETURE_LOT_ID);
                $lotQuery->where(FermetureLot::LABEL_LOT_REF, '=', $lot);
                $currentLot = $lotQuery->first();

                $irisId = $irisIds[array_rand($irisIds)]->iris_id;

                // Création de la fermeture de la maille
                $fcfQuery = $this->connexion->table(FermetureFcfIris::TABLE_NAME);
                $fcfData = [
                    FermetureFcfIris::LABEL_FERMETURE_LOT_ID => $currentLot->fermeture_lot_id,
                    FermetureFcfIris::LABEL_IRIS_ID => $irisId,
                ];

                try {
                    $fcfData[FermetureFcfIris::LABEL_FERMETURE_FCF_IRIS_ID] = $fcfQuery->insertGetId($fcfData);
                } catch (QueryException $exception) {
                    if (str_contains($exception->getMessage(), self::SQLSTATE_23000)) {
                        $fcfData = (array) $fcfQuery->where(
                            FermetureFcfIris::LABEL_FERMETURE_LOT_ID,
                            '=',
                            $fcfData[FermetureFcfIris::LABEL_FERMETURE_LOT_ID]
                        )->where(
                            FermetureFcfIris::LABEL_IRIS_ID,
                            '=',
                            $fcfData[FermetureFcfIris::LABEL_IRIS_ID]
                        )->first();
                    }
                }
            }
            $communeProgressBar->update($key);
            usleep(50000);
        }

        $communeProgressBar->end();
    }

    public function generateFCFCommunes(array $lots): void
    {
        $communeQuery = $this->connexion->table(Commune::TABLE_NAME);
        $communeQuery->select(Commune::LABEL_COMMUNE_ID);
        $communesIds = $communeQuery->get()->toArray();

        $f = sprintf(self::BAR, "FCF-COMMUNES");
        $communeProgressBar = new Bar(count($lots), $f);
        $communeProgressBar->symbolComplete = "█";

        foreach ($lots as $key => $lot) {
            if (str_contains($lot, 'FMT')) {
                $lotQuery = $this->connexion->table(FermetureLot::TABLE_NAME);
                $lotQuery->select(FermetureLot::LABEL_FERMETURE_LOT_ID);
                $lotQuery->where(FermetureLot::LABEL_LOT_REF, '=', $lot);
                $currentLot = $lotQuery->first();

                $communeId = $communesIds[array_rand($communesIds)]->commune_id;

                // Création de la fermeture de la maille
                $fcfQuery = $this->connexion->table(FermetureFcfCommune::TABLE_NAME);
                $fcfData = [
                    FermetureFcfCommune::LABEL_FERMETURE_LOT_ID => $currentLot->fermeture_lot_id,
                    FermetureFcfCommune::LABEL_COMMUNE_ID => $communeId,
                ];

                try {
                    $fcfData[FermetureFcfCommune::LABEL_FERMETURE_FCF_COMMUNE_ID] = $fcfQuery->insertGetId($fcfData);
                } catch (QueryException $exception) {
                    if (str_contains($exception->getMessage(), self::SQLSTATE_23000)) {
                        $fcfData = (array) $fcfQuery->where(
                            FermetureFcfCommune::LABEL_FERMETURE_LOT_ID,
                            '=',
                            $fcfData[FermetureFcfCommune::LABEL_FERMETURE_LOT_ID]
                        )->where(
                            FermetureFcfCommune::LABEL_COMMUNE_ID,
                            '=',
                            $fcfData[FermetureFcfCommune::LABEL_COMMUNE_ID]
                        )->first();
                    }
                }
            }
            $communeProgressBar->update($key);
            usleep(50000);
        }

        $communeProgressBar->end();
    }

    public function generateFTCCommunes(array $lots): void
    {
        $communeQuery = $this->connexion->table(Commune::TABLE_NAME);
        $communeQuery->select(Commune::LABEL_COMMUNE_ID);
        $communesIds = $communeQuery->get()->toArray();

        $f = sprintf(self::BAR, "FTC-COMMUNES");
        $communeProgressBar = new Bar(count($lots), $f);
        $communeProgressBar->symbolComplete = "█";

        foreach ($lots as $key => $lot) {
            if (str_contains($lot, 'FMT')) {
                $lotQuery = $this->connexion->table(FermetureLot::TABLE_NAME);
                $lotQuery->select(FermetureLot::LABEL_FERMETURE_LOT_ID);
                $lotQuery->where(FermetureLot::LABEL_LOT_REF, '=', $lot);
                $currentLot = $lotQuery->first();

                $communeId = $communesIds[array_rand($communesIds)]->commune_id;

                // Création de la fermeture de la maille
                $ftcQuery = $this->connexion->table(FermetureFtcCommune::TABLE_NAME);
                $ftcData = [
                    FermetureFtcCommune::LABEL_FERMETURE_LOT_ID => $currentLot->fermeture_lot_id,
                    FermetureFtcCommune::LABEL_COMMUNE_ID => $communeId,
                ];

                try {
                    $ftcData[FermetureFtcCommune::LABEL_FERMETURE_FTC_COMMUNE_ID] = $ftcQuery->insertGetId($ftcData);
                } catch (QueryException $exception) {
                    if (str_contains($exception->getMessage(), self::SQLSTATE_23000)) {
                        $ftcData = (array) $ftcQuery->where(
                            FermetureFtcCommune::LABEL_FERMETURE_LOT_ID,
                            '=',
                            $ftcData[FermetureFtcCommune::LABEL_FERMETURE_LOT_ID]
                        )->where(
                            FermetureFtcCommune::LABEL_COMMUNE_ID,
                            '=',
                            $ftcData[FermetureFtcCommune::LABEL_COMMUNE_ID]
                        )->first();
                    }
                }
            }
            $communeProgressBar->update($key);
            usleep(50000);
        }
        $communeProgressBar->end();
    }

    public function generateFTCIris(array $lots): void
    {
        $communeQuery = $this->connexion->table(Commune::TABLE_NAME);
        $communeQuery->select(Commune::LABEL_COMMUNE_ID);

        $irisQuery = $this->connexion->table(Iris::TABLE_NAME);
        $irisQuery->select(Iris::LABEL_IRIS_ID);
        $irisIds = $irisQuery->get()->toArray();

        $f = sprintf(self::BAR, "  FTC-IRIS  ");
        $irisProgressBar = new Bar(count($lots), $f);
        $irisProgressBar->symbolComplete = "█";

        foreach ($lots as $key => $lot) {
            if (str_contains($lot, 'FMT')) {
                $lotQuery = $this->connexion->table(FermetureLot::TABLE_NAME);
                $lotQuery->select(FermetureLot::LABEL_FERMETURE_LOT_ID);
                $lotQuery->where(FermetureLot::LABEL_LOT_REF, '=', $lot);
                $currentLot = $lotQuery->first();

                $irisId = $irisIds[array_rand($irisIds)]->iris_id;

                // Création de la fermeture de la maille
                $ftcQuery = $this->connexion->table(FermetureFtcIris::TABLE_NAME);
                $ftcData = [
                    FermetureFtcIris::LABEL_FERMETURE_LOT_ID => $currentLot->fermeture_lot_id,
                    FermetureFtcIris::LABEL_IRIS_ID => $irisId,
                ];

                try {
                    $ftcData[FermetureFtcIris::LABEL_FERMETURE_FTC_IRIS_ID] = $ftcQuery->insertGetId($ftcData);
                } catch (QueryException $exception) {
                    if (str_contains($exception->getMessage(), 'SQLSTATE[23000]')) {
                        $ftcData = (array) $ftcQuery->where(
                            FermetureFtcIris::LABEL_FERMETURE_LOT_ID,
                            '=',
                            $ftcData[FermetureFtcIris::LABEL_FERMETURE_LOT_ID]
                        )->where(
                            FermetureFtcIris::LABEL_IRIS_ID,
                            '=',
                            $ftcData[FermetureFtcIris::LABEL_IRIS_ID
                        ])->first();
                    }
                }
            }
            $irisProgressBar->update($key);
            usleep(50000);
        }
        $irisProgressBar->end();
    }

    public function generateLots(int $quantity, int $type): array
    {
        $lots = $this->generateValidReference($quantity, $type);

        $f = sprintf(self::BAR, "  FMT-LOTS  ");
        $lotsProgressBar = new Bar(count($lots), $f);
        $lotsProgressBar->symbolComplete = "█";

        foreach ($lots as $key => $lot) {
            $insertLot = $this->connexion->table(FermetureLot::TABLE_NAME);
            $toInsert = [
                FermetureLot::LABEL_LOT_REF => $lot,
                FermetureLot::LABEL_INITIATEUR => rand(1, 3),
                FermetureLot::LABEL_PROGRAMME => (str_contains($lot, 'FCF')) ? 1 : 2,
                FermetureLot::LABEL_NATURE => rand(1, 3),
                FermetureLot::LABEL_MAILLE => rand(1, 3),
                FermetureLot::LABEL_ZONE => rand(1, 3),
                FermetureLot::LABEL_LOT_ORANGE => '',
                FermetureLot::LABEL_LOT_FREE => '',
                FermetureLot::LABEL_DATE_CANDIDATURE => date('Y-m-d H:i:s'),
                FermetureLot::LABEL_DATE_SELECTION => '',
                FermetureLot::LABEL_DATE_ARRET_COMMERCIAL => '',
                FermetureLot::LABEL_DATE_ARRET_TECHNIQUE => '',
            ];
            $insertLot->insertOrIgnore($toInsert);
            $lotsProgressBar->update($key);
            usleep(50000);
        }
        $lotsProgressBar->end();
        return $lots;
    }

    private function generateValidReference(int $quantity, int $type): array
    {
        $lots = [];
        $prefix = [1 => 'FTC', 2 => 'FCF', 3 => 'FMT'];

        for ($i = 0; $i < $quantity; $i++) {
            $randomPref = $prefix[$type];
            $randomRef = rand(0, 999);
            $count = strlen($randomRef);

            $limit = 4 - $count;
            for ($index = 0; $index < $limit; $index++) {
                $randomRef = '0' . $randomRef;
            }

            $lots[] = $randomPref . "-" . $randomRef;
        }
        return $lots;
    }
}
