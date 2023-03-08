<?php $this->layout("site::__treme", ['title' => $title]); ?>

<div class="users">
        <?php
            if($users) :
                foreach ($users as $user) :
                    ?>
                        <article class="users_user">
                            <h3><?=$user->name?></h3>
                        </article>
                    <?php
                endforeach;
            else :
                ?>
                    <h1>Não existem usuários cadastrados</h1>
                <?php
            endif;
        ?>
</div>