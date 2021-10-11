@extends('layouts.main')


@section('title','Создание проекта')




@section('content')
    <form method="post" action="{{ route('project.store') }}"  enctype="multipart/form-data">
        @csrf



        <div class="mb-3">
            <label for="title" class="form-label">Название проекта</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Введите название">
        </div>

        <div class="mb-3">
            <label class="form-label">Задачи</label>
            <ul id="mini-list">
                <li>
                    <input  class="form-control" type="text" name="mini[]">
                </li>
            </ul>
            <button id="add-mini">Добавить</button>
        </div>

        <h4><button class="btm_submit1" type ="submit">Создать</button></h4>

    </form>
@endsection




@section('scripts')
    @parent
    <script>
        //1. J_qverн повесил обработчик на кнопку
        $("#add-mini").on("click",function(event){
            event.preventDefault();
            //Логика нажатия на кнопку
            $("#mini-list").append('<li><input  class="form-control" type="text" name="mini[]"></li>')
        });
    </script>
@endsection

