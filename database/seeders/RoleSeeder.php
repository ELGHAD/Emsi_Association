<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Visiteur',
                'slug' => 'visitor',
                'description' => 'Utilisateur non connecté avec accès limité'
            ],
            [
                'name' => 'Étudiant',
                'slug' => 'student',
                'description' => 'Étudiant de l\'EMSI avec accès aux fonctionnalités étudiant'
            ],
            [
                'name' => 'Administrateur',
                'slug' => 'admin',
                'description' => 'Administrateur avec accès complet'
            ]
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
} 