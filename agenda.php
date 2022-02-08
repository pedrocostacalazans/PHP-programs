<?php
    class Agenda {
        private $nome;
        private $telefone;

        public function __construct() {
            $this->nome = array();
            $this->telefone = array();
        }

        public function getNome() {
            return $this->nome;
        }

        public function getTelefone() {
            return $this->telefone;
        }

        public function setNome($nome) {
            $this->nome[] = $nome;
        }

        public function setTelefone($telefone) {
            $this->telefone[] = $telefone;
        }

        public function getAgendaJsonPretty() {
            $agenda = array();
            for ($i = 0; $i < count($this->nome); $i++) {
                $agenda[$this->nome[$i]] = $this->telefone[$i];
            }
            return json_encode($agenda, JSON_PRETTY_PRINT);
        }

        // remove o contato da agenda
        public function removeContato($nome) {
            $nome_temp = array();
            $telefone_temp = array();
            for ($i = 0; $i < count($this->nome); $i++) {
                if ($this->nome[$i] != $nome) {
                    $nome_temp[] = $this->nome[$i];
                    $telefone_temp[] = $this->telefone[$i];
                }
            }
            $this->nome = $nome_temp;
            $this->telefone = $telefone_temp;
        }
    }

    $agenda = new Agenda();

    $file = fopen("agenda.csv", "w");

    $op = '1';

    while ($op != '0') {
        echo "                  Agenda Telefônica                   \n";
        echo "------------------------------------------------------\n";
        echo "Cadatrar nova pessoa:  1\n";
        echo "Listar agenda em JSON: 2\n";
        echo "Remover contato:       3\n";
        echo "Sair:                  0\n";
        echo "------------------------------------------------------\n\n";
        $op = readline("Digite uma opção: ");

        switch ($op) {
            case '1':
                $nome = readline("Digite o nome: ");
                $agenda->setNome($nome);
                $telefone = readline("Digite o telefone: ");
                $agenda->setTelefone($telefone);
                // Clear screen
                echo "\033[H\033[J";

                break;
            case '2':
                echo "Agenda:\n";
                echo $agenda->getAgendaJsonPretty() . "\n\n";
                
                break;

            case '3':
                $nome = readline("Digite o nome: ");
                $agenda->removeContato($nome);
                echo "Contato removido com sucesso!\n\n";
                break;
            case '0':
                fwrite($file, $agenda->getAgendaJsonPretty() . "\n");
                echo "Saindo...\n";
                break;
            default:
                # code...
                break;
        }
    }

    fclose($file);

?>