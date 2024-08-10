<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);

    $stmt = $pdo->prepare("INSERT INTO posts (title, content) VALUES (:title, :content)");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);
    $stmt->execute();

    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Adicionar Novo Post</h1>
        <nav>
            <a href="index.php">Voltar ao Blog</a>
        </nav>
    </header>
    <main>
        <form action="add_post.php" method="POST">
            <label for="title">Título:</label>
            <input type="text" id="title" name="title" required>
            
            <label for="content">Conteúdo:</label>
            <textarea id="content" name="content" rows="10" required></textarea>
            
            <button type="submit">Adicionar Post</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Blog Moderno. Todos os direitos reservados.</p>
    </footer>
</body>
</html>