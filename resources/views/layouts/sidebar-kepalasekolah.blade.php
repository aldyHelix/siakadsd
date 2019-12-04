<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        {{-- Super Admin --}}
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">Navigasi Utama</li>
                <li>
                    <a href="{{route('halaman-utama')}}">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('siswa.index')}}">
                        <i class="material-icons">face</i>
                        <span>Siswa</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('gurukaryawan.index')}}">
                        <i class="material-icons">school</i>
                        <span>Guru</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('kelas.index')}}">
                        <i class="material-icons">group</i>
                        <span>Kelas</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('ekstrakulikuler.index')}}">
                        <i class="material-icons">directions_run</i>
                        <span>Ekstrakulikuler</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('matapel.index')}}">
                        <i class="material-icons">book</i>
                        <span>Mata Pelajaran</span>
                    </a>
                </li>
                <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Laporan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('siswa.index')}}">Tahunan</a>
                            </li>
                            <li>
                                <a href="{{route('siswa.index')}}">Semester</a>
                            </li>
                            <li>
                                <a href="{{route('siswa.index')}}">Kelas</a>
                            </li>
                            <li>
                                <a href="{{route('siswa.index')}}">Siswa</a>
                            </li>
                            <li>
                                <a href="{{route('siswa.index')}}">Guru</a>
                            </li>
                            <li>
                                <a href="{{route('siswa.index')}}">Prestasi</a>
                            </li>                                
                        </ul>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                <small>&copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.</small><br>
                <small>&copy; 2019 - 2020 <a href="javascript:void(0);">aldyHelix Developer</a>.</small>
            </div>
            <div class="version">
                <small><b>Version: </b> Beta 0.0.1</small>
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->