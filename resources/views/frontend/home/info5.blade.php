<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>OuiVerte! | Sovereign, Sustainable Infrastructure</title>
   <script src="https://cdn.tailwindcss.com"></script>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">
   <style>
       body {
           font-family: 'Inter', sans-serif;
       }
       .chart-container {
           position: relative;
           width: 100%;
           max-width: 600px;
           margin-left: auto;
           margin-right: auto;
           height: 320px;
           max-height: 400px;
       }
       @media (min-width: 768px) {
           .chart-container {
               height: 400px;
           }
       }
       .flow-arrow {
           position: relative;
           width: 100%;
           height: 40px;
           display: flex;
           align-items: center;
           justify-content: center;
       }
       .flow-arrow::after {
           content: '▼';
           font-size: 2rem;
           color: #FF6B6B;
       }
       .flow-arrow-horizontal {
           position: relative;
           width: 40px;
           height: 100%;
           display: flex;
           align-items: center;
           justify-content: center;
       }
       .flow-arrow-horizontal::after {
           content: '►';
           font-size: 2rem;
           color: #FF6B6B;
       }
   </style>
</head>
<body class="bg-gray-50 text-gray-800">


   <div class="container mx-auto p-4 md:p-8">


       <header class="text-center mb-12">
           <h1 class="text-5xl md:text-7xl font-black text-gray-800">OuiVerte!</h1>
           <p class="text-xl md:text-2xl font-light text-[#4ECDC4] mt-2">Powering Europe's Sovereign, Sustainable Digital Future.</p>
       </header>


       <section class="mb-12">
           <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
               <div class="bg-white p-6 rounded-lg shadow-md">
                   <p class="text-6xl font-extrabold text-[#1A535C]">€105B</p>
                   <p class="text-lg font-semibold mt-2">EU Sovereign Cloud Market</p>
                   <p class="text-sm text-gray-600">A massive, growing demand for data repatriation driven by GDPR and NIS2.</p>
               </div>
               <div class="bg-white p-6 rounded-lg shadow-md">
                   <p class="text-6xl font-extrabold text-[#4ECDC4]">90%</p>
                   <p class="text-lg font-semibold mt-2">Waste Heat Captured</p>
                   <p class="text-sm text-gray-600">Transforming a liability into a valuable, carbon-free energy source for cities.</p>
               </div>
               <div class="bg-white p-6 rounded-lg shadow-md">
                   <p class="text-6xl font-extrabold text-[#FF6B6B]">100%</p>
                   <p class="text-lg font-semibold mt-2">Renewable Energy</p>
                   <p class="text-sm text-gray-600">A commitment to a zero-carbon footprint, enabling a truly circular energy economy.</p>
               </div>
           </div>
       </section>


       <section class="bg-white p-6 md:p-8 rounded-lg shadow-lg mb-12">
           <h2 class="text-3xl font-bold text-center text-[#1A535C] mb-6">The OuiVerte! Circular Energy Economy</h2>
           <p class="text-center text-gray-600 max-w-3xl mx-auto mb-8">
               Our model is not a linear process but a virtuous cycle. We transform energy into three distinct, high-value products: secure sovereign cloud services, certified carbon-free heat for urban networks, and critical stability services for the national power grid. Each pillar reinforces the others, creating a defensible, profitable, and truly sustainable business.
           </p>
           <div class="flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-4">
               <div class="text-center p-4 border-2 border-[#1A535C] rounded-lg bg-gray-50 w-full md:w-1/4">
                   <p class="text-2xl">⚡️</p>
                   <h3 class="text-xl font-bold text-[#1A535C]">1. Renewable Energy Input</h3>
                   <p class="text-sm text-gray-600">100% certified wind, solar, and hydro power.</p>
               </div>
               <div class="flow-arrow md:hidden"></div>
               <div class="flow-arrow-horizontal hidden md:flex"></div>
               <div class="text-center p-4 border-2 border-[#4ECDC4] rounded-lg bg-gray-50 w-full md:w-1/3">
                   <p class="text-2xl">💻</p>
                   <h3 class="text-xl font-bold text-[#4ECDC4]">2. Fractional Data Center</h3>
                   <p class="text-sm text-gray-600">High-performance, low-latency sovereign cloud services run on liquid-cooled hardware.</p>
               </div>
               <div class="flow-arrow md:hidden"></div>
               <div class="flow-arrow-horizontal hidden md:flex"></div>
               <div class="flex flex-col space-y-4 w-full md:w-1/3">
                   <div class="text-center p-4 border-2 border-[#FF6B6B] rounded-lg bg-gray-50">
                       <p class="text-2xl">🔥</p>
                       <h3 class="text-lg font-bold text-[#FF6B6B]">3a. Heat-as-a-Service</h3>
                       <p class="text-sm text-gray-600">Captured thermal energy sold to district heating networks.</p>
                   </div>
                   <div class="text-center p-4 border-2 border-[#F7B733] rounded-lg bg-gray-50">
                       <p class="text-2xl">🔋</p>
                       <h3 class="text-lg font-bold text-[#F7B733]">3b. Grid Stabilization</h3>
                       <p class="text-sm text-gray-600">BESS and flexible load provide demand response and ancillary services.</p>
                   </div>
               </div>
           </div>
       </section>


       <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 mb-12">
           <div class="lg:col-span-3 bg-white p-6 md:p-8 rounded-lg shadow-lg">
               <h2 class="text-3xl font-bold text-center text-[#1A535C] mb-2">Projected Annual Revenue Streams</h2>
               <p class="text-center text-gray-600 max-w-2xl mx-auto mb-6">
                   Our integrated model generates a diversified revenue portfolio from a single 10 MW facility. While Sovereign Cloud services form the core, our "Green Revenue" from heat and grid services provides a significant operational offset and enhances profitability. This is our analyst-validated optimistic projection.
               </p>
               <div class="chart-container">
                   <canvas id="revenueDonutChart"></canvas>
               </div>
           </div>
           <div class="lg:col-span-2 bg-white p-6 md:p-8 rounded-lg shadow-lg flex flex-col justify-center">
               <h2 class="text-3xl font-bold text-center text-[#1A535C] mb-4">The €83.7M Opportunity</h2>
               <p class="text-center text-gray-600 mb-6">
                   This projection for a single 10 MW Fractional Data Center highlights the power of our model.
               </p>
               <div class="space-y-4 text-left">
                   <div class="flex items-start">
                       <div class="w-4 h-4 rounded-full mt-1.5 mr-3" style="background-color: #1A535C;"></div>
                       <div>
                           <p class="font-bold text-lg">€75.0M - Sovereign Cloud</p>
                           <p class="text-sm text-gray-600">High-margin CaaS/PaaS for regulated industries.</p>
                       </div>
                   </div>
                   <div class="flex items-start">
                       <div class="w-4 h-4 rounded-full mt-1.5 mr-3" style="background-color: #4ECDC4;"></div>
                       <div>
                           <p class="font-bold text-lg">€5.55M - Grid Services</p>
                           <p class="text-sm text-gray-600">Ancillary services and demand response revenue.</p>
                       </div>
                   </div>
                   <div class="flex items-start">
                       <div class="w-4 h-4 rounded-full mt-1.5 mr-3" style="background-color: #FF6B6B;"></div>
                       <div>
                           <p class="font-bold text-lg">€3.15M - Heat-as-a-Service</p>
                           <p class="text-sm text-gray-600">Selling premium, carbon-free heat to urban networks.</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
      
       <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
           <div class="bg-white p-6 md:p-8 rounded-lg shadow-lg">
               <h2 class="text-3xl font-bold text-center text-[#1A535C] mb-2">French Cloud Market Growth</h2>
                <p class="text-center text-gray-600 max-w-2xl mx-auto mb-6">
                   The French market is a prime entry point, with a projected 16.91% CAGR driven by the national push for digital sovereignty. OuiVerte! is perfectly positioned to capture this accelerating demand.
               </p>
               <div class="chart-container">
                   <canvas id="marketGrowthChart"></canvas>
               </div>
           </div>
           <div class="bg-white p-6 md:p-8 rounded-lg shadow-lg">
               <h2 class="text-3xl font-bold text-center text-[#1A535C] mb-2">Competitive Revenue Advantage</h2>
                <p class="text-center text-gray-600 max-w-2xl mx-auto mb-6">
                   While competitors rely solely on cloud services, our integrated model creates multiple value streams. This chart compares our projected revenue for a 10MW FDC against a hypothetical competitor with only cloud services.
               </p>
               <div class="chart-container">
                   <canvas id="revenueComparisonChart"></canvas>
               </div>
           </div>
       </div>


       <section class="bg-white p-6 md:p-8 rounded-lg shadow-lg mb-12">
           <h2 class="text-3xl font-bold text-center text-[#1A535C] mb-6">36-Month Go-to-Market Roadmap</h2>
           <p class="text-center text-gray-600 max-w-3xl mx-auto mb-8">
               Our disciplined, three-phase strategy prioritizes foundational partnerships, critical certifications, and systematic entry into high-value regulated markets, ensuring a scalable and repeatable path to success.
           </p>
           <div class="relative">
               <div class="border-l-4 border-[#4ECDC4] absolute h-full top-0 left-4 md:left-1/2 md:-translate-x-1/2"></div>
               <div class="space-y-12">
                   <div class="relative pl-12 md:pl-0">
                       <div class="md:flex md:justify-end md:mr-[55%]">
                           <div class="w-full md:w-2/5 p-4 bg-gray-50 border-2 border-[#1A535C] rounded-lg">
                               <p class="absolute -left-4 md:left-auto md:right-[-2.1rem] top-1/2 -translate-y-1/2 bg-[#1A535C] text-white rounded-full h-12 w-12 flex items-center justify-center font-bold text-lg">1</p>
                               <h3 class="text-xl font-bold text-[#1A535C]">Phase 1 (Months 1-12)</h3>
                               <p class="font-semibold">Foundation & Initial Revenue</p>
                               <ul class="list-disc list-inside text-sm text-gray-600 mt-2">
                                   <li>Secure €16M funding</li>
                                   <li>Launch first 2 Paris FDCs</li>
                                   <li>Sign Heat & Power agreements</li>
                                   <li>Achieve foundational ISO certifications</li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="relative pl-12 md:pl-0">
                       <div class="md:flex md:justify-start md:ml-[55%]">
                           <div class="w-full md:w-2/5 p-4 bg-gray-50 border-2 border-[#FF6B6B] rounded-lg">
                               <p class="absolute -left-4 md:left-[-2.1rem] top-1/2 -translate-y-1/2 bg-[#FF6B6B] text-white rounded-full h-12 w-12 flex items-center justify-center font-bold text-lg">2</p>
                               <h3 class="text-xl font-bold text-[#FF6B6B]">Phase 2 (Months 13-24)</h3>
                               <p class="font-semibold">Scaling & Certification</p>
                               <ul class="list-disc list-inside text-sm text-gray-600 mt-2">
                                   <li>Achieve SecNumCloud qualification</li>
                                   <li>Launch premium MXM services</li>
                                   <li>Enter BFSI & Public Sector markets</li>
                                   <li>Demonstrate grid service revenue</li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="relative pl-12 md:pl-0">
                       <div class="md:flex md:justify-end md:mr-[55%]">
                           <div class="w-full md:w-2/5 p-4 bg-gray-50 border-2 border-[#F7B733] rounded-lg">
                               <p class="absolute -left-4 md:left-auto md:right-[-2.1rem] top-1/2 -translate-y-1/2 bg-[#F7B733] text-white rounded-full h-12 w-12 flex items-center justify-center font-bold text-lg">3</p>
                               <h3 class="text-xl font-bold text-[#F7B733]">Phase 3 (Months 25-36)</h3>
                               <p class="font-semibold">Dominance & Replication</p>
                               <ul class="list-disc list-inside text-sm text-gray-600 mt-2">
                                   <li>Secure HDS (Healthcare) certification</li>
                                   <li>Full-scale push into regulated verticals</li>
                                   <li>Replicate model in 2nd French city</li>
                                   <li>Raise Series B for EU expansion</li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>


       <footer class="text-center mt-12 py-6 border-t border-gray-300">
           <p class="text-lg font-bold text-[#1A535C]">OuiVerte!</p>
           <p class="text-sm text-gray-600">Copyright © 2025. All Rights Reserved.</p>
       </footer>


   </div>


   <script>
       const FONT_COLOR = '#1A535C';
       const PALETTE = {
           blue: '#1A535C',
           cyan: '#4ECDC4',
           red: '#FF6B6B',
           yellow: '#F7B733',
           white: '#F7FFF7'
       };


       function wrapLabels(label, maxLength) {
           if (typeof label !== 'string' || label.length <= maxLength) {
               return label;
           }
           const words = label.split(' ');
           let lines = [];
           let currentLine = '';
           for (const word of words) {
               if ((currentLine + word).length > maxLength) {
                   lines.push(currentLine.trim());
                   currentLine = '';
               }
               currentLine += word + ' ';
           }
           lines.push(currentLine.trim());
           return lines;
       }


       const tooltipTitleCallback = (tooltipItems) => {
           const item = tooltipItems[0];
           let label = item.chart.data.labels[item.dataIndex];
           if (Array.isArray(label)) {
               return label.join(' ');
           }
           return label;
       };
      
       const defaultChartOptions = {
           responsive: true,
           maintainAspectRatio: false,
           plugins: {
               legend: {
                   position: 'bottom',
                   labels: {
                       color: FONT_COLOR,
                       font: {
                           size: 14
                       }
                   }
               },
               tooltip: {
                   callbacks: {
                       title: tooltipTitleCallback
                   },
                   backgroundColor: 'rgba(26, 83, 92, 0.9)',
                   titleFont: {
                       size: 16,
                       weight: 'bold'
                   },
                   bodyFont: {
                       size: 14
                   },
                   padding: 12,
                   cornerRadius: 8
               }
           },
           color: FONT_COLOR
       };


       const revenueData = {
           labels: ['Sovereign Cloud', 'Grid Services', 'Heat-as-a-Service'],
           datasets: [{
               label: 'Annual Revenue (€)',
               data: [75000000, 5550000, 3150000],
               backgroundColor: [PALETTE.blue, PALETTE.cyan, PALETTE.red],
               borderColor: PALETTE.white,
               borderWidth: 4,
               hoverOffset: 4
           }]
       };
       new Chart(document.getElementById('revenueDonutChart'), {
           type: 'doughnut',
           data: revenueData,
           options: {
               ...defaultChartOptions,
               cutout: '60%',
           }
       });


       const marketGrowthData = {
           labels: ['2025', '2026', '2027', '2028', '2029', '2030'],
           datasets: [{
               label: 'French Cloud Market Size ($B)',
               data: [22.51, 26.32, 30.77, 35.97, 42.05, 49.16],
               fill: true,
               backgroundColor: 'rgba(78, 205, 196, 0.2)',
               borderColor: PALETTE.cyan,
               tension: 0.4,
               pointBackgroundColor: PALETTE.cyan,
               pointBorderColor: PALETTE.white,
               pointHoverBackgroundColor: PALETTE.white,
               pointHoverBorderColor: PALETTE.cyan,
               pointRadius: 5,
               pointHoverRadius: 8
           }]
       };
       new Chart(document.getElementById('marketGrowthChart'), {
           type: 'line',
           data: marketGrowthData,
           options: {
               ...defaultChartOptions,
               scales: {
                   y: {
                       beginAtZero: false,
                       ticks: { color: FONT_COLOR, font: { size: 12 } },
                       grid: { color: 'rgba(0,0,0,0.05)' },
                       title: { display: true, text: 'Market Size in Billions ($)', color: FONT_COLOR }
                   },
                   x: {
                       ticks: { color: FONT_COLOR, font: { size: 12 } },
                       grid: { display: false }
                   }
               }
           }
       });


       const revenueComparisonData = {
           labels: ['Competitor Model', 'OuiVerte! Integrated Model'],
           datasets: [{
               label: 'Cloud Services',
               data: [75, 75],
               backgroundColor: PALETTE.blue,
           }, {
               label: 'Grid Services',
               data: [0, 5.55],
               backgroundColor: PALETTE.cyan,
           }, {
               label: 'Heat-as-a-Service',
               data: [0, 3.15],
               backgroundColor: PALETTE.red,
           }]
       };
       new Chart(document.getElementById('revenueComparisonChart'), {
           type: 'bar',
           data: revenueComparisonData,
           options: {
               ...defaultChartOptions,
               scales: {
                   x: {
                       stacked: true,
                       ticks: { color: FONT_COLOR, font: { size: 14 } },
                       grid: { display: false }
                   },
                   y: {
                       stacked: true,
                       ticks: { color: FONT_COLOR, font: { size: 12 } },
                       grid: { color: 'rgba(0,0,0,0.05)' },
                       title: { display: true, text: 'Annual Revenue in Millions (€)', color: FONT_COLOR }
                   }
               },
               plugins: {
                   ...defaultChartOptions.plugins,
                   tooltip: {
                       ...defaultChartOptions.plugins.tooltip,
                       callbacks: {
                           ...defaultChartOptions.plugins.tooltip.callbacks,
                           footer: (tooltipItems) => {
                               let total = 0;
                               for(let i = 0; i < tooltipItems.length; i++){
                                   total += tooltipItems[i].parsed.y;
                               }
                               return 'Total: €' + total.toFixed(2) + 'M';
                           }
                       }
                   }
               }
           }
       });
   </script>
</body>
</html>
