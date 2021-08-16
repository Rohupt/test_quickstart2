@extends('defaults.app')

@section('content')
    <h3>{{ __('Collection').': '.$collection->name }}</h3>
    <div class="row justify-content-center">
        <table class="table col col-md-10">
            <thead>
                <tr>
                    <th scope="col">{{ __('Id') }}</th>
                    <th scope="col">{{ __('Entry') }}</th>
                    <th scope="col">{{ __('Comment') }}</th>
                    <th scope="col">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody >
                @foreach ($words as $word)
                    <tr onClick="{{ redirect('collection/'.$collection->id) }}">
                        <th scope="row" class="col col-1">{{ $word->id }}</th>
                        <td class="col col-2">{{ $word->entry }}</td>
                        <td class="col col-7">{{ $word->comment }}</td>
                        <td class="col col-2">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-primary">{{ __('Collections') }}</button>
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
        <button class="btn btn-primary">{{ __('New Word') }} </button>
    </div>
@endsection
