<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArtigoSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('artigos')->insert([
            'titulo' => 'Professores estaduais do Rio de Janeiro recebem reajuste salarial',
            'descricao' => 'Numa coletiva de imprensa, realizada ontem no Palácio Guanabara, o secretário de educação do Rio de Janeiro informou sobre o reajuste salarial de 10% para os professores do estado. Ferreira explicou que a decisão já foi publicada no Diário Oficial e tem caráter emergencial. O reajuste valerá a partir de janeiro do próximo ano.

            Antes desta decisão ser tomada, o secretário e alguns representantes dos profissionais da educação, tentavam um acordo de reajuste salarial. A primeira proposta do atual governo era um aumento de 2,5%, que foi negado pelos professores. Em protesto, os educadores alegaram que o aumento era uma “afronta ao futuro do próprio país”.
            
            Nos últimos cinco anos, os professores do Rio de Janeiro reivindicavam o reajuste que foi prometido pelo governo atual desde o início de suas campanhas eleitorais. Após inúmeras negociações ao longo dos 3 anos de mandato, o ajuste foi aprovado em 10% para os profissionais de toda a rede estadual.',
        ]);

        DB::table('artigos')->insert([
            'titulo' => 'Obras em hospital desativado são retomadas em Belo horizonte',
            'descricao' => 'O hospital Moacir do Carmo, localizado no centro de Belo Horizonte, está desativado desde 2014. Segundo o governador, a obra será reiniciada na próxima segunda-feira e deve ser concluída daqui há dois anos, com o orçamento total de 6 milhões de reais. O objetivo é que o Moacir do Carmo volte a atender mais de 1000 pacientes por dia, em seus100 leitos de UTI, alas de obstetrícia e salas de emergência.

            Os mineiros já fizeram inúmeras reivindicações contra o Estado de Minas Gerais para a reativação do que foi um dos maiores hospitais da região. O Moacir do Carmo foi desativado devido à falta de verba para manter os profissionais e toda a estrutura que um hospital de grande porte necessita.
            
            Após a declaração do governador, os moradores ficaram esperançosos com a reabertura do hospital, que é essencial para a sociedade de uma das regiões mais populosas do Brasil. O governador também declarou que a cada trimestre, os engenheiros responsáveis pelo projeto divulgarão os resultados e andamento da obra.',
        ]);

        DB::table('artigos')->insert([
            'titulo' => 'Macaco invade casa próxima a zoológico em Guarulhos',
            'descricao' => 'Animal ficou sobre cortina da sala e depois subiu escada.
            Ele fugiu pela janela do banheiro e desapareceu.
            
                        Uma família que mora em Guarulhos, na Grande São Paulo, levou um susto neste domingo (9) depois do almoço: um pequeno macaco entrou no imóvel, que fica próximo ao zoológico da cidade.
                        Quando os bombeiros chegaram, o animal estava na sala, sobre a cortina. Foram várias tentativas de captura, mas nada deu certo. Até que o macaquinho pulou e assustou o cinegrafista amador que fazia as imagens.
                        O animal subiu pela escada, foi parar no andar de cima da casa e conseguiu sair pela janela do banheiro. Depois, andou pelo telhado e pelo muro das casas vizinhas até desaparecer.
            ',
        ]);
    }
}
