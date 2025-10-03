<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index()
    {
        // Données statiques pour la démonstration
        // À remplacer par des données de la base de données en production
        $formations = [
            [
                'id' => 1,
                'code' => 'GI',
                'nom' => 'Génie Informatique',
                'description' => 'Formation en développement logiciel, réseaux et systèmes d\'information',
                'duree' => '3 ans',
                'niveau' => 'Licence',
                'rentree' => 'Septembre 2024',
                'conditions' => [
                    'Baccalauréat scientifique ou technique',
                    'Bonne maîtrise des mathématiques',
                    'Intérêt pour l\'informatique et la programmation',
                    'Niveau d\'anglais intermédiaire'
                ],
                'specialites' => [
                    'Développement Web',
                    'Applications Mobiles',
                    'Intelligence Artificielle',
                    'Cybersécurité'
                ],
                'debouches' => [
                    'Développeur Full Stack',
                    'Ingénieur DevOps',
                    'Expert en Sécurité',
                    'Data Scientist'
                ],
                'partenaires' => [
                    'microsoft.png',
                    'google.png',
                    'ibm.png'
                ]
            ],
            [
                'id' => 2,
                'code' => 'GEM',
                'nom' => 'Génie Électrique et Mécanique',
                'description' => 'Formation en électronique, automatismes et mécanique',
                'duree' => '3 ans',
                'niveau' => 'Licence',
                'rentree' => 'Septembre 2024',
                'conditions' => [
                    'Baccalauréat scientifique',
                    'Bonne maîtrise des mathématiques et physique',
                    'Intérêt pour l\'électronique et la mécanique',
                    'Capacité d\'analyse et de résolution de problèmes'
                ],
                'specialites' => [
                    'Électronique',
                    'Automatismes',
                    'Mécanique',
                    'Énergies Renouvelables'
                ],
                'debouches' => [
                    'Ingénieur Électrique',
                    'Technicien en Automatismes',
                    'Expert en Maintenance',
                    'Consultant en Énergies'
                ],
                'partenaires' => [
                    'siemens.png',
                    'schneider.png',
                    'philips.png'
                ]
            ],
            [
                'id' => 3,
                'code' => 'GF',
                'nom' => 'Génie Financier',
                'description' => 'Formation en finance, comptabilité et gestion financière',
                'duree' => '3 ans',
                'niveau' => 'Licence',
                'rentree' => 'Septembre 2024',
                'conditions' => [
                    'Baccalauréat toutes séries',
                    'Bonne maîtrise des mathématiques',
                    'Intérêt pour la finance et l\'économie',
                    'Rigueur et précision'
                ],
                'specialites' => [
                    'Finance d\'entreprise',
                    'Analyse financière',
                    'Gestion de portefeuille',
                    'Audit financier'
                ],
                'debouches' => [
                    'Analyste financier',
                    'Gestionnaire de portefeuille',
                    'Auditeur financier',
                    'Consultant en finance'
                ],
                'partenaires' => [
                    'deloitte.png',
                    'pwc.png',
                    'kpmg.png'
                ]
            ],
            [
                'id' => 4,
                'code' => 'GIND',
                'nom' => 'Génie Industriel',
                'description' => 'Formation en optimisation des processus industriels et gestion de la production',
                'duree' => '3 ans',
                'niveau' => 'Licence',
                'rentree' => 'Septembre 2024',
                'conditions' => [
                    'Baccalauréat scientifique ou technique',
                    'Bonne maîtrise des mathématiques',
                    'Intérêt pour l\'industrie et la production',
                    'Capacité d\'organisation et de gestion'
                ],
                'specialites' => [
                    'Gestion de la production',
                    'Logistique industrielle',
                    'Qualité et sécurité',
                    'Maintenance industrielle'
                ],
                'debouches' => [
                    'Ingénieur industriel',
                    'Responsable de production',
                    'Consultant en optimisation',
                    'Expert en logistique'
                ],
                'partenaires' => [
                    'bosch.png',
                    'siemens.png',
                    'schneider.png'
                ]
            ],
            [
                'id' => 5,
                'code' => 'GCBTP',
                'nom' => 'Génie Civil, Bâtiments et Travaux Publics',
                'description' => 'Formation en conception et réalisation d\'infrastructures',
                'duree' => '3 ans',
                'niveau' => 'Licence',
                'rentree' => 'Septembre 2024',
                'conditions' => [
                    'Baccalauréat scientifique',
                    'Bonne maîtrise des mathématiques et physique',
                    'Intérêt pour la construction et l\'architecture',
                    'Capacité de visualisation spatiale'
                ],
                'specialites' => [
                    'Conception structurelle',
                    'Génie urbain',
                    'Routes et ponts',
                    'Construction durable'
                ],
                'debouches' => [
                    'Ingénieur civil',
                    'Responsable de chantier',
                    'Bureau d\'études',
                    'Expert en construction durable'
                ],
                'partenaires' => [
                    'vinci.png',
                    'bouygues.png',
                    'eiffage.png'
                ]
            ]
        ];

        return view('pages.formations', compact('formations'));
    }

    public function show($id)
    {
        // Données statiques pour la démonstration
        // À remplacer par des données de la base de données en production
        $formations = [
            1 => [
                'id' => 1,
                'code' => 'GI',
                'nom' => 'Génie Informatique',
                'description' => 'Formation en développement logiciel, réseaux et systèmes d\'information',
                'duree' => '3 ans',
                'niveau' => 'Licence',
                'rentree' => 'Septembre 2024',
                'conditions' => [
                    'Baccalauréat scientifique ou technique',
                    'Bonne maîtrise des mathématiques',
                    'Intérêt pour l\'informatique et la programmation',
                    'Niveau d\'anglais intermédiaire'
                ],
                'specialites' => [
                    'Développement Web',
                    'Applications Mobiles',
                    'Intelligence Artificielle',
                    'Cybersécurité'
                ],
                'debouches' => [
                    'Développeur Full Stack',
                    'Ingénieur DevOps',
                    'Expert en Sécurité',
                    'Data Scientist'
                ],
                'partenaires' => [
                    'microsoft.png',
                    'google.png',
                    'ibm.png'
                ]
            ],
            2 => [
                'id' => 2,
                'code' => 'GEM',
                'nom' => 'Génie Électrique et Mécanique',
                'description' => 'Formation en électronique, automatismes et mécanique',
                'duree' => '3 ans',
                'niveau' => 'Licence',
                'rentree' => 'Septembre 2024',
                'conditions' => [
                    'Baccalauréat scientifique',
                    'Bonne maîtrise des mathématiques et physique',
                    'Intérêt pour l\'électronique et la mécanique',
                    'Capacité d\'analyse et de résolution de problèmes'
                ],
                'specialites' => [
                    'Électronique',
                    'Automatismes',
                    'Mécanique',
                    'Énergies Renouvelables'
                ],
                'debouches' => [
                    'Ingénieur Électrique',
                    'Technicien en Automatismes',
                    'Expert en Maintenance',
                    'Consultant en Énergies'
                ],
                'partenaires' => [
                    'siemens.png',
                    'schneider.png',
                    'philips.png'
                ]
            ],
            3 => [
                'id' => 3,
                'code' => 'GF',
                'nom' => 'Génie Financier',
                'description' => 'Formation en finance, comptabilité et gestion financière',
                'duree' => '3 ans',
                'niveau' => 'Licence',
                'rentree' => 'Septembre 2024',
                'conditions' => [
                    'Baccalauréat toutes séries',
                    'Bonne maîtrise des mathématiques',
                    'Intérêt pour la finance et l\'économie',
                    'Rigueur et précision'
                ],
                'specialites' => [
                    'Finance d\'entreprise',
                    'Analyse financière',
                    'Gestion de portefeuille',
                    'Audit financier'
                ],
                'debouches' => [
                    'Analyste financier',
                    'Gestionnaire de portefeuille',
                    'Auditeur financier',
                    'Consultant en finance'
                ],
                'partenaires' => [
                    'deloitte.png',
                    'pwc.png',
                    'kpmg.png'
                ]
            ],
            4 => [
                'id' => 4,
                'code' => 'GIND',
                'nom' => 'Génie Industriel',
                'description' => 'Formation en optimisation des processus industriels et gestion de la production',
                'duree' => '3 ans',
                'niveau' => 'Licence',
                'rentree' => 'Septembre 2024',
                'conditions' => [
                    'Baccalauréat scientifique ou technique',
                    'Bonne maîtrise des mathématiques',
                    'Intérêt pour l\'industrie et la production',
                    'Capacité d\'organisation et de gestion'
                ],
                'specialites' => [
                    'Gestion de la production',
                    'Logistique industrielle',
                    'Qualité et sécurité',
                    'Maintenance industrielle'
                ],
                'debouches' => [
                    'Ingénieur industriel',
                    'Responsable de production',
                    'Consultant en optimisation',
                    'Expert en logistique'
                ],
                'partenaires' => [
                    'bosch.png',
                    'siemens.png',
                    'schneider.png'
                ]
            ],
            5 => [
                'id' => 5,
                'code' => 'GCBTP',
                'nom' => 'Génie Civil, Bâtiments et Travaux Publics',
                'description' => 'Formation en conception et réalisation d\'infrastructures',
                'duree' => '3 ans',
                'niveau' => 'Licence',
                'rentree' => 'Septembre 2024',
                'conditions' => [
                    'Baccalauréat scientifique',
                    'Bonne maîtrise des mathématiques et physique',
                    'Intérêt pour la construction et l\'architecture',
                    'Capacité de visualisation spatiale'
                ],
                'specialites' => [
                    'Conception structurelle',
                    'Génie urbain',
                    'Routes et ponts',
                    'Construction durable'
                ],
                'debouches' => [
                    'Ingénieur civil',
                    'Responsable de chantier',
                    'Bureau d\'études',
                    'Expert en construction durable'
                ],
                'partenaires' => [
                    'vinci.png',
                    'bouygues.png',
                    'eiffage.png'
                ]
            ]
        ];

        if (!isset($formations[$id])) {
            abort(404);
        }

        $formation = $formations[$id];
        return view('pages.formations.show', compact('formation'));
    }
} 