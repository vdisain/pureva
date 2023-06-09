<div class="sidecart bg-white text-center">
    <div class="nav flex-column">
        <div class="bg-light-blue position-relative m-0 px-4 pt-66 pb-4 pb-md-5 text-center">
            <a href="#" class="position-absolute top-25 right-25" onclick="toggleCart()" >
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.3002 0.709971C12.9102 0.319971 12.2802 0.319971 11.8902 0.709971L7.00022 5.58997L2.11022 0.699971C1.72022 0.309971 1.09021 0.309971 0.700215 0.699971C0.310215 1.08997 0.310215 1.71997 0.700215 2.10997L5.59022 6.99997L0.700215 11.89C0.310215 12.28 0.310215 12.91 0.700215 13.3C1.09021 13.69 1.72022 13.69 2.11022 13.3L7.00022 8.40997L11.8902 13.3C12.2802 13.69 12.9102 13.69 13.3002 13.3C13.6902 12.91 13.6902 12.28 13.3002 11.89L8.41022 6.99997L13.3002 2.10997C13.6802 1.72997 13.6802 1.08997 13.3002 0.709971Z" fill="#121A23"/>
                </svg>
            </a>
            <svg width="45" height="44" viewBox="0 0 45 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.00986 21.9701C1.00986 10.063 10.6519 0.4 22.558 0.4C34.4868 0.4 44.1501 10.0638 44.1501 21.9701C44.1501 33.8764 34.4868 43.5402 22.558 43.5402C10.6519 43.5402 1.00986 33.8772 1.00986 21.9701ZM4.60388 21.9701C4.60388 31.9018 12.6483 39.9462 22.58 39.9462C32.5117 39.9462 40.5561 31.9018 40.5561 21.9701C40.5561 12.0384 32.5117 3.99402 22.58 3.99402C12.6483 3.99402 4.60388 12.0384 4.60388 21.9701Z" fill="#121A23" stroke="#D9EBFF" stroke-width="0.8"/>
                <path d="M30.9867 14.2533L19.0046 26.2354L14.1891 21.4198C13.5568 20.7875 12.5353 20.7875 11.903 21.4198C11.2706 22.0522 11.2706 23.0737 11.903 23.706L17.8697 29.6727C18.502 30.305 19.5235 30.305 20.1558 29.6727L33.2567 16.5557C33.889 15.9233 33.889 14.9019 33.2567 14.2695C32.6405 13.6372 31.6028 13.6372 30.9867 14.2533Z" fill="#121A23"/>
            </svg>
            <h5 class="fs-24 mb-0 mt-3">Toode on lisatud ostukorvi</h5>
        </div>
        <div class="d-flex flex-column flex-md-row py-5 px-3">
            <div class="product-thumbnail me-3">
                <a href="#">
                    <img class="checkout-thumbnail" src="/images/single-product-image.png" width="90" alt="product-name">
                </a>
            </div>
            <div>
                <h3 class="txt-black text-start fw-500 fs-16 mb-2" href=""#>Jalgratta esituli RETRO 3xLED + COB, 2XAA</h3>
                <div class="attributes d-flex text-start flex-column fs-14">
                    <span class="attribute-container mt-1">
                        <span class="label fw-bold">Artikkel: </span>
                        <span class="attribute-content">IB_012074</span>
                    </span>
                    <span class="attribute-container mt-1">
                        <span class="label fw-bold">EAN: </span>
                        <span class="attribute-content">8718026580292</span>
                    </span>
                </div>
                <div class="d-flex justify-content-start justify-content-md-between mt-4">
                    <div class="single-quantity-wrapper">
                        <div class="flex">
                            <button 
                                type="button" 
                                role="button" 
                                class="value-button" 
                                data-click-decrease
                                data-target="<?= '#quantity__' . $i ?>"
                                aria-label="Decrease Value"
                            >-</button>
                            <input type="number" id="<?= 'quantity__' . $i ?>" value="1" class="quantity" />
                            <button 
                                type="button" 
                                role="button" 
                                class="value-button" 
                                data-click-increase
                                data-target="<?= '#quantity__' . $i ?>"
                                aria-label="Increase Value"
                            >+</button>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-column ms-4 ms-md-0">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column px-3">
            <a href="#" class="btn btn-primary bg-blue py-2 fw-600">Vormista ost</a>
            <a href="#" class="btn btn-primary bg-white border border-2 border-blue txt-blue fw-600 py-2 mt-2" onclick="toggleCart()">Jätka ostlemist</a>
        </div> 
    </div>
</div>


