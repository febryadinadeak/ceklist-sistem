@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h4>{{ $title }}</h4>
            <div class="box box-warning">
                <div class="box-header">
                    <p>
                        <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i>Refresh
                        </button>
                    </p>
                </div>
                <div class="box-body">

                    <div class="table-responsive">
                        <table class="table table-hover myTable">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Tugas</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($id)
                            @php($created)
                            @php($carbon_now)
                            @foreach($datas as $val)
                                @php($id = $val->id)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $val->nama_tugas }}</td>
                                    <td>
                                        @php($created_at = \Carbon\Carbon::parse($val->taskdone['created_at'])->format('Y-m-d'))
                                        @php($now = \Carbon\Carbon::now()->format('Y-m-d'))
                                        @php($created =  $created_at)
                                        @php($carbon_now = $now)
                                        @if($val->taskdone['id_tugas'] != $val->id || $created_at != $now)
                                            <span class="label label-danger">Belum Selesai</span>
                                        @else
                                            <span class="label label-success">Selesai</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($val->taskdone['id_tugas'] != $val->id || $created_at != $now)
                                            <div class="checkbox">
                                                <input type="checkbox" onchange="getCheck(this.value)"
                                                       value="{{$val->id}}" id="data-check" name="checkbox">
                                            </div>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if($val->taskdone['id_tugas'] != $id || $created != $now)
                        <form action="{{ route('tugas.selesai') }}" method="post">
                            @csrf
                            <input id="input_checkbox" type="hidden" name="input_checkbox">
                            <button class="btn btn-success btn-md">Verifikasi</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script>
		let data = [];

		async function getCheck(val) {
			data.push(val);
			document.getElementById('input_checkbox').value = data.join(',');
			//const dataFilter = await data.filter((d,i) => d.id === val );

			// const dataFilter = data.filter((d,i) => {
			// 	if(val === d){
			// 		return data.splice(i, 1)
			//     }
			// });
			//console.log(data.join(','));
		}

    </script>

    {{--<script type="text/javascript">
		$(document).ready(function () {

			// btn refresh
			$('.btn-refresh').click(function (e) {
				e.preventDefault();
				$('.preloader').fadeIn();
				location.reload();
			})

		})
    </script>--}}

@endsection
