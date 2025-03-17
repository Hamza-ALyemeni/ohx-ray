@extends('layouts.app')

@section('content')
    <div class="report-container">
        <h1 class="text-center">OHX-RAY Health Results</h1>
        <h2 class="text-center">360 HRs - 14 January 2025</h2>
        
        <div class="content-section">
            <h3>Contents</h3>
            <ul>
                <li>OHX-RAY Results Explanation</li>
                <li>Demographic Image</li>
                <li>OHX-RAY Overall Image</li>
                <li>OHX-RAY Insights</li>
            </ul>
        </div>

        <div class="content-section">
            <h3>OHX-RAY Results Explanation</h3>
            <p>Overall Organization Health: A deeper understanding of the underlying mindsets and actions that influence productivity.</p>
            <p>Performance Indicators Health: Key performance indicators for organizations are measured internally and externally.</p>
            <p>Management Practices Health: Organizational culture practices are measured internally and externally, aiming to find areas for improvement.</p>
        </div>

        <div class="content-section">
            <h3>OHX-RAY Methodology</h3>
            <p>Provides a 34-organization culture pulse check, focusing on leadership, accountability, motivation, and work environment.</p>
        </div>
        
        <!-- Add more sections as needed -->
    </div>
@endsection

@section('styles')
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .report-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid #000;
            background-color: #fff;
        }
        .content-section {
            margin-bottom: 20px;
        }
        h1, h2, h3 {
            text-align: center;
        }
        @media print {
            body {
                background: none;
            }
            .report-container {
                border: none;
                box-shadow: none;
            }
            h1, h2, h3 {
                color: #000;
            }
        }
    </style>
@endsection
