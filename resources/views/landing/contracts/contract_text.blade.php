    <h4 class="text-center">PRELIMINARIOJI PIRKIMO – PARDAVIMO SUTARTIS Nr. {{$object->contract_number}}</h4>
    <p class="text-center">{{$year}} m. {{$month}} mėn. {{$day}} d.,</p>
    <p class="text-center">{{$object->place}} (Vieta)</p>
    <p class="text-capitalize">
        <strong>{{$object->seller_full_name}} </strong>(vardas, pavardė), gimimo data <strong>{{$object->seller_date_of_birth}}</strong>,
        gyvenantis adresu  <strong>{{$object->seller_place_of_residence}}</strong>, toliau Sutartyje vadinamas „Pardavėjas“, ir
        <strong>{{$object->buyer_company_name}}</strong>, juridinio asmens kodas  <strong>{{$object->buyer_personal_code}}</strong>, buveinės adresas
        <strong>{{$object->buyer_place_of_residence}}</strong>, toliau Sutartyje vadinamas „Pirkėjas“,
        Pardavėjas ir Pirkėjas, kartu toliau vadinami Šalimis, vadovaudamiesi LR CK 6.165, 6.394, pasirašė šią
        sutartį, toliau vadinama Sutartimi
    </p>
    <h5><strong>1. Sutarties objektas</strong></h5>
    <p>
        1.1. Šioje sutartyje numatytomis sąlygomis ir terminais Pardavėjas įsipareigoja parduoti Pirkėjui, jam
        nuosavybės teise priklausantį turtą – žemės sklypą, sklypo paskirtis - <strong>{{$object->plot_goal}}</strong>,
        kadastrinis Nr. <strong>{{$object->cadastral_number}}</strong>, adresas <strong>{{$object->address}}</strong>,
        sklypo plotas <strong>{{$object->plot_area}}</strong>, (toliau sutartyje vadinamą „Turtas“), o Pirkėjas įsipareigoja šį Turtą
        nupirkti. Turto perleidimui šalys susitaria sudaryti kitą, notariškai tvirtinamą pagrindinę Turto pirkimo –
        pardavimo sutartį.
    </p>

    <h5><strong>2. Esminės Turto pirkimo – pardavimo sąlygos</strong></h5>
    <p>
        2.1. Šalių susitarimu, pagrindinė Turto pirkimo – pardavimo sutartis turi būti sudaryta ne vėliau, kaip iki (du
        mėnesiai nuo preliminariosios sutarties pasirašymo). Prieš sudarant pagrindinę Turto pirkimo – pardavimo
        sutartį, šalys turi suderinti tikslų sutarties sudarymo laiką ir vietą, ne vėlesnį, nei galutinis pagrindinės Turto
        pirkimo – pardavimo sutarties sudarymo terminas.<br>
        2.2. Preliminarios sutarties 2.2. punkte nurodytu terminu nesudarius pagrindinės Turto pirkimo – pardavimo
        sutarties, pareiga ją sudaryti šalims pasibaigia, išskyrus atvejį, jei pagrindinės sutarties sudarymo laikas šalių
        susitarimu yra pratęsiamas.<br>
        2.3. Pagrindinės Turto pirkimo–pardavimo sutarties sudarymo metu Turtas turi atitikti šios Sutarties nuostatas
        ir būti laisvas nuo bet kokių daiktinių teisių (servitutų, uzufruktų, hipotekų, ir pan.), trečiųjų asmenų teisių
        (turto patikėjimo, nuomos, panaudos ir pan.), teismo sprendimu ar kitos institucijos nutarimu pritaikyto arešto
        ar kitų apribojimų (draudimo disponuoti, įsiskolinimo už įsigytą turtą ir pan.,), kurie nėra nurodyti šioje
        Sutartyje.<br>
        2.4. Išlaidas susijusias su notaro paslaugomis pilnai apmoka Pirkėjas.<br>
        2.5. Pardavėjas teikdamas Nacionalinės žemės tarnybos prie Žemės ūkio ministerijos skyriui, apie parduodamą
        žemės sklypą, pardavimo sąlygose pateiks informaciją apie tai, kad sklypui parduoti buvo organizuotas
        aukcionas internetinėje sistemoje. dydžio atlyginimą aukciono organizatoriui sumoka Pirkėjas (ar galėtume
        pridėti dar vieną sakinį, kad pabrėžtume jog tai yra papildomas mokestis, neįskaičiuotas į pardavėjo kainą).
        Prieš sudarant pagrindinę Turto pirkimo – pardavimo sutartį, šalys turi suderinti tikslų sutarties sudarymo laiką
        ir vietą, ne vėlesnį, nei galutinis pagrindinės Turto pirkimo – pardavimo sutarties sudarymo terminas. Pirkėjas
        pareiškia, kad Turtą yra apžiūrėjęs gyvai ir tuo atveju jeigu Pardavėjas vengia ar nepagrįstai atsisako sudaryti
        su Pirkėju pagrindinę Turto pirkimo–pardavimo sutartį, nurodytomis sąlygomis ir terminais, tai jis įsipareigoja
        padengti kitos šalies patirtus tiesioginius minimalius nuostolius
    </p>
    <h5><strong>3. Turto kaina ir atsiskaitymo sąlygos</strong></h5>
    <p>
        3.1. Šalys susitaria, kad bendra Turto kaina, už kurią Pardavėjas parduos, o Pirkėjas įsigis Turtą, yra
        <strong>{{$object->sum}}</strong> Eur. (suma žodžiais).<br>
        3.2. Pirkėjas, pasirašydamas šią sutartį per 5 darbo dienas įsipareigoja sumokėti (10 (dešimt) procentų
        rankpinigius nuo Turto vertės) Eur sumą pavedimu į <strong>{{$object->bank_name}}</strong> atsiskaitomąją banko sąskaitą
        <strong>{{$object->invoice_number}}</strong> , ir kuri pagrindinės sutarties sudarymo atveju yra įskaitoma į bendrą Pirkėjo
        mokėtiną pirkimo – pardavimo kainą, nurodytą Sutarties 3.1 p. Nesumokėjus nurodytos sumos per 5 darbo
        dienas, ši Sutartis netenka galios.<br>
        3.3. Nuosavybės teisės perėjimo momentu laikoma Pirkėjo pilnas atsiskaitymas Pardavėjui už perkamą Turtą;
    </p>
    <h5><strong>4. Kitos Šalių pareigos ir atsakomybės:</strong></h5>
    <p>
        4.1. Šalys susitaria, kad Pardavėjas surinks ir paruoš visus pirkimui–pardavimui reikalingus dokumentus savo
        lėšomis. Pirkėjas įsipareigoja atlyginti Pirkėjo patirtas tiesiogines ir netiesiogines išlaidas, jei vėliau atsisakys
        sudaryti Notarinę pirkimo – pardavimo sutartį.<br>
        4.4. Ne vėliau, kaip iki pagrindinės Turto pirkimo – pardavimo sutarties sudarymo dienos, Pardavėjas privalo
        sumokėti visus būtinus, su Turtu susijusius mokėjimus, padengti skolas Turtui. To nepadarius, ši pareiga
        Pardavėjui išliks ir sudarius pagrindinę sutartį.<br>
        4.5. Pardavėjas įsipareigoja iki pagrindinės Turto pirkimo – pardavimo sutarties sudarymo tinkamai naudotis
        Turtu, nedaryti jokių pertvarkymų ir užkirsti kelią bet kokiems veiksmams, kurie galėtų kaip nors pakenkti
        Turtui ar iš esmės sumažinti jo vertę.<br>
        4.6. Jeigu Pardavėjas pažeidžia šios Sutarties sąlygas, vengia ar nepagrįstai atsisako sudaryti su
        Pirkėju pagrindinės Turto pirkimo–pardavimo sutarties, tai jis įsipareigoja padengti kitos šalies patirtus
        tiesioginius minimalius nuostoliu ir sumokėti baudą <strong>{{$object->fine_sum}}</strong> Eur
    </p>
    <div class="row">
        <div class="col-lg-3">
            <h6>Pardavėjas</h6>
            <p>Vardas Pavarde: {{$object->seller_full_name}}</p>
            <p>Gimimo data: {{$object->seller_date_of_birth}}</p>
            <p>Gyv. Vieta: {{$object->seller_place_of_residence}}</p>
            <p>Tel: {{$object->seller_phone_number}}</p><br>
            (parašas)
        </div>
        <div class="col-lg-3">
            <h6>Pirkėjas</h6>
            <p>Vardas Pavarde: {{$object->buyer_full_name}}</p>
            <p>Gimimo data: {{$object->buyer_personal_code}}</p>
            <p>Gyv. Vieta: {{$object->buyer_place_of_residence}}</p>
            <p>Tel: {{$object->seller_phone_number}}</p><br>
            (parašas)
        </div>
    </div>
    <br>

