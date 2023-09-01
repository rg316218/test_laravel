@extends('layouts.app')
 
@section('content')

<!-- hedda -->
<div class="panel panel-default">
    <div class="panel-heading">
    会員登録
    </div>
</div>

<!-- メンバー登録用パネル -->
<div class="panel-body">
    @include('common.errors')
    <form action="{{url('member')}}" method="post" class="form-horizontai">
        {{ csrf_field()}}
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">名前</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="name" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="tel" class="col-sm-3 control-label">電話番号</label>

            <div class="col-sm-6">
                <input type="text" name="tel" id="tel" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">メールアドレス</label>

            <div class="col-sm-6">
                <input type="text" name="email" id="email" class="form-control">
            </div>
        </div>
        <!-- 会員登録ボタン -->

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button class="btn btn-default">
                    <i class="fa fa-plus"></i>登録
                </button>
            </div>
        </div>
    </form>

</div>
 
@endsection