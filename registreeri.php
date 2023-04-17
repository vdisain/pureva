<?php include 'layouts/partials/header.php'; ?>

<div class="container my-5">
    <div class="mx-auto" style="max-width: 650px;">
        <div class="bg-white p-4 p-md-5">
            <form>
                <h1 class="fs-24 mb-3">Registreeru kasutajaks</h1>
                <div class="d-flex flex-column flex-md-row">
                    <p class="form-floating mb-3 me-md-3 w-100 position-relative">
                        <input class="form-control" id="your_username" type="text" placeholder="Kasutajanimi" required/>
                        <label for="your_username">Kasutajanimi*</label>
                    </p>
                    <p class="form-floating mb-3 w-100 position-relative">
                        <input class="form-control" id="your_email" type="email" placeholder="E-post" required/>
                        <label for="your_email">E-post*</label>
                    </p>
                </div>
                <div class="d-flex flex-column flex-md-row">
                    <p class="form-floating mb-3 me-md-3 w-100 position-relative">
                        <input class="form-control" id="your_password" type="password" placeholder="Parool" required/>
                        <label for="your_username">Parool*</label>
                    </p>
                    <p class="form-floating mb-3 w-100 position-relative">
                        <input class="form-control" id="retype_your_password" type="password" placeholder="Parooli kordus" required/>
                        <label for="retype_your_password">Parooli kordus*</label>
                    </p>
                </div>
                <div class="d-flex flex-column flex-md-row">
                    <p class="form-floating mb-3 me-md-3 w-100 position-relative">
                        <input class="form-control" id="your_firstname" type="text" placeholder="Eesnimi" required/>
                        <label for="your_firstname">Eesnimi*</label>
                    </p>
                    <p class="form-floating mb-3 w-100 position-relative">
                        <input class="form-control" id="your_firstname" type="text" placeholder="Perekonnanimi" required/>
                        <label for="your_firstname">Perekonnanimi*</label>
                    </p>
                </div>
                <div class="d-flex flex-column flex-md-row">
                    <p class="form-floating mb-3 me-md-3 w-100 position-relative">
                        <input class="form-control" id="your_phone" type="tel" placeholder="Telefon" required/>
                        <label for="your_phone">Telefon*</label>
                    </p>
                    <p class="form-floating mb-3 w-100 position-relative">
                        <input class="form-control" id="your_firm_name" type="text" placeholder="Ettevõtte nimi" required/>
                        <label for="your_firm_name">Ettevõtte nimi*</label>
                    </p>
                </div>
                <div class="d-flex flex-column flex-md-row">
                    <p class="form-floating mb-3 me-md-3 w-100 position-relative">
                        <input class="form-control" id="your_legal_address_town" type="text" placeholder="Juriidiline aadress (linn)" required/>
                        <label for="your_legal_address_town">Juriidiline aadress (linn)*</label>
                    </p>
                    <p class="form-floating mb-3 w-100 position-relative">
                        <input class="form-control" id="your_legal_address_street" type="text" placeholder="Juriidiline aadress (tänav)" required/>
                        <label for="your_legal_address_street">Juriidiline aadress (tänav)*</label>
                    </p>
                </div>
                <div class="d-flex flex-column flex-md-row">
                    <p class="form-floating mb-3 me-md-3 w-100 position-relative">
                        <input class="form-control" id="your_legal_address_postal_code" type="text" placeholder="Juriidiline aadress (postiindeks)" required/>
                        <label for="your_legal_address_postal_code">Juriidiline aadress (postiindeks)*</label>
                    </p>
                    <p class="form-floating mb-3 w-100 position-relative">
                        <input class="form-control" id="your_KMKR" type="text" placeholder="KMKR number" />
                        <label for="your_KMKR">KMKR number</label>
                    </p>
                </div>
                <div class="d-flex flex-column flex-md-row">
                    <p class="form-floating mb-3 me-md-3 w-100 position-relative">
                        <input class="form-control" id="your_delivery_address_town" type="text" placeholder="Tarneaadress (linn)" />
                        <label for="your_delivery_address_town">Tarneaadress (linn)</label>
                    </p>
                    <p class="form-floating mb-3 w-100 position-relative">
                        <input class="form-control" id="your_delivery_address_street" type="text" placeholder="Tarneaadress (tänav)" />
                        <label for="your_delivery_address_street">Tarneaadress (tänav)</label>
                    </p>
                </div>
                <div class="d-flex flex-column flex-md-row">
                    <p class="form-floating mb-3 me-md-3 w-100 position-relative">
                        <input class="form-control" id="your_delivery_address_postal_code" type="text" placeholder="Tarneaadress (postiindeks)" />
                        <label for="your_delivery_address_postal_code">Tarneaadress (postiindeks)</label>
                    </p>
                    <p class="form-floating mb-3 w-100 position-relative">
                        <input class="form-control" id="your_delivery_address_phone" type="tel" placeholder="Tarneaadress telefon" />
                        <label for="your_delivery_address_phone">Tarneaadress telefon</label>
                    </p>
                </div>
                <div class="d-flex flex-column flex-md-row">
                    <p class="form-floating mb-3 w-100 position-relative">
                        <textarea class="form-control" id="your_additional_info" placeholder="Lisainfo" rows="3" style="min-height:130px;"></textarea>
                        <label for="your_additional_info">Lisainfo</label>
                    </p>
                </div>
                <a href="#" class="btn btn-primary bg-blue w-100 w-lg-50 py-2 px-5" type="submit" value="Submit">Salvesta</a> 
            </form>
        </div>   
    </div>
</div>



<?php include 'layouts/partials/footer.php' ?> 



