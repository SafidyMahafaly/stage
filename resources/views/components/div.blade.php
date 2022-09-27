
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
                                <th>N°</th>
                                <th>Noms</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
                <div class="modal" tabindex="-1" id="ajaxModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Ajout nouveaux etudiant</h5>
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




                    