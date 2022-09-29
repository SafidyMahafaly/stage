<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <style>
            .btn-secondary{
                background: rgb(59,59,59) !important;
            }
            .box{
                border: 3px dotted gray;
                text-align: center;
                margin-top:-200px;
            }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>MICC</title>
        <link rel="stylesheet" href="{{asset('build/cs')}}">
        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.1.0/css/fixedColumns.dataTables.min.css" /> --}}


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
            {{$slot}}
        </div>
        <script src="{{asset('bootstrap.bundle.js')}}"></script>
        <script src="{{asset('bootstrap.min.js')}}"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- <script src="https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js"></script> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap.min.js" integrity="sha512-F0E+jKGaUC90odiinxkfeS3zm9uUT1/lpusNtgXboaMdA3QFMUez0pBmAeXGXtGxoGZg3bLmrkSkbK1quua4/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
        <script>
            $(document).ready(function () {
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    }
                });
                var table = $(".data-table").DataTable({
                    severSide:true,
                    processing:true,
                    sorting: false,
                    ajax:"{{route('etudiant.index')}}",
                    columns:[
                        {data:'DT_RowIndex',name:'DT_RowIndex'},
                        {data:'name'},
                        {data:'email'},
                        // {data:'test'},
                        {data:'action'},
                    ]
                });
                $("#nouveaux").click(function (e) {
                    e.preventDefault();
                    $("#ajaxModal").modal('show');
                    $("#studentForm").trigger("reset");
                });

                $("#saveBtn").click(function(e){
                    e.preventDefault();

                    $.ajax({
                        data:$("#studentForm").serialize(),
                        url:"{{route('etudiant.store')}}",
                        type:"POST",
                        dataType:'json',
                        success:function(data){
                            $("#studentForm").trigger("reset");
                            $("#ajaxModal").modal('hide');
                            table.ajax.reload();
                        },
                        error:function(data){
                            console.log("ereur",data);

                        }
                    });
                });
                $('body').on('click','.deleteStudent' ,function () {
                    var student_id = $(this).data("id")
                    // confirm("effacer?")

                    $.ajax({
                        type: "DELETE",
                        url: "{{route('etudiant.store')}}"+'/'+student_id,
                        // data: "data",
                        // dataType: "json",
                        success: function (response) {
                            table.ajax.reload();
                        }
                    });
                });
                $('body').on('click','.editStudent' ,function () {
                    var student_id = $(this).data("id")
                    $.get("{{route('etudiant.index')}}"+'/'+student_id+"/edit",function(data){

                    })

                    $.ajax({
                        type: "DELETE",
                        url: "{{route('etudiant.store')}}"+'/'+student_id,function(data) {
                            $(".titre").html=("Modifier etudiant");
                            $("#ajaxModal").modal('hide');
                        },
                        // data: "data",
                        // dataType: "json",
                        success: function (response) {
                            $(".titre").html();
                        }
                    });
                });

                $('input:checkbox').on('change', function () {
                var Projet = $('input:checkbox[name="Name"]:checked').map(function() {
                    return '^' + this.value + '$';
                }).get().join('|');

                table.column(0).search(Projet, true, false, false).draw();

                var Session = $('input:checkbox[name="Adress"]:checked').map(function() {
                    return this.value;
                }).get().join('|');

                table.column(1).search(Session, true, false, false).draw();

                var Entreprise = $('input:checkbox[name="Age"]:checked').map(function() {
                    return this.value;
                }).get().join('|');

                table.column(2).search(Entreprise, true, false, false).draw();

                var Modalite = $('input:checkbox[name="Mail"]:checked').map(function() {
                    return this.value;
                }).get().join('|');

                table.column(3).search(Modalite, true, false, false).draw();

                var TypeFormation = $('input:checkbox[name="Phone"]:checked').map(function() {
                    return this.value;
                }).get().join('|');

                table.column(4).search(TypeFormation, true, false, false).draw();


            });

            // select all
            $('.classCheck').on('click', function(){
                    if(this.checked){
                        $('.checkbox1').each(function(){
                            this.checked = true;
                        });
                    }else{
                        $('.checkbox1').each(function(){
                            this.checked = false;
                        });
                    }
                });

                $('.checkbox1').on('click', function(){
                    if(('.checkbox1:checked').length == $('.checkbox1').length){
                        $('.classCheck').prop('checked', true);
                    } else{
                        $('.classCheck').prop('checked', false);
                    }
                });
                // end select all
            });
        </script>
    </body>
</html>
