<?php
function wallet($type)
{
    if($type == 'bsc'){
        return "<div class='circle bnb-circle'><img src='static/bnb-mini.922331bb.svg' alt='BNB' class='sc-iBEsjs cvOhkp'>
        </div>";
    }else if($type == 'eth'){
        return "<div class='circle eth-circle'><img src='static/eth-mini.776ee31a.svg' class='sc-iBEsjs cvOhkp'>
        </div>";
    }else if($type == 'avac'){
        return "<div class='circle eth-circle'><img src='static/avax.07f5a96b.svg' class='sc-iBEsjs cvOhkp'>
        </div>";
    }else if($type == 'heco'){
        return "<div class='circle eth-circle'><img src='static/heco.a7c16745.svg' class='sc-iBEsjs cvOhkp'>
        </div>";
    }else if($type == 'poly'){
        return "<div class='circle eth-circle'><img src='static/polygon-matic.f7ae94e9.svg' class='sc-iBEsjs cvOhkp'>
        </div>";
    }else{
        return "<div class='circle bnb-circle'><img src='static/bnb-mini.922331bb.svg' alt='BNB' class='sc-iBEsjs cvOhkp'>
        </div>";    }
}

function valid($txt){
    if(empty($txt)){
        return 'N/A';
    }else{
        return $txt;
    }
}
?>
<div class="sc-iqzUVk cnKuKH">
    <div class="sc-jzgbtB sc-TFwJa hcZfvv"></div>
    <div height="0" class="sc-hGoxap dTmcGq">
        <div class="sc-fjmCvl bPKBwu"></div>
    </div><a target="_blank" rel="noopener noreferrer" href="" class="sc-cvbbAY fLfoIS">
        <div class="sc-eerKOB gywZno">
            <div class="sc-hzDkRC btiQLk css-x9zcw6" style="opacity: 0.2;"></div>
            <div class="sc-emmjRN bGMyaQ"></div>
        </div>
    </a>
    <div class="sc-jXQZqI cbZFog">
        <div class="sc-iGPElx YtfVO">
            <div class="sc-kasBVs hmjdAf">
                <div class="sc-hgHYgh iOZflk">
                    <h2>Decentralized Fundraising and <br> Cross-Chain Token Launchpad</h2>
                    <p>Propel your DeFi project, attract the right investors and community, and unravel
                        the power of DeFi.</p>
                </div>
                <div class="sc-eInJlc bBbkSL"><a href="/leaderboard"><img src="static/card1.96f00e33.png" alt="card"></a><img src="static/card2.3c53b69d.png" alt="card"><a href="/lock-poolz"><img src="static/card3.836cdb00.png" alt="card"></a></div>
                <div class="sc-gtfDJT lnJGIn"><img src="static/eth.c688355b.svg" alt="Eth"><img src="static/bnb.1e939ade.svg" alt="Bnb"><img src="static/heco.a7c16745.svg" alt="heco"><img src="static/tmc.100ea237.svg" alt="Tmc"><img src="static/polygon-matic.f7ae94e9.svg" alt="PolygonMatic"><img src="static/avax.07f5a96b.svg" alt="Avax"><img src="static/union.b42c8ef1.svg" alt="Moonbeam"></div>
            </div>
        </div>
    </div>
    <div class="sc-bEjcJn UrMFb">
        <div class="sc-jeCdPy fRkJYM">
            <div class="sc-jtRlXQ cyFDuo">
                
                <h3>Upcoming Pools</h3>
            </div>
            <div>
                <div class="sc-etwtAo kxvROQ">
                    <div class="css-4cffwv">
                        <div class="slick-slider slider-variable-width slick-initialized" dir="ltr">
                        <div class="slick-li" style="display: flex; flex-wrap: wrap;">
                                <!-- <div class="slick-track" id="recent-pools" style="width: 24728px; opacity: 1; transform: translate3d(0px, 0px, 0px);"> -->
                                <?php foreach ($upcomingPools as $key => $pool):?>
                                    <div data-index="<?=$key?>" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none;">
                                        <div><a href="<?= base_url('about?id='.$pool['id']) ?>">
                                                <div class="sc-chPdSV sc-fcdeBU gsnVdX">
                                                    <div class="card">
                                                        <div class="sc-gmeYpB bvgmHo"><img src="<?=$pool['image_url']?>" class="sc-kZmsYB djCVuG"></div>
                                                        <div class="sc-gmeYpB bvgmHo">
                                                            <p class="sc-RcBXQ bnxkKh"><?=$pool['name']?></p>
                                                        </div>
                                                        <div class="sc-gmeYpB bvgmHo">
                                                            <div class="sc-iSDuPN dudPXR"><span color="#D66464" class="sc-LKuAh koOFuX"></span><span class="time-text">in <?=rand(1,19)?> days</span>
                                                                <div class="sc-hzNEM jPtNYJ">
                                                                    <?=wallet($pool['wallet'])?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sc-fZwumE bPayLk">
                                                            <div>
                                                                <p>Total Raise</p>
                                                                <h4><?=$pool['total_raise']?></h4>
                                                            </div>
                                                            <div>
                                                                <p>Max Allocation</p>
                                                                <h4>TBA</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a></div>
                                    </div>
                                <?php endforeach;?>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sc-jtRlXQ cyFDuo">
                <h3>Recent Pools</h3>
            </div>
            <div>
                <div class="sc-etwtAo kxvROQ">
                    <div class="css-4cffwv">
                        <div class="slick-slider slider-variable-width slick-initialized" dir="ltr">
                            <div class="slick-li" style="display: flex; flex-wrap: wrap;">
                                <!-- <div class="slick-track" id="recent-pools" style="width: 24728px; opacity: 1; transform: translate3d(0px, 0px, 0px);"> -->
                                <?php foreach ($filledPools as $key => $pool):?>
                                    <div data-index="2" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none;">
                                        <div><a href="<?= base_url('about?id='.$pool['id']) ?>">
                                                <div class="sc-chPdSV sc-fcdeBU gsnVdX">
                                                    <div class="card">
                                                        <div class="sc-gmeYpB bvgmHo"><img src="<?=$pool['image_url']?>" class="sc-kZmsYB djCVuG"></div>
                                                        <div class="sc-gmeYpB bvgmHo">
                                                            <p class="sc-RcBXQ bnxkKh"><?=$pool['name']?>
                                                            </p>
                                                        </div>
                                                        <div class="sc-gmeYpB bvgmHo">
                                                            <div class="sc-iSDuPN dudPXR"><span color="#57AE4F" class="sc-LKuAh iYQzuh"></span><span class="time-text">Filled</span>
                                                                <div class="sc-hzNEM jPtNYJ">
                                                                    <?=wallet($pool['image_url'])?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="css-1436xfi">Progress</div><progress class="sc-kxynE cXxBqB multi-progress" value="<?=empty($pool['progress'])? '100' : $pool['progress']?>" max="100"></progress>
                                                        <div class="sc-fZwumE bPayLk">
                                                            <div>
                                                                <p>Total Raise</p>
                                                                <h4><?=$pool['total_raise']?></h4>
                                                            </div>
                                                            <div>
                                                                <p>Participants</p>
                                                                <h4><?=valid($pool['participants'])?></h4>
                                                            </div>
                                                            <div>
                                                                <p>Max BNB</p>
                                                                <h4><?=valid($pool['max_bnb'])?></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a></div>
                                    </div>
                                <?php endforeach; ?>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>