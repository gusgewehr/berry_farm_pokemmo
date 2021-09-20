<?php
    namespace app\Entity;

    require_once 'app/db/database.php';

    use \app\Db\Database;
    use \PDO;

    class Berry{
        public $id;
        public $nome;
        public $preco;
        public $imagem;
        public $seed1;
        public $seed2;
        public $seed3;

        public function cadastrar(){
            $objDatabase = new Database('berrys');

            $this->id = $objDatabase->insert([
                'nome' => $this->nome,
                'preco' => $this->preco,
                'imagem' => $this->imagem,
                'seed1' => $this->seed1,
                'seed2' => $this->seed2,
                'seed3' => $this->seed3,
            ]);
            return true;

        }
        public function atualizar(){
            return (new Database('berrys'))->update('id = '.$this->id, [
                'nome' => $this->nome,
                'preco' => $this->preco,
                'imagem' => $this->imagem,
                'seed1' => $this->seed1,
                'seed2' => $this->seed2,
                'seed3' => $this->seed3
            ]);
        }

        public function excluir(){
            return (new Database('berrys'))->delete('id = '.$this->id);
        }

        public static function getBerrys($where = null, $order=null, $limit=null){
            return (new Database('berrys'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS);    
        }

        public static function getBerry($id){
            return (new Database('berrys'))->select('id = '.$id)->fetchObject(self::class);
        }
    }
?>