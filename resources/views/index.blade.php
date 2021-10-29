@extends('layouts.master')

@section('content')
<div class="container bk-page bk-checks">
    <h5 class="mb-2">Список загруженных чеков</h5>

    @if ($checks->count() == 0)
    <p class="text-info">Записи отсутствуют</p>
    @else
    <table class="bk-table table table-bordered table-responsive">
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
                <td>{{ getFormatUser($check->user->name) }}</td>
                <td>{{ hideImage($check->photo) }}</td>
                <td>@if ($check->type == 1) Призовой @else Обычный @endif</td>
                <td>{{ getFormatDate($check->created_at) }}</td>
                <td>{{ getFormatCode($check->code) }}</td>
                <td>@if ($check->type == 1) Принят @else Отклонен @endif</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

</div>
@endsection
