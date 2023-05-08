
let link = $('#url_base').val();
let raiz = $('#raiz').val();

const url = (param = '') =>
{
    let ret = link;
    if(param !== '') ret += '/'+param;
    return ret;
}

const cPage = () =>
{
    let arr = window.location.pathname.split('/');
    if(arr[1] !== undefined)
    {
        return arr[1];
    }
    else
    {
        return 'home';
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

            switch(data.page)
            {
                case 'login':
                    if(data.config.logged)
                    {
                        localStorage.setItem("_customer", JSON.stringify(data.config._customer));
                        window.location.href = url('');
                    }
                    break;
            }
        }
    });
});

let App =
{

}

try { eval('App.'+cPage()+'()'); } catch(err){ console.log(err.message); }