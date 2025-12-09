

<div class="w-full bg-white pb-20">

    <!-- HEADER -->
    <div class="text-center pt-10">
        <h1 class="text-4xl font-bold text-gray-800">Profil Desa</h1>
        <p class="text-gray-600 mt-2 text-lg">Informasi lengkap tentang sejarah, pemerintahan, demografi, dan potensi desa</p>
        <div class="border-t border-gray-300 w-24 mx-auto mt-4"></div>
    </div>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tab Navigation</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            background-color: white;
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 1200px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .header h1 {
            font-size: 32px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 12px;
        }

        .header p {
            font-size: 18px;
            color: #64748b;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Tab Navigation Styles - Persis seperti gambar */
        .tab-container {
            width: 100%;
            overflow-x: auto;
            padding: 4px;
            background-color: #f1f5f9;
            border-radius: 100px;
            margin-bottom: 40px;
        }

        .tabs {
            display: flex;
            min-width: max-content;
            gap: 0;
            width: 100%;
        }

        .tab {
            flex: 1;
            min-width: 220px;
            padding: 20px 40px;
            text-align: center;
            background: transparent;
            border: none;
            font-family: 'Inter', sans-serif;
            font-size: 18px;
            font-weight: 600;
            color: #475569;
            cursor: pointer;
            position: relative;
            white-space: nowrap;
            transition: all 0.3s ease;
            border-radius: 100px;
        }

        .tab:hover {
            color: #1e293b;
            background-color: rgba(255, 255, 255, 0.5);
        }

        .tab.active {
            background-color: white;
            color: #2563eb;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.15);
        }

        .tab.active::after {
            content: '';
            position: absolute;
            bottom: 6px;
            left: 50%;
            transform: translateX(-50%);
            width: 24px;
            height: 4px;
            background-color: #2563eb;
            border-radius: 2px;
        }

        /* Content Section */
        .content-section {
            background-color: white;
            border-radius: 20px;
            padding: 30px;
            border: 1px solid #e2e8f0;
        }

        .section-title {
            font-size: 24px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .section-title i {
            color: #2563eb;
            font-size: 20px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        .info-item {
            background-color: #f8fafc;
            padding: 20px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
        }

        .info-label {
            font-size: 14px;
            color: #64748b;
            margin-bottom: 8px;
        }

        .info-value {
            font-size: 20px;
            font-weight: 700;
            color: #1e293b;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 24px;
            }

            .header h1 {
                font-size: 28px;
            }

            .header p {
                font-size: 16px;
            }

            .tab {
                padding: 16px 24px;
                font-size: 16px;
                min-width: 180px;
            }

            .section-title {
                font-size: 20px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Scrollbar styling untuk tab container */
        .tab-container::-webkit-scrollbar {
            height: 6px;
        }

        .tab-container::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 10px;
        }

        .tab-container::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        .tab-container::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Profil Desa</h1>
            <p>Informasi lengkap tentang sejarah, pemerintahan, demografi, dan potensi desa</p>
        </div>

        <!-- Tab Navigation - Persis seperti gambar -->
        <div class="tab-container">
            <div class="tabs">
                <button class="tab active">Umum</button>
                <button class="tab">Pemerintahan</button>
                <button class="tab">Demografi</button>
                <button class="tab">Ekonomi</button>
                <button class="tab">Prestasi</button>
            </div>
        </div>

        <!-- Content Section -->
        <div class="content-section">
            <h2 class="section-title">
                <i class="fas fa-info-circle"></i>
                Informasi Umum
            </h2>

            <div class="info-grid">
                <div class="info-item">
                    <div class="info-label">Nama Desa</div>
                    <div class="info-value">Desa Sejahtera Digital</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Tahun Berdiri</div>
                    <div class="info-value">1945</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Luas Wilayah</div>
                    <div class="info-value">45.2 km²</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Ketinggian</div>
                    <div class="info-value">245 m dpl</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Jumlah Penduduk</div>
                    <div class="info-value">12,345</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Jumlah KK</div>
                    <div class="info-value">3,456</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Font Awesome untuk icon -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script>
        // Tab switching functionality
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs
                document.querySelectorAll('.tab').forEach(t => {
                    t.classList.remove('active');
                });

                // Add active class to clicked tab
                tab.classList.add('active');

                // Here you would typically load different content based on the tab
                // For this example, we're just changing the tab appearance
            });
        });
    </script>
</body>
</html>

</div>

<!-- Tambahkan Font Awesome untuk icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    .container {
        max-width: 1200px;
    }

    .shadow-lg {
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }
</style>
