@extends('admin.layouts.base')

@section('title')
    Thêm Phiếu Chi - DreamHouse
@endsection

@section('main')

@if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
<div class="card">
    <div class="header">
        <h2>
            THÊM PHIẾU CHI
        </h2>
    </div>
    <form name="formBds" method="POST" action="{{ route('phieuchi.store') }}">
	{{ method_field('POST') }}
    {{ csrf_field() }}
        <div class="body">
            <div class="row clearfix">
                <div class= "col-md-12">
                    <button type="submit" class="btn bg-brown btn-lg waves-effect">
                        Lưu
                    </button>
                    <a type="button" class="btn bg-grey btn-lg waves-effect" href="{{ URL::previous() }}">
                        Quay Lại
                    </a>
                </div>
                <div class= "col-md-6">
                    <label for="staff">
                        Nhân viên
                    </label>
                    <div class="form-group">
                        <select class="selectpicker" id = "staff">
                            <option value="">-- Please select --</option>
                            @foreach($nhanvien as $nhanvien)
                            <option value="{{ $nhanvien->id }}">{{ $nhanvien->ten_nv }}</option>
                            @endforeach
                        </select>
                        <a type="button" class="btn bg-green waves-effect" href="{{ route('staff.create') }}">
                            <i class="material-icons">add</i>
                        </a>
                        <input name="id_nv" type="text" id="id_nv" class="form-control hidden" placeholder="Nhân viên" value="{{ old('id_nv') }}">
                    </div>
                    <label for="nguoinhantien">
                        Người nhận tiền
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="nguoinhantien" type="text" id="nguoinhantien" class="form-control" placeholder="Tên người nhận" value="{{ old('nguoinhantien') }}">
                        </div>
                    </div>
                    <label for="CMND">
                        Số CMND
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="CMND" type="text" id="CMND" class="form-control" placeholder="Số chứng minh nhân dân" value="{{ old('CMND') }}">
                        </div>
                    </div>
                    
                </div>
                <div class= "col-md-6">
                    <label for="lydochi">
                        Lý do chi
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="lydochi" type="text" id="lydochi" class="form-control" placeholder="Lý do chi" value="{{ old('lydochi') }}">
                        </div>
                    </div>
                    <label for="tongtien">
                        Tổng tiền
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="tongtien" type="text" id="tongtien" class="form-control" placeholder="Tổng tiền" value="{{ old('tongtien') }}">
                        </div>
                    </div>
                    <label for="tongtienbangchu">
                        Tổng tiền bằng chữ
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="tongtienbangchu" type="text" id="tongtienbangchu" class="form-control" placeholder="Tổng tiền bằng chữ" value="{{ old('tongtienbangchu') }}">
                        </div>
                    </div>
                    <b>Ngày chi</b>
                    <div class="input-group">
                        <div class="form-line">
                            <input data-inputmask-alias="yyyy/mm/dd" name="ngaychi" type="text" id="ngaychi" class="form-control date" data-val="true" data-val-required="Required" placeholder="Ex: 2016/07/30" value="{{ old('ngaychi') }}">
                        </div>
                    </div>
                    <label for="bds_note">
                        Ghi chú
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="ghichu" id="bds_note" rows="5" class="form-control no-resize" placeholder="Ghi chú" value="{{ old('ghichu') }}">
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@push('js')
    <script>
        $(".selectpicker").selectpicker();
        $("#hopdong").change(function (e) {
            $("#id_hd").val($('#hopdong').val());
        });
        $("#staff").change(function (e) {
            $("#id_nv").val($('#staff').val());
        });
        $(document).ready(function() {
            $(":input[data-inputmask-mask]").inputmask();
            $(":input[data-inputmask-alias]").inputmask();
            $(":input[data-inputmask-regex]").inputmask("Regex");
        });
    </script>
@endpush