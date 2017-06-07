<div class="col-md-12">
    <fieldset>
        <legend>Loader</legend>
        <div id="message" class="message"></div>

        <div class="panel panel-default">

            <div class="panel-heading">
                Formulaire de chargement des mails
            </div>
            <div class="panel-body">
                <form onsubmit="return validateForm();" enctype="multipart/form-data" class="col-md-offset-2 col-md-8" method="POST" action="./controller/ajoutMail.php">
                    <div class="form-group">
                        <label for="uploadFile">Fichier csv contenant les mails à charger</label>
                        <input data-placeholder="Fichier CSV à charger dans l'application" accept=".csv" required="required" id="uploadFile" data-buttonText="Choisir le fichier" name="uploadFile" type="file" class="form-control filestyle" data-iconName="glyphicon glyphicon-open">
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-arrow-right"></i>
                                Lancer le traitement
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </fieldset>
</div>