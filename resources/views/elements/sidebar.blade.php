<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li class="menu-title">Páginas principales</li>
            <li><a href="{{ url('obras')}}" class="" aria-expanded="false">
                <div class="menu-icon">
                    <i class="fa fa-building"></i>
                </div>	
                    <span class="nav-text">Obras</span>
                </a>
            </li>
            <li><a href="{{ url('proveedores')}}" class="" aria-expanded="false">
                <div class="menu-icon">
                    <i class="fa fa-user"></i>
                </div>	
                    <span class="nav-text">Proveedores</span>
                </a>
            </li>

        </ul>
        <div class="switch-btn">
            <a href="{{ url('page-login')}}">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.36 6.63965C19.6184 7.89844 20.4753 9.50209 20.8223 11.2478C21.1693 12.9936 20.9909 14.803 20.3096 16.4474C19.6284 18.0918 18.4748 19.4972 16.9948 20.486C15.5148 21.4748 13.7749 22.0026 11.995 22.0026C10.2151 22.0026 8.47515 21.4748 6.99517 20.486C5.51519 19.4972 4.36164 18.0918 3.68036 16.4474C2.99909 14.803 2.82069 12.9936 3.16772 11.2478C3.51475 9.50209 4.37162 7.89844 5.63 6.63965" stroke="#252525" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 2V12" stroke="#252525" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Logout</span>
            </a>
        </div>
    </div>
</div>