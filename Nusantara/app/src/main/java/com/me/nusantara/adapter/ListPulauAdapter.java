package com.me.nusantara.adapter;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.me.nusantara.R;
import com.me.nusantara.model.Pulau;

import java.util.ArrayList;
import com.bumptech.glide.Glide;
import com.bumptech.glide.request.RequestOptions;

public class ListPulauAdapter extends RecyclerView.Adapter<ListPulauAdapter.ListViewHolder> {
    private ArrayList<Pulau> listPulau;
    private OnItemClickCallback onItemClickCallback;

    public ListPulauAdapter(ArrayList<Pulau> list) {
        this.listPulau = list;
    }

    public void setOnItemClickCallback(OnItemClickCallback onItemClickCallback){
        this.onItemClickCallback= onItemClickCallback;
    }
    @NonNull
    @Override
    public ListViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        View view = LayoutInflater.from(parent.getContext()).inflate(R.layout.row_item,parent,false);
        return new ListViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull ListPulauAdapter.ListViewHolder holder, int position) {
        Pulau pulau =listPulau.get(position);
        Glide.with(holder.itemView.getContext())
                .load(pulau.getPhoto())
                .apply(new RequestOptions().override(127,135))
                .into(holder.imgPhoto);
        holder.tvName.setText(pulau.getNama());
        holder.tvDetail.setText(pulau.getDetail());

        holder.itemView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                onItemClickCallback.onItemClicked(listPulau.get(holder.getAdapterPosition()));
            }
        });
    }

    @Override
    public int getItemCount() {
        return listPulau.size();
    }

    public class ListViewHolder extends RecyclerView.ViewHolder{
        ImageView imgPhoto;
        TextView tvName,tvDetail;

        public ListViewHolder(@NonNull View itemView){
        super(itemView);
        imgPhoto = itemView.findViewById(R.id.img_item_photo);
        tvDetail = itemView.findViewById(R.id.tv_item_detail);
        tvName = itemView.findViewById(R.id.tv_item_name);
        }
    }
    public interface OnItemClickCallback {
        void onItemClicked(Pulau data);
    }
}
