@extends('layouts.template')

<div class="jumbotron py-5 px-6">
    <h1 style="margin-top: 20px;">Dashboard</h1>
    <div style="margin: 100px 50px; max-width: 20%;"  class="card mb-2";>
        <div class="row g-0">
        <div class="col-md-4">
            <img src="https://icons.veryicon.com/png/o/internet--web/prejudice/user-128.png" class="img-fluid rounded-start" style="max-height: 80px;">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">Peserta Didik</h5>
            <p class="card-text">{{ $jmlUser}}</p>
            </div>
        </div>
        </div>
    </div>
</div>