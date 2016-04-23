<?php

$_['heading_title'] = 'Profiles';

$_['button_insert'] = 'Tambah';
$_['button_copy'] = 'Copy';
$_['button_delete'] = 'Hapus';
$_['button_remove'] = 'Hapus';

$_['text_no_results'] = 'Tidak ada hasil';
$_['text_remove'] = 'Hapus';
$_['text_edit'] = 'Edit';
$_['text_enabled'] = 'Aktif';
$_['text_disabled'] = 'Nonaktif';
$_['text_success'] = 'Profil berhasil ditambahkan';

$_['text_day'] = 'Hari';
$_['text_week'] = 'Minggu';
$_['text_semi_month'] = 'Setengah Bulan';
$_['text_month'] = 'Bulan';
$_['text_year'] = 'Tahun';

$_['entry_name'] = 'Nama:';
$_['entry_sort_order'] = 'Urutan:';
$_['entry_price'] = 'Harga:';
$_['entry_duration'] = 'Durasi:';
$_['entry_status'] = 'Status:';
$_['entry_cycle'] = 'Siklus:';
$_['entry_frequency'] = 'Frekuensi:';
$_['entry_trial_price'] = 'Harga percobaan:';
$_['entry_trial_duration'] = 'Durasi percobaan:';
$_['entry_trial_status'] = 'Status percobaan:';
$_['entry_trial_cycle'] = 'Siklus percobaan:';
$_['entry_trial_frequency'] = 'Frekuensi percobaan:';

$_['column_name'] = 'Nama';
$_['column_sort_order'] = 'Urutan';
$_['column_action'] = 'Aksi';

$_['error_warning'] = 'Peringatan: Silakan periksa form dengan seksama untuk kesalahan!';
$_['error_permission'] = 'Peringatan: Anda tidak memiliki izin untuk mengubah profil!';
$_['error_name'] = 'Nama Profil  harus lebih besar dari 3 dan kurang dari 255 karakter!';

$_['text_recurring_help']    = 'Jumlah Berulang dihitung dengan frekuensi dan siklus. <br />Sebagai contoh jika Anda menggunakan frekuensi "minggu" dan siklus "2", maka pengguna akan ditagih setiap 2 minggu. <br />Durasi adalah jumlah kali pengguna akan melakukan pembayaran, set ini ke 0 jika Anda ingin pembayaran sampai mereka dibatalkan.';
?><?php
// Heading
$_['heading_title']			= 'Recurring Profiles';

// Text
$_['text_success']          = 'Success: You have modified recurring profiles!';
$_['text_list']             = 'Recurring Profile List';
$_['text_add']              = 'Add Recurring Profile';
$_['text_edit']             = 'Edit Recurring Profile';
$_['text_day']				= 'Day';
$_['text_week']				= 'Week';
$_['text_semi_month']		= 'Semi Month';
$_['text_month']			= 'Month';
$_['text_year']				= 'Year';
$_['text_recurring']	    = '<p><i class="fa fa-info-circle"></i> Recurring amounts are calculated by the frequency and cycles.</p><p>For example if you use a frequency of "week" and a cycle of "2", then the user will be billed every 2 weeks.</p><p>The duration is the number of times the user will make a payment, set this to 0 if you want payments until they are cancelled.</p>';
$_['text_profile']			= 'Recurring Profile';
$_['text_trial']			= 'Trial Profile';

// Entry
$_['entry_name']			= 'Name';
$_['entry_price']			= 'Price';
$_['entry_duration']		= 'Duration';
$_['entry_cycle']			= 'Cycle';
$_['entry_frequency']		= 'Frequency';
$_['entry_trial_price']		= 'Trial price';
$_['entry_trial_duration']	= 'Trial duration';
$_['entry_trial_status']	= 'Trial status';
$_['entry_trial_cycle']	    = 'Trial cycle';
$_['entry_trial_frequency']	= 'Trial frequency';
$_['entry_status']			= 'Status';
$_['entry_sort_order']		= 'Sort Order';

// Column
$_['column_name']			= 'Name';
$_['column_sort_order']	    = 'Sort Order';
$_['column_action']         = 'Action';

// Error
$_['error_warning']         = 'Warning: Please check the form carefully for errors!';
$_['error_permission']		= 'Warning: You do not have permission to modify recurring profiles!';
$_['error_name']			= 'Profile Name must be greater than 3 and less than 255 characters!';
$_['error_product']			= 'Warning: This recurring profile cannot be deleted as it is currently assigned to %s products!';