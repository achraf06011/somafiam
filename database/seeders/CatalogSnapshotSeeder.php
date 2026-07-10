<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Restaure l'état corrigé du catalogue (catégories/sous-catégories/produits
 * pour tous les secteurs) à partir des instantanés JSON dans data/.
 *
 * Idempotent : peut être rejoué à tout moment (ex. après restauration d'un
 * ancien dump de base de données) sans créer de doublons, via updateOrInsert
 * sur la clé primaire id.
 *
 * Usage : php artisan db:seed --class="Database\Seeders\CatalogSnapshotSeeder"
 */
class CatalogSnapshotSeeder extends Seeder
{
    private array $modules = [
        'industriel',
        'agriculture',
        'metallurgie',
        'btp',
        'mines',
        'manutention',
        'robotique',
    ];

    public function run(): void
    {
        foreach ($this->modules as $module) {
            // Ordre important pour respecter les clés étrangères : catégories
            // avant sous-catégories, sous-catégories avant produits.
            $this->restoreTable("{$module}_categories");
            $this->restoreTable("{$module}_subcategories");
            $this->restoreTable("{$module}_products");
        }
    }

    private function restoreTable(string $table): void
    {
        $path = __DIR__ . "/data/{$table}.json";
        if (!file_exists($path)) {
            $this->command?->warn("Instantané introuvable pour $table, ignoré.");
            return;
        }

        $rows = json_decode(file_get_contents($path), true);
        if (!is_array($rows) || empty($rows)) {
            return;
        }

        foreach ($rows as $row) {
            $id = $row['id'];
            unset($row['id']);
            DB::table($table)->updateOrInsert(['id' => $id], $row);
        }

        $this->command?->info("$table : " . count($rows) . ' lignes restaurées.');
    }
}
