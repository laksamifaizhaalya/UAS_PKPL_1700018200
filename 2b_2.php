<?php

namespace Tests\Feature\Auth;

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DatabaseDosenTest extends TestCase
{
    use DatabaseTransactions;

    // Function untuk testing insert data dosen ke dalam tabel dosen
    public function test_insert_into_tabel_dosen()
    {
        $dosen = Dosen::create([
            'nipy' => '006',
            'nama' => 'Drs. Tedy Setiadi, M.T.',
            'jabfung' => 'L',
            'email_dosen' => '006@tif.uad.ac.id'
        ]);

        $this->assertEquals('006', $dosen->nipy);
        $this->assertEquals('Tedy Setiadi\'in, Drs.,M.T.', $dosen->nama);
        $this->assertEquals('L', $dosen->jabfung);
        $this->assertEquals('006@tif.uad.ac.id', $dosen->email_dosen);
        
    }
}
