<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Créer les rôles
        $this->call([
            RoleSeeder::class,
        ]);

        // Créer l'administrateur par défaut
        $adminRole = Role::where('slug', 'admin')->first();
        $admin = User::create([
            'name' => 'Admin',
            'first_name' => 'System',
            'email' => 'admin@emsi.ma',
            'password' => Hash::make('password123'),
        ]);
        $admin->roles()->attach($adminRole);

        // Créer un utilisateur test
        $studentRole = Role::where('slug', 'student')->first();
        $student = User::create([
            'name' => 'Test',
            'first_name' => 'User',
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
        ]);
        $student->roles()->attach($studentRole);

        // Appeler les autres seeders
        $this->call([
            NewsSeeder::class,
            EventSeeder::class,
            ClubSeeder::class,
        ]);
    }
}
