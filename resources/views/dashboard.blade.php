<x-layout>
    <x-slot:title> {{ $title }}
    <h1 class="col-span-7 mt-2 text-center font-bold row-span-6">
     Sistem Informasi Monitoring Karyawan
    </h1>
    </x-slot:title>
    <body>     
        <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
            <div class="flex justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
            <div class="flex items-center">
                <div>
                <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-1">Pekerjaan</h5>
                </div>
            </div>
            </div>
        
            <div id="column-chart"></div>
            <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                <div class="flex justify-between items-center pt-5">
                <!-- Dropdown menu -->
                <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>

          <script src="{{ asset('charts/js/apexcharts.js') }}"></script>
          <script src="{{ asset('charts/js/flowbite.min.js') }}"></script>
    </body>
    <script>         
        const options = {
        colors: ["#1A56DB", "#FDBA8C"],
        series: [
            {
            name: "Accepted",
            color: "#1A56DB",
            data: [
                { x: "Mon", y: 3 },

            ],
            },
            {
            name: "Pending ",
            color: "#fffb00",
            data: [
                { x: "Mon", y: 2 },

            ],
            },
            {
            name: "Rejected",
            color: "#760529",
            data: [
                { x: "Mon", y: 1 },
            ],
            },
        ],
        chart: {
            type: "bar",
            height: "320px",
            fontFamily: "Inter, sans-serif",
            toolbar: {
            show: false,
            },
        },
        plotOptions: {
            bar: {
            horizontal: false,
            columnWidth: "70%",
            borderRadiusApplication: "end",
            borderRadius: 8,
            },
        },
        tooltip: {
            shared: true,
            intersect: false,
            style: {
            fontFamily: "Inter, sans-serif",
            },
        },
        states: {
            hover: {
            filter: {
                type: "darken",
                value: 1,
            },
            },
        },
        stroke: {
            show: true,
            width: 0,
            colors: ["transparent"],
        },
        grid: {
            show: false,
            strokeDashArray: 4,
            padding: {
            left: 2,
            right: 2,
            top: -14
            },
        },
        dataLabels: {
            enabled: false,
        },
        legend: {
            show: false,
        },
        xaxis: {
            floating: false,
            labels: {
            show: true,
            style: {
                fontFamily: "Inter, sans-serif",
                cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
            }
            },
            axisBorder: {
            show: false,
            },
            axisTicks: {
            show: false,
            },
        },
        yaxis: {
            show: false,
        },
        fill: {
            opacity: 1,
        },
        }

        if(document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("column-chart"), options);
        chart.render();
        }

    </script>
</x-layout>
