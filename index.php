<?php

// $texto = 'hello world!';
// echo $texto;

// servidor
// php - S localhost:8080 pra rodar no servidor embutido do php

// conceito básico de variáveis
// $nome = 'Emerson M';
// $idade = 30;
// $formacoes = [];
// $ultimaVisualizacao = null; 

// echo $nome; // meu nome
// echo $idade; // 30

// echo isset($formacoes);
// echo isset($ultimaVisualizacao);

// echo empty($formacoes); // true
// echo empty($ultimaVisualizacao); // true

// constantes
// define('MEU_NOME', 'Emerson SM');
// define('PI', 3.14);

// echo MEU_NOME;
// echo PI;

// $nome = "Emerson M"; // string
// $aluno = true; // boolean
// $idade = 30; // integer
// $altura = 1.72; // float ou double
// $cursos = ['php', 'Laravel', 'MySql']; // array

// arrays
// $frutas = ['maca', 'banana'];

// array associativo
// $sobrenomes = [
//     'Emerson' => 'Martins',
//     'João' => 'Pedro'
// ];

// print_r( $sobrenomes);
// echo $sobrenomes['Emerson'];

// $nome = "Emerson";
// $sobrenome = "Martins";

// $resultado = compact('nome', 'sobrenome');

// print_r($resultado);

// objetos
// $objeto = new \stdClass();
// $objeto->nome = "Emerson";
// $objeto->sobrenome = "Martins";
// echo gettype($objeto);
// var_dump($objeto);

// if e else
// $eFormado = false;
// $temCertificado = true;

// if ($eFormado === true) {
//     echo "É formado";
// } elseif ($temCertificado === true) {
//     echo "Não é formado, mas tem certificado";
// } else {
//     echo "Precisa estudar";
// }

// $cpf = '';
// $cnpj = '12.123.123/0001-01';
// $tipoDocumento = '';

// if ($cpf != '') {
//     $tipoDocumento = 'CPF';
// } else {
//     $tipoDocumento = 'CNPJ';
// }

// operador ternário
// $tipoDocumento = ($cpf != '') ? 'CPF' : 'CNPJ';
// echo $tipoDocumento;

// $_POST = [
//     'nome' => 'Emerson',
//     'sobrenome' => null
// ];

// $nome = $_POST['nome'] ?? 'não preenchido';
// $sobrenome = $_POST['sobrenome'] ?? 'não preenchido';

// validacao multipla
// $primeiro = null;
// $segundo = null;
// $terceiro = null;
// $quarto = null;

// $resultado = $primeiro ?? $segundo ?? $terceiro ?? $quarto ?? 'não preenchido';

// exemplo de switch
// $corFavorita = 'azul';

// switch($corFavorita) {
//     case "azul":
//         echo "Selecionou azul";
//     break;
//     case "vermelho":
//         echo "Selecionou vermelho";
//     break;
//     case "rosa":
//         echo "Selecionou rosa";
//     break;
//     case "roxo":
//         echo "Selecionou roxo";
//     break;
//     default:
//         echo "Não selecionou cor";
// }

// exemplo de laço for
// for($i = 0; $i < 10; $i++) {
//     echo  "O número atual é: {$i} <br />";
// }

// exemplo de while
// $num = 1;

// while($num <= 5) {
//     echo  "O número atual é: {$num} <br />";
//     $num++;
// }

// exemplo de do while
// $num = 1;

// do {
//     echo  "O número atual é: {$num} <br />";
//     $num++;
// } while ($num <=5);

// exemplo de foreach
// $cores = ['azul', 'vermelho', 'verde', 'roxo', 'amarelo'];

// só pegar as chaves ímpares
// foreach ($cores as $key => $value) {
//     if(!($key % 2)) {
//         continue;
//     }
//     echo "A cor atual é {$value} <br />";
// }

// funcoes
// function dd($var) {
//     echo "<pre>";
//     var_dump($var);

//     echo "</pre>";
//     die;
// }
// $nomes = ['João', 'José'];
// dd($nomes);

// funcao com type hint
// mostrarIdade(12);
// function mostrarIdade(int $idade) : int
// {
    // trata a idade
//     $var = "Sua idade é {$idade}";
//     return $idade;
// }

// funcao anonima e closure
// $nomes = ['Ed', 'Maria', 'Pedro', 'Joao'];
// $filtro = ['nome1' => 'Ana', 'nome2' => 'Pedro'];

// $resultado = array_filter($nomes, function($valor) use ($filtro) {
//     return ($valor === $filtro['nome1']) || ($valor === $filtro['nome2']);
// });

// var_dump($resultado);

// Aula 4
// datas
// date_default_timezone_set('America/Sao_Paulo');

// echo "Hoje é " . date("d/m/Y") . "<br/ >"; // data brasileira
// echo "Hoje é " . date("Y-m-d") . "<br/ >"; // data do banco de dados, geralmente
// echo "Hoje é " . date("l") . "<br/ >"; // dia da semana em inglês

// echo "Agora é " . date("h:i:s") . "<br/ >"; // hora exata atual

// Algumas funcoes com strings
// $nome = 'Joao \Pedro';

// echo strtoupper($nome); // tudo maiusculo
// echo strtolower($nome); // tudo minusculo
// echo stripslashes($nome); // remove barra invertida
// echo htmlspecialchars($nome); // escapa o HTML
// torna a string em array
// $pizzas = "mussarela, calabresa, frango";
// $array = explode(', ', $pizzas);
// print_r($array);

// $pizzas = ['mussarela', 'frango', 'atum'];
// $string = implode(', ', $pizzas); // a funcao join faz a mesma coisa
// echo $string;

// $mensagem = "Olá, meu nome é Emerson";
// $nome1 = substr($mensagem, 5); // vai pegar a partir da 5ª posição
// $nome2 = substr($mensagem, -5); // a partir do fim, pega 5 caracteres
// $nome3 = substr($mensagem, 0, 3); // a partir do início, pega 3 caracteres
// $nome4 = substr($mensagem, 0, -2); // pega tudo exceto 2 últimos caracteres

// echo $nome4;

// $idades = ['joão' => '0', 'Sam' => 1];
// $json = json_encode($idades, JSON_UNESCAPED_UNICODE);
// echo $json;

// $json = '{"joão":"0","Sam":1}';
// $obj = json_decode($json); // se usar o segundo parametro TRUE, torna-se um array
// var_dump($obj);

// consumindo conteúdo de arquivo externo
// $texto = file_get_contents('teste.txt');
// echo $texto;

// escrevendo conteúdo em arquivo externo (se o aruqivo não existe, ele cria)
// $texto = file_put_contents('teste.txt', 'escrevendo no arquivo externo');
// echo $texto;

// gera número inteiro aleatório
// echo rand(0, 10);

// função de contagem
// $array = [1, 2, 3, 4];
// echo count($array);

// arredondamento
// echo ceil(5.1); // para cima (retorna 6)
// echo round(5.9); // para o mais próximo (retorna 6)

// saber a quantidade de caracteres de uma string
// $texto = 'saber a quantidade de caracteres de uma string';
// echo strlen($texto);

// substitui caracter ou caracteres
// $apelido = 'Johnny Boy';
// $nome = str_replace('Johnny', 'João', $apelido);
// echo $nome;

// criptografia
// $md5 = md5('123');
// $sha1 = sha1('123');

// $nome = 'João';
// $nomeCodificado = base64_encode($nome); // pra decodificar, usar o base64_decode
// echo $nomeCodificado;

// função header
// header('Expires: Mon, 26 Jul 2021 05:05:05 GMT');
// header('Cache-Control: no-cache');
// header('Pragma: no-cache');
// header('Location: https://google.com');

// funcoes para encerrar a aplicacao
// die('encerra aqui');
// exit('encerra aqui também');

// uso de e-mail (precisa configurar no ini.php)
// $msg = 'Mensagem de corpo';
// $msg = wordwrap($msg, 25);
// mail('emersonsm@icloud.com', "Assunto teste", $msg);

// trabalhando com numeros
// echo number_format("1000000");
// echo number_format("1000000", 2);
// echo number_format("1000000.45", 2);
// echo number_format("1000000", 2, ",", ".");
// echo number_format("1000000.45", 2, ",", ".");

// super globais
// pega parametros da URL ex.: localhost?emerson&martins
// $nome = $_GET['nome'] ?? 'não informado';
// $sobrenome = $_GET['sobrenome'] ?? 'não informado';

// trabalhando com sessão (mantém a variável setada em várias páginas)
// session_start();
// $_SESSION['cor_favorita'] = 'azul';

// echo 'cor favorita setada';

// try catch e finally
// error_reporting(-1);

// set_error_handler(function($code, $message) {
//     throw new ErrorException($message, $code);
// });
// $numerador = 20;
// $denominador = 0;

// try {
//     echo $numerador / $denominador;
// } catch (\Exception $e) {
//     echo "{$e->getMessage()}";
//     // var_dump($e);
// } finally {
//     echo "fim da execução";
// }

// inclusao de arquivos
// include e include_once tentam incluir o arquivo; se não conseguir, dá um warning e segue
// require e MAIS RECOMENDADO: require_once tentam incluir o arquivo; se não conseguir, pára a aplicação
// require_once('config.php');

// $connection = getConnection();
// echo $connection;

// usando o composer
// ? >

// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>
//     <form action="sendmail.php" method="POST">
//         <label for="nome">Nome completo</label>
//         <input type="text" name="nome" placeholder="nome">
//         <br><br>
//         <label for="pais">País</label>
//         <select name="pais">
//             <option value="">Selecione um país</option>
//             <option value="brasil">Brasil</option>
//             <option value="eua">Estados Unidos</option>
//         </select>
//         <br><br>
//         <textarea name="mensagem" cols="30" rows="10" placeholder="Mensagem"></textarea>
//         <input type="submit" value="Enviar">
//     </form>    
// </body>
// </html>
// ? >

// <!-- <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Fazendo Upload</title>
// </head>
// <body>
//     <form action="upload.php" method="POST" enctype="multipart/form-data">
//         <label >Selecione uma imagem</label>
//         <input type="file" name="fileToUpload">
//         <br><br>
       
//         <input type="submit" name="submit" value="Enviar Imagem">
//     </form>    
// </body>
// </html> -->

// if (!defined('PDO::ATTR_DRIVER_NAME')) {
//     echo "POD não disponível. Ative no php.ini";
// }

// estudo de classes
// require_once('./classes/Usuario.php');

// $usuario = new Usuario;

// $usuario->nome = "Emerson";
// $usuario->email = "emersonsm@icloud.com";

// echo $usuario->getNome() . "<br>";
// echo $usuario->getEmail();

// carregando classe pelo autoload

// use App\Models\Funcionario;

// require_once('vendor/autoload.php');

// $usuario = new Funcionario;
// $usuario->setSenha('1234');

// echo $usuario->getSenha();

// // pode ser instanciado como abaixo ou usando o use no início do arquivo
// $usuarioRepository = new \App\Repositories\UsuarioRepository;

// echo $usuario->getNome;

// visibilidade de acessos:
// public - pode ser acessado de qualquer lugar da aplicação
// protected - pode ser acessado apenas na classe e em seus filhos
// private - só pode ser acessado dentro da própria classe

// palavra reservada final indica que o método não pode ser sobescrito pela classe filha

// classes e atributos estaticos - não precisa instanciar
// use App\Config\Database;

require_once('vendor/autoload.php');

// $tipoConexao = Database::$driver;

// echo $tipoConexao;

// para chamar a funcao estatica
// Database::staticEcho();

// clonar objeto na memoria
// $usuario = new \App\Models\Usuario;
// $funcionario = clone $usuario;

// var_dump($funcionario);

// use App\Controllers\Logger;

// Logger::log("teste de mensagem");


// associação
// class Marido
// {
//     public $nome;
//     public $esposa;

//     public function __construct($nome = null, $esposa = null)
//     {
//         $this->nome = $nome;
//         $this->esposa = $esposa;
//     }
// }

// class Esposa
// {
//     public $nome;

//     public function __construct($nome = null)
//     {
//         $this->nome = $nome;
//     }
// }

// $esposa = new Esposa('Cintia');
// $marido = new Marido('Eu', $esposa);
// // para saída dos 2 nomes
// echo $marido->nome . ' e ' . $marido->esposa->nome;

// agregação
// class Produtos
// {
//     public $nome;
//     public $valor;

//     public function __construct($nome = null, $valor = null)
//     {
//         $this->nome = $nome;
//         $this->valor = $valor;
//     }
// }


// class CarrinhoCompras
// {
//     public $produtos;

//     public function adiciona(Produtos $produto)
//     {
//         $this->produtos[] = $produto;
//     }

//     public function exibe()
//     {
//         foreach($this->produtos as $produto)
//         {
//             echo $produto->nome;
//         }
//     }
// }

// $produto1 = new Produtos('Play');
// $produto2 = new Produtos('XBOX');

// $carrinho = new CarrinhoCompras();

// $carrinho->adiciona($produto1);
// $carrinho->adiciona($produto2);
// $carrinho->exibe();

// composição
// class Pessoa
// {
//     public function configura($nome)
//     {
//         return "Nome: " . $nome;
//     }
// }

// class Exibe
// {
//     public $pessoa;
//     public $nome;

//     public function __construct($nome = null)
//     {
//         $this->pessoa = new Pessoa();
//         $this->nome = $nome;
//     }

//     public function mostrarNome()
//     {
//         echo $this->pessoa->configura($this->nome);
//     }
// }

// $exibe = new Exibe('Emerson');
// $exibe->mostrarNome();

// usando a Trait com data atual
// use App\Controllers\Logger;

// Logger::log('teste');


// status 0 - legado
// status 1 - lambda
// status 2 - legado e nova arquitetura

// classe anonima
$usuario = new class() {
    private $nome;

    public function __construct()
    {
        echo "construtor<br>";
    }

    public function setNome($valor)
    {
        $this->nome = $valor;
    }

    public function getNome()
    {
        return $this->nome;
    }
};

$usuario->setNome('Emerson M');

echo $usuario->getNome();
// Dica de conteúdo: site php the right way