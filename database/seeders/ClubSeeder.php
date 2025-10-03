<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Club;
use App\Models\User;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Créer un utilisateur admin si nécessaire
        $admin = User::first();
        
        if (!$admin) {
            $admin = User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
            ]);
        }

        // Créer des exemples de clubs
        $clubs = [
            [
                'name' => 'Club Robotique',
                'description' => 'Développez vos compétences en robotique et participez à des compétitions nationales et internationales.',
                'category' => 'technology',
                'image' => 'clubs/robotique.jpg',
                'location' => 'Salle B12',
                'meeting_schedule' => 'Tous les mercredis à 18h',
                'members_count' => 45,
                'creation_date' => '2023-01-15',
                'user_id' => $admin->id,
            ],
            [
                'name' => 'Club Développement Web',
                'description' => 'Apprenez les dernières technologies web et collaborez sur des projets concrets avec des entreprises partenaires.',
                'category' => 'technology',
                'image' => 'clubs/web.jpg',
                'location' => 'Salle A8',
                'meeting_schedule' => 'Tous les lundis à 17h',
                'members_count' => 38,
                'creation_date' => '2023-02-10',
                'user_id' => $admin->id,
            ],
            [
                'name' => 'Club Entrepreneuriat',
                'description' => 'Transformez vos idées en projets concrets avec le soutien de mentors et d\'experts du monde entrepreneurial.',
                'category' => 'academic',
                'image' => 'clubs/entrepreneuriat.jpg',
                'location' => 'Salle C5',
                'meeting_schedule' => 'Tous les vendredis à 16h',
                'members_count' => 52,
                'creation_date' => '2023-03-05',
                'user_id' => $admin->id,
            ],
            [
                'name' => 'Club de Football',
                'description' => 'Rejoignez l\'équipe de football de l\'EMSI et participez à des tournois universitaires.',
                'category' => 'sports',
                'image' => 'clubs/football.jpg',
                'location' => 'Terrain de sport',
                'meeting_schedule' => 'Tous les samedis à 14h',
                'members_count' => 30,
                'creation_date' => '2023-04-20',
                'user_id' => $admin->id,
            ],
            [
                'name' => 'Club de Théâtre',
                'description' => 'Développez vos talents artistiques et participez à des représentations théâtrales.',
                'category' => 'cultural',
                'image' => 'clubs/theatre.jpg',
                'location' => 'Salle d\'auditorium',
                'meeting_schedule' => 'Tous les jeudis à 19h',
                'members_count' => 25,
                'creation_date' => '2023-05-12',
                'user_id' => $admin->id,
            ],
            [
                'name' => 'Club d\'Intelligence Artificielle',
                'description' => 'Explorez les dernières avancées en IA et machine learning à travers des projets pratiques.',
                'category' => 'technology',
                'image' => 'clubs/ai.jpg',
                'location' => 'Salle D3',
                'meeting_schedule' => 'Tous les mardis à 17h30',
                'members_count' => 40,
                'creation_date' => '2023-06-08',
                'user_id' => $admin->id,
            ],
        ];

        foreach ($clubs as $clubData) {
            Club::create($clubData);
        }
    }
} 