let link = $('#url_base').val();
let raiz = $('#raiz').val();

const url = (param = '') =>
{
    let ret = link+'/manager';
    if(param !== '') ret += '/'+param;
    return ret;
}

const go = (param) =>
{
    window.location.href = url(param);
}

const cPage = () =>
{
    let arr = window.location.pathname.split('/');
    if(arr[1] === "manager" && arr[2] !== undefined)
    {
        return arr[2];
    }
    else
    {
        return 'manager';
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

const menuSidebar = _ =>
{
    let sidebarStore = localStorage.getItem("sidebar");
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++)
    {
        arrow[i].addEventListener("click", (e)=>
        {
            let arrowParent = e.target.parentElement.parentElement;
            arrowParent.classList.toggle("showMenu");
        });
    }

    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");

    if(sidebarStore === "close") sidebar.classList.add("close");
    else sidebar.classList.remove("close");

    sidebarBtn.addEventListener("click", ()=>
    {
        // sidebar.classList.toggle("close");
        if(sidebar.classList.contains('close'))
        {
            sidebar.classList.remove("close");
            localStorage.setItem("sidebar", 'open');
        }
        else
        {
            sidebar.classList.add("close");
            localStorage.setItem("sidebar", 'close');
        }
    });
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
            
            new Toast(data.title, data.text, data.type);
            
            if(data.config.reset)
                form.reset();

            switch(data.page)
            {
                case 'login':
                    localStorage.setItem("_user", JSON.stringify(data.config._user));
                    window.location.href = url('dashboard');
                    break;
                case 'usuarios':
                    if(data.config.action == 'edit')
                    {
                        $('.avatarUser').attr('src', link+'/'+data.config.postData.file);
                    }
                    ajax_load('close');
                    break;
                default:
                    ajax_load('close');
                    break;
            }
        }
    });
});

let App =
{
    init: () =>
    {
        if(cPage() !== "manager")
        {
            menuSidebar();
        }
    },

    manager: () =>
    {
        $('.login-form .row-input .input').on('focus', e =>
        {
            $(e.target).parent().addClass('focus');
            $(e.target).parent().find('i').addClass('focus');
        });

        $('.login-form .row-input .input').on('blur', e =>
        {
            $(e.target).parent().removeClass('focus');
            $(e.target).parent().find('i').removeClass('focus');
        });
    },

    dashboard: () =>
    {},

    usuarios: () =>
    {
    },

    menssagens: () =>
    {
        const paginator = page =>
        {
            $.ajax(
                {
                    type: 'POST',
                    url: url('menssagens/getMessagesAjax'),
                    data: {page},
                    dataType: "json",
                    beforeSend: function(load)
                    {
                        ajax_load('open');
                    },
                    success: function(data)
                    {
                        let html = '';
                        $.each(data.messages, function(index, item)
                        {
                            html += '<tr data-id="'+item.id+'" class="clicable">';
                            html += '<td>'+item.id+'</td>';
                            html += '<td>'+item.name+'</td>';
                            html += '<td>'+item.email+'</td>';
                            html += '</tr>';
                        });

                        ajax_load('close');

                        $('.showMessages').html(html);
                        $('.div_paginator').html(data.paginator);
                        $('.span_page').text(data.page);
                        $('.span_pages').text(data.pages);
                        $('.span_count').text(data.count);
                    }
                });
        }

        paginator(1);

        $(document).on('click', 'nav.paginator .paginator_item', function(e)
        {
            e.preventDefault();
            paginator($(this).attr('href').split('=')[1]);
        });

        $(document).on('click', '.clicable', function (e)
        {
            e.preventDefault();
            let id = $(this).data('id');
            let messageName = $('#messageName');
            let messageEmail =  $('#messageEmail');
            let messagePhone = $('#messagePhone');
            let messageMessage = $('#messageMessage');
            let messageData = $('#messageData');

            $.ajax(
                {
                    type: 'POST',
                    url: url('menssagens/readMessage'),
                    data: {id},
                    dataType: "json",
                    beforeSend: function(load)
                    {
                        ajax_load('open');
                        messageName.text('');
                        messageEmail.text('');
                        messagePhone.text('');
                        messageMessage.text('');
                        messageData.text('');
                    },
                    success: function(data)
                    {
                        ajax_load('close');

                        messageName.text(data.name);
                        messageEmail.text(data.email);
                        messagePhone.text(data.phone);
                        messageMessage.text(data.message);
                        messageData.text(data.created_at);
                    }
                });
        });
    },

    delete: (id, controller) =>
    {
        $.ajax(
        {
            type: 'POST',
            url: url(controller+'/delete'),
            data: {id},
            dataType: "json",
            beforeSend: function(load)
            {
                ajax_load('open');
            },
            success: function(data)
            {
                new Toast(data.title, data.text, data.type);
                ajax_load('close');
                $('tr[data-id="'+id+'"]').remove();
            }
        });
    }
}

App.init();
dd(cPage());
dd(url());

try { eval('App.'+cPage()+'()'); } catch(err){ console.log(err.message); }