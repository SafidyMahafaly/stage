<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 style="text-align: center">MINISTERE DE L'INDUSTRIALISATION, DU COMMERCE ET DE LA CONSOMMATION</h1><br>
                            <h1 style="margin-left:250px">--------------</h1><br>
                            <h1 class="text-center">SECRETARIA GENERAL</h1><br>
                            <h1 style="margin-left:250px">--------------</h1><br>
                            <h1 class="text-center">DIRECTION DES RESSOURCES HUMAINES</h1>
                        </div>
                        <div class="col-md-6">
                            <img style="margin-top:-170px;" src="{{asset('img/308599160_1359619337899216_3884697833383241893_n.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="row" style="margin-top: -150px;">
                        <div class="box p-4">
                            <h1>FICHE INDIVIDUELE DES AGENTS OCCUPANT</h1><br>
                            <h1>DES EMPLOIS DES LONGUES DUREE</h1><br>
                            <h1>(ELD)</h1>
                        </div>
                    </div>
                    <div class="row mt-3">
                        @foreach ($etat as $et)
                            <h1> <strong>I - ETAT CIVIL</strong> </h1>
                            <h3>Nom: {{$et->Noms}}</h3>
                            <h3>Prenoms : {{$et->Prenoms}}</h3>
                            <h3>N°MATRICULE : {{$et->Matricule}}</h3>
                            <h3>Date et lieu de naisssance : {{$et->DateNaiss}} <span style="margin-left:300px">à {{$et->Lieu}}</span></h3>
                            <h3>CIN N° : {{$et->CIN}}</h3>
                            <h3>DUPLICATA DU : {{$et->Duplicata}}</h3>
                            <h3>Fils ou Fille de : {{$et->Pere}}</h3>
                            <h3>Et de : {{$et->Mere}}</h3>
                            <h3>Adresse : {{$et->Adresse}}</h3>
                            <h3>Télephone : {{$et->Telephone}}</h3>
                        @endforeach

                        @foreach ($situation as $sit)<h1 class="mt-3"> <strong>II - SITUATION ADMINISTRATIVE</strong> </h1>
                        <h3>Date d'entrée dans l'administration : {{$sit->DateEntre}}</h3>
                        <h3>Corps : {{$sit->Corps}} <span style="margin-left:300px">depuis le : {{$sit->DateCorps}}</span></h3>
                        <h3>Grade actuel : {{$sit->Grade}} <span style="margin-left:305px">Date d'effete : {{$sit->DateGrade}}</span></h3>
                        <h3>Programme : {{$sit->Programme}}</h3>
                        @endforeach

                        @foreach ($affectat as $af)
                        <h1 class="mt-3"> <strong>III - AFFECTATION ACTUELLE </strong> </h1>
                        <h3>Direction : {{$af->direction}}</h3>
                        <h3>Service : {{$af->service}}</h3>
                        <h3>Fonction exercée : {{$af->fonction}}</h3>
                        @endforeach


                        <h1 class="mt-3"> <strong>IV - AFFECTATION ET FONCTION SUCCESSIVES </strong> </h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>Direction</th>
                                    <th>Service</th>
                                    <th>Fonction exercée</th>
                                    <th>Période</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($suc as $su)
                                <tr class="text-center">
                                    <td>{{$su->direction}}</td>
                                    <td>{{$su->service}}</td>
                                    <td>{{$su->fonction}}</td>
                                    <td>{{$su->debut}} au {{$su->fin}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h1 class="mt-3"> <strong>V - TITRE OU DIPLOME OBTENUE</strong> </h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>Diplôme - Certificat - Attestation</th>
                                    <th>Etablissement et lieu d'obtention</th>
                                    <th>Année d'obtention</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($diplome as $dipl)
                                <tr class="text-center">
                                    <td>{{$dipl->diplome}}</td>
                                    <td>{{$dipl->etab}}</td>
                                    <td>{{$dipl->obtenue}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h1 class="mt-3"> <strong>VI - STAGE et FORMATIONS</strong> </h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>Nature</th>
                                    <th>Objet et Domaines concernées</th>
                                    <th>Lieu</th>
                                    <th>Durée</th>
                                    <th>Année</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stage as $stg)
                                <tr class="text-center">
                                    <td>{{$stg->nature}}</td>
                                    <td>{{$stg->objet}}</td>
                                    <td>{{$stg->lieu}}</td>
                                    <td>{{$stg->dure}}&nbsp; Mois</td>
                                    <td>{{$stg->anne}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h1 class="mt-3"> <strong>VII - DISTINCTION HONORIFIQUES</strong> </h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>GRADE</th>
                                    <th>Obtention</th>
                                    <th>N°Date décret</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($grade as $gr)
                                    <tr class="text-center">
                                        <td>{{$gr->grade}}</td>
                                        <td>{{$gr->obtention}}</td>
                                        <td>{{$gr->date}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        @foreach ($civile as $cv)
                            <h1 class="mt-3"> <strong>VIII - SITUATION DE FAMILLE</strong> </h1>
                            <h3>Civilité : {{$cv->civilite}} </h3>
                            <h3>Nombre d'enfants à charge : {{$cv->enfant}} </h3>
                            <h3><strong> <u> Renseignement concernatnt l'epouse (ou l'epoux) </u></strong></h3>
                            <h3>Nom et prénoms de l'époux/epouse : {{$cv->epoux}} </h3>
                            <h3>File (ou Fils) de : {{$cv->mere}} </h3>
                            <h3>Et de : {{$cv->pere}} </h3>
                        @endforeach



                        <h1 class="mt-3"> <strong>IX - INFORMATION CONCERNANT ENFANTS</strong> </h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>Nom et Pénoms</th>
                                    <th>Date et lieu de naissance</th>
                                    <th>Sexe</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($enfant as $enf)
                                    <tr class="text-center">
                                        <td>{{$enf->nom}}</td>
                                        <td>{{$enf->date}} à {{$enf->lieu}}</td>
                                        <td>{{$enf->sexe}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
