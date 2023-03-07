<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;   # POSSIBILITA USAR A QUERY SQL/BUILDER      (FIXO)

class Hoteis
{
    private $dados_hoteis;

    # construtor
		function __construct()
		{

			$this->dados_hoteis = [
				# hotel 1
				[
					'nome_hotel' => 'Hotel Maravilhoso 5*',
					'descricao'  => 'Situado junto à praia com 500 quartos e serviço TI.',
					'imagem'     => 'hotel_1.png'
				],
				# hotel 2
				[
					'nome_hotel' => 'Hotel Esplendor 4*',
					'descricao'  => 'Aqui come e bebe sem parar.',
					'imagem'     => 'hotel_2.png'
				],
				# hotel 3
				[
					'nome_hotel' => 'Hotel Grandioso 5*',
					'descricao'  => 'Recepção aberta 24 horas por dia... E mais 3 horas à no.',
					'imagem'     => 'hotel_3.png'
				],
				# hotel 4
				[
					'nome_hotel' => 'Hotel Espetáculo 5*',
					'descricao'  => 'O melhor hotel do mundo, ou talvez não.',
					'imagem'     => 'hotel_4.png'
				],
			];
		}
	# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
		public function imagensHoteis(){
			# retorna as imagens dos hoteis
			$imagens = [];

			foreach($this->dados_hoteis as $hotel){
				array_push($imagens, $hotel['imagem']);
			}
			// echo '<pre>';
			// print_r($this->dados_hoteis[3]);
			return $imagens;
		}
	# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
		public function dados_do_hotel($id){
			# retorna os dados do hotel escolhido

			return $this->dados_hoteis[$id];
		}
}
?>
