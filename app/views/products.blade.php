@extends('template')

@section('contenido')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    <span class="fa fa-cube"></span> Productos
                    <small>Subtitle</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Breadcrumb & Actions -->
        <div class="row">
            <div class="col-md-10">
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>  <a href="index.html">Inicio</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-cube"></i> Productos
                    </li>
                </ol>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-block btn-primary">
                    <span class="fa fa-plus"></span> Nuevo producto
                </button>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th style="width: 30px;"></th>
                            <th>Nombre</th>
                            <th>Categoría</th>
                            <th>Precio</th>
                            <th>Fecha de registro</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                                        <span class="fa fa-bars"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-pencil-square-o"></i> Editar</a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Eliminar</a></li>
                                    </ul>
                                </div>
                            </td>
                            <td>Pan 1Kg</td>
                            <td>Alimentos</td>
                            <td class="text-right">120.00</td>
                            <td class="text-center">2015-01-01 00:00</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                                        <span class="fa fa-bars"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-pencil-square-o"></i> Editar</a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Eliminar</a></li>
                                    </ul>
                                </div>
                            </td>
                            <td>Coca Cola 1Lt</td>
                            <td>Bebidas</td>
                            <td class="text-right">340.99</td>
                            <td class="text-center">2015-01-01 00:00</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                                        <span class="fa fa-bars"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-pencil-square-o"></i> Editar</a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Eliminar</a></li>
                                    </ul>
                                </div>
                            </td>
                            <td>Camisa</td>
                            <td>Ropa y accesorios</td>
                            <td class="text-right">20.00</td>
                            <td class="text-center">2015-01-01 00:00</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                                        <span class="fa fa-bars"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-pencil-square-o"></i> Editar</a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Eliminar</a></li>
                                    </ul>
                                </div>
                            </td>
                            <td>Horno microndas</td>
                            <td>Artefactos para cocina</td>
                            <td class="text-right">1000.00</td>
                            <td class="text-center">2015-01-01 00:00</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

@endsection