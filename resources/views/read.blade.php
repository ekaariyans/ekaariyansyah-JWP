@extends('master')
@section('content')

<div class="row">
    <div  class="col-lg-7" style="margin-bottom:20px;">
        <a href="{{ URL::to('/add') }}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>&nbsp; Tambah</a>
    </div>
    
</div>
<div class="box box-primary">
    <table class="table">
        <?php $i=1; ?>
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Departemen</th>
            <th>Tgl. Lahir</th>
            <th>Anak ke-</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($users as $data)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->departemen }}</td>
                <td>{{ $data->tgl_lahir }}</td>
                <td>{{ $data->anak_ke }}</td>
                <td>
                    <a href="{{ URL::to('/get/'.$data->id) }}" data-toggle="modal"><span class="glyphicon glyphicon-edit" title="ubah"></span></a>&nbsp;
                    <a href="{{ URL::to('/delete/'.$data->id) }}" data-toggle="modal"><span class="glyphicon glyphicon-remove" title="hapus"></span></a>&nbsp;
                </td>
            </tr>
            <?php $i++; ?>
            @endforeach
        </tbody>
    </table>
</div>

@stop