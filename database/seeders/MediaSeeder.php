<?php

namespace Database\Seeders;

use App\Models\Media;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['title' => 'Fullmetal Alchemist: Brotherhood', 'category' => 'Anime', 'genres' => ['action', 'adventure'], 'rating' => 9.1, 'unit_count' => 64, 'synopsis' => 'Dua bersaudara mencari Philosopher\'s Stone untuk memulihkan tubuh mereka.'],
            ['title' => 'Death Note', 'category' => 'Anime', 'genres' => ['psychological', 'supernatural'], 'rating' => 8.6, 'unit_count' => 37, 'synopsis' => 'Siswa jenius menemukan buku yang bisa membunuh siapa pun.'],
            ['title' => 'Your Lie in April', 'category' => 'Anime', 'genres' => ['drama', 'romance'], 'rating' => 8.7, 'unit_count' => 22, 'synopsis' => 'Pianis muda kembali bermusik berkat seorang violinis.'],
            ['title' => 'Haikyuu!!', 'category' => 'Anime', 'genres' => ['sports', 'drama'], 'rating' => 8.7, 'unit_count' => 25, 'synopsis' => 'Perjalanan tim voli SMA Karasuno.'],
            ['title' => 'One Piece', 'category' => 'Manga', 'genres' => ['action', 'adventure'], 'rating' => 9.2, 'unit_count' => 1100, 'synopsis' => 'Petualangan Luffy mencari harta karun One Piece.'],
            ['title' => 'Solo Leveling', 'category' => 'Novel', 'genres' => ['action', 'supernatural'], 'rating' => 8.5, 'unit_count' => 270, 'synopsis' => 'Pemburu terlemah mendapat kekuatan untuk naik level tanpa batas.'],
        ];

        foreach ($items as $item) {
            Media::create($item);
        }
    }
}
