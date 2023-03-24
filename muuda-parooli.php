<?php include 'layouts/partials/header.php'; ?>

<div class="container my-5">
    <div class="mx-auto" style="max-width: 460px;">
        <div class="bg-white p-4 p-md-5">
            <form>
                <h4 class="fs-16 mb-3">Muuda enda salasõna</h4>
                <div>
                    <p class="form-floating mb-3 position-relative">
                        <input class="form-control" id="current_password" type="password" placeholder="Praegune salasõna" required/>
                        <label for="current_password">Praegune salasõna</label>
                    </p>
                    <p class="form-floating mb-2 position-relative">
                        <input class="form-control" id="new_password" type="password" placeholder="Sisesta uus salasõna" required/>
                        <label for="new_password">Sisesta uus salasõna</label>
                    </p>
                    <p class="form-floating mb-3 position-relative fs-12 fw-400 color-grey">
                        Salasõna peab olema vähemalt 8 tähemärki, 1 suur ja 1 väike täht.
                    </p>
                    <p class="form-floating mb-0 position-relative">
                        <input class="form-control" id="repeat_password" type="password" placeholder="Korda uut salasõna" required/>
                        <label for="repeat_password">Korda uut salasõna</label>
                    </p>
                </div>
                <a href="#" class="btn btn-primary bg-blue w-100 w-lg-50 py-2 px-5 mt-4 " type="submit" value="Submit">Salvesta</a> 
            </form>
        </div>   
    </div>
</div>



<?php include 'layouts/partials/footer.php' ?> 



