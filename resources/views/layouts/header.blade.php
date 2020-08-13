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
