<?php include 'layouts/partials/header.php'; ?>

<div class="container my-5 product-categories">
    <div class="d-flex flex-wrap justify-content-md-center">
        <h1>Tootekategooriad</h1>
    </div>
    <div class="categories">
        <?php for ($i = 0; $i < 10; $i++): ?>
            <a href="#">
                <div class="category">
                    
                        <div class="image">
                            <picture>
                                <source srcset="/images/category-image.png" type="image/png">
                                <img class="img-fluid" src="/images/category-image.webp" alt="">
                            </picture>
                        </div>
                        <div class="category__name mt-2">
                            <h2>Käsitööriistad</h2>
                        </div>
                </div>
            </a>
        <?php endfor ?>
    </div>

</div>



<?php include 'layouts/partials/footer.php' ?> 