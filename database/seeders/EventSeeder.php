<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        // Get a user to be the organizer
        $user = User::first() ?? User::factory()->create();
        
        // Create sample events
        $events = [
            [
                'title' => 'Hackathon EMSI 2025',
                'description' => 'Un hackathon de 48 heures pour développer des solutions innovantes aux défis technologiques actuels.',
                'type' => 'competition',
                'date' => now()->addDays(30),
                'location' => 'Campus EMSI - Casablanca',
                'image' => 'images/events/hackathon.jpg',
                'capacity' => 100,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Workshop Intelligence Artificielle',
                'description' => 'Découvrez les fondamentaux de l\'IA et ses applications pratiques dans l\'industrie.',
                'type' => 'workshop',
                'date' => now()->addDays(15),
                'location' => 'Salle de conférence A - EMSI',
                'image' => 'images/events/ai-workshop.jpg',
                'capacity' => 50,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Conférence Cybersécurité',
                'description' => 'Une conférence sur les dernières tendances et menaces en cybersécurité.',
                'type' => 'conference',
                'date' => now()->addDays(45),
                'location' => 'Amphithéâtre - EMSI',
                'image' => 'images/events/cybersecurity.jpg',
                'capacity' => 200,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Soirée Networking',
                'description' => 'Rencontrez des professionnels de l\'industrie et développez votre réseau.',
                'type' => 'social',
                'date' => now()->addDays(20),
                'location' => 'Hall principal - EMSI',
                'image' => 'images/events/networking.jpg',
                'capacity' => 150,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Game Dev Challenge',
                'description' => 'Compétition de développement de jeux vidéo sur un week-end.',
                'type' => 'competition',
                'date' => now()->addDays(60),
                'location' => 'Lab Gaming - EMSI',
                'image' => 'images/events/gamedev.jpg',
                'capacity' => 80,
                'user_id' => $user->id,
            ],
        ];
        
        foreach ($events as $event) {
            Event::create($event);
        }
    }
} 