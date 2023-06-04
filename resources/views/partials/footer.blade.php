<div class="bg-footer">
    <div class="d-flex justify-content-center pt-5 pb-3">

        <h1 class="text-white">
            TEAM 5
        </h1>
    </div>
    <div class=" p-3 d-flex  justify-content-around">
        <ul >
            <li>
                <h4 class="footer-title">Servizio Clienti</h3>
            </li>
            <li>
                <a class="footer-link nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li>
                <a class="footer-link nav-link" href="{{ route('register') }}">{{ __('Registrati') }}</a>
            </li>
            <li>
                <a class="footer-link nav-link" href="">Domande frequenti</a>
            </li>
            <li>
                <a class="footer-link nav-link" href="">Miglior Prezzo Garantito</a>
            </li>
            <li>
                <a target="_blank" class="footer-link nav-link" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Scarica l'app di DeliveBoo</a>
            </li>
        </ul>

        
        

        <ul>
            <li>
                <h4 class="footer-title">Chi siamo</h3>
            </li>
            <li>
                <a target="_blank" class="footer-link nav-link" href="https://www.youtube.com/watch?v=4UbmI_S7XjI">Informazioni su DeliveBoo</a>
            </li>
            <li>
                <a class="footer-link nav-link" href="">Diventa partner di DeliveBoo</a>
            </li>
            <li>
                <a class="footer-link nav-link" href="">Programma Bug Bounty</a>
            </li>
            <li>
                <a class="footer-link nav-link" href="">Lavora con noi</a>
            </li>
            <li>
                <a class="footer-link nav-link" href="">Media & Press</a>
            </li>
           
            
            
        </ul>
    </div>
</div>

<style scoped>
    li {
        list-style-type: none;
        color: white;
    }

    .footer-link {
        font-weight: lighter;
    }

    .footer-title {
        font-weight: bolder;
    }

    .bg-footer {
        background-color: #FF7659
    }

    .container-footer {
        margin: 0;
    }
</style>