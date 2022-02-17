package com.me.nusantara;

import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.Toolbar;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.content.Intent;
import android.database.DatabaseErrorHandler;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuInflater;

import com.me.nusantara.adapter.ListPulauAdapter;
import com.me.nusantara.model.Pulau;
import com.me.nusantara.model.PulauData;

import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {
    private RecyclerView rvPulau;
    private ArrayList<Pulau> list = new ArrayList<>();

    @Override
    protected void onCreate( Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        rvPulau = findViewById(R.id.rv_pulau);
        rvPulau.setHasFixedSize(true);

        list.addAll(PulauData.getListData());
        showRecyclerList();
    }
    private void showRecyclerList(){
        rvPulau.setLayoutManager(new LinearLayoutManager(this));
        ListPulauAdapter listPulauAdapter = new ListPulauAdapter(list);
        rvPulau.setAdapter(listPulauAdapter);

        listPulauAdapter.setOnItemClickCallback(data -> {
            showSelectedIsland(data);
        });
    }
    private void showSelectedIsland(Pulau pulau){
        Intent intent = new Intent(MainActivity.this,DetailActivity.class);
        intent.putExtra("photo",pulau.getPhoto());
        intent.putExtra(DetailActivity.EXTRA_NAME,pulau.getNama());
        intent.putExtra(DetailActivity.EXTRA_DETAIL,pulau.getDetail());
        intent.putExtra(DetailActivity.EXTRA_KOTA,pulau.getKota_besar());
        intent.putExtra(DetailActivity.EXTRA_LUAS,pulau.getLuas());
        intent.putExtra(DetailActivity.EXTRA_PROVINSI,pulau.getProvinsi());
        startActivity(intent);
    }

}