<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RobotiqueCategory;
use App\Models\RobotiqueSubcategory;
use App\Models\RobotiqueProduct;

class RobotiqueProductController extends Controller
{
    public function index()
    {
        $categories = RobotiqueCategory::with('subcategories')->orderBy('ordre')->get();
        $subCategories = RobotiqueSubcategory::all();
        $products = RobotiqueProduct::inRandomOrder()->limit(12)->get();

        return view('robotique.index', compact('categories', 'subCategories', 'products'));
    }

    public function filterByCategory(string $id)
    {
        $category = RobotiqueCategory::find($id);

        $sectorRoutes = [
            'Médical, Pharmaceutique, Medtech' => 'm',
            'Agroalimentaire' => 'agroalimentaire',
            'Automobile' => 'automobile',
            'Electronique, Electromécanique, Electroménager' => 'electronique-electromecanique-electromenager',
            'Mécanique, Énergie, Plasturgie' => 'mecanique-energie-plasturgie-biens-de-consommation',
        ];

        if ($category && isset($sectorRoutes[$category->nomCategory])) {
            return redirect()->route($sectorRoutes[$category->nomCategory]);
        }

        $otherCategories = RobotiqueCategory::where('id', '!=', $id)->orderBy('ordre')->get();

        $sectorContent = [
            'Médical, Pharmaceutique, Medtech' => [
                'intro' => "L'automatisation robotisée répond aux exigences de précision, de traçabilité et de propreté du secteur médical et pharmaceutique : manipulation en salle blanche, dosage, conditionnement stérile et contrôle qualité par vision industrielle.",
                'apps' => [
                    ['title' => 'Conditionnement stérile', 'description' => "Prise et dépose de produits en environnement contrôlé, respectant les normes de salle blanche."],
                    ['title' => 'Dosage et remplissage', 'description' => "Automatisation du dosage de précision pour flacons, seringues et blisters."],
                    ['title' => 'Contrôle qualité par vision', 'description' => "Inspection automatisée pour détecter défauts d'emballage, étiquetage et conformité."],
                    ['title' => 'Manutention de dispositifs médicaux', 'description' => "Assemblage et manipulation délicate de composants Medtech de petite taille."],
                ],
            ],
            'Agroalimentaire' => [
                'intro' => "Dans l'agroalimentaire, la robotique accélère les cadences tout en respectant les normes d'hygiène : palettisation, tri, emballage et lavage des équipements en sont les usages les plus courants.",
                'apps' => [
                    ['title' => 'Palettisation', 'description' => "Mise en palette automatisée de cartons, sacs ou caisses en sortie de ligne."],
                    ['title' => 'Tri et calibrage', 'description' => "Tri par vision selon taille, couleur ou qualité des produits."],
                    ['title' => 'Conditionnement', 'description' => "Mise en barquette, encaissage et fermeture automatisés."],
                    ['title' => 'Robots lavables (wash-down)', 'description' => "Solutions IP69K pour les zones nécessitant un nettoyage haute pression."],
                ],
            ],
            'Automobile' => [
                'intro' => "L'industrie automobile reste le premier secteur d'adoption de la robotique industrielle, pour la soudure, l'assemblage, la peinture et le contrôle qualité sur des lignes à haute cadence.",
                'apps' => [
                    ['title' => 'Soudure robotisée', 'description' => "Soudure par points ou à l'arc sur carrosseries et sous-ensembles métalliques."],
                    ['title' => 'Assemblage de sous-ensembles', 'description' => "Montage automatisé de pièces mécaniques et électroniques embarquées."],
                    ['title' => 'Peinture et traitement de surface', 'description' => "Application robotisée de peinture avec régularité et réduction du gaspillage."],
                    ['title' => 'Contrôle qualité', 'description' => "Inspection dimensionnelle et détection de défauts par vision 3D."],
                ],
            ],
            'Electronique, Electromécanique, Electroménager' => [
                'intro' => "Ces filières demandent une précision fine et une répétabilité élevée : assemblage de petites pièces, manipulation de circuits imprimés et tests automatisés en sont les applications clés.",
                'apps' => [
                    ['title' => 'Assemblage de précision', 'description' => "Montage de composants électroniques et électromécaniques miniaturisés."],
                    ['title' => 'Manipulation de cartes électroniques', 'description' => "Prise et dépose de PCB avec précaution anti-statique."],
                    ['title' => 'Test et contrôle fonctionnel', 'description' => "Automatisation des bancs de test en fin de ligne de production."],
                    ['title' => 'Vissage et fixation automatisés', 'description' => "Opérations répétitives de vissage sur produits électroménagers."],
                ],
            ],
            'Mécanique, Énergie, Plasturgie' => [
                'intro' => "Pour la mécanique, l'énergie et la plasturgie, la robotique intervient sur le chargement machine, la finition de pièces et la manutention de composants lourds ou en environnement exigeant.",
                'apps' => [
                    ['title' => 'Chargement/déchargement machine', 'description' => "Alimentation automatisée de tours, presses et centres d'usinage (machine tending)."],
                    ['title' => 'Démoulage plasturgie', 'description' => "Extraction de pièces injectées et dépose sur convoyeur ou palette."],
                    ['title' => 'Ébavurage et finition', 'description' => "Reprise automatisée de pièces mécaniques et plastiques après usinage."],
                    ['title' => 'Manutention lourde', 'description' => "Déplacement de pièces ou composants industriels volumineux en sécurité."],
                ],
            ],
        ];

        $content = $sectorContent[$category->nomCategory ?? ''] ?? [
            'intro' => "SOMAFIAM accompagne l'intégration de solutions robotiques et cobotiques adaptées aux besoins spécifiques de ce secteur.",
            'apps' => [],
        ];

        return view('robotique.sectorDetail', [
            'category' => $category,
            'otherCategories' => $otherCategories,
            'sectorIntro' => $content['intro'],
            'sectorApplications' => $content['apps'],
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $categoryId = $request->input('category');

        $products = RobotiqueProduct::whereHas('subcategory', function ($q) use ($categoryId) {
            $q->where('category', $categoryId);
        })
        ->where('nomProduct', 'LIKE', "%{$query}%")
        ->get();

        $subCategories = RobotiqueSubcategory::all();
        $categories = RobotiqueCategory::with('subcategories')->orderBy('ordre')->get();

        return view('robotique.productsSection', compact('products', 'categories', 'subCategories'));
    }
}
