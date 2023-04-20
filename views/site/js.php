<?php if(!MINIFY){ ?>
    <script type="text/javascript" src="<?=url("assets/js/jquery.js")?>"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?=url("assets/js/fontawesome.js")?>" defer></script>
    <script type="text/javascript" src="<?=url("assets/js/jquery.validate.min.js")?>"></script>
    <script type="text/javascript" src="<?=url("assets/js/validate.pt-BR.js")?>"></script>
    <script type="text/javascript" src="<?=url("assets/js/cookie.min.js")?>"></script>
    <script type="text/javascript" src="<?=url("assets/js/toast.min.js")?>"></script>
    <script type="text/javascript" src="<?=url("assets/js/site.js").RAND_NUM?>"></script>
<?php } else { ?>
    <script type="text/javascript" src="<?=url("assets/site.min.js")?>"></script>
<?php } ?>
<script>
    window.onload = function()
    {
        $('.loading').fadeOut();
        $('html').css('overflow-y', 'auto');
    };
</script>