<div class="list-products">
    <form>
        <table class="products-table w-100">
            <thead>
                <tr>
                    <th class="fs-14 fw-400"></th>
                    <th class="fs-14 fw-400">Kood</th>
                    <th class="fs-14 fw-400 ps-5">Nimetus</th>
                    <th class="fs-14 fw-400">Saadavus</th>
                    <th class="fs-14 fw-400">Kogus</th>
                    <th class="fs-14 fw-400"></th>
                    <th class="fs-14 fw-400">Hind km-ta</th>
                    <th class="fs-14 fw-400">Hind km-ga</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < 4; $i++): ?>
                    <tr class="bg-white list-product">
                        <td class="product-thumbnail">
                            <a href="#">
                                <img class="checkout-thumbnail" src="/images/PresstangidM.png" width="98" alt="product-name">
                            </a>
                        </td>
                        <td class="product-code">
                            <span class="fs-14 fw-400">TEL-0095A</span>
                        </td>
                        <td class="product-name ps-5">
                            <a class="txt-black fw-500 fs-16 mb-2" href=""#>3-in-1 RJ11 / RJ12 / RJ45 presstangid + kaablinuga</a>
                        </td>
                        <td class="availability">
                            <span class="product__state product__state--<?= $state ?> p-2">
                                <?= $state ?>
                            </span>
                        </td>
                        <td class="product-quantity">
                            <div class="single-quantity-wrapper flex">
                                <form class="flex">
                                    <input type="number" id="number" value="1" />
                                </form>
                            </div>
                        </td>
                        <td class="product-add ps-0">
                            <a class="btn btn-primary btn-lg fs-16 fw-600" href="#">Lisa korvi</a>
                        </td>
                        <td class="price-without-vat text-end">
                            <div class="fs-14 mx-2">
                                    <span class="price-amount">
                                        <bdi>
                                            7,83
                                            <span class="currency">€</span>
                                        </bdi>
                                    </span>
                            </div>
                        </td>
                        <td class="product-price text-end pe-5">
                            <div class="fs-20 fw-600">
                                <span class="price-amount">
                                    <bdi>
                                        9,40
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
                                <del>
                            </div>
                        </td>
                    </tr>
                <?php endfor ?>                           
            </tbody>
        </table>
    </form>
</div>       