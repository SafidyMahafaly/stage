<x-app-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Etat civil</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Situation administrative</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Affectation </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link " id="contact-tab" data-bs-toggle="tab" data-bs-target="#diplome" type="button" role="tab" aria-controls="diplome" aria-selected="false">Titre ou diplôme</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link " id="contact-tab" data-bs-toggle="tab" data-bs-target="#stage" type="button" role="tab" aria-controls="stage" aria-selected="false">Stage et formation</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link " id="contact-tab" data-bs-toggle="tab" data-bs-target="#dis" type="button" role="tab" aria-controls="dis" aria-selected="false">Distinct honorifique</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="contact-tab" data-bs-toggle="tab" data-bs-target="#famille" type="button" role="tab" aria-controls="famille" aria-selected="false">Situation Familliale</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Autre</button>
                        </li>
                      </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade  p-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <form action="{{route('fiche.storeC')}}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">Matricule :</label>
                                        <input type="hidden" name="employer_id" value="{{$info->id}}">
                                        <input type="hidden" name="departement_id" value="{{$info->departement_id}}">
                                        <input type="hidden" name="type_id" value="{{$info->Type_id}}">
                                        <input type="text" value="{{$info->matricule}}" name="Matricule" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">Nom :</label>
                                        <input type="text" value="{{$info->nom}}" name="Noms" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">Prenoms :</label>
                                        <input type="text" value="{{$info->prenom}}" name="Prenoms" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">date de naissance :</label>
                                        <input type="date" name="DateNaiss" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">lieu :</label>
                                        <input type="text" name="Lieu" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">CIN :</label>
                                        <input type="text" name="CIN" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">du :</label>
                                        <input type="date" name="DateCIN" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">Duplicata du :</label>
                                        <input type="date" name="Duplicata" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">Fils de:</label>
                                        <input type="text" name="Pere" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">et de :</label>
                                        <input type="text" name="Mere" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">Adresse :</label>
                                        <input type="text" name="Adresse" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">Telephone :</label>
                                        <input type="text" name="Telephone" value="{{$info->telephone}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button class="btn btn-outline-primary float-end" type="submit"> Sauvegarder </button>
                                </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <form action="{{route('fiche.situationC')}}" method="POST">
                            @csrf
                            <input type="hidden" name="employer_id" value="{{$info->id}}">
                            <input type="hidden" name="departement_id" value="{{$info->departement_id}}">
                            <input type="hidden" name="type_id" value="{{$info->Type_id}}">
                            <div class="row">
                                <div class="input-groupe mt-3">
                                    <label for="Nom">Date d'entrée dans l'administration  :</label>
                                    <input type="date" name="DateEntre" value="" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">Corps :</label>
                                        <input type="text" name="Corps" value="" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">depuis le :</label>
                                        <input type="date" name="DateCorps" value="" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">Grade actuel :</label>
                                        <select name="Grade" id="" required>
                                            <option value="" selected hidden> Sélectionez votre grade actuel</option>
                                            <option value="Stagiaire">Stagiaire</option>
                                            <option value="Autre">Autre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">depuis le :</label>
                                        <input type="date" name="DateGrade" value="" class="form-control" required>
                                    </div>
                                </div>

                            </div>
                            <div class="row p-2">
                                <label for="Nom">Programme:</label>
                                    <select name="Programme" id="" class="" required>
                                        <option value="" selected hidden> Sélectionez votre programme</option>
                                        <option value="INDUSTRIE">INDUSTRIE</option>
                                        <option value="COMMERCE">COMMERCE</option>
                                    </select>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button class="btn btn-outline-primary float-end" type="submit"> Sauvegarder </button>
                                </form>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade " id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <h1>AFFECTATION ACTUELLE</h1>
                                    <form action="{{route('fiche.affectationC')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <input type="hidden" name="employer_id" value="{{$info->id}}">
                                        <input type="hidden" name="departement_id" value="{{$info->departement_id}}">
                                        <input type="hidden" name="type_id" value="{{$info->Type_id}}">
                                        <div class="col-md-8 mt-3">
                                            <div class="input-groupe">
                                                <label for="">Diréction :</label>
                                                <input type="text" name="direction" class="form-control" id="" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-groupe mt-3">
                                                <label for="">Depuis le:</label>
                                                <input type="date" name="dateEntre" class="form-control" id="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-groupe">
                                            <label for="">Service :</label>
                                            <input type="text" name="service" class="form-control" id="" required>
                                        </div>
                                        <div class="input-groupe">
                                            <label for="">Fonction exercé :</label>
                                            <input type="text" name="fonction" class="form-control" id="" required>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <button class="btn btn-outline-primary float-end" type="submit"> Sauvegarder </button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-2">
                                <h1>AFFECTATION SUCCESIVE</h1>
                                <form action="{{route('fiche.affectationmultipleC')}}" method="POST">
                                @csrf
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Direction</th>
                                            <th>Service</th>
                                            <th>Fonction exercée</th>
                                            <th>Periode</th>
                                            <th><a href="#" class="p-2" onclick="apina();"><i class="fa-solid fa-plus"></i></a></th>
                                        </tr>
                                    </thead>
                                    <tbody id="apina">
                                        <tr class="text-center">
                                            <input type="hidden" value="{{$info->id}}" name="employer_id[]" class="form-control" readonly>
                                            <input type="hidden" value="{{$info->departement_id}}" name="departement_id[]" class="form-control" readonly>
                                            <input type="hidden" value="{{$info->Type_id}}" name="type_id[]" class="form-control" readonly>
                                            <th><input type="text" name="direction[]" required></th>
                                            <th><input type="text" name="service[]" required></th>
                                            <th><input type="text" name="fonction[]" required></th>
                                            <th><input type="date" style="width: 150px" name="debut[]" required>&nbsp;au&nbsp;<input type="date" name="fin[]" style="width: 150px" required></th>
                                            <th class="align-middle"><a href="#"><i class="fa-solid fa-trash p-2 " style="background: rgb(191, 29, 29);color:white"></i></a></th>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="col-md-12 mt-3">
                                    <button class="btn btn-outline-primary float-end" type="submit"> Sauvegarder </button>
                                </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade " id="diplome" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row p-2">
                                <form action="{{route('fiche.diplomeC')}}" method="POST">
                                @csrf
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Diplome - Certificat -Atestation</th>
                                            <th>Etablissement et lieu d'ontention</th>
                                            <th>Année d'obtention</th>
                                            <th><a href="#" class="p-2" onclick="apinaDipl();"><i class="fa-solid fa-plus"></i></a></th>
                                        </tr>
                                    </thead>
                                    <tbody id="dipl">
                                        <tr class="text-center ferme">
                                            <input type="hidden" value="{{$info->id}}" name="employer_id[]" class="form-control" readonly>
                                            <input type="hidden" value="{{$info->departement_id}}" name="departement_id[]" class="form-control" readonly>
                                            <input type="hidden" value="{{$info->Type_id}}" name="type_id[]" class="form-control" readonly>
                                            <th><input type="text" name="diplome[]"  style="width: 300px" required></th>
                                            <th><input type="text" name="etab[]" style="width: 300px" required></th>
                                            <th><input type="date" name="obtenue[]" style="width: 300px" required></th>
                                            <th class="align-middle"><a href="#"   disabled><i class="fa-solid fa-trash p-2" style="background: rgb(191, 29, 29);color:white"></i></a></th>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="col-md-12 mt-3">
                                    <button class="btn btn-outline-primary float-end" type="submit"> Sauvegarder </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade " id="stage" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row p-2">
                                <form action="{{route('fiche.stageC')}}" method="POST">
                                @csrf
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Nature</th>
                                            <th>Objet et Domaines concernés</th>
                                            <th>Lieu</th>
                                            <th>Durée(Mois)</th>
                                            <th>Année</th>
                                            <th><a href="#" class="p-2" onclick="apinaStage();"><i class="fa-solid fa-plus"></i></a></th>
                                        </tr>
                                    </thead>
                                    <tbody id="stagee">
                                        <tr class="text-center st">
                                            <input type="hidden" value="{{$info->id}}" name="employer_id[]" class="form-control" readonly>
                                            <input type="hidden" value="{{$info->departement_id}}" name="departement_id[]" class="form-control" readonly>
                                            <input type="hidden" value="{{$info->Type_id}}" name="type_id[]" class="form-control" readonly>
                                            <th><input type="text" name="nature[]" required></th>
                                            <th><input type="text" name="objet[]" required></th>
                                            <th><input type="text" name="lieu[]" required></th>
                                            <th><input type="number" name="dure[]" required></th>
                                            <th><input type="text" name="anne[]" required></th>
                                            <th class="align-middle"><a href="#"   disabled><i class="fa-solid fa-trash p-2" style="background: rgb(191, 29, 29);color:white"></i></a></th>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="col-md-12 mt-3">
                                    <button class="btn btn-outline-primary float-end" type="submit"> Sauvegarder </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="dis" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row p-2">
                                <form action="{{route('fiche.gradeC')}}" method="POST">
                                @csrf
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Grade</th>
                                            <th>Obtention</th>
                                            <th>N°Date décret</th>
                                            <th><a href="#" class="p-2" onclick="dis();"><i class="fa-solid fa-plus"></i></a></th>
                                        </tr>
                                    </thead>
                                    <tbody id="dist">
                                        <tr class="text-center dd">
                                            <input type="hidden" value="{{$info->id}}" name="employer_id[]" class="form-control" readonly>
                                            <input type="hidden" value="{{$info->departement_id}}" name="departement_id[]" class="form-control" readonly>
                                            <input type="hidden" value="{{$info->Type_id}}" name="type_id[]" class="form-control" readonly>
                                            <th><input type="text" style="width: 400px" name="grade[]" required></th>
                                            <th><input type="text" style="width: 400px" name="obtention[]" required></th>
                                            <th><input type="date" name="date[]" required></th>
                                            <th class="align-middle"><a href="#"   disabled><i class="fa-solid fa-trash p-2" style="background: rgb(191, 29, 29);color:white"></i></a></th>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="col-md-12 mt-3">
                                    <button class="btn btn-outline-primary float-end" type="submit"> Sauvegarder </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show active" id="famille" role="tabpanel" aria-labelledby="contact-tab">
                            <form action="{{route('fiche.civileC')}}" method="POST">
                            @csrf
                            <div class="row p-2">
                                <input type="hidden" value="{{$info->id}}" name="employer_id" class="form-control" readonly>
                                <input type="hidden" value="{{$info->departement_id}}" name="departement_id" class="form-control" readonly>
                                <input type="hidden" value="{{$info->Type_id}}" name="type_id" class="form-control" readonly>
                                <div class="col-md-8">
                                    <div class="input-groupe">
                                        <label for="">Civilité :</label>
                                        <select name="civile" id="" class="form-control">
                                            <option value="" selected hidden>Sélectionez votre civilité</option>
                                            <option value="Célibataire">Célibataire</option>
                                            <option value="Marié(e)">Marié(e)</option>
                                            <option value="Veuf(ve)">Veuf(ve)</option>
                                            <option value="Divorcé(e)">Divorcé(e)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-groupe">
                                        <label for="">Nombre d'enfant à charge :</label>
                                        <input type="text" name="enfant">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4" >
                                    <h1><u> Renseignement concernant l'epouse (ou l'epoux) </u></h1>
                                    <div class="input-groupe">
                                        <label for="">Nom et prenoms de l'époux/épouse :</label>
                                        <input type="text" class="form-control" name="epoux">
                                    </div>
                                    <div class="input-groupe">
                                        <label for="">File (ou Fils) de :</label>
                                        <input type="text" class="form-control" name="pere">
                                    </div>
                                    <div class="input-groupe">
                                        <label for="">Et de :</label>
                                        <input type="text" class="form-control" name="mere">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <button class="btn btn-outline-primary float-end" type="submit"> Sauvegarder </button>
                                    </form>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h1><u> Renseignement concernant enfants </u></h1>
                                    <form action="{{route('fiche.enfantC')}}" method="POST">
                                    @csrf
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>Nom et Prénoms</th>
                                                        <th>Date et lieu de naissance</th>
                                                        <th>Sexe</th>
                                                        <th><a href="#" class="p-2" onclick="fam();"><i class="fa-solid fa-plus"></i></a></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="fam">
                                                    <tr class="text-center">
                                                        <input type="hidden" value="{{$info->id}}" name="employer_id[]" class="form-control" readonly>
                                                        <input type="hidden" value="{{$info->departement_id}}" name="departement_id[]" class="form-control" readonly>
                                                        <input type="hidden" value="{{$info->Type_id}}" name="type_id[]" class="form-control" readonly>
                                                        <th><input name="nom[]" type="text" style="width: 400px"  class="form-control" required></th>
                                                        <th style="display: flex"><input name="date[]" style="width: 200px" type="date" class="form-control" required>&nbsp; <span class="mt-2">à</span>  &nbsp;<input placeholder="lieu de naissance" type="text" name="lieu[]" style="width: 300px"  class="form-control" required></th>
                                                        <th><select name="sexe[]" id=""required>
                                                            <option value="M">Homme</option>
                                                            <option value="F">Femme</option>
                                                        </select></th>
                                                        <th class="align-middle"><a href="#"><i class="fa-solid fa-trash p-2 " style="background: rgb(191, 29, 29);color:white"></i></a></th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="col-md-12 mt-3">
                                                <button class="btn btn-outline-primary float-end" type="submit"> Sauvegarder </button>
                                           </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function apina(){
            var a = document.getElementById('apina');
            $('#apina').append(
                '<tr class="text-center midi">\
                    <input type="hidden" value="{{$info->id}}" name="employer_id[]" class="form-control" readonly>\
                    <input type="hidden" value="{{$info->departement_id}}" name="departement_id[]" class="form-control" readonly>\
                    <input type="hidden" value="{{$info->Type_id}}" name="type_id[]" class="form-control" readonly>\
                    <th><input type="text" name="direction[]" required></th>\
                    <th><input type="text" name="service[]" required></th>\
                    <th><input type="text" name="fonction[]" required></th>\
                    <th><input type="date" style="width: 150px" name="debut[]" required>&nbsp;au&nbsp;<input type="date" name="fin[]" style="width: 150px" required></th>\
                    <th class="align-middle"><a href="#" class="remove"><i class="fa-solid fa-trash p-2 " style="background: rgb(191, 29, 29);color:white"></i></a></th>\
                </tr>'
            );
            $('.remove').click(function (e) {
                $(this).closest('.midi').remove()

            });
        }

        function apinaDipl(){
            $('#dipl').append(
                ' <tr class="text-center ferme">\
                    <input type="hidden" value="{{$info->id}}" name="employer_id[]" class="form-control" readonly>\
                    <input type="hidden" value="{{$info->departement_id}}" name="departement_id[]" class="form-control" readonly>\
                    <input type="hidden" value="{{$info->Type_id}}" name="type_id[]" class="form-control" readonly>\
                    <th><input type="text" name="diplome[]"  style="width: 300px" required></th>\
                    <th><input type="text" name="etab[]" style="width: 300px" required></th>\
                    <th><input type="date" name="obtenue[]" style="width: 300px" required></th>\
                    <th class="align-middle"><a href="#"  class="removedipl" disabled><i class="fa-solid fa-trash p-2" style="background: rgb(191, 29, 29);color:white"></i></a></th>\
                </tr>'
            )
            $('.removedipl').click(function (e) {
                $(this).closest('.ferme').remove()

            });
        }

        function apinaStage(){
            $('#stagee').append(
                '<tr class="text-center st">\
                    <input type="hidden" value="{{$info->id}}" name="employer_id[]" class="form-control" readonly>\
                    <input type="hidden" value="{{$info->departement_id}}" name="departement_id[]" class="form-control" readonly>\
                    <input type="hidden" value="{{$info->Type_id}}" name="type_id[]" class="form-control" readonly>\
                    <th><input type="text" name="nature[]" required></th>\
                    <th><input type="text" name="objet[]" required></th>\
                    <th><input type="text" name="lieu[]" required></th>\
                    <th><input type="text" name="dure[]" required></th>\
                    <th><input type="text" name="anne[]" required></th>\
                    <th class="align-middle"><a href="#"  class="removestage" disabled><i class="fa-solid fa-trash p-2" style="background: rgb(191, 29, 29);color:white"></i></a></th>\
                </tr>'
            )
            $('.removestage').click(function (e) {
                $(this).closest('.st').remove()

            });
        }

        function dis(){
            $('#dist').append(
                '<tr class="text-center dd">\
                    <input type="hidden" value="{{$info->id}}" name="employer_id[]" class="form-control" readonly>\
                    <input type="hidden" value="{{$info->departement_id}}" name="departement_id[]" class="form-control" readonly>\
                    <input type="hidden" value="{{$info->Type_id}}" name="type_id[]" class="form-control" readonly>\
                    <th><input type="text" style="width: 400px" name="grade[]" required></th>\
                    <th><input type="text" style="width: 400px" name="obtention[]" required></th>\
                    <th><input type="date" name="date[]" required></th>\
                    <th class="align-middle"><a href="#"  class="removedd" disabled><i class="fa-solid fa-trash p-2" style="background: rgb(191, 29, 29);color:white"></i></a></th>\
                </tr>'
            )
            $('.removedd').click(function (e) {
                $(this).closest('.dd').remove()

            });
        }

        function fam(){
            $('#fam').append(
                '<tr class="text-center fax">\
                    <input type="hidden" value="{{$info->id}}" name="employer_id[]" class="form-control" readonly>\
                    <input type="hidden" value="{{$info->departement_id}}" name="departement_id[]" class="form-control" readonly>\
                    <input type="hidden" value="{{$info->Type_id}}" name="type_id[]" class="form-control" readonly>\
                    <th><input name="nom[]" type="text" style="width: 400px"  class="form-control" required></th>\
                    <th style="display: flex"><input name="date[]" style="width: 200px" type="date" class="form-control" required>&nbsp; <span class="mt-2">à</span>  &nbsp;<input placeholder="lieu de naissance" name="lieu[]" type="text" style="width: 300px"  class="form-control" required></th>\
                    <th><select name="sexe[]" id="" required>\
                        <option value="M">Homme</option>\
                        <option value="F">Femme</option>\
                    </select></th>\
                    <th class="align-middle"><a href="#" class="family"><i class="fa-solid fa-trash p-2 " style="background: rgb(191, 29, 29);color:white"></i></a></th>\
                </tr>'
            )
            $('.family').click(function (e) {
                $(this).closest('.fax').remove()

            });

        }
    </script>
</x-app-layout>
