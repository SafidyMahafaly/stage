<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="float-start" style="font-size:20px">Type d'employer</h1>
                            <a href="" class="btn btn-primary float-end"  data-bs-toggle="modal" data-bs-target="#exampleModal">Nouveaux</a>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Type</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    @foreach ($type as $ty)<tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{$ty->nom}}</td>
                                        <th>
                                            <!-- <a href="" class="btn btn-secondary">Détail</a> -->
                                            <a href="" class="btn btn-info text-light" onclick="edit({{$ty->id}},'{{$ty->nom}}')" data-bs-toggle="modal" data-bs-target="#edit">Edit</a>
                                            <a href="{{route('deleteT',$ty->id)}}" class="btn btn-danger">Delete</a>
                                        </th>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Nouveaux type d'employer</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="{{route('type.store')}}" method="POST">
                                @csrf
                                {{-- <input type="hidden" name="_token" value="{{ csrf_token()}}"> --}}
                                    <div class="input-groupe">
                                        <input type="text" name="nom" class="form-control" placeholder="Type employer" id="">
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
                    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Edit type Employer</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="{{route('typ.miova')}}" method="POST">
                                @csrf
                                    <div class="input-groupe">
                                        <input type="text" name="nom_dep" class="form-control" placeholder="Nom département" id="nom_dep">
                                        <input type="hidden" name="id" class="form-control" placeholder="Nom département" id="id_dep">
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
    <script>
        function edit(id,nom){
            document.getElementById('nom_dep').value = nom;
            document.getElementById('id_dep').value = id;
        }
    </script>
</x-app-layout>
