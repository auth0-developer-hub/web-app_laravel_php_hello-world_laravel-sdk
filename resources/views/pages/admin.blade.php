@extends('layout')

@section('content')
<div class="content-layout">
    <h1 id="page-title" class="content__title">Admin Page</h1>
    <div class="content__body">
        <p id="page-description">

            <span>This page retrieves an <strong>admin message</strong>.</span>
            <br>
            <br>
            <span>
                <strong>
                    Only authenticated users with the <code>read:admin-messages</code> permission should access this page.
                </strong>
            </span>
        </p>
        <x-code-snippet title="Admin Message" code="{{ json_encode($message->toArray(), \JSON_PRETTY_PRINT) }}" />
    </div>
</div>
@endsection
