<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <a href="{{route('etudiant.index')}}">etudiant</a> --}}

                    <div class="row">
                        {{-- <h1>Departement</h1> --}}
                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 style="margin-left: -08px;font-size:20px">Liste des départements</h2>
                                <a href="" class="btn btn-primary text-light float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Crée nouveaux département</a>
                            </div>
                        </div>

                        <table class="table table-hover mt-2" >
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom département</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                @foreach ($dep as $d)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$d->nom_dep}}</td>
                                    <td>
                                        <a href="{{route('detail',$d->id)}}" class="btn btn-secondary text-light">Detail</a>
                                        <a href="" class="btn btn-info text-light">Edit</a>
                                        <a href="{{route('delete',$d->id)}}" class="btn btn-danger text-light">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Nouveaux département</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="{{route('departement.store')}}" method="POST">
                                @csrf
                                    <div class="input-groupe">
                                        <input type="text" name="nom_dep" class="form-control" placeholder="Nom département" id="">
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
</x-app-layout>
