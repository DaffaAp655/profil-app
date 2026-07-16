<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MahasiswaTest extends TestCase
{
    use RefreshDatabase;

    public function test_mahasiswas_index_page_is_displayed_for_authenticated_users(): void
    {
        $user = User::factory()->create();

        // Create some mahasiswa records
        Mahasiswa::create([
            'nama' => 'John Doe',
            'nim' => '12345678',
            'prodi' => 'Informatika',
            'angkatan' => 2022,
            'ipk' => 3.5,
            'email' => 'john@example.com',
            'user_id' => $user->id,
        ]);

        $response = $this
            ->actingAs($user)
            ->get(route('mahasiswas.index'));

        $response->assertOk();
    }
}
