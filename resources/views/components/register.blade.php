@extends('master')
@section('content')

<div class="container">
	<style>
		.tabletheme, td, th{padding:6px;}
	</style>
    <style>
        :root {
            --primary: #EF7B00;
            --primary-dark: #d46c00;
            --secondary: #0056b3;
            --light: #f8f9fa;
            --dark: #343a40;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --border: #dee2e6;
        }

        /* Base reset + consistent font and size for the page */
        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 16px; 
        } */

        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px 0;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .logo-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .logo-container img {
            max-height: 100px;
            max-width: 100%;
        }

        h1 {
            color: var(--primary);
            margin-bottom: 10px;
            font-size: 2.2rem;
            text-align: center;
        }

        h2 {
            color: var(--primary);
            margin: 25px 0 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid var(--primary);
        }

        h3 {
            color: var(--secondary);
            margin: 20px 0 10px;
        }

        .underline {
            text-decoration: underline;
            text-underline-offset: 3px;
        }

        .table-container {
            overflow-x: auto;
            margin: 30px 0;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        /* TABLES: force white backgrounds, remove hover effects, and enforce consistent font/size */
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            font-family: inherit;
            font-size: inherit;
            color: var(--dark);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid var(--border);
            background: white !important; /* ensure all cells are white */
            font-family: inherit;
            font-size: inherit;
        }

        /* Make header cells white too, with dark text */
        thead th {
            background-color: white !important;
            color: var(--dark) !important;
            font-weight: 600;
            text-align: center;
        }

        /* Remove striped rows and hover effects across all tables */
        tbody tr:nth-child(even), .discount-table tr:nth-child(even) {
            background-color: white !important;
        }

        tbody tr:hover, tr:hover {
            background-color: white !important;
            cursor: default;
        }

        /* Override any existing 'highlight' visual to keep rows white but keep bold text */
        .highlight {
            background-color: white !important;
            font-weight: 700;
        }
        
        .package-list {
            list-style-type: none;
        }
        
        .package-list li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 20px;
        }
        
        .package-list li:before {
            content: "•";
            color: var(--dark); /* neutral dark bullet, no accent colors */
            font-weight: bold;
            position: absolute;
            left: 0;
        }
        
        .note {
            
            padding: 15px;
            border-left: 4px solid #ffc107;
            margin: 20px 0;
            border-radius: 4px;
        }
        
        .discounts-container {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin: 30px 0;
        }
        
        .discount-table {
            width: 100%;
            margin: 20px 0;
        }
        
        .discount-table th {
            background-color: white !important; /* keep headers white */
            color: var(--dark) !important;
            padding: 12px 15px;
            text-align: left;
        }
        
        .discount-table td {
            padding: 12px 15px;
            vertical-align: top;
        }
        
        .discount-table tr:nth-child(even) {
            background-color: white !important;
        }
        
        .disclaimer {
           
            padding: 20px;
            border-left: 4px solid #dc3545;
            margin: 30px 0;
            border-radius: 4px;
        }
        
        .disclaimer h3 {
            color: #721c24;
        }
        
        .contact-info {
            margin: 20px 0;
            padding: 15px;
            background-color: #e7f3ff;
            border-radius: 8px;
        }
        
        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            color: var(--gray);
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            th, td {
                padding: 10px;
                font-size: 0.9rem;
            }
            
            h1 {
                font-size: 1.8rem;
            }
            
            .logo-container {
                flex-direction: column;
                align-items: center;
            }
        }
        
        @media (max-width: 576px) {
            th, td {
                padding: 8px;
                font-size: 0.85rem;
            }
            
            .container {
                padding: 10px;
            }
        }
        
        .highlight {
            background-color: white !important;
            font-weight: 700;
        }
    </style>
 <div class="row justify-content-left ">     
<p></p>

<style type="text/css">.diff_ss1{margin-left:30px;}</style>
<div class="k_cheading"> 
		<h1>THE ENERGY SINGULARITY SUMMIT <span class="k_greencolor">(TESS 2027) Registration</span> </h1>
		<p style="text-align:center; font-size:1.1rem; color:#555;">Built on 12 successful editions of India Smart Utility Week (ISUW) since 2015</p>
		<img src="/public/uploads/images/kborder_bottom.png" alt=""> 
	</div>
	
	<p><img src="images/2026/ISUWReg.jpg" alt="" style="width:100%"> </p>
	<div class="k_cheading">
	
    <a href="https://isuw2026.theonsite.cloud/register.php" target="_blank"><img src="https://isuw.in/public/uploads/images/register-now.PNG" class="center" style="margin-right:50px;"></img></a>
	
	</div>

	<p></p>
<section>
            <h2>Delegate Registration Categories & Fees</h2>
    
            
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Registration Categories</th>
                            <th>Fee in INR + 18% GST Extra</th>
                            <th>Fee in USD + Taxes</th>
                            <th>Indian Utilities</th>
                            <th>Package Includes Passes For</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="highlight">
                            <td><strong>6 Day Full Pass (05 - 10 April 2027)</strong><br>
                                Package including Conference, Exhibition, Special Workshops, Master Classes, ISGF Innovation Awards with Gala Dinner and Technical Tours
                            </td>
                            <td><strong>50,000*</strong></td>
                            <td><strong>500*</strong></td>
                            <td><strong>Complimentary***</strong></td>
                            <td>
                                <ul class="package-list">
                                    <li><strong>Access to co-hosted IRED event on 05 April 2027</strong></li>
                                    <li><strong>Access to co-hosted WE3 Asia event on 06 April 2027</strong></li>
                                    <li><strong>Access to Master Classes on 06 April 2027</strong></li>
                                    <li><strong>Access to TESS 2027 Conference and Exhibition for 3 Days (07 - 09 April 2027)</strong></li>
                                    <li><strong>High tea and coffee throughout the conference day</strong></li>
                                    <li><strong>1 coupon of the amazing lunch buffet spread for 5 days (05 - 09 April 2027)</strong></li>
                                    <li><strong>Exclusively designed Delegate Bag</strong></li>
                                    <li><strong>Special access to ISGF Innovation Awards Night on 09 April 2027</strong></li>
                                    <li><strong>Gala Dinner for 1 Pax on 09 April 2027</strong></li>
                                    <li><strong>Access to Technical Tours on 10 April 2027</strong></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>5 Day Conference and Exhibition (06 - 10 April 2027)</strong><br>
                                Package Including Conference, Exhibition, Special Workshops ISGF Innovation Awards with Gala Dinner and Technical Tours
                            </td>
                            <td><strong>45,000*</strong></td>
                            <td><strong>450*</strong></td>
                            <td><strong>Complimentary***</strong></td>
                            <td>
                                <ul class="package-list">
                                    <li><strong>Access to co-hosted WE3 Asia event on 06 April 2027</strong></li>
                                    <li><strong>Access to TESS 2027 Conference and Exhibition for 3 Days (07 - 09 April 2027)</strong></li>
                                    <li>High tea and coffee throughout the conference day</li>
                                    <li>1 coupon of the amazing lunch buffet spread for 4 days (06 - 09 April 2027)</li>
                                    <li>Exclusively designed Delegate Bag</li>
                                    <li>Special access to ISGF Innovation Awards Night on <strong>09 April 2027</strong></li>
                                    <li>Gala Dinner for 1 Pax on <strong>09 April 2027</strong></li>
                                    <li>Access to Technical Tours on <strong>10 April 2027</strong></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Master Classes on 6 April 2027 and 3 Days Exhibition only Pass (07 - 09 April 2027)</strong></td>
                            <td><strong>10,000*</strong></td>
                            <td><strong>100*</strong></td>
                            <td><strong>Complimentary***</strong></td>
                            <td>
                                <ul class="package-list">
                                    <li><strong>Access to Master Classes on 06 April 2027</strong></li>
                                    <li><strong>3 Days Exhibition only (07 - 09 April 2027)</strong></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>ISGF Innovation Awards 2027 with Gala Dinner Pass (09 April 2027)</strong></td>
                            <td><strong>10,000*</strong></td>
                            <td><strong>150*</strong></td>
                            <td><strong>10000</strong></td>
                            <td>
                                <ul class="package-list">
                                    <li><strong>Access to ISGF Innovation Awards Night and Gala Dinner for 1 Pax on 09 April 2027</strong></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Bonafide Indian Students Pass for Conference & Exhibition** (5-9 April 2027)</strong></td>
                            <td><strong>10,000</strong></td>
                            <td><strong>N/A</strong></td>
                            <td><strong>—</strong></td>
                            <td>
                                <ul class="package-list">
                                    <li><strong>Package including Master Classes, Conference, Exhibition and Special Workshops.</strong></li>
                                    <li>Email your valid ID card to avail the offer at <a href="mailto:info@energysingularitysummit.com">info@energysingularitysummit.com</a></li>
                                    <li>Access to TESS 2027 Conference and Exhibition for 3 days <strong>(07 - 09 April 2027)</strong></li>
                                    <li>High tea and coffee throughout the conference day</li>
                                    <li>1 coupon of the amazing lunch buffet spread for 5 days (05 - 09 April 2027)</li>
                                </ul>
                                <p class="note" style="margin-top: 10px;">
                                    <strong>Please note:</strong> Only valid students with valid ID card will be allowed to get this pass. 
                                    ISGF holds the right to cancel the registration in case invalid ID is found. 
                                    Student id card shall be emailed at <a href="mailto:info@energysingularitysummit.com">info@energysingularitysummit.com</a> in advance.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Visitor Pass for 3 Days Exhibition Only (07 - 09 April 2027)</strong></td>
                            <td><strong>Complimentary</strong></td>
                            <td><strong>Complimentary</strong></td>
                            <td><strong>Complimentary</strong></td>
                            <td>
                                <ul class="package-list">
                                    <li><strong>Access to Exhibition from 07 – 09 April 2027</strong></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
         <p class="note"><strong>Note:</strong> Applicable taxes (18% GST) extra. <br>
         ** Bonafide Students Pass will be provided only after verification of IDs and it does not include Gala Dinner Pass. <br>
         *** Utilities Complimentary Pass will be provided only after verification of ID. <br>
         For Group Discounts, please write us at <a href="mailto:info@energysingularitysummit.com">info@energysingularitysummit.com</a></p>   
        </section>

        <section class="discounts-container">
            <h2>Offers and Discounts</h2>
            
            <table class="discount-table">
                <thead>
                    <tr>
                        <th>Discount Percentage</th>
                        <th>Terms and Conditions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>20%</strong></td>
                        <td>Early Bird offer is valid till <strong>10th March 2027</strong>. To get this code, please write to us at <a href="mailto:info@energysingularitysummit.com">info@energysingularitysummit.com</a> with your organisation details</td>
                    </tr>
                    <tr>
                        <td><strong>20%</strong></td>
                        <td>Only for ISGF Members valid till <strong>10th March 2027</strong> – <a href="https://indiasmartgrid.org/members-list" target="_blank">https://indiasmartgrid.org/members-list</a>. To get this code, please write to us at <a href="mailto:info@energysingularitysummit.com">info@energysingularitysummit.com</a> with your organisation details</td>
                    </tr>
                    <tr>
                        <td><strong>20%</strong></td>
                        <td>This offer is valid for <strong>Delegate group of 4 till 10th March 2027</strong>. In case, after getting the DISCOUNT CODE, registration is not made for the mentioned number of Delegates, ISGF holds the right to cancel your registration. To get this code, please write to us at <a href="mailto:info@energysingularitysummit.com">info@energysingularitysummit.com</a> with delegate details such as Name, Email id and Company Name</td>
                    </tr>
                    <tr>
                        <td><strong>30%</strong></td>
                        <td>This offer is valid for <strong>Delegate group of 5 and above till 10th March 2027.</strong> In case, after getting the DISCOUNT CODE, registration is not made for the mentioned number of Delegates, ISGF holds the right to cancel your registration. To get this code, please write to us at <a href="mailto:info@energysingularitysummit.com">info@energysingularitysummit.com</a> with Delegate Details such as Name, Email id and Company Name</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="disclaimer">
            <h2>Disclaimer</h2>
            <ul class="package-list">
                <li><strong>All the Foreign Delegates</strong> interested in visiting TESS 2027 may apply for e-visa. For Visa letter request please register yourself and send us a request for visa letter on email id <a href="mailto:info@energysingularitysummit.com">info@energysingularitysummit.com</a></li>
                <li>ISGF holds the right of admission, registration cancellation and to revoke any discount offers</li>
                <li>GST and other important charges will be over and above the mentioned fee</li>
                <li>For queries, please write to us at <a href="mailto:info@energysingularitysummit.com">info@energysingularitysummit.com</a></li>
            </ul>
	    </section>

	<p></p>
</div></div>
@endsection