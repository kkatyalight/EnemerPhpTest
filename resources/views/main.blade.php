<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
     <meta name="csrf-token" content="{{ csrf_token() }}">   
 
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        
    <link
    rel="stylesheet"
    href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css"
  >
    <link
    rel="stylesheet"
    href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css"
  >
    <title>Document</title>
    <link rel="stylesheet" href="./main.scss">
</head>

<body class="averta-cy font-weight-normal text-primary">
    <header class="container mb-5" style="height: 90px;">
        <div class="d-flex h-100 my-auto gap-5 align-items-center">
            <img class='col align-middle' src="./images/logo.svg" alt="logo">
            <div class='col-6 d-flex flex-row 
            justify-content-around align-items-center work-sans'>
                <p class="m-0">O nas</p>
                <p class="m-0">Usługi</p>
                <p class="m-0">Cennik</p>
                <p class="m-0">Kontakt</p>
                <p class="m-0">Opinie</p>
                <p class="m-0">Pytania i odpowiedzi</p>
            </div>
            <div class="col d-flex flex-column">
                <p class="m-0 font-weight-bold">+48690590089</p>
                <p class="m-0">Zamów rozmowę</p>
            </div>
            <div class="col d-flex g-1 align-items-center">
                <button class="btn btn-secondary dropdown-toggle"
                type="button" id="languageButton" 
                data-toggle="dropdown" 
                aria-expanded="false">
                PL
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li class="dropdown-item">PL</li>
                    <li class="dropdown-item">RU</li>
                    <li class="dropdown-item">EN</li>
                </ul>
                
            </div>
        </div>
        
    </header>
    <section class="container mb-5">
        <div class="row gx-3">
            <div class="col-xl-7 row h-100 align-middle">
                <h1 class="averta-cy-semibold">Nasi kurierzy</h1>
                <div class="d-flex flex-wrap gap-3 w-100">
                    <div class="card shadow rounded g-col-4" style="width: 232px; height: 104px;">
                        <img class='d-block m-auto' src="./images/partner1.svg" alt=""> 
                    </div>
                    <div class="card shadow rounded g-col-4" style="width: 232px; height: 104px;">
                        <img class='d-block m-auto' src="./images/partner2.svg" alt="">
                    </div>
                    <div  class="card shadow rounded g-col-4" style="width: 232px; height: 104px;">
                        <img class='d-block m-auto' src="./images/partner3.svg" alt="">
                    </div>
                    <div class="card shadow rounded g-col-4" style="width: 232px; height: 104px;">
                        <img class='d-block m-auto' src="./images/partner4.svg" alt="">
                    </div>
                    <div class="card shadow rounded g-col-4" style="width: 232px; height: 104px;">
                        <img class='d-block m-auto' src="./images/partner5.svg" alt="">
                    </div>
                    <div  class="card shadow rounded g-col-4" style="width: 232px; height: 104px;">
                        <img class='d-block m-auto' src="./images/partner6.svg" alt="">
                    </div>
                    <div class="card shadow rounded g-col-4" style="width: 232px; height: 104px;">
                        <img class='d-block m-auto' src="./images/partner7.svg" alt="">
                    </div>
                    <div class="card shadow rounded g-col-4" style="width: 232px; height: 104px;">
                        <img class='d-block m-auto' src="./images/partner8.svg" alt="">
                    </div>
                    <div  class="card shadow rounded g-col-4" style="width: 232px; height: 104px;">
                        <img class='d-block m-auto' src="./images/partner9.svg" alt="">
                    </div>
                </div>
            </div>
            <img class="col-xl-5 row object-fit-cover" src="./images/partners_main.png" alt="">
        </div>
    </section>

    <div class="container-fluid mb-5 p-0 pt-3 bg form-container overflow-auto" 
    style="background-image: url('./images/form_main_img.png');">
        <form name="mainForm" id="mainForm" method="post" action="javascript:void(0)"
        class="bg-primary bg-opacity-80 text-white w-50 w-xl-33 h-auto ms-5 p-4 top-0 start-0">
        
        {{csrf_field()}}
        
            <h2 class="averta-cy-bold">Szukasz najlepszej oferty?</h2>
            <h6>Zostaw aplikację, a nasz menedżer skontaktuje się z Tobą w celu konsultacji</h6>
            
            <div class="averta-pe d-flex flex-column my-4 justify-content-between gap-2 w-100">
                <div class="row d-flex gap-3 justify-content-between w-100">
                    <div class="col-4 custom-floating p-0">

                        <input required type="text" placeholder=""
                        id='first_name' name='first_name'
                        class="pt-3 pb-1 text-white">
                        <label class="p-0" for="first_name">Twoje imię</label>
                    
                    </div>
                    <div class="col-4 custom-floating p-0">
                        
                        <input type="text" placeholder=""
                        id='middle_name' name='middle_name'
                        class="pt-3 pb-1 text-white">
                        <label class="p-0" for="middle_name">Twoje nazwisko</label>
                    
                    </div>
                    <div class="col-4 custom-floating p-0">

                        <input required  type="text" placeholder=""
                        id='last_name' name="last_name"
                        class="pt-3 pb-1 text-white">
                        <label class="p-0" for="last_name">Twoje drugie imię</label>
                    
                    </div>
                </div>
                
                <div class="col custom-floating">

                    <input required type="text" onclick="this.type='date'" placeholder=""
                    id='birth_date' name="birth_date"
                    class="w-100 pt-3 pb-1 text-white" >
                    <label class="p-0" for="birth_date">Twoje data urodzenia</label>
            
                </div>
                <div class="col custom-floating">

                    <input type="email" placeholder=""
                    id='email' name="email"
                    class="w-100 pt-3 pb-1 text-white" >
                    <label class="p-0" for="email">E-mail</label>

                </div>
                <div class="col custom-floating">
                    <input required type="tel" placeholder=""
                    id='phone' name='phone'
                    class="w-100 pt-3 pb-1 text-white">
                    {{-- pattern="\+375\-[0-9]{3}\-[0-9]{3}\-[0-9]{2}\-[0-9]{2}"> --}}
                    <label class="p-0" for="phone">Telefon</label>

                </div>
                <div class="col w-100 input-group">
                    <div class="custom-dropdown dropend">
                        <span class="dropdown-toggle" type="button"
                        data-bs-toggle="dropdown">Wybierz swój kraj
                        </span>
                        <div class="dropdown-menu">
                            <img id="rus" class='dropdown-item' src="./images/rus-flag.svg" alt="">
                            <img id="bel" class='dropdown-item' src="./images/bel-flag.svg" alt="">
                        </div>
                    </div>

                </div>

                <div class="col sel custom-floating">                    
                    <select required name="marital_status" id="marital_status"
                    class="w-100 p-0 pt-3 pb-1 form-select text-white">
                        <option value='default' selected disabled hidden>Stan cywilny</option>
                        <option value="Холост/не замужем"> Samotny/niezamężny</option>
                        <option value="Женат/замужем">Żonaty</option>
                        <option value="В разводе">Rozwiedziony</option>
                        <option value="Вдовец/вдова">Wdowiec/wdowa</option>
                    </select>
                </div>
                <div class="col custom-floating">
                    <textarea id='about' name="about" placeholder="" maxlength='300'
                    class="d-block w-100 pt-3 pb-1 text-white" rows="1" max-rows="8" ></textarea>
                    <label class="p-0" for="about">O mnie</label>
                </div>
                <div class="col d-flex justify-content-between align-items-center">
                    <div class="checkbox">
                        <input required name="policy" type="checkbox" value="" id="policy">
                        <label  for="policy">
                            Przeczytałem zasady
                        </label>
                    </div>
                    <button type="submit" id="submit"
                     class="btn btn-secondary px-5 py-2 rounded-1" >Wysłać</button>
                </div>
            </div>
        </form>       
    </div>
    <footer class="container d-flex flex-column gap-5">
       
        <div class="row">
            <div class="col d-flex flex-column gap-5">
                <img src="./images/logo.svg" alt="" style="width: 221px; height: 50px;">
                <div class="d-flex flex-column gap-2">
                    <div class="d-flex gap-1">
                        <img src="./images/phone_icon.svg" alt="">
                        <p class="m-0">+48690590089</p>
                    </div>
                    <div class="text-secondary text-decoration-underline">
                        Zamów rozmowę
                    </div>
                    <div class="d-flex gap-1">
                        <img src="./images/email_icon.svg" alt="">
                        <p class="m-0">info@enemer.pl</p>
                    </div>
                    <div class="d-flex gap-1">
                        <img src="./images/address_icon.svg" alt="">
                        <p class="m-0">Błonie, Pass 20I, budynek 15, 05-870</p>
                    </div>
                </div>
            </div>
            <div class="col d-flex flex-column gap-3">
                <p class="m-0 averta-cy-bold">Usługi</p>
                <div class="d-flex flex-column gap-2">
                    <p class="m-0">Usługi logistyczne dla e-commerce</p>
                    <p class="m-0">Outsourcing magazynu</p>
                    <p class="m-0">Outsourcing logistyczny</p>
                    <p class="m-0">Obsługa logistyczna sklepów internetowych</p>
                    <p class="m-0">Logistyka kontraktowa</p>
                </div>
                <div class="d-flex gap-1">
                    <p class="m-0 text-secondary">Zobacz wszystkie</p>
                    <img src="./images/arrow_icon.svg" alt="">
                </div>
            </div>
            <div class="averta-cy-bold col d-flex flex-column gap-2">
                <p class="m-0">O nas</p>
                <p class="m-0">Cennik</p>
                <p class="m-0">Pytania i odpowiedzi</p>
                <p class="m-0">Kontakt</p>
                <p class="m-0">Blog</p>
            </div>
            <div class="text-light col d-flex flex-column gap-2">
                <p class="m-0">Space Logistics Sp.z.o.o. 02-727</p>
                <p class="m-0">Warszawa ul. Wołodyjowskiego 67A</p>
                <p class="m-0">KRS: 0000824771 NIP: 5213888029</p>
                <p class="m-0">REGON: 385377605</p>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <p class="text-decoration-underline">Polityka prywatności</p>
            <div class="d-flex gap-3 text-info">
                <p>dev.grizzly.by</p>
                <img src="./images/grizzly_icon.svg" alt="">
                <p>seo.grizzly.by</p>
            </div>
        </div>
    </footer>
    
   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.7.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>