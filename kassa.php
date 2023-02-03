<?php include 'layouts/partials/header.php'; ?>

<div class="container my-5">
    <form>
        <div class="d-flex flex-column flex-lg-row row">
                <div class="col-12 col-lg-6 mt-3 me-0 mb-3">
                    <div class="d-flex flex-wrap justify-content-md-left">
                        <h3 class="fs-4 mb-4">Andmed</h3>
                    </div>
                    <div class="bg-white px-2 py-3 p-md-4">
                        <div class="billing-fields d-flex flex-column flex-md-row">
                            <div class="col-12 col-md-6 pe-2">
                                <h4 class="fs-16 mb-3">Kontaktandmed</h4>
                                <div>
                                    <p class="mb-2 position-relative">
                                        <input class="input-text" id="billing_name" type="text"  name="billing_name" required/>
                                        <span class="floating-label">Ees- ja perekonnanimi</span>
                                    </p>
                                    <p class="mb-2 position-relative">
                                        <input class="input-text" id="billing_phone" type="tel"  name="billing_phone" required/>
                                        <span class="floating-label">Telefon</span>
                                    </p>
                                    <p class="mb-2 position-relative">
                                        <input class="input-text" id="billing_email" type="email"  name="billing_email" required/>
                                        <span class="floating-label">E-post</span>
                                    </p>
                                    <p class="mb-2 position-relative">
                                        <input class="input-text" id="billing_company" type="text"  name="billing_company"/>
                                        <span class="floating-label">Ettevõte (vajadusel)</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 ps-0 ps-md-2">
                                <h4 class="fs-16 mt-4 mt-md-0 mb-3">Aadress</h4>
                                <div>
                                    <p class="mb-2 position-relative">
                                        <input class="input-text" id="billing_address" type="text"  name="billing_address" required/>
                                        <span class="floating-label">Aadress</span>
                                    </p>
                                    <p class="mb-2 position-relative">
                                        <input class="input-text" id="billing_city" type="text"  name="billing_city" required/>
                                        <span class="floating-label">Linn</span>
                                    </p>
                                    <p class="mb-2 position-relative">
                                        <input class="input-text" id="billing_postcode" type="text"  name="billing_postcode" required/>
                                        <span class="floating-label">Postiindeks</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 mb-4">
                            <h3 id="ship-to-different-address" class="fs-12 fw-400 light-grey m-0">
                                <label class="d-flex align-items-center">
                                    <input id="ship-to-different-address-checkbox" type="checkbox" value="1" name="ship-to-different-address-checkbox">
                                    <span class="ms-2">Kauba saaja on erinev</span>
                                </label>
                            </h3>
                        </div>
                        <div class="different-address">
                            <div class="shipping-fields d-flex flex-column flex-md-row">
                                <div class="col-12 col-md-6 pe-0 pe-md-2">
                                    <h4 class="fs-16 mb-3">Kontaktandmed</h4>
                                    <div>
                                        <p class="mb-2 position-relative">
                                            <input class="input-text" id="billing_name" type="text"  name="billing_name" required/>
                                            <span class="floating-label">Ees- ja perekonnanimi</span>
                                        </p>
                                        <p class="mb-2 position-relative">
                                            <input class="input-text" id="billing_phone" type="tel"  name="billing_phone" required/>
                                            <span class="floating-label">Telefon</span>
                                        </p>
                                        <p class="mb-2 position-relative">
                                            <input class="input-text" id="billing_email" type="email"  name="billing_email" required/>
                                            <span class="floating-label">E-post</span>
                                        </p>
                                        <p class="mb-2 position-relative">
                                            <input class="input-text" id="billing_company" type="text"  name="billing_company"/>
                                            <span class="floating-label">Ettevõte (vajadusel)</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 ps-0 ps-md-2">
                                    <h4 class="fs-16 mt-4 mt-md-0 mb-3">Aadress</h4>
                                    <div>
                                        <p class="mb-2 position-relative">
                                            <input class="input-text" id="billing_address" type="text"  name="billing_address" required/>
                                            <span class="floating-label">Aadress</span>
                                        </p>
                                        <p class="mb-2 position-relative">
                                            <input class="input-text" id="billing_city" type="text"  name="billing_city" required/>
                                            <span class="floating-label">Linn</span>
                                        </p>
                                        <p class="mb-2 position-relative">
                                            <input class="input-text" id="billing_postcode" type="text"  name="billing_postcode" required/>
                                            <span class="floating-label">Postiindeks</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
                 
                <div class="col-12 col-lg-6 mt-3">
                    <div class="d-flex flex-wrap justify-content-md-left">
                        <h3 class="fs-4 mb-4">Kohaletoimetamine</h3>
                    </div>
                    <div class="bg-white billing-fields d-flex flex-column flex-lg-row px-2 py-3 p-md-4">
                        <div class="col-12">
                            <div id="shipping">
                                <ul class="p-0 m-0 list-unstyled">
                                    <li class="d-flex align-items-start position-relative py-3">
                                        <input class="shipping-method" id="itella_shipping" type="radio" name="shipping_method" value="itella_shipping" />
                                        <label for="itella_shipping">
                                            <p class="m-0 fs-14">Itella SmartPOST pakiautomaat
                                                <span class="price-amount fs-16 ms-1">
                                                    <bdi>
                                                        3,5
                                                        <span class="currency">€</span>
                                                    </bdi>
                                                </span>
                                            </p>
                                            <div id="shipping_container-itella_shipping" class="shipping-container mt-3">
                                                <select class="form-select rounded-1 fs-14" name="" id="">
                                                    <option selected>Vali linn</option>
                                                    <option value="Itella pakiautomaat 1">Itella pakiautomaat 1</option>
                                                    <option value="Itella pakiautomaat 2">Itella pakiautomaat 2</option>
                                                </select>
                                            </div>
                                        </label>
                                        <div class="position-absolute top-0 end-0 shipping-img">
                                            <img src="/images/itella-logo.png" width="90" alt="itella">
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start position-relative py-3">
                                        <input class="shipping-method" id="omniva_shipping" type="radio" name="shipping_method" value="omniva_shipping" />
                                        <label for="omniva_shipping">
                                            <p class="m-0 fs-14">Omniva pakiautomaat
                                                <span class="price-amount fs-16 ms-1">
                                                    <bdi>
                                                        3,5
                                                        <span class="currency">€</span>
                                                    </bdi>
                                                </span>
                                            </p>
                                            <div id="shipping_container-omniva_shipping" class="shipping-container mt-3" style="display:none;">
                                                <select class="form-select rounded-1 fs-14" name="" id="">
                                                    <option selected>Vali linn</option>
                                                    <option value="Omniva pakiautomaat 1">Omniva pakiautomaat 1</option>
                                                    <option value="Omniva pakiautomaat 2">Omniva pakiautomaat 2</option>
                                                </select>
                                            </div>
                                        </label>
                                        <div class="position-absolute top-10 end-0 shipping-img">
                                            <img src="/images/omniva-logo.png" width="90" alt="omniva">
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start position-relative py-3">
                                        <input class="shipping-method" id="osc_shipping" type="radio" name="shipping_method" value="osc_shipping" />
                                        <label for="osc_shipping">
                                            <p class="m-0 fs-14">OSC kuller
                                                <span class="price-amount fs-16 ms-1">
                                                    <bdi>
                                                        4,8
                                                        <span class="currency">€</span>
                                                    </bdi>
                                                </span>
                                            </p>
                                        </label>
                                        <div class="position-absolute top-15 end-0 shipping-img">
                                            <img src="/images/osc-logo.png" width="90" alt="osc">
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start position-relative py-3">
                                        <input class="shipping-method" id="pureva_shipping" type="radio" name="shipping_method" value="pureva_shipping" />
                                        <label for="pureva_shipping">
                                            <p class="m-0 fs-14">Pureva OÜ transport
                                                <span class="price-amount fs-16 ms-1">
                                                    <bdi>
                                                        4,8
                                                        <span class="currency">€</span>
                                                    </bdi>
                                                </span>
                                            </p>
                                        </label>
                                        <div class="position-absolute top-15 end-0 shipping-img">
                                            <img src="/images/pureva-logo-black.png" width="90" alt="pureva">
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start position-relative py-3">
                                        <input class="shipping-method" id="pureva_point_of_issue" type="radio" name="shipping_method" value="pureva_point_of_issue" />
                                        <label for="pureva_point_of_issue">
                                            <p class="m-0 fs-14">Väljastuspunkt Pureva
                                                <span class="price-amount fs-16 ms-1">
                                                    <bdi>
                                                        0
                                                        <span class="currency">€</span>
                                                    </bdi>
                                                </span>
                                            </p>
                                        </label>
                                        <div class="position-absolute top-15 end-0 shipping-img">
                                            <img src="/images/pureva-logo-black.png" width="90" alt="pureva">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between bg-white mt-4 p-2 p-md-4 rounded-2">
            <div class="d-flex flex-column flex-lg-row align-items-lg-center">
                <div class="d-flex justify-content-between justify-content-lg-start mb-2 mb-lg-0">
                    <p class="d-flex m-0 fs-14 fs-lg-18 me-md-1">Toodete hind</p>
                    <span class="price-amount fs-16 fs-lg-18 fw-600 me-lg-1">
                        <bdi>
                            33,24
                            <span class="currency">€</span>
                        </bdi>
                    </span>
                </div>
                <div class="d-flex justify-content-between justify-content-lg-start mb-2 mb-lg-0">
                    <p class="d-flex m-0 fs-14 fs-lg-18 me-lg-1"><span class="d-none d-lg-block me-1">+</span>Kohaletoimetamine</p>
                    <span class="price-amount fs-16 fs-lg-18 fw-600 me-md-1">
                        <bdi>
                            3,5
                            <span class="currency">€</span>
                        </bdi>
                    </span>
                </div >
                <div class="d-flex align-items-center justify-content-between justify-content-lg-start pt-2 pt-md-0 border-top border-top-lg-0 border-grey ">
                    <p class="d-flex m-0 fs-16 fs-lg-18 me-md-1"><span class="d-none d-lg-block me-1">=</span>Ostuhind koos käibemaksuga</p>
                    <span class="price-amount fs-18 fs-lg-24 fw-600 ms-4 ">
                        <bdi>
                            36,74
                            <span class="currency">€</span>
                        </bdi>
                    </span>
                </div >
            </div>
            <div class="d-flex w-100 w-lg-auto ms-0 ms-lg-auto mt-3 mt-lg-0">
                    <a href="#" class="btn btn-primary bg-blue py-2 px-5">Telli</a> 
            </div>
            
        </div>  
    </form>
</div>



<?php include 'layouts/partials/footer.php' ?> 



