<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('users.edit.title') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                	<form action="{{ route('users.update',['id'=>$user->id]) }}" class="row g-3 update" method="POST">
                		@csrf
                		@method("PATCH")
						<div class="col-md-6">
							<label for="name" class="form-label">{{ __('users.edit.name') }}</label>
							<input type="name" class="form-control" placeholder="{{ $user->name }}" value="{{ $user->name }}" name="name" id="name">
							@error('name')
							    <div class="alert alert-danger">{{ getRequestErrors($errors,'name') }}</div>
							@enderror
						</div>
						<div class="col-md-6">
							<label for="email" class="form-label">{{ __('users.edit.email') }}</label>
							<input type="email" class="form-control" placeholder="{{ $user->email }}" value="{{ $user->email }}" name="email" id="email">
							@if(Session::has('error-email'))
							    <div class="alert alert-danger">{!! Session::get('error-email') !!}</div>
							@else
								@error('email')
									<div class="alert alert-danger">{{ getRequestErrors($errors,'email') }}</div>
								@enderror
							@endif
						</div>
						<div class="col-md-6">
							<label for="password" class="form-label">{{ __('users.edit.new_password') }}</label>
							<input type="password" class="form-control" placeholder="********" name="password" id="password">
						</div>
						<div class="col-md-6">
							<label for="active" class="form-label">{{ __('users.edit.active') }}</label>
							<select class="form-control" name="active" id="active">
								<option {{ $user->active?('selected'):('') }} value="1">{{ __('users.edit.active') }}</option>
								<option {{ $user->active?(''):('selected') }} value="0">{{ __('users.edit.inactive') }}</option>
							</select>
							@if(Session::has('error-active'))
							    <div class="alert alert-danger">{!! Session::get('error-active') !!}</div>
							@endif
						</div>
						<div class="col-md-12">
		                	<button type="submit" class="btn btn-primary" onclick="disableOnClick(this)">{{ __('users.edit.update') }}</button>
						</div>
                	</form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
