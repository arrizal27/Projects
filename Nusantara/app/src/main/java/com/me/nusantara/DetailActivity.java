package com.me.nusantara;

import android.os.Bundle;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

public class DetailActivity extends AppCompatActivity {
    public static final String EXTRA_NAME = "NamaPulau";
    public static final String EXTRA_DETAIL = "DetailPulau";
    public static final String EXTRA_PROVINSI = "Provinsi";
    public static final String EXTRA_LUAS = "LuasPulau";
    public static final String EXTRA_KOTA = "KotaBesar";

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_detail);

        ImageView photo = findViewById(R.id.item_photo);
        TextView name = findViewById(R.id.item_name);
        TextView detail = findViewById(R.id.item_detail);
        TextView provinsi = findViewById(R.id.item_provinsi);
        TextView luas = findViewById(R.id.item_luas);
        TextView kota = findViewById(R.id.item_kota);

        photo.setImageResource(getIntent().getIntExtra("photo",0));
        String nama = getIntent().getStringExtra(EXTRA_NAME);
        name.setText(nama);
        String details = getIntent().getStringExtra(EXTRA_DETAIL);
        detail.setText(details);
        String kotaBesar = getIntent().getStringExtra(EXTRA_KOTA);
        kota.setText(kotaBesar);
        String prov = getIntent().getStringExtra(EXTRA_PROVINSI);
        provinsi.setText(prov);
        String hiroi = getIntent().getStringExtra(EXTRA_LUAS);
        luas.setText(hiroi);
    }
}
