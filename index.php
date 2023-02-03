
    <?php include 'layouts/partials/header.php' ?> 
    
    <main style=" padding-top: 36px">
        <div class="container">
            <div class= "slider">
                <button type="button" class="slider__arrow slider__arrow--left" aria-label="eelmine">
                    <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.6201 1.01813C10.1301 0.528135 9.34006 0.528135 8.85006 1.01813L0.540059 9.32813C0.150059 9.71813 0.150059 10.3481 0.540059 10.7381L8.85006 19.0481C9.34006 19.5381 10.1301 19.5381 10.6201 19.0481C11.1101 18.5581 11.1101 17.7681 10.6201 17.2781L3.38006 10.0281L10.6301 2.77813C11.1101 2.29813 11.1101 1.49813 10.6201 1.01813Z" fill="#121A23"/>
                    </svg>
                </button>

                <div class="slider__header">
                    <div class="slider__title">
                        Muruniiduk XTLINE
                    </div>
                    <div class="slider__subtitle">
                        36V 45mm
                    </div>
                    <div class="slider__flag">
                        <svg width="130" height="133" viewBox="0 0 130 133" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M128.989 130.836C128.989 132.004 127.713 132.724 126.713 132.12L66.2989 95.6093C65.5038 95.1288 64.5079 95.1288 63.7128 95.6093L3.29874 132.12C2.29904 132.724 1.0229 132.004 1.0229 130.836V2.86029C1.0229 2.03186 1.69448 1.36029 2.5229 1.36029H127.489C128.317 1.36029 128.989 2.03186 128.989 2.86029V130.836Z" fill="#FFEB3C" stroke="#F9F9F9"/>
                        </svg>
                        <p>365€</p>
                    </div>
                </div>

                <picture class="slider__image">
                    <source srcset="/images/lawnmotor.png" type="image/png" >
                    <img class="img-fluid" src="/images/lawnmotor.png" alt="" >
                </picture>

                <div class="slider__description">
                    <p>Tasuta transport alates 100€ ostust</p>
                    <p>14-päevane tagastusõigus</p>
                    <button class="btn--slider"> Vaata lähemalt</button>
                </div>

                <button type="button" class="slider__arrow slider__arrow--right" aria-label="järgmine">
                    <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.379941 1.01813C0.869941 0.528135 1.65994 0.528135 2.14994 1.01813L10.4599 9.32813C10.8499 9.71813 10.8499 10.3481 10.4599 10.7381L2.14994 19.0481C1.65994 19.5381 0.869941 19.5381 0.379941 19.0481C-0.110059 18.5581 -0.110059 17.7681 0.379941 17.2781L7.61994 10.0281L0.369943 2.77813C-0.110057 2.29813 -0.110059 1.49813 0.379941 1.01813Z" fill="#121A23"/>
                    </svg>
                </button>         
            </div>
        </div>  

<?php
$state = 'saabumas';
$states = [
    'saabumas',
    'laos',
    'tellimisel',
];

?>

        <div class="container products">
            <?php for ($i = 0; $i < 4; $i++): ?>
                <?php $state = $states[rand(0,2)]; ?>
                <?php include 'layouts/partials/product-card.php' ?>
            <?php endfor ?>
        </div>
        <h2 style="display:flex; justify-content:center" class="mb-40">
            Parimad pakkumised
        </h2>
        <div class="container products">
            <?php for ($i = 0; $i < 16; $i++): ?>
                <?php include 'layouts/partials/product-card.php' ?>
            <?php endfor ?>
        </div>
    </main>
    <?php include 'layouts/partials/footer.php' ?> 

    