<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('backgrounf.jpg') }}');
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            color: hsl(0, 25%, 98%);
        }

        p {
            margin: 5%;
            text-align: center;
            font-size: 18px;
            color: hsl(0, 25%, 98%);
            border: 1px solid lightskyblue;
            border-radius: 5px;
            padding: 1%
        }

        a {
            display: inline-block;
            margin: 10px;
            text-decoration: none;
            color: #333;
            font-size: 16px;
        }

        b{
            color: hsl(0, 25%, 98%);
        }

        .blog-content {
            margin: 3% 1% 2% 1%;
            text-align: center;
            font-size: 18px;
            color: hsl(0, 25%, 98%);
            padding: 1%
        }
        .navigation {
            display: flex;
            flex-direction: row;
            height: 100%;
            justify-content: center;
            text-align: center;
            width: 100%;
            gap: 20px;
        }

        .navigation a {
            text-decoration: none;
            color: hsl(0, 0%, 2%);
            margin: 0 15px;
            font-size: 18px;
            font-weight: bold;
            border: 1px solid lightskyblue;
            border-radius: 5px;
            padding: 10px
        }

        .navigation a:hover {
            background-image: linear-gradient(45deg, #86d8f4, #ffffff 100%);
            animation: gradientAnimation 3s linear infinite;
        }
    </style>
</head>

<body>
    <h1>Blog Content</h1>
    <div class="navigation">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('blog') }}">Blog</a>
    </div>

    <div class="blog-content">
        <b>Karhutla melanda Papua karena api melalap puluhan ribu hektare hutan dan lahan – 'Sesak nafas, susah air,
            masyarakat sampai setengah mati'</b>
    </div>
    <br>
    <p>Selain Kalimantan dan Sumatra, indikasi luasan karhutla di Papua diyakini mencapai puluhan ribu hektare sepanjang
        2026 ini. Papua Selatan menjadi episentrum karhutla, seiring masifnya pembukaan lahan untuk Proyek Strategis
        Nasional di provinsi itu.

        Kabut asap dari karhutla telah berminggu-minggu mengganggu kesehatan warga, jadwal penerbangan, dan berbagai
        aktivitas.

        "Asap masih tebal, mulai banyak yang batuk di sini karena polusi. Sudah susah juga mendapatkan air. Tahun-tahun
        lalu itu pernah juga tapi tidak terlalu. Ini sampai masyarakat setengah mati," kata Yonas, warga distrik
        Ilwayab, Merauke, Papua Selatan, saat dihubungi Senin (12/10).

        Selain dirasakan warga Papua Selatan, sebaran asap dirasakan juga oleh Papua Tengah, Papua Pegunungan, Papua
        Barat, Papua Barat Daya, sebagian kecil Papua seperti Jayapura, Maluku, Maluku Utara, Sulawesi Tenggara, dan
        Sulawesi Utara.

        Ini diakibatkan asap yang bergerak mengikuti angin dari Timur menuju Barat Laut hingga Utara. Presiden Prabowo
        Subianto di Istana Merdeka pada Senin (12/10) memperoleh laporan Kepala Badan Nasional Penanggulangan Bencanan
        (BNPB), Letjen Suharyanto, bahwa luas karhutla "hanya tersisa" 639,23 hektare di enam provinsi.

        Persoalannya, enam provinsi tersebut tidak termasuk wilayah di Tanah Papua.

    </p>
</body>

</html>
