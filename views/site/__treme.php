<!doctype html>

<html lang="<?=site('locale')?>">
    <head>
        <?php include 'head.php'; ?>
        <?php include 'css.php'; ?>
    </head>
    <body>
        <div class="loading"><span class="loader"></span></div>
        <nav class="main_nav">
            <?php include 'sidebar.php'; ?>
        </nav>

        <main class="main_content">
            <?=$this->section('content')?>
        </main>

        <footer class="main_footer">
            <?php include 'footer.php'; ?>
        </footer>

        <input type="hidden" id="url_base" value="<?=URL_BASE?>"/>
        <input type="hidden" id="raiz" value="<?=site('raiz')?>"/>

        <?php include 'js.php'; ?>

    </body>
</html>