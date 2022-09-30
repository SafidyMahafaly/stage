<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <div class="row">
                       <div class="col-md-12">
                            <h1 class="float-start" style="font-size:20px !important;">Département : {{$dep->nom_dep}}</h1>
                            <a href="/departement" class="btn btn-dark float-end">Retour</a>
                       </div>
                   </div>
                   <div class="row mt-3">
                        <ul class="nav nav-tabs " style="margin-left:07px" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Employer</button>
                            </li>
                            {{-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Sérvice</button>
                            </li> --}}
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Chef departement</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 style="margin-left: 07px" class="float-start">Liste des employers</h3>
                                                <a class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Nouveaux membre</a>
                                            </div>
                                        </div>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>IM</th>
                                                    <th>Nom</th>
                                                    <th>Prenom</th>
                                                    <th>Email</th>
                                                    <th>Télephone</th>
                                                    <th>Fonction</th>
                                                    <th class="text-center">Chef de departement</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($employer as $emp)
                                                <tr>
                                                    <td class="align-middle">{{$emp->matricule}}</td>
                                                    <td class="align-middle">{{$emp->nom}}</td>
                                                    <td class="align-middle">{{$emp->prenom}}</td>
                                                    <td class="align-middle">{{$emp->email}}</td>
                                                    <td class="align-middle">{{$emp->telephone}}</td>
                                                    <td class="align-middle">{{$emp->fontion}}</td>
                                                    <td class="text-center align-middle">
                                                        @if($emp->statut == 1)
                                                            <input  type="checkbox" class="ajout" name="" test="{{$emp->users_id}}" id="{{$emp->id}}">
                                                        @else
                                                            <input type="checkbox" name="" class="delete" test="{{$emp->users_id}}" id="{{$emp->id}}" checked>
                                                        @endif
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="" class="btn btn-secondary">Fiche</a>
                                                        <a href="" class="btn btn-info text-light">Edit</a>
                                                        <a href="" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <h3 style="margin-left: 07px" class="float-start">Liste de(s) chef de département</h3>
                                                {{-- <a class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Nouveaux chef</a> --}}
                                            </div>
                                        </div>
                                        <table class="table table-hover mt-3">
                                            <thead>
                                                <tr>
                                                    <th>IM</th>
                                                    <th>Nom</th>
                                                    <th>Prenom</th>
                                                    <th>Email</th>
                                                    <th>Télephone</th>
                                                    <th>Fonction</th>
                                                    <th class="text-center">Chef de departement</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($chef as $emp)
                                                <tr>
                                                    <td class="align-middle">{{$emp->matricule}}</td>
                                                    <td class="align-middle">{{$emp->nom}}</td>
                                                    <td class="align-middle">{{$emp->prenom}}</td>
                                                    <td class="align-middle">{{$emp->email}}</td>
                                                    <td class="align-middle">{{$emp->telephone}}</td>
                                                    <td class="align-middle">{{$emp->fontion}}</td>
                                                    <td class="text-center align-middle">
                                                        @if($emp->statut == 1)
                                                            <input  type="checkbox" class="ajout" name="" id="{{$emp->id}}">
                                                        @else
                                                            <input type="checkbox" name="" class="delete" id="{{$emp->id}}" checked>
                                                        @endif
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="" class="btn btn-secondary">Fiche</a>
                                                        <a href="" class="btn btn-info text-light">Edit</a>
                                                        <a href="" class="btn btn-danger">Delete</a>

                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Nouveaux employer du departement : {{$dep->nom_dep}}</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="{{route('employer.gor')}}" method="POST">
                            @csrf
                                <input type="hidden" name="departement_id" value="{{$dep->id}}">
                                <input type="hidden" name="service_id" value="1">
                                <input type="hidden" name="statut" value="1">
                                {{-- <input type="hidden" name="Type_id" value="1"> --}}
                                <div class="input-groupe mt-2">
                                    <input type="text" name="matricule" class="form-control" placeholder="Matricule" id="">
                                </div>
                                <div class="input-groupe mt-2">
                                    <input type="text" name="nom" class="form-control" placeholder="Nom employer" id="">
                                </div>
                                <div class="input-groupe mt-2">
                                    <input type="text" name="prenom" class="form-control" placeholder="Prénom employer" id="">
                                </div>
                                <div class="input-groupe mt-2">
                                    <input type="text" name="email" class="form-control" placeholder="Email" id="">
                                </div>
                                <div class="input-groupe mt-2">
                                    <input type="text" name="telephone" class="form-control" placeholder="Télephone" id="">
                                </div>
                                <div class="input-groupe mt-2">
                                    <input type="text" name="fontion" class="form-control" placeholder="Fonction" id="">
                                </div>
                                <div class="input-groupe mt-2">
                                    <select name="Type_id" class="form-control" id="">
                                        <option value="" hidden selected>Choisir type d'employer</option>
                                        @foreach ($type as $t)
                                            <option value="{{$t->id}}">{{$t->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-outline-primary">Enregistrer</button>
                        </div>
                        </form>
                      </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
       $('.ajout').on('change',function(){
            var id = $(this).attr('id');
            var users_id = $(this).attr('test');
            $.ajax({
                type: "GET",
                url: "{{route('change')}}",
                data: {
                    id:id,
                    users_id:users_id,
                },
                dataType: "json",
                success: function (response) {
                    console.log(response)
                    location.reload()
                }
            });

       })
       $('.delete').on('change',function(){
        //    alert('test');
            var id = $(this).attr('id');
            var users_id = $(this).attr('test');
            $.ajax({
                type: "GET",
                url: "{{route('del')}}",
                data: {
                    id:id,
                    users_id:users_id,
                },
                dataType: "json",
                success: function (response) {
                    console.log(response)
                    location.reload()
                }
            });

       })
    </script>
</x-app-layout>
