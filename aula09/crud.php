<?php
// conectar ao banco de dados
$db = new mysqli('localhost', 'root', '', 'crud');

// funções para crud
function getNomes() {
    global $db
    $sql = "SELECT * FROM nomes";
    $result = $db->query($sql);
    $nomes = [];
    while ($row = $result->fetch_assoc()) {
        $nomes[] = $row;
    }
    return $nomes;
}

function adicionarNome($nome) {
    global $db;
    $sql = "INSERT INTO nomes (nome) VALUES ('$nome')";
    $db->query($sql);
}

function editarNome($id, $nome) {
    global $db;
    $sql = "UPDATE nomes SET nome = '$nome' WHERE id = $id";
    $db->query($sql);
}

function excluirNome($id) {
    global $db;
    $sql = "DELETE FROM nomes WHERE id = $id";
    $db->query($sql);
}

// ações do CRUD
$acao = isset($_GET['acao']) ? $_GET['acao'] : null;
$id = isset($GET['id']) ? intval($_GET['id']) : 0;
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';

if ($acao === 'adicionar') {
    adicionarNome($nome);
    header ('Location: crud_php');
    exit();
} elseif ($acao === 'editar') {
    $id = intval($_GET['id']);
    $nomeoriginal = ($_GET['nome']);
    $nome = $_POST['nome'];
    editarNome($id, $nome);
    header('Location: editar.php?id=' . $id . 'nome=' . $nomeoriginal);
    // redirecionar para editar.php com o ID
    exit();
} elseif ($acao === 'excluir') {
    excluirNome($id);
    header('Location: crud.php');
    exit();
}

// obter todos os nomes
$nomes = getNomes();
?>

<h1>Lista de nomes</h1>
<form method="post" action="acao=adicionar">
    <label for="nome">Nome: </label>
    <input type="text" id="nome" name="name" required="required">
    <button type="submit">Adicionar</button>
</form>
<table border="border">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($nome as $nome): ?>
    <tr>
        <td><?php echo $nome['id']; ?></td>
        <td><?php echo $nome['nome']; ?></td>
        <td>
            <a 
                href="?acao=editar
                &id=<?php echo $nome['id']; ?>
                &nome=<?php echo urlencode($nome['nome']); ?>">
                Editar
            </a>
            <a href="?acao=excluir&id=<?php echo $nome['id']; ?>">
                Excluir
            </a>
        </td>
    </tr>
</table>

