<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet"  href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/layout/styles.css')}}">

        <!-- styles employee -->
        @if (\Request::is('trabajadores'))
            <link rel="stylesheet" type="text/css" href="{{ asset('css/employee/styles.css')}}">
        @endif

        @if (\Request::is('nuevo-trabajador'))
            <link rel="stylesheet" type="text/css" href="{{ asset('css/employee/styles.css')}}">
        @endif

        @if (\Request::is('ver-trabajador'))
            <link rel="stylesheet" type="text/css" href="{{ asset('css/employee/styles.css')}}">
        @endif

        @if (\Request::is('editar-trabajador'))
            <link rel="stylesheet" type="text/css" href="{{ asset('css/employee/styles.css')}}">
        @endif

        <!-- scripts wo -->
        @if (\Request::is('ordenes-de-trabajo'))
            <link rel="stylesheet" type="text/css" href="{{ asset('css/work_order/styles.css')}}">
        @endif

        @if (\Request::is('nueva-orden-de-trabajo'))
            <link rel="stylesheet" type="text/css" href="{{ asset('css/work_order/styles.css')}}">
        @endif

        @if (\Request::is('ver-orden-de-trabajo'))
            <link rel="stylesheet" type="text/css" href="{{ asset('css/work_order/styles.css')}}">
        @endif

        @if (\Request::is('editar-orden-de-trabajo'))
            <link rel="stylesheet" type="text/css" href="{{ asset('css/work_order/styles.css')}}">
        @endif

    </head>
    <body>

    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('trabajadores') }}">Trabajadores <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ordenes-de-trabajo') }}">Ordenes de Trabajo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Informe</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <section>
        <content>
            <div style="height: 20px;"></div>
