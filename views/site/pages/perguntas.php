<?php $this->layout("site::__treme", ['title' => $title]); ?>

<div class="default faq">
    <main class="container">
        <div class="row title justify-content-center">
            <div class="col col-xxl-9">
                <h1>Perguntas Frequentes</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="row mt-4 justify-content-center">
            <div class="col col-xxl-8">
                <div class="accordion" id="faq">
                    <?php
                        if($faqs):
                            foreach($faqs as $faq): ?>
                                <div class="accordion-item">
                                  <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><?=$faq->ask?></button></h2>
                                  <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faq">
                                    <div class="accordion-body">
                                        <p><?=$faq->answer?></p>
                                    </div>
                                  </div>
                                </div>
                    <?php
                            endforeach;
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </main>
</div>