
const url = (param) =>
{
    let link = $('#url_base').val();
    return link+param;
}

const cPage = () =>
{
    let raiz = $('#raiz').val();
    let arr = window.location.pathname.split('/');
    if(arr[1] === raiz && arr[2] !== undefined)
    {
        return arr[2];
    }
    else
    {
        return false;
    }
}

const dd = (param) =>
{
    return console.log(param);
}

const ajax_load = (action) =>
{
    let loading = $('.loading');

    if(action == 'open')
    {
        loading.fadeIn(200);
    }

    if(action == 'close')
    {
        loading.fadeOut(200);
    }
}


$('.form').on('submit', function (e)
{
    e.preventDefault();
    let form = $(this)[0];
    let formData = new FormData(form);
    // $('.loading').show();
    $.ajax(
    {
        type: form.method,
        url: form.action,
        data: formData,
        dataType: "json",
        processData: false,
        cache: false,
        contentType: false,
        beforeSend: function(load)
        {
            ajax_load('open');
        },
        success: function(data)
        {
            ajax_load('close');
            new Toast(data.title, data.text, data.type);
            if(data.config.reset)
                form.reset();
        }
    });
});

let App =
{

}

try { eval('App.'+cPage()+'()'); } catch(err){ console.log(err.message); }