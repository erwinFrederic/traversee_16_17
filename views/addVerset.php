<!-- <div class="row">
    <div class="col-md-6 add-verset-container">
        <h1 class="title">Ajouter un nouveau verset</h1>
        <div class="page-content">
            <form id="addVersetForm" method="post" class="add-verset" action="controllers/addVerset.php">
                <div class="reference">
                    <label class="reference-label">Référence</label>
                    <input type="text" class="field" name="reference-field" placeholder="Veuillez entrer la référence du verset">
                </div>

                <div class="content">
                    <label class="content-label">Contenu du verset</label>
                    <textarea name="content-field" placeholder="Veuillez entrer le contenu du verset"></textarea>
                </div>

                <div class="content">
                    <label class="img-label">Image du verset</label>
                    <input type="file" name="img-field" class="img-field" >
                </div>

                <div class="submit">
                    <input type="submit" name="add-verset" value="Ajouter un nouveau verset">
                </div>
            </form>
        </div>
    </div>
</div> -->

<?php
include_once('../controllers/saveVerset.php');