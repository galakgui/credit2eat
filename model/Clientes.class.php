<?php
	
	class Clientes extends Conexao {
	
		function __construct(){
			parent::__construct();
		}

		function GetClientes(){
			//busca os produtos
			$query = "SELECT * FROM cliente";
	
			$query .= " ORDER BY cli_nome "; //COLOCAR POR ORDEM DECRESCENTE // ARRUMAR INSERÇÃO NO BANCO CLI_ID = AUTO INCREMENT. 
		
			$this->ExecuteSQL($query);

			$this->GetLista();
		}

		public function setCliente($nome, $matricula, $telefone, $email, $senha){
			
			$query = "INSERT INTO cliente (cli_nome, cli_matricula, cli_telefone, cli_email, cli_senha) VALUES ('$nome', '$matricula', '$telefone','$email', '$senha');";	
			$var = $this->ExecuteSQL($query);

					//header("location:./menu");
		}

		/*function GetProdutosID($id){
			//busca os produtos
			$query = "SELECT * FROM produtos";
	
			//$query .= " AND prod_id = {$id}";  se eu tiro isso ele mostra todos os existentes, se eu deixo ele não mostra nenhum
		
			$this->ExecuteSQL($query);

			$this->GetLista();
		}*/

		private function GetLista(){
			$i = 1;
			while($lista = $this->ListarDados()){
			$this->itens[$i] = array(
				'cli_id' => $lista['cli_id'],
				'cli_nome' => $lista['cli_nome'],
				'cli_matricula' => $lista['cli_matricula'],
				'cli_telefone' => $lista['cli_telefone'],
				'cli_email' => $lista['cli_email'],
				'cli_senha' => $lista['cli_senha'],
				'cli_divida' => $lista['cli_divida']
			);
			$i++;
			}
		}

		public function save() {
			// logica para salvar cliente no banco
		}
		  
		public function update() {
			// logica para atualizar cliente no banco
		}
		  
		public function remove() {
			// logica para remover cliente do banco
		}
		  
		public function listAll() {
			// logica para listar toodos os clientes do banco
		}

	}

?>

<!--$query = "SELECT * FROM {this->prefix} produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id" 
query para buscar os produtos de uma categoria específica-->