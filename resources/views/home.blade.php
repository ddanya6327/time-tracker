@extends('layouts.app')

@section('title')
    Main
@endsection

@section('header_css')
    <link href="/css/main.css" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="tracking-data">
        <div class="user-status">
            <div class="user-status__name">
                Hello, hyoek!
            </div>
            <div class="user-status__level">
                <div class="level__text">
                    Lv. 17
                </div>
                <div class="level__bar">
                    80%
                </div>
            </div>
        </div>

        <div class="tracking-list">
            <div class="list__item">
                <div class="item__title">
                    Reading - 1 hour
                </div>
                <div class="item__description">
                    I read the little prince up to page 55.
                </div>
            </div>
            <div class="list__item">
                <div class="item__title">
                    Reading - 2 hour
                </div>
                <div class="item__description">
                    I read the little prince up to page 33.
                </div>
            </div>
        </div>

        <div class="tracking-buttons">
            <button>Time recoding</button>
            <button>Edit tag</button>
        </div>
    </div>
</div>
@endsection
