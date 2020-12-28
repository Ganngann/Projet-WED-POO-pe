<?php

  /*
    ./noyau/classes/ClasseGenerique.php
    Classe générique avec un hydrateur
  */

    namespace Noyau\Classes;

      abstract class ClasseGenerique {
        // CONSTRUCTEUR
        public function __construct(array $data = null) {
          if ($data):
            $this->hydrater($data);
          endif;
        }

        // AUTRES METHODES
        public function hydrater(array $data = null) {
          if ($data):
            foreach ($data as $propriete => $valeur):
              $nomMethode = 'set' . ucfirst($propriete);
              if (method_exists($this, $nomMethode)):
                $this->$nomMethode($valeur);
              endif;
            endforeach;
          endif;
        }
      }
