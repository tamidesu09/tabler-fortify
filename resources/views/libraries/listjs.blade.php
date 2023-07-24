@extends('layouts.app')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Libraries
                </div>
                <h2 class="page-title">
                    Listjs
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container">
        <div class="row row-cards mt-2">
            @php
            $users = App\Models\User::all();
            @endphp
            <div id="users">
                <div class="d-flex bd-highlight mb-3">
                    <div class="me-auto bd-highlight">
                        <select class="form-select" name="paginator" id="paginator">
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div class="bd-highlight">
                        <ul id="listjs" class="pagination">

                        </ul>
                    </div>
                </div>
                <div class="text-end">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control search" placeholder="Search for…">
                        <button class="btn sort" data-sort="name">Sort by Name</button>
                    </div>
                </div>


                <ul class="list list-unstyled row">
                    @foreach ($users as $user)
                    <div class="col-sm-4 my-3">
                        <li>
                            <div class="card">
                                <div class="card-body p-4 text-center">
                                    <span class="avatar avatar-xl mb-3 rounded" style="background-image: url(./static/avatars/000m.jpg)"></span>
                                    <h3 class="m-0 mb-1 name"><a href="#">{{$user->name}}</a></h3>
                                    <div class="text-muted email">{{$user->email}}</div>
                                    <div class="mt-3">
                                        <span class="badge bg-purple-lt">Owner</span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <a href="#" class="card-btn"><!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                            <path d="M3 7l9 6l9 -6" />
                                        </svg>
                                        Email</a>
                                    <a href="#" class="card-btn"><!-- Download SVG icon from http://tabler-icons.io/i/phone -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                        </svg>
                                        Call</a>
                                </div>
                            </div>
                        </li>
                    </div>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

@include('scripts.listjs')
<script>
    window.addEventListener("DOMContentLoaded", (event) => {

        var options = {
            valueNames: ['name', 'email'],
            page: 25,
            pagination: true
        };
        var userList = new List('users', options);


        var paginatorSelect = document.getElementById('paginator');

        paginatorSelect.addEventListener('change', function() {
            var selectedValue = parseInt(paginatorSelect.value);

            options.page = selectedValue;

            userList.update();

        });

    });
</script>
@endsection