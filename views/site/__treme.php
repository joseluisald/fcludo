<!doctype html>
<html lang="pt-br">
    <head>
        <?php include 'head.php'; ?>
        <?php include 'css.php'; ?>
    </head>
    <body>

        <nav class="main_nav">
            <?php include 'sidebar.php'; ?>
        </nav>

        <main class="main_content">
            <?=$this->section('content')?>
        </main>

        <footer class="main_footer">
            <?php include 'footer.php'; ?>
        </footer>

        <?php include 'js.php'; ?>

    </body>
</html>