<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            {!! Form::label('contract_number', 'Sutartis Nr:', ['class' => 'control-label']) !!}
            {!! Form::number('contract_number', null, ['class' => 'form-control', 'placeholder' => 'parašykit Sutartis Nr', 'required']) !!}
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            {!! Form::label('date', 'Data:', ['class' => 'control-label']) !!}
            {!! Form::date('date', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            {!! Form::label('place', 'Vieta:', ['class' => 'control-label']) !!}
            {!! Form::text('place', null, ['class' => 'form-control', 'placeholder' => 'parašykit Vieta', 'required']) !!}
        </div>
    </div>
</div>
<hr>

{{--Seller (Pardavejas)--}}
<h3 class="text-center">Pardavejas</h3>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('seller_full_name', 'Vardas/pavardė:', ['class' => 'control-label']) !!}
            {!! Form::text('seller_full_name', null, ['class' => 'form-control', 'placeholder' => 'parašykit Vardas Pavarde', 'required']) !!}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('seller_date_of_birth', 'Gimimo Data:', ['class' => 'control-label']) !!}
            {!! Form::date('seller_date_of_birth', null, ['class' => 'form-control', 'placeholder' => 'parašykit Gimimo Data', 'required']) !!}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('seller_place_of_residence', 'Gyvenantis adresas:', ['class' => 'control-label']) !!}
            {!! Form::text('seller_place_of_residence', null, ['class' => 'form-control', 'placeholder' => 'parašykit Gyvenantis adresas', 'required']) !!}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('seller_phone_number', 'Tel:', ['class' => 'control-label']) !!}
            {!! Form::number('seller_phone_number', null, ['class' => 'form-control', 'placeholder' => 'parašykit Tel.', 'required']) !!}
        </div>
    </div>
</div>
<hr>

{{-- Buyer (Pirkejas)--}}
<h3 class="text-center">Pirkejas</h3>
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            {!! Form::label('buyer_full_name', 'Vardas/pavardė:', ['class' => 'control-label']) !!}
            {!! Form::text('buyer_full_name', null, ['class' => 'form-control', 'placeholder' => 'parašykit Vardas Pavarde', 'required']) !!}
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            {!! Form::label('buyer_company_name', 'Imonės pavadinimas:', ['class' => 'control-label']) !!}
            {!! Form::text('buyer_company_name', null, ['class' => 'form-control', 'placeholder' => 'parašykit Imonės pavadinimas', 'required']) !!}
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            {!! Form::label('buyer_personal_code', 'Asmens kodas:', ['class' => 'control-label']) !!}
            {!! Form::number('buyer_personal_code', null, ['class' => 'form-control', 'placeholder' => 'parašykit Asmens kodas', 'required']) !!}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('buyer_place_of_residence', 'Buveinės adresas:', ['class' => 'control-label']) !!}
            {!! Form::text('buyer_place_of_residence', null, ['class' => 'form-control', 'placeholder' => 'parašykit Buveinės adresas', 'required']) !!}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('buyer_phone_number', 'Tel:', ['class' => 'control-label']) !!}
            {!! Form::number('buyer_phone_number', null, ['class' => 'form-control', 'placeholder' => 'parašykit Tel.', 'required']) !!}
        </div>
    </div>
</div>
<hr>

{{-- Sutarties objektas --}}
<h3 class="text-center">Sutarties objektas</h3>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('plot_goal', 'Sklypo paskirtis:', ['class' => 'control-label']) !!}
            {!! Form::select('plot_goal', [
             'žemės ūkio',
             'miškų ūkio',
             'kitos paskirties'
            ],null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('cadastral_number', 'Kadastrinis Nr:', ['class' => 'control-label']) !!}
            {!! Form::text('cadastral_number', null, ['class' => 'form-control', 'placeholder' => 'parašykit Kadastrinis Nr', 'required']) !!}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('address', 'Adresas:', ['class' => 'control-label']) !!}
            {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'parašykit Adresas', 'required']) !!}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('plot_area', 'Sklypo plotas:', ['class' => 'control-label']) !!}
            {!! Form::text('plot_area', null, ['class' => 'form-control', 'placeholder' => 'parašykit Sklypo plotas', 'required']) !!}
        </div>
    </div>
</div>
<hr>
{{--Turto kaina ir atsiskaitymo salygos--}}
<h3 class="text-center">Turto kaina ir atsiskaitymo sąlygos</h3>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('sum', 'Suma (suma žodžiais):', ['class' => 'control-label']) !!}
            {!! Form::text('sum', null, ['class' => 'form-control', 'placeholder' => 'parašykit Suma', 'required']) !!}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('bank_name', 'Sklypo paskirtis:', ['class' => 'control-label']) !!}
            {!! Form::select('bank_name', [
             'DNB',
             'SEB',
             'SWEDBANK',
             'CITADELE',
             'PAYSERA',
             'BIGBANK'
            ],null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('invoice_number', 'Sąsk nr:', ['class' => 'control-label']) !!}
            {!! Form::text('invoice_number', null, ['class' => 'form-control', 'placeholder' => 'parašykit Sąsk nr', 'required']) !!}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('fine_sum', 'Baudą suma:', ['class' => 'control-label']) !!}
            {!! Form::text('fine_sum', null, ['class' => 'form-control', 'placeholder' => 'parašykit Baudą suma', 'required']) !!}
        </div>
    </div>
</div>
