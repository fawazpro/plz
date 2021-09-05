
<?php
function valid($txt){
    if(empty($txt)){
        return 'N/A';
    }else{
        return $txt;
    }
}


function price(int $pri)
{
    $len =  mb_strlen($pri);
    if ($len == 4) {
        $end = substr($pri, -3);
        $first = substr($pri, 0, 1);
        return $first . ',' . $end;
    } elseif ($len == 3) {
        return $pri;
    } elseif ($len == 2) {
        return $pri;
    } elseif ($len == 1) {
        return $pri;
    } elseif ($len == 5) {
        $end = substr($pri, -3);
        $first = substr($pri, 0, 2);
        return $first . ',' . $end;
    } elseif ($len == 6) {
        $end = substr($pri, -3);
        $first = substr($pri, 0, 3);
        return $first . ',' . $end;
    } elseif ($len == 7) {
        $end = substr($pri, -3);
        $mid = substr($pri, -6, 3);
        $first = substr($pri, 0, 1);
        return $first . ',' . $mid . ',' . $end;
    } elseif ($len == 8) {
        $end = substr($pri, -3);
        $mid = substr($pri, -6, 3);
        $first = substr($pri, 0, 2);
        return $first . ',' . $mid . ',' . $end;
    } elseif ($len == 9) {
        $end = substr($pri, -3);
        $mid = substr($pri, -6, 3);
        $first = substr($pri, 0, 3);
        return $first . ',' . $mid . ',' . $end;
    }
}
?>
<div class="sc-cqCuEk kfJFNP">
    <div class="sc-dymIpo sc-CtfFt hshmPC"></div>
    <div height="0" class="sc-rBLzX lbfaIb">
        <div class="sc-bMvGRv grCyZj"></div>
    </div><a target="_blank" rel="noopener noreferrer" href="" class="sc-cvbbAY fLfoIS">
        <div class="sc-fOKMvo dNFlZi">
            <div class="sc-hzDkRC btiQLk css-x9zcw6" style="opacity: 0.2;"></div>
            <div class="sc-dUjcNx jWwUgV"></div>
        </div>
    </a>
    <div class="sc-drMfKT VhNRA">
        <div class="sc-fgfRvd eDMjsG">
            <div class="sc-hIVACf jsbDhJ">
                <div class="logo-name"><img class="logo" src="<?=$pool['image_url']?>" alt="logo">
                    <div class="name-and-links">
                        <div class="name-logo">
                            <h2><?=$pool['name']?></h2>
                        </div>
                        <div class="social-links"><a href=<?=$pool['url']?>"><?=$pool['url']?></a></div>
                    </div>
                    <div class="btn-block"><a onclick="toggle1()" class="sc-kEYyzF sc-gpHHfC jjTphu"><span>Join
                                Whitelist</span></a></div>
                </div>
                <div class="sc-gVyKpa dRqDnJ">
                    <h3 class="overview">Project Overview</h3>
                    <div class="description"><?=$pool['description']?></div>
                    <h3 class="overview">Pool Details</h3>
                    <div class="information">
                        <p>Pool Information</p>
                        <div class="table">
                            <!-- <div>
                                <hr>
                                <div class="css-vurnku">Min. Allocation<span>minimum ERC</span></div>
                            </div> -->
                            <div>
                                <hr>
                                <div class="css-vurnku">Access Type<span><?=$pool['access_type']?></span></div>
                            </div>
                            <div>
                                <hr>
                                <div class="css-vurnku">Token Distribution<span><?=valid($pool['token_distrib'])?></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="information">
                        <p>Token Information</p>
                        <div class="table">
                            <div>
                                <hr>
                                <div class="css-vurnku">Symbols<span><?=valid($pool['symbol'])?></span></div>
                            </div>
                            <div>
                                <hr>
                                <div class="css-vurnku">Token Price<span><?=empty($pool['token_price'])? 'N/A' : '$'.$pool['token_price']?></span></div>
                            </div>
                            <div>
                                <hr>
                                <div class="css-vurnku">Total Supply<span><?=valid(price($pool['total_supply']))?></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sc-eXNvrr ihPGuK">
                <?php if($pool['status'] == 'filled'): ?>
                <h3 class="sale-starts-in">Sale Has Ended</h3>
                <?php elseif($pool['status'] == 'upcoming'): ?>
                <h3 class="sale-starts-in">Sales Starts in <br> <?=rand(1,19)?> <br> days</h3>
                <?php endif; ?>
                <div class="sc-cpmKsF iZxBap">
                    <div>
                        <p>Swap Ratio</p>
                        <h4>1 ETH = <?= empty($pool['swap_rate']) ? 'TBA' : $pool['swap_rate']?></h4>
                    </div>
                </div><button onclick="toggle1()" class="sc-kEYyzF sc-gPzReC jGlXEG"><span>Connect Wallet</span></button>
                <div class="css-1436xfi">Progress</div><progress class="sc-kQsIoO iCjQwl multi-progress" value="<?=empty($pool['progress'])? '100' : $pool['progress']?>" max="100"></progress>
            </div>
        </div>
    </div>
</div>