<?php include 'layouts/partials/header.php'; ?>

<div class="single-product-container bg-white">

<?php include 'layouts/partials/breadcrumbs.php'; ?>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-product-images">
                                <div class="text-center"> 
                                    <img class="mw-100" id="main-image" src="/images/single-product-image.png" width="500" /> 
                                </div>
                                <ul class="d-flex single-product-thumbnails list-unstyled mb-5 mb-md-0">
                                    <li class="me-2">
                                        <img onclick="change_image(this)" src="/images/Presstangid.png" width="100"> 
                                    </li>
                                    <li class="me-2">
                                        <img onclick="change_image(this)" src="/images/single-product-image.png" width="100"> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-product-content">
                                <h1 class="fs-4 lh-base mb-3 mb-md-4">Jalgratta esituli RETRO 3xLED + COB, 2XAA</h1>
                                <p class="mb-3 mb-md-4">
                                    3 tööreziimi: põleb-plingib-välja lülitatud / Toide: 2xAA (sisalduvad komplektis) / Ava lambi korpus, sisesta patareid sahtlisse (jälgi polaarsust!)
                                </p>
                                <div class="attributes d-flex flex-column">
                                    <?php for ($i = 0; $i < 3; $i++): ?>
                                        <span class="attribute-container">
                                            <span class="label fw-bold">Artikkel: </span>
                                            <span class="attribute-content">IB_012074</span>
                                        </span>
                                    <?php endfor ?>
                                </div>
                                <div class="single-mobile-price-wrapper">
                                    <div class="flex mt-3 align-items-center">
                                        <div class="single-price-wrapper me-4">
                                            <p class="mb-1">Hind püsikliendile</p>
                                            <div class="d-flex align-items-center flex-row ">
                                                <div class="fs-24 fw-600">
                                                    <span class="price-amount">
                                                        <bdi>
                                                            8,80
                                                            <span class="currency">€</span>
                                                        </bdi>
                                                    </span>
                                                </div>
                                                <div class="fs-18 mx-2">
                                                    <del>
                                                        <span class="price-amount">
                                                            <bdi>
                                                                12,40
                                                                <span class="currency">€</span>
                                                            </bdi>
                                                        </span>
                                                    <del>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="single-quantity-wrapper">
                                            <form class="flex">
                                                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                                                <input type="number" id="number" value="1" />
                                                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="cart mt-4 align-items-center d-md-inline-block"> 
                                        <button class="btn btn-primary bg-blue py-3 px-5" type="submit" name="add-to-cart" value="" onclick="toggleCart()">Lisa korvi</button> 
                                    </div>
                                </div>    
                                <div class="bg-grey mt-4 mt-md-5 mb-5 px-4 py-4">
                                    <h5 class="fs-16 mb-3">Transport</h5>
                                    <p class="fs-14 mb-2">Itella SmartPOST pakiautomaat<span class="fs-16 ms-1">3,5€</span></p>
                                    <p class="fs-14 mb-2">Omniva pakiautomaat<span class="fs-16 ms-1">3,5€</span></p>
                                    <p class="fs-14 mb-2">OSC kuller<span class="fs-16 ms-1">4,8€</span></p>
                                    <p class="fs-14 mb-2">Pureva OÜ transport<span class="fs-16 ms-1">4,8€</span></p>
                                    <p class="fs-14 mb-0">Väljastuspunkt<span class="fs-16 ms-1">0€</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'layouts/partials/related-products.php'; ?>

<?php include 'layouts/partials/added-to-cart.php'; ?>

<?php include 'layouts/partials/footer.php' ?> 

