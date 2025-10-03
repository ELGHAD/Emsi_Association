<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get a user to be the author
        $user = User::first() ?? User::factory()->create();
        
        // Create sample news
        $news = [
            [
                'title' => 'Nouveau club de programmation à l\'EMSI',
                'content' => 'Un nouveau club de programmation a été créé à l\'EMSI. Ce club vise à aider les étudiants à améliorer leurs compétences en programmation et à préparer les compétitions de programmation.',
                'image' => 'images/news/programming-club.jpg',
                'category' => 'club',
                'user_id' => $user->id,
                'is_published' => true,
                'publication_date' => now()->subDays(2),
            ],
            [
                'title' => 'Conférence sur l\'intelligence artificielle',
                'content' => 'Une conférence sur l\'intelligence artificielle sera organisée le mois prochain. Des experts du domaine seront présents pour partager leurs connaissances et expériences.',
                'image' => 'images/news/ai-conference.jpg',
                'category' => 'event',
                'user_id' => $user->id,
                'is_published' => true,
                'publication_date' => now()->subDays(5),
            ],
            [
                'title' => 'Nouveaux cours disponibles pour le semestre prochain',
                'content' => 'De nouveaux cours seront disponibles pour le semestre prochain. Ces cours couvrent les dernières technologies et méthodologies dans le domaine de l\'informatique.',
                'image' => 'images/news/new-courses.jpg',
                'category' => 'academic',
                'user_id' => $user->id,
                'is_published' => true,
                'publication_date' => now()->subDays(7),
            ],
            [
                'title' => 'Compétition de hackathon à l\'EMSI',
                'content' => 'Une compétition de hackathon sera organisée à l\'EMSI le mois prochain. Les étudiants sont invités à participer et à montrer leurs compétences en développement d\'applications.',
                'image' => 'images/news/hackathon.jpg',
                'category' => 'event',
                'user_id' => $user->id,
                'is_published' => true,
                'publication_date' => now()->subDays(10),
            ],
            [
                'title' => 'Nouveau partenariat avec une entreprise technologique',
                'content' => 'L\'EMSI a signé un nouveau partenariat avec une entreprise technologique. Ce partenariat permettra aux étudiants de bénéficier de stages et d\'opportunités d\'emploi.',
                'image' => 'images/news/partnership.jpg',
                'category' => 'academic',
                'user_id' => $user->id,
                'is_published' => true,
                'publication_date' => now()->subDays(15),
            ],
        ];
        
        foreach ($news as $item) {
            News::create($item);
        }
    }
} 