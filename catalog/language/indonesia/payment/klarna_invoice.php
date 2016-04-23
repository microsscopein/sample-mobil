<?php
// Text
$_['text_title']				= 'Faktur Klarna - Bayar dalam waktu 14 hari';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna Faktur memerlukan beberapa informasi tambahan sebelum mereka dapat memproses pesanan Anda.';
$_['text_male']					= 'Pria';
$_['text_female']				= 'Wanita';
$_['text_year']					= 'Tahun';
$_['text_month']				= 'Bulan';
$_['text_day']					= 'Hari';
$_['text_comment']				= 'No. Faktur Klarna: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Jenis Kelamin';
$_['entry_pno']					= 'No. Identitas';
$_['entry_dob']					= 'Tanggal Lahir';
$_['entry_phone_no']			= 'No. Telepon';
$_['entry_street']				= 'Jalan';
$_['entry_house_no']			= 'No. Rumah';
$_['entry_house_ext']			= 'Ext. Rumah';
$_['entry_company']				= 'No. Pendaftaran Perusahaan';

// Help
$_['help_pno']					= 'Silahkan masukkan nomor pengaman sosial Anda disini.';
$_['help_phone_no']				= 'Silahkan masukkan nomor telepon.';
$_['help_street']				= 'Harap dicatat bahwa pengiriman hanya dapat terjadi ke alamat yang terdaftar ketika membayar dengan Klarna.';
$_['help_house_no']				= 'Silahkan masukkan nomor rumah.';
$_['help_house_ext']			= 'Harap kirimkan ekstensi rumah Anda disini. E.g. A, B, C, Merah, Biru dsb.';
$_['help_company']				= 'Silahkan Masukkan nomor pendaftaran Perusahaan Anda';

// Error
$_['error_deu_terms']			= 'Anda harus setuju dengan kebijakan privasi Klarna (Datenschutz)';
$_['error_address_match']		= 'Penagihan dan Pengiriman alamat harus sesuai jika Anda ingin menggunakan Pembayaran Klarna';
$_['error_network']				= 'Kesalahan saat menghubungkan ke Klarna. Silakan coba lagi nanti.';