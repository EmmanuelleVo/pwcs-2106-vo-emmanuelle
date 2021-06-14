<?php

namespace Controllers;

use Intervention\Image\Exception\NotWritableException;
use Intervention\Image\ImageManagerStatic;

class Candidate
{
    public function create()
    { // retourne une vue
        $view = './views/candidate.php';

        return compact('view');
    }

    public function store() {
        if (!isset($_FILES['photo']['error']) || is_array($_FILES['photo']['error'])) {
            $_SESSION['errors']['photo'] = 'Tentative d’attaque, entrez un fichier valide';

            header('Location: index.php?action=create&resource=team');
            exit();
        }

        switch ($_FILES['photo']['error']) {
            case UPLOAD_ERR_OK: //pas d'erreur
                break;
            case UPLOAD_ERR_NO_FILE:
                $_SESSION['errors']['photo'] = 'Vous devez fournir une image PNG du photo du club.';
                break;
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                $_SESSION['errors']['photo'] = 'Vous avez dépassé la taille maximale autorisée, soit ' . ini_get('upload_max_filesize');
                break;
            default:
                $_SESSION['errors']['photo'] = 'Vous avez réalisé quelque chose qui a provoqué une erreur';
        }
        if ($_FILES['photo']['size'] > 32000000) { //taille du fichier
            $_SESSION['errors']['photo'] = 'Vous avez dépassé la taille maximale autorisée, soit ' . ini_get('upload_max_filesize');
        }

        // Fait une recherche du type mime en question et regarde si le type mime du fichier est dans un array dont type mime = png
        $finfo = new \finfo(FILEINFO_MIME_TYPE);
        if (false === $ext = array_search(
                $finfo->file($_FILES['photo']['tmp_name']),
                array(
                    'jpeg' => 'image/jpeg',
                ),
                true
            )) {
            $_SESSION['errors']['photo'] = 'Le fichier que vous avez fourni n’est pas du type attendu (JPEG)';
        }


        $full_file_path = './assets/images/';
        $thumbs_file_path = './assets/thumbs/';
        //TODO foreach de toutes les photos de la table candidate
        $file_name = sprintf('%s.%s', //crée une string à partir d'un format
            sha1_file($_FILES['photo']['tmp_name']), // génère nom de fichier unique
            $ext
        );

        // accéder à l'image temporaire pour la redimensionner
        ImageManagerStatic::configure(['driver' => 'imagick']); //avec quelle librairie on veut utiliser - phpinfo: rechercher GD, imagemagick ou imagick -> imagick > GD
        $image = ImageManagerStatic::make($_FILES['photo']['tmp_name']);
        if($image->width() > 300
            && $image->width() <= 1600
            && $image->height() >= 300
            && $image->height() < 1600) {
            $thumb = ImageManagerStatic::make($_FILES['photo']['tmp_name']);
            //dimensionner à la taille qu'on veut full(400x400)
            $thumb->resize(300, 300, static function ($constraint) {
                $constraint->aspectRatio();
            });
            $thumb->crop(100,100, 25, 25);
            try {
                $thumb->save($thumbs_file_path.$file_name);

            } catch (NotWritableException $exception) {
                $_SESSION['errors']['photo'] = 'Le fichier n’a pas pu être enregistré sur le serveur. Contactez l’administrateur';

                header('Location: index.php?action=create&resource=candidate');
                exit();
            }
        } else {
            $_SESSION['errors']['photo'] = 'Le fichier que vous avez fourni ne respecte pas les contraintes de tailles.';
        }
    }

    public function show() // montre un candidat (nom, image)
    {
        $candidates = [];
        $candidateName = '';
        $candidatePhoto = '';


        $candidateModel = new \Models\Candidate();
        $candidateModel->all();
        $candidateModel->show('name', 'photo');
        //var_dump($candidateModel);die();


        header('Location: index.php');
        //header('Location: index.php?action=show&resource=candidate');
        exit();


    }
}

