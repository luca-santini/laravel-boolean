@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center"><i class="fas fa-envelope"></i> CANDIDATI ORA</h1>
                <form>
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email*">
                    </div>
                  <div class="form-group">
                    <input type="name" class="form-control" id="exampleInputname1" placeholder="Nome*">
                  </div>
                 <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Accetto la Privacy Policy</label>
                  </div>
                  <button type="button" class="btn btn-success">Candidati ora</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('page-title', 'Contattaci')
