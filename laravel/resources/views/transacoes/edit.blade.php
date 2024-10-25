
@extends('layout')

@section('content')
<div class="container">
    <h1 class="my-4">Editar Transação</h1>
    <form method="POST" action="{{ route('transacoes.update', $transacao->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" class="form-control" id="tipo" name="tipo" value="{{ $transacao->tipo }}" required>
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="number" step="0.01" class="form-control" id="valor" name="valor" value="{{ $transacao->valor }}" required>
        </div>
        <div class="form-group">
            <label for="data">Data</label>
            <input type="date" class="form-control" id="data" name="data" value="{{ $transacao->data }}" required>
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <input type="text" class="form-control" id="categoria" name="categoria" value="{{[_{{{CITATION{{{_1{](https://github.com/Raaniaa/Grandi-/tree/8ce01b15ddeb48a6d6ba5cb1659fe1b25a6d11a3/resources%2Fviews%2Fauth%2Fregistermall.blade.php)[_{{{CITATION{{{_2{](https://github.com/cholladay0816/faqexercise/tree/6a047aad65b7ef7d19a2e4a5c1e98d11606b29a0/resources%2Fviews%2Ffaq_create.blade.php)[_{{{CITATION{{{_3{](https://github.com/rkustas/techarticles/tree/598d65a5c026d9ecd3c7f0258f4a44f93e7029d0/client%2Fpages%2F_document.js)[_{{{CITATION{{{_4{](https://github.com/tysonshazam/project/tree/94324036247d795c12c651e63228924b203c2c4f/resources%2Fviews%2Faddbussiness.blade.php)[_{{{CITATION{{{_5{](https://github.com/JIbraeelMehmood/Blog-dynamicPage-Web/tree/03212259b8e0093b29fa023694fb31071156ebe9/resources%2Fviews%2Fpages%2Fadmin-pageSection.blade.php)[_{{{CITATION{{{_6{](https://github.com/SangramjitHazarika/BankWebsite/tree/405eaeb1160166c731b4d4d0b6f4121cd0474da2/sparks%20foundation%20bank%2FAbout.php)[_{{{CITATION{{{_7{](https://github.com/Ankush123-h/University-Admission-System/tree/e5e05cb0d1ef1b0f6de75b2a141290a6dd4263ff/index.php)[_{{{CITATION{{{_8{](https://github.com/sk12r/FinalExam_5738029/tree/2bfa6f800631999bead0c4e899d4253c2eda2e8b/reportform.php)[_{{{CITATION{{{_9{](https://github.com/Agilbay04/VLMS-JTI/tree/ac9dee3ecf421da62ff9cf5b76dee9de633b83de/bootstrap-4.6.0%2Fsite%2Fcontent%2Fdocs%2F4.6%2Fcomponents%2Fnavbar.md)[_{{{CITATION{{{_10{](https://github.com/YRZZ/laravel_exam1/tree/9ea034cadbb2eb94ac89f0e3f251dae25683b398/resources%2Fviews%2Flayouts%2Fbase.blade.php)[_{{{CITATION{{{_11{](https://github.com/Radovancev/gintonic/tree/a330563c6c31f971b460d83425fc9db43cdc2a58/resources%2Fviews%2Fcomponents%2Fnavigation.blade.php)[_{{{CITATION{{{_12{](https://github.com/sohanasarah/itlliveweb_new/tree/81d3a202e4c2fb3dd1ac518deb1d15947cb346dc/resources%2Fviews%2Finc%2Fnavbar.blade.php)[_{{{CITATION{{{_13{](https://github.com/crrakib5/Courier-Service-Management-System-with-Laravel-Vue/tree/b159066b373b013db64103ae226685fbdfe731e1/resources%2Fviews%2Femployee%2Fhome.blade.php)[_{{{CITATION{{{_14{](https://github.com/Sgrives/lookingformarketing/tree/99208d78ebc407c745c08664307a953ba0177fcd/resources%2Fviews%2Fpartials%2Fnav.blade.php)[_{{{CITATION{{{_15{](https://github.com/jiyokaa/vlab/tree/c875290c4c11f1b384d9022a28b6e7898f5d0552/resources%2Fviews%2Flayouts%2F4col.blade.php)[_{{{CITATION{{{_16{](https://github.com/marcopolello/Laravel-E-Commerce/tree/edc35b652f58fa1f51ef581ace3ab729a471f3a8/laravel%2Fresources%2Fviews%2Fpartials%2Fmenus%2Fmain-right.blade.php)[_{{{CITATION{{{_17{](https://github.com/adhistria/IKD/tree/b14246873ea2976e97b5917d707631c1b1bc22cc/resources%2Fviews%2Fadmin-editadmin.blade.php)[_{{{CITATION{{{_18{](https://github.com/MustafaB3irat/fakker/tree/3c01d7068f2b176f71e6cd61ef534e9ac2d224ab/resources%2Fviews%2Fnavbar.blade.php)[_{{{CITATION{{{_19{](https://github.com/fikriguska/RPL/tree/a62b86d83df21800d54d82b459abe3995a75993f/resources%2Fviews%2Findex.blade.php)[_{{{CITATION{{{_20{](https://github.com/ramonsantana1987/php/tree/bec55b100eca4c97e9e96204a6b6232e598c0481/aula7%2Fresources%2Fviews%2Fcadastrar.blade.php)[_{{{CITATION{{{_21{](https://github.com/sampalm/vesti/tree/4b037784d8c635f7535a712bb272620d09cf59d0/resources%2Fviews%2Fcomposicao%2Fcadastro.blade.php)[_{{{CITATION{{{_22{](https://github.com/douglasdods/AABBeSports/tree/ad3e774d2a959f8c8942ed5e1c1ff6523f05013d/wp-content%2Fthemes%2Faabb%2Fsingle-campeonatos.php)[_{{{CITATION{{{_23{](https://github.com/kmiksi/catalogue/tree/49d4fcdcdd0f64d82700cff256f20a4894e5ba0b/app%2FView%2FCliente%2Fadd.php)[_{{{CITATION{{{_24{](https://github.com/wopenheimer/ecommerce/tree/39796c3009454b9d51fd95fea04ecaae2b9172e4/view%2Fcomum_novousuario.php)[_{{{CITATION{{{_25{](https://github.com/gmonnerat/marcelamonnerat.com.br/tree/a8b87cdff43a5ed96e0b74e3dcd9a9a36ce8cb9c/content%2Fcontato.md)[_{{{CITATION{{{_26{](https://github.com/LSheNNawY/hotel_system/tree/f605988553506216167e68e6151ed48c3cfad096/resources%2Fviews%2Fmanager%2Fusers%2Findex.blade.php)[_{{{CITATION{{{_27{](https://github.com/wopenheimer/ecommerce/tree/39796c3009454b9d51fd95fea04ecaae2b9172e4/view%2Fusuario_add.php)[_{{{CITATION{{{_28{](https://github.com/jonaskreling/haras/tree/de1d6585a4bc42b401d40945172040dfe9d43a9b/protected%2Fviews%2Fharas%2Fcadastro.php)[_{{{CITATION{{{_29{](https://github.com/ronaldogdn/exemplo-loja-online/tree/f31d3c7e89b3ed1d8ca382efc8f8e06e336ec11c/loginVendedores.php)[_{{{CITATION{{{_30{](https://github.com/viniciussvl/Top-SA-MP/tree/1211f2214eb34eb8d158ba38c0441264e619e754/topsamp-ci%2Fapplication%2Fviews%2Fregistrar_view.php)[_{{{CITATION{{{_31{](https://github.com/aepsaprul/abata_ho/tree/6becc6dc7b781ed440c76cc00ff70deefe975aac/resources%2Fviews%2Fauth%2Flogin.blade.php)[_{{{CITATION{{{_32{](https://github.com/LucasBlock/pramimechocolate/tree/252c6f931c2b5d1f6d0880e78006ab2dd93834ad/resources%2Fviews%2Fwelcome.blade.php)[_{{{CITATION{{{_33{](https://github.com/akazad1235/job-assignment/tree/c1e4c782dc405301576068fbaf87f4e8ea91c8c3/resources%2Fviews%2Fauth%2Flogin.blade.php)[_{{{CITATION{{{_34{](https://github.com/yopaw/template/tree/3050e51c997846cdcf0ac6dda599088b333d1395/resources%2Fviews%2Fauth%2Fregister.blade.php)[_{{{CITATION{{{_35{](https://github.com/marjys/petfinder/tree/7e183029bcca55b5196ea8cd515de54e199a30a4/resources%2Fviews%2Fpets%2Fdashboard.blade.php)[_{{{CITATION{{{_36{](https://github.com/cmunhozprog03/bloglaravel8/tree/bfb0c08e8c095d111f0b79f5e8d73d141b74c067/resources%2Fviews%2Flivewire%2Fadmin%2Fpost-index.blade.php)[_{{{CITATION{{{_37{](https://github.com/e-electrosystems/electroprice/tree/032c5345a40170a619a974599d0f9ef929db6c10/html%2Fphp%2Fviews%2FEquipoView.php)[_{{{CITATION{{{_38{](https://github.com/mariaraquel/Graficos/tree/c07cfe975bda7aa5cc57a331509ae46cd1dd2957/venda.php)[_{{{CITATION{{{_39{](https://github.com/IgorBavand/social_alunos_ufc/tree/41e3887b2c236427948f062f9c9435109850209f/cadHorario.php)[_{{{CITATION{{{_40{](https://github.com/ruansvictor/ph2full/tree/b9f3d4c9030021768e23cae4b355a9f89e343eb3/index.php)[_{{{CITATION{{{_41{](https://github.com/diegortx/Vue-Laravel/tree/a91fcfd77653343d467502181fe83b9a2332dc27/blog%2Fresources%2Fviews%2Fadmin%2Fartigos%2Findex.blade.php)[_{{{CITATION{{{_42{](https://github.com/jodamu/project_crm/tree/0f24241b042acc7b7d2b10daf7849f36c1e735de/resources%2Fviews%2Fusers%2Fedit.blade.php)[_{{{CITATION{{{_43{](https://github.com/beto20/Inventario-laravel/tree/c65929f4dfc0dd578248e1cce5a8ee6cad08f0ff/resources%2Fviews%2Farticulo%2FeditarArticulo.blade.php)
            