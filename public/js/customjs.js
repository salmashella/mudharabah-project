/**
 * Created by HateLogcatError on 6/1/2017.
 */

function onSelectPasanganEventClicked() {
    var idxPasangan = document.getElementById('punyapasangan');
    var layoutPasangan = document.getElementById('layout-pasangan');

    if(idxPasangan.value == 2) {
        layoutPasangan.style.display = 'none';
    }
    else {
        layoutPasangan.style.display = 'block';
    }
}

function onSelectPerusahaanEventClicked() {
    var idxPerusahaan = document.getElementById('punyaperusahaan');
    var layoutPerusahaan = document.getElementById('layout-perusahaan');

    if(idxPerusahaan.value == 2) {
        layoutPerusahaan.style.display = 'none';
    }
    else {
        layoutPerusahaan.style.display = 'block';
    }
}

function onSelectPenghasilanEventClicked() {
    var idxPenghasilan = document.getElementById('punyapenghasilan');
    var layoutPenghasilan = document.getElementById('layout-penghasilan');

    if(idxPenghasilan.value == 2) {
        layoutPenghasilan.style.display = 'none';
    }
    else {
        layoutPenghasilan.style.display = 'block';
    }
}


function onSelectJaminanEventClicked() {
    var idxjaminan = document.getElementById('punyajaminan');
    var layoutJaminan = document.getElementById('layout-jaminan');

    if(idxjaminan.value == 0) {
        layoutJaminan.style.display = 'none';
    }
    else {
        layoutJaminan.style.display = 'block';
    }
}