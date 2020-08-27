<?php
/*
    $data = $project['elements']
*/

if(!function_exists('renderDropdown')){
    function renderDropdown($data){
        if(array_key_exists('slug', $data) && $data['slug'] === 'dropdown'){
            echo '<li class="c-sidebar-nav-dropdown">';
            echo '<a class="c-sidebar-nav-dropdown-toggle" href="#">';
            if($data['hasIcon'] === true && $data['iconType'] === 'coreui'){
                echo '<i class="' . $data['icon'] . ' c-sidebar-nav-icon"></i>';    
            }
            echo $data['name'] . '</a>';
            echo '<ul class="c-sidebar-nav-dropdown-items">';
            renderDropdown( $data['elements'] );
            echo '</ul></li>';
        }else{
            for($i = 0; $i < count($data); $i++){
                if( $data[$i]['slug'] === 'link' ){
                    echo '<li class="c-sidebar-nav-item">';
                    echo '<a class="c-sidebar-nav-link" href="' . env('APP_URL', '') . $data[$i]['href'] . '">';
                    echo '<span class="c-sidebar-nav-icon"></span>' . $data[$i]['name'] . '</a></li>';
                }elseif( $data[$i]['slug'] === 'dropdown' ){
                    renderDropdown( $data[$i] );
                }
            }
        }
    }
}
?>

      <div class="c-sidebar-brand">
        <h1>
            <a class="navbar-brand" href="{{ url('/') }}" style="color: white">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="50pt" height="30pt" viewBox="0 0 400.000000 266.000000"
                    preserveAspectRatio="xMidYMid meet">
                    <metadata>
                    Created by potrace 1.16, written by Peter Selinger 2001-2019
                    </metadata>
                    <g transform="translate(0.000000,266.000000) scale(0.100000,-0.100000)"
                    fill="#fff" stroke="none">
                    <path d="M2157 2202 c-27 -29 -22 -105 8 -150 31 -45 31 -47 -1 -94 l-26 -37
                    7 -155 7 -156 45 -41 c42 -38 47 -41 86 -34 82 14 229 6 279 -15 33 -14 74
                    -21 133 -23 l86 -2 45 47 c55 58 57 92 14 210 -37 100 -37 112 -3 161 28 40
                    41 101 42 193 1 43 -3 55 -30 82 -41 42 -97 44 -153 6 -39 -27 -40 -27 -132
                    -15 -51 6 -118 11 -149 11 -30 0 -72 7 -92 15 -52 22 -145 20 -166 -3z m126
                    -84 c12 -6 71 -15 132 -19 60 -4 145 -11 187 -15 71 -6 80 -5 129 20 28 15 55
                    24 59 19 14 -14 -14 -130 -40 -165 -34 -46 -40 -139 -12 -194 10 -21 25 -63
                    33 -93 12 -49 12 -54 -6 -67 -26 -19 -128 -18 -167 2 -40 21 -227 37 -282 24
                    -56 -12 -66 -1 -66 76 0 35 -5 83 -12 107 -10 40 -9 48 17 100 33 69 32 140
                    -4 188 -18 24 -19 29 -6 29 9 0 26 -5 38 -12z"/>
                    <path d="M2520 1939 c-23 -44 -44 -79 -48 -77 -4 2 -20 10 -35 18 -35 17 -61
                    5 -65 -32 -2 -20 8 -35 45 -67 67 -57 95 -56 127 7 13 26 40 74 60 106 51 85
                    46 126 -16 126 -25 0 -32 -9 -68 -81z"/>
                    <path d="M540 2150 l0 -50 100 0 100 0 0 -210 0 -210 50 0 50 0 0 210 0 210
                    105 0 105 0 0 50 0 50 -255 0 -255 0 0 -50z"/>
                    <path d="M1582 2184 c-22 -15 -22 -19 -22 -243 0 -208 2 -229 18 -244 16 -14
                    43 -17 168 -17 82 0 167 5 189 11 112 31 169 176 134 341 -16 75 -82 141 -157
                    157 -83 17 -303 15 -330 -5z m339 -107 c40 -27 54 -63 54 -141 -1 -133 -31
                    -156 -212 -156 l-103 0 0 161 0 161 118 -4 c88 -3 123 -8 143 -21z"/>
                    <path d="M1109 2047 c-50 -33 -59 -59 -59 -172 0 -113 9 -139 59 -172 31 -21
                    45 -23 155 -23 135 0 158 7 193 59 20 30 23 46 23 133 0 171 -29 198 -216 198
                    -109 0 -124 -2 -155 -23z m266 -172 l0 -90 -110 0 -110 0 -3 79 c-2 44 -1 85
                    2 93 4 11 29 13 113 11 l108 -3 0 -90z"/>
                    <path d="M3225 1920 c-41 -27 -55 -31 -87 -26 -21 3 -56 9 -77 12 -53 9 -88
                    -1 -96 -27 -15 -47 55 -72 201 -73 51 0 69 5 104 28 40 26 48 28 94 20 28 -5
                    106 -9 174 -9 l123 0 52 -44 c48 -40 55 -43 99 -39 28 3 63 16 86 31 22 14 52
                    27 68 29 27 3 29 6 29 43 l0 40 -52 0 c-40 -1 -58 -6 -76 -23 -37 -35 -87 -30
                    -126 13 -35 39 -32 38 -191 41 -63 1 -151 5 -195 8 -78 7 -81 7 -130 -24z"/>
                    <path d="M2185 1464 c-16 -9 -33 -22 -37 -28 -15 -23 -8 -101 12 -131 11 -16
                    20 -39 20 -50 0 -11 -9 -33 -20 -50 -27 -40 -27 -127 0 -188 16 -35 18 -51 10
                    -72 -19 -51 -12 -99 19 -129 28 -27 33 -28 93 -22 74 8 70 8 258 -2 80 -4 158
                    -13 173 -20 16 -7 39 -12 52 -12 30 0 92 36 105 60 25 47 1 193 -40 240 -28
                    33 -25 66 11 112 29 35 32 47 37 128 4 79 2 92 -17 124 -28 45 -65 53 -171 35
                    -65 -10 -112 -10 -238 -1 -86 7 -175 14 -197 17 -27 3 -50 0 -70 -11z m180
                    -95 c163 -21 262 -22 335 -5 38 10 74 14 80 11 5 -3 10 -32 10 -65 0 -52 -4
                    -63 -35 -100 -30 -36 -35 -49 -35 -93 0 -35 7 -63 21 -87 12 -19 30 -59 40
                    -89 18 -50 18 -56 3 -72 -14 -16 -19 -16 -57 -3 -29 11 -73 15 -142 13 -71 -2
                    -118 2 -160 14 -60 17 -129 15 -141 -4 -15 -25 -22 -2 -17 59 5 57 2 75 -16
                    110 -26 51 -26 63 -1 104 27 45 27 141 1 185 -23 36 -17 47 19 37 14 -3 57
                    -10 95 -15z"/>
                    <path d="M2568 1263 c-8 -10 -29 -45 -48 -78 -18 -33 -34 -62 -36 -64 -1 -1
                    -13 4 -26 13 -31 22 -65 20 -78 -4 -16 -31 -5 -52 49 -93 75 -58 86 -53 156
                    66 69 117 73 131 49 158 -21 24 -46 24 -66 2z"/>
                    <path d="M796 1308 c-13 -19 -16 -59 -16 -235 l0 -213 45 0 45 0 0 158 1 157
                    157 -163 c86 -89 162 -162 167 -162 6 0 21 7 33 16 22 15 22 19 22 235 l0 219
                    -45 0 -45 0 0 -156 0 -156 -122 129 c-68 70 -137 143 -154 161 -37 37 -67 41
                    -88 10z"/>
                    <path d="M1830 1265 l0 -55 -50 0 -50 0 0 -45 0 -45 50 0 50 0 0 -130 0 -130
                    45 0 45 0 0 130 0 130 75 0 75 0 0 45 0 45 -75 0 -75 0 0 55 0 55 -45 0 -45 0
                    0 -55z"/>
                    <path d="M1380 1170 l0 -40 93 0 c124 0 129 -4 125 -100 l-3 -75 -100 0 c-90
                    0 -100 2 -103 19 -6 28 15 36 101 36 l77 0 0 45 0 45 -87 0 c-104 0 -145 -19
                    -169 -77 -22 -51 -11 -95 32 -132 34 -31 36 -31 148 -31 127 0 155 12 182 76
                    19 46 18 168 -2 210 -25 53 -57 64 -184 64 l-110 0 0 -40z"/>
                    <path d="M2971 1172 c-32 -60 -6 -74 153 -85 145 -10 165 -11 478 -2 l218 7
                    54 -27 c34 -17 66 -25 88 -23 31 3 33 5 33 43 0 35 -3 40 -24 43 -13 2 -42 16
                    -64 30 l-41 27 -245 -3 c-135 -1 -271 -3 -301 -4 -30 -1 -119 2 -196 7 -138 8
                    -142 7 -153 -13z"/>
                    <path d="M2414 705 c-23 -17 -69 -19 -113 -4 -42 15 -68 6 -114 -36 l-39 -36
                    7 -207 c5 -147 4 -219 -4 -250 -10 -37 -10 -48 6 -79 23 -46 63 -76 100 -75
                    15 1 83 4 150 8 83 4 132 3 155 -5 18 -7 76 -15 129 -18 l96 -6 41 38 c51 45
                    54 77 17 147 -29 55 -30 68 -9 128 15 45 14 70 -8 160 -9 40 -8 50 11 85 30
                    56 27 85 -12 123 -40 39 -82 42 -138 10 l-39 -22 -54 27 c-61 31 -149 37 -182
                    12z m147 -100 c54 -30 111 -32 164 -5 22 11 40 20 41 20 1 0 -7 -17 -17 -37
                    -23 -46 -24 -90 -2 -159 15 -49 15 -56 0 -96 -10 -24 -17 -61 -17 -81 0 -41
                    24 -107 43 -119 9 -6 7 -12 -6 -22 -20 -15 -62 -13 -165 10 -72 16 -165 17
                    -267 4 -84 -11 -97 -4 -83 44 7 22 8 98 2 226 -5 105 -6 198 -1 205 5 10 24
                    12 75 8 48 -4 77 -1 102 10 51 22 82 20 131 -8z"/>
                    <path d="M2977 433 c-9 -11 -17 -24 -17 -30 0 -18 34 -41 70 -46 127 -19 180
                    -29 218 -44 34 -13 63 -15 152 -9 96 6 113 5 147 -12 56 -28 92 -34 148 -22
                    28 6 73 13 100 16 28 3 77 18 110 34 33 16 68 31 78 34 23 7 24 71 1 80 -25 9
                    -86 -4 -113 -25 -13 -11 -35 -19 -48 -19 -13 0 -58 -7 -99 -16 -73 -15 -78
                    -14 -137 6 -55 20 -74 21 -173 15 -87 -5 -119 -3 -150 9 -34 13 -84 23 -229
                    43 -31 4 -44 1 -58 -14z"/>
                    </g>
                    </svg>
                    Supercharged
            </a>
        </h1>
          
        </div>
        <ul class="c-sidebar-nav">
        @if(!empty($projects))
            @foreach($projects as $project)
                
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ env('APP_URL', '') . $project->path() }}">
                    @if($project['hasIcon'] === true)
                        @if($project['iconType'] === 'coreui')
                            <i class="{{ $project['icon'] }} c-sidebar-nav-icon"></i>
                        @endif
                    @endif 
                    {{ $project['title'] }}
                    </a>
                </li>
               
            @endforeach
        @endif
        </ul>
        <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>