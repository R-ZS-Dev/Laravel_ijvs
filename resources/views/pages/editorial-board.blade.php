@extends('layout.main')

        <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/rightside.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/editorboard.css') }}">

    @section('content')
        <div class="p-3">
            <h2 class="text-center">Editorial Board</h2>
            <hr class="hrbgline"></hr>
            <div class='editorcrd text-center'>
                <div class='cheifcard'>
                    <h4 class='mt-3'>Editor-in-Chief</h4>
                        <div>
                            <Image class='imgradius' src="/asset/upload/uploadsite/ahrar.jpg" height='100' width='100' alt=''></Image>
                        </div>
                            <Link href='https://scholar.google.com/citations?user=X5NH6DYAAAAJ&hl=en'><span class='editorlink_color'><b>Ahrar Khan</b></span></Link>
                        <hr></hr>
                        <div class='p-2 mt-0'>
                            Professor, Shandong Vocational Animal Science and Veterinary College, Weifang, China
                        </div>
                </div>
                <div class='cheifcard'>
                    <h4 class='mt-3'>Editor</h4>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/jcokonkwo.jpg" height='100' width='100' alt=''></Image>
                    </div>                
                    <Link href='https://scholar.google.com/citations?hl=en&user=-4oUZNEAAAAJ'><span class='editorlink_color'><b>J. C. Okonkwo:</b></span></Link>
                    <hr></hr>
                    <div class='p-2 mt-0'>
                        Associate Professor, Nnamdi Azikiwe University, Awka, Anambra, Nigeria
                    </div>
                </div>
            </div>            

                <div>
                    <h2 class='pl-3 p-2 text-center'>Members</h2>
                </div>

            <div class='memberscard text-center py-3'>
                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/alireza.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://scholar.google.com/citations?hl=en&user=EVglHn0AAAAJ'><span class='editorlink_color'><b>Alireza Lotfi</b></span></Link>
                    <div>
                        Associate Professor, Animal Physiology, Islamic Azad University, Iran
                    </div>
                    <hr></hr>
                    <div>Designation</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/arcangelo.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://www.unibo.it/sitoweb/arcangelo.gentile/en'><span class='editorlink_color'><b>Arcangelo Gentile</b></span></Link>
                    <div>
                        Professor, Department of Veterinary Medical Science of the University of Bologna, Bologna, Italy
                    </div>
                    <hr></hr>
                    <div>Designation</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/drazen.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://scholar.google.com/citations?hl=en&user=aTSUdcYAAAAJ'><span class='editorlink_color'><b>Dražen Duricic</b></span></Link>
                    <div>
                        Professor, Faculty of Veterinary Medicine, University of Zagreb, Croatia
                    </div>
                    <hr></hr>
                    <div>Designation</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/logo400.png" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://www.researchgate.net/scientific-contributions/Gil-Jae-Cho-2039707848'><span class='editorlink_color'><b>Gil-Jae Cho</b></span></Link>
                    <div>
                        College of Veterinary Medicine, Kyungpook National University, Republic of Korea
                    </div>
                    <hr></hr>
                    <div>Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/hakan.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://scholar.google.com/citations?hl=en&user=e_f0jWkAAAAJ'><span class='editorlink_color'><b>Hakan Salci</b></span></Link>
                    <div>
                    Uludag University, Bursa, Turkey
                    </div>
                    <hr></hr>
                    <div>Associate Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/Hanem.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://www.intechopen.com/profiles/71812'><span class='editorlink_color'><b>Hanem Fathy Khater</b></span></Link>
                    <div>
                    Benha University, Egypt
                    </div>
                    <hr></hr>
                    <div>Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/hui.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='http://www.cs.cmu.edu/~hzhang/'><span class='editorlink_color'><b>Hui Zhang</b></span></Link>
                    <div>
                        College of Veterinary Medicine, South China Agricultural University, Guangzhou, China
                    </div>
                    <hr></hr>
                    <div>Professor</div>
                </div>
                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/jose.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://scholar.google.com/citations?user=MHW0UdYAAAAJ&hl=en'><span class='editorlink_color'><b>Jose Luis Martinez</b></span></Link>
                    <div>
                        Universidad de Santiago de, Chile
                    </div>
                    <hr></hr>
                    <div>Professor</div>
                </div>
                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/Khalid.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://scholar.google.com/citations?user=or5ZQlgAAAAJ&hl=en'><span class='editorlink_color'><b>Khalid Mehmood</b></span></Link>
                    <div>
                        Islamia University Bahawalpur, Pakistan
                    </div>
                    <hr></hr>
                    <div>Assistant Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/Leonardo.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://www.researchgate.net/profile/Leonardo-Leonardi'><span class='editorlink_color'><b>Leonardo Leonardi</b></span></Link>
                    <div>
                    University of Perugia, Italy
                    </div>
                    <hr></hr>
                    <div>Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/likun.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://loop.frontiersin.org/people/940497/overview'><span class='editorlink_color'><b>Li Kun</b></span></Link>
                    <div>
                        College of Veterinary Medicine, Nanjing Agricultural University, Nanjing, China
                    </div>
                    <hr></hr>
                    <div>Associate Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/Melinda.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://vet.uga.edu/person/melinda-brindley/'><span class='editorlink_color'><b>Melinda Brindley</b></span></Link>
                    <div>
                        College of Veterinary Medicine, University of Georgia, USA
                    </div>
                    <hr></hr>
                    <div>Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/logo400.png" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://www.researchgate.net/profile/Ming-Yue-4'><span class='editorlink_color'><b>Ming Yue</b></span></Link>
                    <div>
                        The University of Chicago, USA
                    </div>
                    <hr></hr>
                    <div>Associate Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/Abdelsalam.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://scholar.google.com/citations?hl=en&user=LONBofkAAAAJ'><span class='editorlink_color'><b>Mohamed Abdelsalam Abdalla</b></span></Link>
                    <div>
                        Sudan University of Science & Technology, Khartoum North, Sudan
                    </div>
                    <hr></hr>
                    <div>Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/Monica.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://scholar.google.com/citations?hl=en&user=trf2V54AAAAJ'><span class='editorlink_color'><b>Monica Butnariu</b></span></Link>
                    <div>
                        Banat University of Agricultural Sciences & Veterinary Medicine, Timisoara, Romania
                    </div>
                    <hr></hr>
                    <div>Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/monika.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://www.emedevents.com/speaker-profile/monika-heidemarie-seltenhammer'><span class='editorlink_color'><b>Monika H. Seltenhammer</b></span></Link>
                    <div>
                        BOKU-University of Renewable Resources & Applied Life Sciences, Austria
                    </div>
                    <hr></hr>
                    <div>Associate Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/ijaz.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://scholar.google.com/citations?user=0ecMEykAAAAJ&hl=en'><span class='editorlink_color'><b>Muhammad Ijaz</b></span></Link>
                    <div>
                        University of Veterinary and Animal Sciences, Lahore, Pakistan
                    </div>
                    <hr></hr>
                    <div>Associate Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/neelima.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://www.researchgate.net/scientific-contributions/Neelima-Sukumar-2007651588'><span class='editorlink_color'><b>Neelima Sukumar</b></span></Link>
                    <div>
                        Cornell University, Ithaca, NY, USA
                    </div>
                    <hr></hr>
                    <div>Associate Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/Nikolaos.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://www.researchgate.net/profile/Nikolaos-Soultos'><span class='editorlink_color'><b>Nikolaos D. Soultos</b></span></Link>
                    <div>
                        Aristotle University of Thessaloniki, Greece
                    </div>
                    <hr></hr>
                    <div>Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/Nitesh.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://www.ndvsu.org/index.php/department-wise-faculty/veterinary-pharmacology-and-toxicology/690-dr-nitesh-kumar'><span class='editorlink_color'><b>Nitesh Kumar</b></span></Link>
                    <div>
                        College of Veterinary Science & A.H., Kuthulia, Rewa (MP), India
                    </div>
                    <hr></hr>
                    <div>Associate Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/pingliu.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://loop.frontiersin.org/people/1527203/overview'><span class='editorlink_color'><b>Ping Liu</b></span></Link>
                    <div>
                        Jiangxi Agricultural University, Jiangxi Province, China
                    </div>
                    <hr></hr>
                    <div>Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/mamidi.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://www.researchgate.net/profile/Ranganath-Mamidi'><span class='editorlink_color'><b>Ranganath Mamidi</b></span></Link>
                    <div>
                        Case Western Reserve University, Cleveland, Ohio, USA
                    </div>
                    <hr></hr>
                    <div>Associate Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/logo400.png" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://www.researchgate.net/profile/Riaz-Hussain-14'><span class='editorlink_color'><b>Riaz Hussain</b></span></Link>
                    <div>
                        Faculty of Veterinary and Animal Sciences, Islamia University Bahawalpur, Pakistan
                    </div>
                    <hr></hr>
                    <div>Associate Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/Rinesh.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://www.ndvsu.org/index.php/department-wise-faculty/veterinary-parasitology/784-dr-rinesh-kumar'><span class='editorlink_color'><b>Rinesh Kumar</b></span></Link>
                    <div>
                        College of Veterinary science and Animal Husbandry, Rewa, M.P. India
                    </div>
                    <hr></hr>
                    <div>Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/logo400.png" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://www.linkedin.com/in/satya-achanta-dvm-phd-dabt-58ab1046/'><span class='editorlink_color'><b>Satya Achanta</b></span></Link>
                    <div>
                        Yale University School of Medicine, Room SHM B323, New Haven, CT, USA
                    </div>
                    <hr></hr>
                    <div>Associate Professor</div>
                </div>
                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/Sushrut.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://www.linkedin.com/in/sushrutarora/'><span class='editorlink_color'><b>Sushrut Arora</b></span></Link>
                    <div>
                        Baylor College of Medicine, Houston, TX 77030, USA
                    </div>
                    <hr></hr>
                    <div>Associate Professor</div>
                </div>

                <div class='memcard'>
                    <div>
                        <Image class='imgradius' src="/asset/upload/uploadsite/Tamas.jpg" height='80' width='80' alt=''></Image>
                    </div>
                    <Link href='https://www.researchgate.net/profile/Tamas-Nagy'><span class='editorlink_color'><b>Tamas Nagy</b></span></Link>
                    <div>
                        College of Veterinary Medicine, University of Georgia, USA
                    </div>
                    <hr></hr>
                    <div>Professor</div>
                </div>
            </div>
            </div>
    @endsection