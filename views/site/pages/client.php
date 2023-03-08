<?php $this->layout("site::__treme", ['title' => $title]); ?>

<div class="contact">
    <form action="<?=url("addClient")?>" id="addClient" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Seu Nome:"/>
        <input type="email" name="email" placeholder="Seu E-mail:"/>
        <input type="text" name="fone" placeholder="Seu Telefone:"/>
        <input type="date" name="data_nascimento" placeholder="Sua Data de Nscimento:"/>
        <button type="submit">Enviar</button>
    </form>
</div>