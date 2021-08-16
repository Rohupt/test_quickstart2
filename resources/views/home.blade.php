@extends('defaults.app')

@section('content')
    <div class="row justify-content-center">
        <table class="table col col-md-10">
            <thead>
                <tr>
                    <th scope="col">{{ __('Id') }}</th>
                    <th scope="col">{{ __('Name') }}</th>
                    <th scope="col">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody >
                @foreach ($collections as $collection)
                    <tr>
                        <th scope="row" class="col col-1">{{ $collection->id }}</th>
                        <td class="col col-6">
                            <a href={{ 'collections/'.$collection->id }}>{{ $collection->name }}</a>
                        </td>
                        <td class="col col-5">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-warning">{{ __('Edit') }}</button>
                                <button class="btn btn-danger">{{ __('Delete') }}</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row justify-content-center">
        <button class="btn btn-primary">{{ __('New Collection') }} </button>
    </div>
@endsection
