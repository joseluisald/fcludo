<!doctype html>
<html lang="pt-br">
    <head>
        <?php include 'head.php'; ?>
        <?php include 'css.php'; ?>
    </head>
    <body>
        <?php if ($this->section('login')):
            echo $this->section('login');
        else: ?>
            <?php include 'sidebar.php'; ?>
            <div class="home-section">
                <div class="home-content">
                    <i class='bx bx-menu' ></i>
                    <span class="text">Drop Down Sidebar</span>
                </div>
                <main class="main_content">
                    <?=$this->section('content')?>
                </main>
            </div>
        <?php endif ?>

        <input type="hidden" id="url_base" value="<?=URL_BASE?>"/>

        <?php include 'js.php'; ?>

    </body>
</html>