@extends('master')
@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .themes-table-wrap {
        overflow-x: auto;
        margin-top: 10px;
    }

    .themes-table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #198754;
        margin: 0;
    }

    .themes-table thead th {
        background-color: #198754;
        color: #ffffff;
        border: 1px solid #198754;
        padding: 10px;
        text-align: left;
        font-weight: 700;
    }

    .themes-table td {
        border: 1px solid #198754;
        padding: 10px;
        vertical-align: top;
        line-height: 1.6;
    }

    .themes-table tbody tr:nth-child(even) {
        background-color: #f2fbf6;
    }

    .themes-table .theme-index {
        width: 60px;
        font-weight: 700;
        color: #146c43;
        text-align: center;
    }

    @media (max-width: 768px) {
        .themes-table {
            min-width: 720px;
        }
    }
</style>

 <div class="container">
 <div class="row justify-content-left ">
<p></p>

<div class="k_cheading">
		<h1>TESS <span class="k_greencolor">Exhibition Themes</span> </h1>
		<img src="/public/uploads/images/kborder_bottom.png" alt=""> 
	</div>

<div class="themes-table-wrap">
    <table class="themes-table" aria-label="Exhibition Themes">
        <thead>
            <tr>
                <th style="width: 60px;">#</th>
                <th>Exhibition Theme</th>
            </tr>
        </thead>
        <tbody>
            <tr><td class="theme-index">1</td><td>AI and Digital Superintelligence for Grid Management: Demand Forecasting, Autonomous Grid Control, Digital Twins and Predictive Maintenance</td></tr>
            <tr><td class="theme-index">2</td><td>Smart Microgrids and Resilient Power Systems: For Critical Infrastructure and AI</td></tr>
            <tr><td class="theme-index">3</td><td>Demand-Side Flexibility: Smart Meters, Time-of-Use (TOU) Tariffs, Vehicle-to-Grid (V2G) and AI-Managed Smart Buildings and Campuses</td></tr>
            <tr><td class="theme-index">4</td><td>The Cooling Challenge: Cooling as a Service through District Cooling Systems (DCS) and Enhanced Flexibility for the Distribution Grid</td></tr>
            <tr><td class="theme-index">5</td><td>New Architecture and Control Systems for the Green Grid: With Multidirectional Power Flows</td></tr>
            <tr><td class="theme-index">6</td><td>Digital Energy Grids: Where Customers (and Smart Appliance/EV/Drone/Robot) can Buy Electricity from the Greenest and Cheapest Source through P2P Transactions</td></tr>
            <tr><td class="theme-index">7</td><td>New Loads and New Customers: GW Scale AI Data Centres, MW Scale EV Charging Stations; and Billions of Humanoid Robots and Trillions of AI Agents</td></tr>
            <tr><td class="theme-index">8</td><td>Grid-Scale and Long-Duration Energy Storage: LFP Batteries, Pumped Hydro, Flow Batteries, Thermal Storage, Iron-Air and Gravity-Based Energy Storage Technologies</td></tr>
            <tr><td class="theme-index">9</td><td>Nuclear Renaissance: Small Modular Reactors (SMRs) for Firm, Dispatchable, Carbon-Free Power</td></tr>
            <tr><td class="theme-index">10</td><td>Offshore and Floating Wind: Unlocking New Resource Frontiers</td></tr>
            <tr><td class="theme-index">11</td><td>Green Hydrogen: Long-Duration Storage and Decarbonisation of Hard-to-Abate Industries</td></tr>
            <tr><td class="theme-index">12</td><td>Enabling Policies, Regulations and Skilled Workforce: With Gender Balance for the Energy Singularity Era</td></tr>
            <tr><td class="theme-index">13</td><td>“Everything to the Grid” Energy Systems for the “Reimagined Grid”</td></tr>
            <tr><td class="theme-index">14</td><td>Advanced Transmission Infrastructure: HVDC, FACTS, Grid-Forming Inverters and Superconducting Cables</td></tr>
            <tr><td class="theme-index">15</td><td>Powering Data Centres: On Land, in Orbit and under the Sea</td></tr>
            <tr><td class="theme-index">16</td><td>Wired and Wireless Charging of EVs, Drones, Humanoid Robots and Flying Cars</td></tr>
            <tr><td class="theme-index">17</td><td>Agentic AI-Based VPP-ESS Interconnections for Grid Flexibility</td></tr>
            <tr><td class="theme-index">18</td><td>Room-Temperature Superconductors and AI-Driven Materials Discovery</td></tr>
            <tr><td class="theme-index">19</td><td>Next-Generation Solar: Perovskites, Bifacial Modules and Agrivoltaics</td></tr>
            <tr><td class="theme-index">20</td><td>Nuclear Fusion: AI-Accelerated Path to Commercial Fusion Power</td></tr>
            <tr><td class="theme-index">21</td><td>Advanced Power Electronics: Wide-Bandgap Semiconductors (SiC and GaN) for a More Efficient Energy Conversion Chain</td></tr>
            <tr><td class="theme-index">22</td><td>Quantum Technologies and Quantum Algorithms: For Power Flow Control and Optimization in Real-Time</td></tr>
            <tr><td class="theme-index">23</td><td>Biomimicry and Artificial Photosynthesis</td></tr>
            <tr><td class="theme-index">24</td><td>Cyber Security, Quantum Safe and Lattice-Based Cryptography</td></tr>
            <tr><td class="theme-index">25</td><td>Emerging Space Technologies: Architecture and Energy Systems for Colonising the Moon and Mars, and the Autonomous and Zero Pollution Mobility</td></tr>
            <tr><td class="theme-index">26</td><td>Autonomous and Zero Emission Vehicles</td></tr>
        </tbody>
    </table>
</div>
<p>To Exhibit during TESS, email us at <a href="mailto:isuw@isuw.in">isuw@isuw.in</a></p>

<p></p>
</div>
</div>

@endsection