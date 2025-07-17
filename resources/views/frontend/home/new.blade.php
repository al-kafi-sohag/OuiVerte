<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Future is Fractional: Powering a Sovereign & Decarbonized Europe</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
        .chart-container {
            position: relative;
            width: 100%;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            height: 350px;
            max-height: 400px;
        }
        @media (max-width: 768px) {
            .chart-container {
                height: 300px;
            }
        }
        .flow-arrow {
            position: relative;
            text-align: center;
            margin: 1rem 0;
            color: #0096C7;
        }
        .flow-arrow::after {
            content: '▼';
            font-size: 2rem;
        }
    </style>
</head>
<body class="text-gray-800">

    <div class="container mx-auto p-4 md:p-8">

        <header class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-extrabold text-[#0077B6] mb-3">The Future is Fractional</h1>
            <p class="text-lg md:text-xl text-gray-600 max-w-4xl mx-auto">How retrofitting small data centers into urban buildings creates a sovereign, decarbonized, and circular energy ecosystem, directly aligning with the EU's Clean Industrial Deal.</p>
        </header>

        <main class="space-y-20">

            <section id="challenge">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-[#0077B6]">Europe's Digital & Energy Dilemma</h2>
                    <p class="mt-2 text-gray-600 max-w-3xl mx-auto">The EU's climate goals require a massive increase in renewable energy, yet this strains the grid. Simultaneously, the demand for data services grows, creating a class of inflexible, high-energy consumers.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="font-bold text-xl mb-4 text-[#0096C7] text-center">The Growing Grid Capacity Gap</h3>
                        <p class="text-sm text-gray-600 mb-4 text-center">Inflexible demand from traditional sources coupled with intermittent renewables creates a significant challenge for grid stability and expansion.</p>
                        <div class="chart-container">
                            <canvas id="gridGapChart"></canvas>
                        </div>
                    </div>
                    <div class="flex flex-col space-y-8">
                        <div class="bg-white rounded-lg shadow-md p-6 text-center">
                            <h3 class="font-bold text-lg text-[#0096C7]">Renewable Energy Target</h3>
                            <p class="text-6xl font-extrabold text-[#00B4D8] my-2">42.5%</p>
                            <p class="text-gray-600">The EU's binding 2030 target necessitates rapid grid modernization and solutions for integrating clean power.</p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-6 text-center">
                            <h3 class="font-bold text-lg text-[#0096C7]">The Call for Sovereignty</h3>
                            <p class="text-5xl my-4 text-[#0096C7]">🇪🇺</p>
                            <p class="text-gray-600">Building a robust, independent digital infrastructure is a core strategic priority for Europe's future.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="solution">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-[#0077B6]">A New Paradigm: The Retrofit-First FDC</h2>
                    <p class="mt-2 text-gray-600 max-w-3xl mx-auto">The Fractional Data Center (FDC) is a small (1-10MW) "Data Furnace" designed to fit within a single floor of an existing downtown building, transforming it into a symbiotic energy and data hub.</p>
                </div>
                <div class="bg-white rounded-lg shadow-xl p-6 md:p-8">
                    <h3 class="font-bold text-xl mb-6 text-center text-[#0096C7]">The Symbiotic Value Cycle</h3>
                    <div class="p-4 rounded-lg bg-gray-50">
                        <div class="text-center p-4 bg-[#CAF0F8] rounded-lg shadow-sm">
                            <p class="font-bold text-[#0077B6]">1. 100% Renewable Power</p>
                            <p class="text-sm text-gray-700">Energy is sourced via PPAs and stored in an on-site BESS, charging at off-peak hours.</p>
                        </div>
                        <div class="flow-arrow"></div>
                        <div class="text-center p-4 bg-[#90E0EF] rounded-lg shadow-sm">
                            <p class="font-bold text-[#0077B6]">2. FDC "Data Furnace"</p>
                            <p class="text-sm text-gray-700">Powers sovereign compute services, converting clean electricity to heat with near 100% efficiency.</p>
                        </div>
                        <div class="flow-arrow"></div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center">
                            <div class="p-4 bg-white rounded-lg border-2 border-dashed border-[#48CAE4]">
                                <p class="font-bold text-[#0077B6]">3a. Sovereign Digital Services</p>
                                <p class="text-sm text-gray-700">Strengthening Europe's independent digital economy from the urban core.</p>
                            </div>
                            <div class="p-4 bg-[#48CAE4] text-white rounded-lg shadow-sm">
                                <p class="font-bold">3b. 90% Heat Capture</p>
                                <p class="text-sm">Waste heat is captured as a valuable, 100% carbon-free asset.</p>
                            </div>
                        </div>
                        <div class="flow-arrow"></div>
                        <div class="text-center p-4 bg-[#0077B6] text-white rounded-lg shadow-sm">
                            <p class="font-bold">4. Circular Heat for the City</p>
                            <p class="text-sm">Captured heat is sold to the local District Heating system (e.g., Paris CPCU), displacing fossil fuels.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="sustainability">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-[#0077B6]">Sustainability by Design, Not by Addition</h2>
                    <p class="mt-2 text-gray-600 max-w-3xl mx-auto">The FDC's core advantage is its "retrofit-first" model, which avoids the massive carbon footprint of new construction and leverages existing city infrastructure.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="font-bold text-xl mb-4 text-[#0096C7] text-center">Development Model Carbon Footprint</h3>
                        <p class="text-sm text-gray-600 mb-4 text-center">Retrofitting avoids "embodied carbon"—the huge CO2 cost of manufacturing materials like concrete and steel for new buildings.</p>
                        <div class="chart-container">
                            <canvas id="carbonFootprintChart"></canvas>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="font-bold text-xl mb-4 text-[#0096C7] text-center">Decarbonizing Urban Heating</h3>
                        <p class="text-sm text-gray-600 mb-4 text-center">Each MWh of FDC heat sold to a DHC network directly displaces a MWh of heat that would otherwise be generated by burning fossil fuels.</p>
                        <div class="chart-container">
                             <canvas id="heatingDisplacementChart"></canvas>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="grid">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-[#0077B6]">From Grid Problem to Grid Partner</h2>
                    <p class="mt-2 text-gray-600 max-w-3xl mx-auto">By using on-site batteries to intelligently manage its power consumption, the FDC model transforms a major energy user into a grid-stabilizing asset, providing critical demand-side flexibility.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
                    <div class="md:col-span-3 bg-white rounded-lg shadow-md p-6">
                        <h3 class="font-bold text-xl mb-4 text-[#0096C7]">Shifting Demand, Reducing Strain</h3>
                        <p class="text-sm text-gray-600 mb-4">FDCs charge their batteries when grid demand is low (e.g., overnight) and use that stored energy for 24/7 operations, smoothing the load profile and alleviating peak-hour congestion.</p>
                        <div class="chart-container h-80 max-h-80">
                            <canvas id="demandShiftChart"></canvas>
                        </div>
                    </div>
                    <div class="md:col-span-2 bg-white rounded-lg shadow-md p-6 flex flex-col justify-center">
                        <h3 class="font-bold text-xl mb-4 text-[#0096C7]">Key Grid Benefits</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <span class="text-2xl text-[#00B4D8] mr-3">✔</span>
                                <div>
                                    <h4 class="font-semibold">Reduces Peak Congestion</h4>
                                    <p class="text-gray-600 text-sm">Avoids adding to grid strain by timing energy consumption.</p>
                                </div>
                            </li>
                             <li class="flex items-start">
                                <span class="text-2xl text-[#00B4D8] mr-3">✔</span>
                                <div>
                                    <h4 class="font-semibold">Enables More Renewables</h4>
                                    <p class="text-gray-600 text-sm">Provides a flexible load that can absorb surplus wind and solar power.</p>
                                </div>
                            </li>
                             <li class="flex items-start">
                                <span class="text-2xl text-[#00B4D8] mr-3">✔</span>
                                <div>
                                    <h4 class="font-semibold">Enhances Urban Resilience</h4>
                                    <p class="text-gray-600 text-sm">A distributed network provides localized grid support and energy security.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section id="alignment">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-[#0077B6]">Strategic & Financial Enablers</h2>
                    <p class="mt-2 text-gray-600 max-w-3xl mx-auto">The FDC model is not just technologically sound; it is powerfully enabled by forward-thinking EU and French policy, creating a low-risk, high-impact investment case.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-center">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="font-bold text-lg text-[#0096C7]">"Acceleration Zones"</h3>
                        <p class="text-5xl font-extrabold text-[#00B4D8] my-3">3</p>
                        <p class="text-gray-600 font-semibold">Months Max Permitting</p>
                        <p class="text-sm text-gray-500 mt-1">Via France's 2023 REA Law</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="font-bold text-lg text-[#0096C7]">"Fonds Chaleur"</h3>
                        <p class="text-5xl font-extrabold text-[#00B4D8] my-3">€</p>
                        <p class="text-gray-600 font-semibold">Direct Capital Grants</p>
                        <p class="text-sm text-gray-500 mt-1">To support clean heat projects</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="font-bold text-lg text-[#0096C7]">EED & RED III Mandates</h3>
                        <p class="text-5xl font-extrabold text-[#00B4D8] my-3">✓</p>
                        <p class="text-gray-600 font-semibold">Waste Heat as an Asset</p>
                        <p class="text-sm text-gray-500 mt-1">Securing long-term heat offtake</p>
                    </div>
                </div>
            </section>
        </main>
        
        <footer class="text-center mt-20 pt-8 border-t border-gray-200">
            <p class="text-gray-500 text-sm">A strategic solution for a competitive, sovereign, and decarbonized European economy.</p>
            <p class="text-xs text-gray-400 mt-2">Analysis based on EU guidance documents, July 2025. All data is representative.</p>
        </footer>

    </div>

    <script>
        const brilliantBlues = ['#00B4D8', '#48CAE4', '#90E0EF', '#ADE8F4', '#0077B6'];

        function processLabels(labels) {
            const maxLen = 16;
            return labels.map(label => {
                if (label.length <= maxLen) return label;
                const words = label.split(' ');
                const lines = [];
                let currentLine = '';
                for (const word of words) {
                    if ((currentLine + ' ' + word).trim().length > maxLen) {
                        lines.push(currentLine.trim());
                        currentLine = word;
                    } else {
                        currentLine = (currentLine + ' ' + word).trim();
                    }
                }
                lines.push(currentLine.trim());
                return lines;
            });
        }
        
        const tooltipTitleCallback = {
            plugins: {
                tooltip: {
                    callbacks: {
                        title: function(tooltipItems) {
                            const item = tooltipItems[0];
                            let label = item.chart.data.labels[item.dataIndex];
                            if (Array.isArray(label)) {
                              return label.join(' ');
                            }
                            return label;
                        }
                    }
                }
            }
        };

        new Chart(document.getElementById('gridGapChart').getContext('2d'), {
            type: 'bar',
            data: {
                labels: processLabels(['Current Grid Capacity', 'Required for 2030 Targets', 'Strain from Inflexible Demand']),
                datasets: [{
                    label: 'Grid Capacity / Strain',
                    data: [100, 150, 185],
                    backgroundColor: [brilliantBlues[2], brilliantBlues[1], brilliantBlues[4]],
                    borderWidth: 0
                }]
            },
            options: { ...tooltipTitleCallback, responsive: true, maintainAspectRatio: false,
                scales: { y: { beginAtZero: true, title: { display: true, text: 'Relative Capacity / Strain Units' }}},
                plugins: { ...tooltipTitleCallback.plugins, legend: { display: false } }
            }
        });

        new Chart(document.getElementById('carbonFootprintChart').getContext('2d'), {
            type: 'doughnut',
            data: {
                labels: ['FDC Retrofit Model', 'Traditional New-Build Data Center'],
                datasets: [{
                    data: [15, 85],
                    backgroundColor: [brilliantBlues[0], brilliantBlues[3]],
                    borderColor: '#ffffff',
                    borderWidth: 4,
                    hoverOffset: 4
                }]
            },
            options: { ...tooltipTitleCallback, responsive: true, maintainAspectRatio: false,
                plugins: { ...tooltipTitleCallback.plugins,
                    legend: { position: 'bottom' },
                    title: { display: false }
                }
            }
        });

        new Chart(document.getElementById('heatingDisplacementChart').getContext('2d'), {
            type: 'bar',
            data: {
                labels: ['Typical DHC Energy Mix', 'DHC Mix with FDC Partnership'],
                datasets: [
                    { label: 'Fossil-Fuel Heat', data: [85, 20], backgroundColor: '#6b7280' },
                    { label: 'Carbon-Free Heat (FDC)', data: [0, 65], backgroundColor: brilliantBlues[0] },
                    { label: 'Other Renewables', data: [15, 15], backgroundColor: brilliantBlues[2] }
                ]
            },
            options: { ...tooltipTitleCallback, indexAxis: 'y', responsive: true, maintainAspectRatio: false,
                scales: { x: { stacked: true, max: 100, title: { display: true, text: 'Heat Source (%)' }}, y: { stacked: true }},
                plugins: { ...tooltipTitleCallback.plugins, legend: { position: 'bottom' } }
            }
        });

        new Chart(document.getElementById('demandShiftChart').getContext('2d'), {
            type: 'line',
            data: {
                labels: ['0', '2', '4', '6', '8', '10', '12', '14', '16', '18', '20', '22'],
                datasets: [{
                    label: 'FDC Grid Draw (with BESS)',
                    data: [10, 10, 10, 10, 2, 1, 1, 1, 2, 3, 2, 8],
                    borderColor: brilliantBlues[0],
                    backgroundColor: 'rgba(0, 180, 216, 0.1)',
                    fill: true,
                    tension: 0.4
                }, {
                    label: 'Typical DC Grid Draw (Inflexible)',
                    data: [8, 8, 8, 8, 8.5, 9, 9, 9, 9, 9.5, 9, 8.5],
                    borderColor: '#9ca3af',
                    borderDash: [5, 5],
                    fill: false,
                    tension: 0.4
                }]
            },
            options: { ...tooltipTitleCallback, responsive: true, maintainAspectRatio: false,
                scales: {
                    y: { title: { display: true, text: 'Power Draw (MW)' }},
                    x: { title: { display: true, text: 'Hour of Day' }}
                },
                plugins: { ...tooltipTitleCallback.plugins, legend: { position: 'bottom' }}
            }
        });
    </script>
</body>
</html>
