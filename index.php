<?PHP

require 'banco.php'; //requisita o arquivo de banco

$banco = new Banco("localhost","blog","root","123"); //Instancia um objeto da Classe Banco e assim usar os metodos dessa classe(Metodos criados na classe banco com query, insert, numRows)

$banco->query("SELECT * FROM posts;"); //Executando a query

echo $numero = $banco->numRows(). "<br>";//chama a função numRows que esta dentro da classe Banco e exibe o numero de resultados da query

echo "<pre>"; //tag HTML

print_r($banco->result());//chama a função result que esta dentro da classe Banco e exibe os resultados da query

echo "</pre>";//tag HTML


//toda fez q der f5, ele execulta esta inserção.
$banco->insert("posts", array("titulo" => 'Novo post a cada f5', "corpo" => 'Corpo do post a cada f5'));//chama a função insert que esta dentro da classe Banco e passa a tabela e os dados a serem inseridos.

?>