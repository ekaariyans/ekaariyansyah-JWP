@extends('master')
@section('content')

<div class="form">

<div class="box box-primary">
    <div class="box-header with-border">
        Form Tambah User
    </div><!-- /.box-header -->
        {!! Form::open(array('url' => '/create', 'role' => 'form')) !!}
            <div class="box-body">
                <div class="row">
                    <?php echo Form::label('nama', 'Nama Lengkap', array('class' => 'col-sm-2 control-label')); ?>
                    <div class="col-sm-6" style="margin-bottom:11px">
                        <?php echo Form::text('nama', '', array('class' => 'form-control', 'placeholder' => 'nama lengkap', 'required')); ?>
                    </div>
                </div>
                <div class="row">
                    <?php echo Form::label('departemen', 'Departemen', array('class' => 'col-sm-2 control-label')); ?>
                    <div class="col-sm-6" style="margin-bottom:11px">
                        <?php echo Form::text('departemen', '', array('class' => 'form-control', 'placeholder' => 'departemen', 'required')); ?>
                    </div>
                </div>
                <div class="row">
                    <?php echo Form::label('tgl', 'Tanggal Lahir', array('class' => 'col-sm-2 control-label')); ?>
                    <div class="col-sm-6" style="margin-bottom:11px">
                        <?php echo Form::input('date', 'tgl', null, array('class' => 'form-control', 'placeholder' => 'tanggal lahir', 'required')); ?>
                    </div>
                </div>
                <div class="row">
                    <?php echo Form::label('anakke', 'Anak Ke', array('class' => 'col-sm-2 control-label')); ?>
                    <div class="col-sm-6" style="margin-bottom:11px">
                        <?php echo Form::input('number', 'anakke', null, array('class' => 'form-control', 'placeholder' => 'anak ke', 'required')); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-6" style="margin-bottom:11px">
                        <?php echo Form::submit('Submit', array('class' => 'btn btn-primary')); ?>
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
</div><!-- /.box -->
</div><!-- form -->

@stop