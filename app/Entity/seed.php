<?php
    namespace app\Entity;

    require_once 'app/db/database.php';

    use \app\Db\Database;
    use \PDO;

    class Seed{
        public $id;
        public $nome;
        public $preco;
        public $imagem;

        public function cadastrar(){
            $objDatabase = new Database('seeds');

            $this->id = $objDatabase->insert([
                'nome' => $this->nome,
                'preco' => $this->preco,
                'imagem' => $this->imagem
            ]);
            return true;

        }

        public function excluir(){
            return (new Database('seeds'))->delete('id = '.$this->id);
        }

        public function atualizar(){
            return (new Database('seeds'))->update('id = '.$this->id, [
                'nome' => $this->nome,
                'preco' => $this->preco,
                'imagem' => $this->imagem
            ]);
        }
        public static function getSeeds($where = null, $order=null, $limit=null){
            return (new Database('seeds'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS);    
        }

        public static function getSeed($id){
            return (new Database('seeds'))->select('id = '.$id)->fetchObject(self::class);
        }



    }
?>