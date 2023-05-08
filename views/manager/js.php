<?php if(!MINIFY){ ?>
    <script type="text/javascript" src="<?=url("assets/js/jquery.js")?>"></script>
    <script type="text/javascript" src="<?=url("assets/js/bootstrap.bundle.min.js")?>"></script>
    <script type="text/javascript" src="<?=url("assets/js/fontawesome.js")?>" defer></script>
    <script type="text/javascript" src="<?=url("assets/js/jquery.validate.min.js")?>"></script>
    <script type="text/javascript" src="<?=url("assets/js/validate.pt-BR.js")?>"></script>
    <script type="text/javascript" src="<?=url("assets/js/toast.min.js")?>"></script>
    <script type="text/javascript" src="<?=url("assets/js/manager.js").RAND_NUM?>"></script>
<?php } else { ?>
    <script type="text/javascript" src="<?=url("assets/manager.min.js")?>"></script>
<?php } ?>
<script>
    window.onload = function()
    {
        $('.loading').fadeOut();
        $('html').css('overflow-y', 'auto');
    };
</script>