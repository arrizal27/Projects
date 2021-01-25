package com.me.nusantara.model;

import com.me.nusantara.R;

import java.util.ArrayList;

public class PulauData {
    private static String[] namaPulau = {
            "Sumatera",
            "Jawa",
            "Kalimantan",
            "Sulawesi",
            "Papua"
    };
    private static String[] jmlProvinsi = {
            "10",
            "6",
            "5",
            "6",
            "2"
    };
    private static String[] detail = {
            "Pulau Sumatera merupakan pulau terbesar ke 3 di Indonesia namun merupakan pulau dengan jumlah penduduk terbanyak ke 2 di Indonesia. Artinya, kepadatan penduduk pulau sumatera relatif lebih tinggi dibandingkan dengan pulau-pulau besar lain di Indonesia, kecuali pulau Jawa.",
            "Jawa merupakan pulau terbesar ke 5 di Indonesia namun memiliki jumlah penduduk terbanyak. Oleh karena itu, Jawa menjadi salah satu pulau besar yang paling padat penduduk di Indonesia dan bahkan di seluruh dunia. Pulau ini merupakan rumah bagi hampir 60% total penduduk Indonesia.",
            "Pulau kalimantan merupakan pulau terbesar kedua di Indonesia, dibawah pulau Papua. Namun, jika kita hanya menghitung luas wilayah yang ada di dalam administrasi Indonesia, maka Kalimantan adalah pulau terbesar di Indonesia.",
            "Pulau Sulawesi merupakan pulau yang berada di bagian Timur Indonesia. Dengan luas 174.000 km2, Sulawesi merupakan pulau terbesar ke 4 di Indonesia.\n" +
                    "\n" +
                    "Pulau ini merupakan salah satu daerah yang cukup penting dalam sejarah kolonialisme Indonesia. Karena memiliki banyak rempah dan dekat dengan kepulauan Maluku yang menjadi sentra rempah Asia Tenggara.",
            "Dengan luas sekitar 786.000 km2, pulau Papua merupakan pulau terbesar yang ada di wilayah Indonesia. Namun, tidak semua wilayah pulau papua berada di wilayah administrasi Indonesia, ada pula yang masuk kedalam wilayah administrasi Papua Nugini."
    };
    private static String[] luas = {
            "443.065 km2",
            "126.700 km2",
            "743.330 km2",
            "174.600 km2",
            "786.000 km2"
    };
    private static String[] kotaBesar = {
            "Medan, Palembang, Batam, Pekanbaru",
            "DKI Jakarta, Surabaya, Bandung, Bekasi, Tangerang",
            "Pontianak, Samarinda, Palangkaraya, Bannjarmasin",
            "Makassar, Kendari, Palu, Manado",
            "Jayapura, Jayawijaya, Keerom"
    };
    private static int[] gambarPulau={
            R.drawable.sumatra,
            R.drawable.jawa,
            R.drawable.kalimantan,
            R.drawable.sulawesi,
            R.drawable.papua
    };
    public static ArrayList<Pulau> getListData(){
        ArrayList<Pulau> list = new ArrayList<>();
        for (int pos = 0 ; pos<namaPulau.length; pos++){
            Pulau pulau = new Pulau();
            pulau.setPhoto(gambarPulau[pos]);
            pulau.setNama(namaPulau[pos]);
            pulau.setDetail(detail[pos]);
            pulau.setLuas(luas[pos]);
            pulau.setProvinsi(jmlProvinsi[pos]);
            pulau.setKota_besar(kotaBesar[pos]);
            list.add(pulau);
        }
        return list;
    }
}
