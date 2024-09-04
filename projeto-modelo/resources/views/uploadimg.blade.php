@extends('layouts.app')

@section('conteudo')

<style>
    img{
        width:100px;
    }
    button{
        background-color: #F7F7F7;
            color: #35AD5E;
            border-radius: 14px;
            border: none;
            padding: 10px 20px 10px 20px;
            text-align: center;
            cursor: pointer;
            background-repeat: no-repeat;
            font-size: 15px;
            font-weight: 700;
            transition: 0.3s ease;
    }

    
    #btnArq{
        background-color: #35AD5E;
            color: #F7F7F7;
            border-radius: 14px;
            border: none;
            padding: 10px 20px 10px 20px;
            text-align: center;
            cursor: pointer;
            background-repeat: no-repeat;
            font-size: 15px;
            font-weight: 700;
            transition: 0.3s ease;
    }

    input{
        background-color: #35AD5E;
            color: #F7F7F7;
            border-radius: 14px;
            border: none;
            padding: 10px 20px 10px 20px;
            text-align: center;
            cursor: pointer;
            background-repeat: no-repeat;
            font-size: 15px;
            font-weight: 700;
            transition: 0.3s ease;
    }

    #file-upload-button{
        background-color: #35AD5E;
            color: #F7F7F7;
            border-radius: 14px;
            border: none;
            padding: 10px 20px 10px 20px;
            text-align: center;
            cursor: pointer;
            background-repeat: no-repeat;
            font-size: 15px;
            font-weight: 700;
            transition: 0.3s ease;
    }

</style>


@if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    @if(session('error'))
        <p>{{ session('error') }}</p>
    @endif

    @if(isset($imagePath))
        
        <img src="{{ asset($imagePath) }}"  style="max-width: 100%; height: auto;">
    @endif

    <form   action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input id="btnArq"  type="file" name="photo" accept="image/*" required>
        <button type="submit">Enviar Foto</button>
    </form>

    
 @endsection
