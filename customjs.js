/**
 * Created by HateLogcatError on 6/1/2017.
 */

function onSelectPasanganEventClicked() {
    var idxPasangan = document.getElementById('punyapasangan');
    var layoutPasangan = document.getElementById('layout-pasangan');

    if(idxPasangan.selectedIndex == 0) {
        layoutPasangan.style.display = 'none';
    }
    else {
        layoutPasangan.style.display = 'block';
    }
}

function onSelectPerusahaanEventClicked() {
    var idxPerusahaan = document.getElementById('punyaperusahaan');
    var layoutPerusahaan = document.getElementById('layout-perusahaan');

    if(idxPerusahaan.selectedIndex == 0) {
        layoutPerusahaan.style.display = 'none';
    }
    else {
        layoutPerusahaan.style.display = 'block';
    }
}

function onSelectPenghasilanEventClicked() {
    var idxPenghasilan = document.getElementById('punyapenghasilan');
    var layoutPenghasilan = document.getElementById('layout-penghasilan');

    if(idxPenghasilan.selectedIndex == 0) {
        layoutPenghasilan.style.display = 'none';
    }
    else {
        layoutPenghasilan.style.display = 'block';
    }
}


function onSelectJaminanEventClicked() {
    var idxjaminan = document.getElementById('punyajaminan');
    var layoutJaminan = document.getElementById('layout-jaminan');

    if(idxjaminan.selectedIndex == 0) {
        layoutJaminan.style.display = 'none';
    }
    else {
        layoutJaminan.style.display = 'block';
    }
}