<div class="row border-bottom mb-4">
    <div class="col-6 d-flex justify-content-start align-items-center">
        <h4 class="color-general mt-5 mb-5 font-weight-normal">Enregistrer<span class="font-weight-light"> un étudiant</span></h4>
    </div>
    <div class="col-6 d-flex justify-content-end align-items-center">
        <img src="../../public/source/icones/student.png" class="icone-menu" alt="">
    </div>
</div>
<div class="formulaire p-2">
    <div class="row">
        <div class="col-lg-4">
            <!-- Default input -->
            <div class="form-group">
                <label for="formGroupExampleInput">Prénom</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Entrer le prénom de l'étudiant">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Email</label>
                <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Entrer l'email de l'étudiant">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Date Naissance</label>
                <input type="date" class="form-control" id="formGroupExampleInput" value="2011-08-19">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Chambre</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Affect a Room">
            </div>
        </div>
        <div class="col-lg-4">

            <div class="form-group">
                <label for="formGroupExampleInput">Nom</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Entrer le nom de l'étudiant">
            </div>

            <div class="form-group mb-4">
                <label for="formGroupExampleInput">Téléphone</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Entrer le téléphone de l'étudiant">
            </div>

            <div class="mb-1">Catégorie</div>
            <div class="form-radio mb-2 text-center">
                <input class="form-radio-input" type="radio" id="inlineFormCheck" name="a">
                <label class="form-radio-label mr-2 font-weight-bold" for="inlineFormCheck">
                    Boursier
                </label>
                <input class="form-radio-input" type="radio" id="m" name="a">
                <label class="form-radio-label font-weight-bold" for="m">
                    Non Boursier
                </label>
            </div>
            <div class="mb-3">Type de bourse</div>
            <select class="form-control mdb-select md-form text-center" searchable="Search here..">
                <option value="" disabled selected>Choisissez</option>
                <option value="0">type of scholarship</option>
                <option value="1">Demi-bourse(20000)</option>
                <option value="2">Bourse-ebtiere(40000)</option>
            </select>
        </div>
        <div class="col-lg-4 text-center">
            <label for="matricule" class="color-general font-weight-bold d-block">Matricule</label>
            <label for="matricule" class="text-success d-block">2020SIIM1234</label>
        </div>


    </div>
    <div class="row">
        <div class="col-lg-8">

            <button type="button" name="" id="btn-submit-form" class="w-100 border-0 rounded-lg text-white">Enregistrer</button>
        </div>
    </div>

</div>