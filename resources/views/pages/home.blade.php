@extends('layouts.main-layout')
@section('content')
    <main>
        <h1>list employee</h1>
        <ul>
            @foreach ($employees as $employee)
                <li>
                    {{$employee -> firstname}}
                    {{$employee -> lastname}}
                    <br>
                    {{$employee -> location -> address}}
                    {{$employee -> location -> state}}
                    <br>
                    <ol>
                        @foreach ($employee -> tasks as $task)
                        <li>
                            {{$task -> name}}
                        </li>
                            
                        @endforeach
                    </ol>
                </li>
                
            @endforeach
        </ul>
    </main>
@endsection