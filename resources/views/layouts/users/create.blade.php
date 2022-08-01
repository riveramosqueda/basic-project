<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new user') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                	<form action="{{ route('users.store') }}" class="row g-3" method="POST">
                		@csrf
						<div class="col-md-6">
							<label for="name" class="form-label">Name</label>
							<input type="name" class="form-control" value="{{ old('name') }}" name="name" id="name">
							@error('name')
							    <div class="alert alert-danger">{{ getRequestErrors($errors,'name') }}</div>
							@enderror
						</div>
						<div class="col-md-6">
							<label for="email" class="form-label">Email</label>
							<input type="email" class="form-control" value="{{ old('email') }}" name="email" id="email">
							@error('name')
							    <div class="alert alert-danger">{{ getRequestErrors($errors,'email') }}</div>
							@enderror
						</div>
						<div class="col-md-12">
	                		<button type="submit" class="btn btn-primary">Save</button>
		                </div>
                	</form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
