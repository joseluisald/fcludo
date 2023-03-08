<?php $this->layout("site::__treme", ['title' => $title]); ?>

<div class="contact">
    <h2>Fale Conosco!</h2>
    <p>Lorem ipsum dorem met sit amet,consentur adpiscing elit.</p>

    <form action="<?=url("contact")?>" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Seu Nome:"/>
        <input type="email" name="email" placeholder="Seu E-mail:"/>
        <textarea name="message" placeholder="Mensagem:" rows="3"></textarea>
        <button>Enviar</button>
    </form>
</div>