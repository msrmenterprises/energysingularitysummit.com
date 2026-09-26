@extends('master')
@section('content')

<div class="container">
<div class="row justify-content-left">
<p></p>

<style type="text/css">
/* ===== Existing page styles ===== */
.tpart2020 li {
    margin-left: 20px;
}
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}

/* ===== Award page layout styles ===== */
.award-section-title {
    color: green;
}
.award-link-list {
    margin-left: 21px;
}
.award-table {
    width: 100%;
    border-collapse: collapse;
}
.award-table th,
.award-table td {
    border: 1px solid #f4b083;
    padding: 0 0.08in;
    vertical-align: top;
    text-align: justify;
}
.award-table th {
    background-color: #ed7d31;
    color: #ffffff;
    font-weight: bold;
    border: 1px solid #ed7d31;
}
.award-table .row-alt {
    background-color: #fed8b1;
}

/* Nomination categories table */
.nom-table {
    width: 100%;
    border-collapse: collapse;
}
.nom-table th {
    background-color: #ed7d31;
    color: #ffffff;
    font-weight: bold;
    border: 1px solid #f4b083;
    padding: 0 0.08in;
    text-align: left;
}
.nom-table td {
    border: 1px solid #BFBFBF;
    padding: 0 5.4pt;
    vertical-align: top;
}
.nom-table tr.row-alt td {
    background-color: #F2F2F2;
}
.nom-table .cat-list {
    margin-left: 36pt;
    text-indent: -18pt;
    list-style: none;
    padding: 0;
}
.nom-table .cat-sub-list {
    margin-left: 52.55pt;
    text-indent: -18pt;
    list-style: none;
    padding: 0;
}
.nom-table .cat-sub-list2 {
    margin-left: 33.2pt;
    text-indent: -18pt;
    list-style: none;
    padding: 0;
}
.nom-table .cat-note {
    margin-left: 43.5pt;
    text-indent: -18pt;
    list-style: none;
    padding: 0;
}
.nom-table .small-note {
    margin-left: 22.6pt;
    text-indent: -18pt;
    list-style: none;
    padding: 0;
}

/* Award winning categories / evaluation criteria tables */
.criteria-table {
    width: 100%;
    border-collapse: collapse;
}
.criteria-table th,
.criteria-table td {
    border: 1px solid #00000a;
    padding: 0 0.08in;
    vertical-align: top;
    text-align: left;
}

/* Marks allocation / important dates tables */
.info-table {
    width: 100%;
    border-collapse: collapse;
}
.info-table td {
    border: 1px solid #f4b083;
    padding: 0 0.08in;
    vertical-align: top;
    text-align: justify;
}

/* Jury table */
.jury-table {
    width: 100%;
    border-collapse: collapse;
}
.jury-table th {
    background-color: #ed7d31;
    color: #ffffff;
    font-weight: bold;
    padding: 0.1in;
    text-align: justify;
    border-top: 1px solid #ed7d31;
    border-bottom: 1.5pt solid #ed7d31;
    border-left: 1.5pt solid #ed7d31;
    border-right: none;
}
.jury-table th:last-child {
    border-right: 1px solid #ed7d31;
}
.jury-table td {
    padding: 0 0.1in 0.1in 0.1in;
    vertical-align: top;
    text-align: justify;
    border-top: none;
    border-bottom: 1.5pt solid #ed7d31;
    border-left: 1.5pt solid #ed7d31;
    border-right: none;
}
.jury-table td:last-child {
    border-right: 1px solid #ed7d31;
    padding-right: 0.1in;
}
.jury-table img {
    width: 170px;
    height: 179px;
    border: 0;
}

/* Common table helpers */
.justify-text {
    text-align: justify;
    margin-bottom: 0.11in;
}
</style>

<!--<img src="http://www.isuw.in/beta/wp-content/uploads/2021/12/AWARDS-BANNER-1.jpeg" class="center" style="width: 90%;">-->
<div class="k_cheading">
    <h1>11th ISGF INNOVATION AWARDS 2027<br/>
        <span class="k_greencolor">11th Award Ceremony on 09 April 2027<br/> As part of The Energy Singularity Summit (TESS 2027)</span>
    </h1>
    <img src="/public/uploads/images/kborder_bottom.png" alt="">
</div>
<img src="images/2026/AwardAwards26.jpg" class="center" style="width: 80%;">

<!--
<h2 style="text-align:center;">At India Smart Utility Week (ISUW 2023)<br/>
 <li style="list-style:none; text-align:center"><a href="https://isuw.in/votenowisgf" target="_blank" class="getstartedd ">Vote For ISGF Innovation Awards</a></li>
<p></p>
At India Smart Utility Week (ISUW 2022)<br/>Date: 04 MARCH 2022 </h2>
<img src="http://www.isuw.in/public/images/awards.PNG" class="center" style="width: 20%; height:250px;">
<a href="https://forms.gle/1kZpMfxuJ38J8qFS9" target="_blank" rel="noopener noreferrer"><img src="http://www.isuw.in/beta/wp-content/uploads/2020/12/nomination.jpg" class="center" style="width: 20%;"></a>
-->
<br/>
<br/>
<p></p>

<!--
<h4 style="text-align:center"><b> ISGF Innovation Awards Knowledge Partner</b></h4>
<a href="https://www.gov.uk/government/organisations/foreign-commonwealth-development-office" target="_blank"><img src="http://www.isuw.in/public/uploads/partner/UK-Gov.png" class="center" style="width: 30%; height:100px;"></a>
<br/><p></p>
-->

<h4 style="text-align:center;">ISGF Invites you to Submit the Nominations by 28 December 2026</h4>
<h4 style="text-align:center;">Nomination Submission Link - <a href="https://forms.gle/DvpqgPTSfYtRz9XW9" target="_blank" rel="noopener noreferrer">Submit Now</a></h4>
<!--<a href="https://forms.gle/XrVQAgjbfTWD5bYeA" target="_blank">https://forms.gle/XrVQAgjbfTWD5bYeA</a>-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<H4 class="award-section-title"><strong>Overview of ISGF Innovation Awards</strong></H4>
<P class="justify-text">ISGF Innovation Awards instituted in 2017 is aimed to recognize and to celebrate organizations (utilities and technology companies), projects, products and personalities that have set a new benchmark in Electricity, Gas, Water and E-Mobility domains. Till 2026, ISGF had selected and recognized more than 423 such organizations/ individuals.</P>
<p class="justify-text"><b>The 11th Edition of ISGF Innovation Awards 2027 will be conferred to the Winners on 09 April 2027.</b></p>
<P class="justify-text"><b>India Smart Grid Forum (ISGF) invites Public and Private Utilities, Urban Local Bodies, Technology Companies, EPC Contractors, Start-ups, Incubators, Researchers, Municipalities, Funding Agencies and Academia to submit their nominations.</b></P>
<p class="justify-text">In year 2026, 235 projects submitted the nominations and out of which 55 projects were conferred with ISGF Innovation Award and 8 projects were awarded with Certificate of Merit. List of winners will be available at following link: <a href="https://isuw.in/winners-innovation-awards-2026" target="_blank">https://isuw.in/winners-innovation-awards-2026</a></p>

<h4 class="award-section-title"><strong>Refer important links below for further details:</strong></h4>
<p></p>
<ul class="award-link-list">
    <li>About India Smart Grid Forum (ISGF): <a href="https://indiasmartgrid.org/about" target="_blank">https://indiasmartgrid.org/about</a></li>
    <li>About The Energy Singularity Summit (TESS) 2027: <a href="https://www.energysingularitysummit.com/" target="_blank">https://www.energysingularitysummit.com/</a></li>
    <li>Glimpses of Awards Ceremony 2026: <a href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720332670212/" target="_blank">https://www.flickr.com/photos/indiasmartgridforum/albums/72177720332670212/</a></li>
</ul>

<!-- ===== Winners of Previous Editions ===== -->
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsewinners" aria-expanded="false" aria-controls="flush-collapsewinners">
        <H4 class="award-section-title"><strong>Winners of Previous Editions of ISGF Innovation Awards</strong></H4>
      </button>
    </h2>
    <div id="flush-collapsewinners" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <table class="award-table">
            <tr>
                <th style="width:377px;">Year</th>
                <th style="width:644px;">Link to view past winners</th>
            </tr>
            <tr>
                <td><b>2026</b></td>
                <td><a href="https://isuw.in/winners-innovation-awards-2026" target="_blank" rel="noopener noreferrer">https://isuw.in/isgf-innovation-awards-2026</a></td>
            </tr>
            <tr>
                <td><b>2025</b></td>
                <td><a href="https://isuw.in/winners-innovation-awards-2025" target="_blank" rel="noopener noreferrer">https://isuw.in/isgf-innovation-awards-2025</a></td>
            </tr>
            <tr>
                <td><b>2024</b></td>
                <td><a href="https://isuw.in/winners-innovation-awards-2024" target="_blank" rel="noopener noreferrer">https://isuw.in/isgf-innovation-awards-2024</a></td>
            </tr>
            <tr>
                <td><b>2023</b></td>
                <td><a href="https://isuw.in/winners-innovation-awards-2023" target="_blank" rel="noopener noreferrer">https://isuw.in/isgf-innovation-awards-2023</a></td>
            </tr>
            <tr>
                <td><b>2022</b></td>
                <td><a href="http://www.isuw.in/winners-innovation-awards-2022/" target="_blank" rel="noopener noreferrer">http://www.isuw.in/isgf-innovation-awards-2022/</a></td>
            </tr>
            <tr>
                <td><b>2021</b></td>
                <td><a href="http://www.isuw.in/beta/isgf-innovation-awards-2021/" target="_blank" rel="noopener noreferrer">http://www.isuw.in/isgf-innovation-awards-2021/</a></td>
            </tr>
            <tr class="row-alt">
                <td><b>2020</b></td>
                <td><a href="http://www.isuw.in/beta/isgf-innovation-awards-2020/" target="_blank" rel="noopener noreferrer">http://www.isuw.in/isgf-innovation-awards-2020/</a></td>
            </tr>
            <tr>
                <td><b>2019</b></td>
                <td><a href="http://www.isuw.in/beta/isgf-innovation-awards-2019/" target="_blank" rel="noopener noreferrer">http://www.isuw.in/isgf-innovation-awards-2019/</a></td>
            </tr>
            <tr class="row-alt">
                <td><b>2018</b></td>
                <td><a href="http://www.isuw.in/beta/isgf-innovation-awards-2018/" target="_blank" rel="noopener noreferrer">http://www.isuw.in/isgf-innovation-awards-2018/</a></td>
            </tr>
            <tr>
                <td><b>2017</b></td>
                <td><a href="http://www.isuw.in/beta/isgf-innovation-awards-2/" target="_blank" rel="noopener noreferrer">http://www.isuw.in/isgf-innovation-awards-2/</a></td>
            </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<p></p>

<!-- ===== Award Nomination Categories ===== -->
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseseven" aria-expanded="false" aria-controls="flush-collapseseven">
        <H4 class="award-section-title"><strong>Award Nomination Categories</strong></H4>
      </button>
    </h2>
    <div id="flush-collapseseven" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <P class="justify-text">For 11<sup>th</sup> ISGF Innovation Awards 2027, the following award categories are open for nominations: Please refer below table for award categories and eligibility:</P>

        <table class="nom-table">
            <tr>
                <th style="width:7%;">Sr No</th>
                <th style="width:26%;">Award Categories</th>
                <th style="width:23%;">Who can Apply?</th>
                <th style="width:44%;">Category Focus</th>
            </tr>

            <!-- Category 1 -->
            <tr class="row-alt">
                <td style="text-align:center;"><b>1</b></td>
                <td>
                    <p>Best Smart Grid Project in a DISCOM in India</p>
                    <p class="cat-list">a. Utility</p>
                    <p class="cat-list">b. Technology Company/Implementing Agency</p>
                </td>
                <td>Electricity Distribution Companies (DISCOMs) (Public &amp; Private) OR Implementing Agencies OR Technology Companies</td>
                <td>
                    <p>Electricity Distribution Companies (DISCOMs) in India have executed several smart grid projects. This category will recognize holistic implementation, integration, and impact coming from successfully deployed solutions, rather than piece meal modules. Nominations will be divided into two categories:</p>
                    <p>a) Utilities<br>b) Technology Company/Implementing Agencies</p>
                    <p><b>Please note: For the ONE project, only ONE nomination will be accepted. Utility and Implementing Agency can submit joint nomination if both are interested</b></p>
                </td>
            </tr>

            <!-- Category 2 -->
            <tr>
                <td style="text-align:center;"><b>2</b></td>
                <td>Most Innovative Renewable Energy Programs/Projects in India including Energy Storage Systems (ESS)</td>
                <td>Utilities, Project Developers, Implementing Agencies OR Technology Companies</td>
                <td>This award category will recognise the innovative measures adopted for the promotion of Renewable Energy and ESS by any Utility/Project Developer/Technology Company/Implementing Agency in India</td>
            </tr>

            <!-- Category 3 -->
            <tr class="row-alt">
                <td style="text-align:center;"><b>3</b></td>
                <td>
                    <p>Smart Technology</p>
                    <p class="cat-list">a. Electricity – Distribution</p>
                    <p class="cat-sub-list">1) Network improvements in both Urban and Rural area;</p>
                    <p class="cat-sub-list">2) Behind The Meter (BTM) Innovations/ Projects</p>
                    <p class="cat-sub-list">3) Network Operations</p>
                    <p class="cat-list">b. Electricity – Domains other than Distribution</p>
                    <p class="cat-sub-list">1) Generation</p>
                    <p class="cat-sub-list">2) Transmission,</p>
                    <p class="cat-sub-list">3) Energy Storage Systems (ESS)</p>
                    <p class="cat-sub-list">4) Others</p>
                    <p class="cat-list">c. Domains other than Electricity</p>
                    <p class="cat-sub-list">1) Smart Gas Distribution</p>
                    <p class="cat-sub-list">2) Smart Water Distribution</p>
                    <p class="cat-sub-list">3) Others</p>
                </td>
                <td>Utilities, Project Developers and Operators, Technology Providers, Start-ups and Entrepreneurs</td>
                <td>
                    <p>This award category will recognise successfully implemented smart technologies by following:</p>
                    <p class="cat-sub-list2">a) Projects implemented in Electricity – Distribution Domain – Network improvement behind the Meter, Network Operators, System Operators Level, Rural Areas Projects</p>
                    <p class="cat-sub-list2">b) Successful projects implemented in Domains such as Electricity Generation, Transmission, ESS etc.</p>
                    <p class="cat-sub-list2">c) Projects implemented in Smart Gas Distribution, Smart Water Distribution, etc.</p>
                </td>
            </tr>

            <!-- Category 4 -->
            <tr>
                <td style="text-align:center;"><b>4</b></td>
                <td>
                    <p>Emerging Innovation in Electric Mobility Domain</p>
                    <p class="cat-list">a. Electric Vehicle (2/3/4 Wheelers, Buses, Trucks, Tractors, Boats/ Ferries, Drones etc) and Batteries for Electric Mobility</p>
                    <p class="cat-list">b. EV and EVSE Rollouts including New Business Models, Solar EV Charging Stations etc</p>
                </td>
                <td>
                    <p class="small-note">a) Manufacturers of Electric Vehicles (2/3/4 Wheelers, Buses, Trucks, Tractors, Boats/ Ferries, Drones etc) and Battery Manufacturers</p>
                    <p class="small-note">b) Agencies who have operationalized large fleet of EVs – Buses, Taxis and 3 Wheelers</p>
                    <p class="small-note">c) Organisations who have rolled out EV Charging Infrastructure</p>
                    <p class="small-note">d) Companies who support the rollout of Electric Mobility in India through their innovative solutions, technologies, software platforms etc</p>
                    <p class="small-note">e) Companies who have implemented innovative projects in this category including Solar EV Charging Stations</p>
                </td>
                <td>
                    <p>This Award category recognizes the most innovative EV and EVSE Design, Manufacture and Rollouts in India</p>
                    <p>Please note:</p>
                    <p class="cat-note">- Only OEMs, Fleet Operators and Public Transport Companies are eligible to submit Nominations in this category</p>
                    <p class="cat-note">- <b>Nomination of projects at design stage will not be accepted</b></p>
                </td>
            </tr>

            <!-- Category 5 -->
            <tr class="row-alt">
                <td style="text-align:center;"><b>5</b></td>
                <td>
                    <p>Adoption of Artificial Intelligence, Machine Learning, Virtual Reality (VR)/Augmented Reality (AR) and Robotic Solutions</p>
                    <p class="cat-list">a. Utility</p>
                    <p class="cat-list">b. Industry/Technology Provider</p>
                </td>
                <td>Utilities (Public &amp; Private) OR Project Developers and Operators, Technology Providers, Start-ups and Entrepreneurs</td>
                <td>
                    <p>Utilities in India have adopted and implemented advanced solutions with Artificial Intelligence, Machine Learning, Virtual Reality (VR)/Augmented Reality (AR) and Robotics Technologies</p>
                    <p>This category will recognize holistic implementation, integration, and impact coming from deployed solutions using the above technologies.</p>
                    <p>(Please note: A Video of the technology is requested to attach with the nomination)</p>
                </td>
            </tr>

            <!-- Category 6 -->
            <tr>
                <td style="text-align:center;"><b>6</b></td>
                <td>Smart Start-up and Incubator of the Year</td>
                <td>Start – ups with demonstrated solutions for utilities (Electricity, Electric Mobility, Gas and Water) and Incubators, Entrepreneurship Cells (E-Cell) promoting startups in these domains</td>
                <td>
                    <p>This award category recognizes:</p>
                    <p class="cat-note">- Technology start-ups (less than 5 years old and have revenue less than INR 100 crores in financial year 2024-2025), that have helped solving issues mainly for utilities and have enabled them and their end-customers to become efficient and smarter.</p>
                    <p class="cat-note">- Incubators in India that are hosted and supported by Government, Academia, Industrial bodies, Corporate and others. They continue to play a strong role in aiding start-up ecosystem and promoting innovation. This award recognizes their contributions to the utility sector.</p>
                </td>
            </tr>

            <!-- Category 7 -->
            <tr class="row-alt">
                <td style="text-align:center;"><b>7</b></td>
                <td>Innovative Financing For Energy Transition</td>
                <td>Angel Investors, Venture Capital Funds, Family Offices, Private Equity Funds, Development Financing Institutions, Philanthropic Funding Institutes, other Funding Agencies/Companies who have financed large RE, EV and other Clean Energy Projects and Technologies</td>
                <td>This award category recognizes funding Agencies and Companies who have funded First of a kind (FOAK), Innovative and large RE, EV and other Clean Energy Projects as well as those funded break-through technologies that have the potential to drive energy transition.</td>
            </tr>

            <!-- Category 8 -->
            <tr>
                <td style="text-align:center;"><b>8</b></td>
                <td>Waste-to-Energy, including Waste to CNG, Waste to Biogas Projects (W2E)</td>
                <td>Municipalities and Project Developers who have successfully implemented W2E projects are eligible to apply</td>
                <td>This Award Category recognizes the Successful and Sustainable W2E projects that are completed and running for a minimum period of 1 year as of <b>31 December 2025</b></td>
            </tr>

            <!-- Category 9 -->
            <tr class="row-alt">
                <td style="text-align:center;"><b>9</b></td>
                <td>Woman in Energy and Utilities</td>
                <td>
                    <p>Outstanding Women personalities in the energy and utility sector who have made significant contribution to the growth of the sector</p>
                    <p><b>(Women Entrepreneurs are encouraged to apply for ISGF Innovation Awards)</b></p>
                </td>
                <td>This award category will recognize individual women who have made substantial contributions in the areas covered under any of the above 9 award categories. i.e. power / utility sector/ technology provider/ implementing agency; OR has built a successful start-up that is growing successfully; OR Has promoted initiatives focused on areas such as policy reform, innovative technology adoption, innovative financing etc. in the power sector.</td>
            </tr>

            <!-- Category 10 -->
            <tr>
                <td style="text-align:center;"><b>10</b></td>
                <td>ISGF President's Award for the Best Contribution towards Energy Transition in India</td>
                <td>Awardees will be selected by ISGF, nominations not required</td>
                <td>
                    <p>This Category recognizes the Best Contributions towards growth of Smart Grids, Clean Energy and Electric Mobility in India and Winners are chosen by ISGF</p>
                    <p><b>Please note: Nominations are not invited for this category</b></p>
                </td>
            </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<p></p>

<!-- ===== Important Notes for Nomination Eligibility ===== -->
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapeight" aria-expanded="false" aria-controls="flush-collapeight">
        <H4 class="award-section-title"><strong>Important Notes for Nomination Eligibility</strong></H4>
      </button>
    </h2>
    <div id="flush-collapeight" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <P>1. <b>One Project can only be submitted in one category (only).</b> Nomination Submitting Party has to decide the best category suitable for winning the award relevant to the project and submit the nomination accordingly. In case of two nominations are received for the same project, the second nomination (as per the date and time) will be considered invalid. In case a Utility and Implementing Agency submits the nomination for same project, it will be taken forward as joint Nomination.</P>
        <p>2. ISGF holds the right to change the category of nomination in case same is proposed by Jury members</p>
        <P>3. <b>All the Project Nominations should be successfully completed projects.</b> Projects at idea/design/implementation stage will not be considered.</P>
        <P>4. <b>Project should be completed within the past 5 years</b></P>
        <P>5. <b>In case you feel that your project deserves an award, but it is not fitting into any category - please write to us at <a href="mailto:awards@isuw.in">awards@isuw.in</a></b></P>
      </div>
    </div>
  </div>
</div>
<p></p>

<!-- ===== Who can Participate ===== -->
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsenine" aria-expanded="false" aria-controls="flush-collapsenine">
        <H4 class="award-section-title"><strong>Who can Participate?</strong></H4>
      </button>
    </h2>
    <div id="flush-collapsenine" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <P>1. Individuals or organizations as per details in the above table can apply.</P>
        <p>2. Nominations are invited from Indian Companies/Utilities and Companies/organizations working on Projects in India.</p>
        <p>3. If you do not belong to any of the types of organizations mentioned in the "Who can apply?" list above, but still believe that your entry fits the category description then you are encouraged to write to us at <b><a href="mailto:awards@isuw.in">awards@isuw.in</a></b></p>
      </div>
    </div>
  </div>
</div>
<p></p>

<!-- ===== Benefits of Participation ===== -->
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseten" aria-expanded="false" aria-controls="flush-collapseten">
        <H4 class="award-section-title"><strong>Benefits of Participation?</strong></H4>
      </button>
    </h2>
    <div id="flush-collapseten" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <OL>
            <LI>To get your contributions and achievements to the sector recognized on a credible platform</LI>
            <LI>To share the learnings made by you or your organization for broader industry benefits</LI>
            <LI>To encourage other individuals and organizations to adopt best practices and learn from peers</LI>
            <LI>To gain competitive edge and provide a tangible point of difference over competitors</LI>
            <LI>To strengthen public relations and prompt media to communicate positive message about you and your organization by sharing success stories</LI>
            <LI>The winners will be felicitated in front of International Experts and Chief Guests from Government, Utility and Industry on 09<sup>th</sup> April 2027 in New Delhi</LI>
            <LI>Winners will be featured in ISGF Bulletin, The Energy Singularity Summit Post Event Reports, ISGF Annual Report, ISGF Social Media and India Smart Grid Knowledge Portal (<a href="http://www.indiasmartgrid.org" target="_blank">www.indiasmartgrid.org</a>) which would help them to get recognition nationally and internationally</LI>
        </OL>
      </div>
    </div>
  </div>
</div>
<p></p>

<!-- ===== Who will Evaluate ===== -->
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
        <H4 class="award-section-title"><strong>Who will Evaluate?</strong></H4>
      </button>
    </h2>
    <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <P>Below mentioned independent jury comprising of distinguished experts will evaluate the nominations and decide upon the winners.</P>
      </div>
    </div>
  </div>
</div>
<p></p>

<!-- ===== Jury Members ===== -->
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">
        <H4 class="award-section-title"><strong>Jury Members for ISGF Innovation Awards 2027</strong></H4>
      </button>
    </h2>
    <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <table class="jury-table">
            <tr>
                <th style="width:30%;">&nbsp;Jury Panel</th>
                <th style="width:70%;">Brief Profile of Jury Panel</th>
            </tr>
            <tr>
                <td>
                    <P class="justify-text"><IMG SRC="images/2026/PUmashankar.jpg" NAME="Picture 4" ALIGN=BOTTOM></P>
                    <P class="justify-text"><B>Mr. P Uma Shankar<br>Former Secretary<br>Ministry of Power, Government of India</B></P>
                </td>
                <td>
                    <P class="justify-text">Mr P Uma Shankar is an Independent and Non-executive Director at Philips Lighting India Limited. He is a retired senior IAS officer who has held several notable positions in the past including Ex-Secretary of Ministry of Power and Ex-Chairman of Rural Electrification Corporation. He is also an independent director on the boards of Jaypee Infratech Ltd, IMP Powers Ltd and Ravindra Energy Ltd. He served earlier on the boards of ONGC Ltd and Shipping Corporation of India Ltd as independent director. He joined the Indian Administrative Services in 1976 and has more than three decades of leadership experience in the Government of India spanning district administration, rural development, finance, housing and urban development, rural and agro-industries, municipal affair and power. P Uma Shankar holds a master's degree in Mathematics from IIT, Madras and a master's degree in Social Policy and Planning in Developing Countries from the London School of Economics. He is currently associated with IIT Chennai in the development of an innovative approach for providing a certain minimum uninterrupted power supply to homes thereby eliminating blackouts.</P>
                </td>
            </tr>
            <tr>
                <td>
                    <P class="justify-text"><IMG SRC="images/2026/AjayMathur.jpg" NAME="Picture 5" ALIGN=BOTTOM></P>
                    <P><B>Mr. Ajay Mathur<br>Former Director General<br>International Solar Alliance (ISA)</B></P>
                </td>
                <td>
                    <P class="justify-text">Dr. Ajay Mathur is the Former Director General of the International Solar Alliance (ISA), which is a one of its kind multilateral organisation established to catalyse global solar growth.</P>
                    <P class="justify-text">Prior to joining ISA, Dr. Mathur was Director General of The Energy and Resources Institute (TERI), and a member of the Prime Minister of India's Council on Climate Change. He was co-chair of the global Energy Transitions Commission, and of the Clean Cooling Initiatives of the One Planet Summit. He earlier headed the Indian Bureau of Energy Efficiency and was responsible for its foundational programmes which mainstreamed energy efficiency through initiatives such as the Star Labelling program for appliances, the Energy Conservation Building Code, and the Perform, Achieve &amp; Trade program for energy-intensive industries. He was a leading climate change negotiator and was the Indian spokesperson at the Paris climate negotiations. He served as the interim Director of the Green Climate Fund during its foundational period.</P>
                    <P class="justify-text">Dr. Mathur received a bachelor's degree in chemical engineering from the (then) University of Roorkee, and Master's and PhD degrees from the University of Illinois. He has also received the Distinguished Alumnus Awards from both his alma maters. He was appointed a Chevalier de l'Ordre national du Merite by the President of France in recognition of his outstanding commitment to the preservation of the environment and coping with energy-related challenges.</P>
                </td>
            </tr>
            <tr>
                <td>
                    <P class="justify-text"><IMG SRC="images/2026/AlokKumar.jpg" NAME="Picture 2" ALIGN=BOTTOM></P>
                    <P><B>Mr. Alok Kumar<br>Former Secretary - Ministry of Power; and Director General, All India DISCOMs Association (AIDA)</B></P>
                </td>
                <td>
                    <P class="justify-text">Mr. Alok Kumar is the presently working as Director General at AIDA and also serving as Director at Delhi with The Lantau Group (Singapore) Pte Ltd. In addition, he is Professor of Practice in the Department of Hydro and Renewable Energy at IIT Roorkee, and chairs the Inter-Ministerial Working Group set up by NITI Aayog to develop the power sector pathway to achieve India's Net Zero commitment.</P>
                    <P class="justify-text">He has had a 35-year-long career in public policy and economic development in India's premier federal civil service (IAS), reaching the distinguished position of Secretary in the National Government with extensive experience in electricity, renewable energy, energy transition, infrastructure development, and skill development domains. He has led several large commercial organisations as CEO, played a key role in the formulation and implementation of several national/state-level policies, programmes, and regulatory interventions, and successfully managed the operations of one of the largest power systems in the world while steering wide-ranging sectoral reforms.</P>
                    <P class="justify-text">He also has a deep understanding of global energy transition aspects as chair of the G20 Energy Transitions Working Group.</P>
                </td>
            </tr>
            <tr>
                <td>
                    <P class="justify-text"><IMG SRC="images/2026/ArunGoyal.jpg" NAME="Picture 6" ALIGN=BOTTOM></P>
                    <P><B>Mr. Arun Goyal<br>Former Secretary, Government of India and Former Member - CERC</B></P>
                </td>
                <td>
                    <P class="justify-text">Mr Arun Goyal is a 1985 batch retired officer of Indian Administrative Service officer belonging to the Union Territories Cadre. He is former Member of the Central Electricity Regulatory Commission and former Secretary to the Government of India.</P>
                    <P class="justify-text">In his last assignment as a Member in the Central Electricity Regulatory Commission, he played a key role in finalising important regulations such as the Grid Code, the 2024 Tariff Regulations, General Network Access Regulations, Power Market Regulations, Deviation Settlement Mechanism Regulations and adjudicated more than 2200 petitions.</P>
                    <P class="justify-text">He has extensive experience in the power sector and has served three tenures within Delhi's power sector, witnessing its different transformational phases. He played a key part in driving and stabilizing the historic power reforms in Delhi, which resulted in unbundling of the Delhi Vidyut Board and the privatization of the distribution.</P>
                    <P class="justify-text">He has nearly four decades of experience at the Central, State and Union Territory levels, across crucial domains such as power, finance, commerce, industry, regulatory affairs and public policy. He has contributed significantly to the major reforms and transitions in India including India's transition from GATT to WTO regime, rollout of the Goods and Services Tax (GST) and establishing India's Financial Intelligence Unit.</P>
                    <P class="justify-text">Other important positions held by him include Secretary (Coordination) in the Cabinet Secretariat; Additional Secretary in the Prime Minister's Office, where he headed the Project Monitoring Group; Minister (Economic &amp; Commercial) at the Embassy of India in Tokyo; and Secretary to the Lieutenant Governor in the Andaman &amp; Nicobar Administration.</P>
                    <P class="justify-text">He is a graduate in electrical engineering from Delhi College of Engineering, University of Delhi, an MBA (PGDM) from Indian Institute of Management, Ahmedabad. He also has an MA in Economics from HP University and MSc in Development Management from Glasgow Caledonian University, UK.</P>
                </td>
            </tr>
            <tr>
                <td>
                    <P class="justify-text"><IMG SRC="images/2026/BPSingh.jpg" NAME="Picture 2" ALIGN=BOTTOM></P>
                    <P><B>Mr. BP Singh<br>Former Member<br>Delhi Electricity Regulatory Commission (DERC)</B></P>
                </td>
                <td>
                    <P class="justify-text">Mr BP Singh is a graduate in Mining Engineering from Indian School of Mines, Dhanbad and has over 40 years of experience in the power &amp; energy sector.</P>
                    <P class="justify-text">He was a Former Member in DERC (Delhi Electricity Regulatory Commission). He has issued three successive Tariff Orders for the period 2014 to 2018, being consumer friendly, were highly acclaimed at all levels. As a part of Power sector Reforms, formulated progressive Regulations on Tariff, Net Metering and Demand Side Management and Modified SOP to make it more consumer friendly. Efficacious remedy for redressal of Consumer's Grievance has been enhanced by making the Regulations consumer friendly and initiated action for creation of legal aid cell for the benefit of the Consumer's.</P>
                    <P class="justify-text">Prior to taking up the assignment as Member DERC, he rose to the position of Director (Projects) in NTPC, where he additionally had also held assignments viz, Chairman, BRBCL; Chairman NTPC SCCL Global Ventures Pvt. Ltd.; whole time Director of NTPC Hydro Ltd.; BFSNL Ltd. etc.</P>
                    <P class="justify-text">He has been part of numerous high-level committees constituted by the Government of India for formulation of Plan proposals and Policies including Energy Policy, pricing of Coal etc.</P>
                    <P class="justify-text">He has actively participated in formulation of policies for the Regulatory Commissions under the aegis of Forum of India Regulators. He has been associated with numerous professional institutions, viz</P>
                    <P class="justify-text">1. "Institute Senate Member' -- Dr BR Ambedkar National Institute of Technology, Jalandhar;</P>
                    <P class="justify-text">2. Member of General Body &amp; Peer Review Committee of National Institute of Rock Mechanics under Ministry of Mines,</P>
                    <P class="justify-text">3 Member of the Board of Construction Industry Development Council, joint council by Indian Construction industry and Planning Commission,</P>
                    <P class="justify-text">He had been adjudged and awarded Best Director Projects Corporate Excellence Award 2012-13 -- GEOMINTECH; Awarded at Brisbane Dadari Project -- awarded for project excellence in 25th IPMA World Congress at Brisbane in 2011.</P>
                </td>
            </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<p></p>

<!-- ===== Award Winning Categories ===== -->
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseaward" aria-expanded="false" aria-controls="flush-collapseaward">
        <H4 class="award-section-title"><strong>Award Winning Categories</strong></H4>
      </button>
    </h2>
    <div id="flush-collapseaward" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <P class="justify-text">The Award will be awarded in below mentioned levels under each category:</P>
        <table class="criteria-table">
            <tr>
                <th style="width:41px;">S.No</th>
                <th style="width:350px;">Award</th>
                <th style="width:600px;">Rank</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Diamond Award</td>
                <td>1st Rank</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Platinum Award</td>
                <td>2nd Rank</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Gold Award</td>
                <td>3rd Rank</td>
            </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<p></p>

<!-- ===== Evaluation Criteria ===== -->
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
        <H4 class="award-section-title"><strong>Evaluation Criteria</strong></H4>
      </button>
    </h2>
    <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <P class="justify-text">The following parameters will be key while evaluating the nominations. It is advised that the nominations submitted aim to address these points as clearly as possible with evidence/supporting documents:</P>
        <table class="criteria-table">
            <tr>
                <th style="width:41px;">S.No</th>
                <th style="width:350px;">Parameters</th>
                <th style="width:600px;">Parameter Focus</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Scale/Size</td>
                <td>
                    - Mention Project size and scale<br>
                    - Project should be completed and rolled out
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Functionalities and Features</td>
                <td>Functionalities and Features of the Project</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Impact</td>
                <td>
                    Impact of the Project<br>
                    - Technical Impacts<br>
                    - Impact on Users/Society (Attach Testimony, if possible)<br>
                    - Commercial Impacts
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Innovation</td>
                <td>
                    - Specify Alternate Solution<br>
                    - Comparison of your solution with others / existing solutions<br>
                    - Competitive Analysis
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Scalability</td>
                <td>- Indicate whether the solution can be scalable in millions or larger geographies</td>
            </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<P STYLE="margin-bottom: 0in"><BR></P>

<!-- ===== Selection Process ===== -->
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseselection" aria-expanded="false" aria-controls="flush-collapseselection">
        <H4 class="award-section-title"><strong>Selection Process</strong></H4>
      </button>
    </h2>
    <div id="flush-collapseselection" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <P STYLE="margin-bottom: 0in"><IMG SRC="/images/2026/selection5.png?id=1"></P>
        <P STYLE="margin-bottom: 0in"><BR></P>
      </div>
    </div>
  </div>
</div>
<P STYLE="margin-bottom: 0in"><BR></P>

<!-- ===== Marks Allocation ===== -->
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetweleve" aria-expanded="false" aria-controls="flush-collapsetweleve">
        <H4 class="award-section-title"><strong>Marks Allocation</strong></H4>
      </button>
    </h2>
    <div id="flush-collapsetweleve" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <table class="info-table">
            <tr>
                <td style="width:377px;"><B>Jury evaluation and filtering for presentation round</B></td>
                <td style="width:644px;">40 Marks</td>
            </tr>
            <tr>
                <td><B>Project Presentation to Juries</B></td>
                <td>60 Marks</td>
            </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<P STYLE="margin-bottom: 0in"><BR></P>

<!-- ===== Important Dates ===== -->
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsethirteen" aria-expanded="false" aria-controls="flush-collapsethirteen">
        <H4 class="award-section-title"><strong>Important Dates</strong></H4>
      </button>
    </h2>
    <div id="flush-collapsethirteen" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <table class="info-table">
            <tr>
                <td style="width:377px;"><B>APPLY BEFORE</B></td>
                <td style="width:644px;">28 Dec 2026</td>
            </tr>
            <tr>
                <td><B>JURY PRESENTATION (ROUND 2)</B></td>
                <td>25 - 26 Feb 2027 (Exact dates will be sent on email to selected Nominees)</td>
            </tr>
            <tr>
                <td><B>AWARD DISTRIBUTION</B></td>
                <td>09 April 2027</td>
            </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<p></p>

<!-- ===== Terms & Conditions ===== -->
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <H4 class="award-section-title"><strong>Terms &amp; Conditions</strong></H4>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <OL>
            <LI><P>Participants can be utilities, individuals or any registered company /organization</P></LI>
            <LI><P>At the time of submitting the application, please ensure that you have provided all the necessary details. Incomplete applications will not be accepted</P></LI>
            <LI><P>The submissions will be evaluated on the criteria as specified in the evaluation criterion section</P></LI>
            <LI><P>All documents submitted shall be used only for evaluation purposes</P></LI>
            <LI><P>ISGF reserves the right to reject any entry based on its discretion</P></LI>
            <LI><P>ISGF reserves the right to cancel or amend all or any part of the competition and/ or the rules</P></LI>
            <LI><P>Any changes to the rules, or cancellation of the competition, will be posted on the contest page on ISGF/ISUW portals. It is the responsibility of the participants to keep themselves informed as to any changes to the rules</P></LI>
            <LI><P>ISGF team and partners will not be held responsible if the participants are not able to submit their entries on ISGF portal by email before the last date &amp; time of submission for any reason whatsoever</P></LI>
            <LI><P>ISGF accepts no responsibility for any damage, loss or injury of any kind suffered by any participant in participating in the Award, including as a result of any participant winning or not winning any prize</P></LI>
            <LI><P>The jury of the ISGF Innovation Award 2027 shall have the final authority in determining the winner of the award in each category. The decision of the Jury shall be final, conclusive and binding, the winner or any other person shall have no legal or any other rights to contest or dispute the decision of the jury</P></LI>
            <LI><P>In the event that no Participant in a category is found to be worthy of an award by the Jury, the Award category may be cancelled by the Jury</P></LI>
            <LI><P>The award category nomination selected in the nomination form can be changed to other award category by ISGF based on the information provided in the form. The change in award category nomination will be communicated by the ISGF team to the respective nominees</P></LI>
            <LI><P>The nominee accepts that content of the nomination form, photography / video recording during and after the event can be used by the ISGF and partners for purpose of producing editorial content and advertising materials</P></LI>
            <LI><P>All prizes are non-transferable</P></LI>
            <LI><P>By registering for participation in the Contest, the Participant(s) warrant that:</P></LI>
        </OL>
        <OL>
            <OL TYPE=a>
                <OL TYPE=i>
                    <LI><P>They have complied with the Entry conditions mentioned above</P></LI>
                    <LI><P>Their entry is original</P></LI>
                    <LI><P>Their entry does not infringe any Intellectual Property Rights of any third parties</P></LI>
                </OL>
            </OL>
        </OL>
        <P>16. There is no fee of any kinds for participation in ISGF Innovation Awards</P>
      </div>
    </div>
  </div>
</div>
<p></p>

<!-- ===== Disclaimer ===== -->
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
        <H4 class="award-section-title"><strong>Disclaimer</strong></H4>
      </button>
    </h2>
    <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <UL class="theme">
            <LI><P>The Judgment of the Jury shall be deemed as final</P></LI>
        </UL>
      </div>
    </div>
  </div>
</div>
<p></p>

<!-- ===== How to Apply ===== -->
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsethree" aria-expanded="false" aria-controls="flush-collapsethree">
        <H4 class="award-section-title"><strong>How to Apply?</strong></H4>
      </button>
    </h2>
    <div id="flush-collapsethree" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <P STYLE="margin-bottom: 0in"><IMG SRC="http://www.isuw.in/public/uploads/images/selection-process.jpeg"></P>
        <P STYLE="margin-bottom: 0in"></P>
      </div>
      <div class="accordion-body">
        <UL class="theme">
            <LI><P><B>Read Details:</B>Visit our website: <A href="https://www.isuw.in/innovation-awards" target="_blank">https://www.isuw.in/innovation-awards</A></P></LI>
            <LI><P><B>Identify your Category:</B> Read thoroughly the website page and understand the Nomination Categories table with details regarding the award category, eligibility and description. (In case of doubt, please feel free to reach us)</P></LI>
            <LI><P><B>Fill each and every detail as asked by us for evaluation of your Nomination by Juries. Nomination Form Link: <a href="https://forms.gle/DvpqgPTSfYtRz9XW9" target="_blank">https://forms.gle/DvpqgPTSfYtRz9XW9</a></B></P></LI>
            <LI><P><B>Email Us for Queries :</B>Write to us at awards@isuw.in</P></LI>
            <LI><P><B>Please note:</B> Any Nomination Form and its Document's in Hard Copy or Email will not be accepted. Online submission is Mandatory.</P></LI>
        </UL>
      </div>
    </div>
  </div>
</div>
<p></p>

<!-- ===== How to Reach Us ===== -->
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwo" aria-expanded="false" aria-controls="flush-collapsetwo">
        <H4 class="award-section-title"><strong>How to Reach Us?</strong></H4>
      </button>
    </h2>
    <div id="flush-collapsetwo" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <p>
            1) For more details, Winner selection procedure and to submit Nomination, please visit:
            <a href="https://isuw.in/innovation-awards/" target="_blank">https://isuw.in/innovation-awards</a><br/>
            2) Direct link for nomination form: <a href="https://forms.gle/DvpqgPTSfYtRz9XW9" target="_blank">Click Here</a><br/>
            3) Last date to apply for Online Nominations is <b>28 Dec 2026</b><br/>
            4) For queries, please write to us at <a href="mailto:awards@isuw.in">awards@isuw.in</a>
        </p>
      </div>
    </div>
  </div>
</div>
<p></p>

</body>
</html>

<p></p>
</div>
</div>

@endsection