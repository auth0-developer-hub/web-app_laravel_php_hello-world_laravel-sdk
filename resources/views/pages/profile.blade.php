@extends('layout')

@section('content')
<div class="content-layout">
    <h1 id="page-title" class="content__title">Profile Page</h1>
    <div class="content__body">
        <p id="page-description">
            <span>
                <strong>Only authenticated users should access this page.</strong>
            </span>
        </p>
        <div class="profile-grid">
            <div class="profile__header">
                <img src="{{ $userAttributes['picture'] }}" alt="Profile" class="profile__avatar" />
                <div class="profile__headline">
                    <h2 class="profile__title">{{ $userAttributes['name'] }}</h2>
                    <span class="profile__description">{{ $userAttributes['email'] }}</span>
                </div>
            </div>
            <div class="profile__details">
                <x-code-snippet title="User Profile Object" code='{!! $code !!}' />
            </div>
        </div>
    </div>
</div>
@endsection