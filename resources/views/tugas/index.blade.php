@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">
               
                <div class="table-responsive">
                    <table class="table table-hover myTable">

                    <form method= "post" action="">
                                    @csrf
                                </form>

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Tugas</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach($data as $e=>$dt)
                            <tr>
                                <td>{{ $e+1 }}</td>
                                <td>{{ $dt->nama_tugas }}</td>
                                
                                <td> <span class="badge{{$dt-> status == false ? 'danger' : 'success'}}">
                                    {{$dt -> status == false ? 'Belum Selesai' : 'Selesai'}}</span>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
                <button type= "submit" class ="btn btn-sucess btn-md">Selesai</button>
            </div>
        </div>
    </div>
</div>
 
@endsection
 
@section('scripts')
 
<script type="text/javascript">
    $(document).ready(function(){
 
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
 
    })
</script>