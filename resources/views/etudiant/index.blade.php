
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Liste des etudiant</h2>
                    <a href="" class="btn btn-primary " id="nouveaux" style="float: right">Nouveaux</a>

                    <table class="table table-hover mt-4 data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Name
                                        </button>
                                        <ul class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <input type="text" name="" id="" class="column_search form-control form-control-sm">
                                            </li>
                                            <li>
                                                <div class="form-check saCheck">
                                                    <input class="form-check-input classCheck" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Tout
                                                    </label>
                                                </div>
                                            </li>
                                            {{-- @foreach ($members as $m) --}}
                                                <li>
                                                    <input class="checkbox1 form-check-input" type="checkbox" name="Name" value="fhfhfu"> <span class="spn">fhfhfu</span>
                                                </li>
                                            {{-- @endforeach --}}
                                        </ul>
                                    </div>
                                </th>
                                <th>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Mail
                                        </button>
                                        <ul class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <input type="text" name="" id="" class="column_search form-control form-control-sm">
                                            </li>
                                            <li>
                                                <div class="form-check saCheck">
                                                    <input class="form-check-input classCheck" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Tout
                                                    </label>
                                                </div>
                                            </li>
                                            {{-- @foreach ($members as $m) --}}
                                                <li>
                                                    <input class="checkbox1 form-check-input" type="checkbox" name="Adress" value="kgjjg}"> <span class="spn">kgjjg</span>
                                                </li>
                                            {{-- @endforeach --}}
                                        </ul>
                                    </div>
                                </th>

                                <th>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Phone
                                        </button>
                                        <ul class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <input type="text" name="" id="" class="column_search form-control form-control-sm">
                                            </li>
                                            <li>
                                                <div class="form-check saCheck">
                                                    <input class="form-check-input classCheck" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Tout
                                                    </label>
                                                </div>
                                            </li>
                                            {{-- @foreach ($members as $m) --}}
                                                <li>
                                                    <input class="checkbox1 form-check-input" type="checkbox" name="Mail" value="Test"> <span class="spn">Test</span>
                                                </li>
                                            {{-- @endforeach --}}
                                        </ul>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($etudiant as $etu)
                            <tr>
                                <td>{{$etu->name}}</td>
                                <td>{{$etu->email}}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="modal" tabindex="-1" id="ajaxModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title titre">Ajout nouveaux etudiant</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" id="studentForm" name="studentForm" class="form-horizontal">
                                <input type="hidden" name="student_id" id="student_id">
                                <div class="form-group">
                                    Noms : <br>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>
                                <div class="form-group">
                                    Email : <br>
                                    <input type="text" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="saveBtn" >Save </button>
                        </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>




