<?php

namespace Models;

class Candidate extends Model
{
    public function all(): array // récupérer tous les candidats
    {
        $request = 'SELECT * FROM candidats';
        $pdoSt = $this->pdo->query($request);

        return $pdoSt->fetchAll();

    }

    /*public function show(string $nom, string $photo): array // récupérer un candidat
    {
        $request = 'SELECT * FROM candidats';
        $pdoSt = $this->pdo->query($request);

        return $pdoSt->fetchAll();

    }*/

    public function show(string $nom, string $photo): array
    { // récupérer 2 candidates Belgique - Parlement Euro
        $request = 'SELECT nom, photo, arrondissement, niveau, statut from candidats
JOIN candidatures c on candidats.id = c.candidat_id
JOIN arrondissements a on a.id = c.arrondissement_id
JOIN niveaux n on n.id = c.niveau_id
WHERE a.arrondissement = "Belgique"
LIMIT 2';
        $pdoSt = $this->pdo->query($request);

        return $pdoSt->fetchAll();

    }

    public function find(string $nom, string $photo): array
    { // 2 parlement fédéral, arrondissement « Liège »
        $request = 'SELECT nom, photo, arrondissement, niveau, statut from candidats
                                                           JOIN candidatures c on candidats.id = c.candidat_id
                                                           JOIN arrondissements a on a.id = c.arrondissement_id
                                                           JOIN niveaux n on n.id = c.niveau_id
WHERE a.arrondissement = "Liège" AND n.niveau = "Parlement fédéral" LIMIT 2';
        $pdoSt = $this->pdo->query($request);

        return $pdoSt->fetchAll();
    }

    public function find(string $nom, string $photo): array
    { // 2 parlement fédéral, arrondissement « Liège »
        $request = 'SELECT nom, photo, arrondissement, niveau, statut from candidats
JOIN candidatures c on candidats.id = c.candidat_id
JOIN arrondissements a on a.id = c.arrondissement_id
JOIN niveaux n on n.id = c.niveau_id
WHERE a.arrondissement = "Liège"
LIMIT 2';
        $pdoSt = $this->pdo->query($request);

        return $pdoSt->fetchAll();
    }

    public function find(string $nom, string $photo): array
    { // 2 parlement fédéral, arrondissement « Liège »
        $request = 'SELECT nom, photo, arrondissement, niveau, statut from candidats
JOIN candidatures c on candidats.id = c.candidat_id
JOIN arrondissements a on a.id = c.arrondissement_id
JOIN niveaux n on n.id = c.niveau_id
WHERE a.arrondissement = "Liège"
LIMIT 2';
        $pdoSt = $this->pdo->query($request);

        return $pdoSt->fetchAll();
    }

}