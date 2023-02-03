
<?php include 'layouts/partials/header.php' ?> 
    


<div class="container">
    <div class="filter-wrapper align-items-center mt-5 mb-3 mb-xl-5">
        <h1 class="sale-page-title fs-32 mb-0 me-auto">Soodustooted</h1>
        <div class="filter d-flex flex-column flex-lg-row align-items-lg-center ">
            <?php include 'layouts/partials/filter.php' ?>
        </div>
        <div class="layout-btns d-none d-md-flex ms-auto">
            <?php include 'layouts/partials/layout-btns.php' ?>
        </div>
    </div>
    <div class="products sale-products products__grid">
            <?php for ($i = 0; $i < 4; $i++): ?>
                <?php include 'layouts/partials/product-card.php'?>
            <?php endfor ?>
    </div>

    <div class="products sale-products products__list">
            <?php for ($i = 0; $i < 4; $i++): ?>
                <?php include 'layouts/partials/product-card-list.php' ?>
            <?php endfor ?>
    </div>
</div>


        

<?php include 'layouts/partials/footer.php' ?> 

