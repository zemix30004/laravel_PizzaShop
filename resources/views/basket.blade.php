@extends('master')

@section('title', 'Корзина')

@section('content')
    <div class="starter-template">
        <h1>Корзина</h1>
        <p>Оформление заказа</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Стоимость</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <a href=">
                            <img height="56px" src="">
                            King Pizza
                        </a>
                    </td>
                    <td><span class="badge">1</span>
                        <div class="btn-group">
                            <a type="button" class="btn btn-danger" href=""><span
                                    class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
                            <a type="button" class="btn btn-success" href=""><span
                                    class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                        </div>
                    </td>
                    <td>16500 грн.</td>
                    <td>16500 грн.</td>
                </tr>
                <tr>
                    <td colspan="3">Общая стоимость:</td>
                    <td>23100 грн.</td>
                </tr>
                </tbody>
            </table>
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success" href="">Оформить заказ</a>
            </div>
        </div>
    </div>
@endsection
