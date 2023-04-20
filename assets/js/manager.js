const url = (param) =>
{
    let link = $('#url_base').val();
    return link+'/manager'+param;
}

const cPage = () =>
{
    let raiz = $('#raiz').val();
    let arr = window.location.pathname.split('/');
    if(arr[1] === raiz && arr[2] === "manager" && arr[3] !== undefined)
    {
        return arr[3];
    }
    else if(arr[1] === raiz && arr[2] === "manager")
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

            switch(data.page)
            {
                case 'login':
                    window.location.href = url('/dashboard');
                    localStorage.setItem("_user", data.config._user);
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

    dashboard: () =>
    {}
}

App.init();
try { eval('App.'+cPage()+'()'); } catch(err){ console.log(err.message); }