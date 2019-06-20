<?php

    class postagem
    {
        private $idPostagem;
        private $titulo;
        private $data;
        private $codAutor;
        //-------------------------------------------------Getters---------------------------------- 
        public function getIdPostagem(){
            return $this->idPostagem;
        }
        public function getTitulo(){
            return $this->titulo;
        }
        public function getData(){
            return $this->data;
        }
        public function getCodAutor(){
            return $this->codAutor;
        }
        //-------------------------------------------------Setters--------------------------------------------
        public function setIdPostagem($m){
            $this->idPostagem = $m;
        }
        public function setTitulo($m){
            $this->titulo = $m;
        }
        public function setData($n){
            $this->data = $n;
        }
        public function SetCodAutor($p){
            $this->data = $p;
        }
        //-------------------------------------------------criar post------------------------------------------
        public function create(){
            try{
                include('../conexão/conexaoBD.php');
                $sql ='INSERT INTO postagem(titulo,data,codAutor) VALUES(?,?,?)';
                $stmtInserir = $conexao->prepare($sql);
                $stmtInserir->bindParam(1, $this->titulo);
                $stmtInserir->bindParam(2, $this->data);
                $stmtInserir->bindParam(3, $this->codAutor);
                $stmtInserir-> execute();
            }
            catch(PDOException $e){
                echo 'Error: '.$e->getMessage();
            }
        }
        //-------------------------------------------------ler dados post --------------------------------------
        public function read(){
            try{
                include('../conexão/conexaoBD.php');
                $sql = 'SELECT * FROM postagem WHERE idPostagem =?';
                $stmtLeitura = $conexao->prepare($sql);
                $stmtLeitura->bindParam(1, $this->idPostagem);
                $stmtLeitura->execute();
                $dado = $stmtLeitura->fetch(PDO::FETCH_ASSOC);
                $this->nome = $dado['titulo'];
                
            }
            catch(PDOException $e){
                echo 'Error: '.$e->getMessage();
            }

        }
        //------------------------------------------------- Atualizar postadem ----------------------------------
        public function update(){
            try{
                include('../conexão/conexaoBD.php');
                $sql = 'UPDATE postagem SET titulo = ? data = ? codAutor = ? WHERE matricula = ?';
                $stmtAtualizar = $conexao->prepare($sql);
                $stmtAtualizar->bindParam(1,$this->titulo);
                $stmtAtualizar->bindParam(2,$this->data);
                $stmtAtualizar->bindParam(3,$this->codAutor);
                $stmtAtualizar->bindParam(4,$this->idPostagem);
                $stmtAtualizar->execute();
            }
            catch(PDOException $e){
                echo 'Error: '.$e->getMessage();
                
            }
        }
        //------------------------------------------------- Atualizar postadem ----------------------------------
        public function delete(){
            try{
                include('../conexão/conexaoBD.php');
                $sql = 'DELETE FROM postagem WHERE idPostagem = ?';
                $stmtDeletar = $conexao->prepare($sql);
                $stmtDeletar->bindParam(1,$this->idPostagem);
                $stmtDeletar->execute();
            }
            catch(PDOException $e){
                echo 'Error: '.$e->getMessage();
            }
        }
        //------------------------------------------------- listar postagens ----------------------------------
        public function lista(){
            try{
                include('../conexão/conexaoBD.php');
                $sql = 'SELECT * FROM postagem';
                $stmtLista = $conexao->prepare($sql);
                $stmtLista->execute();
                $postagens = $stmtLista->fetchALL(PDO::FETCH_ASSOC);
                return $postagens;
            }
            catch(PDOException $e){
                echo 'Error: '.$e->getMessage();
            }
        }
        //------------------------------------------------- json encode ---- ----------------------------------
        public function listaJson()
        {
            return json_encode($this->lista());
        }
        
    }
?>