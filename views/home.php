<div class="col-md-6 add-verset-container">
    <h1 class="title">Générer son verset biblique</h1>
    <div class="page-content">
        <form class="get-verset" method="post" action="controllers/getVerset.php">

            <form id="addVersetForm" method="post" class="add-verset" action="controllers/addVerset.php">
                <div class="name">
                    <label class="nom-label">Nom</label>
                    <input type="text" class="field" name="name_field" placeholder="Veuillez entrer votre nom" required />
                </div>

                <div class="surname">
                    <label class="nom-label"Prénoms</label>
                    <input type="text" class="field" name="surname_field" placeholder="Veuillez entrer vos prénoms" required />
                </div>

                <div class="content">
                    <label class="email-label">Adresse email</label>
                    <input type="email" name="email_field" placeholder="Veuillez entrer votre adresse email" required />
                </div>

                <div class="form-group country">
                    <label class="country-label">Pays <span class="mandatory">*</span> </label>
                    <input id="country" type="text" name="country_field" placeholder="Veuillez entrer votre pays de résidence" required />
                </div>

                <div class="city">
                    <label class="country-label">Ville</label>
                    <input type="text" name="city_field" placeholder="Veuillez entrer votre ville de résidence" required />
                </div>

                <div class="submit">
                    <input type="submit" name="get-verset" value="Obtenir son verset">
                </div>
            </form>



        </form>
    </div>
</div>