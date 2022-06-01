<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi cuenta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-image: url(https://cdn.pixabay.com/photo/2016/03/26/13/09/workspace-1280538_960_720.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .calendario{
            text-align:center;
            width: 300px;
            background-color: white;
        }
        ol{
            list-style: none;
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            padding:0px;
        }
        li{
            text-align: right;
        }
        .first-day{
            grid-column-start: 7;
        }
        .day-name{
            background: #eee;
            font-weight:bold;
            /* text-align: left; */
        }
        .ocupado{
            color: red;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id="menu">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Inicio</a>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/maderas') }}">Maderas</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/contacto') }}">Contacto</a>
                    </li>
                </ul>
                    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <div class="container">
        <div class="calendario">
            <h1>Junio 2021</h1>
            <ol>
                <li class="day-name">Lun</li>
                <li class="day-name">Mar</li>
                <li class="day-name">Mie</li>
                <li class="day-name">Jue</li>
                <li class="day-name">Vie</li>
                <li class="day-name">Sab</li>
                <li class="day-name">Dom</li>
                <li class="first-day">1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
                <li class="ocupado">10</li>
                <li class="ocupado">11</li>
                <li class="ocupado">12</li>
                <li class="ocupado">13</li>
                <li>14</li>
                <li>15</li>
                <li>16</li>
                <li>17</li>
                <li>18</li>
                <li>19</li>
                <li>20</li>
                <li>21</li>
                <li>22</li>
                <li>23</li>
                <li>24</li>
                <li>25</li>
                <li>26</li>
                <li>27</li>
                <li>28</li>
                <li>29</li>
                <li>30</li>
            </ol>
        </div>
    </div>
</body>