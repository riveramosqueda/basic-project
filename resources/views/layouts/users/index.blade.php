<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('users.index.title') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                	<a href="{{ route('users.create') }}" type="button" class="btn btn-primary">{{ __('users.index.create_new_user') }}</a>
                	<br><br><br>
                	<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">{{ __('users.index.name') }}</th>
									<th scope="col">{{ __('users.index.email') }}</th>
									<th scope="col">{{ __('users.index.status') }}</th>
									<th scope="col">{{ __('users.index.actions') }}</th>
								</tr>
							</thead>
							<tbody>
								@if($users)
									@foreach($users as $index=>$user)
										<tr>
											<th scope="row">{{ $user->id }}</th>
											<td>{{ $user->name }}</td>
											<td>{{ $user->email }}</td>
											<td>{{ $user->status }}</td>
											<td>
												<a href="{{ route('users.edit',['id'=>$user->id]) }}" type="button" class="btn btn-warning">{{ __('users.index.edit') }}</a>
												<form action="{{ route('users.destroy',['id'=>$user->id]) }}" class="delete" method="POST">
													@csrf
													@method('DELETE')
													<button type="submit" class="btn btn-danger">{{ __('users.index.delete') }}</button>
												</form>
											</td>
										</tr>
									@endforeach
								@endif
							</tbody>
						</table>
						{{ $users->links() }}
					</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
