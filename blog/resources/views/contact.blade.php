@extends('layouts.app')

@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>Preencha o formulário abaixo para nos enviar uma mensagem e entraremos em contato com você o mais breve possível!</p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form nome="sentMessage" id="contactForm" novalidate>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Nome</label>
                            <input type="text" class="form-control" placeholder="Nome" id="nome" required data-validation-required-message="Por favor insira o seu nome.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Email </label>
                            <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Por favor insira o seu email .">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Numero Telemovel</label>
                            <input type="tel" class="form-control" placeholder="Numero Telemovel" id="telemovel" required data-validation-required-message="Por favor insira o seu Telefone.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Menssagem</label>
                            <textarea rows="5" class="form-control" placeholder="Messagem" id="messagem" required data-validation-required-message="Por favor insira a messagem."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <hr>

@endsection
