var body = document.getElementsByTagName("body")[0];
body.insertAdjacentHTML(
    "beforeend",
    '<div class="toast"> <div class="toast-content"> <span class="icon"></i></span> <div class="message"> <span class="text text-1"></span> <span class="text text-2"></span> </div></div><i class="fa-solid fa-xmark close"></i> <div class="progress"></div></div>'
);

const toast = document.querySelector('.toast');
const closeIcon = document.querySelector('.close');
const progress = document.querySelector('.progress');
const title = document.querySelector('.text-1');
const msg = document.querySelector('.text-2');
const icon = document.querySelector('.icon');

class Toast
{
    constructor(title, msg, type)
    {
        this.title = title;
        this.msg = msg;
        this.type = type;
        this.show();
    }

    show()
    {
        switch(this.type)
        {
            case 'success': icon.innerHTML = '<i class="fa-solid fa-check check">'; break;
            case 'warning': icon.innerHTML = '<i class="fa-solid fa-exclamation check"></i>'; break;
            case 'info': icon.innerHTML = '<i class="fa-solid fa-info check"></i>'; break;
            case 'error': icon.innerHTML = '<i class="fa-solid fa-xmark check"></i>'; break;
        }

        toast.classList.add(this.type);
        title.innerHTML = this.title;
        msg.innerHTML = this.msg;

        toast.classList.add('active');
        progress.classList.add('active');

        setTimeout(() => {
            toast.classList.remove('active');
            toast.classList.remove(this.type);
            icon.innerHTML = '';
        }, 5000);

        setTimeout(() => {
            progress.classList.remove('active');
        }, 5300);
    }
}

closeIcon.addEventListener('click', () =>
{
    toast.classList.remove('active');
    setTimeout(() => {
        progress.classList.remove('active');
    }, 300);
});