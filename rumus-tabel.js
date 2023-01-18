// Data-data Tabel dalam rumus

//Tabel Normalisasi

function js_normalisasi() {
    var dataSet = [
        ['Nendra Janu Prasetyo',	0.3153,	0.0000,	0.3162,	0.3162],
        ['M.Fikriansyah', 0.3127,	0.0000,	0.3162,	0.3162],
        ['Imam Akbar Asyauqi', 0.3121,	0.0000,	0.3162,	0.3162],
        ['Ridho Fauzi Grafika', 0.3159,	0.0000,	0.3162,	0.3162],
        ['Indra Taufiq', 0.3208,	0.3665,	0.3162,	0.3162],
        ['Fahrezi', 0.3159,	0.3665,	0.3162,	0.3162],
        ['Izzi Rizki', 0.3188,	0.8552,	0.3162,	0.3162],
        ['Naufal Shidiq', 0.3108,	0.0000,	0.3162,	0.3162],
        ['Laila Syaban Khairani', 0.3191,	0.0000,	0.3162,	0.3162],
        ['Kayla Maharani', 0.3208,	0.0000,	0.3162,	0.3162]
    ];

    $(document).ready(function () {
        $('#tabel_normalisasi').DataTable({
            paging: false,
            searching: false,
            // ordering: false,
            data: dataSet,
            columns: [
                { title: 'Nama' },
                { title: 'Total Nilai' },
                { title: 'Total Prestasi' },
                { title: 'Total Kesehatan' },
                { title: 'Total Catatan Kepolisian' },
            ],
        });
    });
}

//Tabel Terbobot
function js_terbobot() {
    var dataSet1 = [
        ['Nendra Janu Prasetyo', 0.0946,	0.0000,	0.0316,	0.0316],
        ['M.Fikriansyah', 0.0938, 0.0000, 0.0316, 0.0316],
        ['Imam Akbar Asyauqi', 0.0936, 0.0000, 0.0316, 0.0316],
        ['Ridho Fauzi Grafika', 0.0948, 0.0000, 0.0316, 0.0316],
        ['Indra Taufiq', 0.0962, 0.1833, 0.0316, 0.0316],
        ['Fahrezi', 0.0948, 0.1833, 0.0316, 0.0316],
        ['Izzi Rizki', 0.0956, 0.4276, 0.0316, 0.0316],
        ['Naufal Shidiq', 0.0932, 0.0000, 0.0316, 0.0316],
        ['Laila Syaban Khairani', 0.0957, 0.0000, 0.0316, 0.0316],
        ['Kayla Maharani', 0.0962, 0.0000, 0.0316, 0.0316],
    ];

    $(document).ready(function () {
        $('#tabel_terbobot').DataTable({
            paging: false,
            searching: false,
            data: dataSet1,
            columns: [
                { title: 'Nama' },
                { title: 'Total Nilai' },
                { title: 'Total Prestasi' },
                { title: 'Total Kesehatan' },
                { title: 'Total Catatan Kepolisian' },
            ],
        });
    });
}

//Tabel Ideal Positif
function js_ideal1() {
    var dataSet2 = [
        ['Solusi Ideal Positif', 0.0962,	0.4276,	0.0316,	0.0316],
    ];

    $(document).ready(function () {
        $('#tabel_ideal1').DataTable({
            paging: false,
            searching: false,
            sort: false,
            data: dataSet2,
            columns: [
                { title: ' ' },
                { title: '1' },
                { title: '2' },
                { title: '3' },
                { title: '4' },
            ],
        });
    });
}

// Tabel Ideal Negatif
function js_ideal2() {
    var dataSet3 = [
        ['Solusi Ideal Negatif', 0.0932,	0.0000,	0.0316,	0.0316],
    ];

    $(document).ready(function () {
        $('#tabel_ideal2').DataTable({
            paging: false,
            searching: false,
            sort: false,
            data: dataSet3,
            columns: [
                { title: ' ' },
                { title: '1' },
                { title: '2' },
                { title: '3' },
                { title: '4' },
            ],
        });
    });
}

// Tabel Jarak Ideal Positif
function js_jarak1() {
    var dataSet4 = [
        ['D1', 0.4276],
        ['D2', 0.4276],
        ['D3', 0.4276],
        ['D4', 0.4276],
        ['D5', 0.2443],
        ['D6', 0.2443],
        ['D7', 0.0006],
        ['D8', 0.4276],
        ['D9', 0.4276],
        ['D10', 0.4276],
    ];

    $(document).ready(function () {
        $('#tabel_jarak1').DataTable({
            paging: false,
            searching: false,
            data: dataSet4,
            columns: [
                { title: '' },
                { title: 'Positif' },
            ],
        });
    });
}

0.
0.
0.
0.
0.
0.1833
0.
0.
0.
0.

// Tabel Jarak Ideal Negatif
function js_jarak2() {
    var dataSet5 = [
        ['D1', 0.0014],
        ['D2', 0.0006],
        ['D3', 0.0004],
        ['D4', 0.0015],
        ['D5', 0.1833],
        ['D6', 0.1833],
        ['D7', 0.4276],
        ['D8', 0.0000],
        ['D9', 0.0025],
        ['D10', 0.0030],
    ];

    $(document).ready(function () {
        $('#tabel_jarak2').DataTable({
            paging: false,
            searching: false,
            data: dataSet5,
            columns: [
                { title: '' },
                { title: 'Negatif' },
            ],
        });
    });
}