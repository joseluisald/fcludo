<script type="text/javascript" src="<?=url("assets/js/jquery.js")?>"></script>

<script>

    let LINK = $('#url_base').val();


    $('#addClient').on('submit', function (e) {
        e.preventDefault();
        let form = $(this)[0];
        let formData = new FormData(form);
        $.ajax(
            {
                type: "POST",
                url: LINK+"/addClient",
                data: formData,
                dataType: "json",
                processData: false,
                cache: false,
                contentType: false,
            })
            .done(function(data)
            {
                console.log(data);
            });
    });
</script>