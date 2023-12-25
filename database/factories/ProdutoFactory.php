<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str; // É necessário importar esta classe para poder usar os métodos
use App\Models\Categoria;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nome = $this->faker->unique()->sentence();
        return [
            'nome' => $nome,
            'descricao' => $this->faker->paragraph(),
            'preco' => $this->faker->randomNumber(2),
            'slug' => Str::slug($nome),  // Slug eh a nossa URL. A classe "Str" eh usado para o tratamento de strings em Laravel e o metodo "slug(titulo)" dessa classe, serve para gerar uma URL amigavel
            'imagem' => $this->faker->imageUrl(400, 400),
            'id_user' => User::pluck('id')->random(), // create() e pluck() são métodos do Eloquent. create() serve para criar um registro. pluck() extrai um dado específico de um determinado registro/tabela.
            'id_categoria' => Categoria::pluck('id')->random(),
        ];
    }
}
