@extends('layout.main')

@section('cssLinks')
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/rightside.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/publication.css') }}">
@endsection

@section('content')
<div class="p-3">
    <h3 class='text-center'>Publication Ethics & Policies</h3>
        <hr></hr>
        <a href='/asset/uploadfiles/Publications-Ethics-Policies IJVS.pdf'><button class='btn btn-primary'>Publication Ethics & Policies</button></a>
        <hr></hr>
        <div class="accordian">
          <input type="checkbox" id="trigger20" />
          <label class='colpsedown' For="trigger20">Editorial Policy/Review Process</label>
          <div class='ethictxtsize'>
            The International Journal of Veterinary Science (IJVS) is quarterly Journal (January-March; April-June; July-September;
            October-December) published by the <a href='https://uniquescientificpublishers.com/'>Unique Scientific Publishers</a>. This journal publishes original research
            papers, reviews, clinical articles/case reports and short communications in the area of agriculture,
            veterinary, animal sciences and allied disciplines. The IJVS publishes the articles/manuscripts those
            contribute significantly to the knowledge in the field of Veterinary Science Journal. Preference is given
            to the original articles that develop new concepts or experimental approaches and are not merely
            repositories of scientific data.
            </div>
        </div>

        <div class="accordian">
            <input type="checkbox" id="trigger21" />
            <label class='colpsedown' For="trigger21">PUBLISHING ETHICS</label>
            <div class='ethictxtsize'>
                <p>
                  The formal part of the scholarly communication system, the publication of an article in a peer-reviewed
                  learned journal, serves many purposes outside of simple communication.  It is a building block in
                  developing a rational and respected knowledge network.  It is prima facie evidence for the quality and
                  impact of the research work of its authors and, by extension, the institutions that support them.  It
                  supports and is itself an example of the scientific method.  For all these reasons and more, it is
                  important to lay down standards of expected ethical behavior by all parties involved in publishing: the
                  author, the journal editor, the peer reviewer, and the publisher.  This includes all parties treating
                  each other with respect and dignity and without discrimination, harassment, bullying, or retaliation.
                </p>
                <p>
                  These guidelines are designed specifically for primary research journals but may also be relevant for
                  review and other professional publications.  Individual journals often have more elaborate or distinct
                  ethical procedures, generally reflected in their Guide for Authors.  Many journals also accept and are,
                  in many cases founding participants concerning discipline-specific standards or standard-setting bodies,
                  such as the International Council of Medical Journal Editors (ICMJE) and Consolidated Standards of
                  Reporting Trials (CONSORT).  The ethical requirements for publishers, editors, reviewers, and authors
                  include but are not limited to the following:
                </p>
                <p>
                  <b>1.1 Publisher:</b> We require publishers to promote and comply with industry best practices.
                  The publisher shall provide editors with technical, procedural, and legal support and ensure their
                  editorial decisions are independent and not affected by any other factors.
                </p>
                <p>
                  <b>1.2 Editors:</b> The editors shall follow the industry best practice, including but not limited to
                  ensuring the editorial decisions they make and the peer review process are fair, unbiased, and timely.
                </p>
                <p>
                  <b>1.3. Reviewers:</b> Reviewers shall assist the editors in making editorial decisions and may also
                  assist the author in improving the paper.  Reviews should be conducted objectively, and reviewers are
                  responsible for ensuring the review process is fair, unbiased, and timely.
                </p>
                <p>
                  <b>1.4. Authors:</b> The authors should ensure that they have written entirely original works and
                  should not, in general, publish manuscripts describing essentially the same research in more than one
                  journal.
                </p>
            </div>
        </div>

        <div class="accordian">
            <input type="checkbox" id="trigger22" />
            <label class='colpsedown' For="trigger22">ANIMAL RIGHTS</label>
            <div class='ethictxtsize'>
                Does your research involve experimentation on animals?  Please provide the name of the ethical committee
                approving these experiments and confirm the authors compliance with all relevant ethical regulations.
            </div>
        </div>

        <div class="accordian">
            <input type="checkbox" id="trigger23" />
            <label class='colpsedown' For="trigger23">CONFLICT OF INTEREST</label>
            <div class='ethictxtsize'>
                All authors are requested to disclose any actual or potential conflict of interest, including any financial,
                personal, or other relationships with other people or organizations, within three years of beginning the
                submitted work that could inappropriately influence, or be perceived to influence, their work.
            </div>
        </div>

        <div class="accordian">
            <input type="checkbox" id="trigger24" />
            <label class='colpsedown' For="trigger24">DUTIES OF THE UNIQUE SCIENTIFIC PUBLISHERS</label>
            <div class='ethictxtsize'>
                <b>1.1.  Guardianship of the scholarly record</b> <p>These guidelines have been written with all these requirements
                  in mind but especially recognizing that it is an important role of the publisher to support the huge
                  efforts made by journal editors and the often unsung volunteer work undertaken by peer reviewers in
                  maintaining the integrity of the scholarly record.  Although ethical codes inevitably concentrate on the
                  infractions that sometimes occur, it is a tribute to scholarly practice that the system works so well and
                  that problems are comparatively rare.  The publisher has a supporting, investing, and nurturing role in
                  the scholarly communication process but is ultimately responsible for ensuring that best practice is
                  followed in its publications (<a href='https://www.stm-assoc.org/2013_05_21_STM_Ethical_Principles_for_Scholarly_Publication.pdf'>STM;</a> 
                  <a href='https://publicationethics.org/core-practices'>COPE Codes of Conduct</a>).</p>
                <p>
                  The Unique Scientific Publishers is adopting these policies and procedures to support editors, reviewers,
                  and authors in performing their ethical duties under these guidelines.  We work with other publishers and
                  industry associations to set standards for best practices on ethical matters, errors, and retractions.
                </p>
                <b>1.2.  Safeguard editorial independence</b> <p>We are committed to ensuring that the potential for
                  advertising, reprint, or other commercial revenue has no impact or influence on editorial decisions.</p>
                <b>1.3.  Collaborate to set industry best practice</b> <p> We promote best practices by opting for the
                  Committee on Publication Ethics 
                  <a href='https://publicationethics.org/core-practices'> (COPE)</a> guidelines and providing editors with Crossref/Turnitin Similarity
                  Check reports for all submissions to our editorial systems.</p>
                <b>1.4.  Provide editors with technical, procedural & legal support</b> <p> We support editors in communications
                  with other journals or publishers where this is useful to editors and are prepared to provide specialized
                  legal review and counsel if necessary.</p>
                <b>1.5.  Educate researchers on publishing ethics</b> <p> We also provide extensive education and advice on
                  publishing ethics standards, particularly for early career researchers, by conducting various workshops in
                  institutions.</p>
            </div>
        </div>
        <div class="accordian">
                <input type="checkbox" id="trigger25" />
                <label class='colpsedown' For="trigger25">DUTIES OF EDITORS</label>
                <div class='ethictxtsize'>
                  <b>1.1. Publication decisions</b> <p>The editor of a learned journal is solely and independently responsible
                    for deciding which of the articles submitted to the journal should be published.  The validation of the
                    work in question and its importance to researchers and readers must always underwrite such decisions.
                    The editor may be guided by the policies of the journals editorial board and constrained by such legal
                    requirements as shall then be in force regarding issues such as libel, copyright infringement, and plagiarism.
                    The editor may confer with other editors or reviewers in making these decisions.</p>
                  <b>1.2.  Peer review</b> <p>The editor shall ensure that the peer-review process is fair, unbiased, and
                    timely.  At least two external and independent reviewers must typically review research articles;
                    where necessary, the editor should seek additional opinions.</p>
                  <p>The editor shall select reviewers with suitable expertise in the relevant field, considering the need
                    for appropriate, inclusive, and diverse representation.  The editor shall follow best practices to
                    avoid the selection of fraudulent peer reviewers 
                    <a href='https://www.wame.org/about/policy-statements'> (WAME Best Practice)</a>. The editor shall review all
                    disclosures of potential conflicts of interest and suggestions for self-citation made by reviewers to
                    determine whether there is any potential for bias.</p>
                  <b>1.3.  Fair play</b> <p>TThe editor should evaluate manuscripts for their intellectual content without
                    regard to the authors race, gender, sexual orientation, religious belief, ethnic origin, citizenship,
                    or political philosophy.  When nominating potential editorial board members, the editor shall consider
                    the need for appropriate, inclusive, and diverse representation.</p>
                  <p>The journals editorial policies should encourage transparency and complete, honest reporting, and the
                    editor should ensure that peer reviewers and authors clearly understand what is expected of them.
                    The editor shall use the journals standard electronic submission system for all communications.  The
                    editor shall establish, along with the publisher, a transparent mechanism for appeal against editorial
                    decisions.</p>
                    <b>1.4.  Journal metrics</b> <p>
                    The editor must not attempt to influence the journals ranking by artificially increasing any journal metric.  In particular, the editor shall not require that references to that (or any other) journals articles be included except for genuine scholarly reasons, and authors should not be required to include references to the editors articles or products and services in which the editor has an interest.
                    </p>
                    <b>1.5.  Confidentiality</b> <p>
                    The editor must protect the confidentiality of all material submitted to the journal and all communications with reviewers unless otherwise agreed with the relevant authors and reviewers.  In exceptional circumstances and in consultation with the publisher, the editor may share limited information with editors of other journals where necessary to investigate suspected research misconduct <a href='https://publicationethics.org/files/Sharing%20_of_Information_Among_EiCs_guidelines_web_version_0.pdf'>(COPE Guidelines)</a>.
                    </p>
                    <p>Unless the journal operates an open peer-review system and/or reviewers have agreed to disclose their names, the editor must protect reviewers identities.</p>
                    <p>Unpublished materials disclosed in a submitted manuscript must not be used in an editors own research without the authors express written consent.  Privileged information or ideas obtained through peer review must be confidential and not used for personal advantage.</p>
                    <b>1.6.  Declaration of Competing Interests</b> 
                    <p>Any potential editorial conflicts of interest should be declared to the publisher before the editors appointment and updated if and when new conflicts arise.  The publisher may publish such declarations in the journal.</p>
                    <p>The editor must not be involved in decisions about papers which s/he has written him/herself or have been written by family members or colleagues or related to products or services in which the editor has an interest.  Further, any such submission must be subject to all of the journals usual procedures, peer review must be handled independently of the relevant author/editor and their research groups, and there must be a clear statement to this effect on any such paper that is published.</p>
                    <p>The editor shall apply the Unique Scientific Publishers policy relating to disclosing potential conflicts of interest by authors and reviewers, e.g., the <a href='https://www.icmje.org/'>ICMJE guidelines</a>.</p>
                    <b>1.7.  Vigilance over the Published Record</b> 
                    <p>The editor should work to safeguard the integrity of the published record by reviewing and assessing reported or suspected misconduct (research, publication, reviewer, and editorial) in conjunction with the publisher.</p>
                    <p>Such measures will generally include contacting the author of the manuscript or paper and giving due consideration to the respective complaint or claims made but may also include further communications to the relevant institutions and research bodies.  The editor shall make proper use of the publishers systems to detect misconduct, such as plagiarism.</p>
                    <p>An editor presented with convincing evidence of misconduct should coordinate with the publisher to arrange the prompt publication of a correction, retraction, expression of concern, or other correction to the record, as may be relevant.</p>
                </div>
              </div>
            <div class="accordian"> 
                  <input type="checkbox" id="trigger26" />
                  <label class='colpsedown' For="trigger26">DUTIES OF REVIEWERS</label>
                  <div class='ethictxtsize'>
                    <b>1.1.  Contribution to Editorial Decisions</b> <p>Peer review assists the editor in making editorial 
                      decisions, and the editorial communications with the author may also assist the author in improving 
                      the paper.  Peer review is essential to formal scholarly communication and lies at the heart of the 
                      scientific method.  In addition to the specific ethics-related duties described below, reviewers are 
                      asked to treat authors and their work as they would like to be treated and observe good reviewing 
                      etiquette.</p>
                      <p>Any selected referee who feels unqualified to review the research reported in a manuscript or knows 
                        its prompt review will be impossible should notify the editor and decline to participate in the 
                        review process.</p>
                  </div>
                </div>
                <div class="accordian">
                  <input type="checkbox" id="trigger27" />
                  <label class='colpsedown' For="trigger27">DUTIES OF AUTHORS</label>
                  <div class='ethictxtsize'>
                    <b>1.1.  Reporting Standards</b> <p>Authors of reports of original research should present an accurate 
                      account of the work performed and an objective discussion of its significance.  Underlying data 
                      should represent accurately in the paper.  A paper should contain sufficient detail and references to 
                      permit others to replicate the work.  Fraudulent or knowingly inaccurate statements constitute 
                      unethical behavior and are unacceptable.</p>
                      <p>Review and professional publication articles should be accurate and objective and clearly identify 
                        editorial opinion works.</p>
                  </div>
                </div>
</div>
@endsection