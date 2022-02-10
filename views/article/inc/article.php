<div class="col mb-5">
    <div class="card h-100">
        <!-- Nouveau badge-->
        <?php
        if(!empty($oArticle->new)):
        ?>
        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Nouveau</div>
        <?php
        endif;
        ?>
        <!-- Product image-->
        <img class="card-img-top" src="<?php echo $oArticle->picture; ?>" alt="<?php echo $oArticle->title; ?>" />
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder"><?php echo $oArticle->title; ?></h5>
                <!-- Product reviews-->
                <?php
                if($oArticle->rate>0):
                ?>
                <div class="d-flex justify-content-center small text-warning mb-2">
                    <?php
                    for($i=1 ; $i<=$oArticle->rate; $i++):
                    ?>
                    <div class="bi-star-fill"></div>
                    <?php
                    endfor;
                    ?>
                    <?php
                    for($i=1 ; $i<= 5-$oArticle->rate; $i++):
                    ?>
                    <div class="bi-star"></div>
                    <?php
                    endfor;
                    ?>
                </div>
                <?php
                endif;
                ?>
                <!-- Product price-->
                <?php 
                if(!empty($oArticle->priceCrossedOut)):
                ?>
                <span class="text-muted text-decoration-line-through"><?php echo $oArticle->priceCrossedOut; ?>€</span>
                <?php
                endif;
                ?>
                <?php echo $oArticle->priceVat(); ?>€
            </div>
        </div>
        <!-- Product actions-->
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">En savoir plus</a></div>
        </div>
    </div>
</div>