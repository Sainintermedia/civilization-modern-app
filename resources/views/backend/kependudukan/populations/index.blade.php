@extends('layouts.main')
@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')
@section('content')

    <table>
        <thead>
            <th>NO KK</th>
        </thead>
        <tbody>


            @forelse ($populations as $value => $population)
                <td>
                    {!! $population->no_kk !!}
                </td>
            @empty
                <h4>tidak ada data</h4>
            @endforelse

        </tbody>
    </table>
@endsection
@section('styles')
@endsection

@section('javas')
@endsection
