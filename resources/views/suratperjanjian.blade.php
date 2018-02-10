<div class="content-top">
    <div class="panel-footer">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-4">

                <button type="button" class="btn-success btn" onclick="printDiv('div-print')" >Print Halaman</button>

                <a href="/home" class="btn-default btn">Cancel</a>
            </div>
        </div>
    </div>

    <center>

    </center>
    <br><br><br>
    <div class="col-md-12 ">
        <div id="div-print">
            <div class="surat" style="margin: 20px">


                <div class="header-surat">
                    <center>
                        <h1><b>Surat Kontrak Akad</b></h1>
                        <p><b>Akad Pembiayaan Mudharabah</b></p>
                        <p><b>BMT Prima Syariah</b></p>
                        <p>Nomor Surat : BMT/Prima/Mudharabah/{{ $tahun }}/{{ $bulan }}/{{ $Id_Pembiayaan }}</p>
                    </center>
                    <hr style="border-color: #000000">
                </div>
                <div class="body-surat">
                    <div class="pengantar-header">
                        <br>
                        <center>
                            <p style="margin-left: 100px; margin-right: 100px">
                                <i>
                                    "Dan Aku tidak menciptakan jin dan manusia melainkan supaya mereka menyembah-Ku.”
                                    (QS. Adz-Dzaariyaat: 56)
                                </i>
                            </p>
                            <br>
                            <p style="margin-left: 100px; margin-right: 100px">
                                <i>
                                    “…Dan tolong-menolonglah kamu dalam (mengerjakan kebajikan dan takwa, dan jangan tolong-menolong dalam berbuat dosa dan pelanggaran. Dan bertakwalah kamu kepada Allah, sesungguhnya Allah amat berat siksa-Nya.”
                                    (QS. Al-Maa-idah: 2)
                                </i>
                            </p>
                            <br>
                            <p style="margin-left: 100px; margin-right: 100px">
                                <i>
                                    “…Berlaku adillah, karena adil itu lebih dekat kepada takwa. Dan bertakwalah kepada Allah, sesungguhnya Allah Maha Mengetahui apa yang kamu kerjakan.”
                                    (QS. Al-Maaidah: 8)
                                </i>
                            </p>
                            <br>
                        </center>
                        <br>
                        <p style="text-indent: 30px; text-align: justify">
                            Dengan memohon petunjuk dan restu dari Allah SWT, maka akad Mudharabah ini ditandatangani pada hari ini <span class=". . ."></span> bertempat di
                            kantor pusat BMT Prima Syariah yang berlokasi di Jl. Kalisari III, RT.3/RW.3, Kalisari, Pasarebo, Jakarta Selatan oleh para pihak sebagai berikut :
                        </p>
                    </div>
                    <div class="pihak-pertama" style="margin-left: 150px">

                        <table style="width: 100%" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td width="200px">Nama</td>
                                <td>: {{ $datanasabah->Nama }}</td>
                            </tr>
                            <tr>
                                <td>Tempat, tanggal lahir</td>
                                <td>: {{ $datanasabah->Tempat_Lahir . ', ' . $datanasabah->Tanggal_Lahir }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>: {{ $datanasabah->Alamat }}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>: {{ $datanasabah->Pekerjaan }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <div class="pengenal-pihak-pertama">
                        <p style="text-indent: 30px; text-align: justify">
                            Pihak tersebut untuk diri sendiri untuk melakukan pembiayaan dengan tujuan {{ $tujuan_akad }}. Selanjutnya, disebut sebagai PIHAK PERTAMA atau Nasabah atau Mudharib.
                        </p>
                    </div>
                    <div class="pihak-kedua" style="margin-left: 150px">
                        <table style="width: 100%" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td width="200px">Nama</td>
                                <td>: {{ $datapegawai->Nama_Pegawai }}</td>
                            </tr>
                            <tr>
                                <td>Tempat, tanggal lahir</td>
                                <td>: {{ $datapegawai->Tempat_Lahir . ', ' . $datapegawai->Tanggal_Lahir }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>: Jl. Kalisari III, RT.3/RW.3, Kalisari, Pasarebo, Jakarta Selatan </td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>: CSO</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <div class="pengenal-pihak-kedua">
                        <p style="text-indent: 30px; text-align: justify">
                            Pihak tersebut sebagai wakil dari PT. BMT Prima Syariah yang beralamatkan di
                            Jalan Margonda no. 28 Depok. Selanjutnya disebut sebagai PIHAK KEDUA atau Pihak BMT atau Shahibul Maal.
                        </p>
                    </div>
                    <br>
                    <div class="keterangan-akad" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                        <p>
                            Para pihak terlebih dahulu menerangkan hal hal sebagai berikut :
                        </p>
                        <div style="margin-left: 30px">
                            <ol>
                                <li>
                                    <p>
                                        Bahwa PIHAK PERTAMA telah mengajukan permohonan Pembiayaan Mudharabah untuk menjalankan usahanya kepada PIHAK KEDUA
                                        untuk memperoleh dana usaha, dan selanjutnya PIHAK KEDUA menyetujui, dan dengan Akad ini mengikatkan diri untuk menyediakan                                fasilitas Pembiayaan Mudharabah, dimana hasil dari pendapatan atau keuntungan usaha kelak akan dibagi antara Mudharib dan
                                        Shahibul Maal berdasarkan prinsip bagi hasil. Dan dengan ini, Mudharib menyetujui melakukan pembiayaan mudharabah sesuai dengan                            ketentuan - ketentuan sebagaimana dinyatakan dalam Akad ini.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Bahwa, terhadap permohonan Nasabah tersebut Bank telah menyatakan persetu-juannya, baik terhadap kegiatan usaha yang akan                                  dijalankan Nasabah maupun terhadap pembagian pendapatan/keuntungan berdasarkan prinsip bagi hasilnya (syirkah) .
                                    <div style="margin-left: 50px">
                                            <li>
                                                <p>Penyerahan Dana tersebut dilakukan oleh PIHAK KEDUA langsung kepada PIHAK PERTAMA.</p>
                                            </li>

                                    </div>
                                    <br>
                                    </p>
                                </li>
                            </ol>
                        </div>
                        <div>
                            Selanjutnya kedua belah pihak sepakat menuangkan perjanjian ini dalam Perjanjian Pembiayaan Mudharabah (selanjutnya                                        disebut "Perjanjian") dengan syarat-syarat serta ketentuan-ketentuan sebagai berikut:
                        </div>
                    </div>
                    <br><br>
                    <div class="pasal-akad">
                        <div class="pasal-1" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                            <center>
                                <h3><b>BAB I</b></h3>
                                <p><b>Ketentuan Umum</b></p>
                            </center>
                            <ol>
                                <li>
                                    <b>Akad</b> : Perjanjian yang termaktub dalam akta ini berikut semua perubahan dan/atau
                                    penambahan dan/atau pembaharuannya yang mungkin dibuat dikemudian hari, baik dengan akta notaris maupun secara
                                    dibawah tangan.
                                </li>
                                <li>
                                    <b>Mudharabah</b> : Akad kerjasama antara Bank selaku pemilik modal dengan Mudharib (Nasabah) yang mempunyai keahlian atau                                 keterampilan untuk mengelola suatu usaha yang pro-duktif dan halal. Hasil keuntungan dari penggunaan dana tersebut dibagi bersama                          berdasarkan nisbah yang disepakati.
                                </li>
                                <li>
                                    <b>Bagi Hasil / Syirkah</b> : Pembagian atas pendapatan/keuntungan antara Nasabah dan Bank yang ditetap-kan berdasarkan
                                    kesepakatan antara Nasabah dengan Bank.
                                </li>
                                <li>
                                    <b>Nisbah</b> : Bagian dari hasil pendapatan/keuntungan yang menjadi hak Nasabah dan Bank yang ditetapkan berdasarkan kesepakatan                          antara Nasabah dengan Bank.
                                </li>
                                <li>
                                    <b>Pendapatan</b> : Adalah sejumlah uang sebagai keuntungan PIHAK KEDUA atas terjadinya fasilitas Ijarah
                                    Muntahiyah Bittamlik yang ditetapkan dalam Akad.
                                </li>
                                <li>
                                    <b>Harga Sewa</b> : Seluruh penerimaan yang diperoleh dari hasil usaha yang dijalankan oleh Na-sabah dengan menggunakan modal yang                         disediakan oleh Bank sesuai dengan Perjanjian ini.
                                </li>
                                <li>
                                    <b>Keuntungan</b> : Pendapatan sebagaimana dimaksud dalam butir 8 Pasal 1 Perjanjian ini diku-rangi biaya-biaya sebelum dipotong                            pajak.

                                </li>
                            </ol>
                        </div>
                        <br><br>
                        <div class="pasal-2" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                            <center>
                                <h3><b>BAB II</b></h3>
                                <p><b>Pokok-Pokok Akad</b></p>
                            </center>
                            <ol>
                                <li>
                                    PIHAK KEDUA berjanji dan dengan ini mengikatkan diri untuk menyediakan Pembiayaan Mudharabah kepada PIHAK PERTAMA yang akan                                digunakan untuk memperoleh dana untuk {{ 'pembiayaan yang digunakan ' . $tujuan_akad }}
                                </li>
                                <li>
                                    PIHAK PERTAMA berjanji serta dengan ini mengikatkan diri untuk menerima Pembiayaan Mudharabah tersebut dari dan karenanya memiliki                         hutang kepada PIHAK KEDUA sejumlah  sebesar Rp. {{ number_format($Besar_Pembiayaan) }} secara bertahap sesuai dengan jangka waktu yang telah ditetapkan sebelumnya, yaitu berlangsung selama {{$datapembiayaan->Jangka_Waktu}} bulan.
                                </li>
                            </ol>
                        </div>
                        <br><br>
                        <div class="pasal-3" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                            <center>
                                <h3><b>BAB III</b></h3>
                                <p><b>Penyerahan Pembiayaan</b></p>
                            </center>
                            <p>
                                PIHAK PERTAMA bertanggung jawab untuk memeriksa dan meneliti kondisi Usaha dari PIHAK KEDUA, termasuk terhadap sahnya dokumen-dokumen                      atau surat-surat lainnya.
                            </p>
                        </div>
                        <br><br>
                        <div class="pasal-4" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                            <center>
                                <h3><b>BAB IV</b></h3>
                                <p><b>Kesepakatan Bagi Hasil</b></p>
                            </center>
                            <ol>
                                <li>
                                    Nasabah dan Bank sepakat, dan dengan ini mengikatkan diri satu terhadap yang lain, bahwa Nisbah dari masing-masing pihak, yaitu:
                                    <ol type="a">
                                        <li>{{$datapembiayaan -> Nisbah_Nasabah}} % dari pendapatan atau keuntungan untuk Nasabah.</li>
                                        <li>{{$datapembiayaan -> Nisbah_BMT}} % dari pendapatan atau keuntungan untuk BMT.</li>
                                        <li>Nasabah dan Bank juga sepakat, dan dengan ini saling mengikatkan diri satu terhadap yang lain</li>
                                        <li>Bank berjanji dan dengan ini mengikatkan diri untuk menanggung kerugian yang tim-bul dalam pelaksanaan Perjanjian ini, kecuali apabila kerugian tersebut terjadi karena ketidakjujuran dan/atau kelalaian Nasabah sebagaimana yang diatur dalam pasal 10, dan/atau pelanggaran yang dilakukan Nasabah atas syarat-syarat sebagaimana diatur dalam Pasal 11 Perjanjian ini..</li>
                                        <li>Bank berjanji dan dengan ini mengikatkan diri untuk menanggung kerugian yang tim-bul dalam pelaksanaan Perjanjian ini, kecuali apabila kerugian tersebut terjadi karena ketidakjujuran dan/atau kelalaian Nasabah sebagaimana yang diatur dalam pasal 10,dan/atau pelanggaran yang dilakukan Nasabah atas syarat-syarat sebagaimana diatur dalam Pasal 11 Perjanjian ini.</li>
                                        <li>Bank baru akan menerima dan mengakui terjadinya kerugian tersebut, apabila Bank te-lah menerima dan menilai kembali segala perhitungan yang dibuat dan disampaikan oleh Nasabah kepada Bank, dan Bank telah menyerahkan hasil penilaiannya tersebut secara                            tertulis kepada Nasabah.</li>
                                        <li>Nasabah dan Bank berjanji dan dengan ini saling mengikatkan diri satu terhadap yang lain, bahwa Bank hanya akan menanggung segala kerugian, maksimum sebesar pembiayaan yang diberikan kepada Nasabah tersebut pada Pasal 2.</li>
                                    </ol>

\

                            </ol>
                        </div>
                        <br><br>
                        <div class="pasal-5" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                            <center>
                                <h3><b>BAB V</b></h3>
                                <p><b>Kewajiban dan Penyerahan Jaminan</b></p>
                            </center>
                            <ol>
                                <li>
                                    Berkaitan dengan Akad ini, selama pembiayaan belum dilunasi oleh PIHAK PERTAMA, maka PIHAK PERTAMA dengan ini mengaku
                                    memiliki Kewajiban kepada PIHAK KEDUA sebesar harga Sewa atau sisa Harga Sewa yang belum dibayar lunas oleh PIHAK KEDUA.
                                </li>
                                <li>
                                    Guna menjamin ketertiban pembayaran atau pelunasan kewajiban, tepat pada waktu yang telah disepakati oleh PARA PIHAK berdasarkan                           Akad ini, maka PIHAK PERTAMA berjanji akan membuat dan mendatangani pengikatan jaminan dan menyerahkan bukti kepemilikan barang                            jaminan kepada PIHAK KEDUA sebagaimana terlampir pada Akad ini.
                                </li>
                                <li>
                                    PIHAK PERTAMA dilarang merubah bentuk dan fungsi barang tanpa persetujuan tertulis dari PIHAK KEDUA.
                                </li>
                                <li>
                                    PIHAK PERTAMA dilarang mengalihkan dengan cara apapun, menggadaikan, atau menyewakan barang jaminan tersebut sebaik-baiknya dan memperbaiki segala kerusakan
                                    atas biaya PIHAK KEDUA.
                                </li>
                                <li>
                                    PIHAK PERTAMA setuju untuk mengikatkan diri untuk setiap waktu menjaga dan memelihara barang jaminan tersebut sebaik-baiknya
                                    dan memperbaiki segala kerusakan atas biaya PIHAK PERTAMA.
                                </li>
                                <li>
                                    Segala resiko hilang atau musnahnya barang jaminan karena sebab apapun juga sepenuhnya menjadi tanggung jawab PIHAK PERTAMA,
                                    sehingga tidak meniadakan, mengurangi atau menunda kewajiban PIHAK PERTAMA sebagaimana ditentukan dalam Akad ini.
                                </li>
                            </ol>
                        </div>
                        <br><br>
                        <div class="pasal-6" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                            <center>
                                <h3><b>BAB VI</b></h3>
                                <p><b>Tempat Pembayaran</b></p>
                            </center>
                            <ol>
                                <li>
                                    Setiap pembayaran angsuran atau pelunasan kewajiban oleh PIHAK PERTAMA kepada PIHAK KEDUA di lakukan di kantor PIHAK KEDUA atau ditempat lain yang ditunjuk oleh PIHAK KEDUA.
                                </li>

                            </ol>
                        </div>
                        <br><br>

                        <div class="pasal-7" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                            <center>
                                <h3><b>BAB VII</b></h3>
                                <p><b>Akibat Cedera Janji</b></p>
                            </center>
                            <ol>
                                <li>
                                    PIHAK KEDUA berhak menagih pembayaran dari PIHAK PERTAMA, atas sebagian sisa kewajiban apabila PIHAK PERTAMA tidak melaksanakan kewajiban pembayaran atau pelunasan kewajiban tepat pada waktu yang diperjanjikan dalam pasal 4.
                                </li>
                                <li>
                                    PIHAK KEDUA berhak menagih pembayaran dari PIHAK PERTAMA, atas seluruh sisa kewajiban dengan lewatnya waktu untuk dibayar sekaligus lunas, tanpa diperlukan adanya surat pemberitahuan, surat teguran, atau surat lainnya. Apabila terjadi salah satu atau lebih keadaan sebagai berikut :
                                    <div style="margin-left: 30px">
                                        <ol type="a">
                                            <li>
                                                Dokumen atau keterangan yang dimasukkan ke dalam dokumen yang diserahkan PIHAK PERTAMA kepada PIHAK KEDUA sehubungan dengan Akad ini ternyata palsu, tidak sah, atau tidak benar.
                                            </li>
                                            <li>
                                                PIHAK PERTAMA tidak memenuhi dan atau melanggar salah satu ketentuan atau lebih sebagaimana ketentuan-ketentuan yang tercantum dalam Akad ini.
                                            </li>
                                            <li>
                                                Apabila karena sesuatu sebab, seluruh atau sebagian Akta Jaminan dinyatakan batal atau dibatalkan berdasarkan Putusan Pengadilan Negeri atau Badan Arbitrase Syariah.
                                            </li>
                                            <li>
                                                PIHAK PERTAMA menjadi pemboros, pemabuk, atau dihukum berdasarkan putusan Pengadilan yang telah berkekuatan hukum tetap karena tindak pidana yang dilakukannya.
                                            </li>
                                        </ol>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <br><br>
                        <div class="pasal-8" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                            <center>
                                <h3><b>BAB VII</b></h3>
                                <p><b>Peringatan dan Akibat Cedera Janji</b></p>
                            </center>
                            <ol>
                                <li>
                                    PIHAK KEDUA berhak melakukan teguran berupa surat peringatan terhadap PIHAK PERTAMA apabila PIHAK PERTAMA melanggar ketentuan dalam Akad ini.
                                </li>
                                <li>
                                    Surat peringatan sebagaimana dalam ayat 1 pasal ini diberikan tiga kali berturut-turut dalam tenggang waktu tertentu.
                                </li>
                                <li>
                                    Apabila PIHAK PERTAMA tidak mengindahkan teguran sebagaimana dalam ayat 2 pasal ini, maka PIHAK KEDUA berhak menjual barang jaminan sesuai dengan
                                    peraturan yang berlaku, dan uang hasil penjualan tersebut digunakan PIHAK KEDUA untuk membayar atau melunasi kewajiban PIHAK PERTAMA.
                                </li>
                                <li>
                                    Dalam hal hasil penjualam barang jaminan tersebut tidak cukup untuk pelunasan kewajiban, maka PIHAK PERTAMA tetap wajib melunasi sisa kewajiban tersebut.
                                </li>
                            </ol>
                        </div>
                        <br><br>
                        <div class="pasal-9" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                            <center>
                                <h3><b>BAB IX</b></h3>
                                <p><b>Pengawasan atau Pemeriksaan</b></p>
                            </center>
                            <p>PIHAK PERTAMA berjanji akan memberikan izin kepada PIHAK KEDUA, guna melaksanakan pengawasan atau pemeriksaan terhadap Barang maupun                       barang jaminan, serta pembukuan dan catatan setiap saat selama berlangsungnya Akad ini, dan kepada PIHAK KEDUA diberi hak untuk                            mengambil gambar (foto), membuat fotokopi dan atau catatan-catatan yang dianggap perlu.</p>
                        </div>
                        <br><br>
                        <div class="pasal-10" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                            <center>
                                <h3><b>BAB X</b></h3>
                                <p><b>Penyelesaian Perselisihan</b></p>
                            </center>
                            <ol>
                                <li>
                                    Dalam hal terjadi perbedaan pendapat atau penafsiran atas hal-hal yang tercantum di dalam Akad ini atau terjadi perselisihan atau sengketa dalam pelaksanaannya, PARA PIHAK
                                    sepakat untuk menyelesaikannya secara musyawarah untuk mufakat.
                                </li>
                                <li>
                                    Apabila musyawarah untuk mufakat telah diupayakan namun perbedaan pendapat atau penafsiran, perselisihan, atau sengketa tidak dapat diselesaikan oleh PARA PIHAK, maka PARA PIHAK
                                    sepakat untuk menyelesaikannya melalui Pengadilan Negeri yang wilayah hukumnya meliputi kantor PIHAK KEDUA.
                                </li>
                            </ol>
                        </div>
                        <br><br>

                        <br><br>
                        <div class="pasal-11" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                            <center>
                                <h3><b>BAB XI</b></h3>
                                <p><b>Penutup</b></p>
                            </center>
                            <div>
                                <ol>
                                    <li>
                                        Hal-hal yang belum diatur atau belum cukup diatur dalam Akad ini, maka PARA PIHAK akan mengaturnya bersama secara musyawarah untuk mufakat dalam suatu Addendum.
                                    </li>
                                    <li>
                                        Tiap-tiap Addendum, dan lampiran dari Akad ini merupakan satu kesatuan yang tidak terpisahkan dari Akad.
                                    </li>
                                    <li>
                                        PARA PIHAK sepakat dan memahamu, bahwa untuk Akad ini dan segala akibatnya tunduk dan taat pada peraturan perundang-undangan yang berlaku yang tidak bertentangan dengan prinsip syariah.
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="pasal-12" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                            <p>
                                Demikian Akad ini ditandatangani oleh PARA PIHAK setelah seluruh isinya dibaca oleh atau dibacakan kepada PIHAK PERTAMA, sehingga PIHAK PERTAMA dengan ini menyatakan, benar-benar telah memahami seluruh isinya
                                serta menerima segala kewajiban dan hal yang timbul karenanya.
                            </p>
                        </div>
                    </div>
                    <div class="pengesahan" style="margin-top: 300px">
                        <div class="row">
                            <div class="ttd-pihak-pertama" style="float: left; margin-left: 100px">
                                <center>
                                    <p><b>PIHAK PERTAMA</b></p>
                                    <p style="margin-top: 120px">{{ $datanasabah->Nama }}</p>
                                </center>
                            </div>
                            <div class="ttd-pihak-kedua" style="float: right; margin-right: 100px">
                                <center>
                                    <p><b>PIHAK KEDUA</b></p>
                                    <p style="margin-top: 120px">{{ $datapegawai->Nama_Pegawai }}</p>
                                </center>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="row">
                            <div class="ttd-saksi-pertama" style="float: left; margin-left: 100px">
                                <center>
                                    <p><b>SAKSI I</b></p>
                                    <p style="margin-top: 120px"></p>
                                </center>
                            </div>
                            <div class="ttd-saksi-kedua" style="float: right; margin-right: 100px">
                                <center>
                                    <p><b>SAKSI II</b></p>
                                    <p style="margin-top: 120px"></p>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>




</div>
<div class="clearfix"> </div>
</div>

<link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js-->
<script src="/js/jquery-1.11.1.min.js"></script>
<script src="/js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<!--animate-->
<link href="/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="/js/wow.min.js"></script>
<link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<script>
    new WOW().init();
</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="/js/metisMenu.min.js"></script>
<script src="/js/custom.js"></script>
<link href="/css/custom.css" rel="stylesheet">

<script src="/js/jquery.nicescroll.js"></script>
<script src="/js/scripts.js"></script>
<!--//scrolling js-->
<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.js"> </script>

<script src="/js/validator.min.js"></script>
<script src="/js/dataTables/jquery.dataTables.js"></script>
<script src="/js/dataTables/dataTables.bootstrap.js"></script>
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
