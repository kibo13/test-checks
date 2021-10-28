@extends('layouts.master')

@section('content')
<div class="container">
    <h5 class="mb-2">Список загруженных чеков</h5>

    <table class="table table-bordered table-responsive">
        <thead class="thead-light">
            <th>#</th>
            <th style="min-width: 200px;">Пользователь</th>
            <th style="min-width: 200px;">Фото</th>
            <th class="w-25" style="min-width: 150px;">Тип</th>
            <th class="w-25" style="min-width: 150px;">Дата</th>
            <th class="w-25" style="min-width: 150px;">Код</th>
            <th class="w-25" style="min-width: 150px;">Статус</th>
        </thead>
        <tbody>
            @foreach($checks as $i => $check)
            <tr>
                <td>{{ $i+=1 }}</td>
                <td>{{ $check->user->name }}</td>
                <td>{{ $check->photo }}</td>
                <td>{{ $check->type }}</td>
                <td>{{ getFormatDate($check->created_at) }}</td>
                <td>{{ $check->code }}</td>
                <td>{{ $check->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
