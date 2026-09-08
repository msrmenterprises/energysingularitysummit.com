@extends('master')
@section('content')
<style>
  ul {margin-left:30px !important;}
  .event-date-card {
    align-items: center;
    gap: 12px;
    margin-top: 14px;
    padding: 10px 16px;
    border-left: 4px solid #198754;
    background: linear-gradient(90deg, #eef9f1 0%, #ffffff 100%);
    box-shadow: 0 2px 8px rgba(25, 135, 84, 0.08);
  }

  .event-date-card .event-date-label {
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #198754;
  }

  .event-date-card .event-date-value {
    font-size: 16px;
    font-weight: 700;
    color: #1f2937;
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
      <h1>TESS 2027 <span class="k_greencolor">PROGRAM STRUCTURE & CONFERENCE THEMES</span></h1>
      <img src="/public/uploads/images/kborder_bottom.png" alt="">
    </div>

    <p style="margin-top: 18px; line-height: 1.8;">
      The Energy Singularity Summit (TESS) 2027 is scheduled from 05&ndash;10 April 2027 in
      New Delhi, building on 12 successful editions of the India Smart Utility Week (ISUW)
      conducted by the India Smart Grid Forum (ISGF) since 2015. Below is how the week
      comes together, day by day, followed by the full set of conference themes &mdash;
      spanning subjects that carry forward from ISUW and entirely new themes
      introduced for the Energy Singularity era.
      <span class="event-date-card">
        <span class="event-date-label">Date & Venue</span>
        <span class="event-date-value">05&ndash;10 April 2027 | New Delhi, India</span>
      </span>
    </p>

    <!-- Program Structure Section using Table -->
    <div class="themes-table-wrap">
      <h2 style="color: #198754; margin-top: 20px;">Program Structure</h2>
      <table class="themes-table" aria-label="TESS 2027 Program Structure">
        <thead>
          <tr>
            <th style="width: 30%;">Day / Date</th>
            <th>Program</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>DAY 1 · MONDAY</strong><br>05 April 2027</td>
            <td>- Co-Hosted Event - <strong>IRED</strong></td>
          </tr>
          <tr>
            <td><strong>DAY 2 · TUESDAY</strong><br>06 April 2027</td>
            <td>
              - IEC--IEEE--BIS Smart Energy Workshop<br>
              - TESS Masterclass<br>
              - Co-Hosted Event -- <strong>2<sup>nd</sup> WE3 Asia</strong>
            </td>
          </tr>
          <tr>
            <td><strong>DAY 3 · WEDNESDAY</strong><br>07 April 2027</td>
            <td>
              - <strong>TESS Inauguration</strong><br>
              - TESS Conference &amp; Exhibition<br>
              - Bilateral Workshops<br>
              - Co-Hosted Event - <strong>IRED</strong><br>
              - TESS Welcome Reception
            </td>
          </tr>
          <tr>
            <td><strong>DAY 4 · THURSDAY</strong><br>08 April 2027</td>
            <td>
              - TESS Conference &amp; Exhibition<br>
              - Bilateral Workshops<br>
              - Co-Hosted Event - <strong>IRED</strong>
            </td>
          </tr>
          <tr>
            <td><strong>DAY 5 · FRIDAY</strong><br>09 April 2027</td>
            <td>
              - TESS Conference &amp; Exhibition<br>
              - Bilateral Workshops<br>
              - 11th ISGF Innovation Awards &amp; Gala Dinner<br>
              - Co-Hosted Event - <strong>IRED</strong>
            </td>
          </tr>
          <tr>
            <td><strong>DAY 6 · SATURDAY</strong><br>10 April 2027</td>
            <td>
              - Technical Tours and Cultural Tours
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Conference Themes Section -->
    <div style="margin-top: 40px;">
      <h2 style="color: #198754;">TESS 2027 Conference Themes</h2>
      
      <h3 style="color: #ed7d31; margin-top: 20px;">Continuing from ISUW</h3>
      <ul>
        <li><strong>AI and Digital Superintelligence for Grid Management</strong> — Demand Forecasting, Autonomous Grid Control, Digital Twins and Predictive Maintenance</li>
        <li><strong>Smart Microgrids and Resilient Power Systems</strong> — For Critical Infrastructure and AI</li>
        <li><strong>Demand-Side Flexibility</strong> — Smart Meters, Time-of-Use (ToU) Tariffs, Vehicle-to-Grid (V2G) and AI-Managed Smart Buildings and Campuses</li>
        <li><strong>The Cooling Challenge</strong> — Cooling as a Service through District Cooling Systems (DCS) and Enhanced Flexibility for the Distribution Grid</li>
        <li><strong>New Architecture and Control Systems for the Green Grid</strong> — With Multidirectional Power Flows</li>
        <li><strong>Digital Energy Grids</strong> — Where Customers (and Smart Appliances/EVs/Drones/Robots) can Buy Electricity from the Greenest and Cheapest Source through P2P Transactions</li>
        <li><strong>New Loads and New Customers</strong> — GW-Scale AI Data Centres, MW-Scale EV Charging Stations, and Billions of Humanoid Robots and Trillions of AI Agents</li>
        <li><strong>Grid-Scale and Long-Duration Energy Storage</strong> — LFP Batteries, Pumped Hydro, Flow Batteries, Thermal Storage, Iron-Air and Gravity-Based Energy Storage Technologies</li>
        <li><strong>Nuclear Renaissance</strong> — Small Modular Reactors (SMRs) for Firm, Dispatchable, Carbon-Free Power</li>
        <li><strong>Offshore and Floating Wind</strong> — Unlocking New Resource Frontiers</li>
        <li><strong>Green Hydrogen</strong> — Long-Duration Storage and Decarbonisation of Hard-to-Abate Industries</li>
        <li><strong>Enabling Policies, Regulations and Skilled Workforce</strong> — With Gender Balance for the Energy Singularity Era</li>
      </ul>

      <h3 style="color: #ed7d31; margin-top: 30px;">New for TESS 2027</h3>
      <p><em>Reflecting the AI-energy convergence at the heart of Energy Singularity:</em></p>
      <ul>
        <li><strong>"Everything to the Grid" Energy Systems</strong> — For the "Reimagined Grid"</li>
        <li><strong>Advanced Transmission Infrastructure</strong> — HVDC, FACTS, Grid-Forming Inverters and Superconducting Cables</li>
        <li><strong>Powering Data Centres</strong> — On Land, in Orbit and Under the Sea</li>
        <li><strong>Wired and Wireless Charging</strong> — Of EVs, Drones, Humanoid Robots and Flying Cars</li>
        <li><strong>Agentic AI-Based VPP–ESS Interconnections</strong> — For Grid Flexibility</li>
        <li><strong>Room-Temperature Superconductors and AI-Driven Materials Discovery</strong></li>
        <li><strong>Next-Generation Solar</strong> — Perovskites, Bifacial Modules and Agrivoltaics</li>
        <li><strong>Nuclear Fusion</strong> — AI-Accelerated Path to Commercial Fusion Power</li>
        <li><strong>Advanced Power Electronics</strong> — Wide-Bandgap Semiconductors (SiC and GaN) for a More Efficient Energy Conversion Chain</li>
        <li><strong>Quantum Technologies and Quantum Algorithms</strong> — For Power Flow Control and Optimization in Real Time</li>
        <li><strong>Biomimicry and Artificial Photosynthesis</strong></li>
        <li><strong>Cyber Security</strong> — Quantum-Safe and Lattice-Based Cryptography</li>
        <li><strong>Emerging Space Technologies</strong> — Architecture and Energy Systems for Colonising the Moon and Mars, and Autonomous, Zero-Pollution Mobility</li>
        <li><strong>Autonomous and Zero Emission Vehicles</strong></li>
      </ul>
    </div>

    <p style="margin-top: 30px;">To Exhibit during TESS, email us at <a href="mailto:isuw@isuw.in">isuw@isuw.in</a></p>

    <p></p>
  </div>
</div>

@endsection