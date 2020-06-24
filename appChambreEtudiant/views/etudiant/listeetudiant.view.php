<div class="babs prend ca">
    <div class="row border-bottom mb-4">
        <div class="col-6 d-flex justify-content-start align-items-center">
            <h4 class="color-general mt-5 mb-5 font-weight-normal">Lister, modifier ou supprimer<span class="font-weight-light"> chambres</span></h4>
        </div>
        <div class="col-6 d-flex justify-content-end align-items-center">
            <img src="../../public/source/icones/bed.png" class="icone-menu" alt="">
        </div>
    </div>
    <div class="row justify-content-center align-item-center p-2">
        <div class="col-xl-3">

            <form class="form-inline ml-3 ">

                <div class="input-group ">
                    <!--input-group permet de regroupet le button et la zone de recherche -->
                    <input type="text" class="form-control" placeholder="search">
                    <div class="input-group-append">
                        <button type="button" class="btn bg-light"><i class="fas fa-search text-muted"></i></button>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-xl-5">
            <div class="form-radio mb-3 mr-sm-2">
                <input class="form-radio-input" type="radio" id="inlineFormCheck" name="a">
                <label class="form-radio-label mr-2 font-weight-bold" for="inlineFormCheck">
                    Boursier
                </label>

                <input class="form-radio-input" type="radio" id="m" name="a">
                <label class="form-radio-label font-weight-bold mr-2" for="m">
                    Logier
                </label>

                <input class="form-radio-input" type="radio" id="n" name="a">
                <label class="form-radio-label font-weight-bold " for="n">
                    Chambre
                </label>
            </div>
        </div>

    </div>
    <div class="row justify-content-center align-item-center">
        <div class="col-xl-10">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Matricule</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Boursier</th>
                    <th scope="col">Logier</th>
                    <th scope="col">Chambre</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">2020SEAR0000</th>
                    <td>El Hadji Babacar</td>
                    <td>Séne</td>
                    <td class="text-success">oui</td>
                    <td class="text-success">oui</td>
                    <td>129</td>
                    <td><button class="btn btn-danger"><span class="fa fa-archive"></span></button></td>
                    <td><button class="btn btn-primary"><span class="fas fa-edit"></span></button></td>

                </tr>
                <tr>
                    <th scope="row">2020SIIM1234</th>
                    <td>AbdouKarim</td>
                    <td>Sidibe</td>
                    <td class="text-danger">non</td>
                    <td class="text-danger">non</td>
                    <td>234</td>
                    <td><button class="btn btn-danger"><span class="fa fa-archive"></span></button></td>
                    <td><button class="btn btn-primary"><span class="fas fa-edit"></span></button></td>
                </tr>
                <tr>
                    <th scope="row">2020SEAR0000</th>
                    <td>El Hadji Babacar</td>
                    <td>Séne</td>
                    <td class="text-success">oui</td>
                    <td class="text-success">oui</td>
                    <td>129</td>
                    <td><button class="btn btn-danger"><span class="fa fa-archive"></span></button></td>
                    <td><button class="btn btn-primary"><span class="fas fa-edit"></span></button></td>
                </tr>
                <tr>
                    <th scope="row">2020SIIM1234</th>
                    <td>AbdouKarim</td>
                    <td>Sidibe</td>
                    <td class="text-danger">non</td>
                    <td class="text-danger">non</td>
                    <td>234</td>
                    <td><button class="btn btn-danger"><span class="fa fa-archive"></span></button></td>
                    <td><button class="btn btn-primary"><span class="fas fa-edit"></span></button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>