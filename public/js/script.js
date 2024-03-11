// Data dummy untuk contoh
const produkTerlaris = [
    { nama: 'Produk A', terjual: 100 },
    { nama: 'Produk B', terjual: 80 },
    { nama: 'Produk C', terjual: 60 },
    { nama: 'Produk D', terjual: 50 },
    { nama: 'Produk E', terjual: 40 },
];

// Fungsi untuk memuat data ringkasan penjualan
function loadRingkasanPenjualan() {
    const totalPenjualan = 25000000;
    const totalPesanan = 150;

    document.querySelector('.total-penjualan').textContent = `Rp ${totalPenjualan.toLocaleString()}`;
    document.querySelector('.total-pesanan').textContent = totalPesanan;
}

// Fungsi untuk memuat data produk terlaris
function loadProdukTerlaris() {
    const produkTerlarisEl = document.querySelector('.produk-terlaris');
    produkTerlaris.forEach(produk => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${produk.nama}</td>
            <td>${produk.terjual}</td>
        `;
        produkTerlarisEl.appendChild(row);
    });
}

// Memuat data saat halaman dimuat
window.onload = function() {
    loadRingkasanPenjualan();
    loadProdukTerlaris();
};