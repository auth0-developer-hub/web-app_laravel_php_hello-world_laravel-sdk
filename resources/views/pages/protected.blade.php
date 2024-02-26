@extends('layout')

@section('content')
<div class="content-layout">
    <h1 id="page-title" class="content__title">Protected Page</h1>
    <div class="content__body">
        <p id="page-description">
            <span>This page retrieves a <strong>protected message</strong>.</span>
            <br>
            <br>
            <span>
                <strong>Only authenticated users should access this page.</strong>
            </span>
        </p>
        <x-code-snippet title="Protected Message" code="{{ json_encode($message->toArray(), \JSON_PRETTY_PRINT) }}" />
    </div>
</div>
@endsection
