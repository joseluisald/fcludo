<!doctype html>
<html lang="pt-br">
    <head>
        <?php include 'head.php'; ?>
        <?php include 'css.php'; ?>
    </head>
    <body>
        <div class="loading"><span class="loader"></span></div>
        <?php if ($this->section('login')):
            echo $this->section('login');
        else: ?>
            <?php include 'sidebar.php'; ?>
            <div class="home-section">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                    <span class="text">FC Ludo</span>
                </div>
                <main class="main_content">
                    <?=$this->section('content')?>
                </main>
            </div>
        <?php endif ?>

        <input type="hidden" id="url_base" value="<?=URL_BASE?>"/>
        <input type="hidden" id="raiz" value="<?=RAIZ?>"/>

        <?php include 'js.php'; ?>

    </body>
</html>