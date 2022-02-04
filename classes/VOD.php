<?php

class VOD {
    private array $film;
    private float $tarifAbonnement;
    private static int $nbTotalAbo = 128;

    public function __construct () {
        $this->film = ["Bienvenu chez les Ch'tis", "SpiderMan : Homecoming", "BabySitting", "Avengers : Endgames", "Les 101 dalmatiens"];
        $this->tarifAbonnement = 5.55;
        self::$nbTotalAbo;
    }

    /**
     * @return string[]
     */
    public function getFilm(): array {
        return $this->film;
    }

    /**
     * @param string[] $film
     */
    public function setFilm(array $film): void {
        $this->film = $film;
    }

    /**
     * @return float
     */
    public function getTarifAbonnement(): float {
        return $this->tarifAbonnement;
    }

    /**
     * @param float $tarifAbonnement
     */
    public function setTarifAbonnement(float $tarifAbonnement): void {
        $this->tarifAbonnement = $tarifAbonnement;
    }

    /**
     * @return int
     */
    public function getNbTotalAbo(): int {
        return self::$nbTotalAbo;
    }

    /**
     * @param int $nbTotalAbo
     */
    public function setNbTotalAbo(int $nbTotalAbo): void {
        self::$nbTotalAbo = $nbTotalAbo;
    }

    /**
     * @param int $nbTotalAbo
     */
    public static function addAbo(int $nbTotalAbo): void {
        self::$nbTotalAbo = $nbTotalAbo;
    }

    /**
     * @return int
     */
    public static function getAbo (): int {
        return self::$nbTotalAbo++;
    }


}