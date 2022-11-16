@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>Books</h3>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>{!! Form::label('book.id_category', 'Categoria: *') !!}</strong>
                        {!! Form::select('book[id_category]',  ['Suspense' => 'SUSPENSE', 'Comedy' => 'COMEDY', 'Love' => 'LOVE'], null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción',  'id' => 'id_category', 'required' => 'true']) !!}
                    </div>
                </div>
               
            </div>
        </div>
        <div class="card-body">
            
            <div class="table-responsive-lg">
                <table class="table table-active table-striped">
                    <thead class="">
                    <tr class="text-center">
                        <th>TITLE</th>
                        <th>CATEGORY</th>
                        <th>AUTHOR</th>
                        <th>RELEASE DATE</th>
                        <th>PUBLISH DATE</th>
                    </tr>
                    </thead>
                    <tbody id="TableBod">
                        @foreach($books as $item)
                            <tr>
                                <td>{{ $item->title }} </td>
                                <td>{{ $item->category }} </td>
                                <td>{{ $item->author }} </td>
                                <td>{{ $item->realease_date }} </td>
                                <td>{{ $item->publish_date }} </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>  

        </div>
       
    </div>
</div> 
@endsection


@section('scripts')
    <script>
        $(document).ready(function () {

            $(".table").DataTable(datatable_esp);
            $("#id_category").on('change', function(){
                console.log('hola')
                $.ajax({
                    url: "{{asset('api')}}",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        id: $(this).val(),
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (response) {
                        console.log(response)
                        $("#TableBod").empty();
                        var table="";
                        $.each(response,function(index,element){
                            table +='<tr>';
                            table +='   <td>'+element.title+'</td>';
                            table +='   <td>'+element.category+'</td>';
                            table +='   <td>'+element.author+'</td>';
                            table +='   <td>'+element.realease_date+'</td>';
                            table +='   <td>'+element.publish_date+'</td>';
                           
                            table +='</tr>';
                        });

                        $("#TableBod").html(table);
                       
                       
                        
                        
                    }
                });
            })


        });
    </script>

@endsection
