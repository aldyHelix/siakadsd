            <!-- HEADER -->
            <header>

                <!-- MENU BLOCK -->
                <div class="menu_block">

                    <!-- CONTAINER -->
                    <div class="container clearfix">

                        <!-- LOGO -->
                        <div class="logo pull-left">
                            <a href="index.html"><span class="b1">SIMAK</span></a>
                        </div><!-- //LOGO Sistem informasi manajemen akademik -->

                        <!-- SEARCH FORM -->
                        <div id="search-form" class="pull-right">
                            <form action="/search" method="post" role="search">
                                {{csrf_field() }}
                                <input type="text" name="q" placeholder="Cari Siswa . . ."/>
                            </form>
                        </div><!-- SEARCH FORM -->

                        <!-- MENU -->
                        <div class="pull-right">
                            <nav class="navmenu center">
                                <ul>
                                    <li class="first scroll_btn"><a href="{{route('home')}}">Home</a></li>
                                    <li class="scroll_btn"><a href="index.html#about">Tentang</a></li>
                                    <li class="scroll_btn"><a href="index.html#projects">Belajar Mengajar</a></li>
                                    <li class="scroll_btn"><a href="index.html#team">Guru</a></li>
                                    <li class="scroll_btn last"><a href="index.html#contacts">Aktivitas</a></li>
                                </ul>
                            </nav>
                        </div><!-- //MENU -->
                    </div><!-- //MENU BLOCK -->
                </div><!-- //CONTAINER -->
            </header><!-- //HEADER -->