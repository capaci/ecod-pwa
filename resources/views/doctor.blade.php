<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/materialize/css/materialize.min.css') }}" media="screen,projection">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/timeline.css') }}" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<header>
    <nav>
        <div class="nav-wrapper red accent-4">
            <a href="#!" class="brand-logo center"><img src="assets/img/logo branca.png" alt="" style="max-width: 100px;"></a>
        </div>
    </nav>
</header>

<main class="container main-container">
    <div class="row">
        <div class="col m3">
            <div class="col-content">
                <img src="assets/img/profile.jpg" class="responsive-img img-max-mobile">
            </div>
        </div>
        <div class="col m9">
            <div class="row">
                <div class="col s12">
                    <div class="input-field col s12">
                        <input id="complete_name" type="text" class="validate" disabled value="{{ $name }}">
                        <label for="complete_name">Nome Completo</label>
                    </div>
                </div>
                <div class="col s12 m7">
                    <div class="input-field col s12">
                        <input type="text" class="validate"  disabled value="{{ $birthday }}">
                        <label for="date">Data de Nascimento</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="nacionalidade" type="text" class="validate" disabled value="{{ $nationality }}">
                        <label for="nacionalidade">Nacionalidade</label>
                    </div>
                </div>
                <div class="col s12 m5">
                    <div class="gender-select input-field col s12">
                        <select class="gender-select__button" disabled >
                            <option value="" disabled>selecione uma opção</option>
                            <option value="female" {{ $gender === "female" ? "selected" : "" }}>Feminino</option>
                            <option value="male" {{ $gender === "male" ? "selected" : "" }} >Masculino</option>
                            <option value="custom" {{ $gender === "custom" ? "selected" : "" }}>Personalizado</option>
                        </select>
                        <label>Gênero</label>
                    </div>
                    <div id="custom-gender" class="input-field col s12 hide">
                        <input name="gender" type="text" id="custom-gender__input" class="validate" value="{{ $custom_gender }}"/>
                        <label for="custom-gender_input">Genêro com a qual se identifica</label>
                        <a href="" class="close">x</a>
                    </div>

                    <div class="input-field col s12">
                        <select disabled>
                            <option value="" disabled selected>selecione uma opção</option>
                            <option value="A+" {{ $blood_type === "A+" ? "selected" : "" }}>A+</option>
                            <option value="A-" {{ $blood_type === "A-" ? "selected" : "" }}>A-</option>
                            <option value="B+" {{ $blood_type === "B+" ? "selected" : "" }}>B+</option>
                            <option value="B-" {{ $blood_type === "B-" ? "selected" : "" }}>B-</option>
                            <option value="AB+" {{ $blood_type === "AB+" ? "selected" : "" }}>AB+</option>
                            <option value="AB-" {{ $blood_type === "AB-" ? "selected" : "" }}>AB-</option>
                            <option value="O+" {{ $blood_type === "O+" ? "selected" : "" }}>O+</option>
                            <option value="O-" {{ $blood_type === "O-" ? "selected" : "" }}>O-</option>
                        </select>
                        <label>Tipo Sanguíneo</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 tab-menu">
            <ul id="tabs-swipe-demo" class="tabs">
                <li class="tab col s6 red accent-1"><a class="active red-text text-lighten-5" href="#prontuario-geral">Anamnese Geral</a></li>
                <li class="tab col s6 red accent-1"><a class="red-text text-lighten-5" href="#historico-consultas">Histórico de Consultas</a></li>
            </ul>
        </div>
        <div id="prontuario-geral" class="col s12">
            <div class="row">
                <div class="col s12 m8">
                    <div class="input-field col s12">
                        <select multiple disabled>
                            <option value="" disabled selected></option>
                            <option value="acaros" selected>Ácaros</option>
                            <option value="fungos">Fungos</option>
                            <option value="insetos">Insetos</option>
                            <option value="pelos de animais" selected>Pelos de animais</option>
                            <option value="polens" selected>Pólens</option>
                            <option value="alimentos">Alimentos</option>
                        </select>
                        <label>Possuo alergia a:</label>
                    </div>

                    <div class="col s12">
                        <h5>Em caso de emergência, avisar:</h5>
                        <div class="input-field col s7">
                            <input name="nome-familiar1" type="text" id="nome-familiar1" class="validate" disabled value="{{ $nome_familiar1 }}"/>
                            <label for="nome-familiar1">Nome do Familiar 1</label>
                        </div>
                        <div class="input-field col s5">
                            <input name="tel-familiar1" type="text" id="tel-familiar1" class="validate" disabled value="{{ $tel_familiar1 }}"/>
                            <label for="tel-familiar1">Telefone do Familiar 1</label>
                        </div>
                        <div class="input-field col s7">
                            <input name="nome-familiar2" type="text" id="nome-familiar2" class="validate" disabled value="{{ $nome_familiar2 }}"/>
                            <label for="nome-familiar2">Nome do Familiar 2</label>
                        </div>
                        <div class="input-field col s5">
                            <input name="tel-familiar2" type="text" id="tel-familiar2" class="validate" disabled value="{{ $tel_familiar2 }}"/>
                            <label for="tel-familiar2">Telefone do Familiar 2</label>
                        </div>
                        <div class="input-field col s7">
                            <input name="nome-médico" type="text" id="nome-médico" class="validate" disabled value="{{ $nome_medico }}"/>
                            <label for="nome-médico">Nome do Médico</label>
                        </div>
                        <div class="input-field col s5">
                            <input name="tel-médico" type="text" id="tel-médico" class="validate" disabled value="{{ $tel_medico }}"/>
                            <label for="tel-médico">Telefone do Médico</label>
                        </div>
                        <div class="input-field col s7">
                            <input name="nome-plano" type="text" id="nome-plano" class="validate" disabled value="{{ $nome_plano }}"/>
                            <label for="nome-plano">Plano de saúde</label>
                        </div>
                        <div class="input-field col s5">
                            <input name="tel-plano" type="text" id="tel-plano" class="validate" disabled value="{{ $tel_plano }}"/>
                            <label for="tel-plano">Telefone do Plano</label>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <img class="responsive-img img-max-mobile" src="assets/img/qrcode.png">
                </div>
            </div>
            <div class="row">
                <div class="col s12 anamnese">
                    <h4 class="center">Anamnese</h4>

                    <div class="anamnese__group">
                        <h5>HP - Histórico Pessoal (hábitos de vida) AVD's</h5>

                        <div class="row">
                            <div class="col s6">
                                <p>
                                    <input type="checkbox" id="tabagismo" {{ $tabagismo === "on" ? "checked" : "" }} disabled/>
                                    <label for="tabagismo">Tabagismo</label>
                                </p>
                                <p>
                                    <input type="checkbox" disabled id="sedentarismo" {{ $sedentarismo === "on" ? "checked" : "" }}/>
                                    <label for="sedentarismo">Sedentarismo</label>
                                </p>
                            </div>
                            <div class="col s6">
                                <p>
                                    <input type="checkbox" id="etilismo" {{ $etilismo === "on" ? "checked" : "" }} disabled/>
                                    <label for="etilismo">Etilismo</label>
                                </p>
                                <p>
                                    <input type="checkbox" disabled id="atividade-fisica" {{ $atividade_fisica === "on" ? "checked" : "" }} />
                                    <label for="atividade-fisica">Prática de atividades físicas</label>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="anamnese__group">
                        <h5>HMP - Histórico da moléstia progressa (Doenças anteriores e atuais)</h5>
                        <div class="row">
                            <div class="col s6">
                                <p>
                                    <input type="checkbox" disabled id="musculoesquelética" {{ $musculoesqueletica === "on" ? "checked" : "" }}/>
                                    <label for="musculoesquelética">Musculoesquelética</label>
                                </p>
                                <p>
                                    <input type="checkbox" disabled id="cardiovascular" {{ $cardiovascular === "on" ? "checked" : "" }}/>
                                    <label for="cardiovascular">Cardiovascular</label>
                                </p>
                                <p>
                                    <input type="checkbox" disabled id="uroginecologia" {{ $uroginecologia === "on" ? "checked" : "" }}/>
                                    <label for="uroginecologia">Uroginecologia</label>
                                </p>
                            </div>
                            <div class="col s6">
                                <p>
                                    <input type="checkbox" disabled id="etilismo" {{ $neurologia === "on" ? "checked" : "" }}/>
                                    <label for="etilismo">Neurológica</label>
                                </p>
                                <p>
                                    <input type="checkbox" disabled id="atividade-fisica" {{ $cardio === "on" ? "checked" : "" }}/>
                                    <label for="atividade-fisica">Cardiorrespiratória</label>
                                </p>
                                <p>
                                    <input type="checkbox" disabled id="atividade-fisica" {{ $outras === "on" ? "checked" : "" }}/>
                                    <label for="atividade-fisica">Outras</label>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="anamnese__group">
                        <h5>HMF - Histórico da moléstia Familiar(Info. relativas às doenças dos pais/avós)</h5>
                        <div class="row">
                            <div class="col s6">
                                <p>
                                    <input type="checkbox" disabled id="hipertensao" {{ $hipertensao === "on" ? "checked" : "" }}/>
                                    <label for="hipertensao">Hipertensão</label>
                                </p>
                                <p>
                                    <input type="checkbox" disabled id="diabetes" {{ $diabetes === "on" ? "checked" : "" }}/>
                                    <label for="diabetes">Diabetes</label>
                                </p>
                                <p>
                                    <input type="checkbox" disabled id="CA" {{ $CA === "on" ? "checked" : "" }}/>
                                    <label for="CA">CA</label>
                                </p>
                            </div>
                            <div class="col s6">
                                <p>
                                    <input type="checkbox" disabled id="degenerativas" {{ $degenerativas === "on" ? "checked" : "" }}/>
                                    <label for="degenerativas">Doenças degenerativas</label>
                                </p>
                                <p>
                                    <input type="checkbox" disabled id="vasculares" {{ $vasculares === "on" ? "checked" : "" }}/>
                                    <label for="vasculares">Doenças Vasculares </label>
                                </p>
                                <p>
                                    <input type="checkbox" disabled id="neurologicas" {{ $neurologicas === "on" ? "checked" : "" }}/>
                                    <label for="neurologicas">Doenças Neurológicas</label>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="anamnese__group">
                        <h5>Cirurgias/internações</h5>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="cirurgias" class="materialize-textarea" disabled>{{ $cirurgias }}</textarea>
                                <label for="cirurgias">Descreva os procedimentos cirúrgicos ou internações pelos quais você passou</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="historico-consultas" class="col s12">
            <section id="timeline" class="timeline-outer">
                <div class="container" id="timeline-content">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <ul class="timeline">
                                <li class="event" data-date="2015/Present">
                                    <h3>Management and Entreprenurship (MSc)</h3>
                                    <p>
                                        This September 2015 I will begin an MSc in Management and Entrepreneurship at University of Sussex, to broaden my knowledge and gain skills necessary for my future in business and management.
                                    </p>
                                </li>
                                <li class="event" data-date="2015/Present">
                                    <h3>Claromentis</h3>
                                    <p>
                                        Claromentis is an intranet software provider company. I started working at the Brighton office as a Marketing Designer while I was still attending my final year at the University of Sussex. My primary responsibilities included creating corporate identity
                                        for the company; I re-designed their website, and have created marketing materials such as brochures.
                                    </p>
                                    <p>Since graduating from university, I have also undertaken responsibilities for designing a product for the company. The roles I have been given have provided the perfect opportunity to implement the skills I have gained throughout my higher
                                        education, as well as experiencing the running of a successful business.</p>
                                </li>
                                <li class="event" data-date="2012/2015">
                                    <h3>Games & Multimedia Environments BSc (Hons)</h3>
                                    <p>Throughout my degree I have gained expansive knowledge of informatics areas including Human Computer Interaction, Multimedia Design and Development, Program Analysis and Design For my final year project, I created a 2D Puzzler Game for iOS
                                        called 'Flat Ball' and received a first. I therefore hope to release this game and further develop it to add new levels and improve the features.
                                    </p>
                                </li>
                                <li class="event" data-date="2012/2015">
                                    <h3>1108 Studios</h3>
                                    <p>This is a small startup that a friend and I created to gain more skills and apply those I had learned while completing my diploma. Since its inception, as a front - end web developer I have advised, designed and built web solutions for numerous
                                        clients.</p>
                                </li>
                                <li class="event" data-date="2010/2012">
                                    <h3>IT Practitioners BTEC National Diploma</h3>
                                    <p>This is where my interest in building things for interactive media began. During my first computing course I studied a range of core topics including multimedia design, database design, computer games development, computer networks and object
                                        oriented programming.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="row">
        <h4 class="section-title center red accent-4 red-text text-lighten-5">História da moléstia atual/Queixa principal</h4>
        <form action="">
            <div class="col s12">
                <div class="input-field col s12 m8">
                    <input id="passport-number" name="passport-number" type="text" class="validate">
                    <label for="passport-name">Número do Passaporte</label>
                </div>
                <div class="input-field col s12 m4">
                    <input type="date" class="datepicker validate" name="nome-hospital">
                    <label for="date">Data de Atendimento</label>
                </div>
                <div class="input-field col s12 m8">
                    <input id="complete_name" type="text" class="validate">
                    <label for="complete_name">Nome do Hospital</label>
                </div>
                <div class="input-field col s12 m4">
                    <label for="hora-atendimento">Hora do atendimento</label>
                    <input type="text" class="timepicker validate" name="hora-atendimento">
                </div>
            </div>
            <div class="col s12">
                <div class="input-field col s12">
                    <textarea id="descricao_quadro" class="materialize-textarea"></textarea>
                    <label for="descricao_quadro">Descrição do quadro do paciente</label>
                </div>
            </div>
        </form>
    </div>

</main>



                <!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{ URL::asset('assets/materialize/js/materialize.min.js') }}" ></script>
<script src="{{ URL::asset('assets/js/main.js') }}"></script>
            </body>
            </html>
