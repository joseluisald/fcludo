<?php $this->layout("site::__treme", ['title' => $title]); ?>

<div class="project">
    <main class="container">
        <div class="row py-5">
            <div class="col">
                <h1 class="text-center">Hokusai</h1>
                <h2 class="text-center">Seja um aprendiz da tradicional arte Ukiyo-e em Hokusai - um jogo de color building!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-8">
                <div class="video">
                    <img src="<?=url('assets/images/video-cover.jpg')?>">
                    <i class="fa-sharp fa-solid fa-play"></i>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="infos">
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-label="Success example" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="price">
                        <h3><small>R$</small> 128.557<small>,59</small></h3>
                        <p>da meta de R$ 200.000,00</p>
                        <span>51%</span>
                    </div>
                    <div class="type">
                        <span class="flex">
                            <img src="<?=url('assets/images/icon-flex.svg')?>">
                            <b>Campanha Flex</b>
                        </span>
                    </div>
                    <div class="amount d-flex">
                        <div class="flex-fill">
                            <b>24</b><small>dias restantes</small>
                        </div>
                        <div class="flex-fill">
                            <b>804</b><small>apoiadores</small>
                        </div>
                    </div>
                    <div class="actions d-flex flex-column">
                        <div>
                            <a href="recompensas.html"><button class="backer">Apoiar este projeto</button></a>
                        </div>
                        <div class="d-flex">
                            <a href="javascript:;"><button class="warn"><i class="fa-regular fa-bookmark"></i> Lembre-me</button></a>
                            <span class="final">Você poderá apoiar este projeto até o dia 30/03/2023 às 23:59.</span>
                        </div>
                        <div class="share d-flex">
                            <span>Ajude divulgando:</span>
                            <a title="Whatsapp" href=""><i class="fa-brands fa-whatsapp"></i></a>
                            <a title="Facebook" href=""><i class="fa-brands fa-facebook"></i></a>
                            <a title="Messenger" href=""><i class="fa-brands fa-facebook-messenger"></i></a>
                            <a title="Twitter" href=""><i class="fa-brands fa-twitter"></i></a>
                            <a title="Copiar link" href=""><i class="fa-solid fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5 extrainfos">
            <div class="col col-xl-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="col col-xl-4">
                <div class="author d-flex">
                    <div class="author-photo">
                        <img src="<?=url('assets/images/profile.jpg')?>">
                    </div>
                    <span class="flex-column">
                        <div class="author-infos">
                            <h4>Ludens Spirit</h4>
                            <h5>8 criados | 34 apoiados</h5>
                        </div>
                        <div class="author-social">
                            <a title="Facebook" href=""><i class="fa-brands fa-facebook"></i></a>
                            <a title="Messenger" href=""><i class="fa-brands fa-facebook-messenger"></i></a>
                            <a title="Twitter" href=""><i class="fa-brands fa-twitter"></i></a>
                            <a title="Site" href=""><i class="fa-solid fa-globe"></i></a>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </main>
    <div class="bgfff linegray">
        <div class="container">
            <ul class="nav d-flex flex-row">
                <li><a class="on" href="">Campanha </a></li>
                <li><a href="">Novidades <small>8</small></a></li>
                <li><a href="">Apoiadores <small>24</small></a></li>
            </ul>
        </div>
    </div>
    <div class="bgfff">
        <div class="container content">
            <div class="row">
                <div class="col col-xl-8">
                    <img src="<?=url('assets/images/content-1.jpg')?>">
                </div>
                <div class="col col-xl-4">
                    <ul class="rewards">
                        <li class="d-flex flex-column">
                            <h5>Para R$ 269 ou mais</h5>
                            <h4>Hokusai - Jogo Base</h4>
                            <img src="<?=url('assets/images/reward-1.jpg')?>">
                            <p>Apoie e receba o jogo Hokusai Boardgame com todas as metas estendidas conquistadas no financiamento coletivo.</p>
                            <p class="delivery">Entrega prevista:</p>
                            <p class="date">jun/2022</p>
                            <span class="d-flex">
                                <i class="fa-solid fa-minus"></i>
                                <input type="text" name="amount" value="1">
                                <i class="fa-solid fa-plus"></i>
                                <b>R$ 269,00</b>
                                <button>Apoiar</button>
                            </span>
                            <div class="d-flex nums">
                                <i class="bakers">289 apoios</i>
                                <i class="limit">ilimitado</i>
                            </div>
                        </li>
                        <li class="d-flex flex-column">
                            <h5>Para R$ 269 ou mais</h5>
                            <h4>Hokusai - Jogo Base</h4>
                            <img src="<?=url('assets/images/reward-2.jpg')?>">
                            <p>Apoie e receba o jogo Hokusai Boardgame com todas as metas estendidas conquistadas no financiamento coletivo.</p>
                            <p class="delivery">Entrega prevista:</p>
                            <p class="date">jun/2022</p>
                            <span class="d-flex">
                                <i class="fa-solid fa-minus"></i>
                                <input type="text" name="amount" value="1">
                                <i class="fa-solid fa-plus"></i>
                                <b>R$ 269,00</b>
                                <button>Apoiar</button>
                            </span>
                            <div class="d-flex nums">
                                <i class="bakers">289 apoios</i>
                                <i class="limit">ilimitado</i>
                            </div>
                        </li>
                        <li class="d-flex flex-column">
                            <h5>Para R$ 269 ou mais</h5>
                            <h4>Hokusai - Jogo Base</h4>
                            <img src="<?=url('assets/images/reward-3.jpg')?>">
                            <p>Apoie e receba o jogo Hokusai Boardgame com todas as metas estendidas conquistadas no financiamento coletivo.</p>
                            <p class="delivery">Entrega prevista:</p>
                            <p class="date">jun/2022</p>
                            <span class="d-flex">
                                <i class="fa-solid fa-minus"></i>
                                <input type="text" name="amount" value="1">
                                <i class="fa-solid fa-plus"></i>
                                <b>R$ 269,00</b>
                                <button>Apoiar</button>
                            </span>
                            <div class="d-flex nums">
                                <i class="bakers">289 apoios</i>
                                <i class="limit">ilimitado</i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>