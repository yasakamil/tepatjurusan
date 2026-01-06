<x-filament::page>
    <style>
        .dashboard-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        @media (min-width: 768px) {
            .dashboard-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>
    
    <div class="dashboard-grid">
        
        <!-- Total Registrations Card -->
        <div 
            style="position: relative; overflow: hidden; border-radius: 0.75rem; background: linear-gradient(to bottom right, #3b82f6, #2563eb); padding: 1.5rem; box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05); cursor: pointer; transition: all 0.2s;"
            onmouseover="this.style.boxShadow='0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1)'"
            onmouseout="this.style.boxShadow='0 1px 2px 0 rgb(0 0 0 / 0.05)'"
            onclick="window.location.href='/admin/registrations'"
        >
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem;">
                <div style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(255,255,255,0.2); border-radius: 0.5rem; backdrop-filter: blur(4px);">
                    <svg style="width: 20px; height: 20px; color: white;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
            </div>
            <p style="color: rgb(191 219 254); font-size: 0.75rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">Total Registrations</p>
            <div style="font-size: 1.875rem; font-weight: 700; color: white; margin-bottom: 0.75rem;">
                {{ number_format($this->getStats()['total_registrations']) }}
            </div>
            <div style="display: flex; align-items: center; color: rgba(255,255,255,0.8); font-size: 0.875rem; font-weight: 500;">
                <span>View Details</span>
                <svg style="width: 16px; height: 16px; margin-left: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </div>
        </div>

        <!-- Pending Payments Card -->
        <div 
            style="position: relative; overflow: hidden; border-radius: 0.75rem; background: linear-gradient(to bottom right, #f59e0b, #ea580c); padding: 1.5rem; box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05); cursor: pointer; transition: all 0.2s;"
            onmouseover="this.style.boxShadow='0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1)'"
            onmouseout="this.style.boxShadow='0 1px 2px 0 rgb(0 0 0 / 0.05)'"
            onclick="window.location.href='/admin/payments?transaction_status=pending'"
        >
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem;">
                <div style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(255,255,255,0.2); border-radius: 0.5rem; backdrop-filter: blur(4px);">
                    <svg style="width: 20px; height: 20px; color: white;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <span style="padding: 0.25rem 0.625rem; background: rgba(255,255,255,0.2); border-radius: 9999px; backdrop-filter: blur(4px); color: white; font-size: 0.75rem; font-weight: 600;">
                    Action Required
                </span>
            </div>
            <p style="color: rgb(254 215 170); font-size: 0.75rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">Pending Payments</p>
            <div style="font-size: 1.875rem; font-weight: 700; color: white; margin-bottom: 0.75rem;">
                {{ number_format($this->getStats()['pending_payments']) }}
            </div>
            <div style="display: flex; align-items: center; color: rgba(255,255,255,0.8); font-size: 0.875rem; font-weight: 500;">
                <span>Needs Action</span>
                <svg style="width: 16px; height: 16px; margin-left: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </div>
        </div>

        <!-- Settlement Received Card -->
        <div 
            style="position: relative; overflow: hidden; border-radius: 0.75rem; background: linear-gradient(to bottom right, #10b981, #059669); padding: 1.5rem; box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05); cursor: pointer; transition: all 0.2s;"
            onmouseover="this.style.boxShadow='0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1)'"
            onmouseout="this.style.boxShadow='0 1px 2px 0 rgb(0 0 0 / 0.05)'"
            onclick="window.location.href='/admin/payments?transaction_status=settlement'"
        >
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem;">
                <div style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(255,255,255,0.2); border-radius: 0.5rem; backdrop-filter: blur(4px);">
                    <svg style="width: 20px; height: 20px; color: white;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
            <p style="color: rgb(167 243 208); font-size: 0.75rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">Settlement Received</p>
            <div style="font-size: 1.875rem; font-weight: 700; color: white; margin-bottom: 0.75rem;">
                {{ number_format($this->getStats()['settlement_payments']) }}
            </div>
            <div style="display: flex; align-items: center; color: rgba(255,255,255,0.8); font-size: 0.875rem; font-weight: 500;">
                <span>View History</span>
                <svg style="width: 16px; height: 16px; margin-left: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </div>
        </div>

        <!-- Total Revenue Card -->
        <div 
            style="position: relative; overflow: hidden; border-radius: 0.75rem; background: linear-gradient(to bottom right, #8b5cf6, #7c3aed); padding: 1.5rem; box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05); cursor: pointer; transition: all 0.2s;"
            onmouseover="this.style.boxShadow='0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1)'"
            onmouseout="this.style.boxShadow='0 1px 2px 0 rgb(0 0 0 / 0.05)'"
            onclick="window.location.href='/admin/payments?transaction_status=settlement'"
        >
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem;">
                <div style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(255,255,255,0.2); border-radius: 0.5rem; backdrop-filter: blur(4px);">
                    <svg style="width: 20px; height: 20px; color: white;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
            <p style="color: rgb(221 214 254); font-size: 0.75rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">Total Revenue</p>
            <div style="font-size: 1.875rem; font-weight: 700; color: white; margin-bottom: 0.75rem;">
                Rp {{ number_format($this->getStats()['total_revenue'], 0, ',', '.') }}
            </div>
            <div style="display: flex; align-items: center; color: rgba(255,255,255,0.8); font-size: 0.875rem; font-weight: 500;">
                <span>View Details</span>
                <svg style="width: 16px; height: 16px; margin-left: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </div>
        </div>

        <!-- Total Events Card -->
        <div 
            style="position: relative; overflow: hidden; border-radius: 0.75rem; background: linear-gradient(to bottom right, #ec4899, #db2777); padding: 1.5rem; box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05); cursor: pointer; transition: all 0.2s;"
            onmouseover="this.style.boxShadow='0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1)'"
            onmouseout="this.style.boxShadow='0 1px 2px 0 rgb(0 0 0 / 0.05)'"
            onclick="window.location.href='/admin/events'"
        >
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem;">
                <div style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(255,255,255,0.2); border-radius: 0.5rem; backdrop-filter: blur(4px);">
                    <svg style="width: 20px; height: 20px; color: white;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
            </div>
            <p style="color: rgb(251 207 232); font-size: 0.75rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">Total Active Events</p>
            <div style="font-size: 1.875rem; font-weight: 700; color: white; margin-bottom: 0.75rem;">
                {{ number_format($this->getStats()['total_events']) }}
            </div>
            <div style="display: flex; align-items: center; color: rgba(255,255,255,0.8); font-size: 0.875rem; font-weight: 500;">
                <span>View Details</span>
                <svg style="width: 16px; height: 16px; margin-left: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </div>
        </div>

        <!-- Total Articles Card -->
        <div 
            style="position: relative; overflow: hidden; border-radius: 0.75rem; background: linear-gradient(to bottom right, #06b6d4, #0891b2); padding: 1.5rem; box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05); cursor: pointer; transition: all 0.2s;"
            onmouseover="this.style.boxShadow='0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1)'"
            onmouseout="this.style.boxShadow='0 1px 2px 0 rgb(0 0 0 / 0.05)'"
            onclick="window.location.href='/admin/articles'"
        >
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem;">
                <div style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(255,255,255,0.2); border-radius: 0.5rem; backdrop-filter: blur(4px);">
                    <svg style="width: 20px; height: 20px; color: white;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                </div>
            </div>
            <p style="color: rgb(207 250 254); font-size: 0.75rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">Total Articles</p>
            <div style="font-size: 1.875rem; font-weight: 700; color: white; margin-bottom: 0.75rem;">
                {{ number_format($this->getStats()['total_articles']) }}
            </div>
            <div style="display: flex; align-items: center; color: rgba(255,255,255,0.8); font-size: 0.875rem; font-weight: 500;">
                <span>View Details</span>
                <svg style="width: 16px; height: 16px; margin-left: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Settlement Trend Chart -->
        <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-200 dark:bg-gray-900 dark:ring-gray-700">
            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.5rem;">
                <div style="display: flex; align-items: center; justify-content: center; width: 32px; height: 32px;" class="bg-green-100 dark:bg-green-900/30 rounded-lg">
                    <svg style="width: 16px; height: 16px;" class="text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <h3 class="text-base font-semibold text-gray-950 dark:text-white">Settlement Trend ({{ now()->year }})</h3>
            </div>
            <div id="settlement-chart" class="w-full" style="min-height: 300px;"></div>
        </div>

        <!-- User Growth Chart -->
        <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-200 dark:bg-gray-900 dark:ring-gray-700">
            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.5rem;">
                <div style="display: flex; align-items: center; justify-content: center; width: 32px; height: 32px;" class="bg-blue-100 dark:bg-blue-900/30 rounded-lg">
                    <svg style="width: 16px; height: 16px;" class="text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <h3 class="text-base font-semibold text-gray-950 dark:text-white">User Growth ({{ now()->year }})</h3>
            </div>
            <div id="registration-chart" class="w-full" style="min-height: 300px;"></div>
        </div>

        <!-- Revenue Chart -->
        <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-200 dark:bg-gray-900 dark:ring-gray-700">
            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.5rem;">
                <div style="display: flex; align-items: center; justify-content: center; width: 32px; height: 32px;" class="bg-purple-100 dark:bg-purple-900/30 rounded-lg">
                    <svg style="width: 16px; height: 16px;" class="text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-base font-semibold text-gray-950 dark:text-white">Revenue Trend ({{ now()->year }})</h3>
            </div>
            <div id="revenue-chart" class="w-full" style="min-height: 300px;"></div>
        </div>

    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        const settlementData = @json(array_values($this->getSettlementChartData()));
        const registrationData = @json(array_values($this->getRegistrationChartData()));
        const revenueData = @json(array_values($this->getRevenueChartData()));
        const eventData = @json(array_values($this->getEventChartData()));
        const labels = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

        const commonOptions = {
            chart: { 
                type: 'area', 
                height: 320, 
                toolbar: { show: false }, 
                fontFamily: 'inherit', 
                zoom: { enabled: false },
                background: 'transparent'
            },
            dataLabels: { enabled: false },
            stroke: { curve: 'smooth', width: 2 },
            grid: { 
                show: true, 
                borderColor: 'rgba(128, 128, 128, 0.1)',
                strokeDashArray: 4,
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 10
                }
            },
            xaxis: { 
                categories: labels,
                axisBorder: { show: false },
                axisTicks: { show: false },
                labels: { 
                    style: { 
                        colors: '#9ca3af', 
                        fontSize: '11px',
                        fontWeight: 500
                    } 
                }
            },
            yaxis: {
                labels: { 
                    style: { 
                        colors: '#9ca3af', 
                        fontSize: '11px',
                        fontWeight: 500
                    } 
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.5,
                    opacityTo: 0.05,
                    stops: [0, 90, 100]
                }
            },
            tooltip: {
                theme: document.documentElement.classList.contains('dark') ? 'dark' : 'light',
                y: {
                    formatter: function(value) {
                        return value.toLocaleString();
                    }
                }
            },
            theme: { mode: document.documentElement.classList.contains('dark') ? 'dark' : 'light' }
        };

        // Settlement Chart
        new ApexCharts(document.querySelector("#settlement-chart"), {
            ...commonOptions,
            series: [{ name: 'Settlement', data: settlementData }],
            colors: ['#10b981'],
        }).render();

        // Registration Chart
        new ApexCharts(document.querySelector("#registration-chart"), {
            ...commonOptions,
            series: [{ name: 'New Users', data: registrationData }],
            colors: ['#3b82f6'],
        }).render();

        // Revenue Chart
        new ApexCharts(document.querySelector("#revenue-chart"), {
            ...commonOptions,
            series: [{ name: 'Revenue', data: revenueData }],
            colors: ['#8b5cf6'],
            tooltip: {
                theme: document.documentElement.classList.contains('dark') ? 'dark' : 'light',
                y: {
                    formatter: function(value) {
                        return 'Rp ' + value.toLocaleString('id-ID');
                    }
                }
            },
        }).render();

    </script>
    @endpush
</x-filament::page>