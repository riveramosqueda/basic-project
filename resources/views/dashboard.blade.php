<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('dashboard.index.title') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ __('dashboard.index.recent_logs') }}
                    <br><br><br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{ __('dashboard.index.logs.date') }}</th>
                                    <th scope="col">{{ __('dashboard.index.logs.user') }}</th>
                                    <th scope="col">{{ __('dashboard.index.logs.description') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($logs) && $logs)
                                    @foreach($logs as $index=>$log)
                                        <tr>
                                            <th scope="row">{{ $log->id }}</th>
                                            <td>{{ $log->date }}</td>
                                            <td>{{ $log->user?($log->user->name):('-') }}</td>
                                            <td>{!! $log->description !!}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        {{ $logs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
