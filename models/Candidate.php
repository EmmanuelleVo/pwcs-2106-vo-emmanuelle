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

    public function show(string $nom, string $photo): array // récupérer un candidat
    {
        $request = 'SELECT * FROM candidats';
        $pdoSt = $this->pdo->query($request);

        return $pdoSt->fetchAll();

    }


}