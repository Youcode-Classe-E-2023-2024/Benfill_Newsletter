@extends("layouts.dashboard")
@section("content")
    <style>
        section {
            font-family: 'Inter', sans-serif;
        }
    </style>
    <div class="min-h-screen flex flex-row bg-gray-100">
        <x-sidebar/>

        <div class="flex-col justify-center w-full">
            <!-- Snippet -->
            <section
                class="flex flex-col antialiased bg-gray-100 text-gray-600 ">
                <div class="max-w-3xl mx-auto p-4 sm:px-6 h-full">
                    <!-- Chart widget -->
                    <div
                        class="flex flex-col col-span-full xl:col-span-8 bg-white shadow-lg rounded-sm border border-gray-200">
                        <header class="px-5 py-4 border-b border-gray-100 flex items-center">
                            <h2 class="font-semibold text-gray-800">Analytics</h2>
                        </header>
                        <div class="px-5 py-1">
                            <div class="flex flex-wrap">
                                <!-- Unique Visitors -->
                                <div class="flex items-center py-2">
                                    <div class="mr-5">
                                        <div class="flex items-center">
                                            <div class="text-3xl font-bold text-gray-800 mr-2">24.7K</div>
                                            <div class="text-sm font-medium text-green-500">+49%</div>
                                        </div>
                                        <div class="text-sm text-gray-500">Unique Visitors</div>
                                    </div>
                                    <div class="hidden md:block w-px h-8 bg-gray-200 mr-5" aria-hidden="true"></div>
                                </div>
                                <!-- Total Pageviews -->
                                <div class="flex items-center py-2">
                                    <div class="mr-5">
                                        <div class="flex items-center">
                                            <div class="text-3xl font-bold text-gray-800 mr-2">56.9K</div>
                                            <div class="text-sm font-medium text-green-500">+7%</div>
                                        </div>
                                        <div class="text-sm text-gray-500">Total Pageviews</div>
                                    </div>
                                    <div class="hidden md:block w-px h-8 bg-gray-200 mr-5" aria-hidden="true"></div>
                                </div>
                                <!-- Bounce Rate -->
                                <div class="flex items-center py-2">
                                    <div class="mr-5">
                                        <div class="flex items-center">
                                            <div class="text-3xl font-bold text-gray-800 mr-2">54%</div>
                                            <div class="text-sm font-medium text-yellow-500">-7%</div>
                                        </div>
                                        <div class="text-sm text-gray-500">Bounce Rate</div>
                                    </div>
                                    <div class="hidden md:block w-px h-8 bg-gray-200 mr-5" aria-hidden="true"></div>
                                </div>
                                <!-- Visit Duration-->
                                <div class="flex items-center">
                                    <div>
                                        <div class="flex items-center">
                                            <div class="text-3xl font-bold text-gray-800 mr-2">2m 56s</div>
                                            <div class="text-sm font-medium text-yellow-500">+7%</div>
                                        </div>
                                        <div class="text-sm text-gray-500">Visit Duration</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- List Group -->
            <ul class="flex flex-col justify-end text-start -space-y-px">
                <li class="flex items-center gap-x-2 p-3 text-sm bg-white border text-gray-800 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-slate-900 dark:border-gray-700 dark:text-gray-200">
                    <div class="w-full flex justify-between truncate">
                        <span class="me-3 flex-1 w-0 truncate">
                        resume_web_ui_developer.csv
                      </span>
                      <span class="me-3 flex-1 w-0 truncate">
                        resume_web_ui_developer.csv
                      </span>
                        <button type="button"
                                class="flex items-center gap-x-2 text-gray-500 hover:text-blue-500 whitespace-nowrap dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" x2="12" y1="15" y2="3"></line>
                            </svg>
                            Download
                        </button>
                    </div>
                </li>
            </ul>
            <!-- End List Group -->

            <x-editorForm/>
        </div>
    </div>
    <script>
        // Helper function to display thousands in K format
        const formatThousands = (value) => Intl.NumberFormat('en-US', {
            maximumSignificantDigits: 3,
            notation: 'compact',
        }).format(value);

        // Define Chart.js default settings
        Chart.defaults.font.family = '"Inter", sans-serif';
        Chart.defaults.font.weight = '500';
        Chart.defaults.color = 'rgb(148, 163, 184)';
        Chart.defaults.scale.grid.color = 'rgb(241, 245, 249)';
        Chart.defaults.plugins.tooltip.titleColor = 'rgb(30, 41, 59)';
        Chart.defaults.plugins.tooltip.bodyColor = 'rgb(30, 41, 59)';
        Chart.defaults.plugins.tooltip.backgroundColor = '#FFF';
        Chart.defaults.plugins.tooltip.borderWidth = 1;
        Chart.defaults.plugins.tooltip.borderColor = 'rgb(226, 232, 240)';
        Chart.defaults.plugins.tooltip.displayColors = false;
        Chart.defaults.plugins.tooltip.mode = 'nearest';
        Chart.defaults.plugins.tooltip.intersect = false;
        Chart.defaults.plugins.tooltip.position = 'nearest';
        Chart.defaults.plugins.tooltip.caretSize = 0;
        Chart.defaults.plugins.tooltip.caretPadding = 20;
        Chart.defaults.plugins.tooltip.cornerRadius = 4;
        Chart.defaults.plugins.tooltip.padding = 8;

        // A chart built with Chart.js 3
        // https://www.chartjs.org/
        const ctx = document.getElementById('analytics-card-01');
        const chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
                    '12-01-2020', '01-01-2021', '02-01-2021',
                    '03-01-2021', '04-01-2021', '05-01-2021',
                    '06-01-2021', '07-01-2021', '08-01-2021',
                    '09-01-2021', '10-01-2021', '11-01-2021',
                    '12-01-2021', '01-01-2022', '02-01-2022',
                    '03-01-2022', '04-01-2022', '05-01-2022',
                    '06-01-2022', '07-01-2022', '08-01-2022',
                    '09-01-2022', '10-01-2022', '11-01-2022',
                    '12-01-2022', '01-01-2023',
                ],
                datasets: [
                    // Indigo line
                    {
                        label: 'Current',
                        data: [
                            5000, 8700, 7500, 12000, 11000, 9500, 10500,
                            10000, 15000, 9000, 10000, 7000, 22000, 7200,
                            9800, 9000, 10000, 8000, 15000, 12000, 11000,
                            13000, 11000, 15000, 17000, 18000,
                        ],
                        fill: true,
                        backgroundColor: 'rgba(59, 130, 246, 0.08)',
                        borderColor: 'rgb(99, 102, 241)',
                        borderWidth: 2,
                        tension: 0,
                        pointRadius: 0,
                        pointHoverRadius: 3,
                        pointBackgroundColor: 'rgb(99, 102, 241)',
                    },
                    // Gray line
                    {
                        label: 'Previous',
                        data: [
                            8000, 5000, 6500, 5000, 6500, 12000, 8000,
                            9000, 8000, 8000, 12500, 10000, 10000, 12000,
                            11000, 16000, 12000, 10000, 10000, 14000, 9000,
                            10000, 15000, 12500, 14000, 11000,
                        ],
                        borderColor: 'rgb(203, 213, 225)',
                        fill: false,
                        borderWidth: 2,
                        tension: 0,
                        pointRadius: 0,
                        pointHoverRadius: 3,
                        pointBackgroundColor: 'rgb(203, 213, 225)',
                    },
                ],
            },
            options: {
                layout: {
                    padding: 20,
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            drawBorder: false,
                        },
                        ticks: {
                            callback: (value) => formatThousands(value),
                        },
                    },
                    x: {
                        type: 'time',
                        time: {
                            parser: 'MM-DD-YYYY',
                            unit: 'month',
                            displayFormats: {
                                month: 'MMM YY',
                            },
                        },
                        grid: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            autoSkipPadding: 48,
                            maxRotation: 0,
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        callbacks: {
                            title: () => false, // Disable tooltip title
                            label: (context) => formatThousands(context.parsed.y),
                        },
                    },
                },
                interaction: {
                    intersect: false,
                    mode: 'nearest',
                },
                maintainAspectRatio: false,
            },
        });

    </script>
@stop
