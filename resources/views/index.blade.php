@extends('layout.main')

@section('content')
<div class="hero">
    <h1 class="hero-title">Haz tu búsqueda...</h1>
    <form action="" method="get" class="form-index">
        <input type="text" name="contry" id="contry" placeholder="País" class="form-index__input">
        <input type="text" name="city" id="city" placeholder="Ciudad" class="form-index__input">
        <select name="select" id="select" class="form-index__input">
            <option value="option" class="form-index__input"></option>
        </select> <br>
        <input type="submit" value="Buscar" class="btn btn-primary btn-form">
    </form>
</div>


<script src="js/app.js"></script>
@endsection