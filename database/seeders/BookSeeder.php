<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Carbon\Carbon;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'City of Bones',
                'author' => 'Cassandra Clare',
                'year' => 2007,
                'description' => 'Primeiro volume da série Os Instrumentos Mortais, acompanha Clary Fray descobrindo um mundo secreto de caçadores de sombras e criaturas sobrenaturais.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'The Lost Symbol',
                'author' => 'Dan Brown',
                'year' => 2009,
                'description' => 'Thriller que segue Robert Langdon em Washington, D.C., enquanto desvenda mistérios ligados à maçonaria e segredos ocultos na capital americana.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'The Brethren',
                'author' => 'John Grisham',
                'year' => 2000,
                'description' => 'Romance jurídico em que três ex-juízes, presos em uma penitenciária, aplicam golpes sofisticados que acabam se cruzando com a política nacional.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Asylum',
                'author' => 'Madelaine Roux',
                'year' => 2013,
                'description' => 'Um thriller psicológico em que jovens descobrem segredos sombrios ao passar o verão em um antigo hospício transformado em alojamento estudantil.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Divergent',
                'author' => 'Veronica Roth',
                'year' => 2011,
                'description' => 'm uma sociedade dividida em facções, uma jovem descobre que não se encaixa em apenas uma categoria, colocando sua vida em risco e desafiando o sistema.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'The Declaration',
                'author' => 'Gemma Malley',
                'year' => 2007,
                'description' => 'Em um futuro onde a longevidade é controlada, adolescentes considerados “ilegais” lutam contra um regime que nega seu direito de existir.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
        
        $this->command->info('6 livros foram adicionados à base de dados!');
    }
}