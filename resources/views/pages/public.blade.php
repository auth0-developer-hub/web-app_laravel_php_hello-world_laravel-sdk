@extends('layout')

@section('content')
<div class="content-layout">
    <h1 id="page-title" class="content__title">Public Page</h1>
    <div class="content__body">
        <p id="page-description">
            <span>This page retrieves a <strong>public message</strong>.</span>
            <br>
            <br>
            <span>
                <strong>Any visitor can access this page.</strong>
            </span>
        </p>
        <x-code-snippet title="Public Message" code="{{ json_encode($message->toArray(), \JSON_PRETTY_PRINT) }}" />
    </div>
</div>
@endsection
