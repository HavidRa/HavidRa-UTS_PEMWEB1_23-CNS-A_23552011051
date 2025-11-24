// Handle detail information page content
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const articleId = urlParams.get('id') || '1';
    
    const articles = {
        '1': {
            title: 'TechSolution Raih Penghargaan Inovasi Digital 2023',
            image: 'https://via.placeholder.com/800x400',
            content: `
                <p>TechSolution dengan bangga mengumumkan bahwa perusahaan kami telah meraih penghargaan Inovasi Digital 2023 untuk kategori Solusi AI Terbaik. Penghargaan ini diberikan oleh Asosiasi Teknologi Indonesia dalam acara tahunan yang diadakan di Jakarta.</p>
                
                <p>Penghargaan ini merupakan pengakuan atas kerja keras tim pengembang kami dalam menciptakan solusi AI yang revolusioner untuk industri retail. Produk kami, RetailAI, telah membantu lebih dari 100 perusahaan retail meningkatkan efisiensi operasional dan pengalaman pelanggan.</p>
                
                <h4>Keunggulan RetailAI</h4>
                <ul>
                    <li>Analisis prediktif untuk manajemen inventaris</li>
                    <li>Rekomendasi produk personalisasi untuk pelanggan</li>
                    <li>Optimasi rantai pasokan berbasis AI</li>
                    <li>Deteksi pola pembelian untuk strategi pemasaran</li>
                </ul>
                
                <p>CEO TechSolution, Havid Restu Afyantara, menyatakan: "Kami sangat bangga dengan pencapaian ini. Penghargaan ini tidak hanya mengakui inovasi teknologi kami tetapi juga dampak positif yang kami bawa kepada klien kami. Kami berkomitmen untuk terus berinovasi dan memberikan solusi terbaik."</p>
                
                <p>TechSolution berencana untuk mengalokasikan lebih banyak sumber daya dalam penelitian dan pengembangan AI untuk sektor-sektor lainnya, termasuk kesehatan, pendidikan, dan keuangan.</p>
            `
        },
        '2': {
            title: 'Workshop Teknologi Blockchain untuk UMKM',
            image: 'https://via.placeholder.com/800x400',
            content: `
                <p>TechSolution akan menyelenggarakan workshop gratis tentang pemanfaatan teknologi blockchain untuk Usaha Mikro, Kecil, dan Menengah (UMKM). Workshop ini bertujuan untuk memperkenalkan manfaat blockchain dalam meningkatkan efisiensi dan keamanan operasional bisnis.</p>
                
                <h4>Detail Workshop</h4>
                <ul>
                    <li><strong>Tanggal:</strong> 15 November 2023</li>
                    <li><strong>Waktu:</strong> 09.00 - 16.00 WIB</li>
                    <li><strong>Tempat:</strong> TechSolution Innovation Center, Jakarta</li>
                    <li><strong>Peserta:</strong> Terbuka untuk semua pelaku UMKM</li>
                </ul>
                
                <p>Workshop ini akan membahas berbagai topik penting, termasuk:</p>
                <ul>
                    <li>Dasar-dasar teknologi blockchain dan cara kerjanya</li>
                    <li>Penerapan blockchain dalam manajemen rantai pasokan</li>
                    <li>Smart contract untuk otomasi proses bisnis</li>
                    <li>Studi kasus sukses implementasi blockchain di UMKM</li>
                </ul>
            `
        },
        '3': {
            title: 'Rilis Produk Baru: SmartOffice Suite',
            image: 'https://via.placeholder.com/800x400',
            content: `
                <p>TechSolution dengan bangga mengumumkan peluncuran SmartOffice Suite, solusi all-in-one untuk produktivitas kantor modern. Produk ini dirancang untuk membantu perusahaan meningkatkan efisiensi operasional dan kolaborasi tim.</p>
                
                <h4>Fitur Utama SmartOffice Suite</h4>
                
                <h5>1. Manajemen Dokumen Cerdas</h5>
                <p>Sistem manajemen dokumen dengan AI yang dapat mengorganisir, menandai, dan merekomendasikan dokumen berdasarkan konten dan konteks pengguna.</p>
                
                <h5>2. Kolaborasi Real-time</h5>
                <p>Platform kolaborasi yang memungkinkan tim bekerja bersama pada dokumen, spreadsheet, dan presentasi secara real-time dengan fitur komentar dan version control.</p>
                
                <h5>3. Manajemen Proyek Terintegrasi</h5>
                <p>Tools manajemen proyek yang terintegrasi dengan kalender, task assignment, dan tracking progress untuk memastikan proyek berjalan sesuai jadwal.</p>
            `
        }
    };
    
    const article = articles[articleId];
    if (article) {
        document.getElementById('article-title').textContent = article.title;
        document.getElementById('article-image').src = article.image;
        document.getElementById('article-image').alt = article.title;
        document.getElementById('article-content').innerHTML = article.content;
    }
});