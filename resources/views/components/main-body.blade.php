  {{-- @props(['wlcm_lists'])
  {{ dd(@$wlcm_lists) }} --}}
  <div class="m-3">
        <div class="row row-cols-1 row-cols-md-3 g-2 text-center mt-3">
            <div class="col-md-3">
                <div class="card h-100">
                    <strong>IJVS Recognition</strong>
                    <a href="https://hjrs.hec.gov.pk/index.php?r=site%2Fresult&id=1001077#journal_result">
                    <img src="/asset/upload/uploadsite/HEC.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">HEC Recognized Journal</h6>
                        <p class="card-text">(Y Category)</p>
                    </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100">
                    <strong>IJVS Ranking</strong>
                    <a href="https://www.scopus.com/sources.uri">
                    <img src="/asset/upload/uploadsite/q2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">HEC Recognized Journal</h6>
                        <p class="card-text">(Y Category)</p>
                    </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100">
                    <strong>Graphical Analysis</strong>
                    <a href="https://www.scimagojr.com/journalsearch.php?q=21100820608&tip=sid&exact=no">
                    <img src="/asset/upload/uploadsite/graphindex.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">HEC Recognized Journal</h6>
                        <p class="card-text">(Y Category)</p>
                    </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100">
                    <strong>Scopus Indexed</strong>
                    <a href="https://www.scopus.com/sourceid/21100820608">
                    <img src="/asset/upload/uploadsite/scopus.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">HEC Recognized Journal</h6>
                        <p class="card-text">(Y Category)</p>
                    </div>
                    </a>
                </div>
            </div>
        </div>

        <h2 class="text-center mt-3">Scope and Perspectives</h2>
        <hr class="hrbgline"></hr>
        <p class="bg-light text-justify p-2">
            “International Journal of Veterinary Science” (IJVS) is an online international peer reviewed open
            accessed journal which publishes original research papers. Its scope is broad and international,
            covering a wide range of research areas including anatomy, biochemistry, biotechnology, clinical
            medicine, and surgery, theriogenology, physiology, pharmacology, toxicology/toxicopathology (rats,
            birds, fish, or animals), pathology, microbiology and immunology, parasitology, epidemiology, breeding
            and genetic, feed and nutrition, wildlife, zoology, animal products and their processing. Original
            research papers, review articles, extension articles, clinical articles and short communications on
            the production and diseases of animals, including studies in comparative medicine are published in
            this journal. Manuscripts digging out the possible molecular mechanism of the disease etiology/providing
            pathogenesis of any toxicological event in natural or experimental conditions will be dealt on priority
            in review/publication. Only those manuscripts are considered for publication whose contents have not been
            published and are not being considered for publication in any other journal.
        </p>

        <h1 class="text-center">Our Recent Articles</h1>
        <hr class="hrbgline"></hr>
        <div class="centerprc mt-3">
            {{-- {{ dd($wlcm_lists) }} --}}
            @foreach($wlcm_lists as $lastfive)
                <div class="ourarticle p-2">
                    <a href="/upload/" target="_blank">
                        <strong class="text-dark">{{ @$lastfive->article_title }}</strong>
                    </a>
                    <div class="mt-0">
                        Publish Date: <label class="text-dark">xxxxxxx</label>
                    </div>
                    <label class="text-dark">xxxxxxxx</label>
                    <span>
                       {{ @$lastfive->archive_figure->fig_img ?? 'yasir.jpg' }}
                    </span>
                    <hr class="mt-1"></hr>
                    <a class="doilinkind mt-0" href="/upload/" target="_blank">xxxxxxxx</a>
                </div>
            @endforeach
        </div>

        <h2 class="text-center mt-2">Indexing</h2>
        <hr class="hrbgline"></hr>
    </div>
    
    <div class="row text-center">
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/publons.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/cab.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/cabi.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/sjr.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/Google-Scholar.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/agri-res.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="http://creativecommons.org/licenses/by-nc/4.0/">
                <Image src="/asset/upload/uploadsite/ccc.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/drji.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/ici.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/International.jpg" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/open-access.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/ez.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/Research-gate.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/sis.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/Ulrichs.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/jd.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/road.jpg" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/wc.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/base.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/lu.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="/">
                <Image src="/asset/upload/uploadsite/asi.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
        <div class="col-lg-3 mt-1 sizimg">
            <a class="sizimgn" href="http://journal-index.org/">
                <Image src="/asset/upload/uploadsite/intarchjour.png" height='50' width='150' alt="IJVS" />
            </a>
        </div>
    </div>