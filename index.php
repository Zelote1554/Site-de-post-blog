<?php
include 'db_config.php';

// Consulta para obter todos os posts
$query = "SELECT * FROM posts ORDER BY created_at DESC";
$stmt = $pdo->query($query);
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Moderno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Blog Moderno</h1>
        <nav>
            <a href="add_post.php">Adicionar Post</a>
        </nav>
    </header>
    <main>
        <?php if ($posts): ?>
            <?php foreach ($posts as $post): ?>
                <article>
                    <h2><?php echo htmlspecialchars($post['title']); ?></h2>
                    <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
                    <small>Publicado em <?php echo $post['created_at']; ?></small>
                </article>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Nenhum post disponível.</p>
        <?php endif; ?>
    </main>
    <footer>
        <p>&copy; 2024 Blog Moderno. Todos os direitos reservados.</p>
    </footer>
</body>
</html>