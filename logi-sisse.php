<?php include 'layouts/partials/header.php'; ?>

<div class="container my-5">
    <div class="mx-auto" style="max-width: 460px;">
        <div class="bg-white p-4 p-md-5">
            <form>
                <h1 class="fs-24 mb-3">Sisselogimine</h1>
                <h5 class="fs-16 fw-400 mb-3">Sisesta kasutajanimi ja parool. <a href="#" class="fw-500 txt-blue">Registreeri</a>, kui sul pole kasutajakontot. </h5>
                <div>
                    <p class="form-floating mb-3 position-relative">
                        <input class="form-control" id="enter_username" type="text" placeholder="Sisesta kasutajanimi" required/>
                        <label for="enter_username">Sisesta kasutajanimi</label>
                    </p>
                    <p class="form-floating mb-0 position-relative">
                        <input class="form-control" id="enter_password" type="password" placeholder="Sisesta parool" required/>
                        <label for="enter_password">Sisesta parool</label>
                    </p>
                    <h3 id="ship-to-different-address" class="fs-16 fw-400 my-4">
                        <label class="d-flex align-items-center">
                            <input id="remember_me" type="checkbox" value="1">
                            <label class="ms-2" for="remember_me">Jäta meelde</label>
                        </label>
                    </h3>
                </div>
                <a href="#" class="btn btn-primary bg-blue w-100 w-lg-50 py-2 px-5" type="submit" value="Submit">Salvesta</a> 
            </form>
        </div>   
    </div>
</div>



<?php include 'layouts/partials/footer.php' ?> 



