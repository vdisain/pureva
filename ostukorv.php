<?php include 'layouts/partials/header.php'; ?>

<div class="container my-5">
    <div class="d-flex flex-column flex-lg-row">
        <div class="col-12 col-lg-8 me-0 me-lg-3 mb-3 mb-lg-0">
            <div class="d-flex flex-wrap justify-content-md-left">
                <h1 class="fs-4 mb-3 mb-md-3">Sinu ostukorv</h1>
            </div>
            <form>
                    <table class="products-table w-100">
                        <tbody>
                            <!-- loop starts-->
                            <?php for ($i = 0; $i < 4; $i++): ?>
                            <tr class="bg-white">
                                <td class="product-thumbnail">
                                    <a href="#">
                                        <img class="checkout-thumbnail" src="/images/single-product-image.png" width="98" alt="product-name">
                                    </a>
                                </td>
                                <td class="product-name">
                                    <a class="txt-black fw-500 fs-16 mb-2" href=""#>Jalgratta esituli RETRO 3xLED + COB, 2XAA</a>
                                    <div class="attributes">
                                        <span class="fs-14">Artikkel: IB_012074 / EAN: 8718026580292 8,80€ / tk</span>
                                    </div>
                                </td>
                                <td class="product-quantity">
                                    <div class="single-quantity-wrapper flex">
                                        <form class="flex">
                                            <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                                            <input type="number" id="number" value="1" />
                                            <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                        </form>
                                    </div>
                                </td>
                                <td class="product-remove">
                                    <a class="remove" href="#">
                                        <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 16.5C1 17.6 1.9 18.5 3 18.5H11C12.1 18.5 13 17.6 13 16.5V6.5C13 5.4 12.1 4.5 11 4.5H3C1.9 4.5 1 5.4 1 6.5V16.5ZM13 1.5H10.5L9.79 0.79C9.61 0.61 9.35 0.5 9.09 0.5H4.91C4.65 0.5 4.39 0.61 4.21 0.79L3.5 1.5H1C0.45 1.5 0 1.95 0 2.5C0 3.05 0.45 3.5 1 3.5H13C13.55 3.5 14 3.05 14 2.5C14 1.95 13.55 1.5 13 1.5Z" fill="#F46B6B"/>
                                        </svg>
                                    </a>
                                </td>
                                <td class="product-price">
                                    <div class="fs-20 fw-600">
                                        <span class="price-amount">
                                            <bdi>
                                                8,80
                                                <span class="currency">€</span>
                                            </bdi>
                                        </span>
                                    </div>
                                    <div class="fs-14 mx-2">
                                        <del>
                                            <span class="price-amount">
                                                <bdi>
                                                    12,40
                                                    <span class="currency">€</span>
                                                </bdi>
                                            </span>
                                        </del>
                                    </div>
                                </td>
                            </tr>
                            <?php endfor ?>
                            <!-- loop ends-->
                        </tbody>
                    </table>
            </form>
        </div>
        <div class="col-12 col-lg-4 mt-3 mt-lg-0">
            <div class="d-flex flex-wrap justify-content-md-left">
                <h2 class="fs-4 mb-4">Summa</h2>
            </div>
            <div class="bg-white pt-1 pt-lg-3 pb-3 pb-lg-4 px-3 px-lg-4 mt-1 mb-3 rounded-3">
                <table class="w-100 checkout-price-table">
                    <tbody>
                        <tr>
                            <th class="fs-14 fw-400">Summa ilma käibemaksuta</th>
                            <td class="fs-16 fw-400 text-end">
                                <span class="price-amount">
                                    <bdi>
                                        27,71
                                        <span class="currency">€</span>
                                    </bdi>
                                </span>
                            </td>
                        </tr>
                        <tr class="bb-grey">
                            <th class="fs-14 fw-400 pb-3 pb-lg-4">Käibemaks</th>
                            <td class="fs-14 fw-400 pb-3 pb-lg-4 text-end">
                                <span class="price-amount">
                                    <bdi>
                                        5,54
                                        <span class="currency">€</span>
                                    </bdi>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th class="price amount fs-18 fw-400 pt-3 pt-lg-4">Summa</th>
                            <td class="fs-18 fw-600 pt-3 pt-lg-4 text-end">
                                <span class="price-amount">
                                        <bdi>
                                            33,25
                                            <span class="currency">€</span>
                                        </bdi>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="mt-2 mt-lg-4 ">
                    <a href="#" class="btn btn-primary bg-blue py-2 px-5">Vormista ost</a> 
                </div>   
            </div>
            <div class="bg-white p-3 p-lg-4 rounded-3">
                <p class="fs-14 mb-0"><a class="login color-blue" href="#" target="_blank">Logi sisse</a>, et saada püsikliendi soodustust. Kui sul ei ole kasutajat, siis <a class="register color-blue" href="#" target="_blank">registreeru siin</a></p>
            </div>
        </div>

    </div>
    

</div>



<?php include 'layouts/partials/footer.php' ?> 

