{{-- ベーステンプレート呼び出し --}}
@extends('layouts.site_common')

{{-- ヘッダー枠の個別JavaScript追加エリア --}}
@section('javascript-head')
@endsection

{{-- 個別CSS追加エリア --}}
@section('css')
@endsection


{{-- メインスタイル用ID --}}
@section('main_style_id')
main-panel-no-sidebar
@endsection


{{-- ここからページ本体のコード --}}
@section('content')

<div class="panel-header panel-header-sm">
	<p>{{ config('app.name') }}</p>
</div>
<div class="content">
    <div class="row">
    	<div class="col-md-5 block-center mg-top-100">
            <div class="card">
              <div class="card-header">
                <h5 class="title">ログイン</h5>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ url('/login') }}">
                  @csrf
                  <div class="row">
                  	<div class="col-md-8 pr-1">
                      	<div class="form-group">
                            <label for="email">Email</label>
                        	<input type="email" class="form-control" placeholder="Email" />
                        </div>
                  	</div>
                  	<div class="col-md-8 pr-1">
                      	<div class="form-group">
                            <label for="password">Password</label>
                        	<input type="password" class="form-control" placeholder="Password" />
                        </div>
                  	</div>
                 </div>

                 <div class="row">
                  	<div class="col-md-2">
                  		<button type="submit" class="btn btn-round btn-primary">Login</button>
                  	</div>
                  </div>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>

{{-- フッター --}}
@include("layouts.footer")

{{-- ここまでページ本体のコード --}}
@endsection


{{-- フッター枠の個別JavaScript追加エリア --}}
@section('javascript-footer')
@endsection