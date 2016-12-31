<div class="col-md-6 add-verset-container">
    <h1 class="title">Générer son verset biblique</h1>
    <div class="page-content">
        <form class="get-verset" method="post" action="controllers/getVerset.php">

            <form id="addVersetForm" method="post" class="add-verset" action="controllers/addVerset.php">
                <div class="nom_prenoms">
                    <label class="nom-label">Nom & prénoms</label>
                    <input type="text" class="field" name="nomprenoms_field" placeholder="Veuillez entrer vos noms et prénoms" required />
                </div>

                <div class="content">
                    <label class="email-label">Adresse email</label>
                    <input type="email" name="email_field" placeholder="Veuillez entrer votre adresse email" required />
                </div>

                <div class="country">
                    <label class="country-label">Pays</label>
                    <input type="text" name="country_field" placeholder="Veuillez entrer votre pays de résidence" required />
                </div>

                <div class="submit">
                    <input type="submit" name="get-verset" value="Obtenir son verset">
                </div>
            </form>



        </form>
    </div>
</div>